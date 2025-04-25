<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" value="{{ old('password') }}">

        <button type="submit">Login</button>
    </form>
</body>
</html>