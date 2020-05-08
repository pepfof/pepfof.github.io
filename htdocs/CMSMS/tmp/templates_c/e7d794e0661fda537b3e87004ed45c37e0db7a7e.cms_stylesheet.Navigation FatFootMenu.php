<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:08
         compiled from "cms_stylesheet:Navigation FatFootMenu" */ ?>
<?php /*%%SmartyHeaderCode:782358a760d45a3bb3-32159245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d794e0661fda537b3e87004ed45c37e0db7a7e' => 
    array (
      0 => 'cms_stylesheet:Navigation FatFootMenu',
      1 => '1487363700',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '782358a760d45a3bb3-32159245',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760d45af330_23259661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760d45af330_23259661')) {function content_58a760d45af330_23259661($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.root_url.php';
?>/* cmsms stylesheet: Navigation FatFootMenu modified: 02/17/17 20:35:00 */
#footer ul {
/* some margin is set in the footer padding */
   margin: 0px;
/* calling a specific side, left in this case */
   margin-left: 5px;
   padding: 0px;
/* remove any default bullets, image used in li call */
   list-style: none;
}
#footer ul li {
/* remove any default bullets, image used for consistency */
   list-style: none;
/* float left to set first level li items across the top */
   float:left;
/* a little margin at top */
   margin: 5px 0px 0px;
/* padding all the way around */
   padding: 5px;
/* you can set your own image here, used for consistency */
   background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/dot.gif) no-repeat left 10px;
}
#footer ul li a {
/* this will make the "a" link a solid shape */
   display:block;
   margin: 2px 0px 4px;
   padding: 0px 5px 5px 5px;
}
/* set h3 to look like "a" */
#footer li h3 {
   font-weight:normal;
   font-size:100%;
   margin: 2px 0px 2px 0px;
   padding: 0px 5px 5px 5px;
}
/* set h3 to look like "a", less margin at this level */
#footer li li h3 {
   font-weight:normal;
   font-size:100%;
   margin: 0px;
   padding: 0px 5px 5px 5px;
}
#footer ul li li {
/* remove any default bullets, image used for consistency */
   list-style: none;
/* remove float so they line up under top li */
   float:none;
/* less margin/padding */
   margin: 0px;
   padding: 0px 0px 0px 5px;
/* you can set your own image here, used for consistency */
   background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/dot.gif) no-repeat left 3px;
}
/* fix for IE6 */
* html #footer ul li a {
   margin: 2px 0px 0px;
   padding: 0px 5px 5px 5px;
}
* html #footer ul li li a {
   margin: 0px 0px 0px;
   padding: 0px 5px 0px 5px;
}
/* End fix for IE6 */
#footer ul ul {
/* remove float so they line up under top li */
   float:none;
/* a little margin to offset it */
   margin: 0px 0px 0px 8px;
   padding: 0;
}
#footer ul ul ul {
/* remove float so they line up under li above it */
   float:none;
/* a little margin to offset it */
   margin: 0px 0px 0px 8px;
   padding: 0;
}
<?php }} ?>
