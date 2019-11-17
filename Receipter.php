<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>HTML内でのPHP処理</title>
</head>
<body>
<?php
$response = [
    'TestAPI' => 'OK'
];

return json_encode($response);
?>
</body>
</html>