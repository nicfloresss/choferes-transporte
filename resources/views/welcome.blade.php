
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choferes y Transporte Urbano | Inicio</title>

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #263449;
        }

        header {
            background: #fff;
            padding: 22px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 12px #0000000d;
        }

        header h2 { color: #174b78; }

        nav a {
            color: #42546a;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        .hero {
            min-height: 340px;
            padding: 65px 8%;
            color: white;
            background:
                linear-gradient(90deg, #102f50eF, #102f5070),
                url('https://images.unsplash.com/photo-1570125909232-eb263c188f7e?w=1600')
                center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            line-height: 1.6;
        }

        main {
            padding: 45px 8%;
        }

        .section-title { margin-bottom: 25px; }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat {
            background: white;
            padding: 27px;
            border-radius: 12px;
            box-shadow: 0 3px 15px #0000000b;
            border-left: 4px solid #2878ad;
        }

        .stat p { color: #718096; margin-bottom: 12px; }
        .stat h2 { font-size: 32px; color: #174b78; }

        .route-card {
            background: white;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 3px 15px #0000000b;
            line-height: 1.8;
        }

        footer {
            padding: 25px;
            text-align: center;
            color: #718096;
        }

        @media(max-width: 600px) {
            header { flex-direction: column; gap: 15px; }
            nav a { margin: 0 8px; }
            .hero h1 { font-size: 30px; }
        }
    </style>
</head>

<body>
    <header>
        <h2>Choferes y Transporte Urbano</h2>
        <nav>
            <a href="/">Inicio</a>
            <a href="#administracion">Administración</a>
            <a href="#reportes">Reportes</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Sistema de Gestión de Choferes y Transporte Urbano</h1>
        <p>
            Administra la información de choferes, camiones, pasajeros y rutas
            desde una sola plataforma.
        </p>
    </section>

    <main>
        <h2 class="section-title">Resumen del sistema</h2>

        <section class="stats">
            <article class="stat">
                <p>Total de choferes</p>
                <h2>{{ $totalChoferes }}</h2>
            </article>

            <article class="stat">
                <p>Total de camiones</p>
                <h2>{{ $totalCamiones }}</h2>
            </article>

            <article class="stat">
                <p>Total de pasajeros</p>
                <h2>{{ $totalPasajeros }}</h2>
            </article>

            <article class="stat">
                <p>Total de rutas</p>
                <h2>{{ $totalRutas }}</h2>
            </article>
        </section>

        <h2 class="section-title">Ruta con más boletos registrados</h2>

        <section class="route-card">
            @if ($rutaMasBoletos)
                <p><strong>Ruta:</strong> {{ $rutaMasBoletos->numero_ruta }}</p>
                <p><strong>Origen:</strong> {{ $rutaMasBoletos->origen_ruta }}</p>
                <p><strong>Destino:</strong> {{ $rutaMasBoletos->destino_ruta }}</p>
                <p><strong>Boletos registrados:</strong> {{ $rutaMasBoletos->total_boletos }}</p>
            @else
                <p>Aún no hay boletos registrados.</p>
            @endif
        </section>
    </main>

    <footer>
        Sistema de Gestión de Choferes y Transporte Urbano
    </footer>
</body>
</html>
