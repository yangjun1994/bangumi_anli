<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <title>
                        Bangumi Anli Plan α
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
                        <li class="active">
                            <a href="index.php">
                                Home
                                <span class="sr-only">
                                    (current)
                                </span>
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
            <div class="alert alert-danger lowpadmargin" role="alert">
                本网页的推荐为“个人向”，本死宅日常弃番。
            </div>
            <div class="alert alert-info lowpadmargin" role="alert">
                我大概会推荐大量“百合”，“日常”番。同时会同时包含“治愈”与“致郁”番，请仔细甄别。
            </div>
            <h1 class="lowpadmargin">
                Bangumi Anli Plan α
            </h1>
            <h2 class="lowpadmargin">
                Lagrenge的番组安利站
            </h2>
        </div>
        <div class="container-fluid">
            <table class="table table-bordered main-table-striped">
                <tr>
                    <th>
                        番名
                    </th>
                    <th>
                        一句话介绍
                    </th>
                    <th>
                        个人喜爱程度
                    </th>
                    <th>
                        年份
                    </th>
                    <th>
                        春夏秋冬
                    </th>
                    <th>
                        逸站连接
                    </th>
                    <th>
                        是否能百合大法好（我没救了）
                    </th>
                    <th>
                        详情页（还没糊好）
                    </th>
                </tr>

<?php
include('conn.php');
$sql = "SELECT id, name, year, time, intro, b_link, star, yuri FROM bangumi ORDER BY year DESC, time, star DESC";
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
while($bangumi_row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $bangumi_row['name'] . "</td>";
    echo "<td>" . $bangumi_row['intro'] . "</td>";
    echo "<td>" . $star_str[$bangumi_row['star']] . "</td>";
    echo "<td>" . $bangumi_row['year'] . "</td>";
    echo "<td>" . $time_str[$bangumi_row['time']] . "</td>";
    echo "<td>" . get_b_link($bangumi_row['b_link']) . "</td>";
    echo "<td>" . $yuri_str[$bangumi_row['yuri']] . "</td>";
    echo "<td>" . "<a href = detail.php?id=" . $bangumi_row['id'] . ">戳我进入</a>" . "</td>";
    echo "</tr>";
    }
mysqli_close($conn);
?>

</table>
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
