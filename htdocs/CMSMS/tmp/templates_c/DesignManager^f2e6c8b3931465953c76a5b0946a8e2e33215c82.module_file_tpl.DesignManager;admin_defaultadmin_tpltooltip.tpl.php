<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:07
         compiled from "module_file_tpl:DesignManager;admin_defaultadmin_tpltooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1864458a7654739a4f0-31624014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e6c8b3931465953c76a5b0946a8e2e33215c82' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_defaultadmin_tpltooltip.tpl',
      1 => 1487363665,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '1864458a7654739a4f0-31624014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'mod' => 0,
    'lock' => 0,
    'tmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a76547537424_09557160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a76547537424_09557160')) {function content_58a76547537424_09557160($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_admin_user')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.cms_admin_user.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_relative_time')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\modifier.relative_time.php';
if (!is_callable('smarty_modifier_cms_date_format')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\modifier.cms_date_format.php';
if (!is_callable('smarty_modifier_cms_escape')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_summarize')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\modifier.summarize.php';
?><?php if ($_smarty_tpl->tpl_vars['template']->value->locked()) {?><?php if (isset($_smarty_tpl->tpl_vars['lock'])) {$_smarty_tpl->tpl_vars['lock'] = clone $_smarty_tpl->tpl_vars['lock'];
$_smarty_tpl->tpl_vars['lock']->value = $_smarty_tpl->tpl_vars['template']->value->get_lock(); $_smarty_tpl->tpl_vars['lock']->nocache = null; $_smarty_tpl->tpl_vars['lock']->scope = 0;
} else $_smarty_tpl->tpl_vars['lock'] = new Smarty_variable($_smarty_tpl->tpl_vars['template']->value->get_lock(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['template']->value->lock_expired()) {?><strong style="color: red;"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('msg_steal_lock');?>
</strong><br/><?php }?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockedby');?>
:</strong> <?php echo smarty_function_cms_admin_user(array('uid'=>$_smarty_tpl->tpl_vars['lock']->value['uid']),$_smarty_tpl);?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockedsince');?>
:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lock']->value['created'],'%x %H:%M');?>
<br/><?php if ($_smarty_tpl->tpl_vars['lock']->value['expires']<time()) {?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockexpired');?>
:</strong> <span style="color: red;"><?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['lock']->value['expires']);?>
</span><?php } else { ?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_lockexpires');?>
:</strong> <?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['lock']->value['expires']);?>
<?php }?><?php } else { ?><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['template']->value->get_name();?>
 <em>(<?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
)</em><br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_owner');?>
:</strong> <?php echo smarty_function_cms_admin_user(array('uid'=>$_smarty_tpl->tpl_vars['template']->value->get_owner_id()),$_smarty_tpl);?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created');?>
:</strong> <?php echo smarty_modifier_cms_escape(smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['template']->value->get_created()));?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
:</strong> <?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['template']->value->get_modified());?>
<?php if (isset($_smarty_tpl->tpl_vars['tmp'])) {$_smarty_tpl->tpl_vars['tmp'] = clone $_smarty_tpl->tpl_vars['tmp'];
$_smarty_tpl->tpl_vars['tmp']->value = $_smarty_tpl->tpl_vars['template']->value->get_description(); $_smarty_tpl->tpl_vars['tmp']->nocache = null; $_smarty_tpl->tpl_vars['tmp']->scope = 0;
} else $_smarty_tpl->tpl_vars['tmp'] = new Smarty_variable($_smarty_tpl->tpl_vars['template']->value->get_description(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['tmp']->value!='') {?><br/><strong><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_description');?>
:</strong> <?php echo smarty_modifier_summarize(smarty_modifier_cms_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['tmp']->value)));?>
<?php }?><?php }?><?php }} ?>
