<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:02
         compiled from "module_file_tpl:DesignManager;defaultadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2061558a765426896e6-01384103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7994471142908e21fd00b0ab78c79ea5de84c917' => 
    array (
      0 => 'module_file_tpl:DesignManager;defaultadmin.tpl',
      1 => 1487363666,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2061558a765426896e6-01384103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'manage_designs' => 0,
    'manage_stylesheets' => 0,
    'manage_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a76542801384_65652864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a76542801384_65652864')) {function content_58a76542801384_65652864($_smarty_tpl) {?><?php if (!is_callable('smarty_function_tab_header')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.tab_header.php';
if (!is_callable('smarty_function_tab_start')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.tab_start.php';
if (!is_callable('smarty_function_tab_end')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.tab_end.php';
?><script type="text/javascript">
$(document).ready(function(){
  $('img.viewhelp').click(function(){
    var n = $(this).attr('name');
    $('#'+n).dialog();
  });

  $(document).on('click','#clearlocks,#cssclearlocks',function(){
     return confirm('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_clearlocks'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
  });
});
</script>

<?php if ($_smarty_tpl->tpl_vars['manage_designs']->value) {?>
	<?php echo smarty_function_tab_header(array('name'=>'designs','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_designs')),$_smarty_tpl);?>

<?php }?>


<?php echo smarty_function_tab_header(array('name'=>'templates','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_templates')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['manage_stylesheets']->value) {?>
	<?php echo smarty_function_tab_header(array('name'=>'stylesheets','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_stylesheets')),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['manage_templates']->value) {?>
	<?php echo smarty_function_tab_header(array('name'=>'types','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_templatetypes')),$_smarty_tpl);?>

	<?php echo smarty_function_tab_header(array('name'=>'categories','label'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_categories')),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['manage_designs']->value) {?>
	<?php echo smarty_function_tab_start(array('name'=>'designs'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_designs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 2);?>

<?php }?>


<?php echo smarty_function_tab_start(array('name'=>'templates'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_templates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 2);?>


<?php if ($_smarty_tpl->tpl_vars['manage_stylesheets']->value) {?>
	<?php echo smarty_function_tab_start(array('name'=>'stylesheets'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_stylesheets.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 2);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['manage_templates']->value) {?>
	<?php echo smarty_function_tab_start(array('name'=>'types'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_types.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 2);?>

	<?php echo smarty_function_tab_start(array('name'=>'categories'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_categories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 2);?>

<?php }?>

<?php echo smarty_function_tab_end(array(),$_smarty_tpl);?>
<?php }} ?>
