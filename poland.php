<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Польша</h1>
                    <div class="lead">
                        <b>Столица</b>: Варшава<br>
                        <b>Официальный язык</b>: польский<br>
                        <b>Валюта</b>: PLN - злотый<br>
                        <b>Территория</b>: 322 575 км²<br>
                        <b>Население</b>: 38.5 млн человек<br>
                        <b>Часовой пояс</b>: UTC +1. Разница с Астаной - 5 часов (зимнее время) и 4 часа (летнее время)
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="decorative-divider" preserveAspectRatio="none" viewBox="0 0 100 100">
        <polygon fill="#F8F9FB" points="0 100 100 100 100 0"></polygon>
    </svg>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <p>Польская Республика располагается в умеренном климатическом поясе. Климат постепенно меняется от морского к континентальному. Над территорией страны проходят многочисленные воздушные массы. Вследствие этого погода очень изменчива, климат довольно разнообразный. Это создает некоторые трудности при прогнозировании дальнейшей погоды. Из-за столкновения воздушных масс и атмосферных перепадов в разные годы она может быть разной. Также важную роль на формирование климата Польши играет рельеф страны, который ускоряет движение воздуха над территорией.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Интересные факты про Польшу не могут обойти ее великую историю, накопившуюся с X века до современности. Именно в это время формируется первая государственность: Краковская и Гнезенская Польша. После них настает период более известного объединения – Речи Посполитой. Ее существование продлилось около 200 лет. Стоит сказать, что стране пришлось нелегко: каждый зарился на территории Центральной Европы. Польша практически не выходила из состояния войны. Несмотря на это, поляки с должным относились и к развитию страны: строились университеты, проектировались дома и дворцы. Инфраструктура росла на глазах, и никакие войны не могли этому помешать.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="POLAND: Winter Wonderland" src="https://i.vimeocdn.com/video/674010913_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/248465461?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">POLAND: Winter Wonderland<br>© Nathaniel Connella 2017</figcaption>
                </figure>

                <hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Польша. Интересные факты о Польше" src="https://i.ytimg.com/vi/QAsT2d7IP3c/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/QAsT2d7IP3c?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Польша. Интересные факты о Польше<br>© CoolTimes 2017</figcaption>
                </figure>

            </div>
        </div>
    </div>
