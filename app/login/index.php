<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-control" content="no-cache">
		<meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <title>Вход</title>
        <meta name="description" content=""/>
        <link rel="stylesheet" href="css/main.min.css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <form action="process.php" method="POST">
            <p>
                <label for="username">User</label>
                <input type="text" name="username">
            </p>
            <p>
                <label for="password">Password</label>
                <input type="text" name="password">
            </p>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
