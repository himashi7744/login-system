<!DOCTYPE>
<html>
  <head>
      <title>LOGIN</title>
      <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
    <body>
      <form action="login.php" method="post">
          <h2>LOGIN</h2>
          <? php 
                if(isset($_GET['error'])){
                
                    echo $_GET['error']; 
                
        }
          ?>
          <label>User Name</label>
          <input type="text" name="uname" placeholder="username"><br>
          <label>Password</label>
          <input type="password" name="pass" placeholder="password"><br>
          <button id="1" type="submit">LOGIN</button>
          <button  type="clear">CANCEL</button>
      </form>
    </body>
</html>