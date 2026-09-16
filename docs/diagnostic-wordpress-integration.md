# Integración del diagnóstico en WordPress

## Decisión de arquitectura

El diagnóstico debe ser una página propia de Brújula Digital, no un formulario externo ni una plantilla duplicada por producto. El frontend recoge únicamente valores categóricos y genera una URL de resultados con parámetros permitidos.

Ejemplo:

`/diagnostico/?dolor=leads&contexto=equipo_pequeno&nivel=intermedio`

## Responsabilidades

- **Frontend:** renderizar preguntas, validar avance, permitir volver atrás y construir la URL.
- **Catálogo WordPress:** filtrar herramientas por taxonomías y estado editorial.
- **Capa de afiliación:** mostrar CTA solo si `affiliate_status=approved`, existe URL y `policy_reviewed=true`.
- **Contenido:** explicar problema, encaje, esfuerzo, coste y limitaciones.
- **Analítica:** registrar eventos categóricos sin datos personales.

## Reglas de seguridad editorial

1. No usar la URL de la ficha oficial como sustituto silencioso de un enlace de afiliado.
2. No mostrar comisión, descuento, precio o capacidad sin fuente y fecha.
3. No mostrar en los resultados productos en estado `draft`, `affiliate_pending` o `policy_pending`.
4. Escapar los parámetros antes de renderizar y aceptar solo valores incluidos en la configuración.
5. Si la consulta no tiene coincidencias verificadas, mostrar el estado vacío definido en `diagnostic-config.json`.

## Contrato mínimo de datos

Cada herramienta debe exponer al resultado:

- `id` interno estable.
- `need`, `profile` y `level`.
- `verification_status`.
- `affiliate_status`.
- `policy_reviewed`.
- `official_url`.
- `affiliate_url` solo cuando esté aprobado.
- problema, recomendación, esfuerzo, coste y limitaciones.
- `source_urls` y `checked_at`.

## Integración visual

Reutilizar la identidad actual de Brújula Digital: navy `#12355B`, azul `#2563EB`, turquesa `#14B8A6` y naranja `#F97316`. Mantener una interfaz ligera, con una única acción por paso, foco visible y diseño responsive.

## Criterios de aceptación

- La página puede abrirse sin iniciar sesión.
- Completar el flujo lleva a una URL reproducible.
- Actualizar la página conserva el resultado sin crear una cuenta.
- Los enlaces de afiliado solo aparecen en fichas aprobadas.
- Se verifica teclado, móvil, contraste básico, enlaces y estado vacío.
- El prototipo local y la configuración JSON son compatibles con el contrato.

## Orden de integración

1. Crear la página WordPress “Diagnóstico”.
2. Insertar el markup y estilos del prototipo.
3. Sustituir el mapa estático por consulta del catálogo verificado.
4. Añadir la plantilla de resultados y sus estados.
5. Probar con AIHomeDesign y una consulta sin coincidencias.
6. Revisar disclosure, tracking y responsive.
7. Publicar solo después de autorización explícita.
