<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <h1>Hello World</h1>

    <!--Creo link di collegamento-->
    <a href="{{url('/aboutus')}}">About us</a>
    <a href="{{url('/contacts')}}">Contacts</a>

   @php
       $array = [1,2,3,4,5,6,7,6];
   @endphp

   @foreach ($array as $item)
       <div>{{$item}}</div>

   @endforeach
</body>
</html>
