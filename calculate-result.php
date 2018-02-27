<!DOCTYPE html>
<html>
<head>
 <title>Result</title>
 <meta charset="utf-8">
	<script type="text/javascript" src="assets/js/vue.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div id="app">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h1>Exchange rate</h1>
				</div><br>
				<div class="text-center">
					<img src="images/money.png">
				</div><br><br><br><br>

				<?php 
				 
				 //แบบที่1.รับค่ามาจากหน้าที่แล้ว
				 //ส่งค่ามาเป็น POST
				 //$thb = $_POST['attribute name'];
				 $thb = $_POST['thb'];
				 $type = $_POST['type'];

				 echo "ค่าที่กรอก คือ".$thb;
				 echo "<br>";
				 echo "สกุลเงินที่ใช้คำนวน".$type;
				 echo "<br>";

				 if ($type=="usd") {
				  $result = $thb/31.2273;
				 } elseif ($type=="jyp") {
				  $result = $thb/28.9814;
				 } elseif ($type=="krw") {
				  $result = $thb/0.0293;
				 } elseif ($type=="gbp") {
				  $result = $thb/43.3292;
				 } elseif ($type=="eur") {
				  $result = $thb/38.2737;
				 }

				 echo "Result = ".$result;

				 require 'connect.php';

				 $sql = "INSERT INTO exch602_history(thb, calculated, currency) VALUES($thb, $result, '$type')";
				 $sql_exe=$conn -> query($sql);

				 print($sql_exe);

				 //แบบที่2
				 // if ($type=="usd") {
				 //  $rate = 0.31;
				 // } elseif ($type=="jyp") {
				 //  $rate = 0.21;
				 // } elseif ($type=="krw") {
				 //  $rate = 0.11;
				 // } elseif ($type=="gbp") {
				 //  $rate = 0.50;
				 // } elseif ($type=="eur") {
				 //  $rate = 0.40;
				 // }

				 // echo "Result = ".thb*rate;

				 //แบบที่3
				 // switch ($type) {
				 //  case 'usd':
				 //   $rate=0.31;
				 //   break;
				 //  case 'jyp':
				 //   $rate=0.29;
				 //   break; 
				 //  case 'krw':
				 //   $rate=0.31;
				 //   break;
				 //  case 'gbp':
				 //   $rate=0.31;
				 //   break; 
				 //  case 'eur':
				 //   $rate=0.31;
				 //   break; 

				  
				 //  default:
				 //   $rate=0;
				 //   break; 
				 // }

				 // echo "Result = ".thb*rate;

				?>



				  <?php 
				     $sql = "SELECT * FROM exch602_history ORDER BY dateRecord DESC";
				     $sql_exe = $conn -> query($sql);
				    ?>

				  <table class="table table-striped table-hover">
				   <thead>
				    <tr>
				     <th colspan="5"><h4>History</h4></th>
				    </tr>
				    <tr>
				     <th>You money</th>
				     <th>Currency</th>
				     <th>Calculated</th>
				     <th>Time Record</th>
				     <th>Delete</th>
				    </tr>
				   </thead>

				  <?php 
				   

				   while ($row = mysqli_fetch_assoc($sql_exe)) {
				         // $array['key/field name'];
				    echo "<tr>
				         <td>".$row['thb']."</td>
				      <td>"." exchage to ".$row['currency']."</td>
				      <td>".$row['calculated']."</td>
				      <td>".$row['dateRecord']."</td>";

				  ?>
				  <td><a class="btn btn-danger"  href="delete.php?id=<?php echo $row['recordID']?> &thb=<?php echo $row['thb'] ?>">Delete</a></td>
				  </tr>
				  <?php

				   }
				   $conn->close();
				  ?>
				  </table>







			</div>
		</div>
	</div>
</div>


</body>
</html>





























