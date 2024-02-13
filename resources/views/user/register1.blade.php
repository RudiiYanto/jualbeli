<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/login1.css" />
</head>

<body>
  <div class="container">
    <span class="form__title">REGISTER</span>
    <form class="form">
        <div class="form__group">
        <i class="ri-user-line form__icon"></i>
        <input class="form__input" type="name" name="name" placeholder="Name" />
        <span class="form__bar"></span>
      </div>
      <div class="form__group">
        <i class="ri-user-line form__icon"></i>
        <input class="form__input" type="username" name="username" placeholder="Username" />
        <span class="form__bar"></span>
      </div>
      <div class="form__group">
        <i class="ri-lock-line form__icon"></i>
        <input class="form__input" type="password" name="password" placeholder="Password" />
        <span class="form__bar"></span>
      </div>
      <div class="form__group">
        <i class="ri-lock-line form__icon"></i>
        <input class="form__input" type="password" name="confirmPassword" placeholder="Confirm Password" />
        <span class="form__bar"></span>
      </div>
      <button type="submit" class="form__buttonLOGIN">REGISTER</button>
    </form>
  </div>
</body>

</html>