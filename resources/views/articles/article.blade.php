

<x-layout-main>

    <x-slot:title>{{ $article["title"] }}</x-slot>  

</x-layout-main>

<div style="display: flex; flex-direction: column; justify-content: space-around; align-items: center; width: 100%; height: 1000px; ">
    
        
        <div style="height: 400px; width: 300px; background-color: black; color: white; display: flex; align-items: center; flex-direction: column; justify-content: center;">

                <h2>{{ $article["title"] }}</h2>
                <p style="font-size: small; height: 50px; width: 100px; background-color: yellow; border-radius: 100px; color: black; text-align: center; align-items: center; display: flex; justify-content: center; font-weight: bolder;">{{ $article["category"] }}</p>
                <p>{{ $article->category->name }}</p>
                <div>

                    <a href="{{ route("articles.edit",["article" => $article["id"] ])}}">Edit</a>
                    <span><form action="{{route("articles.destroy", ["article" => $article["id"] ]) }}" method="POST">

                            @csrf
                            @method("DELETE")

                            <button type="submit">Delete</button>


                    
                    </form></span>

                </div>
                

                

         </div>

          

        
    
    </div>