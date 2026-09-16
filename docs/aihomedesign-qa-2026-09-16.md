# QA del piloto AIHomeDesign — 2026-09-16

## Alcance

Comprobación del recorrido público en el staging de WordPress:

catálogo → landing de recomendación → CTA afiliado

## Evidencia observada

- Catálogo filtrado: https://lightpink-oryx-447443.hostingersite.com/herramientas/?necesidad=marketing
- Landing: https://lightpink-oryx-447443.hostingersite.com/aihomedesign-home-staging-virtual-para-presentar-mejor-una-vivienda/
- El título y «Read more» del catálogo apuntan a la landing, no a la ficha técnica antigua.
- La landing contiene dos CTA con https://aihomedesign.com/?via=inmobia360.
- Los CTA incluyen rel="sponsored noopener" y aviso visible de afiliación.
- La landing presenta problema, diagnóstico, encaje, proceso y límites.
- El pie público incluye el script de tracking del plugin con el evento affiliate_click.
- El payload observado por inspección de código solo contiene event y tool; no incluye nombre, correo, dirección ni datos del inmueble.
- Una prueba funcional del diagnóstico seleccionando «Centraliza consultas y evita perder seguimientos.» muestra un resultado orientativo y enlaza a la categoría necesidad=leads.

## Resultado

**Aprobado para staging y revisión editorial periódica.**

Esta comprobación no valida precios. Las condiciones de comisión y atribución se han contrastado en la revisión oficial, pero siguen excluidas del copy público para evitar promesas económicas y requieren revisión periódica.

## Pendiente

- Prueba en dispositivos físicos y con teclado.
- Configuración de consentimiento y objetivos en la herramienta de analítica que se vaya a utilizar.
- Revisión de la política del proveedor antes de cada campaña.
