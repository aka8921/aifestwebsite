<div class="row">
		<div class="col-sm-12 text-center">
			<h2 class="section_title fontWhite">Registration</h2>
		</div>
	</div>

<div class="row appRow">
	<div class="col-sm-12 col-sm-offset-2 text-center app_wrapper">
		<div class="app_inner">
			<form action="apply.php" method="POST">
				<div id="details">
					<?php
					printtextBox('Name :', 'text', 250, 'name_textbox', '', '');
					printtextBox('Email:', 'text', 250, 'email_textbox', '', '');
					printtextBox('Mobile No.:', 'int', 10, 'mobile_textbox', '', '');
					printtextBox('College Name:', 'text', 250, 'college_textbox', '', '');
					printtextBox('T-Shirt size:', 'text', 250, 'tshirt_textbox', '', '');
					?>
				</div>
				<?php
				printAdd('Add');
				echo '<br />';
				printtextBox('Project Name:', 'text', 250, 'project_textbox', '', '');
				printtextArea('Breif Description about project:', 'desc_textbox');
				printSubmit('Register')
				?>
			</form>
		</div>
	</div>
</div>
<script>
	var i =2;
	function del(x){
			var a = document.getElementById("x");
			x.remove();
			i=i-1;
	}

	function increment(){
		
		if(i>=7){
			//var alrt='<p>Maximum 6 members only permitted</p>';

			//document.getElementById('alert_msg_6').innerHTML += alrt;
			alert("ONLY 6 ENTRIES POSSIBLE.");
			return;
		}
		var detail = '<div id="add_on_'+i+'"><br/><div class="app_detail" >'+
						'<label class="control-label">Name of group member '+i+':</label>'+
						'<input type="text" class="form-control" maxlength="250" name="name'+i+'_textbox" placeholder="" value=""/>'+

						'<label class="control-label">Email of group member '+i+':</label>'+
						'<input type="text" class="form-control" maxlength="250" name="email'+i+'_textbox" placeholder="" value=""/>'+

						'<label class="control-label">Mobile No. of group member '+i+':</label>'+
						'<input type="int" class="form-control" maxlength="10" name="mobile'+i+'_textbox" placeholder="" value=""/>'+

						'<label class="control-label">College of group member '+i+':</label>'+
						'<input type="text" class="form-control" maxlength="250" name="college'+i+'_textbox" placeholder="" value=""/>'+

						'<label class="control-label">T-Shirt Size of group member '+i+':</label>'+
						'<input type="text" class="form-control" maxlength="250" name="tshirt'+i+'_textbox" placeholder="" value=""/>'+

						'<div class="alert_msg" id="alert_msg_'+i+'"></div>'+

						'<div style="width:100%;text-align:center;">'+
							'<br/>'+
							'<input type="button" class="apply_btn btn_danger" id="remove" value="Remove" onClick="del(add_on_'+i+')">'+
							'</input>'+
						'</div>'+
					'</div><br/></div>';

		document.getElementById('details').innerHTML += detail;

		i++;

	}

	
</script>