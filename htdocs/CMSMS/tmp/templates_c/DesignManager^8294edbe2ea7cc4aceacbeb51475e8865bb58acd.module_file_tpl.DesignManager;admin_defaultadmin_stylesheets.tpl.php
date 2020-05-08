<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:04:03
         compiled from "module_file_tpl:DesignManager;admin_defaultadmin_stylesheets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1518658a76543ca01c9-84813741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8294edbe2ea7cc4aceacbeb51475e8865bb58acd' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_defaultadmin_stylesheets.tpl',
      1 => 1487363665,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '1518658a76543ca01c9-84813741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax_stylesheets_url' => 0,
    'jsoncssfilter' => 0,
    'mod' => 0,
    'actionid' => 0,
    'design_names' => 0,
    'css_filter' => 0,
    'filter_limit_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a76543dfeae4_92637534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a76543dfeae4_92637534')) {function content_58a76543dfeae4_92637534($_smarty_tpl) {?><?php if (!is_callable('smarty_function_form_start')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\CMSMS\\lib\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_form_end')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.form_end.php';
?><script type="text/javascript">
$(document).ready(function(){
    cms_busy();
    $('#stylesheet_area').autoRefresh({
      url: '<?php echo $_smarty_tpl->tpl_vars['ajax_stylesheets_url']->value;?>
',
      data: {
        filter: '<?php echo $_smarty_tpl->tpl_vars['jsoncssfilter']->value;?>
'
      }
    });

    $('#css_bulk_action,#css_bulk_submit').attr('disabled','disabled');
    $('#css_bulk_submit').button({ 'disabled' : true });
    $('#css_selall,.css_select').on('click',function(){
      // if there is one or more .css_select checked, we enabled the bulk actions
      var l = $('.css_select:checked').length;
      if( l == 0 ) {
        $('#css_bulk_action').attr('disabled','disabled');
        $('#css_bulk_submit').attr('disabled','disabled');
        $('#css_bulk_submit').button({ 'disabled' : true });
      } else {
        $('#css_bulk_action').removeAttr('disabled');
        $('#css_bulk_submit').removeAttr('disabled');
        $('#css_bulk_submit').button({ 'disabled' : false });
      }
    });

    $('a.steal_css_lock').on('click',function(e) {
      // we're gonna confirm stealing this lock.
      var v = confirm('<?php echo strtr($_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_steal_lock'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
      return v;
    });

    $('#stylesheet_area').on('click','#editcssfilter',function(){
      $('#filtercssdlg').dialog({
        width: 'auto',
        buttons: {
          '<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
': function () {
            $(this).dialog('close');
            $('#filtercssdlg_form').submit();
          },
          '<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
': function () {
            $(this).dialog('close');
          },
        }
      });
    });
});
</script>

<div id="filtercssdlg" style="display: none;" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('css_filter');?>
">
  <?php echo smarty_function_form_start(array('id'=>'filtercssdlg_form'),$_smarty_tpl);?>

    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit_filter_css" value="1"/>
    <div class="pageoverflow">
      <p class="pagetext"><label for="filter_css_design"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_design');?>
:</label></p>
      <p class="pageinput">
        <select id="filter_css_design" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
filter_css_design" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_filter_design');?>
">
          <option value=""><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('any');?>
</option>
	  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['design_names']->value,'selected'=>$_smarty_tpl->tpl_vars['css_filter']->value['design']),$_smarty_tpl);?>

        </select>
      </p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext"><label for="filter_css_sortby"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_sortby');?>
:</label></p>
      <p class="pageinput">
        <select id="filter_css_sortby" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
filter_css_sortby" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_sortby');?>
">
          <option value="name"<?php if ($_smarty_tpl->tpl_vars['css_filter']->value['sortby']=='name') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('name');?>
</option>
          <option value="created"<?php if ($_smarty_tpl->tpl_vars['css_filter']->value['sortby']=='created') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('created');?>
</option>
          <option value="modified"<?php if ($_smarty_tpl->tpl_vars['css_filter']->value['sortby']=='modified') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('modified');?>
</option>
        </select>
      </p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext"><label for="filter_css_sortorder"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_sortorder');?>
:</label></p>
      <p class="pageinput">
        <select id="filter_css_sortorder" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
filter_css_sortorder" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('title_sortorder');?>
">
          <option value="asc"<?php if ($_smarty_tpl->tpl_vars['css_filter']->value['sortorder']=='asc') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('asc');?>
</option>
          <option value="desc"<?php if ($_smarty_tpl->tpl_vars['css_filter']->value['sortorder']=='desc') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('desc');?>
</option>
        </select>
      </p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext">
        <label for="filter_limit_css"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_limit');?>
:</label>
      </p>
      <p class="pageinput">
        <select id="filter_limit_css" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
filter_limit_css">
          <option value="10"<?php if ((isset($_smarty_tpl->tpl_vars['filter_limit_css']->value)&&($_smarty_tpl->tpl_vars['filter_limit_css']->value==10))) {?> selected="selected"<?php }?>>10</option>
	  <option value="25"<?php if ((isset($_smarty_tpl->tpl_vars['filter_limit_css']->value)&&($_smarty_tpl->tpl_vars['filter_limit_css']->value==25))) {?> selected="selected"<?php }?>>25</option>
	  <option value="50"<?php if ((isset($_smarty_tpl->tpl_vars['filter_limit_css']->value)&&($_smarty_tpl->tpl_vars['filter_limit_css']->value==50))) {?> selected="selected"<?php }?>>50</option>
	  <option value="100"<?php if ((isset($_smarty_tpl->tpl_vars['filter_limit_css']->value)&&($_smarty_tpl->tpl_vars['filter_limit_css']->value==100))) {?> selected="selected"<?php }?>>100</option>
        </select>
      </p>
    </div>
  <?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

</div>

<div id="stylesheet_area"></div>
<?php }} ?>
