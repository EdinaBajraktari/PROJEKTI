var nameRegex=/[a-zA-z\s]+$/;
        if(!nameRegex.test(name)){
            alert("Ju lutem shkruani nje emer valid");
            return false;
        }

        var usernameRegex=/^[a-zA-Z0-9]+$/;
        if(!username.test(username)){
            alert("Ju lutem shkruani nje Username valid");
            return false;
        }
        if(password.length<7){
            alert("password duhet te jete mbi 7 karaktere");
            return false;
        }
        var emailRegex=/^[^\s@]+@[^\s@]+\.[a-zA-Z]+$/;
        if(!emailRegex.test(email)){
            alert("Ju lutem shkruani nje Username valid");
            return false;
        }
        /*var countryRegex;*/
        if(ucountry.value == "Default"){
            alert("Zgjidhni vendin tuaj");
            ucountry.focus();
            return false;
        }

        var x=0;
        if(umgender.checked){
            x++;
        }if(ufgender.checked){
            x++;
        }
        if(x==0){
            altert("Zgjidhni Male/Female");
            umgender.focus();
            return false;
        }
        else{
            alert("Form Successfully Submitted");
            window.location.reload()
            return true;
        }
