<html>

<head>
    <title>Logged out</title>
</head>

<body>
    <?php
    echo "<script> alert('Logged out successfully!'); </script>";
    unset($_SESSION['uid']);
    include('index.html');
    ?>
</body>

</html>