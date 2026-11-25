# Memoria de trabajo · Forja Heroes II

**Autor registrado:** magit · **Estudiante:** Manuel Capitas León · **Configuración:** A · **Fecha:** 27/10/2026

> Se documenta la variante A, que aparece elegida en `src/inc/reglas.php`. Si la asignación del aula virtual fuera distinta, habría que cambiar `VARIANTE` y volver a validar los datos de salida.

## 1. Validación de la ejecución

La página se probó con PHP 8.5.12 mediante el servidor de desarrollo local. La respuesta fue HTTP 200 y no se observaron `Warning`, `Notice`, `Deprecated` ni errores fatales. También se pasó una comprobación de sintaxis a los archivos PHP. No se conservó una captura de esta prueba.

| Elemento revisado | Referencia del enunciado | Salida obtenida | Revisión |
|---|---:|---:|---|
| Poder acumulado del grupo | 1243 | 1243 | Correcto |
| Daño por turno | 205,6 | 205,6 | Correcto |
| Héroe líder | Aldric | Aldric | Correcto |
| Vida tras las salas | 305 de 774 | 305 de 774 | Correcto |
| Combate final | Victoria, ronda 5 | Victoria, ronda 5 | Correcto |
| Monedas al cierre | 2.260,75 mo | 2.260,75 mo | Correcto |
| Tasación de objetos | 151,20 mo | 151,20 mo | Correcto |
| Salas señaladas en el mapa | 7 | 7 | Correcto |

El grupo inicia con 355 puntos de vida. El encuentro con las ratas supone una pérdida de 50; la zona de descanso recupera 80 por la presencia del Clérigo; y el enfrentamiento con esqueletos resta 80. Al terminar el recorrido de salas quedan 305 puntos. El daño de cada golpe al jefe se redondea a 206 y el enemigo es derrotado en cinco turnos.

## 2. Bucles PHP y HTML que llega al navegador

`capturas/foreach-calculos-party.png` enseña el recorrido `foreach` que calcula las características de los personajes. No corresponde al bucle que imprime las filas de la tabla; si se solicita esa evidencia concreta, debe hacerse otra captura. También queda pendiente una imagen de Ctrl+U centrada en la tabla. La vista final está en `capturas/pagina-variante-a.png`.

- Dentro del bucle de presentación se escribe una fila `<tr>` que el navegador recibe repetida cuatro veces, una por integrante. Junto con la cabecera, la tabla contiene cinco filas `<tr>` en el código HTML resultante.
- El HTML de Ctrl+U no incluye los `endforeach` ni los bloques `if`, ya que PHP los evalúa en el servidor y solo entrega el resultado HTML.

## 3. Prueba de modificación: añadir un combate de 2400

**Estimación previa:** si se coloca al principio de `$salas` un encuentro con valor 2400, el daño al grupo será `intdiv(2400, 4)`, es decir, 600 puntos. Como el grupo tiene 355 al comenzar, se quedará sin vida durante esa primera sala. Se contabilizará una sala explorada de ocho, se sumarán 2400 XP y el desenlace del jefe será «Derrota», porque no se habrá alcanzado su guarida. No se generará la tabla de turnos. El mapa seguirá mostrando siete marcas de sala frente a las ocho salas de los datos.

**Comprobación posterior:** la salida coincidió con esa predicción: una sala recorrida de ocho, 2400 XP, el grupo sin vida, ausencia de encuentro con el jefe y aviso por la diferencia entre mapa y recorrido. La evidencia está en `capturas/experimento-derrumbe.png`.

El `break` posterior a la comprobación de vida termina el bucle de salas. Al no iniciarse el encuentro final, `$rondas` permanece vacío y no se presenta su tabla.

## 4. Prueba de clases: `match` y `switch`

Al cambiar temporalmente la clase de un personaje por `'Bardo'`, el cálculo de daño mediante `match` lanza `UnhandledMatchError`, puesto que no hay una alternativa para esa clase ni una rama `default`. Como ese cálculo se realiza antes de construir la página, la ejecución se detiene antes del `switch` que determina la posición.

Si se analizara el `switch` por separado, su alternativa `default` colocaría una clase desconocida en «Reserva». En este sentido, `switch` contempla un caso no previsto, mientras que el `match` necesita una coincidencia definida.

La prueba está descrita como `capturas/experimento-bardo-error.png`. Se restauró la clase original tras el experimento. La imagen contiene una ruta de Windows y por eso se excluye del repositorio público mediante `.gitignore`.

Para un programa de uso real convendría validar los datos y comunicar claramente las clases no reconocidas. Un `default` que no informe del problema puede disimular errores de entrada, mientras que la falta de una rama en `match` hace visible que el caso no se contempló.

## 5. Prueba de `continue` dentro de `switch`

Al reemplazar `continue 2;` por `continue;` en el caso de habitación `'vacía'`, PHP genera este aviso:

> Warning: "continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"?

`continue 2` abandona el `switch` y avanza a la siguiente iteración del `foreach` de habitaciones. En cambio, `continue;` dentro de este `switch` funciona como `break`: termina el `switch` y deja que se ejecute el código posterior, incluida la revisión de vida, antes de continuar el bucle de salas. En la configuración A original, el diario y el total explorado se mantienen iguales.

La captura del aviso es `capturas/experimento-continue-warning.png`; después se volvió a dejar `continue 2;` en el archivo.

## 6. Uso de inteligencia artificial como apoyo

Se utilizó una herramienta de IA como recurso de apoyo para aclarar conceptos de PHP, revisar algunos cálculos y ayudar a organizar y reformular la documentación. Su uso no se plantea como sustitución del trabajo personal ni como autoría única de la actividad. La persona que presenta el proyecto debe revisar el código, comprobar sus resultados y poder explicar las decisiones tomadas.

Entre los conceptos consultados está la diferencia entre `continue 2` y `continue` dentro de un `switch`: la primera instrucción avanza al siguiente ciclo del bucle externo, mientras que la segunda sale del `switch` (y PHP emite el aviso descrito).

---

**Pendiente antes de entregar:** confirmar la variante asignada y el nombre del estudiante; capturar el `foreach` que genera las filas de la tabla; obtener la imagen de Ctrl+U; y añadir la rúbrica de autoevaluación si se proporciona por separado. No se encontraba incluida en los archivos recibidos.
