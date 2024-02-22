<x-layout-main>






</x-layout-main>

<div style="display: flex; flex-direction: column;justify-content: center; align-items: center;">


    <form action=" {{ route('articles.update', ["article" => $article]) }}" method="POST" style="display: flex; flex-direction: column; width: 500px; align-items: center; ">

        @csrf
        @method("PUT")

        <h2>Crea un articolo</h2>
        
        <label for="title">Titolo&nbsp;</label>
        @error('title')  <span style="color: red; background-color: rgba(255, 0, 0, 0.2); border-radius: 20px; text-align: center;">{{"Il campo non può essere vuoto!"}}</span>  @enderror
        <input value="{{old('title', $article)}}" type="text" name="title" id="title" placeholder="">

        
        <label for="description">Descrizione&nbsp;</label>
        @error('description') <span style="color: red; background-color: rgba(255, 0, 0, 0.2); border-radius: 20px; text-align: center;">{{"Il campo non può essere vuoto!"}}</span> @enderror
        <input value="{{old('description' , $article)}}" name="description" id="description" cols="30" rows="10">

       
        <label for="category_id">Categoria&nbsp;</label>
        @error('category') <span style="color: red; background-color: rgba(255, 0, 0, 0.2); border-radius: 20px; text-align: center;">{{"Il campo non può essere vuoto!"}}</span> @enderror
        <select name="category_id" id="category_id">

            
            @foreach ($categories as $category)
                
            <option value="{{$category["id"]}}">{{$category["name"]}}</option>


            @endforeach
            

        </select>


        <br>
        <button type="submit">Update</button>
        

        @if (session("uploaded"))

            <x-layout-succ>Article updated!</x-layout-succ>

        @elseif (session("notUploaded"))

            <x-layout-err>Error.</x-layout-err>

        @endif


        
        
    </form>


</div>