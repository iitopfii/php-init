<?php
$url = $_SERVER['REQUEST_URI'];
$page = '';
if($url == '/'){
    $page = 'pages/home.php';
}else{
    $page = "pages/".str_replace('/','',$url).".php";
    if(!file_exists($page)){
        $page = 'pages/404.php';
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-screen h-screen bg-slate-200 flex transition-all">
       <?php include_once('layouts/sidebar.php') ?>
        <div class="w-full flex-col">
            <?php include_once('layouts/header.php') ?>
            <div class="p-5">
                <?php include_once($page) ?>
            </div>
        </div>
    </div>
</body>
</html>