
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
    <style type="text/css">
        .wrapper{ 
            width: 100%; 
            justify-content: space-between;
            padding: 30px; 
            padding-left:150px;
        }
        /* .wrapper h2 {text-align: center} */
        .wrapper form .form-group span {color: red;}
        #container{
        }
        center div{
            cursor: pointer;
  border-bottom:solid #33BBFF;

        }
        .w-100 div{
            cursor: pointer;
        }
    </style>
</head>
<body oncontextmenu="return false">
    <main class="container wrapper">
        <section>
            <div class="bg-danger text-white font-weight-bold h-100 w-80 d-flex justify-content-between"><b class="ml-5" style="margin-right:10px; margin-top:10px;">Assignment</b><p style="margin-right:10px; margin-top:10px;">Me<i class="fa fa-caret-down"></i></p></div>
            <div class="d-flex flex-row" id="container">
                <div class="w">
                    
                      <image src="assets/dataanalyst.png"/>
                    
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                    <Label>Current Password</label>
                    <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>" placeholder="Password">
                    <span class="help-block"><?php echo $new_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>New Password</label>
                    
                    <input type="password"  name="confirm_password" class="form-control fa-regular fa-key" placeholder="Password">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <input type="checkbox" /> remind me to change password for each three months
                <div class="form-group">
                    <input type="submit" class="btn btn-block btn-primary rounded" value="Set New Password">
                </div>
            </form>
    </div>
    <div class="w-100">
       <div class="shadow p-2  mb-4 border-top text-primary rounded"><center>ACCOUNT SETTINGS</center></div>
       
       <div class="border-bottom border-primary mb-2  text-black"><i class="fa fa-pencil text-primary m-2"></i>Edith Profile</div>
       <div class="border-bottom border-primary mb-2 text-black"><i class="fa fa-key text-primary m-2"></i>Change Password</div>
       <div class="border-bottom border-primary mb-2 text-black "><i class="fa fa-sign-in text-primary m-2"></i>Sign in Activities</div>
       <div class="border-bottom border-primary mb-2 text-black "><i class="fa fa-timer text-primary m-2"></i>Session Timeout</div>
       <div class="border-bottom border-primary mb-2 text-black "><i class="fa fa-heart text-primary m-2"></i>Memorisation</div>
       <div class="border-bottom border-primary mb-2  text-black "><i class="text-primary m-2"></i>Job feeds content</div>
       <div class="border-bottom border-primary mb-2  text-black"><i class="fa fa-envelope text-primary m-2"></i>Email & SMS notification</div>
       <div class="border-bottom border-primary mb-2 text-black "><i class="fa fa-bell text-primary m-2"></i>Push Notification</div>
       <div class="border-bottom border-primary mb-2 text-black "><i class="fa fa-user text-primary m-2"></i>Delete my Account</div>
    
    </div>
        </section>
    </main>    
</body>

</html>