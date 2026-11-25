# Forja Heroes II · Guía de la UD3

Este ejercicio amplía el proyecto de la UD2. El paquete incluye los archivos de la actividad y se plantea usar el mismo entorno Docker LAMP que en la práctica anterior (`docker-lamp`); no se necesita editar `docker-compose.yml`.

## Organización del proyecto

```
forja-heroes-ii/
├── src/
│   ├── inc/reglas.php      ← ajustes generales; seleccionar VARIANTE
│   ├── inc/datos-A.php    ← configuración A
│   ├── inc/datos-B.php    ← configuración B
│   ├── inc/datos-C.php    ← configuración C
│   ├── expedicion.php     ← desarrollo de los apartados R1-R8
│   └── css/estilo.css    ← hoja de estilos incluida
├── capturas/              ← evidencias gráficas
└── MEMORIA.md              ← apartado R9
```

Los archivos de datos se entregan preparados y no deben alterarse, excepto para las pruebas descritas en la memoria; al terminar cada prueba, restaura los valores originales.

## Ejecutarlo en Docker LAMP

1. Coloca `forja-heroes-ii` dentro de `docker-lamp/www/`, en el mismo nivel que el proyecto `forja-heroes` de la UD2.
2. Desde el directorio `docker-lamp`, inicia los servicios con `docker compose up -d`.
3. Accede a `http://localhost/forja-heroes-ii/src/expedicion.php`.

Las reglas de `forja.ini` de la UD2 siguen cargándose desde `conf.d`. Por ello, los avisos y errores PHP estarán visibles con `display_errors` y `error_reporting = E_ALL`. Revisa cualquier `Warning`, ya que puede indicar un problema en el código.

## Alternativa si Docker no funciona

Desde el directorio del proyecto, puedes levantar el servidor integrado: 

```bash
php -d display_errors=1 -d error_reporting=-1 -S localhost:8080 -t src
```

Luego abre <http://localhost:8080/expedicion.php>.

## Formato de entrega

Prepara un ZIP con el formato `apellido1_apellido2_nombre_UD3.zip`, incluyendo únicamente la carpeta `forja-heroes-ii` y sus materiales, como `capturas/` y `MEMORIA.md`.
