<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono</title>
</head>
<body style="margin: 0px;">

    <div style="display:flex; flex-direction:row; justify-content: space-around; background-color: rgb(21, 21, 21); color: rgba(255, 255, 255, 0.7) !important; height: 50px; align-items: center;" >
    
        <a href="{{route('home')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Home</a>
        <a href="{{route('chisono')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Chi sono</a>
        <a href="{{route('articoli')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Articoli</a>

    </div>


    <h1>{{ $titolo }}</h1>

    <p>{{ $bio }}</p>


</body>
</html>