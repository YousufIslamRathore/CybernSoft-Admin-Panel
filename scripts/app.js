function showPassword(element) {
  if (element.parentElement.previousElementSibling.type == "password") {
    element.parentElement.previousElementSibling.type = "text";
    element.className = "fa-solid fa-eye-slash";
  } else {
    element.parentElement.previousElementSibling.type = "password";
    element.className = "fa-solid fa-eye";
  }
}

function selectedUserSection(e) {
  var userSelection = document.getElementById("userSelection").children;
  for (let i = 0; i <= 4; i++) {
    if (e == i) {
      userSelection[i].setAttribute("class", "selectedUserSection");
    } else {
      userSelection[i].setAttribute("class", "SelectedUserSelection");
    }
  }
}

function editBtnToggler(btn) {
  if(btn.innerHTML == "EDIT DETAILS") {
    btn.innerHTML = "SAVE CHANGES"
    btn.style.backgroundColor = "#61b95b"
  }
  else {
    btn.innerHTML = "EDIT DETAILS"
    btn.style.backgroundColor = "#186eb1"
  }
}

