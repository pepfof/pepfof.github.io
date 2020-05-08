<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:02
         compiled from "module_file_tpl:DesignManager;admin_defaultadmin_designs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:709258a76542b1d3c9-61441099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f638a0658b50658fce59dbd924d21749132f50' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_defaultadmin_designs.tpl',
      1 => 1487363665,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '709258a76542b1d3c9-61441099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'list_designs' => 0,
    'design' => 0,
    'rowclass' => 0,
    'edit_url' => 0,
    'export_url' => 0,
    'delete_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a76542c9fd95_86102894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a76542c9fd95_86102894')) {function content_58a76542c9fd95_86102894($_smarty_tpl) {?><?php if (!is_callable('smarty_function_admin_icon')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.admin_icon.php';
if (!is_callable('smarty_cms_function_cms_action_url')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\function.cycle.php';
?><div class="row">
  <div class="pageoptions options-menu half">
    <ul class="options-menu">
      <li class="parent"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_options')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_options');?>

        <ul id="popupdsncontents">
           <li><a accesskey="a" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_design'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_design');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_design');?>
</a></li>
           <li><a accesskey="a" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_import_design'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_import_design');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'import.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('import_design');?>
</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['list_designs']->value)) {?>
<table class="pagetable">
  <thead>
    <tr>
      <th width="5%"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_id');?>
</th>
      <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
</th>
      <th class="pageicon"><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_designs_default');?>
"><?php echo lang('default');?>
</span></th>
      <th class="pageicon"></th>
      <th class="pageicon"></th>
      <th class="pageicon"></th>
    </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['design'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['design']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_designs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['design']->key => $_smarty_tpl->tpl_vars['design']->value) {
$_smarty_tpl->tpl_vars['design']->_loop = true;
?>
    <?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>

    <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_design','design'=>$_smarty_tpl->tpl_vars['design']->value->get_id(),'assign'=>'edit_url'),$_smarty_tpl);?>

    <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_delete_design','design'=>$_smarty_tpl->tpl_vars['design']->value->get_id(),'assign'=>'delete_url'),$_smarty_tpl);?>

    <?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_export_design','design'=>$_smarty_tpl->tpl_vars['design']->value->get_id(),'assign'=>'export_url'),$_smarty_tpl);?>

    <tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
" onmouseover="this.className='<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
hover';" onmouseout="this.className='<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
';">
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_design');?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value->get_id();?>
</a></td>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_design');?>
"><?php echo $_smarty_tpl->tpl_vars['design']->value->get_name();?>
</a></td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['design']->value->get_default()) {?>
	  <?php echo smarty_function_admin_icon(array('icon'=>'true.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_dflt')),$_smarty_tpl);?>

	<?php } else { ?>
	  <a href="<?php echo smarty_cms_function_cms_action_url(array('design_setdflt'=>$_smarty_tpl->tpl_vars['design']->value->get_id()),$_smarty_tpl);?>
"><?php echo smarty_function_admin_icon(array('icon'=>'false.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_setdflt_design')),$_smarty_tpl);?>
</a>
	<?php }?>
      </td>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_design');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif'),$_smarty_tpl);?>
</a></td>
      <td><a href="<?php echo $_smarty_tpl->tpl_vars['export_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('export_design');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'export.gif'),$_smarty_tpl);?>
</a></td>
      <td>
        <?php if (!$_smarty_tpl->tpl_vars['design']->value->get_default()) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['delete_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_design');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif'),$_smarty_tpl);?>
</a>
	<?php }?>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<?php }?><?php }} ?>
