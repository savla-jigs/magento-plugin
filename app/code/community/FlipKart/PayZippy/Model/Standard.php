<?php

/**
 * Description of ExtensionsStatusManager
 * @package   FlipKart_PayZippy
 * @company   CueBlocks - http://www.cueblocks.com/
 * @author    Ravinder <ravinder.singh@cueblocks.com>
 */

class FlipKart_PayZippy_Model_Standard extends Mage_Payment_Model_Method_Abstract {
	
        protected $_code = 'payzippy';
    	protected $_formBlockType = 'payzippy/form';
        protected $_infoBlockType = 'payzippy/info';
    	protected $_isInitializeNeeded      = true;
    	protected $_canUseInternal          = true;
    	protected $_canUseForMultishipping  = false;
    	
    	public function getOrderPlaceRedirectUrl() {
    		return Mage::getUrl('payzippy/payment/redirect', array('_secure' => true));
    	}
        
        /*
        *Assign payment method data to info object
        */

        public function assignData($data)
        {
           
            if (!($data instanceof Varien_Object)) {
                $data = new Varien_Object($data);
            }
            return $this;
        }

}
?>