</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
            <li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
            <li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
            <li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <!--<li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>-->
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Традиции и правила поведения в Польше очень тесно связаны с религией.</p>

        <p>При общении с поляками лучше не высказывать каких-либо оскорбительных мыслей по поводу католицизма и церкви вообще.</p>
        <p>Так как посещение костелов открыто для всех желающих, то стоит и тут придерживаться некоторых правил. Например, во время службы не стоит шуметь и мешать прихожанам слушать проповедь. Лучше всего оставаться в задних рядах прихожан, либо и вовсе находясь сбоку от скамей для верующих.</p>
        <p>В Польше запрещено употребление алкогольных напитков и курение в общественных местах. Для этого существуют специальные заведения.</p>
        <p>Что касается обращения, то невежливо обращаться к малознакомому человеку по имени, очень невежливым считается обращаться по фамилии, это может даже оскорбить местного жителя. Нежелательно обращаться также по названию профессии, чтобы позвать официанта или другой обслуживающий персонал лучше воспользоваться принятым здесь обращением «пани» или «пан».</p>
        <p>Поляки считаются народом, любящим праздники, соблюдающим традиции, поддерживающим давние обычаи.</p>

        <div class="row">
            <div class="col">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Нерабочие дни:</h6>
                        <ul>
                            <li>1 января — Новый год</li>
                            <li>1 мая — Праздник труда</li>
                            <li>3 мая — Праздник конституции</li>
                            <li>15 августа — Вознесение Богоматери, Праздник Польской армии</li>
                            <li>1 ноября — День Всех Святых</li>
                            <li>11 ноября — День независимости</li>
                            <li>25, 26 декабря — Рождество</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bg-secondary">
                    <div class="card-body">
                        <h6 class="title-decorative">Памятные даты, рабочие дни:</h6>
                        <ul>
                            <li>13 апреля – День памяти жертв Катыни</li>
                            <li>1 марта – День "проклятых солдат"</li>
                            <li>8 мая – Национальный праздник победы и свободы</li>
                            <li>1 августа – Национальный день памяти Варшавского восстания</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Между Казахстаном и Польшой существует <strong>визовый</strong> режим въезда. При пересечении границы необходимо предъявить загранпаспорт с польской визой.</p>

                <p>Документы, необходимые для получения визы:</p>

                <ul>
                    <li>действительный загранпаспорт;</li>
                    <li>анкета с приклеенной фотографией (3,5 х 4,5 см);</li>
                    <li>ксерокопия паспорта (страница с фотографией);</li>
                    <li>оригинал приглашения или туристический ваучер.</li>
                </ul>
                <p>Для получения полной информации о порядке выдачи визы следует обратиться в Посольство Польши.</p>

                <p>Срок действия паспорта должен истекать не менее, чем через 3 месяца, считая от даты планируемого выезда из Польши; паспорта с меньшим сроком действия не принимаются.</p>

                <p>Въезд осуществляется на основе действующих паспортов.</p>

                <p>На сегодняшний день нельзя добраться из Казахстана в Польшу прямым рейсом. Однако с мая 2018 года польская авиакомпания LOT начнет осуществлять прямые рейсы между столицами.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Шенгенская виза</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                        <span class="figure-caption">с 8 мая 2018</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Варшава - Астана</div>
                                <span>пн, ср, пт, сб</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Астана - Варшава</div>
                                <span>вт, чт, сб, вс</span>
                            </div>
                        </li>
                    </ul>
                    <div class="card-footer p-3">
                        <a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="custom">
    <div class="container">
        <h2>Таможенный контроль</h2>

        <p><i class="icon icon-link"></i> Сайт таможенной службы Польши - <a href="https://granica.gov.pl/?v=ru" target="_blank">granica.gov.pl</a></p>

        <h5>Беспошлинный ввоз</h5>
        <p>К гражданам стран не входящих в ЕС отношение на границе строгое. Иностранцы могут ввозить в Польшу ограниченное количество продуктов и личные вещи на определенную сумму. На тип продукции, стоимость багажа влияет расположение таможни, способ въезда, возраст туриста. Ввозимые на территорию государства товарные единицы должны отвечать следующим требованиям:</p>
        <ol>
            <li>Можно импортировать продукты и личные вещи, только находящиеся в личном багаже.</li>
            <li>Не облагается пошлиной некоммерческая продукция, подарки</li>
            <li>Стоимость личных вещей в багаже не должна превышать установленную норму для совершеннолетних и малолетних лиц.</li>
        </ol>

        <p>Разрешено провозить в Польшу медикаменты ненаркотического типа для личного использования. При подсчете стоимости вещей лекарства не учитываются. При обнаружении некоторых категорий лекарственных средств таможенник может потребовать рецепт или любое другое подтверждение необходимости приема препарата (больничный лист, справку от врача, мед карту).</p>

        <h5>Что считается личными вещами</h5>
        <p>Собираясь в Польшу, следует обязательно ознакомиться с таможенными правилами. Постановление, разрешающее ввозить личные вещи на определенную сумму звучит размыто. Перед сбором чемоданов, надо разобраться, какие вещи на польской таможне считаются личными и каковы условия их ввоза.</p>

        <p>Если турист заезжает на сухопутном транспорте, его багаж должен оцениваться на сумму не более 300 евро. Прилетев на самолете, с собой можно взять вещей на 430 евро. Подросткам до 15 лет положено иметь багаж не дороже 150 евро. У иностранца не возникнет проблем в Польше на пропускном пункте, если в его чемодане будут находиться следующие вещи:</p>

        <ol>
            <li>Техника, не более одной единицы каждого вида. Это может быть плеер, фотоаппарат, ноутбук, запасные детали и прочее;</li>
            <li>Средства гигиены в расчете на одного человека;</li>
            <li>Несколько комплектов одежды по сезону;</li>
            <li>Ювелирные изделия (не более 50 грамм). При подсчете веса учитываются камни и драгоценный металл;</li>
            <li>Сувениры, подарочные наборы. Не больше одной единицы по каждой позиции;</li>
            <li>Продукты питания. Не более 2 кг разрешенных товаров на человека;</li>
            <li>Антиквариат, изданный позднее 1945 года (не требует декларации);</li>
            <li>Музыкальные инструменты, спортинвентарь, инвалидные коляски.</li>
        </ol>

        <p>Если ввозимых вещей больше положенного, об этом следует сообщить работнику таможни в устной форме. Сотрудник произведет расчет и предоставит иностранцу квитанцию к оплате налоговых, таможенных сборов. Иностранцу потребуется приложить список облагающихся налогом вещей при совершении таможенной оплаты более чем на 5 тысяч евро. Перечисленные товары должны быть обязательно вывезены из государства при выезде туриста.</p>

        <h5>Действующие ограничения</h5>
        <p>Не облагаются пошлиной некоторые продукты и напитки при ввозе их на территорию Польши в определенном количестве. Разновидность товарных единиц не должна указывать на коммерческие цели. Без проблем и лишних затрат можно провести в страну совершеннолетнему туристу следующие товары:</p>

        <ol>
            <li>Табак по морю или самолетом. На выбор: 2 блока сигарет, 10 пачек сигар (по 5 штук в каждой), 250 грамм сухого табака;</li>
            <li>Табак на сухопутном транспорте или пешком. На выбор: 4 пачки сигарет, 10 сигар, одна упаковка (50 грамм) сухого табака;</li>
            <li>Алкоголь по морю, самолетом. На выбор: 1 л крепкого спиртного напитка, 16 л пива, 2 л слабоалкогольных напитков, 4 л вина;</li>
            <li>Алкоголь, ввозимый на другом виде транспорта. На выбор: 0,5 л крепкого алкоголя, 0,5 л слабоалкогольных напитков, 0,5 л вина, 2 л пива;</li>
            <li>Мед. Разрешено ввозить не больше 2 кг;</li>
            <li>Свежие овощи. Не больше 5 кг;</li>
            <li>Свежие фрукты. Не больше 5 кг;</li>
            <li>Рыба и морепродукты. Любая рыбная продукция может заходить через польскую таможню весом не более 20 кг.</li>
        </ol>


        <h5>Запрет на ввоз</h5>
        <p>Во все страны ЕС, в том числе и в Польшу, запрещено ввозить мясо, молоко, шоколад, тушенку, колбасы. Исключение – специальные медицинские консервы, детское питание при условии, что продукция упакована в плотную тару, имеет вес менее 2 кг. При обнаружении на таможне запрещенных товаров, нарушителя оштрафуют, а продукты конфискуют.</p>

        <p>Запрещено ввозить на территорию страны наркотические немедицинские препараты, боеприпасы, огнестрельное оружие, яды, взрывоопасные, разносящие радиацию вещества, диких птиц, животных, растения в горшках. Имея специальное разрешение от польского уполномоченного ведомства можно провозить через границу спортивное, газовое, охотничье оружие, 100 патронов.</p>

        <h5>Как провозить деньги</h5>
        <p>Без заполнения декларации в Польшу можно провозить одному человеку не более 10 тыс. евро в любой валюте. Превышающая нормы сумма должна быть задекларирована. Выезжая из страны, таможенники обязательно проведут сверку наличных денег с цифрами в декларации. Если вывозимая сумма превысит ввозимую, иностранец будет оштрафован.</p>
        <p>При прохождении паспортного контроля сотрудники интересуются у всех туристов о сроке пребывания на территории страны, о наличии средств на существование. Если иностранец планирует прибывать в Польше 3 дня, он должен иметь при себе не менее 900 злотых или эквивалентную сумму в любой удобной валюте. Иностранцы, приехавшие в Польшу на учебу, должны обладать средствами на проживание с учетом минимальных ежемесячных затрат в размере 543 злотых..</p>

        <h5>Животные</h5>
        <p>За один раз через польскую таможню можно провезти 5 домашних питомцев. Порода, возраст, вид значения не имеют. Согласно европейским правилам, пересекать границу может только привитое по плану животное с паспортом, электронным идентификатором. Также польские таможенники требуют от владельца зверя ветеринарную справку, выданную не позднее, чем за 5 дней до прибытия животного в Польшу. В документе должен быть указан инфекционный фон региона, в котором постоянно пребывает питомец (отсутствие вспышек чумы, бешенства и прочее).</p>
        <p>Провозить животных в Польшу можно через определенные пункты пропуска. Если каких-либо документов или прививок не хватает, их можно сделать у дежурного ветеринара на таможне. На время оформления документов и проведения анализов питомец остается в специальном помещении под контролем специалистов. Владельцу животного волноваться не стоит. Просторные клетки, сбалансированное питание, хороший уход домашним любимцам обеспечен.</p>
        <p>Для ввоза изделий из натурального меха, кожи, костей необходим специальный сертификат. Редкие уникальные звери проходят таможню по особым правилам. Владелец должен предоставить работникам пункта пропуска разрешение от Конвенции СИТЕС на экспорт и импорт зверя, а также сертификат о происхождении.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Международный Аэропорт имени Фредерика Шопена в Варшаве – самый крупный польский аэропорт, в международной классификации обозначается как «Federik Chopin» (до переименования в 2001 было «Okecie»).</p>

                <ol>
                    <li>Аэропорт находится в 10 километрах к югу от центра Варшавы. Поездка в центр, т.е. к центральному железнодорожному вокзалу «Варшава-Центральная» занимает около 30 минут.</li>
                    <li>Автобус 175 маршрута направление вокзал «Варшава-Центральная».</li>
                    <li>Маршрут 188 направление метро «Politechnika» в центре города, также недалеко от вокзала.</li>
                    <li>Маршрут 148 – направление района Ursynów и Praga</li>
                    <li>С понедельника по пятницу в рабочее время до метро «Wilanowska» можно доехать также на автобусе № 331.</li>
                    <li>В ночное время (с 23:09 до 04:39) работает маршрут №32 до вокзала «Варшава-Центральная»</li>
                </ol>
                <h5>Железнодорожные вокзалы</h5>

                <p>В Варшаве 8 ж/д вокзалов, первые три являются основными:</p>
                <ol>
                    <li>Варшава Заходня (Западный)</li>
                    <li>Варшава Центральна (Центральный)</li>
                    <li>Варшава Всходня (Восточный)</li>
                    <li>Варшава Средместе</li>
                    <li>Варшава Всходня</li>
                    <li>Варшава Заходня</li>
                    <li>Варшава Виленьска</li>
                    <li>Варшава Гданьска - обслуживают пригородное сообщение.</li>
                </ol>
                <p>Впервые оказавшись в Варшаве, лучше всего выходить на станции Варшава Центральна (Warszawa Centralna), расположенной в центре города (Al. Jerozolimskie, 54). Вокзал Warszawa Centralna обслуживает практически все международные сообщения.</p>
                <p>Оплата производится единым билетом, предусмотренным для проезда на любом виде общественного транспорта.</p>

                <h5>Стоимость проезда</h5>
                <p>В польских городах существует  единый билет на все виды общественного  транспорта. То есть,  это не важно, поедете Вы на автобусе или  на трамвае, билет будет стоить  одинаково. В разных городах цена на проезд немного отличается. Кроме того, существуют разные виды билетов.</p>

                <ol>
                    <li>
                        <b>Билет на одну поездку</b> (bilet normalny)<br>
                        Такой билет  не предусматривает пересадок. И если Вам нужно пересесть на другой транспорт, то понадобится купить еще один билетик.
                    </li>
                    <li>
                        <b>Билет на определенное время</b> (например, на 20 минут, на 60 минут, 120 минут, 24 часа, 72 часа, на неделю, на месяц). <br>
                        При первой поездке билет следует прокомпостировать, и с этого момента будет отсчитываться время, на которое  он действителен. Пересаживаясь в другой транспорт, снова компостировать билет не нужно.
                    </li>
                </ol>
                <p></p>

                <p>Приобрести билеты  на проезд в городском транспорте можно как за наличные деньги, так и по пластиковой банковской  карте  в киосках «Ruchu» (где продают газеты), в специальных автоматах на некоторых остановках общественного транспорта. Автоматы по продаже билетов установлены  в городских автобусах, трамваях. Как правило, водители транспорта билеты не продают.</p>
                <p>Войдя в транспорт, нужно сразу «пробить билет». В вагоне для этого есть несколько компостеров. Если обнаружится, что  пассажир имеет билет, на котором нет штампа компостера, то это грозит серьезным штрафом. Проверки проводятся не часто, но за безбилетный проезд придется заплатить, в любом случае, более 100 злотых. Кроме того, если Вы едете с большим чемоданом, то за багаж тоже нужно заплатить (купить нормальный билет). </p>

            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость проезда</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Метро</div>
                                <span>от 3.80 злотых</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Автобус</div>
                                <span>От 3.80 злотых</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>~ 40 злотых</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Казахстанское водительское удостоверение</h6>
                    <p>Водительское удостоверение Казахстана на территорий Польши действительны в течений 180 дней.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>В стране левостороннее движение.</p>
                <p>Эксплуатация автомобилей с тонированными стеклами на территории Польши запрещена.</p>
                <p>Основными видами топлива являются бензин и дизельное топливо.</p>

                <h5>Налог</h5>
                <p>В налоговой системе Польши отсутствует дорожный налог.</p>

                <h5>Парковки</h5>
                <p>Парковочные места имеются по всему городу и определены парковочными указателями в специально выделенных местах. Оплата производится в специальных аппаратах. С 18:00 до 09:00 утра и выходные дни бесплатно.</p>

                <h5>ДТП</h5>
                <p>При ДТП с участием граждан Казахстана рекомендуется связаться с консулом.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-95</div>
                                <span>1 злотый/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Дизель</div>
                                <span>0.95 злотых/литр</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>АИ-98</div>
                                <span>1.25 злотый/литр</span>
                            </div>

                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="ПОЛЬСКИЕ ДОРОГИ 2017. Вся правда о Польских дорогах." src="https://i.ytimg.com/vi/d3T4YLdJvk0/maxresdefault.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/d3T4YLdJvk0?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">ПОЛЬСКИЕ ДОРОГИ 2017. Вся правда о Польских дорогах.<br>© Aspiration Plus 2017</figcaption>
                </figure>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Страхование авто</h3>
                <p>Страхование автомобиля обязательно.</p>
                <p>В соответствии с законодательством Польши, все автовладельцы обязаны приобрести обязательное страхование гражданской ответственности. Правовой нормой, регулирующей обязательные виды страхования в Польше является Закон «Об обязательном страховании, Фонде гарантирования страховых выплат, и Моторно-транспортном страховом бюро Польши» от 22.05.2003 года.</p>

                <a href="http://osago.account.travel" class="btn btn-outline-success">Оформить электронный полис ОСАГО</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>В Польше существует ряд фирм, специализирующихся на сдаче автомобилей в аренду.</p>
                <p>Офисы крупных международных компаний по аренде автомобилей, таких как Hertz, Europcar, Avis, Budget, есть в зале прилета аэропорта им. Фредерика Шопена. Они работают не круглосуточно, поэтому ночью арендовать авто невозможно. Выгоднее бронировать автомобиль заблаговременно через интернет — и цена ниже, и выбор больше. Точек проката автотранспортных средств в городе достаточно.</p>
            </div>
        </div>

    </div>
