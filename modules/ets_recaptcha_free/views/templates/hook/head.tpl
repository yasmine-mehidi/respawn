{*
* 2007-2022 ETS-Soft
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
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2022 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<script src="https://www.google.com/recaptcha/api.js?{if $ETS_RCF_CAPTCHA_TYPE == 'google'}onload=rcf_onloadCallback&render=explicit{/if}{if isset($hl) && $hl}&hl={$hl|escape:'html':'UTF-8'}{/if}" {if $ETS_RCF_CAPTCHA_TYPE == 'google'}async defer{/if}></script>
<script type="text/javascript">
    {if $ETS_RCF_CAPTCHA_TYPE == 'google'}
        var ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY = '{$ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY|escape:'html':'UTF-8'}';{literal}
        var recaptchaWidgets = [];
        var rcf_onloadCallback = function () {
            ets_rcf_captcha_load(document.getElementsByTagName('form'));
        };
        var ets_rcf_captcha_load = function (forms) {
            var pattern = /(^|\s)g-recaptcha(\s|$)/;
            for (var i = 0; i < forms.length; i++) {
                var items = forms[i].getElementsByTagName('div');
                for (var k = 0; k < items.length; k++) {
                    if (items[k].className && items[k].className.match(pattern) && ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY) {
                        var widget_id = grecaptcha.render(items[k], {
                            'sitekey': ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY,
                            'theme': 'light',
                        });
                        recaptchaWidgets.push(widget_id);
                        break;
                    }
                }
            }
        };{/literal}
    {else}
        var ETS_RCF_GOOGLE_V3_CAPTCHA_SITE_KEY = '{$ETS_RCF_GOOGLE_V3_CAPTCHA_SITE_KEY|escape:'html':'UTF-8'}';
        var ETS_RCF_GOOGLE_V3_POSITION = 'bottomright';
    {/if}
</script>
<style>
    #contact #notifications{
        display:none;
    }
</style>