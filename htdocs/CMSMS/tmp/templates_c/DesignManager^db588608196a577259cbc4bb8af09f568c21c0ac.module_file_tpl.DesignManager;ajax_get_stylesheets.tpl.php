<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:07
         compiled from "module_file_tpl:DesignManager;ajax_get_stylesheets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2721558a76547e47f94-14225475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db588608196a577259cbc4bb8af09f568c21c0ac' => 
    array (
      0 => 'module_file_tpl:DesignManager;ajax_get_stylesheets.tpl',
      1 => 1487363666,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2721558a76547e47f94-14225475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'have_css_locks' => 0,
    'css_filter' => 0,
    'css_nav' => 0,
    'actionid' => 0,
    'stylesheets' => 0,
    'css' => 0,
    'rowclass' => 0,
    'edit_css' => 0,
    'css_tooltip' => 0,
    't1' => 0,
    'design_names' => 0,
    'manage_designs' => 0,
    'edit_design_url' => 0,
    'hn' => 0,
    'dsn_id' => 0,
    'tooltip_designs' => 0,
    'copy_css' => 0,
    'delete_css' => 0,
    'lock' => 0,
    'stylesheet_dropdown_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a765482ed535_42940299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a765482ed535_42940299')) {function content_58a765482ed535_42940299($_smarty_tpl) {?><?php if (!is_callable('smarty_function_admin_icon')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.admin_icon.php';
if (!is_callable('smarty_cms_function_cms_action_url')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_action_url.php';
if (!is_callable('smarty_function_form_start')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_cms_pageoptions')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_pageoptions.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.form_end.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_cms_help')) include 'C:\\xampp\\htdocs\\CMSMS\\admin/plugins\\function.cms_help.php';
?><script>
$('#css_selall').cmsms_checkall();
</script>

<div class="row">
  <div class="pageoptions options-menu half">
    <ul class="options-menu">
      <li class="parent"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_options')),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_options');?>

        <ul id="popupcsscontents">
           <li><a id="addcss" accesskey="a" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_css'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_stylesheet');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'newobject.gif'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('create_stylesheet');?>
</a></li>
           <li><a id="editcssfilter" accesskey="f" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editfilter');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','alt'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_editfilter')),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filter');?>
</a></li>
           <?php if ($_smarty_tpl->tpl_vars['have_css_locks']->value) {?>
           <li><a id="cssclearlocks" accesskey="l" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_clearlocks');?>
" href="<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_clearlocks','type'=>'stylesheet'),$_smarty_tpl);?>
"><?php echo smarty_function_admin_icon(array('icon'=>'run.gif','alt'=>''),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_clearlocks');?>
</a></li>
           <?php }?>
        </ul>
      </li>
      <?php if ($_smarty_tpl->tpl_vars['css_filter']->value!=''&&$_smarty_tpl->tpl_vars['css_filter']->value['design']!='') {?>
      <li><span style="color: green;" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_filterapplied');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('filterapplied');?>
</span></li>
      <?php }?>
    </ul>
  </div>

  <?php if (isset($_smarty_tpl->tpl_vars['css_nav']->value)&&$_smarty_tpl->tpl_vars['css_nav']->value['numpages']>1) {?>
    <div class="pageoptions" style="text-align: right;">
      <?php echo smarty_function_form_start(array('action'=>'defaultadmin'),$_smarty_tpl);?>

        <label for="css_page"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_page');?>
:</label>&nbsp;
        <select id="css_page" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
css_page">
        <?php echo smarty_function_cms_pageoptions(array('numpages'=>$_smarty_tpl->tpl_vars['css_nav']->value['numpages'],'curpage'=>$_smarty_tpl->tpl_vars['css_nav']->value['curpage']),$_smarty_tpl);?>

        </select>
        &nbsp;<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('go');?>
"/>
      <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

    </div>
  <?php }?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['stylesheets']->value)) {?>
  <?php echo smarty_function_form_start(array('action'=>'admin_bulk_css'),$_smarty_tpl);?>
<table class="pagetable"><thead><tr><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_css_id');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_id');?>
</th><th class="pageicon"></th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_css_name');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
</th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_css_designs');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_design');?>
</th><th title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_css_modified');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
</th><th class="pageicon"></th><th class="pageicon"></th><th class="pageicon"></th><th class="pageicon"><label for="css_selall" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_css_selectall');?>
</label><input type="checkbox" value="1" id="css_selall" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_css_selectall');?>
"/></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['css']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
 $_smarty_tpl->tpl_vars['css']->index++;
