<?php

// Test TXT to Array
$file_name = "txt/test.txt";
$ret_array = file( $file_name );
$count = count($ret_array);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="Author" content="Enin Fujimi">
    <title>Test TXT To Array</title>
</head>
<body>
<h1>
    <a href="/">
        Test TXT To Array
    </a>
</h1>
    <?php for ($i = 0; $i < $count; $i++) : ?>
        <?php echo $i.": ".$ret_array[$i] . "<br>"; ?>
    <?php endfor; ?>

</body>
</html>
