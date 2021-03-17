const openMenu = document.querySelector(".toggle");
const navigation = document.querySelector(".navigation");

if(openMenu) {
  openMenu.addEventListener("click", () => {
    navigation.classList.toggle("interactive");
  });
}
