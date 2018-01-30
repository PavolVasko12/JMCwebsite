<div id="contactFormSection">
	<div id="holderForContactForm">
		<div id="innerHolderContactForm">
			<h1 class="titleSection">CONTACT FORM</h1>
			<form id="contactForm" name="contactForm" action="#contactForm" method="POST" autocomplete="off">
			  <label for="name">NAME</label>
	          <input type="text" class="contactUsInput" id="name" name="firstName" placeholder="">
	          <label for="email">EMAIL</label>
	          <input type="email" class="contactUsInput" id="email" name="email" placeholder="">
	          <label for="messageContactUs">ENQUIRY</label>
	          <textarea id="messageContactUs" placeholder="" rows="5" name="messageBox"></textarea>
	          <input id="submitFormButton" type="submit" name="action" value="SEND">
       		</form>
       		<p id="requiredFieldsMessage">Please check required fields</p>
			<?php if (isset($errorMsg)) { echo '<p id="errorMessage">', $errorMsg , '</p>'; } ?>
			<?php if (isset($successMsg)) { echo '<p id="successFormMessagePHP">', $successMsg , '</p>'; } ?>
		</div>
	</div>
</div>