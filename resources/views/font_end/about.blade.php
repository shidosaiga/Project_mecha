<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                    <strong>  Name : </strong> {{ Auth::user()->name }} <br>
                    <strong>  Email : </strong> {{ Auth::user()->email }} <br>
                    <strong>  Phone : </strong> {{ Auth::user()->phone }} <br>
                    <strong>  Address : </strong> {{ Auth::user()->address }} <br>
</body>
</html>