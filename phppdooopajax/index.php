<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP AJAX PDO</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="main">

            <!-- form section starts -->



            <div class="header">
                <button type="submit" id="submit-data" name="save">Submit</button>
            </div>

            <form id="form">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <button type="submit" id="submit">Submit</button>
            </form>
            <div id="message"></div>


        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>

</html>