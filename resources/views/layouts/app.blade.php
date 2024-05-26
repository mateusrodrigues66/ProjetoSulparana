<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUL PARANÁ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .menuzin {
            width: 250px;
            background-color: #343a40;
            padding: 0;
            position: fixed;
            height: 100%;
            overflow: auto;
            display: flex;
            flex-direction: column;
            border-radius: 0 25px 25px 0; 
        }
        .logo {
            width: 150px;
            margin: 20px auto; 
            display: block; 
        }
        .paginas {
            flex-grow: 1;
            padding: 20px;
        }
        .menuzin a {
            color: #f8f9fa;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            position: relative;
            /*transition: color 0.3s ease, background-color 0.3s ease; */
            border-radius: 25px; 
            overflow: hidden; 
        }
        .menuzin a:hover {
            color: #343a40;
            background-color: #f8f9fa;
        }
        .menuzin a.active {
            color: #343a40; 
            background-color: #f8f9fa; 
            position: relative; 
            z-index: 1; 
        }
        .menuzin a.active:hover::before {
            width: 100%; 
        }
        .content {
            margin-left: 250px; 
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <div class="menuzin">
        <img src="{{ asset('LOGOSULPARANA1402.png') }}" alt="Logo" class="logo">
        <div class="paginas">
            <a href="#" class="active">Página inicial</a>
            <a href="#">Produção</a>
            <a href="#">Qualidade</a>
            <a href="#">Financeiro</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
