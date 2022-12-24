<?php
$jpg = $_SERVER['DOCUMENT_ROOT'].'/assets/pic/jpg.jpg';
$png = $_SERVER['DOCUMENT_ROOT'].'/assets/pic/png.png';
$picJPEG = new WaterMarkClass($jpg);
$picJPEG->generationWaterMark();
$picPNG = new WaterMarkClass($png);
$picPNG->generationWaterMark();
?>
<div class="row mb-5">
    <h1>Задание 3 WaterMark</h1>
    <hr>
    <a class="btn btn-primary" href="/">Открыть главную</a>
</div>
<div class="row">
    <div class="col gy-5 gx-5">
        <div class="card card-body">
            <img src="/newpng.png">
        </div>
        <div class="card card-body">
            <img src="/newjpg.jpg">
        </div>
    </div>
</div>

