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

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="js/command.js"></script> <!-- jquery  код-->
        <script>
            $(function () {
                $("#tabs").tabs();
            });
        </script>
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
                                    <li class="active1"><a href="#">шины</a></li>
                                    <li><a href="#">диски</a></li>
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
                        <div class="breadcrumb">
                            <li><a href="#">Главная</a></li>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <li><a href="#">Шины</a></li>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <li><a href="#">Michelin X-ICE North 3 205/55 R16 94T</a></li>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="block_product clearfix">
                            <div class="col-xs-3">
                                <div class="pr_img_block ">
                                    <div class="pr_img">
                                        <img src="/img/bfgoodrich-all-terrain.jpg">
                                        <label class="ch_search"></label>
                                    </div>
                                    <div class="pr_article">
                                        <span>Код продукта:</span> 4565215
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="pr_block-top clearfix">
                                    <div class="pr_head">
                                        <div class="pr_title">Michelin X-ICE North 3 205/55 R16 </div>
                                        <div class="text_ch_param">155/70 R13 75Q</div>
                                        <div class="label_icon_pr">
                                            <label class="icon-winter_ch"> Зима </label>
                                        </div>
                                    </div>
                                    <div class="logo_manufacture">
                                        <img src="/img/brands_shine/dunlop.jpg">
                                    </div>
                                </div>
                                <div class="pr_block_add clearfix">
                                    <div class="pr_price">
                                        <div class="ch_price"><span>2&nbsp;080</span> РУБ. x
                                            <select name="counter" class="counter">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            шт. = <span>10&nbsp;800</span> РУБ.

                                            <div class="button1 pr_btn">
                                                Добавить в корзину
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr_block_desc clearfix">
                                    <div class="pr_desc_tit">Технические характеристики:</div>
                                    <div class="pr_desc_item clearfix">
                                        <div class="pr_desc_parametr">Наличие:</div>
                                        <div class="pr_desc_value">В наличии</div>
                                    </div>
                                    <div class="pr_desc_item clearfix">
                                        <div class="pr_desc_parametr">Размерность:</div>
                                        <div class="pr_desc_value">155/70 R13</div>
                                    </div>
                                    <div class="pr_desc_item clearfix">
                                        <div class="pr_desc_parametr">Сезон:</div>
                                        <div class="pr_desc_value">Зимние</div>
                                    </div>
                                    <div class="pr_desc_item clearfix">
                                        <div class="pr_desc_parametr">Шипы:</div>
                                        <div class="pr_desc_value">Нет</div>
                                    </div>
                                    <div class="pr_desc_item clearfix">
                                        <div class="pr_desc_parametr">RunFlat:</div>
                                        <div class="pr_desc_value">Нет</div>
                                    </div>
                                    <div class="pr_desc_link"><a href="#">-> Все характеристики</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container"> 
                    <div class="row">
                        <!-- tabs --> 
                        <div class="tabs_my">
                            <div id="tabs">
                                <ul>
                                    <li><a href="#tabs-1">Описание</a></li>
                                    <li><a href="#tabs-2">Характеристики</a></li>
                                    <li><a href="#tabs-3">Фото</a></li>
                                    <li><a href="#tabs-4">Карта</a></li>
                                    <li><a href="#tabs-5">Отзывы(0)</a></li>
                                </ul>
                                <div id="tabs-1">
                                    <p>Комментарий для ВК</p>
                                </div>
                                <div id="tabs-2">
                                    <p>Комментарий для Facebook</p>
                                </div>
                                <div id="tabs-3">
                                    <p>Комметарий от WordPress</p>          
                                </div>
                            </div>
                        </div>
                        <!-- end tabs --> 
                    </div>
                </div>     



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