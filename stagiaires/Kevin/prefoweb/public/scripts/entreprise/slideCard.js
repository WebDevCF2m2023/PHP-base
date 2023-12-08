const card = document.getElementById("card");
const presentation = document.getElementById("presentation");
card.addEventListener("mouseover", () => {
  card.style.left = "150px";
  setTimeout(() => {
    presentation.style.display = "inline-block";
    presentation.style.animation = "animPresentation 0.5s linear";

    setTimeout(() => {
      for (let i = 0; i < presentation.children.length; ++i) {
        const child = presentation.children[i];
        child.style.animation = "animationContentPresentation 0.5s linear";
      }
    }, 50);
  }, 140);
});
