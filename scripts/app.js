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
