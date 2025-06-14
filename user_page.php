<?php
session_start() ;
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>User page</title>
</head>

<body style="background: #fff;">

<div class="box">
    <h1> Welcome, <Span><?=$_SESSION['name']; ?></Span> </h1>
    <P> this is an <span>user</span> page</P>
    <button onclick="window.location.href='logout.php'">logout</button>
</div>


</body>
</html>