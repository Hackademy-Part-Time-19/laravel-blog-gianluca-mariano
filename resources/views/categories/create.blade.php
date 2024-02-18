
<x-layout-main>

    <form action="{{route("categories.store")}}" method="POST">
        
        @csrf
        

        <label for="name">Category's name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    
    </form>

</x-layout-main>