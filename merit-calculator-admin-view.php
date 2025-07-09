<?php
global $wpdb;

$merit_calculator_users = $wpdb->prefix . 'merit_calculator_users';



if(isset($_GET['deleteUsage'])){
  $d_ip = $_GET['deleteUsage'];
  
  $query = "SELECT * FROM  $merit_calculator_users WHERE tax_max_id  = $d_ip ";
  $pdf_url = $wpdb->get_results($query)[0]->tax_max_pdf;
  $path = parse_url($pdf_url, PHP_URL_PATH); // Remove "http://localhost"
  
  if (substr($_SERVER['REMOTE_ADDR'], 0, 4) == '127.' || $_SERVER['REMOTE_ADDR'] == '::1') {
    // code for localhost here
    $path = str_replace("/wordpress","",$path);
  }
  $pdf_path = get_home_path() . $path;

  // delete user from database
  $wpdb->delete( $merit_calculator_users, array( 'tax_max_id' => $d_ip ) );
  // delete pdf file
  unlink( $pdf_path);
  
}

// $tax_max_calc_settings = $wpdb->prefix . 'tax_max_calc_settings';
// if(isset($_POST['credentialsSave'])){
//   $adminEmail = $_POST['adminEmail'];
//   $adminPass = $_POST['adminPass'];
//   $delete = $wpdb->query("TRUNCATE TABLE `$tax_max_calc_settings`");
//     $wpdb->insert($tax_max_calc_settings, array(
//       'tax_max_calc_email' =>$adminEmail,
//       'tax_max_calc_password' =>$adminPass,
//     ));
// }

$query = "SELECT * FROM  $merit_calculator_users";
$userIp = $wpdb->get_results($query);
?>

<!-- Form --> 
<?php 
// $info = $wpdb->get_row("SELECT * FROM  $tax_max_calc_settings");
?>
<style>
  .wp-core-ui select {
    width: 50px;
}
</style>
<div class="page-wrapper" style="width:98%;margin: 0 auto;">
<!-- <form method='post' action='<?= $_SERVER['REQUEST_URI']; ?>' enctype='multipart/form-data'>
<div style="width: 50%;">
  <input type="text" placeholder="Email" name="adminEmail" class=" mr-1 mb-2 ml-1 form-control" value="<?= $info->tax_max_calc_email?>" >
  <input type="text" placeholder="Password" name="adminPass" class=" mr-1 mb-2 ml-1 form-control" value="<?= $info->tax_max_calc_password?>" >
  <input type="submit" name="credentialsSave" value="Set Credentials" class="btn btn-info ">
  </div>
</form> -->
<h4 class="text-center mt-5">Calculator Users Info</h4>
<table  class="table table-bordered mt-1 dataTable " id="csvDataTables">
  
    <thead>
      <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>User Email</th>
        <th>Phone</th>
        <th>Project Address</th>
        <th>View PDF</th>
        <!-- <th>member</th> -->
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $pluginPath = plugin_dir_url(__FILE__);
      $count = 0;
      foreach ($userIp as $ip){
      ?>
      <tr>
        <td><?= ++$count?></td>
        <td><?= $ip->ho_fname?></td>
        <td><?= $ip->ho_email?></td>
        <td><?= $ip->ho_phone?></td>
        <td><?= $ip->ho_project?></td>
        <!-- <td><?= $ip->tax_max_who?></td> -->
        <!-- <td><?= $ip->tax_max_member?></td> -->
        <td><a class="view-btn" target="_blank" href="<?= $ip->tax_max_pdf?>">View PDF</a></td>
        <td><a class="delete-btn" href="admin.php?page=merit_calculatorulator_setting&deleteUsage=<?=$ip->tax_max_id; ?>">Delete</a></td>
      </tr>
      <?php }?>
    </tbody>
  </table>
  <button type="button" name="exportUsers" onclick="exportTableToCSV('#csvDataTables', 'business-valuation-results.csv')" class="btn btn-success float-right mt-2 save-prices ">Export Users Data</button>
  <a href="https://solartaxpros.com/wp-admin/admin.php?page=wp_file_manager#elf_l1_d3AtY29udGVudC91cGxvYWRzL3NvbGFyLXRheC1tYXg"><button type="button" class="btn btn-warning float-left mt-2 save-prices ">All Reports Folder</button></a>
