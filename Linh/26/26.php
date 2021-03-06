<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/26.less', 'css/26.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Module 26</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/26.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url_path ?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/26.less', 'css/26.css');
        ?>
    <style>
    h3 {
        font-weight:bold;
        margin-top:20px;
        margin-bottom:20px;
        color: #222;
    }
    </style>
</head>

<body>
    <?php include '../26/26-content.php'; ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/26.js"></script>
</body>

</html>