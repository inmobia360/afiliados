# Arquitectura de agentes

## `@director`

Dueño del objetivo, alcance, prioridades, decisiones y calidad final. Coordina el flujo SDD, integra entregables y mantiene el registro de decisiones.

## Especialistas recomendados

| ID | Especialidad | Entrega principal |
|---|---|---|
| `product-research` | Producto y discovery | Jobs-to-be-done, dolores, segmentos, hipótesis y roadmap |
| `real-estate-domain` | Intermediación inmobiliaria | Flujos reales, terminología, objeciones y límites sectoriales |
| `affiliate-ops` | Afiliación y monetización | Fichas verificadas, comisiones, atribución, disclosure y economics |
| `content-seo` | Copywriting, SEO y contenidos | Propuesta de valor, landings, comparativas, cluster editorial y CTA |
| `ux-conversion` | UX/CRO y accesibilidad | Arquitectura de información, journeys, wireframes y experimentos |
| `frontend` | Front-end | UI responsive, estados, rendimiento y accesibilidad implementada |
| `backend-data` | Back-end y contenido | APIs, catálogo, validación, administración y separación de entornos |
| `analytics-growth` | Analítica y growth | Eventos, embudos, consentimiento, KPIs y experimentos |
| `qa-security` | QA, seguridad y compliance | Tests, revisión de enlaces, privacidad, accesibilidad y release gate |

## Por qué esta composición

No recomiendo separar inicialmente “copywriter”, “SEO” y “growth” en tres agentes independientes: pueden vivir juntos en `content-seo` hasta que exista volumen editorial. Tampoco añadiría ahora un agente legal autónomo; `qa-security` puede identificar riesgos y pedir revisión humana. Sí mantendría `affiliate-ops` separado del dominio inmobiliario: conocer el trabajo de una agencia no equivale a conocer contratos, tracking y condiciones de afiliación.

## Orden de ejecución

`product-research` + `real-estate-domain` → `affiliate-ops` → `content-seo` + `ux-conversion` → `backend-data` + `frontend` → `analytics-growth` → `qa-security` → `director` valida.
