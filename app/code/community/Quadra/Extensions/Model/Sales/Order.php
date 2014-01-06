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

class Quadra_Extensions_Model_Sales_Order extends Mage_Sales_Model_Order
{
    /**
     * Flag: if after order placing we can send new email to the customer.
     *
     * @var bool
     */
    protected $_canSendNewEmailFlag = true;

    /**
     * Return flag for order if it can sends new email to customer.
     *
     * @return bool
     */
    public function getCanSendNewEmailFlag()
    {
        return $this->_canSendNewEmailFlag;
    }

    /**
     * Set flag for order if it can sends new email to customer.
     *
     * @param bool $flag
     * @return Mage_Sales_Model_Order
     */
    public function setCanSendNewEmailFlag($flag)
    {
        $this->_canSendNewEmailFlag = (boolean) $flag;
        return $this;
    }

    /**
     * Order state setter.
     * If status is specified, will add order status history with specified comment
     * the setData() cannot be overriden because of compatibility issues with resource model
     *
     * @param string $state
     * @param string|bool $status
     * @param string $comment
     * @param bool $isCustomerNotified
     * @return Mage_Sales_Model_Order
     */
    public function setState($state, $status = false, $comment = '', $isCustomerNotified = null, $shouldProtectState = true)
    {
        if (((int)Mage::helper('extensions')->getMagentoVersion()) < 140) {
            return parent::setState($state, $status, $comment, $isCustomerNotified);
        }

        return $this->_setState($state, $status, $comment, $isCustomerNotified, $shouldProtectState);
    }
}
