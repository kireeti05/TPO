<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .badge {
            padding: 5px 10px !important;
            background: linear-gradient(0deg, #2A70AD 30%, #59B2FF 70%);
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">Admin </title>
    <link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
    <link href="./CssFiles/bootstrap.css" rel="stylesheet">
    <link href="./CssFiles/styles.css" rel="stylesheet">
    <style>
h2 {
    text-align:center;
}

</style>
</head>
<body>
<div class="container">
</div>
    <div class="row">
        <a href="index.php"><img src = "images/logo.jpg" style="margin-left: auto; margin-right: auto; width: 50%; display: block; margin-top: 50px; margin-bottom: 50px;"></a>
        <h2>Admin Login</h2>
        <div id="formContainer" class="" style="float: none;margin: 0 auto;">
            <form id="login" name="login" title="login form" role="form" method="post" action="database/admin_login.php">
                <br>
                <br>
                <h2 style="text-align: center;margin-top: 10px; color:#273746;" class="form-signin-heading">SIGN IN</h2>
                <div style="margin-left: 20px;margin-right: 20px;">
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Admin Username" name="aUname" id="htno" required="" value="" aria-label="Htno">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control medium-text-field" placeholder="Admin Password" name="aPassword" id="password" required="" value="" aria-label="HallTicket Number">
                     </div>
                        <div class="pull-right">
                            <button type="submit" name="login" value="login" class="btn btn-primary" id="loginBtn" aria-label="Login">Submit</button>&nbsp;&nbsp;
                        </div>
                        <div class="pull-left">
                        <div style="text-align:center;margin-top: 8px;font-size: medium;">
    </div>
    </div>
                    </div>

                    
                </div>
                
            </form>
            
        </div>
    </div>

</div>
</body>
</html>