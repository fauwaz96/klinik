<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{url('user')}}">
        @csrf
        <div>
            <label for="name">Nama</label>
            <input type="text" name="inp_name" id="name">
        </div>
    
        <div>
            <label for="email">Email</label>
            <input type="text" name="inp_email" id="email">
        </div>
    
        <div>
            <label for="password">Password</label>
            <input type="password" name="inp_password" id="password">
        </div>

        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>