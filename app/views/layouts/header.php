<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/header.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <nav class="container-navegation">
            <div class="logo">
                <img class="icon-logo" src="/public/img/logo-icon.png" alt="Logo">
                <span class="text-logo">Listen</span>
            </div>
            <div class="active-hidden boton-nav" onclick="toggleMenu()">
                 ≡
             </div> 
             <div class="options">
                <ul id="options" class="mobile">
                    <li class="option "><a href="#">Home</a></li>
                    <li class="option"><a href="#">Music - Lyrics</a></li>
                    <li class="option"><a href="#">About us</a></li>
                </ul>
            </div>
            <div class="buttons">
                    <button class="btn-account">Account</button>
                    <button class="btn-play">Play</button>
            </div>
        </nav>
    </header>

    <script src="/public/js/header-mobile.js"></script>
    
