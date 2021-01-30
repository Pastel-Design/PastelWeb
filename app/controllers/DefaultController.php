<?php

namespace app\controllers;

/**
 * Controller DefaultController
 *
 * @package app\controllers
 */
class DefaultController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Sets default homepage
     *
     * @param array      $params
     * @param array|null $gets
     *
     * @return void
     */
    public function process(array $params, array $gets = null)
    {
        $this->head['page_title'] = "Pastel Design";
        $this->head['page_keywords'] = "design,grafika,webdesign,web-design,graphics,development";
        $this->head['page_description'] = "Pastel";
        $this->setView('default');
    }
}
