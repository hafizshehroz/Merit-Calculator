<?php
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        
        // Check if the PHPMailer class exists
        // if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            //Load Composer's autoloader
            // require 'vendor/autoload.php';
        // } 
    // if(is_admin())
    // {
        add_action( 'wp_ajax_merit_calculator_ajax_request', 'merit_calculator_ajax_request' );
        add_action( 'wp_ajax_nopriv_merit_calculator_ajax_request', 'merit_calculator_ajax_request' );
        
        function merit_calculatorIp(){
            if(!empty($_SERVER['HTTP_CLIENT_IP'])){
                //ip from share internet
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
                //ip pass from proxy
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }else{
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }
        function save_simple_2025_pdf($pdf,$file_name){
            // Save the PDF file to the uploads directory
            $upload_dir     = wp_upload_dir();
            $upload_folder  = 'solar-tax-max-simple-2025';
            $pdf_path       = $upload_dir['basedir'] . '/' . $upload_folder;
            $pdf_url        = $upload_dir['baseurl'] . '/' . $upload_folder;

            // Create the directory if it doesn't exist
            if (!file_exists($pdf_path)) {
                mkdir($pdf_path, 0755, true);
            }
            
            require_once( ABSPATH . 'wp-admin/includes/file.php' ); // you have to load this file
            global $wp_filesystem;
            WP_Filesystem(); // Initial WP file system

            $pdf = str_replace('data:application/pdf;base64,', '', $pdf);
            $pdf = str_replace(' ', '+', $pdf);
            $data = base64_decode($pdf);
            // $wp_filesystem->put_contents( WP_PLUGIN_DIR . '/solar-tax-max-simple-calculator/pdf-reports/Solar-Tax-Max-simple-Calcultor'.$rand.'-'.$fname.'-'.$lname.'.pdf', $data, 0644 ); // Finally, store the file :D
            $wp_filesystem->put_contents( $pdf_path . '/' . $file_name, $data, 0644 ); // Finally, store the file :D

            // URL to access the file
            $pdf_file_url = $pdf_url . '/' . $file_name;

            return $pdf_file_url;
        }
            // $userIP = merit_calculatorIp();
        function merit_calculator_ajax_request(){
            check_ajax_referer( 'solar-tax-max-simple-ajax-request', 'security' );
            if(!empty($_POST['dataArr'])){
                global $wpdb;
                $userInfo = $_POST['dataArr'][0];
                $pluginPath = plugin_dir_url(__FILE__);
                extract($userInfo);
                // ucfirst($fileName)
	

                $data = [];
                $pdf_url = save_simple_2025_pdf($pdf,$fileName);
                $data['pdf_url'] = $pdf_url;

                $merit_calculator_calc_users = $wpdb->prefix . 'merit_calculator_calc_users';
                $wpdb->insert(
                    $merit_calculator_calc_users, 
                    array( 
                        'ho_fname'          =>  $fname.' '.$lname,
                        'ho_phone'          =>  $phone,
                        'ho_email'          =>  $emailId,
                        'ho_project'        =>  $project,
                        'sp_fname'          =>  $solarProFname.' '.$solarProLname,
                        'sp_phone'          =>  $solarProPhone,
                        'sp_email'          =>  $solarProEmail,
                        'sp_company'        =>  $companyName,
                        'tax_max_pdf'       =>  $pdf_url,
                    ) 
                );
                         
				
                if($homeownerSend == 'true' || $solarProSend == 'true'){
                    
					
                    ////////////////////
                    $apos = "'";
                    $fontFamily = "font-family: Roboto, sans-serif";
                    include('email-template.php');
                    
    //                 $mail = new PHPMailer(true);
                    $from = 'info@solartaxpros.com';  //get_option('admin_email');
                    $fromName = 'Solar Tax Max';
                    $emailSubject = 'Solar Incentive Maximization Report';
                    $info = '';
                    $adminMail = 'info@solartaxpros.com';
                    
                    try {
                        
                        $email = new \SendGrid\Mail\Mail();
                        $email->setFrom($from, $fromName);
                        $email->setSubject($emailSubject);
                        // $email->addTo($adminMail,$fromName);
                        if($homeownerSend == 'true' && $solarProSend == 'true'){
							$tos = [
								$emailId => $fromName,
								$solarProEmail => $fromName
							];
							$email->addTos($tos);
						}else{
							if($homeownerSend == 'true'){
                            	$email->addTo($emailId, $fromName);
							}
							if($solarProSend == 'true'){
// 								if($homeownerSend == 'true'){
// 									$email->addBcc($solarProEmail);
// 								}else{
									$email->addTo($solarProEmail, $fromName);
// 								}       

							}
						}
                        
                        // $email->addTos($tos);
                         
                        // $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
                        $email->addContent( "text/html", $email_html );
                        $file_encoded = base64_encode(file_get_contents($pdf));
                        $email->addAttachment(
                            $file_encoded,
                            "application/pdf",
                            $fileName,
                            "attachment"
                        );
                        $sendgrid = new \SendGrid('');
                        try {
                            $response = $sendgrid->send($email);
                            print $response->statusCode() . "\n";
                            print_r($response->headers());
                            print $response->body() . "\n";
                        } catch (Exception $e) {
                            echo 'Caught exception: '. $e->getMessage() ."\n";
                        }
                    } catch (Exception $e) {
                        $info = "Email could not be sent. -> Mailer Error: {$mail->ErrorInfo}";
                    }
                }
                
                $data['message'] = $info;
                echo json_encode($data);

            }
            wp_die();
        }
            
    //     // wp_die();
    // }


    ?>
