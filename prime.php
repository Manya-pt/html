<html>
<head>
    <title>Prime or Not</title>
</head>
<body>
    <form method="post">
        Enter number: <input type="text" name="input"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
        $num = $_POST['input'];

        if ($num === '' || !is_numeric($num)) {
            echo "";
        } else {
            $n = 0;
            $num = (int)$num;
            if ($num <= 1) {
                echo "$num is not a prime number.";
            } else {
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        $n++;
                        break;
                    }
                }
                if ($n == 0) {
                    echo "$num is a prime number.";
                } else {
                    echo "$num is not a prime number.";
                }
            }
        }
    }
    ?>
</body>
</html>



