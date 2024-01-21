<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../estils/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="IniciIniciat.php"><i class="fas fa-home" style="color: white;"></i>
                        <b>Inicio</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <hr>
                        <div style="margin-right: 10px;" class="divv2">
                            <img class="imgg" src="../imgs/paisa.jpg" alt="User">
                            <div
                                style="display: flex; flex-direction: column; margin-left: 17px; flex-grow: 1; color: #9584F8;">
                                <p style="color:#fff; font-size: 24px;">Ayman Sbay Zekkari</p>
                                <p style="color:#fff; font-size: 18px;">ayman.zekkari@gmail.com</p>
                                <p style="color:#fff; font-size: 18px;">C/ Josep Carner, 5 , 3/2</p>
                            </div>
                        </div>
                        <hr>

                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a style="color:#fff;" class="nav-link" href="../index.php">Cerrar sesión</a>
                            </li>
                            <li class="nav-item">
                                <a style="color:#fff;" class="nav-link" href="#">Cambiar constraseña</a>
                            </li>
                            <hr>
                            <li class="nav-item">
                                <a style="color:#fff;" class="nav-link" href="login.php">Darse de baja</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <main class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center">Modificar artículo</h2>
            <form>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título*</label>
                    <input type="text" class="form-control" id="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="articulo" class="form-label">Artículo*</label>
                    <textarea class="form-control" id="articulo" rows="6" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input class="form-control" type="file" id="imagen">
                </div>
                <button type="submit" class="btn btn-primary">Insertar</button>
            </form>
        </div>
    </main>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="footer">
        <p class="footer-text">&copy; 2024 Ayman Sbay Zekkari. Todos los derechos reservados.</p>
        <p class="footer-text">Síguenos en nuestras redes sociales.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>