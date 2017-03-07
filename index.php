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
                <!-- main-filter-tabs (основной блок фильтр) -->
                <div class="container main-filter-tabs">
                    <div class="row">
                        <div class="col-xs-6 no-margin padding-right">
                            <!-- filt-title (заголовок основной блок фильтр) -->
                            <div class="filt-title">
                                <div class="tag-filtr-title">
                                    <h1>Подбор шин</h1>
                                    <ul>
                                        <li  class="first active"><a href="">По параметрам</a></li>
                                        <li  class="last"><a href="">По автомобилю</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end filt-title (заголовок основной блок фильтр) -->
                            <!-- filter-param-shina (фильтр по параметру шины) Блок переключатель-->
                            <div class="filter-param-shina">


                                <!-- filt-body (тело основной блок фильтр) -->
                                <div class="filt-body">
                                    <!-- sel-row-line (два селекта в строку) -->
                                    <div class="sel-row-line">
                                        <div class="left-col">
                                            <div id="select-manufacturers">
                                                <select id="select-bus-manufacturers" name="manufacturer" class="select"><option value="ALL" selected="">Все производители</option>
                                                    <option value="michelin">Michelin</option>
                                                    <option value="goodyear">Goodyear</option>
                                                    <option value="kumho">Kumho</option>
                                                    <option value="toyo">Toyo</option>
                                                    <option value="nokian">Nokian</option>
                                                    <option value="pirelli">Pirelli</option>
                                                    <option value="bridgestone">Bridgestone</option>
                                                    <option value="nitto">Nitto</option>
                                                    <option value="sava">Sava</option>
                                                    <option value="dunlop">Dunlop</option>
                                                    <option value="cordiant">Cordiant</option>
                                                    <option value="continental">Continental</option>
                                                    <option value="gislaved">Gislaved</option>
                                                    <option value="goodrich">BFGoodrich</option>
                                                    <option value="tigar">Tigar</option>
                                                    <option value="viatti">Viatti</option>
                                                    <option value="yokohama">Yokohama</option>
                                                    <option value="matador">Matador</option>
                                                    <option value="nexen">Nexen</option>
                                                    <option value="maxxis">Maxxis</option>
                                                    <option value="hankook">Hankook</option>
                                                    <option value="kama">Кама</option>
                                                    <option value="kleber">Kleber</option>
                                                    <option value="firestone">Firestone</option>
                                                    <option value="fulda">Fulda</option>
                                                    <option value="tunga">Tunga</option>
                                                    <option value="marshal">Marshal</option>
                                                    <option value="falken">Falken</option>
                                                    <option value="contyre">Contyre</option>
                                                    <option value="zetum">Zetum</option>
                                                    <option value="roadstone">Roadstone</option>
                                                    <option value="general">General Tire</option>
                                                    <option value="amtel">Amtel</option>
                                                    <option value="kirov tire">Кировский ш-з</option>
                                                    <option value="barum">Barum</option></select>
                                            </div>
                                        </div>
                                        <div class="right-col">
                                            <div id="select-season">
                                                <select id="select-bus-season" name="season" class="select">
                                                    <option value="summer">Летние</option>
                                                    <option value="winter" selected="">Зимние</option></select>
                                            </div>
                                        </div>
                                        <div class="sel-row">
                                            <!-- params_section (параметры селекта) -->
                                            <div class="params_section">
                                                <div class="sel-section">
                                                    <div class="label">Ширина</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_313_930177377" value="Y">145</option>
                                                        <option data-value="arrFilter_313_778719264" value="Y">155</option>
                                                        <option data-value="arrFilter_313_88540131" value="Y">165</option>
                                                        <option data-value="arrFilter_313_475804322" value="Y">175</option>
                                                        <option data-value="arrFilter_313_2613325421" value="Y">185</option>
                                                        <option data-value="arrFilter_313_2195660588" value="Y">195</option>
                                                        <option data-value="arrFilter_313_1364924988" value="Y">205</option>
                                                        <option data-value="arrFilter_313_1212164989" value="Y">215</option>
                                                        <option data-value="arrFilter_313_1668118718" value="Y">225</option>
                                                        <option data-value="arrFilter_313_2054572543" value="Y">235</option>
                                                        <option data-value="arrFilter_313_892854072" value="Y">245</option>
                                                        <option data-value="arrFilter_313_741142137" value="Y">255</option>
                                                        <option data-value="arrFilter_313_117554618" value="Y">265</option>
                                                        <option data-value="arrFilter_313_505056507" value="Y">275</option>
                                                        <option data-value="arrFilter_313_2575470644" value="Y">285</option>
                                                        <option data-value="arrFilter_313_1352232971" value="Y">305</option>
                                                        <option data-value="arrFilter_313_971552197" value="Y">310</option>
                                                    </select>
                                                </div>
                                                <span class="inline-help slash">/</span>
                                                <div class="sel-section">
                                                    <div class="label">Высота</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_292_269248583" value="Y">10.5</option>
                                                        <option data-value="arrFilter_292_3808539628" value="Y">35</option>
                                                        <option data-value="arrFilter_292_3693793700" value="Y">40</option>
                                                        <option data-value="arrFilter_292_2889884971" value="Y">45</option>
                                                        <option data-value="arrFilter_292_3308380389" value="Y">50</option>
                                                        <option data-value="arrFilter_292_3042645098" value="Y">55</option>
                                                        <option data-value="arrFilter_292_3994858278" value="Y">60</option>
                                                        <option data-value="arrFilter_292_2658551721" value="Y">65</option>
                                                        <option data-value="arrFilter_292_4144464487" value="Y">70</option>
                                                        <option data-value="arrFilter_292_2272098024" value="Y">75</option>
                                                        <option data-value="arrFilter_292_1889509032" value="Y">80</option>
                                                    </select>
                                                </div>
                                                <span class="inline-help radius">R</span>
                                                <div class="sel-section">
                                                    <div class="label">Диаметр</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_311_945058907" value="Y">13</option>
                                                        <option data-value="arrFilter_311_2788221432" value="Y">14</option>
                                                        <option data-value="arrFilter_311_3510096238" value="Y">15</option>
                                                        <option data-value="arrFilter_311_1212055764" value="Y">16</option>
                                                        <option data-value="arrFilter_311_1060745282" value="Y">17</option>
                                                        <option data-value="arrFilter_311_2944839123" value="Y">18</option>
                                                        <option data-value="arrFilter_311_3632373061" value="Y">19</option>
                                                        <option data-value="arrFilter_311_2322626082" value="Y">20</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- params_section (параметры селекта) -->
                                        </div>
                                    </div>
                                    <!-- sel-row-line (два селекта в строку) -->
                                    <!-- ch-section (чеки) -->
                                    <div class="ch-section">
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
                                        <div class="check-block">
                                            <input type="checkbox" name="arrFilter_316_1532327238" id="arrFilter_316_1532327238" value="Y">
                                            <label class="icon-spikes" for="arrFilter_316_1532327238"><span>Шипы</span></label>
                                        </div>
                                        <div class="check-block">
                                            <input type="checkbox" name="arrFilter_316_1532327238" id="arrFilter_316_1532327238" value="Y">
                                            <label class="icon-flat" for="arrFilter_316_1532327238"><span>Run Flat</span></label>
                                        </div>
                                    </div>
                                    <!-- ch-section (чеки) -->
                                    <div class="but-row">
                                        <button class="button1 pick_up" type="submit" name="box_type" value="params"><span>Подобрать</span></button>
                                    </div>
                                </div>
                                <!-- end filt-body (тело основной блок фильтр) -->
                            </div>
                            <!-- end filter-param-shina (фильтр по параметру шины) -->

                            <div class="filter-param-shina-auto">
                                <div class="filt-body">
                                    <div class="filt-body-par">
                                        <div class="form-line">
                                            <div class="form-line-title">Марка</div>
                                            <select id="select-mark" name="manufacturer" class="select" ><option value="">Выберите из списка</option>
                                                <option value="Acura">Acura</option>
                                                <option value="Alfa Romeo">Alfa Romeo</option>
                                                <option value="Aston Martin">Aston Martin</option>
                                                <option value="Audi">Audi</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Bentley">Bentley</option>
                                                <option value="Cadillac">Cadillac</option>
                                                <option value="Chery">Chery</option>
                                                <option value="Chevrolet">Chevrolet</option>
                                                <option value="Chrysler">Chrysler</option>
                                                <option value="Citroen">Citroen</option>
                                                <option value="Daewoo">Daewoo</option>
                                                <option value="Daihatsu">Daihatsu</option>
                                                <option value="Datsun">Datsun</option>
                                                <option value="Dodge">Dodge</option>
                                                <option value="FAW">FAW</option>
                                                <option value="Ferrari">Ferrari</option>
                                                <option value="Fiat">Fiat</option>
                                                <option value="Ford">Ford</option>
                                                <option value="GAZ">ГАЗ</option>
                                                <option value="Geely">Geely</option>
                                                <option value="GreatWall">GreatWall</option>
                                                <option value="Haima">Haima</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Hummer">Hummer</option>
                                                <option value="Hyundai">Hyundai</option>
                                                <option value="Infiniti">Infiniti</option>
                                                <option value="Iran Khodro">Iran Khodro</option>
                                                <option value="Isuzu">Isuzu</option>
                                                <option value="Iveco">Iveco</option>
                                                <option value="Jaguar">Jaguar</option>
                                                <option value="Jeep">Jeep</option>
                                                <option value="Kia">Kia</option>
                                                <option value="Lamborghini">Lamborghini</option>
                                                <option value="Land Rover">Land Rover</option>
                                                <option value="Lexus">Lexus</option>
                                                <option value="Lifan">Lifan</option>
                                                <option value="Lincoln">Lincoln</option>
                                                <option value="Lotus">Lotus</option>
                                                <option value="MaRussia">MaRussia</option>
                                                <option value="Maserati">Maserati</option>
                                                <option value="Maybach">Maybach</option>
                                                <option value="Mazda">Mazda</option>
                                                <option value="McLaren">McLaren</option>
                                                <option value="Mercedes">Mercedes</option>
                                                <option value="Mini">Mini</option>
                                                <option value="Mitsubishi">Mitsubishi</option>
                                                <option value="Nissan">Nissan</option>
                                                <option value="Opel">Opel</option>
                                                <option value="Peugeot">Peugeot</option>
                                                <option value="Pontiac">Pontiac</option>
                                                <option value="Porsche">Porsche</option>
                                                <option value="Ravon">Ravon</option>
                                                <option value="Renault">Renault</option>
                                                <option value="Rolls-Royce">Rolls-Royce</option>
                                                <option value="Rover">Rover</option>
                                                <option value="Saab">Saab</option>
                                                <option value="Seat">Seat</option>
                                                <option value="Skoda">Skoda</option>
                                                <option value="Smart">Smart</option>
                                                <option value="SsangYong">SsangYong</option>
                                                <option value="Subaru">Subaru</option>
                                                <option value="Suzuki">Suzuki</option>
                                                <option value="Tagaz">ТагАЗ</option>
                                                <option value="Tesla">Tesla</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="UAZ">УАЗ</option>
                                                <option value="VAZ">Lada</option>
                                                <option value="VW">Volkswagen</option>
                                                <option value="Volvo">Volvo</option>
                                                <option value="Vortex">Vortex</option>
                                                <option value="ZAZ">ZAZ</option>
                                            </select>
                                        </div>
                                        <div class="form-line">
                                            <div class="form-line-title">Модель</div>
                                            <select id="select-model" name="model" class="select" >
                                            </select>
                                        </div>
                                        <div class="form-line">
                                            <div class="form-line-title">Модификация</div>
                                            <select id="select-modification" name="Modification" class="select" >
                                            </select>
                                        </div>
                                    </div>
                                    <div class="but-row">
                                        <button class="button1 pick_up" type="submit" name="box_type" value="params"><span>Подобрать</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-6 no-margin padding-left">
                            <!-- filt-title (заголовок основной блок фильтр) -->
                            <div class="filt-title">
                                <div class="tag-filtr-title tag-filtr-title-disk">
                                    <h1>Подбор дисков</h1>
                                    <ul>
                                        <li  class="first active"><a href="">По параметрам</a></li>
                                        <li  class="last"><a href="">По автомобилю</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-param-disk">
                                <!-- filt-body (тело основной блок фильтр) -->
                                <div class="filt-body-d">
                                    <!-- sel-row-line (два селекта в строку) -->
                                    <div class="sel-row-line">
                                        <div class="left-col">
                                            <div id="select-manufacturers">
                                                <select id="select-bus-manufacturers" name="manufacturer" class="select"><option value="ALL" selected="">Все производители</option>
                                                    <option value="Alutec">Alutec</option>
                                                    <option value="Borbet">Borbet</option>
                                                    <option value="K&amp;K">K&amp;K</option>
                                                    <option value="KFZ">KFZ</option>
                                                    <option value="Konig">Konig</option>
                                                    <option value="LS">LS</option>
                                                    <option value="MAK">MAK</option>
                                                    <option value="Nitro">Nitro</option>
                                                    <option value="OZ">OZ</option>
                                                    <option value="Replica">Replica</option>
                                                    <option value="Skad">Skad</option>
                                                    <option value="Sword">Sword</option>
                                                    <option value="Tech-line">Tech-line</option>
                                                    <option value="Trebl">Trebl</option>
                                                    <option value="Yamato">Yamato</option>
                                                    <option value="КРКЗ">КРКЗ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="right-col">
                                            <div id="select-season">
                                                <select id="select-bus-season" name="season" class="select">
                                                    <option value="summer">Литые</option>
                                                    <option value="winter" selected="">Штамповочные</option></select>
                                            </div>
                                        </div>
                                        <div class="sel-row">
                                            <!-- params_section (параметры селекта) -->
                                            <div class="params_section_disk str">
                                                <div class="sel-section">
                                                    <div class="label">Диаметр</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_313_930177377" value="Y">145</option>
                                                        <option data-value="arrFilter_313_778719264" value="Y">155</option>
                                                        <option data-value="arrFilter_313_88540131" value="Y">165</option>
                                                    </select>
                                                </div>
                                                <span class="inline-help slash">X</span>
                                                <div class="sel-section">
                                                    <div class="label">Ширина</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_292_269248583" value="Y">10.5</option>
                                                        <option data-value="arrFilter_292_3808539628" value="Y">35</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="params_section_disk">
                                                <div class="sel-section">
                                                    <div class="label">PCD</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_313_930177377" value="Y">145</option>
                                                        <option data-value="arrFilter_313_778719264" value="Y">155</option>
                                                        <option data-value="arrFilter_313_88540131" value="Y">165</option>
                                                    </select>
                                                </div>
                                                <span class="inline-help slash">X</span>
                                                <div class="sel-section">
                                                    <div class="label">Вылет ET</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_292_269248583" value="Y">10.5</option>
                                                        <option data-value="arrFilter_292_3808539628" value="Y">35</option>

                                                    </select>
                                                </div>
                                                <span class="inline-help slash">X</span>
                                                <div class="sel-section">
                                                    <div class="label">ЦО (DIO)</div> 
                                                    <select>
                                                        <option value="">—</option>
                                                        <option data-value="arrFilter_292_269248583" value="Y">10.5</option>
                                                        <option data-value="arrFilter_292_3808539628" value="Y">35</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <!-- params_section (параметры селекта) -->

                                            <div class="but-row">
                                                <button class="button1 pick_up" type="submit" name="box_type" value="params"><span>Подобрать</span></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- sel-row-line (два селекта в строку) -->


                                </div>
                                <!-- end filt-body (тело основной блок фильтр) -->
                            </div>



                            <!-- end filt-title (заголовок основной блок фильтр) -->
                            <div class="filter-param-disk-auto" style="display: none;">
                                <div class="filt-body-d">
                                    <div class="filt-body-par">
                                        <div class="form-line">
                                            <div class="form-line-title">Марка</div>
                                            <select id="select-mark" name="manufacturer" class="select"><option value="">Выберите из списка</option>
                                                <option value="Acura">Acura</option>
                                                <option value="Alfa Romeo">Alfa Romeo</option>
                                                <option value="Aston Martin">Aston Martin</option>
                                                <option value="Audi">Audi</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Bentley">Bentley</option>
                                                <option value="Cadillac">Cadillac</option>
                                                <option value="Chery">Chery</option>
                                                <option value="Chevrolet">Chevrolet</option>
                                                <option value="Chrysler">Chrysler</option>
                                                <option value="Citroen">Citroen</option>
                                                <option value="Daewoo">Daewoo</option>
                                                <option value="Daihatsu">Daihatsu</option>
                                                <option value="Datsun">Datsun</option>
                                                <option value="Dodge">Dodge</option>
                                                <option value="FAW">FAW</option>
                                                <option value="Ferrari">Ferrari</option>
                                                <option value="Fiat">Fiat</option>
                                                <option value="Ford">Ford</option>
                                                <option value="GAZ">ГАЗ</option>
                                                <option value="Geely">Geely</option>
                                                <option value="GreatWall">GreatWall</option>
                                                <option value="Haima">Haima</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Hummer">Hummer</option>
                                                <option value="Hyundai">Hyundai</option>
                                                <option value="Infiniti">Infiniti</option>
                                                <option value="Iran Khodro">Iran Khodro</option>
                                                <option value="Isuzu">Isuzu</option>
                                                <option value="Iveco">Iveco</option>
                                                <option value="Jaguar">Jaguar</option>
                                                <option value="Jeep">Jeep</option>
                                                <option value="Kia">Kia</option>
                                                <option value="Lamborghini">Lamborghini</option>
                                                <option value="Land Rover">Land Rover</option>
                                                <option value="Lexus">Lexus</option>
                                                <option value="Lifan">Lifan</option>
                                                <option value="Lincoln">Lincoln</option>
                                                <option value="Lotus">Lotus</option>
                                                <option value="MaRussia">MaRussia</option>
                                                <option value="Maserati">Maserati</option>
                                                <option value="Maybach">Maybach</option>
                                                <option value="Mazda">Mazda</option>
                                                <option value="McLaren">McLaren</option>
                                                <option value="Mercedes">Mercedes</option>
                                                <option value="Mini">Mini</option>
                                                <option value="Mitsubishi">Mitsubishi</option>
                                                <option value="Nissan">Nissan</option>
                                                <option value="Opel">Opel</option>
                                                <option value="Peugeot">Peugeot</option>
                                                <option value="Pontiac">Pontiac</option>
                                                <option value="Porsche">Porsche</option>
                                                <option value="Ravon">Ravon</option>
                                                <option value="Renault">Renault</option>
                                                <option value="Rolls-Royce">Rolls-Royce</option>
                                                <option value="Rover">Rover</option>
                                                <option value="Saab">Saab</option>
                                                <option value="Seat">Seat</option>
                                                <option value="Skoda">Skoda</option>
                                                <option value="Smart">Smart</option>
                                                <option value="SsangYong">SsangYong</option>
                                                <option value="Subaru">Subaru</option>
                                                <option value="Suzuki">Suzuki</option>
                                                <option value="Tagaz">ТагАЗ</option>
                                                <option value="Tesla">Tesla</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="UAZ">УАЗ</option>
                                                <option value="VAZ">Lada</option>
                                                <option value="VW">Volkswagen</option>
                                                <option value="Volvo">Volvo</option>
                                                <option value="Vortex">Vortex</option>
                                                <option value="ZAZ">ZAZ</option>
                                            </select>
                                        </div>
                                        <div class="form-line">
                                            <div class="form-line-title">Модель</div>
                                            <select id="select-model" name="model" class="select">
                                            </select>
                                        </div>
                                        <div class="form-line">
                                            <div class="form-line-title">Модификация</div>
                                            <select id="select-modification" name="Modification" class="select">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="but-row">
                                        <button class="button1 pick_up" type="submit" name="box_type" value="params"><span>Подобрать</span></button>
                                    </div>
                                </div>
                            </div>




                        </div>


                    </div>
                </div>
                <!-- end main-filter-tabs (основной блок фильтр) -->



                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Интернет-магазин автомобильных шин и дисков N-TYPE.NET</h1>
                            <p>Основной деятельностью магазина BlackTyres является продажа автомобильных шин и колесных дисков, а также оказание сопутствующих услуг – шиномонтаж, сезонное хранение колес и доставка шин и дисков по Москве, МО и по России. Интернет магазин BlackTyres.ru работает на рынке с 2000 года и предлагает своим покупателям только качественные шины и диски, а также высокий сервис подбора и обслуживания.</p>
                            <p>В интернет магазине BlackTyres.ru представлен широкий ассортимент авто шин и дисков от ведущих мировых производителей: диски Replica, Скад, Mak, OZ, K&K и шины Nokian, Bridgestone, Continental, Dunlop, Gislaved, Goodyear, Michelin, Pirelli, Hankook, Yokohama.</p>
                            <p>Вы можете легко и быстро подобрать и купить летние, всесезонные или зимние шины и стальные, кованые или литые диски для любой марки автомобиля и на любой вкус. Удобный интерфейс каталога и качественный сервис поможет Вам сделать не только правильный желаемый выбор, но и получить много интересной и полезной информации о шинах и дисках. У нас Вы осуществите подбор шин и дисков по типу, размеру, марке шин, марке автомобиля, ценовому диапазону.</p>
                            <p>Возвращаясь снова и снова к этим страницам: к публикациям тестов зимних и летних шин, последних новинок, обзорам шин и колесных дисков, хитов продаж и отзывов автолюбителей, различным сезонным акциям и распродажам, посетители, как правило, принимают единственно верное и уверенное решение при покупке. В интернет магазине BlackTyres.ru все предусмотрено для покупателя, начиная от сервиса, доставки и заканчивая качеством автошин и колесных дисков, их наличием и качеством хранения шин и дисков. И это дает каждому из Вас гарантию в том, что купленные в нашем магазине и доставленные к месту назначения в пределах России, диски или шины прослужат Вам хорошую службу.</p>
                            <h1>Расшифровка параметров шин</h1>
                            <img src="/img/unnamed.jpg">
                            <h1>Расшифровка параметров дисков</h1>
                            <img src="/img/img_1325.jpg"> 
                        </div>
                    </div>
                </div>
            </div><!-- end Context -->

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