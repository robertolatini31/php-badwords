<?php
$text = 'PHP (acronimo ricorsivo di PHP: Hypertext Preprocessor, preprocessore di ipertesti; originariamente acronimo di (Personal Home Page) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L\'interprete PHP è un software libero distribuito sotto la PHP License.';
echo "<pre>";
var_dump($text);
"</pre>";

$censored_text = str_replace($_GET['bad_word'], '***', $text);
echo "<pre>";
var_dump($censored_text);
"</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
</body>
</html>