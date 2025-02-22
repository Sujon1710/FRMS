<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
          <!-- iconlink -->  
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
 <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Whole background container */
.container {
  background: radial-gradient(
    circle,
    rgba(209, 213, 227, 0.6278886554621849) 0%,
    rgba(202, 222, 204, 0.5214460784313726) 100%
  );
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  background-attachment: scroll;
  width: 100%;
  height: 100vh;
  position: relative;
}

/* User Icon */
.user-icon {
  color: white;
  position: absolute;
  font-size: 40px;
  top: 0%;
  left: 50%;
  transform: translate(-50%, -20%);
  outline: 2px solid white;
  overflow: hidden;
  border-radius: 50%;
  width: 70px;
  height: 70px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: 0px 0px 15px 5px rgba(167, 155, 155, 0.7);
}

/* Login form field container */
.login-form-fields {
  background: linear-gradient(
    90deg,
    rgba(110, 223, 155, 0.4430147058823529) 0%,
    rgba(130, 211, 232, 0.6250875350140056) 43%
  );
  position: absolute;
  width: 400px;
  height: 500px;
  border-radius: 20px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0px 0px 20px 2px rgba(247, 242, 242, 0.877),
    0px 0px 1px 0px rgba(238, 233, 233, 0.897);
}

/* All input */
.login-input-group {
  z-index: -1;
  position: absolute;
  width: 350px;
  height: 350px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
}

/* Name and password */
.name,
.password {
  width: 300px;
  margin: 20px auto;
  background-color: white;
  padding: 10px 20px;
  border-radius: 5px;
  position: relative;
}

.name i,
.password i {
  position: absolute;
  left: 0px;
  top: 50%;
  transform: translateY(-50%);
  padding: 11px 11px;
  border-radius: 5px 0px 0px 5px;
  background-color: rgb(236, 228, 228);
}

.name input,
.password input {
  border: none;
  padding-left: 22px;
  font-size: 1rem;
}
.name input:focus,
.password input:focus {
  border: none;
  outline: none;
}

.name input::placeholder,
.password input::placeholder {
  font-size: 0.9rem;
}

.name-password-login-button {
  margin-top: 25%;
}

/* login button */
.login-btn button {
  border: none;
  width: 300px;
  margin-left: 25px;
  padding: 0 5px;
  box-sizing: border-box;
  display: inline-block;
  position: absolute;
  background-color: rgba(0, 162, 255, 1);
  color: white;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1.2rem;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 500;
  height: 40px;
  text-align: center;
}

.login-btn button:hover {
  background-color: rgba(0, 162, 255, 0.5);
}

/* forget and sign up container */
.forget-password-sign-up-container {
  width: 100%;
  height: 30px;
  margin-top: 25%;
  position: relative;
}

/* forget password */
.forget-password {
  position: absolute;
  left: 10%;
}
.forget-password a {
  color: rgb(41, 41, 82);
  font-size: 1rem;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 400;
}

.forget-password a:hover {
  text-decoration: none;
  text-shadow: 0px 0px 8px rgba(33, 10, 165, 0.9),
    0px 0px 12px rgba(20, 201, 60, 0.7);
}

/* Sign up */
.sign-up {
  position: absolute;
  right: 10%;
}

.sign-up a {
  color: white;
  font-size: 1rem;
  padding: 5px 20px;
  background-color: rgba(0, 162, 255, 1);
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  text-decoration: none;
  border-radius: 5px;
  text-align: center;
  margin-right: -9px;
}

.sign-up a:hover {
  background-color: rgba(0, 162, 255, 0.5);
}

 </style>
</head>

    <body>
  <div class="container">
    <div class="login-form">
      <div class="login-form-fields">
        <div class="login-input-group">
          <div class="name-password-login-button">

            <!-- User Icon -->
            <div class="user-icon">
              <i class="fa-solid fa-user"></i>
            </div>

            <form action="{{route('sign_up')}}" method="post">
                @csrf
              <!-- Name Field -->
              <div class="name">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="email" id="user-name" placeholder="Username">
              </div>

              <!-- Password Field -->
              <div class="password">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" id="user-password" placeholder="Password">
              </div>

              <!-- Login Button Field -->
              <div class="login-btn">
                <button type="submit">Log In</button>
              </div>
            </form>

            <!-- Forget Password and Sign Up Field -->
            <div class="forget-password-sign-up-container">
              <div class="forget-password"><a href="#">Forget Password?</a></div>
              <div class="sign-up"><a href="#">Sign Up</a></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</body>
</html>