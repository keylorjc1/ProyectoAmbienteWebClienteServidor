  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const submitButton = form.querySelector("button[type=submit]");
    const resetButton = form.querySelector("button[type=reset]");
    const messageDiv = document.createElement("div");
    messageDiv.style.display = "none";
    messageDiv.style.color = "#ec86b1"; 
    messageDiv.style.fontSize = "1.5rem"; 
    form.appendChild(messageDiv);

    form.addEventListener("submit", function (event) {
      event.preventDefault();
      
      setTimeout(function () {
        form.reset();
        messageDiv.textContent = "¡Mensaje enviado con éxito!";
        messageDiv.style.display = "block";
        setTimeout(function () {
          messageDiv.style.display = "none";
        }, 3000); 
      }, 1000); 
    });

    resetButton.addEventListener("click", function () {
      messageDiv.style.display = "none"; 
    });

    form.addEventListener("input", function () {
      submitButton.disabled = !form.checkValidity();
    });
  });