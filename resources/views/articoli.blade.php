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

        
            <div style="height: 300px; width: 300px; background-color: black; color: white; display: flex; align-items: center; flex-direction: column; justify-content: center;">

                <h2>{{ $articolo["title"] }}</h2>
                <p style="font-size: small; height: 50px; width: 100px; background-color: yellow; border-radius: 100px; color: black; text-align: center; align-items: center; display: flex; justify-content: center; font-weight: bolder;">{{ $articolo["category"] }}</p>
                <p>{{ $articolo["description"] }}</p>
                <a href="{{route("articolo", ['id' => array_search($articolo, $articoli)])}}"> Visualizza l'articolo</a>

            </div>

          

        @endforeach

    @endif

        
    
    </div>
    


</body>
</html>