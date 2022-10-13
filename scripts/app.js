// let ownerCount = document.getElementById("ownerCount");
// let ownerCounter = 0;
// let tenantCounter = 0;
// setInterval(() => {
//   if (ownerCounter == 65) {
//     clearInterval();
//   } else {
//     ownerCounter += 1;
//     ownerCount.innerHTML = ownerCounter + "%";
//   }
// }, 30);

// setInterval(() => {
//   if (tenantCounter == 35) {
//     clearInterval();
//   } else {
//     tenantCounter += 1;
//     tenantCount.innerHTML = tenantCounter + "%";
//   }
// }, 30);

function pageSelector(index) {
  var pageSelectors = document.getElementsByClassName("pageSelectors");
  for (let i = 0; i < pageSelectors.length; i++) {
    if (index != i) {
      pageSelectors[i].firstElementChild.style.visibility = "hidden";
      pageSelectors[i].style.color = "#dddddd";
    } else {
      pageSelectors[i].firstElementChild.style.visibility = "visible";
      pageSelectors[i].style.color = "white";
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
      userSelection[i].className = "selectedUserSection";
      // userSelection[i].lastElementChild.style.display = "none"
    } else {
      userSelection[i].className = " ";
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
    tenantH1.style.color = "#e5032dbd";
    // tenantH1.style.fontWeight = "bold"
    tenantCount.style.color = "#e5032dbd";
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

function haltServiceToggler(icon) {
  icon.className =
    icon.className == "fa-solid fa-toggle-off"
      ? "fa-solid fa-toggle-on"
      : "fa-solid fa-toggle-off";
  icon.style.color =
    icon.className == "fa-solid fa-toggle-off" ? "#555" : "#ee405e";

  const orderPageMainPanel = document.getElementById("orderPageMainPanel");
  orderPageMainPanel.style.opacity =
    icon.className == "fa-solid fa-toggle-off" ? "1" : "0.3";
}

function ordersTabSectionToggler(tab) {
  const tabSectionBody = document.getElementById("tabSectionBody");
  const tabSectionHaltBody = document.getElementById("tabSectionHaltBody");

  if (tab.innerHTML == "Quota") {
    tabSectionBody.className = "tabSectionDisplayBody";
    tabSectionHaltBody.className = "tabSectionHiddenBody";

    tab.style.background = "white";
    tab.style.color = "#555";
    tab.style.borderRadius = "20px 20px 0 0";
    tab.parentElement.style.paddingLeft = "5px";
    tab.parentElement.style.background = "#283e51";
    tab.parentElement.style.borderTop = "5px solid #283e51";

    tab.parentElement.nextElementSibling.style.background = "#283e51";
    tab.parentElement.nextElementSibling.style.borderRadius = "0 20px 0 20px";
    tab.parentElement.nextElementSibling.style.borderTop = "5px solid #283e51";

    tab.parentElement.nextElementSibling.firstElementChild.style.background =
      "transparent";
    tab.parentElement.nextElementSibling.firstElementChild.style.color =
      "white";
  } else if (tab.innerHTML == "Halt") {
    tabSectionHaltBody.className = "tabSectionDisplayHaltBody";
    tabSectionBody.className = "tabSectionHiddenBody";

    tab.style.background = "white";
    tab.style.color = "#555";
    tab.style.borderRadius = "20px 20px 0 0";
    tab.parentElement.style.paddingRight = "5px";
    // tab.parentElement.style.background = "#4b79a1";
    tab.parentElement.style.background = "#ee405e";
    tab.parentElement.style.borderTop = "5px solid #ee405e";

    tab.parentElement.previousElementSibling.style.background = "#ee405e";
    tab.parentElement.previousElementSibling.style.borderRadius =
      "20px 0 20px 0";
    tab.parentElement.previousElementSibling.style.borderTop =
      "5px solid #ee405e";

    tab.parentElement.previousElementSibling.firstElementChild.style.background =
      "transparent";
    tab.parentElement.previousElementSibling.firstElementChild.style.color =
      "white";
  }
}

function dailyQuotaEditBtn(editBtn) {
  const dailyQuotaInput = document.getElementById("dailyQuotaInput");
  if (editBtn.innerHTML == "EDIT") {
    editBtn.innerHTML = "SAVE";
    dailyQuotaInput.disabled = false;
    dailyQuotaInput.style.borderBottom = "2px solid #186eb1";
  } else {
    editBtn.innerHTML = "EDIT";
    dailyQuotaInput.disabled = true;
    dailyQuotaInput.style.borderBottom = "none";
  }
}

///// Multiple Selection Functionality on Orders Page

function multipleSelectionFunction(btn) {
  // btn.innerHTML =
  //   btn.innerHTML == "<i class='fa-solid fa-bars'></i> Select Multiple" ? "<i class='fa-solid fa-cross'></i> Select Multiple" : "<i class='fa-solid fa-bars'></i> Select Multiple";
  btn.firstElementChild.className =
    btn.firstElementChild.className == "fa-solid fa-bars"
      ? "fa-solid fa-xmark"
      : "fa-solid fa-bars";
  btn.className = btn.className == "embeddedBtn" ? "" : "embeddedBtn";

  // Action Button Container Show
  const multipleSelectedOrderActionBtnDiv = document.getElementById(
    "multipleSelectedOrderActionBtnDiv"
  );
  multipleSelectedOrderActionBtnDiv.className =
    btn.className == "embeddedBtn"
      ? "ordersMutipleSelectionMainDiv"
      : "displayNone";

  // Modal Disable Toggler
  const userDetails =
    document.getElementById("userDetails") ||
    document.getElementById("DisableModal");
  userDetails.id =
    userDetails.id == "userDetails" ? "DisableModal" : "userDetails";

  // Selecting tr
  const orderTableBody = document.getElementById("orderTableBody");
  for (let i = 0; i < orderTableBody.children.length; i++) {
    if (btn.className == "embeddedBtn") {
      orderTableBody.children[i].setAttribute(
        "onclick",
        "selectTrFunction(this)"
      );
    } else {
      orderTableBody.children[i].removeAttribute("onclick");
    }
  }
}

// Row Selecting Toggler
function selectTrFunction(tr) {
  if (tr.style.color == "white") {
    for (let j = 0; j < tr.children.length; j++) {
      tr.children[j].style.backgroundColor = "transparent";
    }
    tr.style.color = "#212529";
    tr.style.opacity = "1";
    tr.className = "";
    loadingData(tr, 0);
  } else {
    for (let i = 0; i < tr.children.length; i++) {
      tr.children[i].style.backgroundColor = "#999";
    }
    tr.style.color = "white";
    tr.style.opacity = "0.5";
    tr.className = "selectedTr";
    loadingData(tr, 1);
  }
}

//  Loading Data into Modal

function loadingData(selectedTr, key) {
  var modalTbody = document.getElementById("modalTbody");
  var orderIdTdTxt = selectedTr.children[0].innerHTML;
  var toTdTxt = selectedTr.children[3].innerHTML;
  var tankerTypeTdTxt = selectedTr.children[2].innerHTML;

  if (key == 1) {
    var tr = document.createElement("tr");

    var orderIdTd = document.createElement("td");
    orderIdTd.append(orderIdTdTxt);

    var toTd = document.createElement("td");
    toTd.append(toTdTxt);

    var tankerTypeTd = document.createElement("td");
    tankerTypeTd.append(tankerTypeTdTxt);

    tr.append(orderIdTd);
    tr.append(toTd);
    tr.append(tankerTypeTd);

    modalTbody.append(tr);
  } else if (key == 0) {
    for (let k = 0; k < modalTbody.children.length; k++) {
      if (modalTbody.children[k].firstElementChild.innerHTML == orderIdTdTxt) {
        modalTbody.removeChild(modalTbody.children[k]);
      }
    }
  }
}

function clearAllModalList() {
  const modalTbody = document.getElementById("modalTbody");
  modalTbody.innerHTML = "";

  const orderTableBody = document.getElementById("orderTableBody");
  for (let i = 0; i < orderTableBody.children.length; i++) {
    orderTableBody.children[i].style.color = "#212529";
    orderTableBody.children[i].style.opacity = "1";
    orderTableBody.children[i].className = " ";
    for (let j = 0; j < orderTableBody.children[i].children.length; j++) {
      orderTableBody.children[i].children[j].style.backgroundColor =
        "transparent";
    }
  }
}

function previousPaymentsToggler(clicker) {
  let hiddenAfterFunction = document.getElementsByClassName(
    "hiddenAfterfunction"
  );
  const icon = clicker.lastElementChild.firstElementChild;
  const addMaintenanceSection = document.getElementById(
    "addMaintenanceSection"
  );

  icon.className =
    icon.className == "fa-solid fa-angle-up"
      ? "fa-solid fa-angle-down"
      : "fa-solid fa-angle-up";

  if (icon.className == "fa-solid fa-angle-down") {
    clicker.parentElement.style.boxShadow = "none";
    clicker.parentElement.style.height = "70%";
    clicker.parentElement.style.width = "84%";
    for (let i = 0; i < hiddenAfterFunction.length; i++) {
      hiddenAfterFunction[i].style.display = "none";
    }
    addMaintenanceSection.style.display = "none";
  } else {
    clicker.parentElement.style.boxShadow = "0px 3px 10px rgb(0 0 0 / 16%)";
    clicker.parentElement.style.height = "54px";
    clicker.parentElement.style.width = "43%";
    for (let i = 0; i < hiddenAfterFunction.length; i++) {
      hiddenAfterFunction[i].style.display = "flex";
    }
    addMaintenanceSection.style.display = "block";
  }
}

function addMaintenanceToggler(clicker) {
  const icon = clicker.lastElementChild.firstElementChild;

  icon.className =
    icon.className == "fa-solid fa-angle-up"
      ? "fa-solid fa-angle-down"
      : "fa-solid fa-angle-up";

  if (icon.className == "fa-solid fa-angle-down") {
    // clicker.parentElement.style.boxShadow = "none";
    clicker.parentElement.style.height = "34%";
    clicker.parentElement.style.width = "84%";
  } else {
    // clicker.parentElement.style.boxShadow = "0px 3px 10px rgb(0 0 0 / 16%)";
    clicker.parentElement.style.height = "54px";
    clicker.parentElement.style.width = "43%";
  }
}
