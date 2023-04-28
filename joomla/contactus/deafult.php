<?php
 /**
 * $Id: default.php 21321 2011-05-11 01:05:59Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams ('com_media');
?>
<?php
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>
<h3 class="page_title"><span>Contact Us</span></h3>
<div class="inner_page_content">



<style>
/*start:contact us*/
.contactform {
    width:853px;
}
.contact_row{
    padding:6px 0;
    overflow:hidden;
}
.contact_row_first{
    margin-top: 10px;
}
.contact_form_left_side {
    width:260px;
    min-height:340px;
    float:left;
    overflow:hidden;
    border-right:1px dashed #333;
}
.contact_form_right_side {
    float:left;
    width:590px;
}
.contact_row label {
    display:none;
}
.contact_form_input_left {
    float: left;
    width: 260px;
    margin:0 25px 0 7px;
}
.contact_form_input_right {
    width: 260px;
    float: right;
}
.contact-form-row {
    float:left;
    padding-right:20px;
    width:219px;
    padding-bottom:8px;
}

.contact_form_address table tr td {
    width:175px;
    line-height: 18px;
    padding:3px 0;
}
.contact-form-row.contact-form-row-contact-captcha {
    width: 100%;
}
.captcha_img {
    vertical-align: middle;
}
.contact_row input[type="phone"],.contact_row  input[type="email"],.contact_row  input[type="text"] {
    width:256px;
    padding:0  3px;
    margin:0;
    height:35px;
    border:none;
    background:#fff;
    box-shadow:0 0 5px #000 inset ;



    -moz-border-radius:0;
    -webkit-border-radius:0;
    -khtml-border-radiust:0;
    -o-border-radius:0;
    border-radius:0;

    color:#666666;
    font-size:14px;
    text-align:left;
}
.contact_row textarea{
    width:564px;
    height:100px;
    padding:3px  3px;
    margin:0 25px 0 7px;
    border:none;
    background:#fff;
    box-shadow:0 0 5px #000 inset ;



    -moz-border-radius:0;
    -webkit-border-radius:0;
    -khtml-border-radiust:0;
    -o-border-radius:0;
    border-radius:0;

    color:#666666;
    font-size:14px;
    text-align:left;
}
.send_email{
    padding:6px 0;
    overflow:hidden;
}
.send_email .button{
    padding:0 28px;
    height:32px;
    line-height:32px;
    vertical-align: middle;
    background:#a9bc48;
    border:none;
    -moz-border-radius:0;
    -webkit-border-radius:0;
    -khtml-border-radiust:0;
    -o-border-radius:0;
    border-radius:0;
    color: #000;
    font-size: 14px;
    text-align: center;
    text-transform: uppercase;
    text-shadow:0 0 1px #666;
    float:right;
}
.send_email .button:hover {
     background:#a9bc48;
}
.google_map{
    width: 100%;
    height:400px;
    display:block;
    background:#888;
    margin:20px 0 20px 0;
}
.contact_form_left_side h3{
    color: #cccccc;
    font-size:25px;
    font-weight: normal;
    text-align:left;
    font-family: 'SerifaRoman';
    margin:0;
    padding:16px 0 10px 0;
    width:100%;
    height: 30px;
    display:block;
    border-bottom:1px dashed #333333;
}
.contact_form_right_side h3{
    color: #cccccc;
    font-size:25px;
    font-weight: normal;
    text-align:left;
    font-family: 'SerifaRoman';
    text-indent:20px;
    margin:0;
    padding:16px 0 10px;
    width:100%;
    height: 30px;
    display:block;
    border-bottom:1px dashed #333333;
}
.address_location{
    width:100%;
    padding-top: 15px;
}
#contact-form{
    padding-left: 12px;
}
.address_location ul{
    margin: 0;
    padding:0;
}
.address_location li{
    background: none;
    margin:0;
    padding: 0;

    color: #a9bc48;
    font-size: 14px;
    font-weight: normal;
    text-align:left;
}
.address_location li img{
    vertical-align:top;
    margin:0 10px 0 0;
}



/*start:contact us*/

</style>




