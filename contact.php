<div id="contactFormSection">
	<div id="holderForContactForm">
			<h1 class="titleSection journey">JOURNEY</h1>
			<h1 class="titleSection getInTouch">Get in touch</h1>
			<h4 id="journeyBeginsText">This is where the journey begins...</h4>
			<form id="contactForm" name="contactForm" action="#contactForm" method="POST" autocomplete="off">
			  <label id="labelErrorNameTextRed" for="name">NAME</label>
	          <input type="text" class="contactUsInput" id="name" name="firstName" placeholder="">
	          <label id="labelErrorEmailTextRed" for="email">EMAIL</label>
	          <input type="email" class="contactUsInput" id="email" name="email" placeholder="">
	          <label id="labelErrorEnquiryTextRed" for="messageContactUs">MESSAGE</label>
	          <textarea id="messageContactUs" placeholder="" rows="5" name="messageBox"></textarea>
	          <input id="submitFormButton" type="submit" name="action" value="SEND">
       		</form>
       		 <p id="requiredFieldsMessage">Please check required fields</p>
			<?php if (isset($errorMsg)) { echo '<p id="errorMessage">', $errorMsg , '</p>'; } ?>
			<?php if (isset($successMsg)) { echo '<p id="successFormMessagePHP">', $successMsg , '</p>'; } ?>
			<div id="socialIconsHolder">
				<a href="https://www.instagram.com/?hl=en" target="_blank" alt="Link to the instagram website - JMC consulting"><img class="socialIcons" src="content/ICONS/instagramIconWhite.png" alt="JMC consultancy - Icon for instagram"></a>
				<a href="https://www.linkedin.com/company/18458141/" target="_blank" alt="Ling to the linkin website - JMC consulting"><img class="socialIcons" src="content/ICONS/linkedin_Logo.png" alt="JMC consultancy - Icon for linkedin"></a>
			</div>
	</div>
</div>