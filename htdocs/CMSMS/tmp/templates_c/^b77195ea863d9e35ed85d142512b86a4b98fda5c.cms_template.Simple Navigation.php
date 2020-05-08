<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:06
         compiled from "cms_template:Simple Navigation" */ ?>
<?php /*%%SmartyHeaderCode:1589458a760d28945f9-63403962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77195ea863d9e35ed85d142512b86a4b98fda5c' => 
    array (
      0 => 'cms_template:Simple Navigation',
      1 => '1487363710',
      2 => 'cms_template',
    ),
  ),
  'nocache_hash' => '1589458a760d28945f9-63403962',
  'function' => 
  array (
    'Nav_menu' => 
    array (
      'parameter' => 
      array (
        'depth' => 1,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'data' => 0,
    'depth' => 0,
    'liclass' => 0,
    'node' => 0,
    'aclass' => 0,
    'nodes' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760d2a08724_53404077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760d2a08724_53404077')) {function content_58a760d2a08724_53404077($_smarty_tpl) {?>



<?php if (!function_exists('smarty_template_function_Nav_menu')) {
    function smarty_template_function_Nav_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['Nav_menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><ul><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['node']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['node']->iteration=0;
 $_smarty_tpl->tpl_vars['node']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
 $_smarty_tpl->tpl_vars['node']->iteration++;
 $_smarty_tpl->tpl_vars['node']->index++;
 $_smarty_tpl->tpl_vars['node']->first = $_smarty_tpl->tpl_vars['node']->index === 0;
 $_smarty_tpl->tpl_vars['node']->last = $_smarty_tpl->tpl_vars['node']->iteration === $_smarty_tpl->tpl_vars['node']->total;
?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ('menudepth').($_smarty_tpl->tpl_vars['depth']->value); $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable(('menudepth').($_smarty_tpl->tpl_vars['depth']->value), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = ''; $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['node']->first&&$_smarty_tpl->tpl_vars['node']->total>1) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ($_smarty_tpl->tpl_vars['liclass']->value).(' first_child'); $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['liclass']->value).(' first_child'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['node']->last&&$_smarty_tpl->tpl_vars['node']->total>1) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ($_smarty_tpl->tpl_vars['liclass']->value).(' last_child'); $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['liclass']->value).(' last_child'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value->current) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive'); $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive'), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = ($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive'); $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value->parent) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive menuparent'); $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['liclass']->value).(' menuactive menuparent'), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = ($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive menuparent'); $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['aclass']->value).(' menuactive menuparent'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value->children_exist) {?><?php if (isset($_smarty_tpl->tpl_vars['liclass'])) {$_smarty_tpl->tpl_vars['liclass'] = clone $_smarty_tpl->tpl_vars['liclass'];
$_smarty_tpl->tpl_vars['liclass']->value = ($_smarty_tpl->tpl_vars['liclass']->value).(' parent'); $_smarty_tpl->tpl_vars['liclass']->nocache = null; $_smarty_tpl->tpl_vars['liclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['liclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['liclass']->value).(' parent'), null, 0);?><?php if (isset($_smarty_tpl->tpl_vars['aclass'])) {$_smarty_tpl->tpl_vars['aclass'] = clone $_smarty_tpl->tpl_vars['aclass'];
$_smarty_tpl->tpl_vars['aclass']->value = ($_smarty_tpl->tpl_vars['aclass']->value).(' parent'); $_smarty_tpl->tpl_vars['aclass']->nocache = null; $_smarty_tpl->tpl_vars['aclass']->scope = 0;
} else $_smarty_tpl->tpl_vars['aclass'] = new Smarty_variable(($_smarty_tpl->tpl_vars['aclass']->value).(' parent'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['node']->value->type=='sectionheader') {?><li class='sectionheader <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?><?php smarty_template_function_Nav_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1));?>
<?php }?></li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type=='separator') {?><li class='separator <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><hr class='separator'/></li><?php } else { ?><li class="<?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
"><a class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"<?php if ($_smarty_tpl->tpl_vars['node']->value->target!='') {?> target="<?php echo $_smarty_tpl->tpl_vars['node']->value->target;?>
"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if (isset($_smarty_tpl->tpl_vars['node']->value->children)) {?><?php smarty_template_function_Nav_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1));?>
<?php }?></li><?php }?><?php } ?></ul><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
<?php smarty_template_function_Nav_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0));?>

<?php }?><?php }} ?>
