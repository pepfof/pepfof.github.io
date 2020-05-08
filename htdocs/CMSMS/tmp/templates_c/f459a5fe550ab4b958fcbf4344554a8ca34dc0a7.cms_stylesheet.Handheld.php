<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:08
         compiled from "cms_stylesheet:Handheld" */ ?>
<?php /*%%SmartyHeaderCode:1769258a760d46d00c8-90561176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f459a5fe550ab4b958fcbf4344554a8ca34dc0a7' => 
    array (
      0 => 'cms_stylesheet:Handheld',
      1 => '1487363700',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '1769258a760d46d00c8-90561176',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760d46d6569_69125375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760d46d6569_69125375')) {function content_58a760d46d6569_69125375($_smarty_tpl) {?>/* cmsms stylesheet: Handheld modified: 02/17/17 20:35:00 */
/*********************************************
Sample stylesheet for mobile and small screen handheld devices

Just a simple layout suitable for smaller screens with less 
styling cabapilities and minimal css

Note: If you dont want to support mobile devices you can
safely remove this stylesheet.
*********************************************/
/* remove all padding and margins and set width to 100%. This should be default for handheld devices but its good to set these explicitly */
body {
margin:0;
padding:0;
width:100%;
}

/* hide accessibility noprint and definition */
.accessibility,
.noprint,
dfn {
display:none;
}

/* dont want to download image for header so just set bg color */
div#header,
div#footer {
background-color: #385C72;  
color: #fff;
text-align:center;
}

/* text colors for header and footer */
div#header a,
div#footer a {
color: #fff;
}

/* this doesnt look as nice, but takes less space */
div#menu_vert ul li,
div#menu_horiz ul li {
display:inline;
}

/* small border at the bottom to have some indicator */
div#menu_vert ul,
div#menu_horiz ul {
border-bottom:1px solid #fff;
}

/* save some space */
div.breadcrumbs {
display:none;
}
<?php }} ?>
