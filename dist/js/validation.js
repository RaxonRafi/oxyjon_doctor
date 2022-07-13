
function validateUser(){
	//alert("hello");
	var fname = $("#firstname").val();
	var lname = $("#lastname").val();
	var email = $("#emailid").val();
	var password = $("#password").val();
	var comfpassword = $("#passwordconf").val();
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	//alert(fname);
	if(fname == ''){		
		$("#firstname_error").show().html("Please Enter Your First Name")
		$("#firstname").addClass("has-error").focus();		
		$("#firstname").parent().addClass("has-error");
		return false;
	}else if(lname == ''){
		successFormInput();
		$("#lastname_error").show().html("Please Enter Your Last Name")
		$("#lastname").addClass("has-error").focus();		
		$("#lastname").parent().addClass("has-error");
		return false;
	}else if(email == ''){
		successFormInput();
		$("#emailid_error").show().html("Please Enter Valid Email ID")
		$("#emailid").addClass("has-error").focus();		
		$("#emailid").parent().addClass("has-error");
		return false;
	}else if(!emailPattern.test(email)){
		successFormInput();
		$("#emailid_error").show().html("Please Enter Valid Email ID")
		$("#emailid").addClass("has-error").focus();		
		$("#emailid").parent().addClass("has-error");
		return false;
	}else if(password == ''){
		successFormInput();
		$("#password_error").show().html("Please Enter Your Password")
		$("#password").addClass("has-error").focus();		
		$("#password").parent().addClass("has-error");
		return false;
	}else if(comfpassword == ''){
		successFormInput();
		$("#passwordconf_error").show().html("Please Confirm Your Password")
		$("#passwordconf").addClass("has-error").focus();		
		$("#passwordconf").parent().addClass("has-error");
		return false;
	}else if(comfpassword != password){
		successFormInput();
		$("#passwordconf_error").show().html("Confirm Password didn't match");
		$("#passwordconf").addClass("has-error").focus();		
		$("#passwordconf").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}	
}




function validateUpdateUser(){
	//alert("hello");
	var fname = $("#firstname").val();
	var lname = $("#lastname").val();
	var email = $("#emailid").val();	
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	//alert(fname);
	if(fname == ''){		
		$("#firstname_error").show().html("Please Enter Your First Name")
		$("#firstname").addClass("has-error").focus();		
		$("#firstname").parent().addClass("has-error");
		return false;
	}else if(lname == ''){
		successFormInput();
		$("#lastname_error").show().html("Please Enter Your Last Name")
		$("#lastname").addClass("has-error").focus();		
		$("#lastname").parent().addClass("has-error");
		return false;
	}else if(email == ''){
		successFormInput();
		$("#emailid_error").show().html("Please Enter Valid Email ID")
		$("#emailid").addClass("has-error").focus();		
		$("#emailid").parent().addClass("has-error");
		return false;
	}else if(!emailPattern.test(email)){
		successFormInput();
		$("#emailid_error").show().html("Please Enter Valid Email ID")
		$("#emailid").addClass("has-error").focus();		
		$("#emailid").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}
}


function validateUserPassword(){
	var password = $("#password").val();
	var comfpassword = $("#conf_password").val();

	if(password == ''){
		successFormInput();
		$("#password_error").show().html("Please Enter Your Password")
		$("#password").addClass("has-error").focus();		
		$("#password").parent().addClass("has-error");
		return false;
	}else if(comfpassword == ''){
		successFormInput();
		$("#conf_password_error").show().html("Please Confirm Your Password")
		$("#conf_password").addClass("has-error").focus();		
		$("#conf_password").parent().addClass("has-error");
		return false;
	}else if(comfpassword != password){
		successFormInput();
		$("#passwordconf_error").show().html("Confirm Password didn't match");
		$("#passwordconf").addClass("has-error").focus();		
		$("#passwordconf").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}
}


function validateLeadStatus(){

	var leadstatusname = $("#leadstatusname").val();

	if(leadstatusname == ''){
		successFormInput();
		$("#leadstatusname_error").show().html("Please Enter Status Name")
		$("#leadstatusname").addClass("has-error").focus();		
		$("#leadstatusname").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}
}



