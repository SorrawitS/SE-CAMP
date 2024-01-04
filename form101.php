<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //method get; //http://localhost/SE-CAMP/form_101.php?q=1
    
    ?>
    <form action="" method="post" >
        <input type="text" name="fname" />
        <button type="submit">Save</button>
    </form>
    <h1> <?php 

    print_r($_POST);
    print_r($_REQUEST);
    if(isset($_POST['fname'])){
        echo $_POST['fname'];
    } ?> </h1>
    
</body>
</html>