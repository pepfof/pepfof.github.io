<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:07:15
         compiled from "module_file_tpl:DesignManager;admin_edit_design_templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2195558a76603ecd773-20928972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14f1e50604e0e03b36d9e9d618166c4f1f2692a4' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_edit_design_templates.tpl',
      1 => 1487363666,
      2 => 'module_file_tpl',
    ),
  ),
  'nocache_hash' => '2195558a76603ecd773-20928972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mod' => 0,
    'all_templates' => 0,
    'design' => 0,
    'tmpl' => 0,
    'tpl' => 0,
    'actionid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a7660406fe32_82180283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7660406fe32_82180283')) {function content_58a7660406fe32_82180283($_smarty_tpl) {?><div class="information"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_edittemplate_templates_tab');?>
</div>
<?php if (!isset($_smarty_tpl->tpl_vars['all_templates']->value)) {?>
<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warning_edittemplate_notemplates');?>
</div>
<?php } else { ?>

<?php if (isset($_smarty_tpl->tpl_vars['tmpl'])) {$_smarty_tpl->tpl_vars['tmpl'] = clone $_smarty_tpl->tpl_vars['tmpl'];
$_smarty_tpl->tpl_vars['tmpl']->value = $_smarty_tpl->tpl_vars['design']->value->get_templates(); $_smarty_tpl->tpl_vars['tmpl']->nocache = null; $_smarty_tpl->tpl_vars['tmpl']->scope = 0;
} else $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable($_smarty_tpl->tpl_vars['design']->value->get_templates(), null, 0);?>
<div class="c_full cf">
    <div class="grid_6 draggable-area">
        <fieldset>
            <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('available_templates');?>
</legend>
            <div id="available-templates">
                <ul class="sortable-templates sortable-list available-items available-templates">
                <?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value) {
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
                    <?php if (!$_smarty_tpl->tpl_vars['tmpl']->value||!in_array($_smarty_tpl->tpl_vars['tpl']->value->get_id(),$_smarty_tpl->tpl_vars['tmpl']->value)) {?>
                        <li class="ui-state-default" data-cmsms-item-id="<?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_id();?>
">
                            <?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_name();?>

                            <input class="hidden" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
assoc_tpl[]" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_id();?>
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
            <legend><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('attached_templates');?>
</legend>
            <div id="selected-templates">
                <ul class="sortable-templates sortable-list selected-templates">
                    <?php if (count($_smarty_tpl->tpl_vars['design']->value->get_templates())==0) {?><li class="placeholder no-sort"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('drop_items');?>
</li><?php }?>
                    <?php  $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tpl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->key => $_smarty_tpl->tpl_vars['tpl']->value) {
$_smarty_tpl->tpl_vars['tpl']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['tmpl']->value&&in_array($_smarty_tpl->tpl_vars['tpl']->value->get_id(),$_smarty_tpl->tpl_vars['tmpl']->value)) {?>
                            <li class="ui-state-default cf sortable-item no-sort" data-cmsms-item-id="<?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_id();?>
">
                                <?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_name();?>

                                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('remove');?>
" class="ui-icon ui-icon-trash sortable-remove"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('remove');?>
</a>
                                <input class="hidden" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
assoc_tpl[]" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_id();?>
" checked="checked" />
                            </li>
                        <?php }?>
                    <?php } ?>
                </ul>
            </div>
        </fieldset>
    </div>
</div>
<script>
$(function() {
    $('ul.sortable-templates').sortable({
        connectWith: '#selected-templates ul',
        delay: 150,
        revert: true,
        placeholder: 'ui-state-highlight',
        items: 'li:not(.no-sort)',
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
            
            $('.sortable-templates .placeholder').hide();
            $(elements).removeClass('selected ui-state-hover')
                       .addClass('no-sort')
                       .append($('<a href="#"/>').addClass('ui-icon ui-icon-trash sortable-remove').text('Remove'))
                       .find('input[type="checkbox"]').attr('checked', true);
        }
    
    });
        
    $(document).on('click', '#selected-templates .sortable-remove', function(e) {
        $(this).next('input[type="checkbox"]').attr('checked', false);
        $(this).parent('li').removeClass('no-sort').appendTo('#available-templates ul');
        $(this).remove();
        e.preventDefault();
    });
});
</script>
<?php }?><?php }} ?>
