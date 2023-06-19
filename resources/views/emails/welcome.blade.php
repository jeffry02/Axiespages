<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Axies</title>
</head>
<style>
  * {
    background: #374151;
  }
  h1 {
    font-size: 18px;
    color: white;
    font-weight: 500;
  }
  .text {
    font-weight: 400;
    font-size: 14px;
    color: white;
    display: flex;
    column-gap: 8px;
  }
</style>
<body>
<h1>Thank you very much {{$request->name}} for subscribing to our website!</h1>

<div class="text">
  <p>AXIES is a sales and purchase site where the most important part of this is YOU {{$request->name}},
  We appreciate that you have chosen our shopping site, I hope you enjoy it and that you help us to continue growing.</p>
  <span>Share the belong link </span><span>"http://Axies.com.ni"</span> <p>with your friends and family, we will thank you very much, In the same way, we share you our social medias</p><span>"https://www.facebook.com/Axies"</span><span>"https://www.instagram.com/Axieshop/"</span>
  <span>So you will be aware of seasonal promotions and discounts.</span>
  <span>and the most important thing that you enjoy your purchases be welcome!</span>
</div>
</body>
</html>
