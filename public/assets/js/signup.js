// const signup = document.getElementById("signup");

// signup.addEventListener('submit', ) (e) => {
//   e.preventDefault();
//   let xhr = new XMLHttpRequest();
//   xhr.open(
//     "POST",
//     "http://localhost/ecommerce-custom/controllers/signup",
//     true
//   );
//   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhr.onload = () => {
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         let data = xhr.response;
//         if (data === "success") {
//           //   location.href = "users.php";
//           console.log(data);
//         } else {
//           //   errorText.style.display = "block";
//           //   errorText.textContent = data;
//         }
//       }
//     }
//   };
//   let formData = new FormData(signup);
//   xhr.send(formData);
//   console.log(JSON.parse(formData));
// };

const signup = document.getElementById("signup");

signup.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData(signup);

  const data = await fetch("http://localhost/ecommerce-custom/signup", {
    method: "POST",
    body: formData,
  });
  const response = await data.text();
  // =-
});
