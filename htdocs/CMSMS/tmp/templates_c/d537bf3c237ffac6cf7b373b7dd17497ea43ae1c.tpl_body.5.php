<?php /* Smarty version Smarty-3.1-DEV, created on 2017-02-17 20:45:06
         compiled from "tpl_body:5" */ ?>
<?php /*%%SmartyHeaderCode:200858a760d21e30b3-72178581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd537bf3c237ffac6cf7b373b7dd17497ea43ae1c' => 
    array (
      0 => 'tpl_body:5',
      1 => '1487363700',
      2 => 'tpl_body',
    ),
  ),
  'nocache_hash' => '200858a760d21e30b3-72178581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_58a760d23060f7_14817702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a760d23060f7_14817702')) {function content_58a760d23060f7_14817702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_anchor')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.anchor.php';
if (!is_callable('smarty_function_sitename')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_cms_selflink')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.cms_selflink.php';
if (!is_callable('smarty_function_title')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.title.php';
if (!is_callable('smarty_function_global_content')) include 'C:\\xampp\\htdocs\\CMSMS\\plugins\\function.global_content.php';
?><body>
    <div id="pagewrapper">


      <ul class="accessibility">
        <li><?php echo smarty_function_anchor(array('anchor'=>'menu_vert','title'=>'Skip to navigation','accesskey'=>'n','text'=>'Skip to navigation'),$_smarty_tpl);?>
</li>
        <li><?php echo smarty_function_anchor(array('anchor'=>'main','title'=>'Skip to content','accesskey'=>'s','text'=>'Skip to content'),$_smarty_tpl);?>
</li>
      </ul>


      <hr class="accessibility" />



      <div id="header">


        <h2 class="headright"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</h2>


        <h1><?php echo smarty_function_cms_selflink(array('dir'=>"start",'text'=>((string)$_smarty_tpl->tpl_vars['sitename']->value)),$_smarty_tpl);?>
</h1> 
       
        <hr class="accessibility" />
      </div>



      <div id="search">
      <?php echo Search::function_plugin(array(),$_smarty_tpl);?>

      </div>



      <div class="crbk">


        <div class="breadcrumbs">
        <?php echo Navigator::nav_breadcrumbs(array('root'=>'Home'),$_smarty_tpl);?>

          <hr class="accessibility" />
        </div>
      </div>



      <div id="content">


        <div id="sidebar">
          <div id="sidebara">


            <div id="menu_vert">
              <h2 class="accessibility">Navigation</h2>
              <?php echo Navigator::function_plugin(array('loadprops'=>0,'template'=>'Simple Navigation','collapse'=>'1'),$_smarty_tpl);?>

            </div>



            <div id="news">
              <h2>News</h2>
              <?php echo News::function_plugin(array('number'=>'3','detailpage'=>'news'),$_smarty_tpl);?>

            </div>


          </div>
        </div>




        <div class="back">        
          <div id="main">
            <h2><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h2>
            <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
            <br />




            <div class="right49">
              <p><?php echo smarty_function_anchor(array('anchor'=>'main','text'=>'^ Top'),$_smarty_tpl);?>
</p>
            </div>

            <div class="left49">
              <p><?php echo smarty_function_cms_selflink(array('dir'=>"previous"),$_smarty_tpl);?>



              <br />
              <?php echo smarty_function_cms_selflink(array('dir'=>"next"),$_smarty_tpl);?>

              </p>
            </div>


            <hr class="accessibility" />
          </div>
        </div>


        <div class="clear"></div>


      </div>



      <div class="footback">
        <div id="footer">

          <div id="fooleft">
          <?php echo Navigator::function_plugin(array('loadprops'=>0),$_smarty_tpl);?>

          </div>
          <div id="footrt">
          <?php echo smarty_function_global_content(array('name'=>'footer'),$_smarty_tpl);?>

          </div>
          <div class="clear"></div>
        </div>
      </div>


    </div>

  </body>
</html><?php }} ?>
