<html>
<head>
    <title>Sum</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="number" placeholder="Enter a number">
        <button type="submit">ok</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $sum = 0;

    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10); 
    }

    echo "The sum of digits is: $sum";
}
?>



