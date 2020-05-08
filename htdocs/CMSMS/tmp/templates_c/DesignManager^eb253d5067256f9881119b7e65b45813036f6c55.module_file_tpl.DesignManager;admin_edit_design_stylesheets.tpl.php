<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:07:16
         compiled from "module_file_tpl:DesignManager;admin_edit_design_stylesheets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:774458a76604368b99-57869651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb253d5067256f9881119b7e65b45813036f6c55' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_edit_design_stylesheets.tpl',
      1 => 1487363666,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '774458a76604368b99-57869651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'all_stylesheets' => 0,
    'design' => 0,
    'cssl' => 0,
    'css' => 0,
    'actionid' => 0,
    'one' => 0,
    'list_stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a766044bb118_28038945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a766044bb118_28038945')) {function content_58a766044bb118_28038945($_smarty_tpl) {?>
<div class="information"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_edittemplate_stylesheets_tab');?>
</div>
<?php if (!isset($_smarty_tpl->tpl_vars['all_stylesheets']->value)) {?>
  <div class="warning" style="width: 95%;"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warning_editdesign_nostylesheets');?>
</div>
<?php } else { ?>
  <?php if (isset($_smarty_tpl->tpl_vars['cssl'])) {$_smarty_tpl->tpl_vars['cssl'] = clone $_smarty_tpl->tpl_vars['cssl'];
$_smarty_tpl->tpl_vars['cssl']->value = $_smarty_tpl->tpl_vars['design']->value->get_stylesheets(); $_smarty_tpl->tpl_vars['cssl']->nocache = null; $_smarty_tpl->tpl_vars['cssl']->scope = 0;
} else $_smarty_tpl->tpl_vars['cssl'] = new Smarty_variable($_smarty_tpl->tpl_vars['design']->value->get_stylesheets(), null, 0);?>
  <div class="c_full cf">
    <div class="grid_6 draggable-area">
        <fieldset>
            <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('available_stylesheets');?>
</legend>
            <div id="available-stylesheets">
                <ul class="sortable-stylesheets sortable-list available-items available-stylesheets">
                <?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_stylesheets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cssl']->value||!in_array($_smarty_tpl->tpl_vars['css']->value->get_id(),$_smarty_tpl->tpl_vars['cssl']->value)) {?>
                        <li class="ui-state-default" data-cmsms-item-id="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
">
                            <?php echo $_smarty_tpl->tpl_vars['css']->value->get_name();?>

                            <input class="hidden" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
assoc_css[]" value="<?php echo $_smarty_tpl->tpl_vars['css']->value->get_id();?>
" />
                        </li>
                    <?php }?>
                <?php } ?>
                </ul>
            </div>
        </fieldset>
    </div>
    <div class="grid_6">
        <fieldset>
            <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('attached_stylesheets');?>
</legend>
            <div id="selected-stylesheets">
                <ul class="sortable-stylesheets sortable-list selected-stylesheets">
                    <?php if (count($_smarty_tpl->tpl_vars['design']->value->get_stylesheets())==0) {?><li class="placeholder"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('drop_items');?>
</li><?php }?>
                    <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['design']->value->get_stylesheets(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->_loop = true;
?>
                        <li class="ui-state-default cf sortable-item" data-cmsms-item-id="<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['list_stylesheets']->value[$_smarty_tpl->tpl_vars['one']->value];?>

                            <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('remove');?>
" class="ui-icon ui-icon-trash sortable-remove"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('remove');?>
</a>
                            <input class="hidden" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
assoc_css[]" value="<?php echo $_smarty_tpl->tpl_vars['one']->value;?>
" checked="checked" />
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </fieldset>
    </div>
  </div>
  <script>
  $(function() {
    $('ul.sortable-stylesheets').sortable({
        connectWith: '#selected-stylesheets ul',
        delay: 150,
        revert: true,
        placeholder: 'ui-state-highlight',
        items: 'li:not(.placeholder)',
        helper: function (event, ui) {
            if (!ui.hasClass('selected')) {
                ui.addClass('selected')
                  .siblings()
                  .removeClass('selected');
            }

            var elements = ui.parent()
                             .children('.selected')
                             .clone(),
                helper = $('<li/>');

            ui.data('multidrag', elements).siblings('.selected').remove();
            return helper.append(elements);
        },
        stop: function (event, ui) {
            var elements = ui.item.data('multidrag');

            ui.item.after(elements).remove();
        },
        receive: function(event, ui) {
            var elements = ui.item.data('multidrag');

            $('.sortable-stylesheets .placeholder').hide();
            $(elements).removeClass('selected ui-state-hover')
                       .append($('<a href="#"/>').addClass('ui-icon ui-icon-trash sortable-remove').text('Remove'))
                       .find('input[type="checkbox"]').attr('checked', true);
        }

    });

    $(document).on('click', '#selected-stylesheets .sortable-remove', function(e) {
        $(this).next('input[type="checkbox"]').attr('checked', false);
        $(this).parent('li').appendTo('#available-stylesheets ul');
        $(this).remove();
        e.preventDefault();
    });
  });
  </script>
<?php }?><?php }} ?>
