<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณแบบ Dynamic เปลี่ยนค่าตามที่ input</title>
</head>
<body>
    <div class = "Container-Box">
        <h1>Multiplication Table</h1>
    </div>

    <marquee behavior="" direction="">Multiplication Table with User Input</marquee>
    <div class = "form">

        <form action="/my-route" method="POST">
            @csrf
            <label for="detail">Enter a Number</label>
            <input type="text" name ="number">
            <input type="submit" Value="submit" id="submit">
        </form>
    </div>


</body>
</html>
