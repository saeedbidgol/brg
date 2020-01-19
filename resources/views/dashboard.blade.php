<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>داشبورد</title>
</head>

<body>
    <div class="row">
        <div class="col-lg-2 sidebar">
            <div class="user-info">
                <div class="user-image"></div>
                <div class="user-welcome-text">
                    <p><span>سعید</span> عزیز</p>
                    <p>خوش آمدید!</p>
                </div>
            </div>
            <ul class="menu">
                <li class="item active">
                    <a href="#">
                        <span class="list-icon" id="dashboard"></span>
                        <span>داشبورد</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <span class="list-icon" id="new-person"></span>
                        <span>ثبت اطلاعات</span>
                    </a>
                </li>
                <li class="item ">
                    <a href="#">
                        <span class="list-icon" id="list-person"></span>
                        <span>لیست اشخاص</span>
                    </a>
                </li>
            </ul>
            <div class="function">
                <div class="log-out">
                    <a href="#">
                        <span id="log-out"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="main-view">
                
            </div>
        </div>
    </div>
</body>

</html>