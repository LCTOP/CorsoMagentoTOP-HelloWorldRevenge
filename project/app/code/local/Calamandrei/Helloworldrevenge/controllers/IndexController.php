<?php

/**
 *  Calamandrei Helloworldrevenge IndexController
 */

/**
 * Calamandrei Helloworldrevenge IndexController
 *
 * Index Controller
 * @author
 * @version 0.1.0
 * @package Cms
 */

class Calamandrei_Helloworldrevenge_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}

