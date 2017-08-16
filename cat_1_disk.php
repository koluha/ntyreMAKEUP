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


                <div class="container">
                    <div class="row">
                        <!-- slider (Слайдер) -->
                        <div class="slider">

                        </div>
                        <!-- end slider (Слайдер) -->
                    </div>
                </div>



                <div class="container context_base">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="left-filtr">
                                <div class="left-title-filtr"> 
                                    <ul>
                                        <li class="first active"><a href="">По параметрам</a></li><li class="last"><a href="">По автомобилю</a></li>
                                    </ul>
                                </div> 
                                <!--left-filter-param-shina  -->
                                <div class="left-filter-param-shina">
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <div id="select-manufacturers">
                                                <select id="select-bus-manufacturers" name="manufacturer" class="select"><option value="ALL" selected="">Все производители</option>
                                                    <option value="michelin">Michelin</option>
                                                    <option value="goodyear">Goodyear</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param">
                                            <div class="left-sel-row">
                                                <div class="left-params_section">
                                                    <!-- блок 1 -->
                                                    <div class="left-sel-section">
                                                        <div class="label_f">Ширина</div> 
                                                        <select>
                                                            <option value="">—</option>
                                                            <option data-value="arrFilter_313_930177377" value="Y">145</option>
                                                            <option data-value="arrFilter_313_778719264" value="Y">155</option>
                                                        </select>
                                                    </div>
                                                    <!-- блок 2 --> 
                                                    <span class="inline-help slash">/</span>
                                                    <div class="left-sel-section">
                                                        <div class="label_f">Высота</div> 
                                                        <select>
                                                            <option value="">—</option>
                                                            <option data-value="arrFilter_292_269248583" value="Y">10.5</option>
                                                            <option data-value="arrFilter_292_3808539628" value="Y">35</option>
                                                        </select>
                                                    </div>
                                                    <!-- блок 3 -->
                                                    <span class="inline-help radius">R</span>
                                                    <div class="left-sel-section">
                                                        <div class="label_f">Диаметр</div> 
                                                        <select>
                                                            <option value="">—</option>
                                                            <option data-value="arrFilter_311_945058907" value="Y">13</option>
                                                            <option data-value="arrFilter_311_2788221432" value="Y">14</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <div class="left-ch-section">
                                                <div class="check-block">
                                                    <input type="checkbox" name="arrFilter_312_743589328" id="arrFilter_312_743589328" value="Y">						
                                                    <label class="icon-winter" for="arrFilter_312_3042645098">
                                                        <span>Зимние</span>
                                                    </label>
                                                </div>
                                                <div class="check-block">
                                                    <input type="checkbox" name="arrFilter_312_3042645098" id="arrFilter_312_3042645098" value="Y">						
                                                    <label class="icon-summer" for="arrFilter_312_3042645098">
                                                        <span>Летние</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <div class="left-ch-section">
                                                <div class="check-block">
                                                    <input type="checkbox" name="arrFilter_316_1532327238" id="arrFilter_316_1532327238" value="Y">
                                                    <label class="icon-spikes" for="arrFilter_316_1532327238"><span>Шипы</span></label>
                                                </div>
                                                <div class="check-block">
                                                    <input type="checkbox" name="arrFilter_316_1532327238" id="arrFilter_316_1532327238" value="Y">
                                                    <label class="icon-flat" for="arrFilter_316_1532327238"><span>Run Flat</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <button class="button1 pick_up" type="submit" name="box_type" value="params"><span>Подобрать</span></button>
                                        </div>
                                    </div>
                                </div>  
                                <!--left-filter-param-shina  -->

                                <div class="left-filter-param-shina-auto">
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <div id="select-manufacturers">
                                                <select id="select-mark" name="manufacturer" class="select"><option value="">Выберите из списка</option>
                                                    <option value="Acura">Acura</option>
                                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <div id="select-manufacturers">
                                                <select id="select-model" name="model" class="select">
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <div id="select-manufacturers">
                                                <select id="select-modification" name="Modification" class="select">
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="block-param">
                                        <div class="parent-param-center">
                                            <button class="button1 pick_up" type="submit" name="box_type" value="params"><span>Подобрать</span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end Context -->

            <div class="footer">
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