<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="php101.css">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tbody>
            <div class = "hey_love">
                
            <?php $num = 1;
            for ($x = 1; $x <= 24; $x++) {
                 $num = $multi_x * $x;
                 
                echo " {$multi_x}x $x = $num <br>";
                
              }
            ?>
            </div>
        </tbody>
    </table>
  
</body>

</html>