<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="shortcut icon" href="favicon-removebg-preview.png" type="image/x-icon">
    <title>Mauricio Developer</title>
</head>
<body>

<div class="header" id="header">

<button onclick="funcionaSidebar"  class="button_icon">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg>
</button>
    
    <div class="logo_header">
        <img src="Logo-me1.png" alt="Logo Mauricio Developer">
    </div>

    <div class="navigation_header" id="navigation_header">

    <button class="button_icon">

    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
    </svg>

    </button>

        <a href="#">Início</a>
        <a href="#">Cursos</a>
        <a href="#">Contato</a>
        <a href="#">Objetivos</a>
    </div>
    
</div>

<div class="content" id="content">
    <h2>Menu Responsivo</h2>
</div>

<script>
    var header = document.getElementById('header');
    var navigationheader = document.getElementById('navigation_header');
    var content = document.getElementById('content');
    var showSidebar = false;

    function funcionaSidebar(){
        showSidebar = !showSidebar;
        
        if(showSidebar){
            navigationheader.style.marginLeft= '-10vw';
        }
        else{
            navigationheader.style.marginLeft= '-100vw';
        }
    }

</script>
    
</body>
</html>