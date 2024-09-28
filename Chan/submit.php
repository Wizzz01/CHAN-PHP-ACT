<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>    
    <?php
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];

        $answer = $B*$B-4*$A*$C;
        print'<h1>'.$answer.'</h1>';
    ?>
</body>
</html>