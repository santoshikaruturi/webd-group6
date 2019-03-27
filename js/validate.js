
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
	var branch= document.forms["signup"]["branch"].value;
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
		alert("city name must be filled out");
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
		alert("state name must be filled out");
		return false;
	}
	if (!state.match(/^[a-zA-Z ]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
	
	if ((country == ""))
	{
		alert("country name must be filled out");
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


function state_out(){
	var x = document.forms["signup"]["state"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["signup"]["state"].style.border ="0.5px solid red";
		document.forms["signup"]["state"].value ="";
		document.forms["signup"]["state"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["state"].placeholder = "state_name must be filled";
		document.forms["signup"]["state"].style.border ="0.5px solid red";
		return false;
    
    }
    var i=0;
	for(i=0;i<x_len;i++)
	{
		if(x[i]>='0'&&x[i]<='9')
		{
			document.forms["signup"]["state"].placeholder = "Invalid Name";
		document.forms["signup"]["state"].style.border ="0.5px solid red";
		return false;
		}
	}
	
	if(x_len < 5 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function coun_out(){
	var x = document.forms["signup"]["country"].value;
	var x_len=x.length;
	var regex=/^[0-9]+$/;
    if (x.match(regex))
	{
		document.forms["signup"]["country"].style.border ="0.5px solid red";
		document.forms["signup"]["country"].value ="";
		document.forms["signup"]["country"].placeholder = "please enter a valid name";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["country"].placeholder = "country must be filled";
		document.forms["signup"]["country"].style.border ="0.5px solid red";
		return false;
    
    }
    var i=0;
	for(i=0;i<x_len;i++)
	{
		if(x[i]>='0'&&x[i]<='9')
		{
			document.forms["signup"]["country"].placeholder = "Invalid Name";
		document.forms["signup"]["country"].style.border ="0.5px solid red";
		return false;
		}
	}
	
	if(x_len < 5 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
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
		document.forms["signup"]["city"].placeholder = "please enter a valid city name";
		return false;
	}
	if (x == "") {
        document.forms["signup"]["city"].placeholder = "city_name must be filled";
		document.forms["signup"]["city"].style.border ="0.5px solid red";
		return false;
    
    }
    var i=0;
	for(i=0;i<x_len;i++)
	{
		if(x[i]>='0'&&x[i]<='9')
		{
			document.forms["signup"]["city"].placeholder = "Invalid Name";
		document.forms["signup"]["city"].style.border ="0.5px solid red";
		return false;
		}
	}
	
	if(x_len < 5 || x_len >20)
	{
		alert("Name must be between 5 and 20 characters!")
		return false;
	}
}

function dob_out(){
	var x = document.forms["signup"]["dob"].value;
	if(x=="")
	{
		alert("Please enter a date");
	}
	return false;
}


function pin_out()
{
	var x = document.forms["signup"]["pin"].value;
	var regex=/^[0-9]+$/;
	if (x == "") {
        document.forms["signup"]["pin"].placeholder = "can't leave this empty";
		document.forms["signup"]["pin"].style.border ="0.5px solid red";
		return false;
    
    }
	
	if (!x.match(regex))
	{
		document.forms["signup"]["pin"].value = "";
		document.forms["signup"]["pin"].placeholder = "enter valid pin";
		document.forms["signup"]["pin"].style.border ="0.5px solid red"
	}
}

function email_out(){
	var x = document.forms["signup"]["email"].value;
	if(x=="")
	{
		document.forms["signup"]["email"].placeholder = "email can't be empty";
		document.forms["signup"]["email"].style.border ="0.5px solid red";
		return false;
	}
	var x = document.forms["signup"]["email"].value;
	var regex = new RegExp('[A-Za-z0-9_+\.~!#%&]+@[A-Za-z0-9_+\.~!#%&]+\.[A-Za-z0-9_+\.~!#%&]+');
	if (!x.match(regex))
	{
		alert("Invalid Email id");
		return false;
	}
	return true;
}


function pass_out(){
	var x = document.forms["signup"]["password"].value;
	var x_len=x.length;
	if (x == "") {
        document.forms["signup"]["password"].placeholder = "password must be filled";
		document.forms["signup"]["password"].style.border ="0.5px solid red";
		return false;
    
    }
	if(x_len < 8 || x_len >20)
	{
		alert("Please enter the password in range of 8-20 characters");
		return false;
		
	}
}


function con_pass_out(){
	var x = document.forms["signup"]["c_password"].value;
	var y = document.forms["signup"]["password"].value;
	if (x == "") {
        document.forms["signup"]["c_password"].placeholder = "please re-type password";
		document.forms["signup"]["c_password"].style.border ="0.5px solid red";
		return false;
    
    }
	if(x!=y)
	{
		alert("passwords do not match!!");
		return false;
	}
}


function contact_out(){
	var x = document.forms["signup"]["contact"].value;
	var len=x.length;
	var regex=/^[0-9]+$/;
	if (x == "") {
        document.forms["signup"]["contact"].placeholder = "can't leave this empty";
		document.forms["signup"]["contact"].style.border ="0.5px solid red";
		return false;
    
    }
	if(len!=10)
	{
		document.forms["signup"]["contact"].value = "";
		document.forms["signup"]["contact"].placeholder = "enter valid number";
		document.forms["signup"]["contact"].style.border ="0.5px solid red";
	}
	if (!x.match(regex))
	{
		document.forms["signup"]["contact"].value = "";
		document.forms["signup"]["contact"].placeholder = "enter valid number";
		document.forms["signup"]["contact"].style.border ="0.5px solid red";
	}
	if(x[0]==0)
	{
		document.forms["signup"]["contact"].value = "";
		document.forms["signup"]["contact"].placeholder = "enter valid number";
		document.forms["signup"]["contact"].style.border ="0.5px solid red";
	}
	
}

function addr_out(){
	var x = document.forms["signup"]["addr"].value;
	if(x=="")
	{
		document.forms["signup"]["addr"].placeholder = "can't leave this empty";
		document.forms["signup"]["addr"].style.border ="0.5px solid red";
		return false;
	}
	return false;
}

function address_out(){
	var x = document.forms["signup"]["address"].value;
	if(x=="")
	{
		document.forms["signup"]["address"].placeholder = "can't leave this empty";
		document.forms["signup"]["address"].style.border ="0.5px solid red";
		return false;
	}
	return false;
}

