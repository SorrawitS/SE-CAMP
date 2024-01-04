<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $var_c = $var_b = 1;
    $var_c = '1';
    if($var_b === $var_c){ 
        echo '$var_b <=== $var_c';
    }else if($var_b <> $var_c){
        echo "hi";
    }

    $arry = array(1,2,3);
    $arry1 = [1,2,3];
    $arry2[] = 1;
    $arry2[] = 2;
    $arry2['SE'] = "World";

    ?> <?php print_r($arry)?>
    <pre><?php print_r($arry);?></pre>
    <pre><?php print_r($arry2);?></pre>

    <?php foreach($arry2 as $key => $value){ ?>
        <h3> <?php echo $arry2[$key]; ?> : <?php echo $value; ?> </h3>
    <?php } ?>

    function

</body>
</html>