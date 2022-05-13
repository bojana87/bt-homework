<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forma</title>
</head>
<body>
    <form method="POST" action="form1.php">
        <label>Dan:
            <input type="text" name="date" required>
        </label><br><br>
        <label>Mesec:
            <input type="text" name="month" required>
        </label><br><br>
        <label>Godina:
            <input type="text" name="year" required>
        </label><br><br>
        <input type="submit" value="send"><br><br>
        <input type="reset" value="resetuj">
    </form>
    
</body>
</html>