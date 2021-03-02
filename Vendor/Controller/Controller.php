<?php

namespace Vendor\Controller;

class Controller{

  private $default = "default";

    /**
     * Display Viewss with Database informations
     *
     * @param string $Views
     * @param array $params
     */
    public function render($Views, $params = []){
      $pathViews = str_replace(".", "/", $Views);
  
      ob_start();
      extract($params);
      require ROOT . '/App/Views/' . $pathViews . '.php';
      $content = ob_get_clean();
      require ROOT . '/App/Views/' . $this->default . '.php';
    }
  
  }