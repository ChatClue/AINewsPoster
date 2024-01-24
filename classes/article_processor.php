<?php

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

class AINewsPosterArticleProcessor {
  private $api_key;
  private $article_url;

  public function __construct($api_key,$article_url) {
    $this->api_key = $api_key;
    $this->article_url = $article_url;
  }

  public function get_article_body() {
    $url = 'https://api.pagepixels.com/snap';
    $params = array(
      'url' => $this->article_url,
      'access_token' => $this->api_key,
      'html_only' => 'true'
    );

    $response = wp_remote_get(add_query_arg($params, $url), array(
      'timeout' => 30
    ));

    if (is_wp_error($response)) {
      // Handle error; possibly return WP_Error
      return null;
    }

    $data = json_decode(wp_remote_retrieve_body($response), true);
    $html = $data['html'] ?? '';

    if (empty($html)) {
      return null;
    }

    return $this->extract_article_text($html);
  }

  private function extract_article_text($html) {
    $doc = new DOMDocument();
    libxml_use_internal_errors(true);
    $doc->loadHTML($html);
    libxml_clear_errors();

    // Remove script and style elements
    $xpath = new DOMXPath($doc);
    foreach ($xpath->query('//script | //style') as $node) {
        $node->parentNode->removeChild($node);
    }

    $article = $doc->getElementsByTagName('article')->item(0);
    if ($article) {
        // Extract and clean text
        $text = $article->textContent;
        $text = preg_replace('/\s+/', ' ', $text); // Replace multiple whitespace with single space
        $text = trim($text); // Trim leading and trailing whitespace
        return $text;
    }

    return '';
}

}