const menuList = document.getElementById("menuList");
function show() {
  const isVisible = menuList.style.display === "block";
  const nav = menuList.children[0];
  menuList.style.display = isVisible ? "none" : "block";

  if (isVisible) {
    nav.style.display = "none";
    return;
  }

  setTimeout(() => {
    nav.style.display = "block";
  }, 450);
}
