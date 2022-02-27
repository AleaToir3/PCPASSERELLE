let btn = document.querySelector("button");
let container = document.querySelector(".container");

btn.addEventListener("click", () => {
  let creatediv = document.createElement("span");
  creatediv.classList = "toast";
  creatediv.innerHTML = "Je suis un relou !";
  container.appendChild(creatediv);
  setTimeout(() => {
      creatediv.remove();
  }, 2000);
});
