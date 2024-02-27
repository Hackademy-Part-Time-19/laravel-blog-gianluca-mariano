<div style="height: 800px; width: 500px; background-color: black; color: white; display: flex; align-items: center; flex-direction: column; justify-content: center;">

    <h2>{{ $article["title"] }}</h2>

                <p style="font-size: small; height: 75px; width: 100px; background-color: yellow; border-radius: 100px; color: black; text-align: center; align-items: center; display: flex; justify-content: center; font-weight: bolder;">
                    @foreach ($article->categories as $category)
                            {{$category->name}}
                    @endforeach
                </p>
                <p>{{ $article["description"] }}</p>
                <a href="{{route("articles.show", ['article' => $article["id"]])}}"> Read the article</a> 
                <img style="object-fit: contain; width: 100px;" src="{{Storage::url($article["image"])}}" alt="">

</div>