<div class="row">
		<div class="col-sm-12 text-center">
			<h2 class="section_title fontWhite">Contact Us</h2>
		</div>
	</div>

<div class="row appRow">
	<div class="col-sm-12 col-sm-offset-2 text-center app_wrapper">
		<div class="app_inner">
			<form action="contact_actions.php" method="POST">
				<?php
				printtextBox('Name:', 'text', 250, 'name_textbox', '', '');
				printtextBox('Email:', 'text', 250, 'email_textbox', '', '');
				printtextBox('Mobile No.:', 'int', 10, 'mobile_textbox', '', '');
				printTextArea('Message:','message_textbox');
				printSubmit('Send')
				?>
			</form>
		</div>
	</div>
</div>