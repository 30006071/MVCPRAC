function validateForm() {
  var a =document.forms["myForm"]["name"].value;
  var b= document.forms["myForm"]["phone"].value;
  var c= document.forms["myForm"]["email"].value;
  var d= document.forms["myForm"]["subject"].value;
  if (a == "" || b == "" || c == "" || d == "") {
    alert("All fields must be filled out");
    return false;
  }
  else if(!isNaN(a)) {
    alert("Name cant have numbers");
    return false;
  }
  else if(isNaN(b)){
    alert("Phone number cant have letters");
    return false;
  }
  else if(!c.includes("@")) {
    alert("Email must contain @ symbol");
    return false;
  }
}
