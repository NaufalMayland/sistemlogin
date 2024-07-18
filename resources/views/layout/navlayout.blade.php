<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    {{-- @vite('resources/css/app.css') --}}
    <title>E-Raport - {{ $judul}}</title>
</head>

<body class="font-poppins bg-linen">
    @include('layout.bar')
        <div class="ml-[275px] p-5 mr-[25px]">
            @yield('content')
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>