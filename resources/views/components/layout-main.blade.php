

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="margin: 0px;">

    <x-Navbar>
    </x-Navbar>

    
    {{ $slot }}


    <livewire:counter/>
    
    

</body>
</html>

   

