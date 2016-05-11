<?php

class apl_sfv_details extends apl_sfv_details_parent
{
    /**
     * Checks if current article isn't a variant,
     * loads variants and if list is not empty redirect to first found variant
     *
     * @return  string  parent::render()   parent template file name
     */
    public function render()
    {
		
        $oProduct = $this->getProduct();
		
        if (!$oProduct->oxarticles__oxparentid->value) {
            $oVariantList = $oProduct->getFullVariants();
            if($oVariantList){
                oxRegistry::getUtils()->redirect($oVariantList->current()->getLink(), false);
            }
        }

        return parent::render();
    }
}
