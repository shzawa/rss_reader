<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>Document</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/rss-feed.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/validate.js"></script>
	</head>
	<body>
		<form action="index.php" method="GET" id="form">
			<input type="radio" name="url" value="http://news.yahoo.co.jp/pickup/rss.xml">yahoo.co.jp国内最新情報<br/>
			<input type="radio" name="url" value="https://news.yahoo.co.jp/pickup/computer/rss.xml">yahoo.co.jpITトピックス<br/>
			<input type="radio" name="url" value="https://news.yahoo.co.jp/pickup/economy/rss.xml">yahoo.co.jp経済トピックス<br/>
			<button type="submit" id="button">送信</button>
		</form>
		<div id="output"></div>
	</body>
</html>