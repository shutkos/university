<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-3</title>
    <style>
        ul{
            display: block;
        }
        li{
            display: inline-block;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
$data = [
    [
        'title' => 'Home',
        'link' => '/'
    ],
    [
        'title' => 'PHP',
        'link' => '/php'
    ],
    [
        'title' => 'functions',
        'link' => '/php/functions'
    ]
]; ?>
<ul>
    <?php
    foreach ($data as $val) {
        if ($val === end($data)) {
            ?>
            <li><?=$val['title']?></li>
            <?php
        } else {
            ?>
            <li><a href="<?=$val['link']?>"><?=$val['title']?></a> / </li>
            <?php
        }
    }
    ?>

</ul>


</body>
</html>
