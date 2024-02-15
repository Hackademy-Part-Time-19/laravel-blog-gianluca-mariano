<div style="display:flex; flex-direction:row; justify-content: space-around; background-color: rgb(21, 21, 21); color: rgba(255, 255, 255, 0.7) !important; height: 50px; align-items: center;" >
    
        <a href="{{route('home')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Home</a>
        <a href="{{route('chisono')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Chi sono</a>
        <a href="{{route('articoli')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Articoli</a>

        <a href="{{route('upload_article')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Upload</a>

        @auth
                <form action="{{route("logout")}}" method="POST">
                        
                        @csrf
                        <p>{{auth()->user()->email}}</p>
                        <button type="submit">Logout</button>

                </form>
        @endauth

        @guest
                <div>

                        <a href="{{route('login')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Login</a>
                        <span>|</span>
                        <a href="{{route('register')}}" style="text-decoration: none !important;  color: rgba(255, 255, 255, 0.9) !important">Registrati</a>

                </div>
                

        @endguest

</div>