<html>

<head>
</head>

<body>
<h1>修改個人資料</h1>
<form action="profile.php" method="post" name="f" onsubmit="return check();">

請輸入新密碼:<input type="password" name="pwd"></input>
請輸入新信箱:<input type='text' name='mail'></input>	
請輸入新電話:<input type='text' name='phone'></input>

<button type="button" onclick="history.back()">回上一頁</button>
<input type="submit" value="送出"></input>

<button type="button" onclick="checkdel.php">刪除帳號</button>
</form>
</body>
</html>