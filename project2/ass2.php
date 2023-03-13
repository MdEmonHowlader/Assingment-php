<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="form.php">
        Name:
        <br>
        <input type="Name" name="username" placeholder="Name">
        <br>
        <br>
        Email:
        <br>
        <input type="text" name="mail" placeholder="Email">
        <br>
        <br>
        Password:
        <br>
        <input type="password" name="pass" placeholder="Password">
        <br>
        <br>
        Profile Picture:
        <br>
        <input name="chobi" type="file">
        <br>
        <br>
        <input type="submit">
    </form>
</body>

</html>