<div class="contactform">
    <div class="google_map">

    </div>

	<div class="contact_form_left_side">

        <h3>We are here</h3>
        <div class="address_location">
            <ul>
                <li>
                    <img  src="../images/locations.png"   alt="location" />
                    16 Simcock Street<br />
                    Somerville 3912, VIC AU
                </li>
                <li><img  src="../images/phone.png"   alt="phone" />03 5977 9696</li>
                <li><img  src="../images/print.png"   alt="print" />03 5977 9695</li>
                <li> <img  src="../images/mail.png"   alt="print" />admin@sebs.com.au </li>
            </ul>
        </div>


      </div>


    
    <div class="contact_form_right_side">
    	<h3>Drop a line here</h3>
        <form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
            <div class="contact_row contact_row_first">
                <div class="contact_form_input_left">
                 <?php echo $this->form->getLabel('contact_name'); ?>
                  <?php echo $this->form->getInput('contact_name'); ?>
                </div>

                <div class="contact_form_input_right">
                    <?php echo $this->form->getLabel('contact_email'); ?>
                    <?php echo $this->form->getInput('contact_email'); ?>
                </div>
            </div>

            <div class="contact_row">
                <div class="contact_form_input_left">
                  <?php echo $this->form->getLabel('contact_subject'); ?>
                  <?php echo $this->form->getInput('contact_subject'); ?>
                </div>

                <div class="contact_form_input_right">
                    <?php echo $this->form->getLabel('contact_subject'); ?>
                    <?php echo $this->form->getInput('contact_subject'); ?>
                </div>
            </div>


            <div class="contact_row">
                    <?php echo $this->form->getLabel('contact_message'); ?>
                    <?php echo $this->form->getInput('contact_message'); ?>
            </div>


            <div class="send_email">
            	<!--<input type="image" src="templates/wa_theme/images/send_mail_btn.jpg" />-->
                <button class="button validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
                <input type="hidden" name="option" value="com_contact" />
                <input type="hidden" name="task" value="contact.submit" />
                <input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
                <input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
                <?php echo JHtml::_( 'form.token' ); ?>
            </div>
        </form>
    </div>
    
    <div class="clear"></div>

</div>

<!--<div class="contact-form">

	<h1>Contact Us</h1>

	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
	
		<div class="contact-us-form-left-side">
				<dl>
					<dt><?php echo $this->form->getLabel('contact_name'); ?></dt>
					<dd><?php echo $this->form->getInput('contact_name'); ?></dd>
					<dt><?php echo $this->form->getLabel('contact_email'); ?></dt>
					<dd><?php echo $this->form->getInput('contact_email'); ?></dd>
					<dt><?php echo $this->form->getLabel('contact_subject'); ?></dt>
					<dd><?php echo $this->form->getInput('contact_subject'); ?></dd>
					<dt><?php echo $this->form->getLabel('contact_message'); ?></dt>
					<dd><?php echo $this->form->getInput('contact_message'); ?></dd>
					<?php 	if ($this->params->get('show_email_copy')){ ?>
							<dt><?php echo $this->form->getLabel('contact_email_copy'); ?></dt>
							<dd class="email_copy_input"><?php echo $this->form->getInput('contact_email_copy'); ?></dd>
					<?php 	} ?>
				<?php //Dynamically load any additional fields from plugins. ?>
				     <?php foreach ($this->form->getFieldsets() as $fieldset): ?>
				          <?php if ($fieldset->name != 'contact'):?>
				               <?php $fields = $this->form->getFieldset($fieldset->name);?>
				               <?php foreach($fields as $field): ?>
				                    <?php if ($field->hidden): ?>
				                         <?php echo $field->input;?>
				                    <?php else:?>
				                         <dt>
				                            <?php echo $field->label; ?>
				                            <?php if (!$field->required && $field->type != "Spacer"): ?>
				                               <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL');?></span>
				                            <?php endif; ?>
				                         </dt>
				                         <dd class="copy_email"><?php echo $field->input;?></dd>
				                    <?php endif;?>
				               <?php endforeach;?>
				          <?php endif ?>
				     <?php endforeach;?>
					<dt></dt>
					<dd><button class="button validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
						<input type="hidden" name="option" value="com_contact" />
						<input type="hidden" name="task" value="contact.submit" />
						<input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
						<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
						<?php echo JHtml::_( 'form.token' ); ?>
					</dd>
				</dl>
		</div>
		
		<div class="clear"></div>
		
		
	</form>
</div>-->

    </div>