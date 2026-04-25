<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
</head>

<body class="my-4 grid justify-center bg-[#171323] text-white">
    


    <div class="mb-4">
        <p>nav section</p>
        
    </div>
    

    <div class="border-2 p-4">
        {{ $slot }}
    </div>
    
</body>
</html>