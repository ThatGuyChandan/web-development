function checkFunction(){
    var password=document.getElementById("password");
    var username=document.getElementById("Username");
    var captcha=document.getElementById("textBox");
    var check=document.getElementById("check").innerHTML;
    var userError=document.getElementById("user");
    var passError=document.getElementById("pass");

    if(password.value.length<8 || password.value.length>15){ 
        password.style.border="1px solid red";
        appear.style.display="block";
        password.focus;
        return false;
    }
    if(password.value!="21bce7469"){
        password.style.border="1px solid red";
        passError.style.display="block";
        passError.focus;
        return false;
    }
    if(captcha.value!=check){
        captcha.style.border="1px solid red";
        xyz.style.display="block";
        captcha.focus;
        return false;
       
    }
    if(username.value!=`${password}@vitap.ac.in`){
        username.style.border="1px solid red";
        userError.style.display="block";
        userError.focus;
        return false;
    }
   
   
    
    alert("login successful");
    
}
