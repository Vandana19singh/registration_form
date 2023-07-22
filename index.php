<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="form">
        <form action="insert.php" method="post">
            <h1>Registration Form</h1><br><br>

            <input type="text" id="name" name="name" placeholder="Name" required><br><br>

            <input type="email" id="email" name="email" placeholder="Email address"><br><br>

            <input type="text" id="country" name="country" placeholder="Country" required><br><br>

            <input type="text" id="phone" name="phone" placeholder="Phone" required><br><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" name="submit" class="button">

        </form>
    </div>

</body>

</html>