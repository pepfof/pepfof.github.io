<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:19
         compiled from "content:content_en" */ ?>
<?php /*%%SmartyHeaderCode:1817058a760df267996-56713191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e936251e4799749e89fa9828a0ee7332eb5816' => 
    array (
      0 => 'content:content_en',
      1 => 1487367300,
      2 => 'content',
    ),
  ),
  'nocache_hash' => '1817058a760df267996-56713191',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760df30e115_21902849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760df30e115_21902849')) {function content_58a760df30e115_21902849($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cms_version')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_version.php';
if (!is_callable('smarty_function_cms_versionname')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_versionname.php';
?><p>The content is the information for the page. We have already mentioned that for each page on your site you  choose what template to use. When you add content to a page, it is automatically  placed in the placeholders of the template selected for that page.</p><p>A template can define one or several content areas, or content blocks. To add more content blocks to your template, use <code>{content block='block name'}</code>. These blocks will then appear as text areas when you edit or add a page that uses that template.</p><p>You can make a content block use only one line, instead of a full text area, by using the parameter oneline=true. That is, the full tag being: <code>{content block='block name' oneline=true}</code>. Read about more parameters in the help for the Content tag in the CMSMS Admin Panel, under Extensions &raquo; Tags.</p><h3>Content Types</h3><p>There are currently 6 main content types in version <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 "<?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
". These content types determine the type of content for each menu item.</p><ul><li>Content</li><li>Error Page</li><li>External Page Link</li><li>Internal Page Link</li><li>Section Header</li><li>Separator</li></ul><p>The <strong>Content</strong> type is simply a regular page. Normally this is the only one you will use. That is what this page you are reading is. Here you can put any content that you would put on a regular page. The layout of these types of pages are controlled by the templates. For each <strong>content</strong> page you create you must add the title, menu text, choose if it is going to have a parent and choose a template for it.  If you login as admin and change the template of this page, you will see exactly how it works.</p><p>The <strong>Error Page</strong> type is just what it sounds like, a page you set for "404 page not found" errors, where you can add the content that shows when a 404 error occurs, a target type and title, you can also choose the template it uses, it has no parent as it is not part of the menu.</p><p>The <strong>External Page Link</strong> type is just what it sounds like, a link to another external page and you add the title, menu text, choose if it is going to have a parent and a destination page along with the target setting and other options that a content type page has. This <strong>external page link</strong> type also shows up in the menu following the same hierarchy rules as the <strong>content</strong> type.</p><p>The <strong>Internal Page Link</strong> type is also just what it sounds like, a link to another internal page. This <strong>internal page link</strong> type also shows up in the menu following the same hierarchy rules as the <strong>content</strong> type and you add the title, menu text, choose if it is going to have a parent and a destination page along with the target setting and other options that a content type page has.</p><p>The <strong>Section Header</strong> type is used to break up menus into groupings (sections). This is unrelated to the hierarchy, as the section headers have no associated pages with them but can be used to group a set of links of similar content under them. They are just a little bit of text to say what the next few links are in reference to.</p><p>The <strong>Separator</strong> type is just what it sounds like, a separator that appears on the menus. This type follows the hierarchy set in content management pages.</p><?php }} ?>
