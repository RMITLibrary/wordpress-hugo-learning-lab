<?php

function subscribe_link_att($atts, $content = null) {
    $default = array(
        'link' => '#',
    );
    $a = shortcode_atts($default, $atts);
    $content = do_shortcode($content);

    return 'Follow us on '.$content.'';

}
add_shortcode('subscribe', 'subscribe_link_att');

function bootstrap_accordion_att($atts, $content = null) {
    $default = array(
        'title' => 'My accordion',
    );
    $a = shortcode_atts($default, $atts);
    $content = do_shortcode($content);
    
    $headId = generate_id($a['title'], "head");
    $bodyId = generate_id($a['title'], "body");
    
    $output = '';
    
    $output .= '<div class="accordion-item">';
    $output .= '<h2 class="accordion-header" id="' . $headId .'">';
    $output .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $bodyId . '" aria-expanded="false" aria-controls="' . $bodyId . '">';    
    $output .= $a['title'];
    $output .= '</button>';
    $output .= '</h2>';
    $output .= '<div id="' . $bodyId . '" class="accordion-collapse collapse" aria-labelledby="' . $headId . '">';
    $output .= '<div class="accordion-body">';
    $output .= $content;
    $output .= '</div></div></div>';

    return $output;

}

function generate_id($string, $prefix) {
    $lowercaseString = strtolower($string);
    $hyphenatedString = str_replace(' ', '-', $lowercaseString);
    return $prefix . '-' . $hyphenatedString;
}

add_shortcode('bs-accordion', 'bootstrap_accordion_att');

/*

<div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Accordion Item #1
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
        <div class="accordion-body">
        First item content goes here
        </div>
    </div>
</div>

*/

?>