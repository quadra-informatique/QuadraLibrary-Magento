<?php
/*
 * 1997-2012 Quadra Informatique
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to ecommerce@quadra-informatique.fr so we can send you a copy immediately.
 *
 *  @author Quadra Informatique <ecommerce@quadra-informatique.fr>
 *  @copyright 1997-2013 Quadra Informatique
 *  @version Release: $Revision: 1.0.1 $
 *  @license http://www.opensource.org/licenses/OSL-3.0  Open Software License (OSL 3.0)
 */

class Quadra_Extensions_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Return Magento version
     *
     * @return int
     */
    public function getMagentoVersion()
    {
        $version = Mage::getVersion();
        $version = substr($version, 0, 5);
        $version = str_replace('.', '', $version);
        while (strlen($version) < 3) {
            $version .= "0";
        }

        return $version;
    }
}
