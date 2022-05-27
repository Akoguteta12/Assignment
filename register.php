
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign in</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<style>
		.link{
			color:#e82413;
			cursor: pointer;
		}
		section{
			margin-top:50px;
		}
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
		.fontuser {
            position: relative;
        }
          
        .fontuser i{
            position: absolute;
            left: 15px;
            top: 40px;
            color: gray;
        }
		#Google{
			background-color:#e82413;

		}
	</style>
</head>
<body>
<div class="text-white font-weight-bold text-center h-50 p-10" id="Google">
				Assignnment
</div>
	<main>
		<section class="container wrapper  bg-white rounded shadow">
        	<center><b class="text-center">I can't wait to create an account</b></center>

			<div class="form-group col-12">
            <hr>
   </div>
        	<form action="process/register.php" method="POST">
			<div class="form-group row">
    <div class="col">
      <input type="text" class="form-control" name="firstname" placeholder="First name" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
    </div>
  </div>
          
			<div class="form-group">

<input type="text" name="email" class="form-control" value="" placeholder="username" required>
<span class="help-block"></span>
</div>

            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control" value="" placeholder="Choose Password">
              <span class="help-block"><?php echo $password_err;?></span>
            </div>   
        <input type="checkbox" checked="checked">
                Remember me 
    </div> 
	<div class="form-group">
              <input type="submit" class="btn btn-block btn-primary rounded-pill" value="Next">
            </div>
			<div class="row">
  <div class="col"><hr/></div>
  <div class="col-auto">Or</div>
  <div class="col"><hr/></div>
</div>
<div class="text-white font-weight-bold text-center h-50" id="Google">
				Continue with Google
</div>
				<div>
        		<p class="link" >Already have an account?<a class="link" href="index.php">SIGN IN</a></p>
	          </div>
        	</form>
		</section>
	</main>
</body>
</html>