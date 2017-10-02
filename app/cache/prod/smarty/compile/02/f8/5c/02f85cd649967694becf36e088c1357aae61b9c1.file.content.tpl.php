<?php /* Smarty version Smarty-3.1.19, created on 2017-10-01 20:12:52
         compiled from "C:\xampp\htdocs\prestashop\admin210pg1scb\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136123824159d19294233696-30660535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f85cd649967694becf36e088c1357aae61b9c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin210pg1scb\\themes\\default\\template\\content.tpl',
      1 => 1503946274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136123824159d19294233696-30660535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59d1929427fe05_50883258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1929427fe05_50883258')) {function content_59d1929427fe05_50883258($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
