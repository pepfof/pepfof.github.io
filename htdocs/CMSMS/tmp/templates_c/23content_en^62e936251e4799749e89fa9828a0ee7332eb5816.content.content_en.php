<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:09:59
         compiled from "content:content_en" */ ?>
<?php /*%%SmartyHeaderCode:1421858a766a7d2eb12-99900080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1487367300,
      2 => 'content',
    ),
  ),
  'nocache_hash' => '1421858a766a7d2eb12-99900080',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a766a7dde5d0_14528772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a766a7dde5d0_14528772')) {function content_58a766a7dde5d0_14528772($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_selflink')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_selflink.php';
?><p>There are six modules that come with the default installation of CMS Made Simple. On the following pages we explain how these are used. Click on each module name in the menu to the left or in the list below.</p><p>To insert a module in a template or a page you normally use the <code>{cms_module}</code> tag with the module name as one of the parameters. But to simplify things, all core modules also have a tag wrapper, so that they are called simple by their name, like <code>{news}</code>.</p><ul><li><?php echo smarty_function_cms_selflink(array('page'=>'news','text'=>'News'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'menu-manager-2','text'=>'Menu Manager'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'theme-manager','text'=>'Theme Manager'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'microtiny','text'=>'MicroTiny'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'search','text'=>'Search'),$_smarty_tpl);?>
</li><li><?php echo smarty_function_cms_selflink(array('page'=>'module-manager','text'=>'Module Manager'),$_smarty_tpl);?>
</li></ul><?php }} ?>
