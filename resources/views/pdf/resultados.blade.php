<!DOCTYPE html>
<html>
<head>
    <title>Resultados de tu Test</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .destino { margin-bottom: 30px; }
        .match { font-size: 24px; color: #4CAF50; }
        .info-section { margin-bottom: 15px; }
        h2 { color: #333; }
        .info-section h3 { color: #555; border-bottom: 1px solid #eee; padding-bottom: 5px; margin-bottom: 10px; }
        .info-section p { margin: 5px 0; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Resultados de tu Test de Working Holiday</h1>
    </div>

    <div class="destino">
        <h2>Tu destino ideal: {{ $resultados['nombre'] ?? 'No encontrado' }}</h2>

        <div class="info-section">
            <h3>Información Financiera</h3>
            <p>Moneda: {{ $resultados['moneda'] ?? 'No especificada' }}</p>
            <p>Salario mínimo: {{ $resultados['salario_minimo'] ?? 'N/A' }} €</p>
            <p>Costo de vida promedio: {{ $resultados['costo_vida_promedio'] ?? 'N/A' }} €</p>
        </div>

        <div class="info-section">
            <h3>Requisitos</h3>
            <p>Estudios: {{ isset($resultados['requiere_estudios']) ? ($resultados['requiere_estudios'] ? 'Requeridos' : 'No requeridos') : 'No especificado' }}</p>
            <p>Inglés: {{ isset($resultados['requiere_idiomas']) ? ($resultados['requiere_idiomas'] ? 'Necesario' : 'No indispensable') : 'No especificado' }}</p>
        </div>


    </div>

    <footer>
        <p>Gracias por usar nuestro servicio de test de Working Holiday</p>
    </footer>
</body>
</html>



