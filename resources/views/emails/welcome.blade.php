<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Axies</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
</head>
<style>
  * {
    background: #403f4c;
    font-family: 'Tilt Neon', cursive, sans-serif;
  }

  body{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 80px;
  }

  .main {
    width: 1700px;
    display: flex;
    flex-direction: column;
    row-gap: 25px;
    align-items: center;
  }

  h1 {
    font-size: 22px;
    color: white;
    font-weight: 500;
  }

  .text {
    font-weight: 400;
    font-size: 18px;
    color: white;
    display: flex;
    flex-direction: column;
    row-gap: 10px;
    text-align: justify;
  }

  #link{
    color: #00bbf9;
  }

  #footer{
    font-size: 22px;
  }
</style>
<body>
<div class="main">
  <h1>Thank you very much {{$name}} for subscribing to our website!</h1>

  <div class="text">
    <p>AXIES is a sales and purchase site where the most important part of this is YOU {{$name}}. We appreciate that you have chosen our shopping site, I hope you enjoy it and that you help us to continue growing. Share the belong link <span id="link">"http://Axies.com.ni"</span> with your friends and family we will thank you very much, In the same way, we share you our social medias <span id="link">"https://www.facebook.com/Axies"</span> or <span id="link">"https://www.instagram.com/Axieshop/"</span> So you will be aware of seasonal promotions and discounts.</p>
    <span id="footer">And the most important thing that you enjoy your purchases be welcome!</span>
  </div>
</div>
</body>
</html>
