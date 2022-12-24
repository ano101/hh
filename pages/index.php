<div class="row mb-5">
    <h1>Задания</h1>
    <hr>
</div>
<div class="row gx-5 gy-5">
    <div class="col-md-4">
        <div class="card card-body align-items-center">
            <div class="card-icon"><i class="bi bi-braces"></i></div>
            <div class="card-title">Задание 1</div>
            <div class="card-text"><a class="btn btn-primary" href="/index.php?route=api">Перейти</a></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-body align-items-center">
            <div class="card-icon"><i class="bi bi-braces"></i></div>
            <div class="card-title">Задание 2</div>
            <div class="card-text"><a class="btn btn-primary" href="/index.php?route=spreadsheet">Перейти</a></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-body align-items-center">
            <div class="card-icon"><i class="bi bi-braces"></i></div>
            <div class="card-title">Задание 3</div>
            <div class="card-text"><a class="btn btn-primary" href="/index.php?route=pic">Перейти</a></div>
            <div class="alert alert-danger mt-3">Картинки генерируются на лету, ожидайте</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body align-items-center">
            <div class="card-icon"><i class="bi bi-braces"></i></div>
            <div class="card-title">Задание 4</div>
            <div class="alert alert-info">Зачем вы обычно исполняете скрипты php в режиме cli?</div>
            <ul>
                <li>Крон</li>
                <li>CMS (Laravel)</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body align-items-center">
            <div class="card-icon"><i class="bi bi-braces"></i></div>
            <div class="card-title">Задание 5</div>
            <div class="alert alert-info">Как и в каких ситуациях вы бы использовали Trait?</div>
            <p>С помощью Trait мы можем объединить методы (одного отношения), и использовать их не дублирая в разных классах. Например</p>
            <code>public function setAccount(Account $account)<br>
                {<br>
                $this->account()->associate($account);<br>
                return $this;<br>
                }<br>
                <br>
                public function getAccount()<br>
                {<br>
                return $this->getAttribute('account');<br>
                }<br>
                <br>
                public function account()<br>
                {<br>
                return $this->belongsTo(Account::class, 'account_id', 'id');<br>
                }</code>
            <p>Создаем trait HasAccountTrait и помещаем туда эти методы</p>
            <p>В классах пишем</p>
            <code>use HasAccountTrait</code>
        </div>
    </div>
</div>