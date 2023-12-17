function validateLogin() {
    // Get input values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // For simplicity, check if both fields are non-empty
    if (username !== "" && password !== "") {
        // Redirect to another page (replace "target.html" with the desired page)
        window.location.href = "index.php";
    } else {
        alert("Please enter both username and password.");
    }
}
