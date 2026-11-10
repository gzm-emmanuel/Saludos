<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos en varios Idiomas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            text-align: center;
            padding: 50px;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            display: inline-block;
            max-width: 400px;
            width: 100%;
        }
        select, button {
            padding: 10px;
            font-size: 16px;
            margin-top: 15px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .saludo-box {
            margin-top: 25px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            min-height: 40px;
        }
        .btn-regresar {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-regresar:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Selecciona un Idioma</h2>
        
        <form method="POST" action="">
            <select name="idioma">
                <option value=""> Selecciona </option>
                <option value="es">Español</option>
                <option value="en">Inglés</option>
                <option value="fr">Francés</option>
                <option value="it">Italiano</option>
                <option value="jp">Japonés</option>
            </select>
            <button type="submit">Mostrar Saludo</button>
        </form>

        <div class="saludo-box">
            <?php
            if (isset($_POST['idioma'])) {
                $idiomaSeleccionado = $_POST['idioma'];

                switch ($idiomaSeleccionado) {
                    case 'es':
                        echo "¡Hola! ¿Cómo estás?";
                        break;
                    case 'en':
                        echo "Hello! How are you?";
                        break;
                    case 'fr':
                        echo "Bonjour! Comment ça va?";
                        break;
                    case 'it':
                        echo "¡Ciao! Come stai?";
                        break;
                    case 'jp':
                        echo "こんにちは！お元気ですか？";
                        break;
                    default:
                        echo "Por favor, selecciona un idioma válido.";
                        break;
                }
            } else {
                echo "Selecciona un idioma";
            }
            ?>
        </div>

        <br>
        <a href="index.php" class="btn-regresar">Volver a Bienvenida</a>
    </div>

</body>
</html>