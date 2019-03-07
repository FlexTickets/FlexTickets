<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <!-- link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- My custom styles -->
        <link href="css/style.css" rel="stylesheet">

        <title>FlexTickets</title>
        <link rel="shortcut icon" type="image/ico" href="img/tickets-favicon.ico"/>
    </head>
    <body>

        <!-- Header -->
        <header role="navigation">
            <!-- Navbar -->
            <nav class="navbar navbar-dark bg-dark fixed-top scrolling-navbar">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand font-italic font-weight-normal ml-md-5">FlexTickets</a>
                    <div>
                        <a href="#" id="registration" class="text-white font-weight-normal"><ins>Регистрация</ins></a>
                        <button type="button" id="enter" class="btn btn-outline-white mr-md-5">Войти</button>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
        </header>

        <!-- Intro -->
        <section>
            <div class="jumbotron jumbotron-fluid">
                <!-- Content -->
                <div class="container-fluid">
                    <!--Grid row-->
                    <div class="flex-row">
                        <!--Grid column-->
                        <div class="col-lg-6 pt-xl-3 white-text text-center text-md-center wow fadeIn" data-wow-delay="1s">
                            <h1 class="h1-responsive font-weight-bold font-italic mt-xl-5">FlexTickets</h1>
                            <h2 class="h2-responsive font-weight-bold font-italic mt-xl-4">это помощь организаторам ивентов во
                                    всех аспектах работы с билетами</h2>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
        </section>

        <!-- How does it works? -->
        <section>
            <div class="container">
                <h2 class="h2-responsive font-weight-bold text-center">Как это работает?</h2>
                <!-- Card deck -->
                <div class="card-deck mb-4">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">QR-код</h4>
                            <hr>
                            <h5 class="h5-responsive font-weight-normal">Главная наша изюминка это два QR-кода на билете.
                                Первый - собственно информация о билете: номер, мероприятие, если необходимо:
                                регистрационная информация, информация о посадочном месте. А второй - электронно-цифровая подпись
                                для проверки подлинности билета.</h5>
                            </div>
                        </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">Мобильные приложения</h4>
                            <hr>
                            <h5 class="h5-responsive font-weight-normal">Проверять билеты, а так же печатать их  на мероприятии
                                можно с помощью обычных смартфонов, установив на них наши мобильные приложения. Но для печати,
                                все-таки потребуется портативный чековый принтер с Bluetooth, который вы можете взять у нас на прокат
                                или приобрести, например, в ROZETKA.</h5>
                        </div>
                    </div>
                </div>
                <!-- Card deck -->
                <div class="card-deck mb-4">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">Страница регистрации</h4>
                            <hr>
                            <h5 class="h5-responsive font-weight-normal">Если у вас нет своего сайта или создание страницы
                                регистрации на ивент вызывает затруднения, вы сможете создать эту страницу с помощью нашего
                                конструктора либо нашего специалисата. Эту страницу мы разместим на нашем веб-сервере на Amazon.</h5>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">Оплата билетов</h4>
                            <hr>
                            <h5 class="h5-responsive font-weight-normal">Создав у нас страницу регистрации на мероприятие,
                                вы сможете подключить возможность online оплаты билетов. Кроме того, в своем личном кабинете вы
                                можете создать пользователя для продажи билетов за наличные. Если ваш будущий посетитель не
                                хочет оплачивать билет online, он может пройти регистрацию и вместо билета получить флаер,
                                который обменяет у вас на билет после оплаты наличными.</h5>
                        </div>
                    </div>
                </div>
                <!-- Card deck -->
                <div class="card-deck mb-4">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">Реклама в сети</h4>
                            <hr>
                            <h5 class="h5-responsive font-weight-normal">По вашему желанию, мы разместим информацию о вашем
                                ивенте на главной странице нашего сайта, а так же проведем рекламную кампанию в соц.сетях (SMM).</h5>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold">Экспорт регистрационной информации</h4>
                            <hr>
                            <h5 class="h5-responsive font-weight-normal">После мероприятия, мы можем передать вам в удобном
                                для вас формате информацию о зарегистрировавшихся посетителях вашего ивента. И, конечно же,
                                мы предоставим вам детальную иформацию о приобретенных билетах.</h5>
                        </div>
                    </div>
                </div>
                <!-- Card deck -->
            </div>
        </section>

        <!-- Footer -->
        <footer class="container-fluid pt-lg-4 bg-dark">
            <!--Grid row-->
            <div class="d-lg-flex flex-row text-white justify-content-center py-lg-1">
                <div class="col-md-auto common-contacts">
                    <span>ООО "Флекспэй сервис"</span>
                </div>
                <div class="col-md-auto common-contacts">
                    <span><i class="fa fa-phone"></i> +380 (50) 237-61-54</span>
                </div>
                <div class="col-md-auto common-contacts">
                    <a href="mailto:flextickets@gmail.com" class="text-white"><i class="fa fa-envelope"></i> flextickets@gmail.com</a>
                </div>
            </div>
            <!--Grid row-->
            <div class="d-lg-flex flex-row text-white text-center justify-content-center py-lg-1">
                <div class="col-md-auto">
                    <h6 class="h6-responsive">© FlexPay 2019</h6>
                </div>
                <div class="col-md-auto">
                    <a href="#" class="text-white">Условия использования и политика конфиденциальности</a>
                </div>
                <div class="col-md-auto">
                    <h6 class="h6-responsive">Мы используем reCaptcha v3</h6>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Initialize animation -->
        <script type="text/javascript">new WOW().init();</script>

    </body>
</html>