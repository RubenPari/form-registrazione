<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Form Using HTML And CSS Only</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container log-in-container">
        <form action="#">
            <h1>Login</h1>
            <input type="email" placeholder="Email"/>
            <input type="password" placeholder="Password"/>
            <a href="#">Forgot your password?</a>
            <button onclick="submitLogin()">Log In</button>
        </form>
    </div>
</div>
</body>
<script>
    function submitLogin() {
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        const formData = new FormData();
        formData.append("email", email);
        formData.append("password", password);

        const xhr = new XMLHttpRequest();

        xhr.open("POST", "/api/login", true);
        xhr.send(formData);

        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // set session token
                    sessionStorage.setItem("token", response.token);
                    window.location.href = "/admin-login";
                } else {
                    alert(response.message);
                }
            } else {
                alert("Error: " + xhr.status);
            }
        }
    }
</script>
</html>
