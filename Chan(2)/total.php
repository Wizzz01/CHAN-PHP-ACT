<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="border: 2px black; border-style:dotted;">
    <h1 style ="text-align:center; font-size:4rem;">RECEIPT</h1>
<?php
date_default_timezone_set('Asia/Manila');
        if (isset($_POST['order'])) {
            $order = $_POST['order'];
            $quantity = $_POST['quantity'];
            $cash = $_POST['cash'];
            $total = 0;
            $date = date("F j, Y, g:i a"); 
                if ($order == "burger") {
                    $total = 50 * $quantity;
                } else if ($order == "fries") {
                $total = 75 * $quantity;
                } else if ($order == "steak") {
                $total = 150 * $quantity;
                }
                if ($cash >= $total) {
                echo "<h1 style ='font-size: 4rem;'>Total Price:" .$total. "</h1>";
                echo "<h1 style ='font-size: 4rem;'>You Paid:" .$cash. "</h1>"; 
                echo "<h1 style ='font-size: 4rem;'>CHANGE:" .($cash - $total). "</h1>";
                echo "<h1 style ='font-size: 4rem;'>" .$date. "</h1>";
            
                }    
        }
?>
</body>
</html>
