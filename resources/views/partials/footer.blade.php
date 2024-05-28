<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de Footer de Empresa</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1 0 auto;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            flex-shrink: 0;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="content">
        <!-- Contenido principal de la página -->
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <h3>Los Choclitos</h3>
                <p>Dirección de la Empresa</p>
                <p>Teléfono: +1 123-456-7890</p>
                <p>Email: info@empresa.com</p>
            </div>
            <div class="footer-links">
                <a href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Productos</a>
                <a href="#">Contacto</a>
            </div>
        </div>
        <p>&copy; <?php echo date("Y"); ?> Nombre de la Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