</section>

<!--<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p></p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>
</section>-->

<section id="communication" class="bg-white">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>
                <p>В основном люди используют для связи мобильные телефоны, городские присутсвуют, но ими почти не пользуются.</p>
                <p>Международный код страны - 48.</p>

                <h5>Мобильная связь</h5>
                <p>Операторов в Польше много. Связь в целом недорогая (относительно других стран Европы). Быстрый LTE есть у всех.</p>
                <ul>
                    <li>Польский оператор Т-Мобайл - <a href="http://www.t-mobile.pl/" target="_blank">перейти на сайт</a></li>
                    <li>Orange Polska - <a href="https://www.orange.pl/" target="_blank">перейти на сайт</a></li>
                    <li>Play - <a href="https://www.play.pl/" target="_blank">перейти на сайт</a></li>
                </ul>

                <h5>Интернет</h5>
                <p>В Польше имеется множество разных интернет операторов, на любой вкус и кошелек клиента, все будет зависеть от того, в каком городе и районе вы проживаете. Самые надежные из них это:</p>
                <ul>
                    <li>WADOWICENET - <a href="http://www.wadowicenet.pl/" target="_blank">перейти на сайт</a></li>
                    <li>UPC - <a href="https://www.upc.pl/" target="_blank">перейти на сайт</a></li>
                </ul>
                <p>В Польше у Вас не будет проблем с поиском интернета - в городе много точек с бесплатным Wi-Fi и в любой гостинице всегда будет включен Wi-Fi.</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-old-phone"></i>
                        <span class="h6"><b>Полезные телефоны</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Пожарная служба</div>
                                <span>101</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>102</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>103</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Единый экстренный номер</div>
                                <span>112</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="sight">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>