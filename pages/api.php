<?php
// Сделаем вид что тут контроллер для страницы API
$api = new ApiClass();
$employees = $api->getEmployees();
$employees = json_decode($employees->getBody(), true);
?>
<div class="row mb-5">
    <h1>Задание 1 Api</h1>
    <hr>
    <a class="btn btn-primary" href="/">Открыть главную</a>
</div>
<div class="row">
    <div class="col gx-5 gy-5">
        <div class="card card-body">
            <div class="card-title">Получить информацию о сотрудниках</div>
            <?php
            if ($employees['status'] == 'success') {
                ?>
                <div class="fw-bold">Количество сотрудников - <?php echo count($employees['data']); ?></div>
                <table class="table">
                    <thead>
                    <tr>
                        <td>id</td>
                        <td>employee_name</td>
                        <td>employee_salary</td>
                        <td>employee_age</td>
                        <td>profile_image</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($employees['data'] as $employee) {
                        echo '<tr>';
                        echo '<td>' . $employee["id"] . '</td>';
                        echo '<td>' . $employee["employee_name"] . '</td>';
                        echo '<td>' . $employee["employee_salary"] . '</td>';
                        echo '<td>' . $employee["employee_age"] . '</td>';
                        echo '<td>' . $employee["profile_image"] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            <?php } else {
                echo $employees['message'];
            }
            ?>
        </div>
    </div>
    <div class="col gx-5 gy-5">
        <div class="card card-body">
            <div class="card-title">Добавить сотрудника</div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Имя пользователя" id="name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Баксы</span>
                <input type="number" class="form-control" placeholder="Зарплата" id="salary">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Года</span>
                <input type="number" class="form-control" placeholder="Возраст" id="age">
            </div>
            <button class="btn btn-success" id="create_user">Создать сотрудника</button>
        </div>
    </div>
</div>