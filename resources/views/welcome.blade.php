<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor Plus - Gestão Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Fontes e cores do layout */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9fcff;
            color: #333;
        }
        nav {
            background-color: #f1f8ff;
        }
        nav a {
            color: #0056b3;
            font-weight: bold;
        }
        .hero {
            background-color: #e8f5ff;
            padding: 5rem 1rem;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            color: #0056b3;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.25rem;
            margin-top: 1rem;
        }
        .hero .btn {
            background-color: #00c853;
            color: #fff;
            font-size: 1rem;
            padding: 0.8rem 1.5rem;
            margin-top: 1.5rem;
            border-radius: 5px;
            text-transform: uppercase;
        }
        .features {
            padding: 4rem 1rem;
        }
        .features .feature-item {
            text-align: center;
            padding: 1rem;
        }
        .features .feature-icon {
            font-size: 3rem;
            color: #0056b3;
            margin-bottom: 1rem;
        }
        .cta {
            background-color: #0056b3;
            color: #fff;
            padding: 3rem 1rem;
            text-align: center;
        }
        .cta h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .cta .btn {
            background-color: #00c853;
            color: #fff;
            padding: 0.8rem 2rem;
            border-radius: 5px;
            text-decoration: none;
        }
        footer {
            background-color: #f1f8ff;
            padding: 2rem 1rem;
            text-align: center;
        }
        footer a {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">Vendedor Plus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Funcionalidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Planos e Preços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Parcerias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Controle e Cresça com o Vendedor Plus</h1>
        <p>O sistema que torna a gestão do seu negócio mais eficiente e inovadora.</p>
        <a href="#" class="btn">Teste Grátis</a>
    </div>
</section>

<!-- Features Section -->
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-md-4 feature-item">
                <i class="fa fa-chart-line feature-icon"></i>
                <h3>Gestão Inteligente</h3>
                <p>Visualize suas vendas e controle seus resultados.</p>
            </div>
            <div class="col-md-4 feature-item">
                <i class="fa fa-lightbulb feature-icon"></i>
                <h3>Automatização</h3>
                <p>Reduza seu tempo com ferramentas automatizadas.</p>
            </div>
            <div class="col-md-4 feature-item">
                <i class="fa fa-user-friends feature-icon"></i>
                <h3>Fácil de Usar</h3>
                <p>Um sistema pensado para todos os tipos de usuários.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <h2>Pronto para transformar sua gestão?</h2>
    <a href="#" class="btn">Experimente Agora</a>
</section>

<!-- Footer -->
<footer>
    <p>© 2025 Vendedor Plus. Todos os direitos reservados.</p>
    <p>
        <a href="#">Política de Privacidade</a> |
        <a href="#">Termos de Uso</a>
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
