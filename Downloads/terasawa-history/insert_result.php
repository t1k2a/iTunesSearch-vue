

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録結果画面</title>
</head>
<body>

    <?php

    session_start();
    $name = $_SESSION['name'];
    $id = $_SESSION['id'];

    //db接続を確立
    $insert_db = new PDO('mysql:host=localhost:8889;dbname=TerasawaLab;charset=utf8','root','root');

    //DBに全項目のある1レコードを登録するSQL
    $insert_sql = "INSERT INTO visitor(id,name)"
            . "VALUES(:id,:name)";

    //クエリとして用意
    $insert_query = $insert_db->prepare($insert_sql);

    //SQL文にセッションから受け取った値＆現在時をバインド
    $insert_query->bindValue(':name',$name);
    $insert_query->bindValue(':id',$id);
    $insert_query->bindValue(':newDate',time());

    //SQLを実行
    $insert_query->execute();

    //接続オブジェクトを初期化することでDB接続を切断
    $insert_db=null;
    ?>

    <h1>登録結果画面</h1><br>
    名前:<?php echo $name;?><br>
    学籍番号:<?php echo $id;?><br>
    以上の内容で登録しました。<br>

    <a href="insert.php">登録画面に戻る</a>

</body>

</html>
