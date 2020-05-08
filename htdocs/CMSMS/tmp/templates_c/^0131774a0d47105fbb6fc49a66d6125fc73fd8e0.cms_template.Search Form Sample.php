<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:06
         compiled from "cms_template:Search Form Sample" */ ?>
<?php /*%%SmartyHeaderCode:2232158a760d2664120-93700890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0131774a0d47105fbb6fc49a66d6125fc73fd8e0' => 
    array (
      0 => 'cms_template:Search Form Sample',
      1 => '1487363712',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '2232158a760d2664120-93700890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'startform' => 0,
    'search_actionid' => 0,
    'searchprompt' => 0,
    'searchtext' => 0,
    'submittext' => 0,
    'hidden' => 0,
    'endform' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760d269bb71_47497065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760d269bb71_47497065')) {function content_58a760d269bb71_47497065($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['startform']->value;?>

<label for="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput"><?php echo $_smarty_tpl->tpl_vars['searchprompt']->value;?>
:&nbsp;</label><input type="text" class="search-input" id="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput" name="<?php echo $_smarty_tpl->tpl_vars['search_actionid']->value;?>
searchinput" size="20" maxlength="50" placeholder="<?php echo $_smarty_tpl->tpl_vars['searchtext']->value;?>
"/>

<input class="search-button" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['submittext']->value;?>
" type="submit" />
<?php if (isset($_smarty_tpl->tpl_vars['hidden']->value)) {?><?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['endform']->value;?>
<?php }} ?>
