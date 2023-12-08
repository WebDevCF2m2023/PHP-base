const names =
  "1997,1425,1752,1847,1887,1912,1925,1931,1936,1941,1945,1948,1951,1953,1957,1960,1962,1969,1971,1973,1975,1977,1979,1981,1983,1985,1987,1989,1992,1994,1996,1999,2001,2004,2006,2009,2011,2013,2015,2017,476".split(
    ","
  );
const fileName = [];
names.forEach((n) => {
  fileName.push(+n);
});
fileName.sort(function (a, b) {
  return a - b;
});
const showImg = document.getElementById("viewImage");
const imgShowImg = document.getElementById("imgViewImage");
const backgroundViewImage = document.getElementById("backgroundViewImage");
const timeline = document.getElementById("timeline").children[1];
const leftArrow = document.getElementById("leftArrow");
const rightArrow = document.getElementById("rightArrow");
const engrenage = document.getElementById("engrenage");
const classNameNoTransition = "notransition";
let isClickedImage = false;
let isTimelineClickDown = false;
let lastTimeDragedTimeLine = null;

leftArrow.addEventListener("click", previousImage);

rightArrow.addEventListener("click", nextImage);

addEventListener("keydown", (event) => {
  if (event.key === "Escape" || event.key === "Delete") quitShowingImage();
  else if (event.key === "ArrowRight") {
    nextImage();
  } else if (event.key === "ArrowLeft") {
    previousImage();
  }
});

addEventListener("wheel", (e) => {
  if(!isClickedImage) return;
  if (e.deltaY < 0) previousImage();
  else nextImage();
});

addEventListener("resize", () => {
  restartTranslateWithCurrentPosition(
    getCurrentTranslateXFromElement(timeline.children[0])
  );
});

function getTotalSizeScrollWidthImages() {
  let totalScrollWidth = 0;
  const scrollWidth = timeline.children[0].scrollWidth;
  for (let i = 0; i < timeline.children.length; ++i) {
    totalScrollWidth += scrollWidth;
  }
  return totalScrollWidth + scrollWidth * 2.2;
}

function nextImage() {
  const currentIndex = +imgShowImg.dataset.index;
  const nextIndex =
    currentIndex + 1 > timeline.children.length - 1 ? 0 : currentIndex + 1;
  imgShowImg.dataset.index = nextIndex;
  imgShowImg.src = "images/timeline/" + fileName[nextIndex] + ".jpg";
}
function previousImage() {
  const currentIndex = +imgShowImg.dataset.index;
  const previousIndex =
    currentIndex - 1 < 0 ? timeline.children.length - 1 : currentIndex - 1;
  imgShowImg.dataset.index = previousIndex;
  imgShowImg.src = "images/timeline/" + fileName[previousIndex] + ".jpg";
}

function getCurrentTranslateXFromElement(element) {
  return window
    .getComputedStyle(element, null)
    .getPropertyValue("transform")
    .split(",")[4]
    .trim();
}

function stopTranslateAndKeepPosition(currentTranslateX) {
  engrenage.pause();
  for (let y = 0; y < timeline.children.length; ++y) {
    const image = timeline.children[y];
    image.style.transform = "translate(" + currentTranslateX + "px, 0)";
    image.classList.add(classNameNoTransition);
  }
}

function restartTranslateWithCurrentPosition(currentTranslateX) {
  engrenage.playbackRate = 1.0;
  engrenage.play();
  const widthScroll = timeline.children[0].scrollWidth;
  for (let y = 0; y < timeline.children.length; ++y) {
    const image = timeline.children[y];
    image.classList.remove(classNameNoTransition);
    image.style.transform =
      "translate(-" + getTotalSizeScrollWidthImages() + "px, 0)";
    const duration =
      +currentTranslateX > 0
        ? 120
        : 120 - (Math.floor(Math.abs(+currentTranslateX)) / widthScroll) * 3;
    image.style.transitionDuration = duration + "s";
  }
}

