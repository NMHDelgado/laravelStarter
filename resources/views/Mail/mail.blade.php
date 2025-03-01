<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1>Bonjour, </h1>
    <p>{{ $messag }}</p>
    <a href="{{ route('activate', $utilisateur->token) }}" > Verifiez votre email</a>
    <!-- @csrf
    @method('post') -->
</body>
</html>