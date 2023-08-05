<footer>
        <img src="../img/logo_dark.png" alt="logo" class="logo">

        <div class="kontakt">
            <a href="tel:000000000">Tel: +48 000 000 000</a>
            <a href="opinions.php"><button>Wystaw opinie</button></a>
        </div>

    </footer>
<div class="impostor"><img src="../img/impost.png" alt="Scroll up"></div>

<div id="cookie-message">
  We use cookies to improve your experience on our website. By continuing to use our site, you accept our use of cookies.
  <button id="accept-cookies">Got it!</button>
</div>

<script>

// Get the cookie message element
var cookieMessage = document.getElementById("cookie-message");

// Check if the user has already accepted cookies
if (localStorage.getItem("accepted-cookies") === "true") {
  // Hide the cookie message
  cookieMessage.style.display = "none";
} else {
  // Show the cookie message
  cookieMessage.style.display = "flex";
}

// Add an event listener to the accept cookies button
document.getElementById("accept-cookies").addEventListener("click", function() {
  // Set a local storage item to remember that the user accepted cookies
  localStorage.setItem("accepted-cookies", "true");
  // Hide the cookie message
  cookieMessage.style.display = "none";
});
</script>
