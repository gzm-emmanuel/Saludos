<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            display: inline-block;
        }
        .logo {
            width: 120px;
            height: 120px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 auto 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #666;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        .logo-container {
    width: 120px;
    height: 120px;
    margin: 0 auto 20px auto;
}

.logo-img {
    width: 100%;
    height: 100%;
    object-fit: contain; 
    border-radius: 50%; 
}
    </style>
</head>
<body>

    <div class="container">
        
   <div class="logo-container">
    <img src="logocbtis217.jpg" alt="Logotipo de la escuela" class="logo-img">
   </div>

        <h1>¡Bienvenido!</h1>

        <p><strong>Nombre del alumno:</strong>Zamudio Guzman Emmanuel Agustin</p>
        <p><strong>Nombre de la tarea:</strong>Página con varias ramas</p>
        <p><strong>Escuela:</strong>CBTis217</p>
        <p><strong>Fecha:</strong> <?php echo date("d/m/Y"); ?></p>

        <br>
        <a href="saludos.php">Ir a Saludar</a>
    </div>

</body>
</html>