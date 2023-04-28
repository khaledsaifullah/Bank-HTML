<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

  <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/slaughter/js/load_javascript.js"></script>
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/slaughter/css/global.css" type="text/css" />
</head>

<body>
	<div id="container">
        <!--header start here-->
        <div id="header">
        	<div id="header_body">
            	<a href="<?php echo $this->baseurl ?>" class="logo"><img src="<?php echo $this->baseurl ?>/templates/slaughter/images/logo.png" width="247" height="126" alt="Logo"  /></a>
                <a href="#" class="topNav">Click Here to View Cart</a>
				
                <div id="search">
					<jdoc:include type="modules" name="user4" />
			    </div>
            </div>
        </div>
        <!--header red here-->

        
        <!--navigation start here-->
        <div id="navigation">
        	<div id="nav">
            	<img class="nav_shed" src="<?php echo $this->baseurl ?>/templates/slaughter/images/menu/navShed.png" width="156" height="40" alt="shed"  />
              	<?php if($this->countModules('left')) : ?>
					<jdoc:include type="modules" name="left" />
				<?php endif; ?>

            </div>
        </div>
		<!--navigation end here-->

        
        <!--content start here-->
        <div id="content">
        	<div id="content_body">
 <?php if ($_REQUEST['view']=="frontpage"){?>
            	<!--left_content start here-->
                <div id="left_content">
					<div id="left_sidebar_content">
                    <style type="text/css">.componentheading{ display:none;}</style>
                    		<jdoc:include type="component" />
                    </div>          
                </div>
                <!--left_content end here-->
                
                
                <!--middle_content start here-->
                <div id="middle_content">
                <!--<img src="<?php echo $this->baseurl ?>/templates/slaughter/images/slideshow.png"  width="550" height="350" alt="Slideshow"  />-->
                <jdoc:include type="modules" name="SlideShow" />
                </div>
                <!--middle_content end here-->
                
                
                <!--right_content start here-->
                <div id="right_content">
                       <div id="testimonial">
                       <a id="pls_visit_one" href="#">Please Visit This Sire...</a>
                       <img  src="<?php echo $this->baseurl ?>/templates/slaughter/images/testimonial.png" width="189" height="20" alt="img" /></div>

                      <div id="take_order">
                       <a id="pls_visit_two" href="#">Please Visit This Sire...</a>
                       <img  src="<?php echo $this->baseurl ?>/templates/slaughter/images/take_order.png" width="186" height="31" alt="img" /></div>


                      <div id="take_suply">
                       <a id="pls_visit_three" href="#">Please Visit This Sire...</a>
                       <img  src="<?php echo $this->baseurl ?>/templates/slaughter/images/take_suply.png" width="186" height="26" alt="img" /></div>
                       
                </div>
                <!--right_content end here-->
  <?php }else{?>
            	<!--left_content_inner start here-->
                <div id="left_content_inner">
					<div id="left_sidebar_content_inner">
                    		<jdoc:include type="component" />
                            <jdoc:include type="modules" name="address" />
                    </div>          
                </div>
                <!--left_content_inner end here-->



                 <!--right_content start here-->
                <div id="right_content">
                       <div id="testimonial">
                       <a id="pls_visit_one" href="#">Please Visit This Sire...</a>
                       <img  src="<?php echo $this->baseurl ?>/templates/slaughter/images/testimonial.png" width="189" height="20" alt="img" /></div>

                      <div id="take_order">
                       <a id="pls_visit_two" href="#">Please Visit This Sire...</a>
                       <img  src="<?php echo $this->baseurl ?>/templates/slaughter/images/take_order.png" width="186" height="31" alt="img" /></div>


                      <div id="take_suply">
                       <a id="pls_visit_three" href="#">Please Visit This Sire...</a>
                       <img  src="<?php echo $this->baseurl ?>/templates/slaughter/images/take_suply.png" width="186" height="26" alt="img" /></div>
                       
                </div>
                <!--right_content end here-->
 	<?php }?>
                <div class="clear"></div>
            </div>
        </div>
        <!--content end here-->
        
        
        <!--bottomBox start here-->
        <div id="bottomBox">
        	<div id="bottom_body"></div>
        </div>
        <!--bottomBox end here-->
        
        
        
        <!--services start here-->
        <div id="services">
        	<div id="services_body">
            	<!--beef start here-->
                <div id="beef">
                	<a href="#" id="view_price_one">view price...</a>
                	<p style="padding:70px 10px 0px 100px; text-align:justify;">Beef is the culinary name for meat from 
bovines, especially domestic cattle (cows)
Beef is one of the principal meats</p>
                </div>
                <!--beef end here-->


            	<!--goat start here-->
                <div id="goat" style="margin-left:5px;">
					<a href="#" id="view_price_two" >view price...</a>
                	<p style="padding:70px 10px 0px 100px; text-align:justify;">Beef is the culinary name for meat from 
bovines, especially domestic cattle (cows)
Beef is one of the principal meats</p>                
                </div>
                <!--goat end here-->



            	<!--other start here-->
                <div id="other" style="margin-left:5px;">
                        <a href="#" id="view_price_three">view price...</a>
                        <p style="padding:70px 10px 0px 100px; text-align:justify;">Beef is the culinary name for meat from 
                    bovines, especially domestic cattle (cows)
                    Beef is one of the principal meats</p>                
                </div>
                <!--other end here-->
            </div>
        </div>
        <!--services end here-->

        
        
        <!--footer start here-->
        <div id="footer">
        	<div id="footer_body">
                 <?php if($this->countModules('left')) : ?>
					<jdoc:include type="modules" name="left" />
				<?php endif; ?>
            </div>
        </div>
        <!--footer end here-->        
     </div>
</body>
<script language="javascript1.2" type="text/javascript">
var arVersion = navigator.appVersion.split("MSIE")
var version = parseFloat(arVersion[1])
if (version == 6)
{
for(var i=0; i<document.images.length; i++)
{
var img = document.images[i]
var imgName = img.src.toUpperCase()
if (imgName.substring(imgName.length-3, imgName.length) == "PNG")

{
var imgID = (img.id) ? "id='" + img.id + "' " : ""
var imgClass = (img.className) ? "class='" + img.className + "' " : ""
var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
var imgStyle = "display:inline-block;" + img.style.cssText
if (img.align == "left") imgStyle = "float:left;" + imgStyle
if (img.align == "right") imgStyle = "float:right;" + imgStyle
if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
var strNewHTML = "<span " + imgID + imgClass + imgTitle
+ " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
+ "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
+ "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
img.outerHTML = strNewHTML
i = i-1
}
}
}
</script>
</html>