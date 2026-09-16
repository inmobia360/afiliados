# Prototipo del diagnóstico

## Ejecutarlo localmente

Desde la raíz del proyecto:

```powershell
python -m http.server 8765
```

Abrir:

`http://127.0.0.1:8765/prototypes/diagnostico.html`

## Recorrido de validación

1. Elegir “Consultas sin seguimiento”.
2. Elegir “Con un pequeño equipo”.
3. Elegir “Conectar herramientas”.
4. Confirmar que el resultado muestra la categoría `leads`.
5. Pulsar “Explorar herramientas” y comprobar que la URL contiene `necesidad=leads`.
6. Volver a abrir en una ventana estrecha y comprobar que las opciones ocupan una sola columna.
7. Recorrer las opciones con teclado y confirmar que el foco es visible.

## Alcance actual

El prototipo utiliza un mapa de resultados estático para validar la experiencia. La integración WordPress debe reemplazar ese mapa por el catálogo filtrado y aplicar el contrato descrito en `docs/diagnostic-wordpress-integration.md`.
