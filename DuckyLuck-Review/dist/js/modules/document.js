const reputationInit = document.querySelector(".reputation");

if (reputationInit) {
  document.querySelectorAll(".reputation__column-item").forEach(function (e) {
    e.querySelector(".reputation__fill").style.width = `${e.querySelector(".reputation__column-procent").innerHTML}`;
  })
}