<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = htmlspecialchars($_POST["fullname"]);
    $email    = htmlspecialchars($_POST["email"]);
    $phone    = htmlspecialchars($_POST["phone"]);
    $dob      = htmlspecialchars($_POST["dob"]);
    $course   = htmlspecialchars($_POST["course"]);
    $address  = nl2br(htmlspecialchars($_POST["address"]));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <style>
        body {
            font-family: Arial;
            background: #ececec;
            padding: 20px;
        }
        .result-box {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #999;
        }
        h2 { text-align: center; color: #0275d8; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #333; }
        .value { margin-top: 5px; }
    </style>
</head>

<body>

<div class="result-box">
    <h2>Application Submitted Successfully!</h2>

    <div class="field">
        <div class="label">Full Name:</div>
        <div class="value"><?php echo $fullname; ?></div>
    </div>

    <div class="field">
        <div class="label">Email:</div>
        <div class="value"><?php echo $email; ?></div>
    </div>

    <div class="field">
        <div class="label">Phone:</div>
        <div class="value"><?php echo $phone; ?></div>
    </div>

    <div class="field">
        <div class="label">Date of Birth:</div>
        <div class="value"><?php echo $dob; ?></div>
    </div>

    <div class="field">
        <div class="label">Course:</div>
        <div class="value"><?php echo $course; ?></div>
    </div>

    <div class="field">
        <div class="label">Address:</div>
        <div class="value"><?php echo $address; ?></div>
    </div>
</div>

</body>
</html>
