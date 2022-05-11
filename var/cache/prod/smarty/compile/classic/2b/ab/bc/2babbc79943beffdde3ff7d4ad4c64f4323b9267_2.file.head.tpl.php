<?php
/* Smarty version 3.1.39, created on 2022-05-10 17:37:57
  from 'C:\wamp64\www\prestashop\modules\ets_recaptcha_free\views\templates\hook\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_627a86d59c9ba5_13710169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2babbc79943beffdde3ff7d4ad4c64f4323b9267' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_recaptcha_free\\views\\templates\\hook\\head.tpl',
      1 => 1652196954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a86d59c9ba5_13710169 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?<?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>onload=rcf_onloadCallback&render=explicit<?php }
if ((isset($_smarty_tpl->tpl_vars['hl']->value)) && $_smarty_tpl->tpl_vars['hl']->value) {?>&hl=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>async defer<?php }?>><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ($_smarty_tpl->tpl_vars['ETS_RCF_CAPTCHA_TYPE']->value == 'google') {?>
        var ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_RCF_GOOGLE_CAPTCHA_SITE_KEY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
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
        };
    <?php } else { ?>
        var ETS_RCF_GOOGLE_V3_CAPTCHA_SITE_KEY = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_RCF_GOOGLE_V3_CAPTCHA_SITE_KEY']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';
        var ETS_RCF_GOOGLE_V3_POSITION = 'bottomright';
    <?php }
echo '</script'; ?>
>
<style>
    #contact #notifications{
        display:none;
    }
</style><?php }
}
