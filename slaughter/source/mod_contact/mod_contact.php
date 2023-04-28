<?php 	
	$mailsend_error = 0;
	extract($_POST);
	
	if(isset($btnSubmit))
	{
	$to = 'riversidegutters@comcast.net';
	$subject = 'Visitor Inquiry';
	$headers = "From:River Side Gutters";
	
	// This two steps to help avoid spam
	$headers .= "Message-ID: <".$now." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
	$headers .= "X-Mailer: PHP v".phpversion();
	
	$message = "The following message has been received \r\n";
	$message .= "Name :$name_basecamp \r\n";
	$message .= "Email :$email__basecamp \r\n";
	$message .= "Phone  :$phone__basecamp \r\n";
	$message .= "Requested Time For the Contact  :$time__basecamp \r\n";	
	$message .= "Message  :$message__basecamp \r\n";

	$ok = mail($to, $subject, $message, $headers);
	if ($ok)
	{
		$mailsend_error = 1;
	}
	else
	{
		$mailsend_error = 2;
	}
	}
?>
<script language="javascript" type="text/javascript">
	
	function chkvalid(){
			
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			
 			
		if (document.halen.phone__basecamp.value == ""){				
				alert ("Please enter phone number");
				document.halen.phone__basecamp.focus();
				return false;				
        }
		
		if (document.halen.email__basecamp.value == ""){
                alert ("Please enter email address");
                document.halen.email__basecamp.focus();
                return false;
        }		

		if (document.halen.email__basecamp.value != ""){
  		   		var address = document.halen.email__basecamp.value;
   				if(reg.test(address) == false) {
      			alert('Invalid Email Address');
				document.halen.email__basecamp.focus();
      			return false;
   		}}	
		return true;
		
		
	}
</script>
<h3  class="contactTitle">Contact Information</h3>
<form class="wpcf7-form" name="halen" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<div  class="formRpt">

	<div class="formRptBx">
		<?php if($mailsend_error == 1){ echo "Thank you for your interest"; } ?>
	</div>
	<div class="formRptBx">
		<div class="leftForm">Name &nbsp;:</div>
		<span class="rightForm">
		<input type="text" size="40" class="wpcf7-validates-as-required" name="name_basecamp"></span> 
	</div>
	
	<div class="formRptBx">
		<div class="leftForm">Phone* &nbsp;:</div>
		<span class="rightForm"><input type="text" size="40"  name="phone__basecamp"></span> 
	</div>
	
	<div class="formRptBx">
		<div class="leftForm">Email* &nbsp;:</div>
		<span class="rightForm"><input type="text" size="40" class="wpcf7-validates-as-email wpcf7-validates-as-required"  name="email__basecamp" value=""></span> 
	</div>
	
	
	
	
	<div class="formRptBx">
		<div class="leftForm">Message &nbsp;:</div>
		<span class="rightForm"><textarea rows="6" cols="30" name="message__basecamp"></textarea></span> 
	</div>
	
	<div class="formRptBx">
		<div class="leftForm">&nbsp;</div>
		<span class="rightForm"><input type="submit" name="btnSubmit" value="Send" class="sendBtn" onclick="return chkvalid()"></span> 
	</div>
	<div class="formRptBx">
		<div class="leftForm">&nbsp;</div>
		<span class="rightForm">*We do not sell your information</span>
	</div>	
		
   <div class="clear"></div>
</div>
</form>