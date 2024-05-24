<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>Login</title>
<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .background-image {
        background-image: url('data:image/jpeg;base64,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');
        background-size: cover;
        background-position: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .container {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .logo img {
        width: 180px;
        height: auto;
        margin-bottom: 20px;
    }
    .remember-me {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .remember-me input {
        margin-left: 185px;
    }
    .login-form input[type="text"],
    .login-form input[type="password"] {
        width: calc(100% - 22px); /* Ajuster la largeur pour inclure le padding et la bordure */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .login-form input[type="submit"] {
        width: calc(100% - 22px); /* Ajuster la largeur pour inclure le padding et la bordure */
        padding: 10px;
        background-color: #102C57;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-bottom: 10px;
    }

    .login-form input[type="submit"]:hover {
        background-color: #102C57;
    }

    .forgot-password {
        margin-top: 10px;
        color: #000000;
        text-decoration: none;
		font-weight: bold;
    }
	.oublier{
		color: #102C57;
		font-weight: bold;
		font-size: 18px;
	}
    @media screen and (max-width: 768px) {
        .container {
            padding: 5px;
            width: 250px;
        }
    }
</style>
</head>
<body>

<div class="background-image"></div>

<div class="container">
    <div class="logo">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi2J9H0OrQMYzzsS-8XvfU3y-2GNy4ggFhyphenhyphen_zNM7_K_rcUDMZKoSaeHq4xQHfYx3qJ3Qf-QjXFWBPTdnMLUsPHMUiSWrJ0UbcnjynC5Sp99UGOgBmFpbG-qLm85Y61R5M1b4keh76ZnzTIw/s582/%25D8%25A7%25D9%2584%25D9%2585%25D8%25AF%25D8%25B1%25D8%25B3%25D8%25A9+%25D8%25A7%25D9%2584%25D8%25B9%25D9%2584%25D9%258A%25D8%25A7+%25D9%2584%25D9%2584%25D8%25AA%25D9%2583%25D9%2586%25D9%2588%25D9%2584%25D9%2588%25D8%25AC%25D9%258A%25D8%25A7+%25D8%25A7%25D8%25B3%25D9%2581%25D9%258A.png" alt="Logo">
    </div>
    <div class="login-form">
        <h2>Bienvenue</h2>
        <form action="{{route('login')}}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <div class="remember-me">
                <label for="remember-me">Se souvenir de moi</label>
                <input type="checkbox" name="remember_me" id="remember-me">
            </div>
            <input type="submit" value="Se connecter" onclick="redirectToIndex()">
            <a href="#" class="forgot-password">Mot de passe <span class="oublier">oublié ?</span></a>
          
        </form>
    </div>
</div>
<script>
    function redirectToIndex() {
        window.location.href = "index.html";
    }
</script>
</body>
</html>
