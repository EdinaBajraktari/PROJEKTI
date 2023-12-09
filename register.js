var nameRegex=/[a-zA-z\s]+$/;
        if(!nameRegex.test(name)){
            altert("Ju lutem shkruani nje emer valid");
            return false;
        }

        var UsernameRegex=/[^a-z\s]+$/;
        if(!Username.test(Username)){
            altert("Ju lutem shkruani nje Username valid");
            return false;
        }
        if(password.length<7){
            alert("password duhet te jete mbi 7 karaktere");
            return false;
        }
        var emailRegex=/^[^\s@]+@[^\s@]+\.[*\s@]+$/;
        if(!emailRegex.test(email)){
            altert("Ju lutem shkruani nje Username valid");
            return false;
        }
        var countryRegex;
        if(ucountry.value == "Default"){
            alert("Zgjidhni vendin tuaj");
            ucountry.focus();
            return false;
        }
        else
        {
            return true;
        }
        var GenderRegex;
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
