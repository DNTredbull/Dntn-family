<?php
// Ingen mellomrom eller linjer over dette punktet!

$correct_password = "gala2048";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $entered_password = $_POST["password"] ?? "";

    if ($entered_password === $correct_password) {
        header("Location: https://gala-helper.vercel.app/");
        exit;
    } else {
        $error = "Wrong password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Enter Password</title>
    <style>
        body {
            font-family: sans-serif;
            background: #111;
            color: white;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        form {
            background: #222;
            padding: 20px;
            border-radius: 10px;
        }

        input {
            margin-top: 10px;
            padding: 8px;
            width: 100%;
        }
    </style>
</head>

<body>
    <form method="post">
        <h3>Enter the password to continue:</h3>
        <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Unlock">
    </form>
</body>

</html>