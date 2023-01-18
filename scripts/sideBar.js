const slideDown = (element) => {
  const slideOpenDirector = document.getElementById("slideOpenDirector");
  if (slideOpenDirector.className == "fa-solid fa-chevron-right") {
    slideOpenDirector.className = "fa-solid fa-chevron-down";
    element.style.alignItems = "flex-start";
    element.style.alignContent = "flex-start";
    element.lastElementChild.style.display = "block";
    element.style.height = "auto";
  } else {
    slideOpenDirector.className = "fa-solid fa-chevron-right";
    element.lastElementChild.style.display = "none";
  }
};
