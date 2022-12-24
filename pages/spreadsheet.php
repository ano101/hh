<?php
if ($_POST) {
    $Spreadsheet = new SpreadsheetClass();
    $data = array(
        array(
            'name' => $_POST['name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
        )
    );
    for ($i = 1; $i <= $_POST['row']; $i++) {
        $Spreadsheet->generateExample($data);
    }
    $Spreadsheet->save();
}
?>

<div class="row mb-5">
    <h1>Задание 2 Excel</h1>
    <hr>
    <a class="btn btn-primary" href="/">Открыть главную</a>
</div>
<div class="row">
    <div class="card card-body">
        <form name="gen" method="post" action="index.php?route=spreadsheet">
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Имя " name="name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Фамилия" name="last_name" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="number" class="form-control" placeholder="Количество строк" name="row" required>
            </div>
            <button type="submit" class="btn btn-primary">Генератор</button>
        </form>
        <?php
        if ($_POST) {
            ?>
            <div class="alert-success alert mt-5"><a href="https://kotlyar.space/file.xlsx">Скачать файл</a></div>
        <?php }
        ?>
    </div>
</div>