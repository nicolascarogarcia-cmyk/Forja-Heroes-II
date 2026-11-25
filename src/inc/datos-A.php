<?php
/**
 * =====================================================================
 *  inc/datos-A.php · Configuración para la variante A · «La Cripta de los Ecos»
 * =====================================================================
 *  Archivo PHP sin cierre final. La información está preparada:
 *  escritos: el ejercicio requiere recorrer las estructuras y operar con sus valores.
 *
 *  Estructuras que contiene:
 *   - $party      matriz: array indexado de arrays asociativos (4 héroes)
 *   - $inventario array asociativo objeto => cantidad
 *   - $precios    array asociativo objeto => precio en monedas de oro
 *   - $salas      matriz: array indexado de salas (arrays asociativos)
 *   - $jefe       array asociativo
 *   - $mapa       matriz bidimensional de caracteres (filas × columnas)
 */

declare(strict_types=1);

$nombreMazmorra = 'La Cripta de los Ecos';
$oroInicial     = 1520.75;

// --- Integrantes: el primer héroe es el de tu variante en la UD2 ----------
$party = [
    ['nombre' => 'Brunhilda <Martillo de Hierro>', 'clase' => 'Guerrera',
     'fuerza' => 17, 'destreza' => 9,  'inteligencia' => 6,  'constitucion' => 15,
     'xp' => 2350, 'vida' => 118],
    ['nombre' => 'Aldric <el Arcano>',             'clase' => 'Hechicero',
     'fuerza' => 8,  'destreza' => 11, 'inteligencia' => 19, 'constitucion' => 10,
     'xp' => 3120, 'vida' => 41],
    ['nombre' => 'Vex <Sin Nombre>',               'clase' => 'Pícara',
     'fuerza' => 11, 'destreza' => 18, 'inteligencia' => 12, 'constitucion' => 12,
     'xp' => 1890, 'vida' => 96],
    ['nombre' => 'Sor Maren <la Paciente>',        'clase' => 'Clérigo',
     'fuerza' => 10, 'destreza' => 8,  'inteligencia' => 14, 'constitucion' => 13,
     'xp' => 1210, 'vida' => 100],
];

// --- Objetos comunes y costes de referencia ------------------------
$inventario = [
    'Poción de vida' => 2,
    'Antorcha'       => 6,
    'Cuerda'         => 1,
    'Pan de viaje'   => 4,
];

$precios = [
    'Poción de vida' => 25.0,
    'Antorcha'       => 1.5,
    'Cuerda'         => 4.0,
    'Pan de viaje'   => 0.8,
    'Llave de hueso' => 60.0,
    'Gema de ónice'  => 120.0,
];

// --- Habitaciones del escenario, listadas según su recorrido ---------------
// tipo: 'vacía' | 'trampa' | 'combate' | 'tesoro' | 'descanso'
// Solo las salas de tesoro pueden traer la clave 'objeto'.
$salas = [
    ['nombre' => 'Vestíbulo derrumbado',    'tipo' => 'vacía',    'valor' => 0],
    ['nombre' => 'Pasillo de las cuchillas', 'tipo' => 'trampa',   'valor' => 60],
    ['nombre' => 'Nido de ratas gigantes',  'tipo' => 'combate',  'valor' => 200],
    ['nombre' => 'Cofre del guardián',      'tipo' => 'tesoro',   'valor' => 150, 'objeto' => 'Llave de hueso'],
    ['nombre' => 'Capilla en ruinas',       'tipo' => 'descanso', 'valor' => 40],
    ['nombre' => 'Guardia esquelética',     'tipo' => 'combate',  'valor' => 320],
    ['nombre' => 'Altar olvidado',          'tipo' => 'tesoro',   'valor' => 90,  'objeto' => 'Poción de vida'],
];

// --- Enemigo al final del recorrido --------------------------------------------------------
$jefe = [
    'nombre'     => 'Liche de la Cripta',
    'vida'       => 1000,
    'ataque'     => 70,
    'recompensa' => 500,
    'llave'      => 'Llave de hueso',   // objeto necesario para entrar
];

// --- Plano representado mediante una matriz de símbolos ---------------------------
$mapa = [
    ['#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#'],
    ['#', 'E', '.', 'S', '.', '.', 'S', '#', 'S', '.', '#'],
    ['#', '#', '#', '.', '#', '#', '.', '#', '.', '#', '#'],
    ['#', 'S', '.', 'S', '~', '~', '.', '.', 'S', '.', '#'],
    ['#', '.', '#', '#', '#', '~', '#', '#', '#', '.', '#'],
    ['#', 'S', '.', '.', '.', '.', '.', '.', '.', 'J', '#'],
    ['#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#'],
];