?><?php echo smarty_function_cycle(array('values'=>"row1,row2",'assign'=>'rowclass'),$_smarty_tpl);?>
<?php $_smarty_tpl->tpl_vars['css_tooltip'] = new Smarty_variable($_smarty_tpl->getSubTemplate ('module_file_tpl:DesignManager;admin_defaultadmin_csstooltip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>
<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_css','css'=>$_smarty_tpl->tpl_vars['css']->value->get_id(),'assign'=>'edit_css'),$_smarty_tpl);?>
<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_copy_css','css'=>$_smarty_tpl->tpl_vars['css']->value->get_id(),'assign'=>'copy_css'),$_smarty_tpl);?>
<?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_delete_css','css'=>$_smarty_tpl->tpl_vars['css']->value->get_id(),'assign'=>'delete_css'),$_smarty_tpl);?>
<tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
"><?php if (!$_smarty_tpl->tpl_vars['css']->value->locked()) {?><td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_css']->value;?>
" data-css-id="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
" class="edit_css tooltip" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_stylesheet');?>
" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['css_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
</a></td><td></td><td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_css']->value;?>
" data-css-id="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
" class="edit_css tooltip" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_stylesheet');?>
" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['css_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['css']->value->get_name();?>
</a></td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
</td><td><?php echo smarty_function_admin_icon(array('icon'=>'warning.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('title_locked')),$_smarty_tpl);?>
</td><td><span class="tooltip" data-cms-description='<?php echo $_smarty_tpl->tpl_vars['css_tooltip']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['css']->value->get_name();?>
</span></td><?php }?><td><?php if (isset($_smarty_tpl->tpl_vars['t1'])) {$_smarty_tpl->tpl_vars['t1'] = clone $_smarty_tpl->tpl_vars['t1'];
$_smarty_tpl->tpl_vars['t1']->value = $_smarty_tpl->tpl_vars['css']->value->get_designs(); $_smarty_tpl->tpl_vars['t1']->nocache = null; $_smarty_tpl->tpl_vars['t1']->scope = 0;
} else $_smarty_tpl->tpl_vars['t1'] = new Smarty_variable($_smarty_tpl->tpl_vars['css']->value->get_designs(), null, 0);?><?php if (count($_smarty_tpl->tpl_vars['t1']->value)==1) {?><?php if (isset($_smarty_tpl->tpl_vars['t1'])) {$_smarty_tpl->tpl_vars['t1'] = clone $_smarty_tpl->tpl_vars['t1'];
$_smarty_tpl->tpl_vars['t1']->value = $_smarty_tpl->tpl_vars['t1']->value[0]; $_smarty_tpl->tpl_vars['t1']->nocache = null; $_smarty_tpl->tpl_vars['t1']->scope = 0;
} else $_smarty_tpl->tpl_vars['t1'] = new Smarty_variable($_smarty_tpl->tpl_vars['t1']->value[0], null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['hn'])) {$_smarty_tpl->tpl_vars['hn'] = clone $_smarty_tpl->tpl_vars['hn'];
$_smarty_tpl->tpl_vars['hn']->value = $_smarty_tpl->tpl_vars['design_names']->value[$_smarty_tpl->tpl_vars['t1']->value]; $_smarty_tpl->tpl_vars['hn']->nocache = null; $_smarty_tpl->tpl_vars['hn']->scope = 0;
} else $_smarty_tpl->tpl_vars['hn'] = new Smarty_variable($_smarty_tpl->tpl_vars['design_names']->value[$_smarty_tpl->tpl_vars['t1']->value], null, 0);?><?php if ($_smarty_tpl->tpl_vars['manage_designs']->value) {?><?php echo smarty_cms_function_cms_action_url(array('action'=>'admin_edit_design','design'=>$_smarty_tpl->tpl_vars['t1']->value,'assign'=>'edit_design_url'),$_smarty_tpl);?>
<a href="<?php echo $_smarty_tpl->tpl_vars['edit_design_url']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_design');?>
"><?php echo $_smarty_tpl->tpl_vars['hn']->value;?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['hn']->value;?>
<?php }?><?php } elseif (count($_smarty_tpl->tpl_vars['t1']->value)==0) {?><span title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_stylesheet_no_designs');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_none');?>
</span><?php } else { ?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tooltip_designs', null); ob_start(); ?><u><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_attached_designs');?>
</u>:<br /><?php  $_smarty_tpl->tpl_vars['dsn_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dsn_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dsn_id']->key => $_smarty_tpl->tpl_vars['dsn_id']->value) {
$_smarty_tpl->tpl_vars['dsn_id']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['design_names']->value[$_smarty_tpl->tpl_vars['dsn_id']->value];?>
<br /><?php } ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	    <a class="tooltip text-red" data-cms-description='<?php echo htmlentities($_smarty_tpl->tpl_vars['tooltip_designs']->value);?>
' title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('help_stylesheet_multiple_designs');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_multiple');?>
 (<?php echo count($_smarty_tpl->tpl_vars['t1']->value);?>
)
	  <?php }?>
	</td>
	<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['css']->value->get_modified(),'%x %X');?>
