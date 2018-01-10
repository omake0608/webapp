<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>購入</title>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.dropotron.min.js"></script>
      <script src="js/skel.min.js"></script>
      <script src="js/skel-layers.min.js"></script>
      <script src="js/init.js"></script>
      <noscript>
          <link rel="stylesheet" href="css/skel.css" />
          <link rel="stylesheet" href="css/style.css" />
          <link rel="stylesheet" href="css/style-wide.css" />
      </noscript>
      <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body>

  <div class="wrapper style1">

      <!-- Header -->
      <div id="header" class="skel-panels-fixed">
          <div id="logo">
              <h1><a>Delivery Express</a></h1>
              <span class="tag">by Fresh Food</span>
          </div>
          <nav id="nav">
              <ul>
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="/cart">Cart</a></li>
              </ul>
          </nav>
      </div>

  <div class="wrapper style1" align="center">
  <form action="/buy" method="POST">
    <?=csrf_field()?>
        <br>
        <?php $user = \Auth::user();
        if ($user) { ?>
    <h2>名前</h2><input type="text" name="name" value="<?php echo "$user->name"; ?>">
        <br>
        <?php if($errors->first('name')):?>
            名前を入力してください。
        <?php endif;?>
    <h2>メールアドレス</h2><input type="text" name="email" value="<?php echo "$user->email"; ?>">
        <br>
    <?php if($errors->first('email')):?>
            Emailを入力してください。
        <?php endif;?>
    <h2>電話番号</h2><input type="text" name="tel" value="<?php echo "$user->tel"; ?>">
        <br>
    <h2>住所</h2><input type="text" name="address" value="<?php echo "$user->addr"; ?>">
        <br>
        <?php } ?>
        <h2>名前</h2><input type="text" name="name">
        <br>
        <?php if($errors->first('name')):?>
            名前を入力してください。
        <?php endif;?>
    <h2>メールアドレス</h2><input type="text" name="email">
        <br>
    <?php if($errors->first('email')):?>
            Emailを入力してください。
        <?php endif;?>
    <h2>電話番号</h2><input type="text" name="tel">
        <br>
    <h2>住所</h2><input type="text" name="address">
        <br>
        <a href="/buy" class="button"> 購入 </a>
        <a href="/cart" class="button"> 戻る </a>
</form>

      <div>
  </body>
</html>
 