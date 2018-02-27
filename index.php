<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="assets/js/vue.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="app">
		<div class="container">
			<div class="row"><br>
				
				<div class="text-center">
					<h1>Exchange rate</h1>
				</div><br>

				<div class="text-center">
					<img src="images/money.png">
				</div>
				<div class="col-md-4 col-md-offset-4">

				<form action="calculate-result.php" method="post">
					<br>
						<div>
							<div class="head-sub">จำนวนเงินไทย</div>
						</div><br>
						<input type="text" name="thb" class="form-control"> <br><br>
						<div>
							<div class="head-sub">สกุลเงินที่ต้องการคำนวณ</div>
						</div><br>


			
						<div>
								<select class="form-control col-md-12" name="type">
									<option value="usd">🇺🇸 USD</option>
									<option value="jyp">🇯🇵 JYP</option>
									<option value="krw">🇰🇷 KRW</option>
									<option value="gbp">🇬🇧 GBP</option>
									<option value="eur">🇪🇺 EUR</option>

								</select>
						</div><br><br><br><br>
						<div class="text-center">
					<button type="submit" variant="success" class="btn btn-danger">Calculate</button>
				</div>
				</form>



		</div>
	</div>

	</div>
</div>









</body>
</html>




