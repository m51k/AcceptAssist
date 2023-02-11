function getSelectedValue(selectList){
	return selectList[ selectList.selectedIndex ].value;
}
			
function getSelectedText(selectList){
	return selectList[ selectList.selectedIndex ].text;
}
			
function validateForm(term){
	var ename = term.ename.value;
	var email = term.email.value;
	var coptions = term.courseOptions.value;
	var doptions = term.doptions.value
				
	if (ename=="" && email=="" && courseOptions=="" && doptions=="" && getSelectedValue(term.subject)=="none"){
		alert("Please fill the form");
		return false;
	}
					
	else if (ename== ""){
		alert("Please Enter your name");
		return false;}
					
	else if (email== "") {
		alert("Please Enter your E-Mail address");
		return false;}
					
	else if (coursesOptions==""){
		alert("Please Enter your Courses");
    }
	else if (doptions==""){
		alert("Please Enter your Duration");
    }
	
	else if (!(email.includes("@"))){
		alert("'@' is required for your email");
		return false;}

	else if (!(email.includes(".com"))){
		alert("'.com' is required for your email");
		return false;}

	else if (getSelectedValue(term.courseOptions)=="none"){
		alert("Please select a Course Options");
		return false;}

	else if (getSelectedValue(term.duration)=="none"){
		alert("Please select a Duration Options");
		return false;}

	else{
		frm.style.display = "none";
		return true;}
}

function showDiv(){
	document.term1.style.display = "block";
	var summary = document.getElementById("Invoice Details");
	summary.style.display = "none";
	return true;
}

function resetForm(){
	setTimeout(function(){term1.reset();} , 50);
}

function validate(term) {
	var summary = document.getElementById("Invoice Details");
	if(validateForm(term)){
	var ename = term.ename.value;
	var email = term.email.value;
	var coptions = term.courseOptions.value;
	var doptions = term.doptions.value
	document.getElementById("Enter Name").innerHTML =newFunction("ename").innerHTML;
	document.getElementById("E-mail Address").innerHTML =newFunction("email").innerHTML;
	document.getElementById("Courses Options").innerHTML =newFunction("courseOptions").innerHTML;
	document.getElementById("Duration Options").innerHTML =newFunction("doptions").innerHTML;
	summary.style.display = "Finished";
	}

	function newFunction() {
		return "";
	}
}

function getRadioValue(radioArray){
	var i;
	for ( i = 0 ; i < radioArray.length;i++){
		if(radioArray[i].checked){
			return radioArray[i].value;
		}
	}
	return "";
}
function invoicedetails(invoice){
	alert(invoice);

	switch(invoice){
		case "12months":
			document.getElementById("invoice").innerHTML = document.getElementById("SE").innerHTML;
			break;

		case "06months":
			document.getElementById("invoice").innerHTML = document.getElementById("CS").innerHTML;
			break;
			
		case "03months":
			document.getElementById("invoice").innerHTML = document.getElementById("AI").innerHTML;
			break;

		default:
			document.getElementById("invoice").innerHTML = "";
			break;
	}
}

function checkOptions(invoice2){
	alert(invoice2);

	switch(invoice2){
		case "java":
			document.getElementById("invoice2").innerHTML = document.getElementById("SE").innerHTML;
			break;

		case "python":
			document.getElementById("invoice2").innerHTML = document.getElementById("CS").innerHTML;
			break;
			
		case "microsoft":
			document.getElementById("invoice2").innerHTML = document.getElementById("AI").innerHTML;
			break;

		case "html":
			document.getElementById("invoice2").innerHTML = document.getElementById("AI").innerHTML;
			break;

		default:
			document.getElementById("invoice").innerHTML = "";
			break;
	}
}

function resetOrder(){
	document.getElementById("doptions").innerHTML="";
	document.getElementById("courseOptions").innerHTML="";
}
