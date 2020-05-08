<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:06
         compiled from "module_file_tpl:DesignManager;ajax_get_templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3229558a76546165271-10198338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c6f9d6e2beae5c2c25c545cbbc2bd3bb7cb94e2' => 
    array (
      0 => 'module_file_tpl:DesignManager;ajax_get_templates.tpl',
      1 => 1487363666,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '3229558a76546165271-10198338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'has_add_right' => 0,
    'have_locks' => 0,
    'tpl_filter' => 0,
    'tpl_nav' => 0,
    'actionid' => 0,
    'templates' => 0,
    'rowclass' => 0,
    'template' => 0,
    'edit_tpl' => 0,
    'tpl_tooltip' => 0,
    'tpltype_tooltip' => 0,
    'type_id' => 0,
    'list_types' => 0,
    't1' => 0,
    'design_names' => 0,
    'manage_designs' => 0,
    'edit_design_url' => 0,
    'hn' => 0,
    'list_all_types' => 0,
    'the_type' => 0,
    'lock_timeout' => 0,
    'copy_tpl' => 0,
    'lock' => 0,
    'manage_templates' => 0,
    'delete_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a765467bfe63_42853933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a765467bfe63_42853933')) {function content_58a765467bfe63_42853933($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_admin_icon')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.admin_icon.php';
if (!is_callable('smarty_cms_function_cms_action_url')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_cms_pageoptions')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_pageoptions.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.cms_help.php';
if (!is_callable('smarty_function_page_warning')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.page_warning.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.form_end.php';
?><script>
$('#tpl_selall').cmsms_checkall();
</script>

<?php echo smarty_function_form_start(array('action'=>'defaultadmin'),$_smarty_tpl);?>
<div class="row"><div class="pageoptions options-menu half"><ul class="options-menu"><li class="parent"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_options')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_options');?>
<ul id="popuptplcontents"><?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?><li><a id="addtemplate" accesskey="a" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_template');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('create_template')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_template');?>
</a></li><?php }?><li><a id="edittplfilter" accesskey="f" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editfilter');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editfilter')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filter');?>
</a></li><?php if ($_smarty_tpl->tpl_vars['have_locks']->value) {?><li><a id="clearlocks" accesskey="l" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_clearlocks');?>
" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_clearlocks','type'=>'template'),$_smarty_tpl);?>
"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>''),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_clearlocks');?>
</a></li><?php }?></ul></li><?php if (!empty($_smarty_tpl->tpl_vars['tpl_filter']->value[0])) {?><li><span style="color: green;" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_filterapplied');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filterapplied');?>
</span></li><?php }?></ul></div><?php if (isset($_smarty_tpl->tpl_vars['tpl_nav']->value)&&$_smarty_tpl->tpl_vars['tpl_nav']->value['numpages']>1) {?><div class="pageoptions" style="text-align: right;"><label for="tpl_page"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page');?>
:</label>&nbsp;<select id="tpl_page" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
tpl_page"><?php echo smarty_function_cms_pageoptions(array('numpages'=>$_smarty_tpl->tpl_vars['tpl_nav']->value['numpages'],'curpage'=>$_smarty_tpl->tpl_vars['tpl_nav']->value['curpage']),$_smarty_tpl);?>
</select>&nbsp;<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('go');?>
"/></div><?php }?></div><?php if (isset($_smarty_tpl->tpl_vars['templates']->value)) {?><table class="pagetable"><thead><tr><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_id');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_id');?>
</th><th class="pageicon"></th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_name');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
</th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_type');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_type');?>
</th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_design');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_design');?>
</th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_dflt');?>
" class="pageicon"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_dflt');?>
</th><th class="pageicon"></th><?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?><th class="pageicon"></th><?php }?><th class="pageicon"></th><th class="pageicon"><input type="checkbox" value="1" id="tpl_selall" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_select_all');?>
"/></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?><?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>
<?php $_smarty_tpl->tpl_vars['tpl_tooltip'] = new Smarty_variable($_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_tpltooltip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>
<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
"><?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_template','tpl'=>$_smarty_tpl->tpl_vars['template']->value->get_id(),'assign'=>'edit_tpl'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?><?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_copy_template','tpl'=>$_smarty_tpl->tpl_vars['template']->value->get_id(),'assign'=>'copy_tpl'),$_smarty_tpl);?>
<?php }?><?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_delete_template','tpl'=>$_smarty_tpl->tpl_vars['template']->value->get_id(),'assign'=>'delete_tpl'),$_smarty_tpl);?>
<?php if (!$_smarty_tpl->tpl_vars['template']->value->locked()) {?><td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_tpl']->value;?>
" data-tpl-id="<?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
" class="edit_tpl tooltip" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_template');?>
" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['tpl_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
</a></td><td></td><td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_tpl']->value;?>
" data-tpl-id="<?php echo $_smarty_tpl->tpl_vars['template']->value->get_type_id();?>
" class="edit_tpl tooltip" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_template');?>
" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['tpl_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value->get_name();?>
</a></td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
</td><td><?php echo smarty_function_admin_icon(array('icon'=>'warning.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_locked')),$_smarty_tpl);?>
</td><td><span class="tooltip" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['tpl_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['template']->value->get_name();?>
</span></td><?php }?><td><?php if (isset($_smarty_tpl->tpl_vars['type_id'])) {$_smarty_tpl->tpl_vars['type_id'] = clone $_smarty_tpl->tpl_vars['type_id'];
$_smarty_tpl->tpl_vars['type_id']->value = $_smarty_tpl->tpl_vars['template']->value->get_type_id(); $_smarty_tpl->tpl_vars['type_id']->nocache = null; $_smarty_tpl->tpl_vars['type_id']->scope = 0;
} else $_smarty_tpl->tpl_vars['type_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['template']->value->get_type_id(), null, 0);?><?php $_smarty_tpl->tpl_vars['tpltype_tooltip'] = new Smarty_variable($_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_tpltype_tooltip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>
<span class="tooltip" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['tpltype_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['list_types']->value[$_smarty_tpl->tpl_vars['type_id']->value];?>
</span></td><td><?php if (isset($_smarty_tpl->tpl_vars['t1'])) {$_smarty_tpl->tpl_vars['t1'] = clone $_smarty_tpl->tpl_vars['t1'];
$_smarty_tpl->tpl_vars['t1']->value = $_smarty_tpl->tpl_vars['template']->value->get_designs(); $_smarty_tpl->tpl_vars['t1']->nocache = null; $_smarty_tpl->tpl_vars['t1']->scope = 0;
} else $_smarty_tpl->tpl_vars['t1'] = new Smarty_variable($_smarty_tpl->tpl_vars['template']->value->get_designs(), null, 0);?><?php if (count($_smarty_tpl->tpl_vars['t1']->value)==1) {?><?php if (isset($_smarty_tpl->tpl_vars['t1'])) {$_smarty_tpl->tpl_vars['t1'] = clone $_smarty_tpl->tpl_vars['t1'];
$_smarty_tpl->tpl_vars['t1']->value = $_smarty_tpl->tpl_vars['t1']->value[0]; $_smarty_tpl->tpl_vars['t1']->nocache = null; $_smarty_tpl->tpl_vars['t1']->scope = 0;
} else $_smarty_tpl->tpl_vars['t1'] = new Smarty_variable($_smarty_tpl->tpl_vars['t1']->value[0], null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['hn'])) {$_smarty_tpl->tpl_vars['hn'] = clone $_smarty_tpl->tpl_vars['hn'];
$_smarty_tpl->tpl_vars['hn']->value = $_smarty_tpl->tpl_vars['design_names']->value[$_smarty_tpl->tpl_vars['t1']->value]; $_smarty_tpl->tpl_vars['hn']->nocache = null; $_smarty_tpl->tpl_vars['hn']->scope = 0;
} else $_smarty_tpl->tpl_vars['hn'] = new Smarty_variable($_smarty_tpl->tpl_vars['design_names']->value[$_smarty_tpl->tpl_vars['t1']->value], null, 0);?><?php if ($_smarty_tpl->tpl_vars['manage_designs']->value) {?><?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_design','design'=>$_smarty_tpl->tpl_vars['t1']->value,'assign'=>'edit_design_url'),$_smarty_tpl);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['edit_design_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_design');?>
"><?php echo $_smarty_tpl->tpl_vars['hn']->value;?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['hn']->value;?>
<?php }?><?php } elseif (count($_smarty_tpl->tpl_vars['t1']->value)==0) {?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_template_no_designs');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_none');?>
</span><?php } else { ?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_template_multiple_designs');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_multiple');?>
 (<?php echo count($_smarty_tpl->tpl_vars['t1']->value);?>
)</span><?php }?></td><td><?php if (isset($_smarty_tpl->tpl_vars['the_type'])) {$_smarty_tpl->tpl_vars['the_type'] = clone $_smarty_tpl->tpl_vars['the_type'];
$_smarty_tpl->tpl_vars['the_type']->value = $_smarty_tpl->tpl_vars['list_all_types']->value[$_smarty_tpl->tpl_vars['type_id']->value]; $_smarty_tpl->tpl_vars['the_type']->nocache = null; $_smarty_tpl->tpl_vars['the_type']->scope = 0;
} else $_smarty_tpl->tpl_vars['the_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['list_all_types']->value[$_smarty_tpl->tpl_vars['type_id']->value], null, 0);?><?php if ($_smarty_tpl->tpl_vars['the_type']->value->get_dflt_flag()) {?><?php if ($_smarty_tpl->tpl_vars['template']->value->get_type_dflt()) {?><?php echo smarty_function_admin_icon(array('icon'=>'true.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_dflt_tpl')),$_smarty_tpl);?>
<?php } else { ?><?php echo smarty_function_admin_icon(array('icon'=>'false.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_notdflt_tpl')),$_smarty_tpl);?>
<?php }?><?php } else { ?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_title_na');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_na');?>
</span><?php }?></td><?php if (!$_smarty_tpl->tpl_vars['lock_timeout']->value||!$_smarty_tpl->tpl_vars['template']->value->locked()) {?><td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_tpl']->value;?>
" data-tpl-id="<?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
" class="edit_tpl" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_template');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_edit')),$_smarty_tpl);?>
</a></td><?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?><td><a href="<?php echo $_smarty_tpl->tpl_vars['copy_tpl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('copy_template');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'copy.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_copy_template')),$_smarty_tpl);?>
</a></td><?php }?><?php } else { ?><td><?php if (isset($_smarty_tpl->tpl_vars['lock'])) {$_smarty_tpl->tpl_vars['lock'] = clone $_smarty_tpl->tpl_vars['lock'];
$_smarty_tpl->tpl_vars['lock']->value = $_smarty_tpl->tpl_vars['template']->value->get_lock(); $_smarty_tpl->tpl_vars['lock']->nocache = null; $_smarty_tpl->tpl_vars['lock']->scope = 0;
} else $_smarty_tpl->tpl_vars['lock'] = new Smarty_variable($_smarty_tpl->tpl_vars['template']->value->get_lock(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['lock']->value['expires']<time()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['edit_tpl']->value;?>
" data-tpl-id="<?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
" accesskey="e" class="steal_tpl_lock"><?php echo smarty_function_admin_icon(array('icon'=>'permissions.gif','class'=>'edit_tpl steal_tpl_lock','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_steal_lock')),$_smarty_tpl);?>
</a><?php }?></td><?php if ($_smarty_tpl->tpl_vars['has_add_right']->value) {?><td></td><?php }?><?php }?><td><?php if (!$_smarty_tpl->tpl_vars['template']->value->get_type_dflt()&&!$_smarty_tpl->tpl_vars['template']->value->locked()) {?><?php if ($_smarty_tpl->tpl_vars['template']->value->get_owner_id()==get_userid()||$_smarty_tpl->tpl_vars['manage_templates']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['delete_tpl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_template');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('delete_template')),$_smarty_tpl);?>
</a><?php }?><?php }?></td><td><?php if (!$_smarty_tpl->tpl_vars['template']->value->locked()&&($_smarty_tpl->tpl_vars['template']->value->get_owner_id()==get_userid()||$_smarty_tpl->tpl_vars['manage_templates']->value)) {?><input type="checkbox" class="tpl_select" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
tpl_select[]" value="<?php echo $_smarty_tpl->tpl_vars['template']->value->get_id();?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_bulk');?>
"/><?php }?></td></tr><?php } ?>
    </tbody>
  </table>

  <div class="row">
    <div class="half options-menu"></div>
    <div class="half options-menu">
      <p class="pageinput" style="text-align: right;">
        <label for="tpl_bulk_action"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_with_selected');?>
:</label>&nbsp;
        <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
bulk_action" id="tpl_bulk_action" class="tpl_bulk_action" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_tpl_bulkaction');?>
">
          <option value="delete" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_delete');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_delete');?>
</option>
        </select>
        <input id="tpl_bulk_submit" class="tpl_bulk_action" type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit_bulk" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_bulk_templates','title'=>$_smarty_tpl->tpl_vars['mod']->value->lang('prompt_delete')),$_smarty_tpl);?>

      </p>
    </div>
    <div class="clearb"></div>
  </div>

<?php } else { ?>
  <?php echo smarty_function_page_warning(array('msg'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('warning_no_templates_available')),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php }} ?>
