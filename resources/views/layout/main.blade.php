<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cakedom</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    {{-- font --}}
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    {{-- mobile devices --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
@include('layout.nav')
@yield('home')
@yield('contact')

</body>
</html>