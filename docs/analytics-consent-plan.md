# Analítica y consentimiento — MVP

## Objetivo

Medir si el recorrido problema → recomendación → CTA ayuda a decidir qué categorías merecen una landing propia, sin recopilar datos personales innecesarios.

## Recomendación para el staging

Empezar con analítica agregada y respetuosa con la privacidad. No conectar una cuenta ni instalar un proveedor hasta elegirlo expresamente y revisar su configuración de cookies, alojamiento y tratamiento.

## Eventos mínimos

| Evento | Cuándo | Propiedades permitidas |
|---|---|---|
| recommendation_view | Se muestra una ficha o landing | tool, page_type |
| affiliate_click | Se pulsa un CTA afiliado | tool, page_type, cta_position |
| diagnostic_result | Se muestra el resultado del diagnóstico | need, result_count |

No enviar nombre, correo, teléfono, dirección, identificadores de vivienda, texto libre, IP persistente ni parámetros de campaña que permitan identificar a una persona.

## Consentimiento

- Antes de activar cookies o scripts no esenciales, mostrar un control de consentimiento claro.
- No bloquear el contenido editorial ni el CTA por no aceptar analítica.
- La denegación debe impedir la carga del proveedor de analítica, manteniendo navegación y enlaces afiliados funcionales.
- Guardar únicamente la preferencia necesaria para respetar la elección.
- Documentar proveedor, finalidad, duración, transferencias y mecanismo de retirada en la política de cookies.

## KPIs iniciales

- recommendation_view por categoría.
- Porcentaje de clic afiliado por landing.
- Diferencia entre CTA principal y CTA final.
- Resultado del diagnóstico que conduce a cada recomendación.
- Salidas sin clic, como señal editorial de desajuste.

No usar benchmarks como promesa comercial. Establecer una línea base tras un periodo inicial de tráfico suficiente.

## Decisión pendiente

Elegir proveedor de analítica y CMP, revisar la política de privacidad/cookies y autorizar su conexión. Hasta entonces, el tracking interno del plugin puede emitir eventos hacia dataLayer o gtag si ya existe una integración consentida, pero no debe instalar por sí mismo cookies ni enviar datos a terceros.
