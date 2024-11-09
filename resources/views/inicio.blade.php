@extends('layouts.app')
@if(session('message'))
    <h1>{{ session('message') }}</h1>
@endif

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Bienvenido a WORLD PLANTS</h1>
            <p class="lead">Una buena acción nunca se pierde; quien siembra cortesía cosecha amistad, y quien planta bondad recoge amor .</p>
        </div>
        
       
        

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
            color: #343a40;
        }
        .navbar {
            background-color: #ffffff;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff;
            text-align: center;
        }
        .nav-link {
            color: #007bff;
            font-weight: 500;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            margin-top: 20px;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1.1rem;
        }
        .btn {
            margin: 5px;
            padding: 10px 20px;
        }
    </style>
    </body>
    </html>
@endsection
