<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">投稿を見る</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <div class="legend">♥オススメSweets♥</div>
    <div class="description">Post your favorite sweets!!</div>
    <div class="photo"> <img src=https://i.pinimg.com/originals/6c/5d/b6/6c5db6311882b0f3aef2c15986d72d27.jpg width="550" height="400"alt=""></div>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
     <dl class="form-inner">
       <dt class="form-title">店名:</dt>
       <dd class="form-item"><input type="text" name="shop"></dd>
     </dl>
     <dl class="form-inner">
       <dt class="form-title">スイーツ名：</dt>
       <dd class="form-item"><input type="text" name="name" ></dd>
     </dl>
     <dl class="form-inner">
       <dt class="form-title">コメント：</dt>
       <dd class="form-item"><textArea name="naiyou" rows="4" cols="22"></textArea></dd><br>
     </dl>
     <dl class="form-inner">
       <input type="submit" value="送信">
     </dl>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>