
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<style>
		section{
			margin-top:50px;
		}
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
		#Google{
			background-color:#e82413;

		}
	</style>
</head>
<body>
<div class="text-white font-weight-bold text-center h-50 p-10" id="Google">
				Assingnment
</div>
	<main>
		<section class="container wrapper bg-white rounded shadow">
			<div class="page-header">
			<center>
				<div>
				 <b class="display-5">Welcome back </b></br>
	</div></br>
	<div>
				<b class="p-5">Sign in </b>
	</div>
			</center>
			</div>
			<div class="form-group">
              <input type="email" name="email" id="email" class="form-control" value="" placeholder="Email">
              <span class="help-block"><?php echo $password_err;?></span>
            </div>   
	<div class="form-group">
              <input type="submit" class="btn btn-block btn-primary rounded-pill font-weight-bold" value="Next">
            </div>
			<div class="row">
  <div class="col"><hr/></div>
  <div class="col-auto">Or</div>
  <div class="col"><hr/></div>
</div>
			<div class="text-white font-weight-bold text-center h-50" id="Google">
				Continue with Google
	        </div>
			<a class="text-primary">Create Account</a>
		</section>
	</main>
</body>
</html>