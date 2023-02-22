<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  nav {
  background-color: #333;
  height: 50px;
  display: flex;
  justify-content: center;
}

ul {
  list-style: none;
  display: flex;
  align-items: center;
  margin: 0;
  padding: 0;
}

li {
  margin: 0 10px;
}

a {
  color: #fff;
  text-decoration: none;
  padding: 5px 10px;
}

a:hover {
  background-color: #555;
}

  </style>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }} ">
</head>
<body>


  @include('layouts.navigation')

  @yield('content')

</body>
</html>