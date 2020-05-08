<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 21:02:37
         compiled from "cms_template:Search Results Sample" */ ?>
<?php /*%%SmartyHeaderCode:376058a764ed5c76a6-34437739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa923db92579a21d100484395bcf54e3906194c5' => 
    array (
      0 => 'cms_template:Search Results Sample',
      1 => '1487363712',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '376058a764ed5c76a6-34437739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchresultsfor' => 0,
    'phrase' => 0,
    'itemcount' => 0,
    'results' => 0,
    'entry' => 0,
    'timetaken' => 0,
    'timetook' => 0,
    'noresultsfound' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a764ed6b1c39_78769410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a764ed6b1c39_78769410')) {function content_58a764ed6b1c39_78769410($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['searchresultsfor']->value;?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['phrase']->value;?>
&quot;</h3>
<?php if ($_smarty_tpl->tpl_vars['itemcount']->value>0) {?>
<ul>
  <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['entry']->value->title;?>
 - <a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->url;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value->urltxt;?>
</a> (<?php echo $_smarty_tpl->tpl_vars['entry']->value->weight;?>
%)</li>
  
  <?php } ?>
</ul>

<p><?php echo $_smarty_tpl->tpl_vars['timetaken']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['timetook']->value;?>
</p>
<?php } else { ?>
  <p><strong><?php echo $_smarty_tpl->tpl_vars['noresultsfound']->value;?>
</strong></p>
<?php }?><?php }} ?>
