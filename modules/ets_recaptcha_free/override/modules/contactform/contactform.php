<?php
/**
 * 2007-2020 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 * @author ETS-Soft <etssoft.jsc@gmail.com>
 * @copyright  2007-2020 ETS-Soft
 * @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

class ContactformOverride extends Contactform
{
    public function sendMessage()
    {
        if (version_compare(_PS_VERSION_, '1.7.1', '>') && Module::isEnabled('ets_recaptcha_free') && ($captcha = Module::getInstanceByName('ets_recaptcha_free')) && $captcha->hookVal('contact')) {
            $captcha->captchaVal($this->context->controller->errors);
        } 
        if ($this->context->controller->errors)
            return false;
        return parent::sendMessage();
    }
}