
    
<x-layout-main>

    <br>
    <br>

    

    <div style="display: flex; justify-content: center; flex-direction:column, align-items:center">

        <h1>Login&nbsp;&nbsp;</h1>

        <form action="{{ route("login") }}" method="POST" style="display:flex; flex-direction:column; width: 500px" >
        
            @csrf
            
            <label for="email">E-mail</label>
            @error("email") <x-layout-err>{{ $message }}</x-layout-err> @enderror
            <input type="email" name="email" id="email">

            <label for="password">Password</label>
            @error("password") <x-layout-err>{{ $message }}</x-layout-err> @enderror
            <input type="password" name="password" id="password">
            
            <button type="submit">Submit</button>
            
        
        </form>
        
    </div>

</x-layout-main>
