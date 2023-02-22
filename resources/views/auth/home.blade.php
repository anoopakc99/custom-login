@extends('layouts.app')

@section('content')
<div class="container">
<nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</nav>

</div>

<h1>Welcom : {{ Auth::user()->name }}</h1>


@endsection