# Plan — MVP AFILIADOS AI

## Decisión de arquitectura

El MVP se implementará con WordPress y un Custom Post Type `herramientas`. El detalle del modelo está en `docs/wordpress-architecture.md`.

## Capas

1. Presentación: landing, selector de dolores, categorías, fichas y comparativas.
2. Contenido: Custom Post Type `herramientas`, taxonomías y catálogo versionado con fuente, fecha, estado, enlace y disclosure.
3. Medición: eventos de navegación y CTA, con consentimiento cuando aplique.
4. Calidad: validaciones automáticas y checklist manual de cada release.

## Decisiones iniciales

- Empezar por catálogo curado y flujo guiado, no por marketplace.
- Mantener productos, enlaces y claims fuera de los componentes visuales.
- Diseñar primero una ruta completa: dolor → recomendación → ficha → CTA → siguiente acción.
- Posponer integraciones complejas hasta probar demanda y conversión.
