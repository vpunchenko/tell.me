<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('contact')}}" method="post">
    <input type="text" name="userName" title="userName">
    <input type="text" name="userSurname"  title="userSurname">
    <input type="password" name="pass"  title="pass">
    <input type="submit">
</form>
</body>
</html>
