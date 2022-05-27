
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
  <style>
    section{
			margin-top:50px;
      height:350px;
		}
    form{
      margin-top:55px;
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
    #Google{
			background-color:#e82413;

		}
    #username{
      display: block;
    }
    #password{
      display:none;
    }
  </style>
  <script>
  
    function next(){
      let n=document.getElementById('next');
    let div1=document.getElementById('username');
    let div2=document.getElementById('password');
    div1.style.display="none";
    div2.style.display="block";
    
    
    }

    </script>
</head>
<body>
<div class="text-white font-weight-bold text-center h-50 p-10" id="Google">
				Assingnment
</div>
  <main>
    <section class="container wrapper bg-white rounded shadow">
    <center><b class="text-center">Welcome Back</b></center>
          <form action="process/add.php" method="POST">
            <div class="form-group" id="username">
              <div>
              <input type="text"  name="username" id="username" class="form-control" placeholder="username" required="">
              <span class="help-block"></span>
  </div>
              <div class="form-group" style="margin-top:20px;">
              <a onclick="next()" class="btn btn-block btn-primary rounded-pill font-weight-bold text-white">Next</a>
  </div>
            </div>
            
            
          <div id="password">
         
            <div class="form-group" >
              <input type="password" name="password" class="form-control" placeholder="Password" required="">
              <span class="help-block"></span>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-block btn-primary rounded-pill font-weight-bold" value="Sign In">
            </div>
  </div>
          
           <div class="row">
  <div class="col"><hr/></div>
  <div class="col-auto">Or</div>
  <div class="col"><hr/></div>
</div>
			<div class="text-white font-weight-bold text-center h-50" id="Google">
				Continue with Google
	        </div>
			<a class="text-primary" href="register.php">Create Account</a>
          </form>
    </section>
  </main>
</body>
</html>