<?php
	
namespace app\controllers;

/**
 * Controller NaseSluzbyController
 *
 * @package app\controllers
 */
class NaseSluzbyController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array      $params
     * @param array|null $gets
     *
     * @return void
     */
    public function process(array $params, array $gets = null)
    {
        $this->head["page_title"] = "";
        $this->head["page_keywords"] = "";
        $this->head["page_description"] = "";
        $this->setView("default");
    }
}
