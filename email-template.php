<?php
$pluginPath = plugin_dir_url(__FILE__);
$apos = "'";
$email_html = '
<div style="word-spacing:normal;background-color:#eaf0f6">
    <div style="background-color:#eaf0f6">
      <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px">
         <table align="center" cellpadding="0" cellspacing="0" style="border:none;background:#ffffff;background-color:#ffffff;width:100%">
            <tbody>
               <tr>
                  <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:10px;padding-left:20px;padding-right:20px;padding-top:10px;text-align:center">
                     <div class="m_-4025516212369244409mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                        <table cellpadding="0" cellspacing="0" style="border:none;vertical-align:top" width="100%">
                           <tbody>
                              <tr>
                                 <td align="center" style="font-size:0px;padding:10px 25px;padding-top:20px;padding-right:20px;padding-bottom:10px;padding-left:20px;word-break:break-word">
                                    <table cellpadding="0" cellspacing="0" style="border:none;border-collapse:collapse;border-spacing:0px">
                                       <tbody>
                                          <tr>
                                             <td style="width:200px">
                                                <img alt="Agency Logo limited" height="auto" src="'.$pluginPath.'images/email-logo.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px" width="200">
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td  style="font-size:0px;padding:10px 25px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;word-break:break-word">
                                    <div style="font-family:Ubuntu,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                       <h3>Dear <span>'.$fname.' </span> <span>'.$lname.'</span>:</h3>
                                       <p>Welcome to Solar Tax Pros</p>
                                       <p>We are pleased to provide you with your custom Solar Tax Max<span>&trade;</span> Solar Incentive Maximization Report which outlines your Federal IRS solar incentives based on the information you provided.</p>
                                       <p>Once Solar Tax Pros is properly engaged, we will gather the necessary details to prepare your comprehensive Solar Tax Max<span>&trade;</span> Plan Document which includes completed IRS solar forms and our audit defense assistance plan.</p>
                                       <p><strong>You can use our Solar Tax Max<span>&trade;</span> Plan Document in three ways:</strong></p>
                                       <ul>
                                          <li>Share it with your existing tax preparer so they can file it.</li>
                                          <li>Self-File using TurboTax using our video instruction.</li>
                                          <li>Allow us to file your taxes to ensure accuracy and find other tax saving strategies.</li>
                                       </ul>
                                       <p>If you have questions, please do not hesitate to book a call at</p>
                                       <p><strong> <a href="https://solartaxpros.com/book/">SolarTaxPros.com/book-homeowner</a> </strong></p>
                                       <p>We look forward to helping you achieve substantial tax savings.</p>
                                       <p style="margin: 20px 0;"><b>Sincerely,</b></p>
                                       
                                       <p>The Solar Tax Pros Team</p>
                                       <p>(302) TAX-PROS</p>
                                       <p>(302) 829-7767</p>
                                       <a href="mailto:info@SolarTaxPros.com" target="_blank">info@SolarTaxPros.com</a>
                                       <p><i>America'.$apos.'s Solar Incentive Authority</i></p>
                                       
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
      <div style="margin:0px auto;max-width:600px">
         <table cellpadding="0" cellspacing="0" style="border:none;background:#0D62F1;width:100%">
            <tbody>
               <tr>
                  <td style="width: 12%;"><img alt="Solar IT Logo" height="auto" src="'.$pluginPath.'images/email-logo.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;padding:5px;" ></td>
                  <td style="direction:ltr;font-size:0px;padding: 15px 10px ;text-align:center">
                     <div class="m_-4025516212369244409mj-column-per-100" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%">
                        <table cellpadding="0" cellspacing="0" style="border:none;vertical-align:top" width="100%">
                           <tbody>
                              <tr>
                                 <td style="font-size:0px;padding:10px;word-break:break-word">
                                    <div style="font-family:Ubuntu,Helvetica,Arial,sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000">
                                       <p style="text-align:left"><span style="font-size:10pt;color:#ecf0f1"><em>Copyright © 2024&nbsp; Solar Tax Max<span>&trade;</span>, All rights reserved.</em></span></p>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
                
    </div>
    ';

?>