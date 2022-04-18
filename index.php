<php?
session_start();
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>The FORM</title>
</head>
<body>
  
    <form action='action.php' enctype='application/x-www-form-urlencoded' method='post'>
        <input type='text' name='name' placeholder='the name'><br>
        <input type='submit' value='SEND'>
    </form>
</body>
</html>";
