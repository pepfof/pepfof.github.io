<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:08
         compiled from "cms_stylesheet:Module News" */ ?>
<?php /*%%SmartyHeaderCode:1520958a760d43f5247-45665778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce15bd69a378eeca18960a47cc2db5ea8535438' => 
    array (
      0 => 'cms_stylesheet:Module News',
      1 => '1487363700',
      2 => 'cms_stylesheet',
    ),
  ),
  'nocache_hash' => '1520958a760d43f5247-45665778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760d43fd241_99694881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760d43fd241_99694881')) {function content_58a760d43fd241_99694881($_smarty_tpl) {?><?php if (!is_callable('smarty_function_root_url')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.root_url.php';
?>/* cmsms stylesheet: Module News modified: 02/17/17 20:35:00 */
div#news {
/* margin for the entire div surrounding the news items */
	margin: 2em 0 1em 1em;
/* border set here */
	border: 1px solid #909799;
/* sets it off from surroundings */
	background: #f5f5f5;
}
div#news h2 {
	line-height: 2em;
/* you can set your own image here */
	background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/darknav.png) repeat-x left center;
	color: #f5f5f5;
	border: none
}
.NewsSummary {
/* padding for the news article summary */
	padding: 0.5em 0.5em 1em;
/* margin to the bottom of the news article summary */
	margin: 0 0.5em 1em 0.5em;
	border-bottom: 1px solid #ccc;
}
.NewsSummaryPostdate {
/* smaller than default text size */
	font-size: 90%;
/* bold to set it off from text */
	font-weight: bold;
}
.NewsSummaryLink {
/* bold to set it off from text */
	font-weight: bold;
/* little more room at top */
	padding-top: 0.2em;
}
.NewsSummaryCategory {
/* italic to set it off from text */
	font-style: italic;
	margin: 5px 0;
}
.NewsSummaryAuthor {
/* italic to set it off from text */
	font-style: italic;
	padding-bottom: 0.5em;
}
.NewsSummarySummary, .NewsSummaryContent {
/* larger than default text */
	line-height: 140%;
}
.NewsSummaryMorelink {
	padding-top: 0.5em;
}
#NewsPostDetailDate {
/* smaller text */
	font-size: 90%;
	margin-bottom: 5px;
/* bold to set it off from text */
	font-weight: bold;
}
#NewsPostDetailSummary {
/* larger than default text */
	line-height: 150%;
}
#NewsPostDetailCategory {
/* italic to set it off from text */
	font-style: italic;
	border-top: 1px solid #ccc;
	margin-top: 0.5em;
	padding: 0.2em 0;
}
#NewsPostDetailContent {
	margin-bottom: 15px;
/* larger than default text */
	line-height: 150%;
}
#NewsPostDetailAuthor {
	padding-bottom: 1.5em;
/* italic to set it off from text */
	font-style: italic;
}
/* more divs, left unstyled, just so you know the IDs of them */ 
#NewsPostDetailTitle {
}
#NewsPostDetailHorizRule {
}
#NewsPostDetailPrintLink {
}
#NewsPostDetailReturnLink {
}
div#news ul li {
	padding: 2px 2px 2px 5px;
	margin-left: 20px;
}
<?php }} ?>
