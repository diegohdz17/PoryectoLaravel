<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contacto</h2>
    <form action="/crear-contacto" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono"><br><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="5" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>