function validateRoles(){

	var rolename = $("#rolename").val();

	if(rolename == ''){
		successFormInput();
		$("#rolename_error").show().html("Please Enter Role Name")
		$("#rolename").addClass("has-error").focus();		
		$("#rolename").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}
}



function validateLogin(){
	//alert('ssss');
	var email = $("#email").val();
	var password = $("#password").val();
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	//password_error

	if(email == ''){
		successFormInput();
		$("#email_error").show().html("Email-Id is required")
		$("#email").addClass("has-error").focus();		
		$("#email").parent().addClass("has-error");
		return false;
	}else if(!emailPattern.test(email)){
		successFormInput();
		$("#email_error").show().html("Please Enter Valid Email ID")
		$("#email").addClass("has-error").focus();		
		$("#email").parent().addClass("has-error");
		return false;
	}else if(password == ''){
		successFormInput();
		$("#password_error").show().html("Password is required")
		$("#password").addClass("has-error").focus();		
		$("#password").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}
}



function validateLeadAction(){

	//alert('sss');

	var leadactionname = $("#filterdata").val();
	var lead_status = $("#lead_status").val();

	if(leadactionname == ''){

		if(lead_status == ''){
			successFormInput();
			$("#lead_status_error").show().html("Please Select Lead Status")
			$("#lead_status").addClass("has-error").focus();		
			$("#lead_status").parent().addClass("has-error");
			return false;
			
		}
	}

	// if(lead_status == '' && leadactionname == ''){
	// 	successFormInput();
	// 	$("#lead_status_error").show().html("Please Select Lead Status")
	// 	//$("#lead_status").addClass("has-error").focus();		
	// 	//$("#lead_status").parent().addClass("has-error");
	// 	return false;
		
	// }else if(leadactionname == ''){
	// 	successFormInput();
	// 	$("#leadactionname_error").show().html("Please Enter Lead Action Name")
	// 	$("#leadactionname").addClass("has-error").focus();		
	// 	$("#leadactionname").parent().addClass("has-error");
	// 	return false;

	// }
	
	else{
		return true;
	}
}


function validateAddNewLead(){
	//alert('ddd');

	var mobileno = $("#mobileno").val();
	var lead_type = $("#lead_type").val();
	var lead_status = $("#lead_status").val();

	if(lead_type == ''){
		successFormInput();
		$("#lead_type_error").show().html("Please Select Lead Type.")
		$("#lead_type").addClass("has-error").focus();		
		$("#lead_type").parent().addClass("has-error");
		return false;
		
	}else if(mobileno == ''){
		successFormInput();
		$("#number_error").show().html("Please Enter Mobile No.")
		$("#mobileno").addClass("has-error").focus();		
		$("#mobileno").parent().addClass("has-error");
		return false;
		
	}else if(lead_status == ''){
		successFormInput();
		$("#lead_status_error").show().html("Please Select Lead Status.")
		$("#lead_status").addClass("has-error").focus();		
		$("#lead_status").parent().addClass("has-error");
		return false;
		
	}else{
		return true;
	}
}


function validateMenu(){
	//alert("hello");
	var module_name = $("#module_name").val();
	var menu_name = $("#menu_name").val();
	var menu_url = $("#menu_url").val();
	var is_parent = $("#is_parent").val();
	var show_in_menu = $("#show_in_menu").val();

	//alert(fname);
	if(module_name == ''){		
		$("#module_name_error").show().html("Please Enter Module Name")
		$("#module_name").addClass("has-error").focus();		
		$("#module_name").parent().addClass("has-error");
		return false;
	}else if(menu_name == ''){
		successFormInput();
		$("#menu_name_error").show().html("Please Enter Menu Name")
		$("#menu_name").addClass("has-error").focus();		
		$("#menu_name").parent().addClass("has-error");
		return false;
	}else if(menu_url == ''){
		successFormInput();
		$("#menu_url_error").show().html("Please Enter Menu URL")
		$("#menu_url").addClass("has-error").focus();		
		$("#menu_url").parent().addClass("has-error");
		return false;
	}else if(is_parent == ''){
		successFormInput();
		$("#is_parent_error").show().html("Please Select Is Parent?")
		$("#emailid").addClass("has-error").focus();		
		$("#emailid").parent().addClass("has-error");
		return false;
	}else if(show_in_menu == ''){
		successFormInput();
		$("#show_in_menu_error").show().html("Please Select if you want to show in menu")
		$("#show_in_menu").addClass("has-error").focus();		
		$("#show_in_menu").parent().addClass("has-error");
		return false;
	}else{
		return true;
	}	
}



