<?php
/* Smarty version 3.1.39, created on 2022-05-10 17:47:24
  from 'C:\wamp64\www\prestashop\modules\psgdpr\views\templates\front\pdf\personalData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_627a890c6350d8_22769452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a389260377d64631d7f0093130b8c1cfc82baa34' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\psgdpr\\views\\templates\\front\\pdf\\personalData.tpl',
      1 => 1647359748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a890c6350d8_22769452 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['style_tab']->value;?>



<table width="100%" id="body" border="0" cellpadding="0" cellspacing="0" style="margin:0;">
    <!-- general customer info -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['generalInfo_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="30">&nbsp;</td>
    </tr>

    <!-- addresses tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['addresses_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- order list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['orders_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="20">&nbsp;</td>
    </tr>

    <!-- cart list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['carts_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- messages tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['messages_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- connections tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['connections_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>


    <!-- modules tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['modules_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>
</table>
<?php }
}
