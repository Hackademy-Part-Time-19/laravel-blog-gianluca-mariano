

<x-layout-main >

    <x-slot:title>Articoli</x-slot>  

    <div style="display: flex; justify-content: center;">

        <h1 >Articles</h1>
    
    </div>

    <div style="display: flex; flex-direction: column; justify-content: space-around; align-items: center; width: 100%; height: 2000px; ">

    @if (count($articles) == 0)
        
        <p>There are no articles present..</p>

    @else

        @foreach ($articles as $article)

            <x-Card :article="$article" :articles="$articles">    
            </x-Card> 

        @endforeach

    @endif    
    
    </div>

</x-layout-main>

