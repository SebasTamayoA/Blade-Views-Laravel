<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap y otros estilos aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Agrega cualquier otro CSS personalizado aquí -->
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Encabezado -->
    <header>
        <nav class="navbar bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand">Paises</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="container mt-4 flex-grow">
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer class="bg-dark text-light text-center py-3 mt-auto">
        Mi Sitio Web &copy; {{ date('Y') }}
    </footer>

    <!-- Agrega los enlaces a los archivos JavaScript de Bootstrap y otros scripts aquí -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Agrega cualquier otro JavaScript personalizado aquí -->
</body>
</html>
