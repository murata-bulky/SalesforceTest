<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>test</title>
</head>
<body>
<?php
	$caseId = "";
	$commonMemberId = "";
	$commonMemberIdHash = "";
	$mailAddress = "";
	$subMailAddress = "";
	
	print("ケースID：".$_GET["Id"]);
	echo '<br>';
	print("共通会員ID：".$_GET["InquiryCmnMmbrId__c"]);
	echo '<br>';
	print("共通会員IDハッシュ：".$_GET["InquiryCmnMmbrIdHash_7pay__c"]);
	echo '<br>';
	print("メールアドレス：".$_GET["Noemail__c"]);
?>
  //ここにformで送信する値を設定する。設定した内容は画面上で確認できるようテーブル要素で画面表示する
  <form action="https://contact-omni7--mocecreb.visual.force.com/apex/MemberInfotoCase" method="POST">
    <input type="text" name="caseId" value="<?php echo htmlspecialchars($caseId, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="text" name="commonMemberId" value="<?php echo htmlspecialchars($commonMemberId, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="text" name="commonMemberIdHash" value="<?php echo htmlspecialchars($commonMemberIdHash, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="text" name="mailAddress" value="<?php echo htmlspecialchars($mailAddress, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="text" name="subMailAddress" value="<?php echo htmlspecialchars($subMailAddress, ENT_QUOTES, 'UTF-8'); ?>">
    
    <input type="submit" value="submit">
  </form>
</body>
</html>