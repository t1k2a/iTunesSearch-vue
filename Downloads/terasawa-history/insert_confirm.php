<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    if(!empty($_POST['name']) && !empty($_POST['id']) ){

        $name = $_POST['name'];
        //date型にするために1桁の月日を2桁にフォーマットしてから格納
        $id=$_POST['id'];

    ?>

        <h1>登録確認画面</h1><br>
        名前:<?php echo $name;?><br>
        学籍番号:<?php echo $id;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="insert_result.php" method="POST">
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="insert.php" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
        再度入力を行ってください
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }
    function return_top(){
        return "<a href='".ROOT_URL."'>トップへ戻る</a>";
    }
?>
</body>
</html>
