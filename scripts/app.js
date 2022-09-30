let ownerCount = document.getElementById("ownerCount");
let ownerCounter = 0;
let tenantCounter = 0;
setInterval(() => {
  if (ownerCounter == 65) {
    clearInterval();
  } else {
    ownerCounter += 1;
    ownerCount.innerHTML = ownerCounter + "%";
  }
}, 30);

setInterval(() => {
  if (tenantCounter == 35) {
    clearInterval();
  } else {
    tenantCounter += 1;
    tenantCount.innerHTML = tenantCounter + "%";
  }
}, 30);

function pageSelector(index) {
  var pageSelectors = document.getElementsByClassName("pageSelectors");
  for (let i = 0; i < pageSelectors.length; i++) {
    if (index != i) {
      pageSelectors[i].firstElementChild.style.visibility = "hidden";
    } else {
      pageSelectors[i].firstElementChild.style.visibility = "visible";
    }
  }
}

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
      // userSelection[i].lastElementChild.style.display = "none"
    } else {
      userSelection[i].setAttribute("class", "SelectedUserSelection");
      // userSelection[i].lastElementChild.style.display = "block"
    }
  }
}

function selectedUserTypeSection(e) {
  // var ownerAndTenant = document.getElementById("ownerAndTenant").children;
  var ownerH1 = document.getElementById("ownerH1");
  var ownerCount = document.getElementById("ownerCount");
  var tenantH1 = document.getElementById("tenantH1");
  var tenantCount = document.getElementById("tenantCount");
  // for (let i = 0; i <= 2; i++) {
  if (e == 0) {
    ownerH1.style.color = "#186eb1";
    // ownerH1.style.fontWeight = "bold"
    ownerCount.style.color = "#186eb1";
  } else {
    ownerH1.style.color = "#777";
    // ownerH1.style.fontWeight = "normal"
    ownerCount.style.color = "#777";
  }

  if (e == 1) {
    // ownerAndTenant[1].setAttribute(
    //   "class",
    //   "tenantMainSection selectedUserSection"
    // );
    tenantH1.style.color = "#e14eca";
    // tenantH1.style.fontWeight = "bold"
    tenantCount.style.color = "#e14eca";
  } else {
    // ownerAndTenant[1].setAttribute("class", "tenantMainSection");
    tenantH1.style.color = "#777";
    // tenantH1.style.fontWeight = "normal"
    tenantCount.style.color = "#777";
  }
  // }
}

function usersListMainHeading() {
  document.getElementById("ownerH1").style.color = "#186eb1";
  // document.getElementById("ownerH1").style.fontWeight = "normal";
  document.getElementById("ownerCount").style.color = "#777";
  document.getElementById("tenantH1").style.color = "#e14eca";
  // document.getElementById("tenantH1").style.fontWeight = "normal";
  document.getElementById("tenantCount").style.color = "#777";
}

function changeActiveStatus(btn) {
  var statusInputField = document.getElementById("statusInputField");
  if (btn.innerHTML == "Active") {
    statusInputField.value = btn.innerHTML;
    statusInputField.style.color = "#61b95b";
    btn.setAttribute("class", "active");
    btn.nextElementSibling.className = "changingBgBtn";
    btn.nextElementSibling.nextElementSibling.className = "changingBgBtn";
  } else if (btn.innerHTML == "Suspended") {
    statusInputField.value = btn.innerHTML;
    statusInputField.style.color = "#ff5f1fb4";
    btn.setAttribute("class", "suspended");
    btn.previousElementSibling.className = "changingBgBtn";
    btn.nextElementSibling.className = "changingBgBtn";
  } else {
    statusInputField.value = btn.innerHTML;
    statusInputField.style.color = "#ee405e";
    btn.setAttribute("class", "blocked");
    btn.previousElementSibling.className = "changingBgBtn";
    btn.previousElementSibling.previousElementSibling.className =
      "changingBgBtn";
  }
}

function changeUserType(btn) {
  var userTypeInputField = document.getElementById("userTypeInputField");
  if (btn.innerHTML == "Owner") {
    userTypeInputField.value = btn.innerHTML;
    userTypeInputField.style.color = "#186eb1";
    btn.className = "ownerChangeBtn";
    btn.nextElementSibling.className = "changingBgBtn";
  } else {
    userTypeInputField.value = btn.innerHTML;
    userTypeInputField.style.color = "#e14eca";
    btn.className = "tenantChangeBtn";
    btn.previousElementSibling.className = "changingBgBtn";
  }
}

function ownerToTenantEffects(key) {
  var tenantDetail = document.getElementById("tenantDetail");
  if (key == 0) {
    tenantDetail.className = "visibilityHidden";
    tenantDetail.lastElementChild.value = "";
  } else {
    tenantDetail.className = "visibilityVisible";
  }
}

function editBtnToggler(btn) {
  var editIcon = '<i class="fa-solid fa-pen-to-square"></i>';
  var saveIcon = '<i class="fa-solid fa-floppy-disk"></i>';
  var editableFields = document.getElementsByClassName("editableFields");
  var userDetailsImg = document.getElementById("userDetailsImg");
  if (btn.innerHTML == `${editIcon} EDIT DETAILS`) {
    btn.innerHTML = `${saveIcon} SAVE CHANGES`;
    btn.style.backgroundColor = "#61b95b";

    for (let i = 0; i < editableFields.length; i++) {
      editableFields[i].disabled = false;
      editableFields[i].style.borderBottom = "1px solid #888";
    }

    userDetailsImg.src = "./images/users/editing.png";
  } else {
    btn.innerHTML = `${editIcon} EDIT DETAILS`;
    btn.style.backgroundColor = "#186eb1";

    for (let i = 0; i < editableFields.length; i++) {
      editableFields[i].disabled = true;
      editableFields[i].style.borderBottom = "none";
    }

    userDetailsImg.src = "./images/users/detailing.png";
  }
}

function updateTenantDetails() {
  var tenantDetail = document.getElementById("tenantDetail");
  tenantDetail.lastElementChild.style.color = "#555";
  if (
    (tenantDetail.lastElementChild.value == "" ||
      tenantDetail.lastElementChild.value == "Please Add CNIC here!") &&
    tenantDetail.className == "visibilityVisible"
  ) {
    tenantDetail.lastElementChild.value = "Please Add CNIC here!";
    tenantDetail.lastElementChild.style.color = "#ee405e";
  }
}
