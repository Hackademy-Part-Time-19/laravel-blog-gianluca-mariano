<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono</title>
</head>
<body style="margin: 0px;">

    <x-Navbar>
    </x-Navbar>


    <h1>{{ $titolo }}</h1>

    <p>{{ $bio }}</p>


</body>
</html>
-->

<x-layout-main :titolo="$titolo" :bio="$bio">

    <x-slot:title>Chi sono</x-slot> 

    <h1>{{ $titolo }}</h1>

    <p>{{ $bio }}</p>

    <form action="{{ route('chisonopost') }}" method="post" >

        @csrf
        <input id="name" name="name" type="text">
        <input id="email" name="email" type="email">
        <textarea name="msg" id="msg" cols="30" rows="10"></textarea>

        <button type="submit">Invia richiesta</button>


    </form>

    <br>
    <br>

    @if (session("sent") == true) 

        <x-layout-succ>E-mail inviata con successo</x-layout-succ>
    
    @endif

</x-layout-main>

    