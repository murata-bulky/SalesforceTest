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
	
	print("ケースID：".$_GET["caseId"]);
	echo '<br>';
	print("共通会員ID：".$_GET["commonMemberId"]);
	echo '<br>';
	print("共通会員IDハッシュ：".$_GET["commonMemberIdHash"]);
?>
  <form action="https://contact-omni7--mocecreb--c.visualforce.com/apex/MemberInfotoCase" method="POST">
  	
  	<table>
	    <tbody>
	        <tr>
	            <td>ケースID</td>
	            <td><input type="text" name="caseId" value="<?php echo htmlspecialchars($caseId, ENT_QUOTES, 'UTF-8'); ?>"></td>
	        </tr>
	        <tr>
	            <td>会員ID</td>
	            <td><input type="text" name="commonMemberId" value="<?php echo htmlspecialchars($commonMemberId, ENT_QUOTES, 'UTF-8'); ?>"></td>
	        </tr>
	        <tr>
	            <td>会員IDハッシュ</td>
	            <td><input type="text" name="commonMemberIdHash" value="<?php echo htmlspecialchars($commonMemberIdHash, ENT_QUOTES, 'UTF-8'); ?>"></td>
	        </tr>
	        <tr>
	            <td>メールアドレス</td>
	            <td><input type="text" name="mailAddress" value="<?php echo htmlspecialchars($mailAddress, ENT_QUOTES, 'UTF-8'); ?>"></td>
	        </tr>
	        <tr>
	            <td>サブメールアドレス</td>
	            <td><input type="text" name="subMailAddress" value="<?php echo htmlspecialchars($subMailAddress, ENT_QUOTES, 'UTF-8'); ?>"></td>
	        </tr>
	    </tbody>
	</table>
    <input type="submit" value="submit">
  </form>
</body>
</html>