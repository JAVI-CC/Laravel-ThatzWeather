<html>

<head> 
  <title>ThatzWeather</title>
  <meta http-equiv="content-type" content="text/html; utf-8">
  <link rel="shortcut icon" href="{{ asset('img/thatzad.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="{{ asset('js/validar.js') }}" defer></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<br>
<br>

<div class="container">
<a href="/">
<img src="img/logo.png" class="rounded mx-auto d-block" class="responsive" style="width: 400px; height: 102px;">
</a>

<br>

@yield('content')