function validateFoodItem(){
	//alert("hello");
	var foodType = $("#foodType").val();
	var food_item_name = $("#food_item_name").val();
	var quantity = $("#quantity").val();
	var measurement_unit = $("#measurement_unit").val();
	var calorie_gm = $("#calorie_gm").val();
	var protein_gm = $("#protein_gm").val();
	var carbs_gm = $("#carbs_gm").val();
	var fats_gm = $("#fats_gm").val();
	var fiber_gm = $("#fiber_gm").val();

	//alert(measurement_unit);
	//console.log($(".table_body_td input:checkbox:checked").length);

	if(foodType == ''){		
		$("#foodType_error").show().html("Required")
		$("#foodType").addClass("has-error").focus();		
		$("#foodType").parent().addClass("has-error");
		return false;
	}else if(food_item_name == ''){
		successFormInput();
		$("#food_item_name_error").show().html("Required")
		$("#food_item_name").addClass("has-error").focus();		
		$("#food_item_name").parent().addClass("has-error");
		return false;
	}else if(quantity == ''){
		successFormInput();
		$("#quantity_error").show().html("Required")
		$("#quantity_error").addClass("has-error").focus();		
		$("#quantity_error").parent().addClass("has-error");
		return false;
	}else if(measurement_unit == ''){
		successFormInput();
		$("#measurement_unit_error").show().html("Required")
		$("#measurement_unit").addClass("has-error").focus();		
		$("#measurement_unit").parent().addClass("has-error");
		return false;
	}else if(calorie_gm == ''){
		successFormInput();
		$("#calorie_gm_error").show().html("Required")
		$("#calorie_gm").addClass("has-error").focus();		
		$("#calorie_gm").parent().addClass("has-error");
		return false;
	}else if(protein_gm == ''){
		successFormInput();
		$("#protein_gm_error").show().html("Required")
		$("#protein_gm").addClass("has-error").focus();		
		$("#protein_gm").parent().addClass("has-error");
		return false;
	}else if(carbs_gm == ''){
		successFormInput();
		$("#carbs_gm_error").show().html("Required");
		$("#carbs_gm").addClass("has-error").focus();		
		$("#carbs_gm").parent().addClass("has-error");
		return false;
	}else if(fats_gm == ''){
		successFormInput();
		$("#fats_gm_error").show().html("Required");
		$("#fats_gm").addClass("has-error").focus();		
		$("#fats_gm").parent().addClass("has-error");
		return false;
	}else if(fiber_gm == ''){
		successFormInput();
		$("#fiber_gm_error").show().html("Required");
		$("#fiber_gm").addClass("has-error").focus();		
		$("#fiber_gm").parent().addClass("has-error");
		return false;
	}else if($(".table_body_td input:checkbox:checked").length <= 0){
		successFormInput();
		$("#meal_type_all_error").show().html("Required");
		
		return false;
	}else{
		return true;
	}	
}



function successFormInput(){
	//alert("ddd");
	if($(".form-control").hasClass("has-error")){
		$(".has-error").addClass("has-success");
	}
	$(".form-group").removeClass("has-error");
	$(".form-group span").hide();
}


$(".meal_tab_choosen").on('click',function(){
	
	//alert("ssss");
	let lstabdisabled = $('#isMenuTabClickable').val();
	console.log(lstabdisabled);
	if(lstabdisabled == 1){
		$("#error_isMenuTabClickable").show().html("Please update the patient profile, some required information is missing (Height/Weight/Gender/DOB/Age).");
	}

	if(lstabdisabled == 2){
		$("#error_isMenuTabClickable").show().html("Please complete the new diet calorie calculation.");
	}
})


