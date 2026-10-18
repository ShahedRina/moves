<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Register</h1>
    @if ($errors ->any())
        <div>
        <ul>
            @foreach ($errors -> all()  as $error )
              <li>{{$error}}</li>
                
            @endforeach
        </ul>
 @endif

</div>

    <form  method="Post" action= "{{route('register.register')}}">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">password</label>
        <input type="password" name="password" id="email" required>

        <label for="password_confirmation">confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>

        <button type="submit"> Register</button>

    </form>


</body>
</html>