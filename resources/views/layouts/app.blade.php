<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SUL PARANÁ')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/PaginaInicial.css') }}" rel="stylesheet">
</head>
<body>
    <div class="menuzin">
        <img src="{{ asset('LOGOSULPARANA1402.png') }}" alt="Logo" class="logo">
        <div class="paginas">
            <a href="#" class="active">Página inicial</a>
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" id="producaoDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Produção
                </a>
                <!-- resources/views/layouts/app.blade.php -->
                <ul class="dropdown-menu" aria-labelledby="producaoDropdown">
                    <li><a class="dropdown-item" href="{{ route('producao.opcao1') }}">Opção 1</a></li>
                    <li><a class="dropdown-item" href="{{ route('producao.opcao2') }}">Opção 2</a></li>
                    <li><a class="dropdown-item" href="{{ route('producao.opcao3') }}">Opção 3</a></li>
                </ul>
            </div>
            <a href="#">Qualidade</a>
            <a href="#">Financeiro</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
