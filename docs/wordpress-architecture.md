# Arquitectura WordPress — Brújula Digital

## Decisión aprobada

El MVP utilizará WordPress con un Custom Post Type `herramientas`. WordPress será la fuente editable del catálogo y las landings se generarán desde una plantilla reutilizable.

## Modelo de contenido

### Custom Post Type: `herramientas`

Campos editoriales:

- nombre y marca;
- resumen de utilidad;
- problema que resuelve;
- público adecuado y público no adecuado;
- casos de uso;
- ventajas y limitaciones;
- dificultad de adopción;
- alternativas;
- precio y fecha de revisión;
- prueba o plan gratuito;
- fuentes y evidencia;
- estado editorial.

Campos internos, no visibles por defecto:

- URL oficial;
- URL afiliada;
- redirección interna;
- red o programa de afiliación;
- comisión y recurrencia;
- duración de cookie/atribución;
- estado de aprobación del programa;
- restricciones de promoción;
- fecha de revisión de política;
- resultado del checklist de cumplimiento.

## Taxonomías

- `necesidad`: productividad, automatización, leads, contenido, marketing, diseño, organización.
- `perfil`: profesional independiente, pequeña empresa, equipo.
- `nivel`: inicial, intermedio, avanzado.
- `tipo`: CRM, email, automatización, gestión, IA, contenido, SEO.

## Estados

El contenido publicado solo podrá estar en estado editorial `aprobado` y con cumplimiento de afiliación validado:

`borrador` → `investigación` → `revisión-afiliación` → `revisión-editorial` → `aprobado` → `publicado` → `retirado`.

## Rutas

- `/herramientas/` — archivo filtrable.
- `/herramientas/{slug}/` — landing individual.
- `/comparativas/{slug}/` — comparativas editoriales posteriores.
- `/diagnostico/` — diagnóstico guiado.

## Reglas técnicas

- Los datos del producto no se escribirán dentro de los componentes.
- La URL afiliada se gestionará mediante redirección interna controlada y etiquetada.
- Los enlaces externos usarán `rel="sponsored"` cuando sean afiliados.
- No se mostrarán comisiones internas al visitante.
- La plantilla deberá soportar producto sin enlace afiliado para mantener separadas investigación y publicación.
- Cualquier plugin debe justificarse por necesidad, mantenimiento, seguridad y coste.

## Fuera de esta fase

Panel SaaS propio, login de usuarios, marketplace abierto, sincronización automática de precios/comisiones y automatizaciones ManyChat/Make en producción.
