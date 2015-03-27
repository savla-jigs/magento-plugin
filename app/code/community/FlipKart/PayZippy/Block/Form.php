<?php

/**
 * Description of ExtensionsStatusManager
 * @package   FlipKart_PayZippy
 * @company   CueBlocks - http://www.cueblocks.com/
 * @author    Ravinder <ravinder.singh@cueblocks.com>
 */

class FlipKart_PayZippy_Block_Form extends Mage_Payment_Block_Form {
    
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('payzippy/form.phtml')->setRedirectMessage(
                Mage::helper('payzippy')->__('You will be redirected to the PayZippy website when you place an order.')
            );
    }
}
?>
