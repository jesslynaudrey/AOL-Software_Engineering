<!DOCTYPE html>
<html lang="english">
  <head>
    <title>SaC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body background="public/external/bg.png">
    <div>
      <link href="./login.css" rel="stylesheet" />

      <div class="login-container">
        <div>

          <form method="post">
            <input type="text" id="username" placeholder="username" name="uname" style="outline: 0px; padding:20px;" class="login-group6798">
            <input class="login-group6801" type="password" placeholder="password" id="password" name="upass" style="outline: 0px; padding:20px;">
            <div class="login-group6799">
              <button type="submit" name="login" class="login-text">
                <span>Login</span>
              </button>
            </div>
          </form>

          <span class="login-text04"><span>Login to your account</span></span>
          <span class="login-text06">
            <img
              src="public/external/logoo.png"
              style="margin-left: 100px; margin-top:-50px;"
            />
          </span>

          <span class="login-text08">
            <span class="login-text09">Dont have an account?</span>
            <a href="signup.php"><span style="color:blue;"><u>Sign up here</u></span></a>
          </span>
          <img
            src="public/external/rectangle2111283-o4o-200h.png"
            alt="Rectangle2111283"
            class="login-rectangle211"
          />
          <div class="login-mingcutearrowupfill">
            <div class="login-group1">
              <a href="index.php">
                <img
                  src="public/external/vectori128-1bum.svg"
                  alt="VectorI128"
                  class="login-vector11"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


<?php
include "connection.php";
$valid = 1;

if (isset($_POST['login'])) {
    session_start();

    $username = $_POST["uname"];
    $pass = $_POST["upass"];

    $_SESSION['uname'] = $username;

    $sql = "SELECT * FROM `pengguna`";
    $dataFromDb = mysqli_query($conn, $sql);

    if ($username == 'admin' && $pass == 'admin12345') {
        echo "<script>window.location.href='../web/home-admin.php';</script>";
    }

    while ($row = mysqli_fetch_assoc($dataFromDb)) {
        if ((($row['Username'] == $username) || ($row['Email'] == $username)) && $row['Pass'] == $pass) {
            $_SESSION['username'] = $username; // Update the session variable name
            echo "<script>window.location.href='../web/home.php';</script>";
        }

        $valid = 0;
    }

    if ($valid == 0) {
        echo "Maaf username / password yang kamu masukan salah";
    }
}
?>

