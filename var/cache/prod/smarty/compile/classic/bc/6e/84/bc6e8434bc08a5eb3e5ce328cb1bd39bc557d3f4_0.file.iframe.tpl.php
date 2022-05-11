<?php
/* Smarty version 3.1.39, created on 2022-05-10 17:38:17
  from 'C:\wamp64\www\prestashop\modules\ets_recaptcha_free\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_627a86e99e28e8_23426028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6e8434bc08a5eb3e5ce328cb1bd39bc557d3f4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ets_recaptcha_free\\views\\templates\\hook\\iframe.tpl',
      1 => 1652196954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a86e99e28e8_23426028 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
   function phProductFeedResizeIframe(obj) {
       $('iframe').css('height','auto');
       setTimeout(function() {
           $('iframe').css('opacity',1);
           var pHeight = $(obj).parent().height();
           $(obj).css('height','540px');
       }, 300);
    }
<?php echo '</script'; ?>
> 
<div id="ph_preview_template_html">
    <iframe src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_iframe']->value,'html','UTF-8' ));?>
" style="background: #ffffff ; border : 1px solid #ccc;width:100%;height:0;opacity:0;border-radius:5px" onload="phProductFeedResizeIframe(this)"></iframe>
</div><?php }
}
