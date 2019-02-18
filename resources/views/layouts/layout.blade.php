<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>

</body>
</html>

<h1>{{date('Y:M:d',time())}}</h1>
<p>{!! $script  !!}</p>
@section('petyh')
    <p>Cлішь ті <b>petuh</b></p>
@show
{{9  or $title}}
