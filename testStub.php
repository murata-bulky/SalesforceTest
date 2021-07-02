<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>test</title>
</head>
<body>
<?php
	foreach (getallheaders() as $name => $value) {
    	echo "$name: $value\n";
	}
?>
  
  <p>送信された値は<?php echo $_POST["caseId"] ?></p>
  
  //ここにテーブル要素でPOSTで取得した値を表示させる
  //POSTの値は<?php echo $_POST["caseId"] ?>の形式で取得
  
  
  //ここにformで送信する値を設定する。設定した内容は画面上で確認できるようテーブル要素で画面表示する
  <form action="https://contact-omni7--mocecreb.visual.force.com/apex/MemberInfotoCase" method="POST">
    <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="submit" value="submit">
  </form>
</body>
</html>
