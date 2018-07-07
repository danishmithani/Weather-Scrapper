<!doctype html>
<html>
	<HEAD>
		<title>weather Scrapper</title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, inital-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		

  		<style>
  		html, body {
  			height:100%;
  		}
  		.container {
  			background-image: url("layer.jpg");
  			width:100%;height:100%;
  			background-size:cover;
  			background-position: center;
  			padding-top: 20%;
  		}
  		.center {
  			text-align: center;
  		}
  		.white{
  			color: white;
  		}
  		p {padding-top: 15px;
		padding-bottom:15px;}
		button {
			margin-top:15px;
		}
  		</style>



	</HEAD>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 center">
					<h1 class="center white">Weather Predictor</h1>
					<p class="lead center white">Enter your city below to get a forecast of the weather</p>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" name="city" id="city" placeholder="Eg. New York, Manhattan, etc."/>
						</div>
						<button id="findmyweather" class="btn btn-lg btn-success center">Find My Weather</button>
					</form>

				</div>
			</div>
		</div>



		<!-- Latest compiled and minified JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<script>
		$("#findmyweather").click(function(event) {
			event.preventDefault();
			$.get("scrapper.php?city=London", function(data) {

				alert(data);
			});

		});



		</script>

	</body>	
</html>