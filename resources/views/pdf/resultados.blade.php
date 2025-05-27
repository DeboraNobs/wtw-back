{{-- <!DOCTYPE html>
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


 --}}

<!DOCTYPE html>
<html>
<head>
    <title>Resultados de tu Test</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: #667eea;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0 0 10px 0;
            font-size: 28px;
            font-weight: 600;
        }

        .header .subtitle {
            margin: 0;
            font-size: 16px;
            opacity: 0.9;
        }

        .content {
            padding: 30px 20px;
        }

        .destino-highlight {
            background: #667eea;
            color: white;
            padding: 25px 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
        }

        .destino-highlight h2 {
            margin: 0 0 10px 0;
            font-size: 18px;
            font-weight: 500;
        }

        .destino-name {
            font-size: 32px;
            font-weight: 700;
            color: #00FFA3;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-sections {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        .info-section {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            padding: 0 10px;
        }

        .info-card {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            height: 100%;
        }

        .info-card.financial {
            border-left: 4px solid #10b981;
        }

        .info-card.requirements {
            border-left: 4px solid #f59e0b;
        }

        .info-card h3 {
            color: #333;
            font-size: 18px;
            font-weight: 600;
            margin: 0 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 2px solid #e9ecef;
        }

        .info-item {
            margin-bottom: 12px;
            padding: 8px 0;
        }

        .info-label {
            font-weight: 600;
            color: #6c757d;
            display: inline-block;
            min-width: 120px;
        }

        .info-value {
            font-weight: 500;
            color: #333;
        }

        .highlight-value {
            color: #667eea;
            font-weight: 600;
        }

        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
        }

        .footer p {
            margin: 5px 0;
        }

        .date-stamp {
            font-size: 12px;
            opacity: 0.7;
        }

        /* Estilos específicos para PDF */
        @media print {
            body {
                background: white;
                padding: 0;
            }

            .container {
                box-shadow: none;
                border-radius: 0;
            }

            .destino-name {
                color: #00CC66 !important;
            }

            .highlight-value {
                color: #4a5568 !important;
            }
        }

        /* Para compatibilidad con generadores de PDF */
        * {
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
        }

        /* Responsive design para móviles */
        @media (max-width: 768px) {
            .info-sections {
                display: block;
            }

            .info-section {
                display: block;
                width: 100%;
                margin-bottom: 20px;
            }

            .destino-name {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Resultados de tu Test</h1>
            <p class="subtitle">Working Holiday Visa - Tu aventura perfecta te espera</p>
        </div>

        <div class="content">
            <div class="destino-highlight">
                <h2>Tu destino ideal</h2>
                <div class="destino-name">República Checa</div>
            </div>

            <div class="info-sections">
                <div class="info-section">
                    <div class="info-card financial">
                        <h3>💰 Información Financiera</h3>
                        <div class="info-item">
                            <span class="info-label">Moneda:</span>
                            <span class="info-value">Corona checa</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Salario mínimo:</span>
                            <span class="info-value highlight-value">900 €</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Costo de vida:</span>
                            <span class="info-value highlight-value">900 €</span>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <div class="info-card requirements">
                        <h3>📋 Requisitos</h3>
                        <div class="info-item">
                            <span class="info-label">Estudios:</span>
                            <span class="info-value">✅ Requeridos</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Inglés:</span>
                            <span class="info-value">✅ Necesario</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>🌍 Gracias por usar nuestro servicio de test de Working Holiday</p>
            <p class="date-stamp">Generado el 26/05/2025 21:18</p>
        </div>
    </div>
</body>
</html>
