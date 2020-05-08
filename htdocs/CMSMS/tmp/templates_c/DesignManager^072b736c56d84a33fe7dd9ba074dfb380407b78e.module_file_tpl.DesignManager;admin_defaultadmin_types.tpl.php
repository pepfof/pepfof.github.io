<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:04
         compiled from "module_file_tpl:DesignManager;admin_defaultadmin_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2819558a76544350fe3-46634830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072b736c56d84a33fe7dd9ba074dfb380407b78e' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_defaultadmin_types.tpl',
      1 => 1487363665,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2819558a76544350fe3-46634830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_all_types' => 0,
    'mod' => 0,
    'has_add_right' => 0,
    'type' => 0,
    'rowclass' => 0,
    'edit_url' => 0,
    'create_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a7654442d4d1_93266970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7654442d4d1_93266970')) {function content_58a7654442d4d1_93266970($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_cms_function_cms_action_url')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_admin_icon')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.admin_icon.php';
?><?php if (isset($_smarty_tpl->tpl_vars['list_all_types']->value)) {?>
<table class="pagetable">
  <thead>
    <tr>
      <th width="5%"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_id');?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
</th>
      <?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?>
      <th class="pageicon"></th>
      <?php }?>
      <th class="pageicon"></th>
    </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_all_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
   <?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

   <?php if (isset($_smarty_tpl->tpl_vars['reset_url'])) {$_smarty_tpl->tpl_vars['reset_url'] = clone $_smarty_tpl->tpl_vars['reset_url'];
$_smarty_tpl->tpl_vars['reset_url']->value = ''; $_smarty_tpl->tpl_vars['reset_url']->nocache = null; $_smarty_tpl->tpl_vars['reset_url']->scope = 0;
} else $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable('', null, 0);?>
   <?php if ($_smarty_tpl->tpl_vars['type']->value->get_dflt_flag()) {?>
     <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_reset_type','type'=>$_smarty_tpl->tpl_vars['type']->value->get_id(),'assign'=>'reset_url'),$_smarty_tpl);?>

   <?php }?>
   <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_type','type'=>$_smarty_tpl->tpl_vars['type']->value->get_id(),'assign'=>'edit_url'),$_smarty_tpl);?>

   <tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
" onmouseover="this.className='<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
hover';" onmouseout="this.className='<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
';">
      <td><?php echo $_smarty_tpl->tpl_vars['type']->value->get_id();?>
</td>
      <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_edit');?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value->get_langified_display_value();?>
</a>
      </td>
      <?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?>
      <td><?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_template','import_type'=>$_smarty_tpl->tpl_vars['type']->value->get_id(),'assign'=>'create_url'),$_smarty_tpl);?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['create_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_import');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'import.gif'),$_smarty_tpl);?>
</a>
      </td>
      <?php }?>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_edit');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif'),$_smarty_tpl);?>
</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<?php }?><?php }} ?>
