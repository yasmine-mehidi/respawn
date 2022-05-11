<?php
/* Smarty version 3.1.39, created on 2022-05-10 17:37:49
  from 'C:\wamp64\www\prestashop\modules\ph_scrolltotop\views\templates\hook\back-to-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_627a86cdf3b735_94507443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f2a7b7639a2c2112d08b45be30124b8e51fd062' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ph_scrolltotop\\views\\templates\\hook\\back-to-top.tpl',
      1 => 1652196644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a86cdf3b735_94507443 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ETS_SCROLLTOTOP_LIVE_MODE']->value) {?>
    <div class="back-to-top">
        <a href="#">
            <?php if ($_smarty_tpl->tpl_vars['ETS_BUTTON_ICON_SELECT']->value == 'icon') {?>
            <span class="back-icon">
            <i class="<?php if ($_smarty_tpl->tpl_vars['ETS_BUTTON_ICON']->value) {?>fa <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ETS_BUTTON_ICON']->value, ENT_QUOTES, 'UTF-8');
} else { ?>fa fa-arrow-circle-up<?php }?>" aria-hidden="true"></i>
      <?php } else { ?>
        <span class="back-icon"
              style="
                      background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ETS_CUSTOM_ICON']->value, ENT_QUOTES, 'UTF-8');?>
);
                      background-repeat: no-repeat;
                      background-position: center;
                      background-size: cover;
                      width: 40px;
                      height: 40px;
                      ">
      <?php }?>
        </span>
        </a>
    </div>
<?php }
}
}
