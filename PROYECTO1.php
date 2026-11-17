<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende y juega - Inicio</title>
    <!-- Tus hojas de estilos -->
    <link rel="stylesheet" href="estilos/estil.css">
    <link rel="stylesheet" href="estilos/arena.css">
    <!-- Script de combate cargado de forma limpia con defer o al final -->
    <script src="js/combate.js" defer></script>
</head>
<body>

    <div class="browser-frame">
        <header class="site-header">
            <div class="logo-container">
                <span class="logo-icon">🎮</span>
                <h1 class="site-title">Aprende y juega</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="PROYECTO1.php" class="active">Inicio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Ventana.php" style="color: #ffeb3b; font-weight: bold;">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>

        <main class="site-main">
            <section class="content-section">
                <h2>Bienvenido a Aprende y juega</h2>
                <p>Explora nuestras herramientas y recursos interactivos diseñados para optimizar tu aprendizaje de manera sencilla y práctica.</p>
                
                <p>AQUI VA EL EJERCICIO.</p>
                <div class="media-container">
                    <img src="imagenes/problema.jpe" alt="Problema educativo" class="main-image-small">
                </div>

                <p>Al responderlo correctamente, se recompensará con puntos de experiencia los cuales podrán ser utilizados para mejorar al personaje y obtener habilidades especiales.</p>
                
                <h3>Área de Combate</h3>
                <div class="arena-combate">
                    
                    <!-- CONTADOR DE MONEDAS EN LA ESQUINITA -->
                    <div class="contador-monedas-container">
                        <span class="icono-moneda">🪙</span>
                        <span id="contador-monedas">0</span>
                    </div>

                    <div class="personaje-container">
                        <img id="sprite-personaje" src="imagenes/esperando.gif" alt="Mi Personaje" class="pixel-art">
                    </div>
                    <div class="enemigo-container">
                        <img id="sprite-enemigo" src="imagenes/caminandoenemigo.gif" alt="Enemigo" class="pixel-art enemigo-animado">
                    </div>
                </div>
            </section>

            <aside class="sidebar">
                <h3>Secciones</h3>
                <ul>
                    <!-- Cambiamos el enlace por un botón interactivo -->
                    <li><button id="btn-abrir-mejoras" class="btn-sidebar-link">Mejoras</button></li>
                    <li><a href="#">Divagar más en el tema</a></li>
                </ul>
                
                <div class="info-box">
                    <span class="globe-icon">🌐</span>
                    <p>Plataforma Activa</p>
                </div>
            </aside>
        </main>

        <main class="site-footer">
            <p>© 2026 Aprende y juega. Todos los derechos reservados.</p>
        </main>
    </div>
<!-- VENTANA MODAL DEL ÁRBOL DE HABILIDADES -->
    <div id="modal-mejoras" class="modal-overlay">
        <div class="modal-content">
            <button id="btn-cerrar-modal" class="btn-cerrar">×</button>
            <h2>Árbol de Habilidades</h2>
            <p class="modal-sub">Monedas disponibles: <span id="monedas-arbol">0</span> 🪙</p>

            <!-- Estructura en forma de rama conectada -->
            <div class="arbol-rama-container">
                
                <!-- Nodo 1: Base -->
                <div class="nodo-habilidad" data-nivel="1" id="nodo-ataque">
                    <div class="icono-nodo">⚔️</div>
                    <div class="info-nodo">
                        <h4>Filo de Bronce</h4>
                        <p>Aumenta el daño base.</p>
                        <span>Nivel: <span id="lvl-ataque">1</span> | Costo: <span id="costo-ataque">50</span>🪙</span>
                    </div>
                    <button class="btn-desbloquear" id="comprar-ataque">Mejorar</button>
                </div>

                <!-- Línea conectora de la rama -->
                <div class="rama-conector"></div>

                <!-- Nodo 2: Rama intermedia -->
                <div class="nodo-habilidad" data-nivel="1" id="nodo-pasivo">
                    <div class="icono-nodo">🪙</div>
                    <div class="info-nodo">
                        <h4>Aura de Riqueza</h4>
                        <p>Genera monedas más rápido.</p>
                        <span>Nivel: <span id="lvl-pasivo">1</span> | Costo: <span id="costo-pasivo">80</span>🪙</span>
                    </div>
                    <button class="btn-desbloquear" id="comprar-pasivo">Mejorar</button>
                </div>

                <!-- Línea conectora de la rama -->
                <div class="rama-conector"></div>

                <!-- Nodo 3: Rama avanzada -->
                <div class="nodo-habilidad bloqueado" data-nivel="0" id="nodo-critico">
                    <div class="icono-nodo">🔥</div>
                    <div class="info-nodo">
                        <h4>Golpe Crítico</h4>
                        <p>Probabilidad de doble daño.</p>
                        <span>Requiere Nv. 3 en Filo</span>
                    </div>
                    <button class="btn-desbloquear" id="comprar-critico" disabled>Bloqueado</button>
                </div>

            </div>
        </div>
    </div>
</body>
</html>