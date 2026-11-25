<?php
/**
 * =====================================================================
 *  inc/datos-B.php · Configuración para la variante B · «Las Minas de Hierro Negro»
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

$nombreMazmorra = 'Las Minas de Hierro Negro';
$oroInicial     = 987.40;

// --- Integrantes: el primer héroe es el de tu variante en la UD2 ----------
$party = [
    ['nombre' => 'Aldric <el Arcano>',             'clase' => 'Hechicero',
     'fuerza' => 8,  'destreza' => 11, 'inteligencia' => 19, 'constitucion' => 10,
     'xp' => 3350, 'vida' => 90],
    ['nombre' => 'Brunhilda <Martillo de Hierro>', 'clase' => 'Guerrera',
     'fuerza' => 17, 'destreza' => 9,  'inteligencia' => 6,  'constitucion' => 15,
     'xp' => 2600, 'vida' => 200],
    ['nombre' => 'Sor Maren <la Paciente>',        'clase' => 'Clérigo',
     'fuerza' => 10, 'destreza' => 8,  'inteligencia' => 14, 'constitucion' => 13,
     'xp' => 1500, 'vida' => 120],
    ['nombre' => 'Hrothgar <Puño de Roble>',       'clase' => 'Guerrera',
     'fuerza' => 16, 'destreza' => 10, 'inteligencia' => 7,  'constitucion' => 16,
     'xp' => 1990, 'vida' => 150],
];

// --- Objetos comunes y costes de referencia ------------------------
$inventario = [
    'Antorcha'       => 3,
    'Poción de vida' => 4,
    'Pico de minero' => 2,
    'Pan de viaje'   => 5,
];

$precios = [
    'Poción de vida' => 25.0,
    'Antorcha'       => 1.5,
    'Pico de minero' => 12.0,
    'Pan de viaje'   => 0.8,
    'Llave de hierro' => 45.0,
    'Pepita de oro'  => 80.0,
];

// --- Habitaciones del escenario, listadas según su recorrido ---------------
// tipo: 'vacía' | 'trampa' | 'combate' | 'tesoro' | 'descanso'
// Solo las salas de tesoro pueden traer la clave 'objeto'.
$salas = [
    ['nombre' => 'Bocamina',                 'tipo' => 'vacía',    'valor' => 0],
    ['nombre' => 'Galería de los kobolds',   'tipo' => 'combate',  'valor' => 240],
    ['nombre' => 'Vagoneta desbocada',       'tipo' => 'trampa',   'valor' => 70],
    ['nombre' => 'Veta abandonada',          'tipo' => 'tesoro',   'valor' => 110, 'objeto' => 'Pepita de oro'],
    ['nombre' => 'Pozo de grisú',            'tipo' => 'trampa',   'valor' => 45],
    ['nombre' => 'Refugio de los mineros',   'tipo' => 'descanso', 'valor' => 60],
    ['nombre' => 'Caja del capataz',         'tipo' => 'tesoro',   'valor' => 75,  'objeto' => 'Llave de hierro'],
    ['nombre' => 'Túnel de los trolls',      'tipo' => 'combate',  'valor' => 360],
];

// --- Enemigo al final del recorrido --------------------------------------------------------
$jefe = [
    'nombre'     => 'Gólem de Hierro Negro',
    'vida'       => 2400,
    'ataque'     => 40,
    'recompensa' => 650,
    'llave'      => 'Llave de hierro',  // objeto necesario para entrar
];

// --- Plano representado mediante una matriz de símbolos ---------------------------
$mapa = [
    ['#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#'],
    ['#', 'E', '.', '.', 'S', '#', 'S', '.', '.', 'S', '.', '#'],
    ['#', '#', '#', '.', '#', '#', '.', '#', '#', '#', '.', '#'],
    ['#', 'S', '.', '.', '.', '.', '.', '~', '~', '#', 'S', '#'],
    ['#', '.', '#', '#', 'S', '#', '#', '~', '#', '#', '.', '#'],
    ['#', 'S', '.', '.', '.', '#', 'S', '.', '.', '.', 'J', '#'],
    ['#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#'],
];
