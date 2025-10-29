<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hi there</h1>

    <form action="/test" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name"><br><br>
        <input type="email" name="email" placeholder="Your Email"><br><br>
        <input type="text" name="password" placeholder="Your Password"><br><br>
        <input type="submit" value='send'>

    </form>
</body>
</html>