

<x-layout-main>

<form method="POST" action=" {{route("categories.update", ["category" => $category ])}}">

    @csrf
    @method("PUT")
    <label for="name">Edit the category's name</label>
    @error("name")
        {{$error_message}}
    @enderror
    <input type="text" name="name" id="name" value="{{old("name", $category)}}">
    <button type="submit">Submit changes</button>

</form>
   

</x-layout-main>