<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript 101</title>
</head>
<body>
    <h1 id="myh1">Javascript</h1>
    <input type="text" id="my_number">
    <button onclick="myFunction()"> Submit Number!</button>

</body>

<script>
    function myFunction(){
        console.log(document.getElementById('my_number').value)
        console.log('Click Submit Number');

    }

    let myval4 = [1,2,3,4];
    myval4[5] = 5;
    myval4[6] = [6 , 5 , 4 , 5 , 6];
    for(i = 0; i < myval4.length; i++){
        console.log(myval4[i]);
    }
    myval4.forEach(function(value,index) {
        console.log("In Foreach : " , value);
    });

    console.log(document.getElementById('myh1'));
</script>
</html>
