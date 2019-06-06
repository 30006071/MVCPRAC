function validateForm() {
    var a = document.forms["myForm"]["name"].value;
    if (a == "") {
      alert("Name must be filled out");
      return false;
    }
    if(!NaN(a)){
    alert("Name cant have numbers");
    return false;
    }
    var  b= document.forms["myForm"]["phone"].value;
    if (b == "") {
      alert("Name must be filled out");
      return false;
    }
    if(NaN(b)== true){
      alert("Phone number cant have letters");
      return false;
    }
    var  c= document.forms["myForm"]["email"].value;
    if (c == "") {
      alert("Name must be filled out");
      return false;
    }
    var  d= document.forms["myForm"]["subject"].value;
    if (d == "") {
      alert("Name must be filled out");
      return false;
    }
  }