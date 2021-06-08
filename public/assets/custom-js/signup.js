const signup = document.getElementById("signup-id"),
  signupBtn = document.getElementById("signup-btn");

signupBtn.addEventListener("click", () => {
  alert("signup");
});

signup.addEventListener("submit", (e) => {
  e.preventDefault();
  const formData = new FormData(this);

  fetch("http://localhost/gnice/controller/signup", {
    method: "post",
    body: formData,
  }).then(function (response) {});
});
