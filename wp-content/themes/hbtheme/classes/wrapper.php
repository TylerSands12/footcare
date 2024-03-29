<?php

  namespace HB\Wrapper;

  function template_path() {
    return PageWrapper::$template_path;
  }

  class PageWrapper {
    // Stores the full path to the main template file
    public static $template_path;
    // Basename of template file
    public $slug;
    // Array of templates
    public $templates;
    // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
    public static $base;

    public function __construct($template = 'base.php') {

      $this->slug = basename($template, '.php');
      $this->templates = [$template];

      if (self::$base) {
        $str = substr($template, 0, -4);
        array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
      }
    }

    public function __toString() {
      $this->templates = apply_filters('HB/wrap_' . $this->slug, $this->templates);
      return locate_template($this->templates);
    }

    public static function wrap($main) {

      // Check for other filters returning null
      if (!is_string($main)) {
        return $main;
      }

      self::$template_path = $main;
      self::$base = basename(self::$template_path, '.php');

      if (self::$base === 'index') {
        self::$base = false;
      }

      return new PageWrapper();
    }
}

add_filter('template_include', [__NAMESPACE__ . '\\PageWrapper', 'wrap'], 109);

?>