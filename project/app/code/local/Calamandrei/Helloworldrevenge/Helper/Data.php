<?php

/**
 * Calamandrei Helper Data
 */

/**
 * Calamandrei Helper Data
 *
 * Main Helper
 *
 * @author Lorenzo Calamandrei <lorenzo.calamandrei@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

class Calamandrei_Helloworldrevenge_Helper_Data extends Mage_Core_Helper_Abstract
{
    /** @const uploadDir Directory that contain the images uploaded */
    const uploadDir = 'helloworldrevengeUpload/';

    /**
     * getConfig
     * @param string $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('calamandrei_helloworldrevenge/' . $config);
    }

    /**
     * isEnabled
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }

    /**
     * getUploadDir
     * @return string The directory of the uploaded images
     */
    public function getUploadDir()
    {
        return self::uploadDir;
    }

}

