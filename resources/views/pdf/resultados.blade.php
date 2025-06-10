<!DOCTYPE html>
<html>
<head>
    <title>Resultados de tu Test</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/><circle cx="20" cy="80" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .header h1 {
            font-size: 2.5em;
            font-weight: 300;
            letter-spacing: -1px;
            position: relative;
            z-index: 1;
        }

        .header .subtitle {
            font-size: 1.1em;
            opacity: 0.9;
            margin-top: 10px;
            position: relative;
            z-index: 1;
        }

        .content {
            padding: 40px 30px;
        }

        .destino {
            margin-bottom: 40px;
        }

        .destino h2 {
            font-size: 2.2em;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid #4CAF50;
            position: relative;
        }

        .destino h2::after {
            position: absolute;
            right: -40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.8em;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .info-section {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            border-left: 5px solid #764ba2;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .info-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .info-section h3 {
            color: #2c3e50;
            font-size: 1.3em;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-section h3::before {
            content: '';
            width: 8px;
            height: 8px;
            background: #764ba2;
            border-radius: 50%;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #495057;
            flex: 1;
        }

        .info-value {
            font-weight: 500;
            color: #2c3e50;
            text-align: right;
            flex: 1;
        }

        .currency {
            background: #e8f5e8;
            color: #964caf;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.9em;
            font-weight: 600;
        }

        .requirement-yes {
            background: #e8f5e8;
            color: #964caf;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 500;
        }

        .requirement-no {
            background: #fff3e0;
            color: #f57c00;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.9em;
            font-weight: 500;
        }

        .highlight-box {
            background: linear-gradient(135deg, #964caf, #852a9c);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 30px 0;
        }

        .highlight-box h3 {
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 0.95em;
        }

        /* Estilos para PDF */
        @media print {
            body {
                background: white !important;
                padding: 0 !important;
            }

            .container {
                box-shadow: none !important;
                border-radius: 0 !important;
            }

            .info-section:hover {
                transform: none !important;
                box-shadow: none !important;
            }
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Resultados de tu Test</h1>
            <p class="subtitle">Working Holiday - Tu aventura ideal te espera</p>
        </div>

        <div class="content">
            <div class="destino">
                <h2>Tu destino ideal: {{ $resultados['nombre'] ?? 'No encontrado' }}</h2>

                <div class="highlight-box">
                    <h3>¡Perfecto para tu perfil!</h3>
                    <p>Este destino coincide con tus preferencias y requisitos</p>
                </div>

                <div class="info-grid">
                    <div class="info-section">
                        <h3> Información Financiera</h3>

                        <div class="info-item">
                            <span class="info-label">Moneda:</span>
                            <span class="info-value">
                                <span class="currency">{{ $resultados['moneda'] ?? 'No especificada' }}</span>
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Salario mínimo:</span>
                            <span class="info-value">{{ $resultados['salario_minimo'] ?? 'N/A' }} €</span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Costo de vida promedio:</span>
                            <span class="info-value">{{ $resultados['costo_vida_promedio'] ?? 'N/A' }} €</span>
                        </div>
                    </div>

                    <div class="info-section">
                        <h3>Requisitos</h3>

                        <div class="info-item">
                            <span class="info-label">Estudios:</span>
                            <span class="info-value">
                                @if(isset($resultados['requiere_estudios']))
                                    @if($resultados['requiere_estudios'])
                                        <span class="requirement-yes">Requeridos</span>
                                    @else
                                        <span class="requirement-no"> No requeridos</span>
                                    @endif
                                @else
                                    <span class="requirement-no"> No especificado</span>
                                @endif
                            </span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Nivel de Inglés:</span>
                            <span class="info-value">
                                @if(isset($resultados['requiere_idiomas']))
                                    @if($resultados['requiere_idiomas'])
                                        <span class="requirement-yes"> Necesario</span>
                                    @else
                                        <span class="requirement-no"> No indispensable</span>
                                    @endif
                                @else
                                    <span class="requirement-no"> No especificado</span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Gracias por usar nuestro servicio de test de Working Holiday </p>
            <p style="margin-top: 5px; opacity: 0.8; font-size: 0.9em;">Tu aventura internacional comienza aquí</p>
        </footer>
    </div>
</body>
</html>
