const form = document.getElementById("form");
const username = document.getElementById("userName");
const password = document.getElementById("password");
const password2 = document.getElementById("confirmPassword");

form.addEventListener("submit", e => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {


  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();
  const password2Value = password2.value.trim();

  if (usernameValue === "") {
    setErrorInput(username, "UserName cannot be blank.");
  } else {
    setSuccessInput(username);
  }

  if (passwordValue === "") {
    setErrorInput(password, "Password connot be blank.");
  } else {
    setSuccessInput(password) && validatePassword(passwordValue);
  }
  if (password2Value === "") {
    setErrorInput(password2, "Password connot be blank.");
  } else if (password2Value !== passwordValue) {
    setErrorInput(password2, "Password dose not match.");
  } else {
    setSuccessInput(password2);
  }
}

function setErrorInput(input, errorMessage) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  small.innerText = errorMessage;
  formControl.className = "form__control error";
}

function setSuccessInput(input) {
  const formControl = input.parentElement;
  formControl.className = "form__control success";
}

function validatePassword(password) {
  let regular_expressions = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
  return regular_expressions.match(regular_expressions);
}

function validateUsername(){
 let regular_expressions=/^[a-zA-Z\s]+$/;
 return regular_expressions.match(regular_expressions);
 alert ('Username is not correct');

}