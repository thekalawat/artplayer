<?php

function load_artplayer_assets()
{
    wp_register_script('artplayer-js', 'https://cdn.jsdelivr.net/npm/artplayer@5.0.3/dist/artplayer.js', [], null, true);
    wp_register_style('artplayer-css', 'https://cdn.jsdelivr.net/npm/artplayer@5.0.3/dist/artplayer.css', [], null);

    if (is_singular() && has_shortcode(get_post()->post_content, 'artplayer')) {
        wp_enqueue_script('artplayer-js');
        wp_enqueue_style('artplayer-css');
    }
}
add_action('wp_enqueue_scripts', 'load_artplayer_assets');

function artplayer_shortcode($atts)
{
    $a = shortcode_atts(array(
        'video' => '',
        'poster' => '',
        'id' => 'artplayer-container-' . uniqid(),
    ), $atts);

    ob_start(); ?>

    <style>
        .artplayer-wrapper {
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #dadce0;
            margin-bottom: 15px;
            border-radius: 10px;
            overflow: hidden;
        }
    </style>

    <div class="artplayer-wrapper">
        <div id="<?php echo esc_attr($a['id']); ?>"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Artplayer({
                container: document.getElementById('<?php echo esc_js($a['id']); ?>'),
                url: '<?php echo esc_url($a['video']); ?>',
                poster: '<?php echo esc_url($a['poster']); ?>',
                autoplay: false,
                setting: true,
                playbackRate: true,
                aspectRatio: true,
                fullscreen: true,
                hotkey: true,
            });
        });
    </script>

<?php
    return ob_get_clean();
}
add_shortcode('artplayer', 'artplayer_shortcode');
?>
