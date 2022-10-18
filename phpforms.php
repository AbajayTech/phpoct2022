<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<form action="submit.php"method="post">
    <label for="Name">Name</label>
    <input type="text" id="Name" name="jina" required maxlength="10"><br>
    <label for="Colledge">Colledge</label>
    <input type="text" id="colledge" name="shule" required><br>
    <label for="year" required>Year</label>
    <input type="text" id="year" name="mwaka" required max="8"><br>
    <input type="submit"  value="Login"  ><br>
</form

</body>
</html>
