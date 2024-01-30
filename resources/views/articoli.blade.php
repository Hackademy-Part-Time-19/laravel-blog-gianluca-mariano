<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
</head>
<body style="margin: 0px;">
    
    <x-Navbar>
    </x-Navbar>
    
    <div style="display: flex; justify-content: center;">

        <h1 >{{ $titolo }}</h1>
    
    </div>

    <div style="display: flex; flex-direction: column; justify-content: space-around; align-items: center; width: 100%; height: 1000px; ">

    @if (count($articoli) == 0)
        
        <p>Non ci sono articoli..</p>

    @else

        @foreach ($articoli as $articolo)

            <x-Card :articolo="$articolo" :articoli="$articoli">    
            </x-Card> 

        @endforeach

    @endif    
    
    </div>
    


</body>
</html>