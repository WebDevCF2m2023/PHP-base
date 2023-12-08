const arrowIndiquation = document.getElementById("arrowIndiquation");
arrowIndiquation.addEventListener("click", () => {
  const index = document.getElementById("index");
  window.scroll({
    top: index.scrollHeight - 160,
    left: 0,
    behavior: "smooth",
  });
});
