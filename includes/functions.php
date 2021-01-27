<?php
/**
 * Initializing the quote shortcode
 */
function qd_shortcodes_init()
{
  function qd_shortcode( $atts = [], $content = null )
  {
    $content = clearText($content);
    $author = clearText($atts['author']);
    $style = getStyle($atts['style']);
    $urlAuthor = clearText($atts['url']);

    wp_enqueue_style( 'base-quote-style', PLUGIN_URL . 'public/css/base-quote-style.css');
    wp_enqueue_style( 'fonts-to-qt', 'https://fonts.googleapis.com/css?family=Literata|Roboto:300i&display=swap&subset=cyrillic');

    /**
     * Output buffering
     */
    ob_start();
    include (PLUGIN_DIR . 'public/templates/index.php');
    $result = ob_get_contents();
    ob_end_clean();

    return $result;
  }  
  add_shortcode( 'qd_short', 'qd_shortcode' );

}

/**
 * Alias function for cleaning the text from harmful impurities
 */
function clearText($text)
{
  return sanitize_text_field($text);
}

/**
 * Returns the name of the design style for the quote
 */
function getStyle($style)
{
  $style = trim(clearText($style));

  // The white style is the default so we don't check it
  switch ($style)
  {
    case 'gray':
      return 'gray';
    
    case 'lightblue':
      return 'lightblue';
    
    case 'darkblue':
      return 'darkblue';
  }
}