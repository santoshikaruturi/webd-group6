/*alert("hv");

function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var fname = document.forms["myForm"]["f_name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (fname == "") 
	{
		alert("F_name must be filled out");
		return false;
	}
	else 
		alert("First name filled correctly");
}*/

function check()
{
	var fname = document.forms["signup"]["f_name"].value;
	var lname = document.forms["signup"]["l_name"].value;
	var dob = document.forms["signup"]["dob"].value;
	var gender = document.forms["signup"]["gender"].value;
	var contact = document.forms["signup"]["contact"].value;
	var presentAdr = document.forms["signup"]["addr"].value;
	var permanentAdr = document.forms["signup"]["address"].value;
	var city = document.forms["signup"]["city"].value;
	var pin = document.forms["signup"]["pin"].value;
	var state = document.forms["signup"]["state"].value;
	var country = document.forms["signup"]["country"].value;
	
	var ClassX_Percentage = document.forms["signup"]["ClassX_Percentage"].value;
	var ClassXII_Percentage = document.forms["signup"]["ClassXII_Percentage"].value;
	var ug_cgpa = document.forms["signup"]["ug_cgpa"].value;
	
	var pwd = document.forms["signup"]["password"].value;
	var c_pwd = document.forms["signup"]["c_password"].value;

	if ((fname == ""))
	{
		alert("First name must be filled out");
		return false;
	}
	if (!fname.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
	
	if ((lname == ""))
	{
		alert("Last name must be filled out");
		return false;
	}
	if (!lname.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
	
	if ((dob == ""))
	{
		alert("Date of Birth must be filled out");
		return false;
	}
	
	if ((gender == ""))
	{
		alert("Gender must be checked");
		return false;
	}
	
	if ((contact == ""))
	{
		alert("Contact must be filled out");
		return false;
	}
	if(!contact.match(/^[0-9]+$/))
	{
		alert("Contact must contain only numbers");
		return false;
	}
	
	if ((city == ""))
	{
		alert("City name must be filled out");
		return false;
	}
	if (!city.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
	
	if ((pin == ""))
	{
		alert("Pincode must be filled out");
		return false;
	}
	if ((!pin.match(/^[0-9]+$/)))
	{
		alert("Only digits are allowed");
		return false;
	}
	
	if ((state == ""))
	{
		alert("State name must be filled out");
		return false;
	}
	if (!state.match(/^[a-zA-Z ]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
	
	if ((country == ""))
	{
		alert("Country name must be filled out");
		return false;
	}
	if (!country.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
	
	if(!ClassX_Percentage.match(/^[0-9.]+$/))
	{
		alert("Percentage must contain only numbers");
		return false;
	}
	
	if(!ClassXII_Percentage.match(/^[0-9.]+$/))
	{
		alert("Percentage must contain only numbers");
		return false;
	}
	
	if(!ug_cgpa.match(/^[0-9.]+$/))
	{
		alert("CGPA must contain only numbers");
		return false;
	}
	
	if(pwd!=c_pwd)
	{
		alert("Passwords does not match");
		return false;
	}
}

function getaddress(){
	//alert("hey");
	if(document.forms["signup"]["Autofill"].value == "same"){
		document.forms["signup"]["address"].value=document.forms["signup"]["addr"].value
	}
}

function branch_out(){
	var x = document.forms["signup"]["branch"].value;
	if(x=="0")
	{
		alert("please select a proper branch");
	}
	return false;
}

function getstudentid() {
    var dpt = document.forms["signup"]["branch"].value;
    var s = document.forms["signup"]["regn"].value;
    var res = s.substring(0,2);
    //alert(res);

    if(dpt=="BT")
        document.forms["signup"]["roll_no"].value = res+"/BT/";
    if(dpt=="CHE")
        document.forms["signup"]["roll_no"].value = res+"/CHE/";
    if(dpt=="CIV")
        document.forms["signup"]["roll_no"].value = res+"/CE/";
    if(dpt=="CSE")
        document.forms["signup"]["roll_no"].value = res+"/CSE/";
    if(dpt=="EE")
        document.forms["signup"]["roll_no"].value = res+"/EE/";
    if(dpt=="ECE")
        document.forms["signup"]["roll_no"].value = res+"/ECE/";
    if(dpt=="IT")
        document.forms["signup"]["roll_no"].value = res+"/IT/";
    if(dpt=="ME")
        document.forms["signup"]["roll_no"].value = res+"/ME/";
    if(dpt=="MME")
        document.forms["signup"]["roll_no"].value = res+"/MME/";
}

/*function fname_in()
{
	alert("in");
}*/
function fname_out(){
	var x = document.forms["signup"]["f_name"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["signup"]["f_name"].style.border ="0.5px solid red";
		document.forms["signup"]["f_name"].value ="";
		document.forms["signup"]["f_name"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["f_name"].placeholder = "Name must be filled";
		document.forms["signup"]["f_name"].style.border ="0.5px solid red";
		return false;
    
    }
	var i=0;
	for(i=0;i<x_len;i++)
	{
		if(x[i]>='0'&&x[i]<='9')
		{
			document.forms["signup"]["f_name"].placeholder = "Invalid Name";
		document.forms["signup"]["f_name"].style.border ="0.5px solid red";
		return false;
		}
	}
	if(x_len < 3 || x_len >20)
	{
		alert("Name must be between 3 and 20 characters!")
		return false;
	}
}

function lname_out(){
	var x = document.forms["signup"]["l_name"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["signup"]["l_name"].style.border ="0.5px solid red";
		document.forms["signup"]["l_name"].value ="";
		document.forms["signup"]["l_name"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["l_name"].placeholder = "Name must be filled";
		document.forms["signup"]["l_name"].style.border ="0.5px solid red";
		return false;
    
    }
	var i=0;
	for(i=0;i<x_len;i++)
	{
		if(x[i]>='0'&&x[i]<='9')
		{
			document.forms["signup"]["l_name"].placeholder = "Invalid Name";
		document.forms["signup"]["l_name"].style.border ="0.5px solid red";
		return false;
		}
	}
	if(x_len < 3 || x_len >20)
	{
		alert("Name must be between 3 and 20 characters!")
		return false;
	}
}

function city_out(){
	var x = document.forms["signup"]["city"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["signup"]["city"].style.border ="0.5px solid red";
		document.forms["signup"]["city"].value ="";
		document.forms["signup"]["city"].placeholder = "please enter a valid city";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["city"].placeholder = "City name must be filled";
		document.forms["signup"]["city"].style.border ="0.5px solid red";
		return false;
    
    }
	var i=0;
	for(i=0;i<x_len;i++)
	{
		if(x[i]>='0'&&x[i]<='9')
		{
			document.forms["signup"]["city"].placeholder = "Invalid City";
		document.forms["signup"]["city"].style.border ="0.5px solid red";
		return false;
		}
	}
	if(x_len < 3 || x_len >20)
	{
		alert("City name must be between 3 and 20 characters!")
		return false;
	}
}

/*function contact_out(){
	var x = document.forms["signup"]["contact"].value;
	var x_len=x.length;
	var regex=/[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["signup"]["contact"].style.border ="0.5px solid red";
		document.forms["signup"]["contact"].value ="";
		document.forms["signup"]["contact"].placeholder = "please enter a valid contact";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["contact"].placeholder = "Contact must be filled";
		document.forms["signup"]["contact"].style.border ="0.5px solid red";
		return false;
    
    }
}
/*
function fname_check()
{
	alert("hey");
	/*var fname = document.forms["signup"]["f_name"].value;
	if ((fname == ""))
	{
		alert("First name must be filled out");
		return false;
	}
	if (!fname.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
}*/