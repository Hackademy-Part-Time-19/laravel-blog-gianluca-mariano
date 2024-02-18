
<x-layout-main>

      
    @foreach ($categories as $category)

            <div>{{$category["name"]}}
                <a href="{{route("categories.edit", ["category" => $category["id"]])}}">Edit</a>
                <form action="{{route("categories.destroy", ["category" => $category["id"]])}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Delete</button>
                </form>
            </div>
                
            @endforeach

</x-layout-main>
