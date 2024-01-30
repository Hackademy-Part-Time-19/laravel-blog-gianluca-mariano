
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il mio blog</title>
</head>
<body style="margin: 0px;">

    <x-Navbar>
    </x-Navbar>

    <h1 style="display: flex; justify-content: center;">{{ $titolo }}</h1>


</body>
</html>

-->

<x-layout-main :titolo="$titolo">

    <x-slot:title>Home</x-slot>  

</x-layout-main>

<div>

        <h1 style="display: flex; justify-content: center;">{{ $titolo }}</h1>

</div>