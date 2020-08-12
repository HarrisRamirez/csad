<html>
    <head>
        <meta charset="UTF-8">
        <title>Login/Register</title>
        
        <?php include('websiteHeader.php'); ?>
        
        <!-- Content -->
        <main role="main">
        <div class="jumbotron" style="padding-top:15px;padding-bottom:30px;margin-bottom:0px;background-color: black;color:white">
            <div class="mx-auto">
                <div class='row'>
                <div class='col-auto'>
                    <h1>Register</h1>
                <form method="post" action="login.php">
                    <input type='text' name='username' placeholder='Username'><br>
                    <input type='password' name='password' placeholder='Password'<br><br>
                    <button name='register'>Register</button>
                    <?php 
                      if(@$_GET['error']==true) {
                      echo '<br>';
                      if ($_GET['error'] == "usernameexisted") {
                          echo 'Username existed.';
                      } else if ($_GET['error'] == "registerfillintheblanks"){
                          echo 'Fill in the blanks.';
                      }
                      }
                    ?>
                </form>
                </div>
                <div class='col-auto'>
                    <h1>Login</h1>
                    <form method="post" action="login.php">
                    <input type='text' name='username' placeholder='Username'><br>
                    <input type='password' name='password' placeholder='Password'<br><br>
                    <button name='login'>Login</button>
                    <?php 
                      if(@$_GET['error']==true) {
                      echo '<br>';
                      if ($_GET['error'] == "usernamedoesnotexist") {
                          echo 'Username does not exist';
                      } else if ($_GET['error'] == "loginfillintheblanks"){
                          echo 'Fill in the blanks.';
                      } else if ($_GET['error'] == "passwordincorrect") {
                          echo 'Password incorrect.';
                      }
                      }
                    ?>
                    </form>
                </div>
                </div>
            </div>
        </div>
        
        <?php include('websiteFooter.php'); ?>