<?php
/**
 * Brújula Digital — diagnóstico MVP.
 * Integración propuesta: añadir este bloque al plugin del catálogo y usar
 * [brujula_diagnostico] en una página WordPress.
 */

defined('ABSPATH') || exit;

add_shortcode('brujula_diagnostico', static function () {
    $categories = [
        'productividad' => 'Ordena tu trabajo y recupera foco.',
        'leads' => 'Centraliza consultas y evita perder seguimientos.',
        'automatizacion' => 'Reduce tareas manuales entre herramientas.',
        'marketing' => 'Crea materiales con más consistencia y menos esfuerzo.',
    ];

    $allowed = array_keys($categories);
    $pain = isset($_GET['dolor']) ? sanitize_key(wp_unslash($_GET['dolor'])) : '';
    $category = in_array($pain, $allowed, true) ? $pain : '';
    $result_url = $category
        ? add_query_arg('necesidad', $category, get_post_type_archive_link('herramientas'))
        : '';

    ob_start();
    ?>
    <section class="bd-diagnostic" aria-labelledby="bd-diagnostic-title">
        <p class="bd-eyebrow">Herramientas · acción · resultados</p>
        <h1 id="bd-diagnostic-title">Encuentra el siguiente paso digital.</h1>
        <p>Responde una pregunta y te orientaremos hacia herramientas relacionadas con tu problema.</p>
        <form method="get" action="<?php echo esc_url(get_permalink()); ?>">
            <fieldset>
                <legend>¿Qué te está haciendo perder más tiempo ahora?</legend>
                <?php foreach ($categories as $key => $label) : ?>
                    <label>
                        <input type="radio" name="dolor" value="<?php echo esc_attr($key); ?>" <?php checked($category, $key); ?>>
                        <span><?php echo esc_html($label); ?></span>
                    </label>
                <?php endforeach; ?>
            </fieldset>
            <button type="submit">Ver orientación</button>
        </form>
        <?php if ($category && $result_url) : ?>
            <div class="bd-diagnostic-result" role="status">
                <p class="bd-eyebrow">Resultado orientativo</p>
                <h2><?php echo esc_html($categories[$category]); ?></h2>
                <a href="<?php echo esc_url($result_url); ?>">Explorar herramientas verificadas</a>
                <p class="bd-disclosure">Las recomendaciones son editoriales. La relación de afiliación se indicará claramente en cada ficha cuando corresponda.</p>
            </div>
        <?php endif; ?>
    </section>
    <?php
    return ob_get_clean();
});
