function validate(){
    var name = document.getElementById("name").value;
    var lastname = document.getElementById("lastname").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    


    error_message.style.padding = "13px";
    var text;

    var regName = /^[a-zA-Z]+$/;
    var regLastName = /^[a-zA-Z]+$/;

    if(!regName.test(name)){
      text = "Please Enter a valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(!regLastName.test(name)){
      text = "Please Enter a valid LastName";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length <5){
      text = "Please Enter a  valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter a valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if(message.length <= 140){
      text = "Please Enter More Than 140 Characters";
      error_message.innerHTML = text;
      return false;
    }
    alert("Message Submitted Successfully!");
    return true;
  }