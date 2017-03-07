<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Главная страница</title>
        <meta name="description" content="" />
        <meta name = "viewport" content = "width = 1200">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Для создание адаптивного дизайна -->
        <link rel="shortcut icon" href="favicon.png" />
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" /> <!-- Сетка  -->
        <link rel="stylesheet" href="libs/font-awesome-4.6.1/css/font-awesome.min.css" /> <!-- Модуль шрифтов с иконками https://fortawesome.github.io/Font-Awesome/icons/ -->
        <link rel="stylesheet" href="css/main.css" /> <!-- Стили  -->
        <script src="libs/jquery/jquery-1.11.1.min.js"></script> <!-- jquery  -->
        <script src="js/command.js"></script> <!-- jquery  код-->
    </head>
    <body>
        <div class="wrapper">
            <!--top-block -->
            <div class="context">
                <div class="top-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="menu_header">
                                    <ul> 	 	 	 	 	 	
                                        <li><a href="#">О магазине</a></li>
                                        <li  class="active"><a href="#">Новости</a></li>
                                        <li><a href="#">Шиномонтаж</a></li>
                                        <li><a href="#">Как купить</a></li>
                                        <li><a href="#">Доставка</a></li>
                                        <li><a href="#">Вопросы и ответы</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="block_user">
                                    <ul>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <li><a href="#">Регистрация</a></li>
                                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        <li><a href="#">Войти</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End top-block -->

                <!-- header -->
                <div class="container header">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="logo">
                                <a href="#"><img src="/img/logos.jpg"></a>
                                <span>Интернет-магазин шин и дисков</span>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="phone-line"><span>+7 (906) </span>752-00-88</div>
                            <div class="phone-line"><span>+7 (906) </span>753-00-88</div>
                        </div>
                        <div class="col-xs-4">
                            <div class="ti_adress">
                                Москва,<br> 2-ая Карачаровская д.1 cтр.1 
                            </div>
                            <div class="payment">
                                <img src="/img/payment.png">
                            </div>
                        </div>
                        <div class="col-xs-2 block-basket">
                            <img src="/img/basket.png"  alt="Корзина">  
                            <div class="cart_text">
                                <p class="t_basket">Корзина</p>
                                <p> <span class="r">4</span> товара</p>
                                <p> на <span class="r">13000 руб.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container menu">
                    <!-- menu (Горизонтальное меню) -->
                    <div class="menu">
                        <div class="row">
                            <div class="col-xs-8">
                                <ul>
                                    <li><a href="#">полбор по авто</a></li>
                                    <li ><a href="#">шины</a></li>
                                    <li class="active1"><a href="#">диски</a></li>
                                    <li><a href="#">Услуги</a></li>
                                    <li><a href="#">Акции</a></li>
                                    <li><a href="#">Аксессуары</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-4">
                                <form action="" method="post" class="search_form">
                                    <input type="search" name="q" placeholder="Поиск по наименованию, по артикулу">
                                    <input type="submit" value="">
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- end menu (Горизонтальное меню) -->
                </div>
                <!-- Поиск по параметрам горизонтальный -->
                <div class="container">
                    <div class="row">
                        <div class="nav-filtr-block clearfix">
                            <div class="nav-filtr-in clearfix">
                                <div class="nav-filrr-body">
                                    <div class="nav-param">
                                        <span class="tit_param">Диаметр</span>
                                        <select class="select70">
                                            <option>—</option>
                                        </select>
                                    </div>
                                    <div class="nav-param">
                                        <span class="tit_param">Ширина</span>
                                        <select class="select70">
                                            <option>—</option>
                                        </select>
                                    </div>
                                    <div class="nav-param">
                                        <span class="tit_param pad">Количество</br>
                                            крепежных</br>
                                            отверстий PCD</span>
                                        <select class="select70">
                                            <option>—</option>
                                        </select>
                                    </div>
                                    <div class="nav-param">
                                        <span class="tit_param pad">Диаметр</br>
                                            расположения</br>
                                            отверстий</span>
                                        <select class="select70">
                                            <option>—</option>
                                        </select>
                                    </div>
                                    <div class="nav-param">
                                        <span class="tit_param pad">Диаметр</br>
                                            центр.</br>
                                            отверстия</span>
                                        <select class="select70">
                                            <option>—</option>
                                        </select>
                                    </div>

                                    <div class="nav-param">
                                        <span class="tit_param">Вылет ЕТ</span>
                                        <select class="select70">
                                            <option>—</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="nav-button">
                                    <button class="button1 btn-gor" type="submit"><span>Подобрать</span></button>
                                </div>
                                <div class="add-settings">
                                    <a href="#">Расширенные настройки</a>
                                </div>
                            </div>
                        </div>
                        <!-- Скрытый блог расширенной навигаций -->
                        <div class="nav-filtr-block add-settings-nav-filtr-block clearfix">
                            <div class="nav-filtr-in clearfix">
                                <div class="nav-filrr-body">
                                    <select id="select-nav-manufacturers" name="manufacturer" class="select180"><option value="ALL" selected="">Все производители</option>
                                        <option value="michelin">Michelin</option>
                                        <option value="goodyear">Goodyear</option>
                                    </select>
                                </div>
                                <div class="nav-filrr-body">
                                    <div class="cheks-gor-item">
                                        <div class="cheks-bloks-type-disk">
                                            <input type="checkbox">
                                            <img src="/img/type_disk/shtamp.png">
                                            <label class="icon-shtamp" >
                                                <span>Штамповочный </span>
                                            </label>
                                        </div>
                                        <div class="cheks-bloks-type-disk">
                                            <input type="checkbox">
                                            <img src="/img/type_disk/litoy.png">
                                            <label class="icon-litoy" >
                                                <span>Литой</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-filrr-body">
                                    <span class="tit_param">Цвет</span>
                                    <select id="select-nav-max-speed" name="" class="select"><option value="ALL" selected="">-</option>
                                        <option value="N">Красный</option>
                                        <option value="P">Синий</option>
                                        <option value="Q">Белый</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!-- END Поиск по параметрам горизонтальный -->



                <div class="container">
                    <div class="row">
                        <div class="h_title">
                            <h1>Диски</h1>                          
                        </div>

                        <div class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <li><a href="#">Диски</a></li>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <li><a href="#">Все бренды</a></li>
                        </div>
                    </div>
                </div>

                <div class="container"> <!-- catalog --> 
                    <div class="row">
                        <div class="brand-catalog">
                            <h1>Каталог дисков</h1>
                            <div class="list-catalog">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/bfgoodrich.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски bfgoodrich</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/bridgestone.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски bridgestone</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/continental.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски continental</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/cooper.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски cooper</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/dunlop.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски dunlop</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vvd">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="v">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/bfgoodrich.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски bfgoodrich</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/bridgestone.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски bridgestone</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/continental.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски continental</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/cooper.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски cooper</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/dunlop.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски dunlop</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vvd">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="v">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/bfgoodrich.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски bfgoodrich</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/bridgestone.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски bridgestone</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/continental.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски continental</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/cooper.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски cooper</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/dunlop.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски dunlop</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vvd">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="v">
                                            <div class="img_link">
                                                <img src="/img/brands_shine/barum.jpg"  alt="">
                                            </div>
                                            <div class="text_link">
                                                <span>Диски barum</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>     <!-- End catalog --> 


            </div> <!-- End context -->
            <div class="footer">
                <div class="inline">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="in_link">
                                    <a href="#">
                                        <div class="inl_icon"><i class="fa fa-users fa-3x" aria-hidden="true"></i></div>
                                        <div class="inl_title">Удовледворение потребностей</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="in_link">
                                    <a href="#">
                                        <div class="inl_icon"><i class="fa fa-truck fa-3x" aria-hidden="true"></i></div>
                                        <div class="inl_title">доставка</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="in_link">
                                    <a href="#">
                                        <div class="inl_icon"><i class="fa fa-refresh fa-3x" aria-hidden="true"></i></div>
                                        <div class="inl_title">безопасная упаковка</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="in_link">
                                    <a href="#">
                                        <div class="inl_icon"><i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i></div>
                                        <div class="inl_title">Положительные отзывы</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <div class="row line_footer ">
                        <div class="col-xs-6">
                            <div class="logo">
                                <a href="#" class="white">n-type.net</a>
                                <span >Интернет-магазин шин и дисков</span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="fl_contact">
                                <ul class="fl_contact_list">
                                    <li><span>Телефоны:</span><a href="">+7 (906) 752-00-88</a></li>
                                    <li><a href="">+7 (906) 753-00-88</a></li>
                                    <li><span>Email:</span><a href="">shintrayd@bk.ru</a></li>
                                </ul>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="footer_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="fw_title">ШИНЫ</div>
                                <ul class="fw_list">
                                    <li><a href="#">Подбор шин по автомобилю</a></li>
                                    <li><a href="#">Зимние шины</a></li>
                                    <li><a href="#">Летние шины</a></li>
                                    <li><a href="#">Шины легковые</a></li>
                                    <li><a href="#">Шины грузовые</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-3">
                                <div class="fw_title">ДИСКИ</div>
                                <ul class="fw_list">
                                    <li><a href="#">Подбор дисков по автомобилю</a></li>
                                    <li><a href="#">Литые диски</a></li>
                                    <li><a href="#">Стальные диски</a></li>
                                </ul></div>
                            <div class="col-xs-3">
                                <div class="fw_title">УСЛУГИ</div>
                                <ul class="fw_list">
                                    <li><a href="#">Заправка и ремонт автокондиционеров</a></li>
                                    <li><a href="#">Сезонное хранение</a></li>
                                    <li><a href="#">Ремонт дисков</a></li>
                                    <li><a href="#">Доставка по Москве ,МО и регионам России</a></li>
                                </ul></div>
                            <div class="col-xs-3">
                                <div class="fw_title">ПОДПИСКА НА НОВОСТИ</div>
                                <ul class="fw_list">
                                    <span class="subscription">Нравится ли вам наше предложение? Не пропустите наши специальные предложения!</span>
                                    <img src="img/subscription.jpg" alt="ПОДПИСКА" />
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row item_footer">
                        <div class="col-xs-8">
                        </div>
                        <div class="col-xs-4">
                            <div class="it_soc">
                                <ul class="social_ul">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook-square fa-lg" aria-hidden="true" ></i> facebook</a></li>
                                    <li><a href="#"class="twitter"><i class="fa fa-twitter-square fa-lg" aria-hidden="true" ></i> twitter</a></li>
                                    <li><a href="#" class="google"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true" ></i> google+</a></li>
                                    <li><a href="#" class="youtube"><i class="fa fa-youtube-square fa-lg" aria-hidden="true" ></i> youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row e_footer">
                        <div class="col-xs-12">
                            2016 © sitengines.ru по всем вопросам пишите по адресу info@sitengines.ru
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end wrapper -->
    </body>
</html>