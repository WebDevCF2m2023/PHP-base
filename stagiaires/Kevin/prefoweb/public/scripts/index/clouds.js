function activateClouds(seconds, pathCloud) {
  let idCloud = 1;
  const imgCloud = document.getElementById("cloud").children[0];
  setInterval(() => {
    ++idCloud;
    if (idCloud > 5) idCloud = 1;
    imgCloud.src = pathCloud + idCloud + ".png";
  }, seconds * 1000);
}
