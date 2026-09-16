# Diagnóstico de Brújula Digital

Estado: especificación MVP.

## Objetivo

Ayudar al visitante a identificar un problema operativo concreto y conducirlo a una categoría de herramientas, sin presentar la recomendación como asesoramiento personalizado infalible.

## Flujo

### Paso 1 — Dolor principal

Pregunta: “¿Qué te está haciendo perder más tiempo ahora?”

Opciones:

- `organizacion`: tareas, calendario o información dispersa → Productividad y organización.
- `leads`: consultas sin seguimiento o respuestas tardías → Captación y atención de leads.
- `automatizacion`: tareas repetitivas entre varias herramientas → Automatización.
- `marketing`: crear publicaciones, imágenes o contenidos → Marketing y contenido.

### Paso 2 — Contexto de trabajo

Pregunta: “¿Cómo trabajas principalmente?”

Opciones:

- `solo`: profesional independiente.
- `equipo_pequeno`: pequeño equipo.
- `empresa_pequena`: pequeña empresa.

Este dato sirve para ordenar resultados; no debe excluir automáticamente productos salvo que exista una limitación documentada.

### Paso 3 — Nivel de adopción

Pregunta: “¿Qué nivel de cambio buscas?”

Opciones:

- `inicial`: quiero algo sencillo para empezar.
- `intermedio`: ya uso herramientas y quiero conectarlas.
- `avanzado`: necesito automatizaciones y procesos más completos.

### Resultado

Mostrar:

1. Resumen del problema elegido.
2. Diagnóstico prudente de una o dos frases.
3. Hasta seis herramientas verificadas para esa necesidad.
4. Para cada herramienta: problema que aborda, encaje, esfuerzo, coste o “consultar precio”, limitaciones, fecha de revisión y posible relación de afiliación.
5. CTA “Ver recomendación” hacia la ficha interna, no directamente al afiliado.

## Reglas de recomendación

- No recomendar productos con estado `draft`, `affiliate_pending` o `policy_pending` como CTA de afiliado.
- Ordenar primero por necesidad, después por perfil y nivel, y finalmente por estado `verified`.
- Si no hay coincidencias verificadas, mostrar estado vacío útil: “Todavía no tenemos una recomendación verificada para este caso” y ofrecer otra categoría.
- No pedir email en el MVP.
- No recoger datos personales; las respuestas pueden permanecer en la URL o en memoria de sesión sin identificadores.
- Mostrar disclosure en toda ficha con enlace de afiliación.

## Eventos mínimos

- `diagnostic_started`
- `diagnostic_answered` con `question_id` y valor categórico, sin texto libre.
- `diagnostic_result_viewed` con categoría.
- `tool_recommendation_opened` con identificador interno.
- `affiliate_click` solo cuando se pulsa un CTA con enlace afiliado.

## Accesibilidad y responsive

- Cada pregunta debe usar un `fieldset` y `legend` visibles.
- Las opciones deben ser botones o radios navegables por teclado.
- El resultado debe poder leerse sin depender del color.
- El CTA debe tener foco visible y área táctil suficiente.
- No desactivar zoom ni depender de hover.

## Criterio de aceptación

Una persona puede completar el flujo en móvil y teclado, recibe una categoría coherente con sus respuestas, puede volver atrás, y nunca llega a un enlace de afiliado no verificado.
