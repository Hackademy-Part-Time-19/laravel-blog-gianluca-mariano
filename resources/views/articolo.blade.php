<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articolo</title>
</head>
<body style="margin: 0px;">
    
    <x-Navbar>
    </x-Navbar>

    <div style="display: flex; flex-direction: column; justify-content: space-around; align-items: center; width: 100%; height: 1000px; ">
    
        
        <div style="height: 300px; width: 300px; background-color: black; color: white; display: flex; align-items: center; flex-direction: column; justify-content: center;">

                <h2>{{ $articolo_interessato["title"] }}</h2>
                <p style="font-size: small; height: 50px; width: 100px; background-color: yellow; border-radius: 100px; color: black; text-align: center; align-items: center; display: flex; justify-content: center; font-weight: bolder;">{{ $articolo_interessato["category"] }}</p>
                <p>{{ $articolo_interessato["description"] }}</p>
                

         </div>

          

        
    
    </div>
    


</body>
</html>

-->

<x-layout-main>

    <x-slot:title>Articolo interessato</x-slot>  

</x-layout-main>

<div style="display: flex; flex-direction: column; justify-content: space-around; align-items: center; width: 100%; height: 1000px; ">
    
        
        <div style="height: 300px; width: 300px; background-color: black; color: white; display: flex; align-items: center; flex-direction: column; justify-content: center;">

                <h2>{{ $articolo_interessato["title"] }}</h2>
                <p style="font-size: small; height: 50px; width: 100px; background-color: yellow; border-radius: 100px; color: black; text-align: center; align-items: center; display: flex; justify-content: center; font-weight: bolder;">{{ $articolo_interessato["category"] }}</p>
                <p>{{ $articolo_interessato["description"] }}</p>
                

         </div>

          

        
    
    </div>