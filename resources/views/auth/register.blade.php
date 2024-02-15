
    
<x-layout-main>

    <br>
    <br>

    

    <div style="display: flex; justify-content: center; flex-direction:column, align-items:center">

        <h1>Register&nbsp;&nbsp;</h1>

        <form action="{{ route("register") }}" method="POST" style="display:flex; flex-direction:column; width: 500px" >
        
            @csrf
            
            <label for="name">Username</label>
            @error("name") <x-layout-err>{{ $message }}</x-layout-err> @enderror
            <input type="text" name="name" id="name">

            <label for="email">E-mail</label>
            @error("email") <x-layout-err>{{ $message }}</x-layout-err> @enderror
            <input type="email" name="email" id="email">

            <label for="password">Password</label>
            @error("password") <x-layout-err>{{ $message }}</x-layout-err> @enderror
            <input type="password" name="password" id="password">
            
            <label for="password_confirmation">Confirm password</label>
            @error("password_confirmation") <x-layout-err>{{ $message }}</x-layout-err> @enderror
            <input type="password" name="password_confirmation" id="password_confirmation">

            <button type="submit">Submit</button>

            
        
        </form>
        
    </div>

</x-layout-main>