</td>

	<?php if (!$_smarty_tpl->tpl_vars['css']->value->locked()) {?>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['edit_css']->value;?>
" data-css-id="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
" class="edit_css" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('edit_stylesheet');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'edit.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('edit_stylesheet')),$_smarty_tpl);?>
</a></td>
	  <td><a href="<?php echo $_smarty_tpl->tpl_vars['copy_css']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('copy_stylesheet');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'copy.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('copy_stylesheet')),$_smarty_tpl);?>
</a></td>
  	  <td><a href="<?php echo $_smarty_tpl->tpl_vars['delete_css']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_stylesheet');?>
"><?php echo smarty_function_admin_icon(array('icon'=>'delete.gif','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('delete_stylesheet')),$_smarty_tpl);?>
</a></td>
  	  <td>
	    <label for="css_select<?php echo $_smarty_tpl->tpl_vars['css']->index;?>
" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_select');?>
:</label>
	    <input id="<?php echo $_smarty_tpl->tpl_vars['css']->index;?>
" type="checkbox" class="css_select" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
css_select[]" value="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
"/>
	  </td>
        <?php } else { ?>
          <td>
            <?php if (isset($_smarty_tpl->tpl_vars['lock'])) {$_smarty_tpl->tpl_vars['lock'] = clone $_smarty_tpl->tpl_vars['lock'];
$_smarty_tpl->tpl_vars['lock']->value = $_smarty_tpl->tpl_vars['css']->value->get_lock(); $_smarty_tpl->tpl_vars['lock']->nocache = null; $_smarty_tpl->tpl_vars['lock']->scope = 0;
} else $_smarty_tpl->tpl_vars['lock'] = new Smarty_variable($_smarty_tpl->tpl_vars['css']->value->get_lock(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['lock']->value['expires']<time()) {?>
	      <a href="<?php echo $_smarty_tpl->tpl_vars['edit_css']->value;?>
" data-css-id="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
" accesskey="e" class="steal_css_lock"><?php echo smarty_function_admin_icon(array('icon'=>'permissions.gif','class'=>'edit_css steal_css_lock','title'=>$_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_steal_lock')),$_smarty_tpl);?>
</a>
            <?php }?>
          </td>
          <td></td>
          <td></td>
          <td></td>
        <?php }?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  

  <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'stylesheet_dropdown_options', null); ob_start(); ?>
    <div class="pageoptions" id="bulkoptions" style="text-align: right;">
      <label for="css_bulk_action"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_with_selected');?>
:</label>&nbsp;
      <select name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
css_bulk_action" id="css_bulk_action" class="cssx_bulk_action">
        <option value="delete" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_delete');?>
"><?php echo $_smarty_tpl->tpl_vars['mod']->value->lang('prompt_delete');?>
</option>
      </select>
      <input id="css_bulk_submit" class="css_bulk_action" type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit_bulk_css" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>&nbsp;<?php echo smarty_function_cms_help(array('key2'=>'help_css_bulk','title'=>$_smarty_tpl->tpl_vars['mod']->value->lang('prompt_delete')),$_smarty_tpl);?>

    </div>
  <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

  <div class="clearb"></div>
  <div class="row">
    <div class="half"></div>
    <?php if (isset($_smarty_tpl->tpl_vars['stylesheet_dropdown_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['stylesheet_dropdown_options']->value;?>
<?php }?>
  </div>
  <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php } else { ?>
  <div class="warning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warning_no_stylesheets');?>
</div>
<?php }?>
<?php }} ?>