function quitShowingImage() {
  showImg.style.display = "none";
  backgroundViewImage.style.display = "none";
  restartTranslateWithCurrentPosition(
    getCurrentTranslateXFromElement(timeline.children[0])
  );
  isClickedImage = false;
  document.body.style.overflowY = "scroll";
}

backgroundViewImage.addEventListener("click", quitShowingImage);

function loadBaseImage() {
  const folder = "images/timelineResized/";
  for (let i = 0; i < names.length; ++i) {
    const img = document.createElement("img");
    img.src = folder + fileName[i] + ".jpg";
    img.dataset.index = i;
    timeline.appendChild(img);
  }
}
loadBaseImage();

function animation() {
  for (let i = 0; i < timeline.children.length; ++i) {
    timeline.children[i].style.transform =
      "translate(-" + getTotalSizeScrollWidthImages() + "px, 0)";
  }
}
animation();

function addEventListenerToImage() {
  for (let i = 0; i < timeline.children.length; ++i) {
    const overImage = timeline.children[i];
    overImage.addEventListener("click", () => {
      if (
        lastTimeDragedTimeLine != null &&
        new Date().getTime() - lastTimeDragedTimeLine < 400
      )
        return;
      document.body.style.overflowY = "hidden";
      isClickedImage = true;
      imgShowImg.src = overImage.src.replace("timelineResized", "timeline");
      imgShowImg.dataset.index = overImage.dataset.index;
      showImg.style.display = "block";
      backgroundViewImage.style.display = "block";
      stopTranslateAndKeepPosition(getCurrentTranslateXFromElement(overImage));
    });
    overImage.addEventListener("mouseover", () => {
      if (isTimelineClickDown) return;
      const currentTranslateX = getCurrentTranslateXFromElement(overImage);
      stopTranslateAndKeepPosition(currentTranslateX);
    });
    overImage.addEventListener("mouseout", () => {
      if (isClickedImage || isTimelineClickDown) return;
      restartTranslateWithCurrentPosition(
        getCurrentTranslateXFromElement(overImage)
      );
    });
    overImage.addEventListener("dragstart", function (e) {
      e.preventDefault();
    });
  }
}
addEventListenerToImage();

// Check if the animation of the timeline is finsished
setInterval(() => {
  if (isTimelineClickDown) return;
  const currentPostion = getCurrentTranslateXFromElement(
    timeline.children[timeline.children.length - 1]
  );
  const offsetX = timeline.children[0].scrollWidth * 3.4;
  if (currentPostion > -getTotalSizeScrollWidthImages()) return;
  for (let i = 0; i < timeline.children.length; ++i) {
    const image = timeline.children[i];
    image.classList.add(classNameNoTransition);
    image.style.transform = "translate(" + offsetX + "px, 0px)";
  }
  setTimeout(() => {
    restartTranslateWithCurrentPosition(offsetX);
  }, 5);
}, 0.2 * 1000);

// Drag the timeline by the user

let lastMousePostionX = null;
let currentTranslateX = null;

timeline.addEventListener("mousemove", (e) => {
  if (!isTimelineClickDown) return;
  const deltaX = e.clientX - lastMousePostionX;
  for (let i = 0; i < timeline.children.length; ++i) {
    const image = timeline.children[i];
    image.classList.add(classNameNoTransition);
    image.style.transform =
      "translate(" + (currentTranslateX + deltaX) + "px, 0px)";
  }
  lastTimeDragedTimeLine = new Date().getTime();
});

timeline.addEventListener("mousedown", (e) => {
  lastMousePostionX = e.clientX;
  isTimelineClickDown = true;
  currentTranslateX = +getCurrentTranslateXFromElement(timeline.children[0]);
});

timeline.addEventListener("mouseup", (e) => {
  isTimelineClickDown = false;
});

timeline.addEventListener("mouseleave", () => {
  isTimelineClickDown = false;
  if (isClickedImage) return;

  restartTranslateWithCurrentPosition(
    getCurrentTranslateXFromElement(timeline.children[0])
  );
});
