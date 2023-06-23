<!DOCTYPE html>
<html lang="english">
  <head>
    <title>exported project</title>
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
      <link href="./landingpage.css" rel="stylesheet" />

      <div class="landingpage-container">
        <div>
          <img
            src="public/external/rectangle251263-25e8-200h.png"
            alt="Rectangle251263"
            class="landingpage-rectangle25"
          />
          <img
            src="public/external/rectangle261264-abej-200h.png"
            alt="Rectangle261264"
            class="landingpage-rectangle26"
          />

          <form method="post">
            <input type="submit" name="signin" value="Sign In" class="landingpage-text" style="background-color: transparent; margin-top:10px;">
            <input type="submit" name="signup" value="Sign Up" class="landingpage-text04" style="background-color: transparent; margin-top:10px;">
          </form>

          <span class="landingpage-text06">
            <span>Pusing mencari SAT dan Comserv?</span>
          </span>
          <span class="landingpage-text08">
            <span>Login untuk melihat berbagai event SAT dan comserv!</span>
          </span>
          <span class="landingpage-text10">
              <img
                src="public/external/logoo.png"
                style="margin-left: 100px; margin-top:-50px;"
              />
          </span>

          <img
            src="public/external/rectangle331271-gn9q-200h.png"
            alt="Rectangle331271"
            class="landingpage-rectangle33"
          />
          <span class="landingpage-text12"><span>Perlu Bantuan?</span></span>
          <img
            src="public/external/frame1271-jfr5.svg"
            alt="Frame1271"
            class="landingpage-frame"
          />

        </div>
      </div>
    </div>
  </body>
</html>



<?php
  include "connection.php";


  if(isset($_POST['signin'])) {
    echo "<script>window.location.href='../web/login.php';</script>";
  }
  if(isset($_POST['signup'])) {
    echo "<script>window.location.href='../web/signup.php';</script>";
  }

?>
