<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-2</title>
</head>
<body>
<?php
$data = [
    ['title' => 'Privacy',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, vel.'
    ],
    ['title' => 'Cookies',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, vel.'
    ],
];

foreach($data as $val) {
    ?>
    <h2><?=$val['title']?></h2>
    <p><?=$val['description']?></p>
<?php
}
?>

</body>
</html>
