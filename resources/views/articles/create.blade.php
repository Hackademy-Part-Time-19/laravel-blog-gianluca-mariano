<x-layout-main>






</x-layout-main>

<div style="display: flex; flex-direction: column;justify-content: center; align-items: center;">


    <form enctype="multipart/form-data" action=" {{route('articles.store')}}" method="POST" style="display: flex; flex-direction: column; width: 500px; align-items: center; ">

        @csrf

        <h2>Crea un articolo</h2>
        
        <label for="title">Titolo&nbsp;</label>
        @error('title')  <span style="color: red; background-color: rgba(255, 0, 0, 0.2); border-radius: 20px; text-align: center;">{{"Il campo non può essere vuoto!"}}</span>  @enderror
        <input value="{{old('title')}}" type="text" name="title" id="title" placeholder="">

        
        <label for="description">Descrizione&nbsp;</label>
        @error('description') <span style="color: red; background-color: rgba(255, 0, 0, 0.2); border-radius: 20px; text-align: center;">{{"Il campo non può essere vuoto!"}}</span> @enderror
        <input value="{{old('description')}}" name="description" id="description" cols="30" rows="10">

       
        <label for="categories[]">Categoria&nbsp;</label>
       
            
            @foreach ($categories as $category)
            <div>
            <input type="checkbox" name="categories[]" id="" value="{{$category["id"]}}">{{$category["name"]}}
            </div>
            <br>

            @endforeach
        

        @error('category_id') <span style="color: red; background-color: rgba(255, 0, 0, 0.2); border-radius: 20px; text-align: center;">{{"Il campo non può essere vuoto!"}}</span> @enderror


        <label for="image">Immagine&nbsp;</label>
       
        <input value="{{old('image')}}" type="file" name="image" id="image">


        <br>
        <button type="submit">Pubblica</button>
        

        @if (session("uploaded"))

            <x-layout-succ>Articolo pubblicato!</x-layout-succ>

        @elseif (session("notUploaded"))

            <x-layout-err>Si è verificato un errore.</x-layout-err>

        @endif


        
        
    </form>


</div>