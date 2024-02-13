<div style="height: 800px; width: 500px; background-color: black; color: white; display: flex; align-items: center; flex-direction: column; justify-content: center;">

    <h2>{{ $articolo["title"] }}</h2>

                <p style="font-size: small; height: 75px; width: 100px; background-color: yellow; border-radius: 100px; color: black; text-align: center; align-items: center; display: flex; justify-content: center; font-weight: bolder;">{{ $articolo["category"] }}</p>
                <p>{{ $articolo["description"] }}</p>
                <a href="{{route("articolo", ['id' => $articolo["id"]])}}"> Visualizza l'articolo</a> 
                <img style="object-fit: contain; width: 100px;" src="{{Storage::url($articolo["image"])}}" alt="">

</div>