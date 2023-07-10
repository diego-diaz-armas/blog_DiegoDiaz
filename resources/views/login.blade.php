<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel dashboard</title>
    </head>

    <body>
    @include('partials.nav')
        <h1>login aprendible</h1>

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)

                    {{ $error }}

                @endforeach
            </ul>
        @endif
        
        <form method="POST"> 

            @csrf
           
            <label>
                <input name="email" type="email" required placeholder="Email...">
            </label>
            
            
            <label>
                <input name="password" type="password" required placeholder="password...">
            </label>
           
            <br>
            <label>
                <input type="checkbox" name="remember">
                Recordar mi secion.
            </label>
            <br>
                <button type="submit">Login</button>

        </form>
        
    </body>    

</html>