const $scrollBtn = window.document.querySelector(".btn-move-top");
window.addEventListener("scroll", () => {
  //   console.log($scrollBtn);
  $scrollBtn.classList.toggle("active", window.scrollY > 450);
});

function backTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

$scrollBtn.addEventListener("click", backTop);