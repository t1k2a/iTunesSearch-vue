

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>登録画面</title>
</head>
<body>
  <!DOCTYPE html>
  <html lang="ja">
  <head>
  <meta charset="UTF-8">
        <title>youkoso</title>
  </head>
  <body>
    <h1>今日は来てくれてありがとう！よかったら学籍番号と名前を教えてね！</h1>
     <form action="insert.php" method="POST">
          追加データ：<br><br>
           学籍番号  <input type="text" name="id" value=""><br><br>
          名前<input type="text" name="name" value=""><br><br>
          <input type="submit" name="btnSubmit" value="追加">
      </form>

  <?php
  if(isset($_POST['id']) && isset($_POST['name'])){
       try{
       $pdo= new PDO('mysql:host=localhost:8889;dbname=TerasawaLab;charset=utf8','root','root');
       echo "接続成功"."<br>";
       }catch(PDOException $Exception){
          die('接続に失敗しました:'.$Exception->getMessage());
       }

       $id = $_POST['id'];
       $name = $_POST['name'];


        $sql = "insert into visitor(id,name) values(:id,:name);";
        $query = $pdo -> prepare($sql);
        $query -> bindValue(':id',"$id");
        $query -> bindValue(':name',"$name");
        $query -> execute();

        $sql2 = "select * from profiles";
        $query2 = $pdo -> prepare($sql2);

        $query2 -> execute();

        $result = $query2 -> fetchall(PDO::FETCH_ASSOC);

        echo "以下の内容で登録しました！"."<br>"."名前:".$name."<br>"."学籍番号:".$id;

   }
 ?>

</body>
</html>
