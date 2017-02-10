<?php
$id = $_GET['id'];

include('conn.php');
$sql = "SELECT id, name, year, time, intro, b_link, star, yuri, pic FROM bangumi WHERE id = $id";
$result = mysqli_query ($conn, $sql);
$star_str=array("","☆","☆☆","☆☆☆","☆☆☆☆","☆☆☆☆☆");
$time_str=array("","冬季新番（1月番）","春季新番（4月番）","夏季新番（7月番）","秋季新番（10月番）");
$yuri_str=array("没有百合QAQ","轻微百合元素（可能勉强）","轻百合","百合");
function get_b_link($b1) {
    if ($b1 != Null) {
        return "<a href='".$b1."'>戳我进入</a>";
    }
    else return "无";
}
function get_pic($b1) {
    if ($b1 != Null) {
        return "<img src='".$b1."' height=300px width=300px/>";
    }
    else return "假装这里有个图片";
}

$bangumi_row = mysqli_fetch_array($result);

$name = $bangumi_row['name'];
$intro = $bangumi_row['intro'];
$star = $star_str[$bangumi_row['star']];
$year = $bangumi_row['year'];
$time = $time_str[$bangumi_row['time']];
$b_link = get_b_link($bangumi_row['b_link']);
$yuri = $yuri_str[$bangumi_row['yuri']];
$pic = get_pic($bangumi_row['pic']);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        <?php echo $name; ?> - Bangumi Anli Plan α
                    </title>
                    <link href="https://lib.1994.io/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
                    </link>
                    <link href="core.css" rel="stylesheet">
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="color-main">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        Bangumi Anli Plan α
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.php">
                                About
                            </a>
                        </li>
                        <li class="dropdown">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid main-title">
            <h1 class="lowpadmargin">
                <?php echo $name; ?>
            </h1>
        </div>
        <div class="container-fluid">
<p style = 'font-size:20px'>
    <?php echo $pic; ?><br />
    番名: <?php echo $name; ?><br />
    一句话介绍： <?php echo $intro; ?><br />
    个人喜爱程度： <?php echo $star; ?><br />
    年份： <?php echo $year; ?><br />
    春夏秋冬： <?php echo $time; ?><br />
    逸站连接： <?php echo $b_link; ?><br />
    是否能百合大法好（我没救了）： <?php echo $yuri; ?><br />
</p>
</div>
<div class="container-fluid">
    <footer class="center">
        Lagrenge 2017-2333
    </footer>
</div>
<script src="https://lib.1994.io/jquery/jquery-3.1.1.min.js">
</script>
<script src="https://lib.1994.io/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js">
</script>
