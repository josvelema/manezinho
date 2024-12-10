<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";
?>
<link rel="stylesheet" href="assets/css/menuStyle.css?v=180323-2">
<?php
include "includes/nav.html"
?>


<main>




  <header class="main-header menu-header">

    <span>Art Restaurant</span>
    <h1 class="rise">Manezinho</h1>
    <h2 class="rise subheading">Menu</h2>



  </header>
  <div class="menu-nav">
    <ul>
      <!-- <li class="menu-nav-item"><a href="#drinks">Drinks</a></li> -->
      <li class="menu-nav-item"><a href="#wine">Wine</a></li>
      <li class="menu-nav-item"><a href="#bar">Bar</a></li>
      <li class="menu-nav-item"><a href="#food">Food</a></li>
      <li class="menu-nav-item"><a href="#cocktails">Cocktails</a></li>
    </ul>
  </div>


  <section class="section-stretch" style="margin: 0 auto;">

      <section class="menu-section">
        <article id="drinks">
          <h3>drinks</h3>

          <fieldset>
            <legend align="center">Quentes</legend>
            <ul class="menu-ul">
              <li>Café</li>
              <li>Café Americano</li>
              <li>Carioca</li>
              <li>Carioca Limão</li>
              <li>Café Pingado</li>
              <li>Garoto</li>
              <li>Meia de Leite</li>
              <li>Leite com Chocolate</li>
              <li>Galão</li>
              <li>Chá</li>
            </ul>
            <ul class="menu-ul-price">
              <li>0.80€</li>
              <li>1.60€</li>
              <li>0.70€</li>
              <li>0.70€</li>
              <li>0.80€</li>
              <li>0.80€</li>
              <li>1.50€</li>
              <li>2.00€</li>
              <li>2.00€</li>
              <li>1.50€</li>
            </ul>
          </fieldset>

          <fieldset>
            <legend align="center">SEM GÁS</legend>
            <ul class="menu-ul">
              <li>Água</li>
              <li>Nestea</li>
              <li>Sumo Natural</li>
            </ul>
            <ul class="menu-ul-price">
              <li>
                <span class="menu-size-icon">p</span> 1.20€ &nbsp; <span class="menu-size-icon">g</span> 2.50€
              </li>
              <li>1.50€</li>
              <li>3.00€</li>
            </ul>
          </fieldset>

          <fieldset>
            <legend align="center">COM GÁS</legend>
            <ul class="menu-ul">
              <li>Água com Gás</li>
              <li>Água Tónica</li>
              <li>Fanta</li>
              <li>Sprite</li>
              <li>Coca-Cola</li>
              <li>Coca-Cola Zero</li>
            </ul>
            <ul class="menu-ul-price">
              <li>1.50€</li>
              <li>1.50€</li>
              <li>1.50€</li>
              <li>1.50€</li>
              <li>1.50€</li>
              <li>1.50€</li>
            </ul>
          </fieldset>
          <p class="menu-legend-p">
            <span><i class="menu-size-icon">p</i> &nbsp;Pequeno</i></span>

            <span><i class="menu-size-icon">g</i> &nbsp;Grande </span>
          </p>
        </article>
      </section>

    <section class="menu-section">
      <article id="wine">
        <h3>wine</h3>
        <p class="menu-subheader">ALENTEJO</p>
        <img src="assets/img/logo-adega-mayor.png" alt="ADEGA MAYOR COLLECTION" class="menu-winecollection">

        <fieldset>
          <legend align="center">TINTO</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>

            <li>Caiado</li>
            <li>Reserva</li>
            <li>Seleção Bio</li>
            <li>Touriga Nacional</li>
            <li>Alfrocheiro</li>
            <li>Sangiovese</li>
            <li>Amálias</li>
            <li>Tudo ao Molho</li>
            <li>Trincadeira</li>
            <li>Paixão </li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>

            <li>10.00€</li>
            <li>15.00€</li>
            <li>16.00€</li>
            <li>18.00€</li>
            <li>18.00€</li>
            <li>18.00€</li>
            <li>20.00€</li>
            <li>22.00€</li>
            <li>20.00€</li>
            <li>55.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Branco</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>

            <li>Reserva Comendador</li>
            <li>Seleção</li>
            <li>Altitude</li>
            <li>Viosinho</li>
            <li>Seleção Bio</li>
            <li>Gouveio</li>
            <li>Arinto</li>
            <li>Verdelho</li>
            <li>Moscatel Galego Roxo</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>

            <li>25.00€</li>
            <li>14.00€</li>
            <li>28.00€</li>
            <li>18.00€</li>
            <li>16.00€</li>
            <li>18.00€</li>
            <li>16.00€</li>
            <li>18.00€</li>
            <li>20.00€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">ROSÉ</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Pinot Noir</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>14.00€</li>
          </ul>
        </fieldset>


        <h3>wine</h3>
        <p class="menu-subheader">ALENTEJO</p>

        <fieldset>
          <legend align="center">TINTO</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Trinca Bolotas</li>
            <li>Gr. Trinca Bolotas</li>
            <li>Chaminé</li>
            <li>Defesa</li>
            <li>Quinta do Paral</li>
            <li>Quinta do Paral Reserva</li>
            <li>Esporão</li>
            <li>Tapada de Coelheiros</li>
            <li>Dona Maria</li>
            <li>Dona Maria Reserva</li>
            <li>Parcelas</li>

          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>

            <li>14.00€</li>
            <li>16.00€</li>
            <li>14.00€</li>
            <li>15.00€</li>
            <li>15.00€</li>
            <li>30.00€</li>
            <li>26.00€</li>
            <li>40.00€</li>
            <li>16.00€</li>
            <li>46.00€</li>
            <li>58.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Branco</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Trinca Bolotas</li>
            <li>Chaminé</li>
            <li>Esporão</li>
            <li>Esporão Reserva</li>
            <li>Quinta do Paral Reserva</li>

          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>13.00€</li>
            <li>13.00€</li>
            <li>16.00€</li>
            <li>22.00€</li>
            <li>28.00€</li>
          </ul>
        </fieldset>

        <h3>wine</h3>
        <p class="menu-subheader">LISBOA</p>
        <img src="assets/img/adegamae-logo.png" alt="ADEGAMAE COLLECTION" class="menu-winecollection">


        <fieldset>
          <legend align="center">TINTO</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>A.D.M. Atlântico</li>
            <li>A.D.M. Terroir</li>
            <li>A.D.M. Touriga Nacional</li>
            <li>A.D.M. Touriga Franca</li>
            <li>A.D.M. Merlot</li>
            <li>A.D.M. Cabernet Sauvignon</li>
            <li>A.D.M. Petit Verdot</li>
            <li>A.D.M. Pinot Noir</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>28.00€</li>
            <li>70.00€</li>
            <li>14.00€</li>
            <li>14.00€</li>
            <li>14.00€</li>
            <li>14.00€</li>
            <li>14.00€</li>
            <li>14.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Branco</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>A.D.M. Alvarinho</li>
            <li>A.D.M. Alvarinho Reserva</li>
            <li>A.D.M. 221</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>15.00€</li>
            <li>40.00€</li>
            <li>20.00€</li>
          </ul>
        </fieldset>
        <!-- <fieldset>
          <legend align="center">ROSÉ</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>

          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>

          </ul>
        </fieldset> -->
        <h3>wine</h3>
        <p class="menu-subheader">DOURO</p>


        <fieldset>
          <legend align="center">TINTO</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Assobio</li>
            <li>Esteva</li>
            <li>Cabeça Toiro</li>
            <li>Papa-Figos</li>
            <li>Vinha Grande</li>
            <li>Duas Quintas</li>
            <li>Evel Reserva</li>
            <li>Callabriga</li>
            <li>Castas Escondidas</li>
            <li>Duas Quintas Reserva</li>
            <li>Quinta da Leda</li>
            <li>Carvalhas Vinhas Velhas</li>
            <li>Carvalhas Tinta Francisca</li>
            <li>Batuta</li>
            <li>Antónia Adelaide Ferreira</li>
            <li>Mirabilis</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>13.00€</li>
            <li>13.00€</li>
            <li>13.00€</li>
            <li>15.00€</li>
            <li>17.00€</li>
            <li>24.00€</li>
            <li>26.00€</li>
            <li>26.00€</li>
            <li>40.00€</li>
            <li>45.00€</li>
            <li>50.00€</li>
            <li>70.00€</li>
            <li>70.00€</li>
            <li>65.00€</li>
            <li>100.00€</li>
            <li>180.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Branco</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Papa-Figos</li>
            <li>Duas Quintas</li>
            <li>Carvalhas</li>
            <li>Antónia Adelaide Ferreira</li>
            <li>Mirabilis</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>15.00€</li>
            <li>22.00€</li>
            <li>38.00€</li>
            <li>65.00€</li>
            <li>80.00€</li>
          </ul>
        </fieldset>


        <!-- hier  -->

        <h3>wine</h3>
        <p class="menu-subheader">AÇORES</p>

        <fieldset>
          <legend align="center">DOS AÇORES</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Pedras Brancas</li>
            <li>Pedras Brancas Reserva</li>
            <li>Frei Gigante</li>
            <li>Terras de Lava Merlot</li>
            <li>Terras de Lava Tinto</li>
            <li>Terras de Lava Branco</li>
            <li>Terras de Lava Rosé</li>
            <li>Terroir Vulcânico Verdelho Pico</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">750ml</span></li>
            <li>26.00€</li>
            <li>40.00€</li>
            <li>26.00€</li>
            <li>18.00€</li>
            <li>17.00€</li>
            <li>17.00€</li>
            <li>17.00€</li>
            <li>50.00€</li>
          </ul>
        </fieldset>

        <p class="menu-subheader">OUTROS</p>
        <fieldset>
          <legend align="center">Tinto</legend>
          <ul class="menu-ul">
            <li>Quinta da Lapa </li>
          </ul>
          <ul class="menu-ul-price">
            <li>15.00€</li>

          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">Branco / Verde</legend>
          <ul class="menu-ul">
            <li>Taboadella Grande Villae Dão</li>
            <li>Quinta da Lapa</li>
            <li>Muralhas Monção</li>
          </ul>
          <ul class="menu-ul-price">
            <li>70.00€</li>
            <li>14.00€</li>
            <li>10.00€</li>


          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">Rosé</legend>
          <ul class="menu-ul">
            <li>Lambrusco</li>
            <li>Mateus</li>
            <li>Caiado</li>
            <li>Quinta da Lapa</li>
          </ul>
          <ul class="menu-ul-price">
            <li>8.00€</li>
            <li>10.00€</li>
            <li>10.00€</li>
            <li>12.00€</li>
          </ul>
        </fieldset>
        <!-- <fieldset>
        <legend align="center"></legend>
        <ul class="menu-ul"></ul>
        <ul class="menu-ul-price"></ul>
      </fieldset> -->
      </article>
    </section>

    <section class="menu-section menu-section-grid">
      <h3>bar</h3>
      <article id="bar">
        <fieldset>
          <legend align="center">CERVEJA & CIDRA</legend>
          <ul class="menu-ul">
            <li>Sagres</li>
            <li>Superbock</li>
            <li>Super Bock Green</li>
            <li>Bandida do Pomar</li>
            <li>Sommersby</li>
          </ul>
          <ul class="menu-ul-price">
            <li><span class="menu-small-text">0,33cl </span> 1.80€</li>
            <li><span class="menu-small-text">0,33cl </span> 1.80€</li>
            <li>1.80€</li>
            <li>2.00€</li>
            <li>1.50€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">CERVEJA IMPORTADA</legend>
          <ul class="menu-ul">
            <li>Heineken</li>
            <li>Heineken Zero</li>
            <li>Beck´s</li>
            <li>Budweiser</li>
            <li>Corona</li>
            <li>Stella Artois</li>
            <li>Leffe Blonde</li>
            <li>Leffe Brune</li>
            <li>Hoegaarden</li>
            <li>Franziskaner</li>
            <li>La Chouffe</li>
            <li>Chimay Blue</li>
            <li>Delirium Tremens</li>
            <li>Duvel</li>
            <li>Kwak</li>
            <li>Rochefort 10</li>
            <li>Rochefort 8</li>
            <li>La Trappe Blond</li>
            <li>Gulden Draak</li>
            <li>Tripel Karmeliet</li>
            <li>Diversas</li>
          </ul>
          <ul class="menu-ul-price">
            <li>
              <span class="menu-small-text">0,50cl </span> 3.00€ &nbsp;
              <span class="menu-small-text">0,25cl </span> 1.50€
            </li>
            <li>1.50€</li>
            <li>2.00€</li>
            <li>3.50€</li>
            <li>3.00€</li>
            <li>2.50€</li>
            <li>3.50€</li>
            <li>3.50€</li>
            <li>3.50€</li>
            <li>4.00€</li>
            <li>7.00€</li>
            <li>7.00€</li>
            <li>7.00€</li>
            <li>6.00€</li>
            <li>6.00€</li>
            <li>6.00€</li>
            <li>6.00€</li>
            <li>6.00€</li>
            <li>7.00€</li>
            <li>6.00€</li>
            <li>7.00€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">Gins</legend>
          <ul class="menu-ul">
            <li>Baleia</li>
            <li>Nordés</li>
            <li>Beefeater</li>
            <li>Beefeater Pink</li>
            <li>Bombay Sapphire Dry</li>
            <li>Gordon's Pink</li>
            <li>Bombay Sapphire</li>
            <li>Bombay Bramble</li>
            <li>Sharish Blue</li>
            <li>Bulldog</li>
            <li>Tanqueray</li>
            <li>Tanqueray Ten</li>
            <li>Nº13</li>
            <li>Hendrick's (Diversos)</li>
            <li>Hendrick's</li>
            <li>Monkey 47</li>
            <li>Manezinho</li>
            <li>Nikka Coffey</li>
            <li>Azor Gin Reserva</li>
            <li>Mombasa Club</li>
            <li>Roku</li>
          </ul>
          <ul class="menu-ul-price">
            <li>12.00€</li>
            <li>6.00€</li>
            <li>5.00€</li>
            <li>5.00€</li>
            <li>7.00€</li>
            <li>5.00€</li>
            <li>7.00€</li>
            <li>8.00€</li>
            <li>8.00€</li>
            <li>9.00€</li>
            <li>7.00€</li>
            <li>10.00€</li>
            <li>10.00€</li>
            <li>12.00€</li>
            <li>10.00€</li>
            <li>18.00€</li>
            <li>10.00€</li>
            <li>13.00€</li>
            <li>15.00€</li>
            <li>14.00€</li>
            <li>12.00€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">Martini's</legend>
          <ul class="menu-ul">
            <li>Branco</li>
            <li>Rosso</li>
            <li>Fiero</li>
            <li>Dry</li>
            <li>Dirty</li>
            <li>Strawberry</li>
            <li>Lemon Drop</li>
            <li>Cucumbre</li>
            <li>Caramel</li>
            <li>Expresso Martini</li>
          </ul>
          <ul class="menu-ul-price">
            <li>2.50€</li>
            <li>2.50€</li>
            <li>3.00€</li>
            <li>3.50€</li>
            <li>3.50€</li>
            <li>4.00€</li>
            <li>3.50€</li>
            <li>3.50€</li>
            <li>3.50€</li>
            <li>3.50€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Shots</legend>
          <ul class="menu-ul">
            <li>Mix</li>
            <li>Tequila</li>
            <li>Patrón Reposado</li>
            <li>Patrón Anejo</li>
            <li>Patrón Silver</li>
            <li>JaggerMeister</li>
            <li>Fire Ball</li>
            <li>Gold Strike</li>
          </ul>
          <ul class="menu-ul-price">
            <li>2.50€</li>
            <li>2.50€</li>
            <li>6.00€</li>
            <li>7.00€</li>
            <li>5.00€</li>
            <li>3.00€</li>
            <li>4.00€</li>
            <li>3.00€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">Whiskey</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>Red Label</li>
            <li>Black Label</li>
            <li>Jameson</li>
            <li>Jack Daniel’s</li>
            <li>Jack Daniel’s Maçã</li>
            <li>Jack Daniel’s Fire</li>
            <li>Jack Daniel’s Single Barrel</li>
            <li>Glenﬁddich</li>
            <li>Bushmills</li>
            <li>J. Walker Double Black</li>
            <li>J. W. Gold Label Reserva</li>
            <li>J. Walker Ultimate 18</li>
            <li>Nikka</li>
          </ul>
          <ul class="menu-ul-price">
            <li>
              <span class="menu-small-text">½ dose </span> &nbsp;&nbsp;&nbsp;
              <span class="menu-small-text"> 1 dose </span>
            </li>
            <li>2.50€ &nbsp;&nbsp; 4.00€</li>
            <li>4.00€ &nbsp;&nbsp; 7.00€</li>
            <li>3.00€ &nbsp;&nbsp; 5.00€</li>
            <li>3.00€ &nbsp;&nbsp; 5.00€</li>
            <li>3.50€ &nbsp;&nbsp; 6.00€</li>
            <li>3.50€ &nbsp;&nbsp; 6.00€</li>
            <li>6.00€ &nbsp; 12.00€</li>
            <li>5.00€ &nbsp;&nbsp; 8.00€</li>
            <li>6.00€</li>
            <li>10.00€</li>
            <li>13.00€</li>
            <li>18.00€</li>
            <li>18.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Aguardentes</legend>
          <ul class="menu-ul">
            <li>&nbsp;</li>
            <li>CRF extra Reserva</li>
            <li>CRF</li>
            <li>Courvoisier</li>
            <li>Remy Martin</li>
            <li>Brandy Croft</li>
            <li>Neveda</li>
            <li>Canela</li>
            <li>Limão</li>
          </ul>
          <ul class="menu-ul-price">
            <li>
              <span class="menu-small-text">½ dose </span> &nbsp;&nbsp;&nbsp;
              <span class="menu-small-text"> 1 dose </span>
            </li>
            <li>4.50€ &nbsp; 8.00€</li>
            <li>4.50€</li>
            <li>7.00€</li>
            <li>8.00€</li>
            <li>4.00€</li>
            <li>3.00€</li>
            <li>3.00€</li>
            <li>3.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">licor/outros</legend>
          <ul class="menu-ul">
            <li>Vinho do Porto</li>
            <li>Per Se</li>
            <li>Per Se (Tónico)</li>
            <li>Beirão</li>
            <li>Campari</li>
            <li>Baileys</li>
            <li>DramBuie</li>
            <li>Limoncello</li>
            <li>Disaronno</li>
            <li>Amêndoa Amarga</li>
            <li>Angelica</li>
            <li>Grand Marnier</li>
          </ul>
          <ul class="menu-ul-price">
            <li>2.50€</li>
            <li>3.00€</li>
            <li>4.50€</li>
            <li>3.00€</li>
            <li>3.00€</li>
            <li>3.00€</li>
            <li>5.00€</li>
            <li>3.00€</li>
            <li>5.00€</li>
            <li>3.50€</li>
            <li>3.50€</li>
            <li>5.00€</li>
          </ul>
        </fieldset>
      </article>
    </section>

    <section class="menu-section">
      <article id="food">
        <h3>food</h3>
        <fieldset>
          <legend align="center">Tapas</legend>
          <ul class="menu-ul">
            <li>Cesto de pão <span class="menu-small-text">(primeiro grátis)</span></li>
            <li>Sopa do Dia</li>
            <li>Tábua de Queijos</li>
            <li>Tábua de Queijos espacial</li>
            <li>Tábua Regional</li>
            <li>Tábua Mista</li>
            <li>Aros de Cebola</li>
            <li>Batatas à Manezinho</li>
            <li>Batata Frita</li>
            <li>Palitos de Frango Panados</li>
            <li>Camarão Alhinho</li>
            <li>Camarão à Manezinho</li>
            <!-- <li>Camarão à Manezinho</li> -->
            <li>Atum Braseado</li>
            <li>Ceviche de camarão</li>



          </ul>
          <ul class="menu-ul-price">
            <li>1.50€</li>
            <li>2.00€</li>
            <li>10.00€</li>
            <li>15.00€</li>
            <li>12.00€</li>
            <li>13.00€</li>
            <li>4.00€</li>
            <li><span class="menu-small-text">c/Bacon & Queijo &nbsp;</span>5.00€</li>
            <li><span class="menu-small-text">1 dose &nbsp;</span>3.50€</li>
            <li>5.00€</li>

            <li><span class="menu-small-text">10 uni &nbsp;</span>15.00€</li>
            <!-- <li><span class="menu-small-text">6 uni &nbsp;</span>10.00€</li> -->

            <li><span class="menu-small-text">12 uni &nbsp;</span>20.00€</li>
            <li>12.00€</li>
            <li>15.00€</li>

          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Saladas</legend>
          <ul class="menu-ul">
            <li>Salada Simples</li>
            <li>Salada de Frango</li>
            <li>Salada de Camarão</li>
            <li>Salada Vegan</li>
          </ul>
          <ul class="menu-ul-price">
            <li>5.00€</li>
            <li>12.00€</li>
            <li>12.00€</li>
            <li>12.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Peixe</legend>
          <ul class="menu-ul menu-ul-secondary">
            <li>Fish and Chips</li>
            <li>Fish and Salada</li>
            <li>Peixe do Dia <span class="menu-small-text">(preço sob consulta)</span> </li>
            <li>Polvo à Manezinho</li>
          </ul>
          <ul class="menu-ul-price menu-ul-secondary">
            <li>17.00€</li>
            <li>17.00€</li>
            <li>17.00€ - 28.00€</li>
            <li>26.00€</li>
          </ul>
        </fieldset>

        <fieldset>
          <legend align="center">Marisco</legend>
          <ul class="menu-ul menu-ul-secondary">
            <li>Cataplana Peixe e Marisco</li>
            <!-- <li>Cataplana Peixe e Marisco</li> -->
            <li>Cataplana Especial Manezinho</li>
            <!-- <li>Cataplana Especial Manezinho</li> -->
            <li>Lapas <span class="menu-small-text">(meia dose)</span> </li>
            <li>Lapas <span class="menu-small-text">(dose)</span> </li>
            <li>Amêijoas <span class="menu-small-text">(meia dose)</span> </li>
            <li>Amêijoas <span class="menu-small-text">(dose)</span> </li>
            <li>Cavaco</li>
          </ul>
          <ul class="menu-ul-price menu-ul-secondary">
            <li><span class="menu-small-text"><i class="fa-regular fa-user"></i>&nbsp;x 2 &nbsp;</span> 55.00€</li>
            <!-- <li><span class="menu-small-text"><i class="fa-regular fa-user"></i>&nbsp;x 4 &nbsp;</span> 90.00€</li> -->
            <li><span class="menu-small-text"><i class="fa-regular fa-user"></i>&nbsp;x 2 &nbsp;</span> 75.00€</li>
            <!-- <li><span class="menu-small-text"><i class="fa-regular fa-user"></i>&nbsp;x 4 &nbsp;</span>125.00€</li> -->
            <li>12.50€</li>
            <li>25.00€</li>
            <li>27.50€</li>
            <li>55.00€</li>
            <li>60.00€ /kg</li>
          </ul>
        </fieldset>
        <p class="menu-legend-p">
          <span><i class="fa-regular fa-user"></i> &nbsp = pessoas</span>
        </p>


        <fieldset>
          <legend align="center">carne</legend>
          <ul class="menu-ul">
            <!-- <li>T-Bone</li> -->
            <li>Picanha Importada</li>
            <li>Vazia</li>
            <li>Filet Mignon</li>
            <li>Bife de Frango Grelhado </li>
            <li>Bife (vazia) à Manezinho <span class="menu-small-text">(com molho de café)</span></li>
            <!-- <li>T-Bone Importado</li>
            <li>Coelhinhos de Porco</li>
            <li>Francesinha</li> -->
            <li>Selecção de carnes <span class="menu-small-text">(2 pessoas)</span></li>
          </ul>
          <ul class="menu-ul-price">
            <!-- <li>24.00€</li> -->
            <li>24.00€</li>
            <li>20.00€</li>
            <li>28.00€</li>
            <li>14.00€</li>
            <li>22.00€</li>
            <li>60.00€</li>
            <li></li>

          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">Hambúrguer</legend>
          <ul class="menu-ul">
            <!-- <li>Peixe</li> -->
            <!-- <li>Frango Crocante</li> -->
            <li>Burger de atum</li>
            <li>Manezinho</li>
            <li>Manezinho Picante</li>
            <!-- <li>Manezinho Especial</li> -->
            <li>Manezinho Simples</li>
          </ul>
          <ul class="menu-ul-price">
            <li>13.00€</li>
            <li>12.00€</li>
            <li>13.00€</li>
            <li>9.00€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">CRIANÇA</legend>
          <ul class="menu-ul menu-ul-secondary">
            <li><span class="menu-small-text">De 1 a 12 anos</span></li>
            <li>Menu </li>
            <li> <span class="menu-small-text">Tiras de Frango Panado com batata frita e sumo natural</span></li>
            <li>Hambúrguer</li>
          </ul>
          <ul class="menu-ul-price">
            <li>&nbsp;</li>
            <li>7.00€</li>
            <li>&nbsp;</li>
            <li>7.00€</li>
          </ul>
        </fieldset>
        <fieldset>
          <legend align="center">sobremesa</legend>
          <ul class="menu-ul">

            <li>Cheescake </li>
            <li> <span class="menu-small-text">(Limão, Morango, Maracujá, kiwi, Mirtilo)</span></li>
            <li>Tarte</li>
            <li>Mousse</li>
          </ul>
          <ul class="menu-ul-price">

            <li>4.00€</li>
            <li>&nbsp;</li>
            <li>4.00€</li>
            <li>4.00€</li>
          </ul>
        </fieldset>
        <!-- <fieldset>
        <legend align="center"></legend>
        <ul class="menu-ul"></ul>
        <ul class="menu-ul-price"></ul>
      </fieldset> -->
      </article>
    </section>

    <section class="menu-section">
      <article id="cocktails">
        <h3>cocktails</h3>
        <fieldset>
          <legend align="center">Cocktails</legend>
          <ul class="menu-ul">
            <li>Caipirinha</li>
            <li>Caipiroska</li>
            <li>Caipirágua <span class="menu-small-text">(sem álcool)</span></li>
            <li>Mojito</li>
            <li>Jack & Coke</li>
            <li>Pinã Colada</li>
            <li>Tequila Sunrise</li>
            <li>Sex on The Rocks</li>
            <li>Daiquiri</li>
            <li>Long Island Iced Tea</li>
            <li>Bramble</li>
            <li>Cosmopolitan</li>
            <li>Cuba Libre</li>
            <li>Tom Collins</li>
            <li>Aperol Spritz</li>
            <li>Blue Hawaii</li>
            <li>Sour <span class="menu-small-text">(* whisky, rum ou vodka)</span></li>
            <li>Margarita <span class="menu-small-text">(* limão, ananás ou morango)</span></li>
            <li><span class="menu-small-text">* escolher uma das bebidas / sabo</span></li>
          </ul>
          <ul class="menu-ul-price">
            <li>5.00€</li>
            <li>5.00€</li>
            <li>4.00€</li>
            <li>6.00€</li>
            <li>4.00€</li>
            <li>6.00€</li>
            <li>6.00€</li>
            <li>5.00€</li>
            <li>6.00€</li>
            <li>7.00€</li>
            <li>6.00€</li>
            <li>6.00€</li>
            <li>5.00€</li>
            <li>6.00€</li>
            <li>5.00€</li>
            <li>5.00€</li>
            <li>5.00€</li>
            <li>4.00€</li>
            <li>&nbsp</li>
          </ul>
        </fieldset>
      </article>
    </section>
    <div class="menu-nav">
      <ul>
        <!-- <li class="menu-nav-item"><a href="#drinks">Drinks</a></li> -->
        <li class="menu-nav-item"><a href="#wine">Wine</a></li>
        <li class="menu-nav-item"><a href="#bar">Bar</a></li>
        <li class="menu-nav-item"><a href="#food">Food</a></li>
        <li class="menu-nav-item"><a href="#drinks">Drinks</a></li>
      </ul>
    </div>
</main>

<?php
include "includes/footer.html";


?>