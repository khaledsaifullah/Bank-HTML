<?php
// no direct access
defined('_JEXEC') or die;

?>
<h3 class="page_title"><span>Gallery</span></h3>
    <div class="inner_page_content">
        <div id="wa-project-main-content" class="wp_project_content">
            <h2 class="entrytitle"><?php  echo $this->category[0]->title;?></h2>

            <?php
                $zoom_icon = JURI::base().'templates/wa_theme/'.'images/'.'zoom_icon.png';
                if( sizeof($this->items) > 0){
                    $counter = 0;
                    $i=0;

                    foreach ( $this->items as $item ) {
                            $imag_root_path = JPATH_ROOT.'/administrator/components/com_webalive/assets/images/project/'.$item->image;
                            $resize_img_info = FileHelper::resizeImage($imag_root_path, 300, 250, 'max');
                            $location = JURI::root()."/images/location.png";
                            $pen = JURI::root()."/images/pen.png";

                            if($item->image)
                                $img_src = JURI::root().'/administrator/components/com_webalive/assets/images/project/'.$item->image;
                            else
                                $img_src = JURI::root().'/administrator/components/com_webalive/assets/images/project/no-image.gif';

                                $href = 'index.php?option=com_webalive&view=project&Itemid='.JRequest::getVar('Itemid').'&cid='.$item->catid.'&id='.$item->id;

                        ?>
                        <div class="wa-gallery-item  wa-gallery-item-<?php echo $counter;?>">
                            <div class="gallery-view">
                                <div class="wa-gallery-item-image img_vh_center_alain">

                                    <a href="<?php echo $href; ?>" class="lightbox" rel="gallery_group">
                                        <span class="dark-background" style="display: none;">
                                            <img src="<?php echo $zoom_icon; ?>" alt="zoom" />
                                            <div class="gallery_project_info">
                                                <div class="gallery_project_title"><?php echo $item->title; ?></div>
                                                <div class="gallery_project_address"><?php echo $item->location; ?></div>
                                            </div>
                                        </span>
                                        <img src="<?php echo $img_src; ?>" alt="<?php echo $item->alias; ?>" width="<?php echo $resize_img_info['width']; ?>" height="<?php echo $resize_img_info['height']; ?>" />
                                    </a>
                                </div>
                            </div>
                        </div>

            <?php
                    if($counter==2)
                        $counter=0;
                    else
                        $counter++;
                    }
                }else{
                    echo "No Item Available!";

                }
            ?>
    </div>
</div>
<?php
if(count($this->pagination->getPagesCounter())>0){    ?>
    <div class="pagination projects_page_scroller"  id="paginationpagerpt">
        <div class="page_counter projects_page_scroller_middle_container" id="paginationpage">
            Showing (<?php echo $this->pagination->getPagesCounter(); ?>)
            <div class="pagesrpt">Pages</div>
            <?php echo $this->pagination->getPagesLinks(); ?>
        </div>
    </div>
<?php
}
?>
<!-- END Javascript Includes -->