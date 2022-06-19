
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="../includes/calc.inc.php" method="post" enctype="multipart/form-data">
        <input type="text" name="num1" id="num1" placeholder="First Number">
        <select name="op" id="op">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="text" name="num2" id="num2" placeholder="Second Number">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>