<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('acceuil/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('acceuil/css/bootstrap.min.css') }}" />
    
    <title>G-NOTES</title>
</head>

<body id="blueColor">
    
    @yield('contenu')

    @yield('footer')

    <script src="{{ asset('acceuil/js/fontawesome-all.min.js') }}"></script>
    <script src="{{ asset('acceuil/js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('acceuil/js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>
