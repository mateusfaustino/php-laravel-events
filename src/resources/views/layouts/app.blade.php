<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/fw/css/all.css">
    
    @yield('styles')
    <title>@yield('title')</title>
</head>
<body>
<div class='navbar'>
        <div class="navbar_logo">
            <a href="/">
                logo
            </a>    
        </div>
        <ul class="navbar_menu">
            <li class="menu_item"><a href='/events'>eventos</a></li>
            <li class="menu_item"><a href='/events/create'>criar evento</a></li>
            <li class="menu_item"><a href='/login'>entrar</a></li>
            <li class="menu_item"><a href='/signup'>cadastrar</a></li>
        </ul>
        <div class='navbar_btn'>
            <div class="navbar_btn_row row1"></div>
            <div class="navbar_btn_row row2"></div>
            <div class="navbar_btn_row row3"></div>
        </div>
    </div>
    <script>
        const navbarBtn = document.querySelector(".navbar_btn");
        const navbar = document.querySelector(".navbar");
        navbarBtn.addEventListener("click",()=>{
            navbar.classList.toggle("navbar--open");
        })
    </script>
    @yield('content')
</body>
</html>