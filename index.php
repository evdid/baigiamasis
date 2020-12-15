<?php
    require __DIR__ . '/src/contact-form.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Autentiški italų virtuvės patiekalai restorane Kaune arba tiesiai į Jūsų namus.">
    <title>il Tartufo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
<body>
    <header>
        <div class="flex-container">
            <nav class="mobile-nav">
                <ul id="mobile-menu" class="flex-container"> 
                    <li><a href="#pradzia" class="active">Pradžia</a></li>
                    <li><a href="#apie">Apie</a></li>
                    <li><a href="#meniu">Meniu</a></li>
                    <li><a href="#kontaktai">Kontaktai</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            <a href="#pradzia" class="logo"><span>Ristorante<br>il Tartufo</span></a>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="#pradzia" class="active">Pradžia</a></li>
                    <li><a href="#apie">Apie</a></li>
                    <li><a href="#meniu">Meniu</a></li>
                    <li><a href="#kontaktai">Kontaktai</a></li>
                </ul>
            </nav>
            
            <div class="nav-btns flex-container">
                <a href="tel:+37060000000" class="nav-btn">
                    <div class="flex-container" >
                        <span class="btn-visible">Rezervacija</span>
                        <span class="btn-hidden"><i class="fas fa-phone"></i>+37060000000</span>
                    </div>
                </a>
                <a href="https://wolt.com/en/ltu/kaunas/" target="_blank" class="nav-btn">
                    <div class="flex-container">
                        <span class="btn-visible">Maistas į namus</span>
                        <span class="btn-hidden"><img src="images/wolt-logo.png" alt="Wolt logo"></span>
                    </div>
                </a>
            </div>
        </div>               
    </header>
    <section id="pradzia">
        <div>
            <h1>il Tartufo</h1>
            <h2>Autentiška Italijos virtuvė</h2>
        </div>
        <i class="fas fa-chevron-down"></i>
        <!--<img src="images/arrow2.png" alt="Arrow icon">-->
    </section>
    <section class="gallery flex-container">
            <div class="flex-container"><span>Jauki atmosfera</span></div>
            <div class="flex-container"><span>Ingredientai iš Italijos</span></div>
            <div class="flex-container"><span>Autentiški patiekalai</span></div>
    </section>
    <section id="apie" class="flex-container">
        <div>
            <h2>Apie mus</h2>
            <div class="divider white flex-container">
                <div></div>
                <i class="far fa-star"></i>
                <div></div>
            </div>
            <p>Autentiško, tikro itališko skonio ilgesys paskatino mus sukurti vietą, kuri alsuotų šio krašto kultūra. Siekėme perteikti tradicinės, jaukios itališkos tratorijos atmosferą, į kurią įžengus Jus pasitiks malonus krosnyje kepamų picų ir besilydančio sūrio kvapas.</p>
            <p>Italų virtuvė bene populiariausia ir kartu kritiškiausiai vertinama, tad iššūkį atskleisti jos skonius išsaugant autentiškumą priėmėme rimtai - mūsų komanda mokėsi iš geriausių Italijos šefų. Tikime, jog šio krašto virtuvės paslaptis slypi vietiniuose produktuose, tad mūsų patiekaluose rasite ne tik <i>Parmigiano Reggiano</i> ir buivolių pieno <i>mozzarellos</i>, bet ir kreminės <i>gorgonzolos</i> bei pikantiško <i>Pecorino Romano</i> sūrių, itališkos kiaulės pažandės <i>Guanciale</i>. Nepamiršome ir klasikinių Italijos aperityvų, o vyno rūsyje su mūsų someljė pagalba galėsite pažinti įvairiausius šios šalies vynuogynus.</p>
            <p>Mūsų virtuvės pranašumas - tik puikios kokybės produktai, naudojami vadovaujantis senomis italų maisto gaminimo tradicijomis.</p>
        </div>
    </section>
    <section id="meniu">
        <h2>Meniu</h2>
        <div class="divider black flex-container">
            <div></div>
            <i class="far fa-star"></i>
            <div></div>
        </div>
        <div class="flex-container">
            <nav class="menu-nav">
                <ul class="flex-container">
                    <li><a class="tablink active" onclick="openMenu(event, 'uzkandziai')">Užkandžiai</a></li>
                    <li><a class="tablink" onclick="openMenu(event, 'sriubos')">Sriubos</a></li>
                    <li><a class="tablink" onclick="openMenu(event, 'salotos')">Salotos</a></li>
                    <li><a class="tablink" onclick="openMenu(event, 'makaronai')">Makaronai</a></li>
                    <li><a class="tablink" onclick="openMenu(event, 'picos')">Picos</a></li>
                    <li><a class="tablink" onclick="openMenu(event, 'pagrindiniai')">Pagrindiniai patiekalai</a></li>
                    <li><a class="tablink" onclick="openMenu(event, 'desertai')">Desertai</a></li>
                </ul>
            </nav>
            <div class="menu-image">
                <img src="images/cooking.jpeg" alt="Food ingredients">
            </div>
            <div class="food">
            <div>
                <!--Užkandžiai--><div id="uzkandziai" class="menu-category">
                    <h3>Užkandžiai</h3>
                    <div class="flex-container">
                        <h4>Prosciutto Crudo con Mozzarella</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>sūrio ir vytinto kumpio užkandis</p>
                    <div class="flex-container">    
                        <h4>Jautienos Carpaccio</h4>
                        <div class="menu-divider"></div>
                        <span>€8</span>
                    </div>
                    <p>užkandis, gardintas trumų aliejumi, tiekiamas su Pecorino sūrio lakšteliais</p>
                    <div class="flex-container">
                        <h4>Lašišos tartaras</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>marinuota lašiša tiekiama su Ricotta sūrio ir avokadų piure</p>
                    <div class="flex-container">
                        <h4>Gruzdinti traškūs kalmarai</h4>
                        <div class="menu-divider"></div>
                        <span>€10</span>
                    </div>
                    <p>tiekiami su naminiu česnakiniu aioli</p>
                    <div class="flex-container">
                        <h4>Focaccia</h4>
                        <div class="menu-divider"></div>
                        <span>€3</span>
                    </div>
                    <p>tradicinė itališka duonelė gardinta rozmarinais</p>
                    <div class="flex-container">
                        <h4>Bruschette</h4>
                        <div class="menu-divider"></div>
                        <span>€7</span>
                    </div>
                    <p>užkandžių rinkinys su traškia itališka duonele</p>
                </div>
                <!--Sriubos--><div id="sriubos" class="menu-category">
                    <h3>Sriubos</h3>
                    <div class="flex-container">
                        <h4>Soupe del Giorno</h4>
                        <div class="menu-divider"></div>
                        <span>€4</span>
                    </div>
                    <p>dienos sriuba</p>
                    <div class="flex-container">
                        <h4>Taleggio</h4>
                        <div class="menu-divider"></div>
                        <span>€5</span>
                    </div>
                    <p>itališko Taleggio sūrio sriuba, gardinta traškiu kumpiu Speck</p>
                    <div class="flex-container">
                        <h4>Stracciatella</h4>
                        <div class="menu-divider"></div>
                        <span>€3</span>
                    </div>
                    <p>tradicinis romėniškas sultinys su kiaušiniais, pagardintas špinatais ir parmezanu</p>
                    <div class="flex-container">
                        <h4>Minestrone</h4>
                        <div class="menu-divider"></div>
                        <span>€5</span>
                    </div>
                    <p>tiršta daržovių sriuba su pomidorais, pupelėmis ir makaronais</p>
                </div>
                <!--Salotos--><div id="salotos" class="menu-category">
                    <h3>Salotos</h3>
                    <h4>Insalata di Cesare</h4>
                    <p class="cezario-salotos">salotos, gardintos Pecorino Romano sūriu ir ančiuvių padažu, pasirinkite:</p>
                    <div class="flex-container">
                        <p class="cezario-salotos">su kepta vištienos krūtinėle</p>
                        <div class="menu-divider"></div>
                        <span>€7</span>
                    </div>
                    <div class="flex-container cezario-salotos">
                        <p>su kepta lašišos filė</p>
                        <div class="menu-divider"></div>
                        <span>€10</span>
                    </div>
                    <div class="flex-container">
                        <h4>Tuno salotos</h4>
                        <div class="menu-divider"></div>
                        <span>€12</span>
                    </div>
                    <p>su špinatais ir romaninėmis salotomis</p>
                    <div class="flex-container burrata-salotos">
                        <h4>Salotos su Burrata sūriu</h4>
                        <div class="menu-divider"></div>
                        <span>€12</span>
                    </div>
                    <div class="flex-container">
                        <h4>Šviežių daržovių ir Prosciutto salotos</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>vytinto kumpio, mozzarellos ir pomidoriukų salotos, gardintos gaiviu citrininiu užpilu</p>
                </div>
                <!--Makaronai--><div id="makaronai" class="menu-category">
                    <h3>Makaronai</h3>
                    <div class="flex-container">
                        <h4>Cacio e Pepe</h4>
                        <div class="menu-divider"></div>
                        <span>€5</span>
                    </div>
                    <p>romėniška klasika - su Pecorino Romano sūriu ir pipirais</p>
                    <div class="flex-container">
                        <h4>Pasta alla Gricia</h4>
                        <div class="menu-divider"></div>
                        <span>€6</span>
                    </div>
                    <p>su Pecorino Romano ir kiaulės pažande Guanciale</p>
                    <div class="flex-container">
                        <h4>Bucatini all'Amatriciana</h4>
                        <div class="menu-divider"></div>
                        <span>€7</span>
                    </div>
                    <p>su Guanciale, Pecorino Romano ir pomidorų padažu</p>
                    <div class="flex-container">
                        <h4>Pasta Carbonara</h4>
                        <div class="menu-divider"></div>
                        <span>€7</span>
                    </div>
                    <p>su Guanciale ir kreminiu kiaušinių ir parmezano padažu</p>
                    <div class="flex-container">
                        <h4>4 Formaggi</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>su vištiena ir pievagrybiais, gardinti 4 geriausių itališkų sūrių padažu</p>
                    <div class="flex-container">
                        <h4>Ravioli su baravykais</h4>
                        <div class="menu-divider"></div>
                        <span>€10</span>
                    </div>
                    <p>virtiniai, įdaryti baravykais ir trumais, tiekiami su grietinėlės - pancettos padažu</p>
                    <div class="flex-container">
                        <h4>Lasagne Bolognese</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>klasikinė itališka lazanija su jautiena</p>
                </div>
                <!--Picos--><div id="picos" class="menu-category">
                    <h3>Picos</h3>
                    <div class="flex-container">
                        <h4>Margherita</h4>
                        <div class="menu-divider"></div>
                        <span>€6</span>
                    </div>
                    <p>padažas, Mozzarella</p>
                    <div class="flex-container">
                        <h4>Vegetariana</h4>
                        <div class="menu-divider"></div>
                        <span>€7</span>
                    </div>
                    <p>padažas, Mozzarella, paprikos, svogūnai, pievagrybiai, alyvuogės</p>
                    <div class="flex-container">
                        <h4>Romana</h4>
                        <div class="menu-divider"></div>
                        <span>€7</span>
                    </div>
                    <p>padažas, Mozzarella, ančiuviai, svogūnai, kaparėliai, juodos alyvuogės</p>
                    <div class="flex-container">
                        <h4>Quatro Formaggi</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>padažas, keturi geriausi itališki sūriai</p>
                    <div class="flex-container">
                        <h4>Diavola</h4>
                        <div class="menu-divider"></div>
                        <span>€8</span>
                    </div>
                    <p>padažas, Mozzarella, aštrus faršas, svogūnai, čili</p>
                    <div class="flex-container">
                        <h4>Capricciosa</h4>
                        <div class="menu-divider"></div>
                        <span>€8</span>
                    </div>
                    <p>padažas, Mozzarella, virtas kumpis, pievagrybiai</p>
                    <div class="flex-container">
                        <h4>Picante</h4>
                        <div class="menu-divider"></div>
                        <span>€9</span>
                    </div>
                    <p>padažas, Mozzarella, aštrus saliami, česnakai, čili, aštri itališka ‘nduja Dešra</p>
                    <div class="flex-container">
                        <h4>Tartufata</h4>
                        <div class="menu-divider"></div>
                        <span>€10</span>
                    </div>
                    <p>padažas, Mozzarella, gruzdinti pievagrybiai, trumų aliejus, Pecorino sūris</p>
                </div>
                <!--Pagrindiniai patiekalai--><div id="pagrindiniai" class="menu-category">
                    <h3>Pagrindiniai patiekalai</h3>
                    <div class="flex-container">
                        <h4>Midijos</h4>
                        <div class="menu-divider"></div>
                        <span>€10</span>
                    </div>
                    <p>sidro padaže, gardintos svieste keptais svogūnėliais, tiekiamos su gruzdintomis bulvytėmis</p>
                    <div class="flex-container">
                        <h4>Cacciucco Livornese</h4>
                        <div class="menu-divider"></div>
                        <span>€14</span>
                    </div>
                    <p>tirštas ir aromatingas jūros gėrybių troškinys, tiekiamas su focaccia duonele</p>
                    <div class="flex-container">
                        <h4>Sultinga anties krūtinėlė</h4>
                        <div class="menu-divider"></div>
                        <span>€13</span>
                    </div>
                    <p>tiekiama su žaliaisiais lęšiais ir šparaginėmis pupelėmis</p>
                    <div class="flex-container">
                        <h4>Lašišos kepsnys</h4>
                        <div class="menu-divider"></div>
                        <span>€14</span>
                    </div>
                    <p>gardintas džiovintais pomidorais, ančiuvais, tiekiamas su žalaisiais lęšiais</p>
                    <div class="flex-container">
                        <h4>Vištienos suktinukas</h4>
                        <div class="menu-divider"></div>
                        <span>€12</span>
                    </div>
                    <p>traškus vištienos suktinukas, įdarytas kreminiu Taleggio sūriu, tiekiamas su morkų-salierų piure</p>
                    <div class="flex-container">
                        <h4>Milanese</h4>
                        <div class="menu-divider"></div>
                        <span>€11</span>
                    </div>
                    <p>sluoksniuotas kalakutienos kepsnys traškia džiuvėsėlių plutele, tiekiamas su bulvių piure ir troškintų raudongūžių kopūstų salotomis</p>
                    <div class="flex-container">
                        <h4>Bistecca alla Fiorentina</h4>
                        <div class="menu-divider"></div>
                        <span>€22</span>
                    </div>
                    <p>jautienos antrekoto kepsnys, tiekiamas su svogūnų traškučiais, žaliųjų pipirų - trumų padažu ir bulvytėmis</p>
                </div>
                <!--Desertai--><div id="desertai" class="menu-category">
                    <h3>Desertai</h3>
                    <div class="flex-container">
                        <h4>Tiramisu</h4>
                        <div class="menu-divider"></div>
                        <span>€4</span>
                    </div>
                    <p>kreminio Mascarpone sūrio, kavos ir Amaretto likerio desertas</p>
                    <div class="flex-container">
                        <h4>Gelati e Sorbetti</h4>
                        <div class="menu-divider"></div>
                        <span>€4</span>
                    </div>
                    <p>vaisinio šerbeto ir tikrų itališkų ledų derinys</p>
                    <div class="flex-container">
                        <h4>Gelato Arachidi</h4>
                        <div class="menu-divider"></div>
                        <span>€4</span>
                    </div>
                    <p>minkšti žemės riešutų ledai, gardinti kepintais migdolais</p>
                    <div class="flex-container">
                        <h4>Panna Cotta</h4>
                        <div class="menu-divider"></div>
                        <span>€4</span>
                    </div>
                    <p>klasikinis itališkas grietinėlės desertas su aviečių tyre</p>
                    <div class="flex-container">
                        <h4>Sūrio pyragas Amaretto</h4>
                        <div class="menu-divider"></div>
                        <span>€5</span>
                    </div>
                    <p>kreminis sūrio pyragas, gardintas itališku likeriu Amaretto</p>
                    <div class="flex-container">
                        <h4>Torta al Cioccolato</h4>
                        <div class="menu-divider"></div>
                        <span>€5</span>
                    </div>
                    <p>ypatinigai šokoladinis pyragaitis</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="kontaktai">
        <div class="flex-container contacts">
            <div>
                <h3>Parašykite mums</h3>
                <p>Turite klausimų, pasiūlymų ar atsiliepimų? Palikite mums žinutę:</p>
                <form id="contact" method="post">
                        <input type="text" name="name" placeholder="Jūsų vardas*" required>
                        <input type="email" name="email" placeholder="Jūsų el. pašto adresas*" required>
                        <textarea name="message" rows="9" placeholder="Jūsų žinutė*" required></textarea>
                        <button name="submit" type="submit" id="contact-submit">Siųsti</button>
                </form>
            </div>
            <div class="divider black flex-container">
                <div class="black-line"></div>
                <i class="far fa-star black-star"></i>
                <div class="black-line"></div>
            </div>
            <div class="contact-info">
                <div>
                    <h3>Kontaktai</h3>
                    <i class="contacts-icon fas fa-map-marker-alt"></i><p>Italijos g. 32, Kaunas</p><br>
                    <a href="tel:+37060000000"><i class="contacts-icon fas fa-phone"></i>
                    <p>+37060000000</p></a><br>
                    <a href="mailto:info@iltartufo.lt"><i class="contacts-icon fas fa-envelope"></i>
                    <p>info@iltartufo.lt</p></a>
                </div>
                <div>
                    <h3>Darbo laikas</h3>
                    <p class="days">I-IV</p><p>11-22 val.</p><br>
                    <p class="days">V-VI</p><p>11-23 val.</p><br>
                    <p class="days">VII</p><p>12-20 val.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="footer flex-containe">
            <div class="flex-container">
                <p>Draugaukime</p>
                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        <p>&copy; <?php echo date('Y');?></p>
    </section>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/custom.js"></script>
    <script src="https://kit.fontawesome.com/0fd769f5e0.js" crossorigin="anonymous"></script>
</body>