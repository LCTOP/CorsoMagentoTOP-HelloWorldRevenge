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

class Calamandrei_Helloworldrevenge_Block_Helloworldrevenge extends Mage_Core_Block_Template
{

    /**
     * isEnabled
     * @return bool True if the module is enabled
     */
    public function isEnabled()
    {
        return Mage::helper('calamandrei_helloworldrevenge')->isEnabled();
    }

    /**
     * getMessage
     * @return mixed The custom message setted on the admin panel
     */
    public function getMessage()
    {
        return Mage::helper('calamandrei_helloworldrevenge')->getConfig('configuration/message');
    }

    /**
     * getImageHTML
     * @return string The img tag to print in PHTML
     */
    public function getImageHTML()
    {
        $helloworldHelper = Mage::helper('calamandrei_helloworldrevenge');
        $image = '<img class="centered-image" src="';
        $image .= Mage::getBaseUrl('media') . $helloworldHelper::uploadDir . $helloworldHelper->getConfig('configuration/image');
        $image .= '" />';
        return $image;
    }

}