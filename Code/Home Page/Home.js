
// function getSelectedValue(selectList){
// 	return selectList[ selectList.selectedIndex ].value;
// }
			
// function getSelectedText(selectList){
// 	return selectList[ selectList.selectedIndex ].text;
// }
			
// function validateForm(term){
// 	var ename = term.ename.value;
// 	var email = term.email.value;
// 	var coptions = term.cOptions.value;
// 	var doptions = term.dOptions.value
				
// 	if (ename=="" && email=="" && cOptions=="" && dOptions=="" && getSelectedValue(term.subject)=="none"){
// 		alert("Please fill the form");
// 		return false;
// 	}
					
// 	else if (ename== ""){
// 		alert("Please Enter your name");
// 		return false;}
					
// 	else if (email== "") {
// 		alert("Please Enter your E-Mail address");
// 		return false;}
					
// 	else if (cOptions==""){
// 		alert("Please Enter your Courses");
//     }
// 	else if (dOptions==""){
// 		alert("Please Enter your Duration");
//     }
	
// 	else if (!(email.includes("@"))){
// 		alert("'@' is required for your email");
// 		return false;}

// 	else if (!(email.includes(".com"))){
// 		alert("'.com' is required for your email");
// 		return false;}

// 	else if (getSelectedValue(term.cOptions)=="None"){
// 		alert("Please select a Options");
// 		return false;}

// 	else if (getSelectedValue(term.dOptions)=="None"){
// 		alert("Please select a  Options");
// 		return false;}

// 	else{
// 		frm.style.display = "None";
// 		return true;}
// }

// function showDiv(){
// 	document.term1.style.display = "Block";
// 	var summary = document.getElementById(" Details");
// 	summary.style.display = "None";
// 	return true;
// }

// function resetForm(){
// 	setTimeout(function(){term1.reset();} , 50);
// }

// function validate(term) {
// 	var summary = document.getElementById(" ");
// 	if(validateForm(term)){
// 	var ename = term.ename.value;
// 	var email = term.email.value;
// 	var coptions = term.cOptions.value;
// 	var doptions = term.dOptions.value
// 	document.getElementById("Enter Name").innerHTML =newFunction("ename").innerHTML;
// 	document.getElementById("E-mail Address").innerHTML =newFunction("email").innerHTML;
// 	document.getElementById(" cOptions").innerHTML =newFunction("cOptions").innerHTML;
// 	document.getElementById(" dOptions").innerHTML =newFunction("dOptions").innerHTML;
// 	summary.style.display = "Finished";
// 	}

// 	function newFunction() {
// 		return "";
// 	}
// }

// function getRadioValue(radioArray){
// 	var i;
// 	for ( i = 0 ; i < radioArray.length;i++){
// 		if(radioArray[i].checked){
// 			return radioArray[i].value;
// 		}
// 	}
// 	return "";
// }
// function details(){
// 	alert();

// 	switch(){
// 		case "":
// 			document.getElementById("").innerHTML = document.getElementById("SE").innerHTML;
// 			break;

// 		case "":
// 			document.getElementById("").innerHTML = document.getElementById("CS").innerHTML;
// 			break;
			
// 		case "":
// 			document.getElementById("").innerHTML = document.getElementById("AI").innerHTML;
// 			break;

// 		default:
// 			document.getElementById("").innerHTML = "";
// 			break;
// 	}
// }

// function resetOrder(){
// 	document.getElementById("doptions").innerHTML="";
// 	document.getElementById("courseOptions").innerHTML="";
// }
