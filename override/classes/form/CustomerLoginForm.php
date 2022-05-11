<?php
/**
 * 2007-2021 ETS-Soft
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
class CustomerLoginForm extends CustomerLoginFormCore
{
    /*
    * module: ets_recaptcha_free
    * date: 2022-05-10 17:35:56
    * version: 1.0.4
    */
    public function submit()
    {
        if (Tools::isSubmit('submitLogin') && Module::isEnabled('ets_recaptcha_free') && ($captcha = Module::getInstanceByName('ets_recaptcha_free')) && $captcha->hookVal('login')) {
            $captcha->captchaVal($this->errors['']);
        }
        return !$this->errors[''] ? parent::submit() : !$this->hasErrors();
    }
}