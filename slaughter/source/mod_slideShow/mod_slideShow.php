
<!-- START: Main Banner -->
<div id="main_banner_bgcolor" style="background-color: #FF9106;"></div>
<div id="main_banner_box">
  <div id="main_banner">
    <script type="text/javascript" src="<?php echo JURI::base(); ?>/modules/mod_slideShow/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo JURI::base(); ?>/modules/mod_slideShow/js/jquery.innerfade.js"></script>	
    <script type="text/javascript">
jQuery(function($) {
	$('ul#mainbanner_sliding').innerfade({
	animationtype:'fade',
	speed: 1000,
	timeout: 5000,
	type: 'sequence',
	containerheight: '350px'
	});
});
</script>
    <style type="text/css">
ul#mainbanner_sliding{
margin:0px;
padding:0px;
list-style:none;
width:550px;
height:350px;
overflow:hidden;
}
ul#mainbanner_sliding li{
margin:0px;
padding:0px;
list-style:none;
width:100%;
}
</style>


<ul id="mainbanner_sliding">
      <li><img src="<?php echo JURI::base(); ?>modules/mod_slideShow/img/img_01.png" alt="img" width="550" height="350" /></li>
      <li><img src="<?php echo JURI::base(); ?>modules/mod_slideShow/img/img_02.png" alt="img" width="550" height="350" /></li>
	  <li><img src="<?php echo JURI::base(); ?>modules/mod_slideShow/img/img_03.png" alt="img" width="550" height="350" /></li>
	  <li><img src="<?php echo JURI::base(); ?>modules/mod_slideShow/img/img_04.png" alt="img" width="550" height="350" /></li>
      <li><img src="<?php echo JURI::base(); ?>modules/mod_slideShow/img/img_05.png" alt="img" width="550" height="350" /></li>
    </ul>

  </div>
</div>
<!-- END: Main Banner -->

