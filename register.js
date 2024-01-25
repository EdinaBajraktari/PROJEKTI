function validateForm(){
    var name=document.getElementById('name').value;
    var username=document.getElementById('username').value;
    var password=document.getElementById('password').value;
    var email=document.getElementById('email').value;
    var country=document.getElementById('country').value;
    var genderOptions=document.querySelectorAll('input[name="gender"]:checked');
    
        if(!/^[a-zA-Z0-9]+$/.test(name)){
            alert("Ju lutem shkruani nje emer valid");
            return false;
        }

       
        if(!/^[a-zA-Z0-9]+$/.test(username)){
            alert("Ju lutem shkruani nje Username valid");
            return false;
        }
        if(password.length<7){
            alert("password duhet te jete mbi 7 karaktere");
            return false;
        }
        
        if(!/^[^\s@]+@[^\s@]+\.[a-zA-Z]+$/.test(email)){
            alert("Ju lutem shkruani nje Email valid");
            return false;
        }
        
        if(country === "Default"){
            alert("Zgjidhni vendin tuaj");
            return false;
        }
        if(genderOptions.length===0){
            alert("Zgjidhni nje opsion për gjininë");
            return false;
        }
        alert("Form Successfully Submitted");
        return true;
}        
