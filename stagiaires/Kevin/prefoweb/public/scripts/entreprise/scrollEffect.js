let isVisibleDescription = false;
let isVisibleOrganigramme = false;
const description = document.getElementById("description");
const organigramme = document.getElementById("organigramme");
checkPositionScroll();

addEventListener("scroll", checkPositionScroll);

function checkPositionScroll() {
  const scrollTop = document.documentElement.scrollTop;
  if (scrollTop >= 520 && !isVisibleDescription) scrollForDescription();
  if (scrollTop >= 1350 && !isVisibleOrganigramme) scrollForOrganigramme();
}

function scrollForDescription() {
  isVisibleDescription = true;
  for (let i = 0; i < description.children.length; ++i) {
    description.children[i].style.display = "block";
    description.children[i].style.animation = "animationRightToLeft 1s linear";
  }
}
function scrollForOrganigramme() {
  isVisibleOrganigramme = true;
  for (let i = 0; i < organigramme.children.length; ++i) {
    if (i > 0) organigramme.children[i].style.display = "flex";
    else organigramme.children[i].style.display = "block";
  }
}
