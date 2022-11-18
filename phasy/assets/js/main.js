function reveal(){
    var reveals = 
    document.querySelectorAll(".reveal");
    for(var i = 0; i < reveals.length; i++) {
        var windowHeight = 
        window.innerHeight;
        var elementTop = 
        reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if(elementTop < windowHeight -
            elementVisible){
                reveals[i].classList.add("active");
            }else{
                reveals[i].classList.remove("active");
            }
    }
}
window.addEventListener("scroll",reveal);
// form validation
function form_val() {
    var fname = document.forms['signup']['fname'].value;
    var lname = document.forms['signup']['lname'].value;
    var email = document.forms['signup']['email'].value;
    var pwd = document.forms['signup']['pwd'].value;
    var cpwd = document.forms['signup']['cpwd'].value;
    nameTest= /^[a-zA-Z]+$/;

    if (fname == "") {
        document.getElementById('ferror').innerHTML = "enter first name";
        document.getElementById('ferror').style="display:block;color:red";
        return false;
    }else if(!nameTest.test(fname)){
        document.getElementById('ferror').innerHTML = "name can only contain letters";
        document.getElementById('ferror').style="display:block;color:red";
        return false;
    }else if(fname !=="" && nameTest.test(fname)){
        document.getElementById('ferror').style="display:none";
    }
    if (lname == "") {
        document.getElementById('lerror').innerHTML = "enter last name";
        document.getElementById('lerror').style="display:block;color:red";
        return false;
    }else if(!nameTest.test(lname)){
        document.getElementById('lerror').innerHTML = "name can only contain letters";
        document.getElementById('lerror').style="display:block;color:red";
        return false
    }else if(nameTest.test(lname) && lname !==""){
      document.getElementById('lerror').style="display:none";
    }
    if (email == "") {
      document.getElementById('merror').innerHTML = "email cannot be empty";
      document.getElementById('merror').style = "display:block;color:red";
      return false;
    }else if(email !== ""){
      document.getElementById('merror').style = "display:none";
    }
    if(pwd == ""){
      document.getElementById("perror").innerHTML = "enter password";
      document.getElementById("perror").style = "display:block;color:red";
      return false;
    }else if(!pwd.length>= 8){
      document.getElementById('perror').innerHTML = "password length must be upto 8 characters";
      document.getElementById('perror').style = "display:block;color:red";
      return false;
    }else if(pwd !== "" && pwd.length >= 8){
      document.getElementById('perror').style="display:none";
    }
    if (cpwd !== pwd) {
      document.getElementById('cerror').innerHTML = "password does not match";
      document.getElementById('cerror').style = "display:block;color:red";
      return false;
    }else{
      return true;
    }
    
}

