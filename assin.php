<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Basics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
    
    <div class="login-box">
        <h2>Task-1 Form</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="user-box">
                <input type="text" name="name" placeholder="Name">
              
            </div>
            <div class="user-box">
                <br>
                <input type="Email" name="Email" placeholder="Email address">
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <!--Login-->
                <br>
                <input type="submit" value="Clickhere">
            </a>
        </form>
    </div>
    <div class="output">
        <h2>Task-2 Basic OOP</h2>
        <p>Name: Md.Emon <span><?php $taskTwoName="Emon"; echo $taskTwoName; ?></span></p>
        
        <p>Email: emonhowlader676@gmail.com <span><?php echo $taskTwoEmail; ?></span></p>
        <p>Methods:  <span><?php echo $taskTwoName; ?></span></p>
        <hr /><br>
        <h2>Task-3 Superglobal Variables in PHP</h2>
        <p>Name: Md.Emon <span> <?php echo $name; ?></span></p>
        <p>Email: emonhowlader676@gmail.com <span> <?php echo $email; ?></span></p>
    </div>
  </div>
  
</body>
</html>