const showingDiv = document.getElementsByClassName("showingDiv");
const sizeBorderBottom = 1;
const sizeClosed =
  showingDiv[0].children[0].scrollHeight + sizeBorderBottom + "px";
let lastShow;
for (const section of showingDiv) {
  section.style.maxHeight = sizeClosed;
  section.children[0].addEventListener("click", () => {
    if (lastShow !== undefined) {
      lastShow.style.maxHeight = sizeClosed;
      const needToReturn = lastShow === section;
      lastShow.querySelector("img").style.transform = "rotate(90deg)";
      lastShow = undefined;
      if (needToReturn) return;
    }
    lastShow = section;
    section.querySelector("img").style.transform = "rotate(-90deg)";
    section.style.maxHeight = section.scrollHeight + "px";
  });
}