</div>
<script>


jQuery(document).ready(function($){
  $('.delete-btn').on('click',function(){
    $(this).parent().parent().hide();
    // window.location.href = window.location.href;
  });
  // let table = new DataTable('#csvDataTables',{
	// 				responsive: true,
	// 				columnDefs: [
	// 					// { targets: [0, 4], className: 'dt-body-center' }
  //         ],
  //         'paging'      : true,
  //         'lengthChange': true,
  //         'searching'   : true,
  //         'ordering'    : true,
  //         'info'        : true,
  //         'autoWidth'   : true
  //   });
    // $('#csvDataTables').DataTable();
    $('#csvDataTables')
				// .addClass( 'nowrap' )
				.dataTable( {
					responsive: true,
					// columnDefs: [
					// 	{ targets: [0, 4], className: 'dt-body-center' }
          // ],
          order: [[3, 'desc']],
          columnDefs: [
						// {
						// 	target: 4,
						// 	render: DataTable.render.date(),
						// },
						// {
						// 	target: 5,
						// 	render: DataTable.render.number(null, null, 0, '$'),
						// },
						// {
						// 	targets: [3, 4 ,5],
						// 	className: 'dt-body-right'
						// }
					],
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : true,
        });
        
        
  });
  
  // var tableToExcel = (function() {
  //     var uri = 'data:application/vnd.ms-excel;base64,'
  //       , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
  //       , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
  //       , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  //     return function(table, name) {
  //       console.log(name)
  //       if (!table.nodeType) table = document.getElementById(table)
  //       var ctx = {worksheet: 'Worksheet', table: table.innerHTML}
  //       window.location.href = uri + base64(format(template, ctx))
  //     }
  // })();
//   function tableToExcel(table, name, filename) {
//         let uri = 'data:application/vnd.ms-excel;base64,', 
//         template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><title></title><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>', 
//         base64 = function(s) { return window.btoa(decodeURIComponent(encodeURIComponent(s))) },         format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; })}
        
//         if (!table.nodeType) table = document.getElementById(table)
//         var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}

//         var link = document.createElement('a');
//         link.download = filename;
//         link.href = uri + base64(format(template, ctx));
//         link.click();
// }

    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(tableId,filename) {
    var csv = [];
    var rows = document.querySelectorAll(tableId+" tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
class TableCSVExporter {
    constructor(t, e, r = !0) {
        (this.table = t), (this.rows = Array.from(t.querySelectorAll("tr"))), (this.cutend = e), !r && this.rows[0].querySelectorAll("th").length && this.rows.shift();
    }
    convertToCSV() {
        const t = [],
            e = this._findLongestRowLength();
        for (const r of this.rows) {
            let o = "";
            for (let t = 0; t < e; t++) void 0 !== r.children[t] && (o += TableCSVExporter.parseCell(r.children[t])), (o += t !== e - 1 ? "," : "");
            t.push(o);
        }
        return t.join("\n");
    }
    _findLongestRowLength() {
        return this.rows.reduce((t, e) => (e.childElementCount > t ? e.childElementCount : t), 0) - this.cutend;
    }
    static parseCell(t) {
        let e = t.textContent;
        return (e = e.replace(/"/g, '""')), (e = /[",\n]/.test(e) ? `"${e}"` : e);
    }
}
function table2csv(t, e = 0) {
    const r = new TableCSVExporter(document.getElementById(t.getAttribute("data-table")), e).convertToCSV(),
        o = new Blob([r], { type: "text/csv" }),
        n = URL.createObjectURL(o),
        l = document.createElement("a");
    (l.href = n),
        (l.download = "export.csv"),
        l.click(),
        setTimeout(() => {
            URL.revokeObjectURL(n);
        }, 500);
}
</script>