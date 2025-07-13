<?php
session_start();
           require_once 'vendor/autoload.php';
           use Dompdf\Dompdf;
      $conn = new PDO('mysql:host=localhost;dbname=tourism','root','');
          $stmt = $conn->prepare('SELECT * FROM bookings ORDER BY booking_id DESC LIMIT 1');
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
          
          $gt = 0;

         $html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Invoice</title>
 
      <style>
            h2{
                       font-family: verdana;
                       text-align: center;
                  }
             table{
                        font-family: Arial;
                        border-collapse: collapse;
                        width: 90%;
                       }
            td, th{
                          border: 1px solid #444;
                          padding: 8px;
                          text-align:left;
                    }
           .my-table{
                              text-align: right;
                          }
          #sign{
                        padding-top: 50px;
                        text-align: right;
                    }
      </style>      

</head>
<body>';
$html  .= '<h1 style="padding-top:0px;float:right;padding-right:400px;font-size:50px;font-family:verdana">INVOICE</h1>


<br><br>
<br><br><br><br>';
 $html .= '<h3 style="padding-left:600px;font-size:30px">Help Line : <br></h3>
<h4 style="padding-left:600px;font-size:20px">Email : tejapraveen2003@gmail.com<br>Phone :7981715576</h4>
<br>
<br><br>



<table>
        <thead>
             <tr>
                 <th>Place</th>
                 <th>Number  Of  Guests</th>
                 <th>Date</th>
                 <th>Total</th>
             </tr>
          </thead>
        <tbody>';
        foreach($rows as $row){
              $html .= '<tr>
                      <td>'.$row['places'].'</td>
                      <td>'.$row['guests'].'</td>
                      <td>'.$row['date'].'</td>
                      <td>'.number_format($row['guests'] * 3000).'</td>
                 </tr>';
                 $gt += $row['guests'] * 3000;
}
$html .= '</tbody>
        <tr>
            <th colspan="4" class="my-table">GST (18%)</th>
            <th>'.number_format(($gt*18)/100,2).'</th>
        </tr>
          <tr>
            <th colspan="4" class="my-table">Grand Total</th>
            <th>'.number_format($gt + ($gt*18)/100,2).'</th>
          </tr>
          <tr>
            <th colspan="4" class="my-table">Grand Total Amount</th>
            <th>'.number_format(round($gt + ($gt*18)/100),2).'</th>
          </tr>
         <tr>
             <td colspan="5" id="sign"><i>Teja</i></td>
             <td colspan="5" id="sign">Signature</td>
         </tr>
</table>
</body>
</html>';


$dompdf = new Dompdf();
$dompdf->set_option('isRemoteEnabled',TRUE);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('Invoice.pdf', ['Attachment' => 0]);
?>

                 
        