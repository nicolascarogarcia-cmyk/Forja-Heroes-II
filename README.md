# Forja Heroes II — Reporte de aventura

Proyecto de la UD3 de PHP que genera un resumen de una incursión: estadísticas del grupo, avance por habitaciones, encuentro final, objetos, economía y representación del mapa.

**Autor que figura en el proyecto:** Manuel Capitas León  
**Configuración activa:** Variante A

## Puesta en marcha

En la raíz del proyecto, ejecuta el servidor de desarrollo de PHP: 

```powershell
php -d display_errors=1 -d error_reporting=-1 -S localhost:8080 -t src
```

Después visita <http://localhost:8080/expedicion.php>. Para cerrar el servidor, utiliza `Ctrl+C` en la consola donde se inició.

También es posible ejecutarlo en un entorno LAMP con Docker, siempre que Docker esté operativo y el directorio del proyecto esté montado correctamente.

## Asistencia de IA

Se recurrió a una herramienta de inteligencia artificial **como apoyo** para aclarar conceptos de PHP, revisar cálculos y ayudar con la redacción y organización de la documentación. No se presenta la IA como sustituto del trabajo ni como responsable exclusiva del proyecto. Las decisiones, la comprensión del código y la comprobación del resultado deben ser asumidas y verificadas por quien entrega la actividad.

## Incidencias y notas de desarrollo

- **Docker no arrancaba:** el motor no estaba disponible, por lo que se optó por probar la actividad con el servidor local de PHP.
- **Instalación de PHP en Windows:** la instalación mediante Chocolatey requería permisos de administrador. Se utilizó una distribución oficial instalada en el perfil del usuario, evitando cambiar la instalación global.
- **Resumen de vida:** se añadió al reporte la vida del grupo al finalizar la exploración de salas y se contrastó el resultado de la variante A (305/774).
- **Captura con ruta local:** la imagen del error de clase desconocida incluye información de la ruta del equipo. Se mantiene fuera del repositorio público mediante `.gitignore`.
- **Evidencias por completar:** la captura del editor disponible corresponde al bucle de cálculo, no al que genera las filas de la tabla. Falta guardar una captura del código de presentación y otra de Ctrl+U enfocada en la tabla. Se anotan en `MEMORIA.md`.
- **Colaboradores de GitHub:** la visualización de colaboradores depende de GitHub y puede tardar en reflejar cambios del historial; no es una característica controlada por el PHP de esta aplicación.

## Comprobaciones

Se indica que la variante A fue ejecutada con PHP 8.5.12 y que se revisaron la sintaxis de los archivos PHP y la salida de la página. Los valores comprobados y las observaciones de los experimentos se recogen en `MEMORIA.md`.
