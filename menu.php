<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";
?>
<link rel="stylesheet" href="assets/css/menuStyle24.css?v=24">
<?php
include "includes/nav.html"
?>


<main class="menu-main">
  <header class="menu-header">
    <h1>Menu</h1>
    <div class="menu-nav">
      <ul>
        <!-- <li class="menu-nav-item"><a href="#drinks">Drinks</a></li> -->
        <li class="menu-nav-item"><a href="#wine">Wine</a></li>
        <li class="menu-nav-item" style="display: none;"><a href="#bar">Bar</a></li>
        <li class="menu-nav-item"><a href="#food">Food</a></li>
        <li class="menu-nav-item" style="display: none;"><a href="#cocktails">Cocktails</a></li>
        
      </ul>
    </div>
  </header>


  <section id="wine">
    <h3>Wine</h3>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            <h4>Açores</h4>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Tinto:</th>
        </tr>
        <tr>
          <td>
            Terras Lava
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">Branco:</th>
        </tr>
        <tr>
          <td>
            Terras Lava
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr>
          <td>
            Frei Gigante
          </td>
          <td>
            26.00 €
          </td>
        </tr>
        <tr>
          <td>
            Pedras Brancas
          </td>
          <td>
            26.00 €
          </td>
        </tr>
        <tr>
          <td>
            Rola Pipa
          </td>
          <td>
            30.00 €
          </td>
        </tr>
        <tr>
          <td>
            Chão de Lava
          </td>
          <td>
            30.00 €
          </td>
        </tr>
        <tr>
          <td>
            Pedras Brancas Reserva
          </td>
          <td>
            30.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">Rosé:</th>
        </tr>
        <tr>
          <td>
            Insula<small><em>(Chão de Lava)</em></small>
          </td>
          <td>
            22.00 €
          </td>
      </tbody>
    </table>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            <h4>Alentejo</h4>
          </th>
        </tr>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Tinto</th>
        </tr>
        <!-- 
        Oitenta 13.00 €
Vidigueira 13.00 €
Trinca Bolotas 14.00 €
Grande Trinca Bolotas 16.00 €

Encosta das Predizes (Vinhas Velhas -
reserva)

17.00 €
Herdade do Paço do Conde (Syrah) 18.00 €
Convento da Tomina 20.00 €
Herdade das Servas (sem barrica) 23.00 €
Esporão 26.00 €
Tapada de Coelheiros 40.00 €
Quinta Paral Reserva 45.00 €
Dona Maria Grande Reserva 46.00 €
Parcelas 55.00 € -->
        <tr>
          <td>
            Oitenta
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vidigueira
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Trinca Bolotas
          </td>
          <td>
            14.00 €
          </td>
        </tr>
        <tr>
          <td>
            Grande Trinca Bolotas
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr>
          <td>
            Encosta das Predizes<small><em>(Vinhas Velhas - reserva)</em></small>
          </td>
          <td>
            17.00 €
          </td>
        </tr>
        <tr>
          <td>
            Herdade do Paço do Conde<small><em>(Syrah)</em></small>
          </td>
          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <td>
            Convento da Tomina
          </td>
          <td>
            20.00 €
          </td>
        </tr>
        <tr>
          <td>
            Herdade das Servas<small><em>(sem barrica)</em></small>
          </td>
          <td>
            23.00 €
          </td>
        </tr>
        <tr>
          <td>
            Esporão
          </td>
          <td>
            26.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tapada de Coelheiros
          </td>
          <td>
            40.00 €
          </td>
        </tr>
        <tr>
          <td>
            Quinta Paral Reserva
          </td>
          <td>
            45.00 €
          </td>
        </tr>
        <tr>
          <td>
            Dona Maria Grande Reserva
          </td>
          <td>
            46.00 €
          </td>
        </tr>
        <tr>
          <td>
            Parcelas
          </td>
          <td>
            55.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">Branco</th>
        </tr>
        <!-- Trinca Bolotas 13.00 €
Vidigueira 14.00 €

Encosta das Predizes (Private
selection)

15.00 €
Esporão 16.00 €
Noia 16.00 €
Vidigueira (Antão Vaz) 16.00 €
Esporão Reserva 22.00 €
Quinta do Paral Reserva 28.00 € -->
        <tr>
          <td>
            Trinca Bolotas
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vidigueira
          </td>
          <td>
            14.00 €
          </td>
        </tr>
        <tr>
          <td>
            Encosta das Predizes <small><em>(Private selection)</em></small>
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Esporão
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr>
          <td>
            Noia
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vidigueira<small><em>(Antão Vaz)</em></small>
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr>
          <td>
            Esporão Reserva
          </td>
          <td>
            22.00 €
          </td>
        </tr>
        <tr>
          <td>
            Quinta do Paral Reserva
          </td>
          <td>
            28.00 €
          </td>
        </tr>

      </tbody>
      </thead>
    </table>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Dão
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">branco:</th>
        </tr>
        <!-- Taboadella 70.00 € -->
        <tr>
          <td>
            Taboadella
          </td>
          <td>
            70.00 €
          </td>

      </tbody>
    </table>

    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Douro
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Tinto:</th>
        </tr>
        <!-- Assobio 13.00 €
Papa-Figos 15.00 €
Vinha Grande 18.00 €
Callabriga 22.00 €
Duas Quintas 24.00 €
Castas Escondidas 38.00 €
Duas Quintas Reserva 45.00 €
Quinta da Lêda 50.00 €
Batuta 65.00 €
Carvalhas Tinta Francisca 70.00 €
Carvalhas Vinhas Velhas 70.00 €
Antónia Adelaide Ferreira 105.00 €
Mirabílis 180.00 €

Branco:

Papa-Figos 15.00 €
Grainha 19.00 €
Carvalhas 40.00 €
Antónia Adelaide Ferreira 65.00 €
Mirabílis 80.00 € -->
        <tr>
          <td>
            Assobio
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Papa-Figos
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vinha Grande
          </td>
          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <td>
            Callabriga
          </td>
          <td>
            22.00 €
          </td>
        </tr>
        <tr>
          <td>
            Duas Quintas
          </td>
          <td>
            24.00 €
          </td>
        </tr>
        <tr>
          <td>
            Castas Escondidas
          </td>
          <td>
            38.00 €
          </td>
        </tr>
        <tr>
          <td>
            Duas Quintas Reserva
          </td>
          <td>
            45.00 €
          </td>
        </tr>
        <tr>
          <td>
            Quinta da Lêda
          </td>
          <td>
            50.00 €
          </td>
        </tr>
        <tr>
          <td>
            Batuta
          </td>
          <td>
            65.00 €
          </td>
        </tr>
        <tr>
          <td>
            Carvalhas Tinta Francisca
          </td>
          <td>
            70.00 €
          </td>
        </tr>
        <tr>
          <td>
            Carvalhas Vinhas Velhas
          </td>
          <td>
            70.00 €
          </td>
        </tr>
        <tr>
          <td>
            Antónia Adelaide Ferreira
          </td>
          <td>
            105.00 €
          </td>
        </tr>
        <tr>
          <td>
            Mirabílis
          </td>
          <td>
            180.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">Branco:</th>
        </tr>
        <tr>
          <td>
            Papa-Figos
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Grainha
          </td>
          <td>
            19.00 €
          </td>
        </tr>
        <tr>
          <td>
            Carvalhas
          </td>
          <td>
            40.00 €
          </td>
        </tr>
        <tr>
          <td>
            Antónia Adelaide Ferreira
          </td>
          <td>
            65.00 €
          </td>
        </tr>
        <tr>
          <td>
            Mirabílis
          </td>
          <td>
            80.00 €
          </td>
        </tr>

    </table>
    <!-- Minho

Branco/Verde:

Muralhas de Monçao 12.00 €
Torre de Menagem 14.00 €

Rosé:

Mateus 10.00 € -->
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Minho
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Branco/Verde:</th>
        </tr>
        <tr>
          <td>
            Muralhas de Monçao
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Torre de Menagem
          </td>
          <td>
            14.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">Rosé:</th>
        </tr>
        <tr>
          <td>
            Mateus
          </td>
          <td>
            10.00 €
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Tejo

Tinto:

Cabeça de Toiro 14.00 € -->

    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Tejo
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Tinto:</th>
        </tr>
        <tr>
          <td>
            Cabeça de Toiro
          </td>
          <td>
            14.00 €
          </td>
        </tr>
      </tbody>
    </table>

    <!-- 
    Itália

Vinho Espumante Rosé:
Lambrusco 8.00 €
 -->

    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Itália
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Vinho Espumante Rosé:</th>
        </tr>
        <tr>
          <td>
            Lambrusco
          </td>
          <td>
            8.00 €
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Vinho Ao Copo

Tinto 3.00 €
Branco 3.00 €
Rosé 3.00 €
Pressão 3.00 €
Dos Açores 6.00 € -->

    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Vinho Ao Copo
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">Tinto</th>
        </tr>
        <tr>
          <td>
            Tinto
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Branco
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Rosé
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Pressão
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Dos Açores
          </td>
          <td>
            6.00 €
          </td>
        </tr>
      </tbody>
    </table>

    <!-- menu sala  -->

    <!-- Entradas:


 Sopa do dia 2.5 €

 Cesto de pão com manteiga
aromatizada

2 €

 Azeitonas temperadas 1.5 €

 Aros de cebola em tempura 3.5 €
 Batatas à Manezinho
(batata frita com bacon e molho de
queijo)

5 €

 Tábua de queijos de São Jorge
(queijos de 3, 7, 12 e 24 meses de cura
com mel da fajã)

15 €

 Tábua de queijos
(queijos regionais, a acompanhar com
compota e torradinhas)

10 €

 Tábua mista
(queijos regionais, presunto, chourição,
paio, compota e azeitonas temperadas)

13 €

 Camarão alhinho
(camarão temperado com alho e massa
malagueta e vinho branco,
acompanhado de um cesto de pão)

15 €

 Camarão à Manezinho
(camarão frito em tempura
acompanhado com batata frita e
molhos: açafrão, tártaro e ketchup)

20 €

 Chouriço frito com mel e
alecrim

4 €

 Morcela frita com laranja e
ananás

8 €

 Palitos de frango panados
(com molho picante)

6 € -->
  </section>
  <section id="food">
    <h3>Food</h3>
    <div class="sub-menu-nav">
      <ul>
      <li ><a href="#saladas">Saladas</a></li>
        <li ><a href="#hambúrguer">Hambúrguer</a></li>
        <li ><a href="#carne">Carne</a></li>
        <li ><a href="#peixe">Peixe</a></li>
        <!-- especialidades -->
        <li ><a href="#especialidades">Especialidades</a></li>
        <li ><a href="#sobremesas">Sobremesas</a></li>
        <!-- menu CRIANÇA -->
        <li ><a href="#Criança">Menu Criança</a></li>

      </ul>
    </div>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Entradas
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">
            Couvert gratis <small><em>(cesto de pão com manteiga aromatizada)</em></small>
          </td>
        </tr>
        <tr>
          <td>
            Sopa do dia
          </td>
          <td>
            2.00 €
          </td>
        </tr>
        <tr>
          <td>
            Cesto de pão com manteiga
            aromatizada
          </td>
          <td>
            2.00 €
          </td>
        </tr>
        <tr>
          <td>
            Azeitonas temperadas
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Aros de cebola em tempura
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Batatas à Manezinho
            <small>
              <em>
                (batata frita com bacon e molho de
                queijo)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tábua de queijos de São Jorge
            <small>
              <em>
                (queijos de 3, 7, 12 e 24 meses de cura
                com mel da fajã)
              </em>
            </small>
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tábua de queijos
            <small>
              <em>
                (queijos regionais, a acompanhar com
                compota e torradinhas)
              </em>
            </small>
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tábua mista
            <small>
              <em>
                (queijos regionais, presunto, chourição,
                paio, compota e azeitonas temperadas)
              </em>
            </small>
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Camarão alhinho
            <small>
              <em>
                (camarão temperado com alho e massa
                malagueta e vinho branco,
                acompanhado de um cesto de pão)
              </em>
            </small>
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Camarão à Manezinho
            <small>
              <em>
                (camarão frito em tempura
                acompanhado com batata frita e
                molhos: açafrão, tártaro e ketchup)
              </em>
            </small>
          </td>
          <td>
            20.00 €
          </td>
        </tr>
        <tr>
          <td>
            Chouriço frito com mel e
            alecrim
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Morcela frita com laranja e
            ananás
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Palitos de frango panados
            <small>
              <em>
                (com molho picante)
              </em>
            </small>
          </td>
          <td>
            6.00 €
          </td>
        </tr>

        <tr class="tr-divider" id="saladas">
          <th colspan="2">
            saladas:
          </th>
        </tr>
        <tr>
          <td>
            Salada simples
            <small>
              <em>
                (mistura de alface, cebola roxa e tomate
                cherry)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Salada de camarão
            <small>
              <em>
                (camarão frito, mistura de alface, tomate
                cherry, cebola roxa e vinagrete)
              </em>
            </small>
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Salada de frango
            <small>
              <em>
                (frango grelhado, mistura de alface,
                tomate cherry, cebola roxa e
                vinagrete)
              </em>
            </small>
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Salada vegano
            <small>
              <em>
                (mistura de alface, cebola roxa, tomate
                cherry, mistura de legumes da época
                salteados e tofu)
              </em>
            </small>
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Salada vegetariana
            <small>
              <em>
                (mistura de alface, cebola roxa, tomate
                cherry, mistura de legumes da época
                salteados e batata assada)
              </em>
            </small>
          </td>
          <td>
            12.00 €
          </td>
        </tr>

        <!-- Hambúrguer:
 Hambúrguer à Manezinho
(pão, molho Mil Ilhas, dupla de carne de
vaca, marmelada de cebola, dupla de
bacon, dupla de queijo cheddar e aros
de cebola)

15.00 €

 Hambúrguer à Manezinho
Picante
(pão, molho Mil Ilhas, molho picante,
dupla de carne de vaca, marmelada de
cebola, dupla de bacon, dupla de queijo
cheddar, jalapenhos e aros de cebola)

16.00 €

 Hambúrguer à Manezinho
Simples
(pão, molho Mil Ilhas, carne de vaca,
marmelada de cebola, bacon, queijo
cheddar e aros de cebola)

10.00 €

 Hambúrguer de Atum
(pão, molho tártaro, bife de atum e aros
de cebola)

16.00 €

*Acompanhadas com Salada, batata frita e molhos (açafrão, tártaro e ketchup) -->
        <tr class="tr-divider" id="hambúrguer">
          <th colspan="2">
            Hambúrguer:
          </th>
        </tr>
        <tr>
          <td>
            Hambúrguer à Manezinho
            <small>
              <em>
                (pão, molho Mil Ilhas, dupla de carne de
                vaca, marmelada de cebola, dupla de
                bacon, dupla de queijo cheddar e aros
                de cebola)
              </em>
            </small>
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hambúrguer à Manezinho
            Picante
            <small>
              <em>
                (pão, molho Mil Ilhas, molho picante,
                dupla de carne de vaca, marmelada de
                cebola, dupla de bacon, dupla de queijo
                cheddar, jalapenhos e aros de cebola)
              </em>
            </small>
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hambúrguer à Manezinho
            Simples
            <small>
              <em>
                (pão, molho Mil Ilhas, carne de vaca,
                marmelada de cebola, bacon, queijo
                cheddar e aros de cebola)
              </em>
            </small>

          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hambúrguer de Atum
            <small>
              <em>
                (pão, molho tártaro, bife de atum e aros
                de cebola)
              </em>
            </small>
          </td>
          <td>
            16.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2" class="footnote">
            *Acompanhadas com Salada, batata frita e molhos (açafrão, tártaro e ketchup)

          </th>
        </tr>
        <!-- Carne:
 Bife à Manezinho
(Filet Mignon em cama de espinafres,
batata doce assada e molho de
mostarda)

26.50 €

 Vazia
(com manteiga aromatizada) 20.00 €
 Picanha importada
(com manteiga aromatizada) 24.00 €
 Secretos de porco preto

22.00 €

 Seleção de carnes (2 pessoas)
(picanha, filet mignon e secretos de
porco preto

60.00 €

* Acompanhadas de arroz branco, legumes salteados, batata doce e branca assada) -->

        <tr class="tr-divider" id="carne">
          <th colspan="2">
            Carne:
          </th>
        </tr>
        <tr>
          <td>
            Bife à Manezinho
            <small>
              <em>
                (Filet Mignon em cama de espinafres,
                batata doce assada e molho de
                mostarda)
              </em>
            </small>
          </td>
          <td>
            26.50 €
          </td>
        </tr>
        <tr>
          <td>
            Vazia
            <small>
              <em>
                (com manteiga aromatizada)
              </em>
            </small>
          </td>
          <td>
            20.00 €
          </td>
        </tr>
        <tr>
          <td>
            Picanha importada
            <small>
              <em>
                (com manteiga aromatizada)
              </em>
            </small>
          </td>
          <td>
            24.00 €
          </td>
        </tr>
        <tr>
          <td>
            Secretos de porco preto
          </td>
          <td>
            22.00 €
          </td>
        </tr>
        <tr>
          <td>
            Seleção de carnes (2 pessoas)
            <small>
              <em>
                (picanha, filet mignon e secretos de
                porco preto)
              </em>
            </small>
          </td>
          <td>
            60.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bife de frango grelhado
            <small><em>(com salada, arroz branco e batata frita)</em></small>
          </td>
          <td>
            14.00 €
          </td>
        </tr>
        <tr>
          <th colspan="2" class="footnote">
            * Acompanhadas de arroz branco, legumes salteados, batata doce e branca assada
          </th>
        </tr>
        <!-- Peixe:
 Peixe:

 Tempura de peixe branco
(em cama de mistura de salada, molho
tártaro e batata frita)

18 €

 Peixe grelhado da época
(inteiro, à posta ou filete)

(preço sob consulta) 17 € a 28 €

 Polvo à Manezinho
(com batata assada)

26 €

* Acompanhado com arroz de grelos ou salada de batata
-->
        <tr class="tr-divider" id="peixe">
          <th colspan="2">
            Peixe:
          </th>
        </tr>
        <tr>
          <td>
            Tempura de peixe branco
            <small>
              <em>
                (em cama de mistura de salada, molho
                tártaro e batata frita)
              </em>
            </small>
          </td>
          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <td>
            Peixe grelhado da época
            <small>
              <em>
                (inteiro, à posta ou filete)
                (preço sob consulta)
              </em>
            </small>
          </td>
          <td>
            17 € a 28 €
          </td>
        </tr>
        <tr>
          <td>
            Polvo à Manezinho
            <small>
              <em>
                (com batata assada)
              </em>
            </small>
          </td>
          <td>
            26.00 €
          </td>
        </tr>
        <tr>
          <th colspan="2" class="footnote">
            * Acompanhado com arroz de grelos ou salada de batata
          </th>
        </tr>
      </tbody>
    </table>
    <!-- 
Especialidades

Entradas:

    • Ceviche
15.00€
    • Atum braseado
12.00€
    • Salada de Polvo
13.00€
    • Ameijoas de São Jorge à Chef
(500gr)
32.50€
    • Lapas
(500gr)
22.50€

Pratos Principais:

    • Alcatra
(acompanhada de arroz branco e Massa Sovada)
18.00€
    • Bife de Atum
(acompanhado de salada de batata)
23.00€
    • Cataplana de peixe e marisco 
(2 pessoas) 
(peixe, camarão, ameijoa de São Jorge em cama de cebola, tomate, batata e salsa)
60.00€
 -->
    <table class="menu-table" id="especialidades">
      <thead>
        <tr>
          <th colspan="2">
            Especialidades
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">
            Entradas:
          </th>
        </tr>
        <tr>
          <td>
            Ceviche
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Atum braseado
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Salada de Polvo
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Ameijoas de São Jorge à Chef
            <small>
              <em>
                (500gr)
              </em>
            </small>
          </td>
          <td>
            32.50 €
          </td>
        </tr>
        <tr>
          <td>
            Lapas
            <small>
              <em>
                (500gr)
              </em>
            </small>
          </td>
          <td>
            22.50 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">
            Pratos Principais:
          </th>
        </tr>
        <tr>
          <td>
            Alcatra
            <small>
              <em>
                (acompanhada de arroz branco e Massa Sovada)
              </em>
            </small>
          </td>
          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bife de Atum
            <small>
              <em>
                (acompanhado de salada de batata)
              </em>
            </small>
          </td>
          <td>
            23.00 €
          </td>
        </tr>
        <tr>
          <td>
            Cataplana de peixe e marisco
            <small>
              <em>
                (2 pessoas)
                (peixe, camarão, ameijoa de São Jorge em cama de cebola, tomate, batata e salsa)
              </em>
            </small>
          </td>
          <td>
            60.00 €
          </td>
        </tr>
      </tbody>
    </table>






    <!-- Sobremesas:
 À colher 4.00 €
 Ao garfo 4.00 €
 Fruta da época 2.50 € a 3.50 €
 Frutas da época laminada 8 € -->
    <table class="menu-table" id="sobremesas">
      <thead>

        <tr class="tr-divider">
          <th colspan="2">
            Sobremesas:
          </th>

      </thead>
      <tbody>
        </tr>
        <tr>
          <td>
            À colher
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Ao garfo
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Fruta da época
          </td>
          <td>
            2.50 € a 3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Frutas da época laminada
          </td>
          <td>
            8.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Menu criança

    • Sopa do dia
1.50€
    • Hambúrguer 
(pão, carne vaca, queijo cheddar, salada e batata frita)
7.00€
    • Bife de frango grelhado 
(ovo estrelado, arroz branco e batata frita)
8.00€
    • Nuggets de frango panado 
(arroz branco e batata frita)
7.00€
    • Filete de veja panado 
(arroz branco e salada)
8.00€
    • Fruta da época
2.50€ -->

    <table class="menu-table" id="Criança">
      <thead>
        <tr>
          <th colspan="2">
            Menu Criança
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Sopa do dia
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Hambúrguer
            <small>
              <em>
                (pão, carne vaca, queijo cheddar, salada e batata frita)
              </em>
            </small>
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bife de frango grelhado
            <small>
              <em>
                (ovo estrelado, arroz branco e batata frita)
              </em>
            </small>
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nuggets de frango panado
            <small>
              <em>
                (arroz branco e batata frita)
              </em>
            </small>
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Filete de veja panado
            <small>
              <em>
                (arroz branco e salada)
              </em>
            </small>
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Fruta da época
          </td>
          <td>
            2.50 €
          </td>
        </tr>
      </tbody>
    </table>


  </section>

  <!-- BAR


Cerveja & Cidra

Sagres 33cl 
1.80€
Super Bock 33cl 
1.80€
Super Bock Zero 33cl 
1.80€
Super Bock Zero Preta 33cl
1.80€
Cidra de Maçã 
2.50€



Cerveja importada


Ao Copo:
Heineken 25cl 
1.50€
Heineken 50cl 
3.00€

À Garrafa:
Beck’s 
2.00€
Budweiser 
3.50€
Corona 
3.00€
Chimay 
7.00€
Duvel 
6.00€
Erdinger Zero
5.00€
Erdinger
7.00€
Franziskaner 
4.00€
Gordon Platinum 
7.00€
Guinness
7.00€
Gulden Draak 
7.00€
Heineken Zero 
1.50€
La Chouffe 
7.00€
Leffe Blond 
3.50€
Leffe Brune 
3.50€
Stella Artois 
2.50€
Timmermans
4.00€
Triple Karmeliet 
6.00€

 -->
  <section id="bar">
    <h3>Bar</h3>
    <div class="sub-menu-nav">
      <ul>
        <li><a href="#cerveja">Cerveja importada</a></li>
        <li><a href="#cocktails">Cocktails</a></li>
        <li><a href="#gin">Gin</a></li>
        <li><a href="#whiskey">Whiskey</a></li>
        <li><a href="#tequila">Tequila</a></li>
        <li><a href="#rum">Rum</a></li>
        <li><a href="#vodka">Vodka</a></li>
        <!-- aguardentes -->
        <li><a href="#aguardentes">Aguardentes & cognac</a></li>

        <li><a href="#licores">Licores & outros</a></li>
        <!-- apertivos -->
        <li><a href="#apertivos">Aperitivos</a></li>  
        <!-- semcomgas -->
        <li><a href="#semcomgas">Sem & com gás</a></li>
        <!-- quentes  -->
        <li><a href="#quentes">Bebidas quentes</a></li>
   
      </ul>
    </div>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Cerveja & Cidra
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Sagres 33cl
          </td>
          <td>
            1.80 €
          </td>
        </tr>
        <tr>
          <td>
            Super Bock 33cl
          </td>
          <td>
            1.80 €
          </td>
        </tr>
        <tr>
          <td>
            Super Bock Zero 33cl
          </td>
          <td>
            1.80 €
          </td>
        </tr>
        <tr>
          <td>
            Super Bock Zero Preta 33cl
          </td>
          <td>
            1.80 €
          </td>
        </tr>
        <tr>
          <td>
            Cidra de Maçã
          </td>
          <td>
            2.50 €
          </td>
        </tr>
      </tbody>
    </table>
    <table class="menu-table" id="cerveja">
      <thead>
        <tr>
          <th colspan="2">
            Cerveja importada
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">
            Ao Copo:
          </th>
        </tr>
        <tr>
          <td>
            Heineken 25cl
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Heineken 50cl
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">
            À Garrafa:
          </th>
        </tr>
        <tr>
          <td>
            Beck’s
          </td>
          <td>
            2.00 €
          </td>
        </tr>
        <tr>
          <td>
            Budweiser
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Corona
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Chimay
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Duvel
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Erdinger Zero
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Erdinger
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Franziskaner
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Gordon Platinum
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Guinness
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Gulden Draak
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Heineken Zero
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            La Chouffe
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Leffe Blond
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Leffe Brune
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Stella Artois
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Timmermans
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Triple Karmeliet
          </td>
          <td>
            6.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Cocktails

Aperol Spritz 
(Prosecco, Aperol e água com gás)
5.00€
Azedinha
(Cachaça, sumo limão galego, açúcar mascavado e limão galego)
6.00€
Blue Lagoon 
(Vodka, Blue Curaçao, sumo limão e Sprite)
5.00€
Caipilão 
(Vodka melão, Lima, açúcar mascavado)
5.00€
Caipirinha 
(Cachaça, sumo limas, açúcar mascavado e limas)
5.00€
Caipiroska 
(Vodka, sumo limas, açúcar mascavado e limas)
5.00€
Caipirágua 
(água, açúcar mascavado e limas)
4.00€
Cuba Libre 
(Rum, Coca Cola e sumo limão)
5.00€
Daiquiri 
(Rum, *Sumo e açúcar)
5.00€
Dry Martini 
(Gin e Martini Branco)
5.00€
Dry Martini com sumo maçã 
(Gin, Martini Rosso e sumo maçã)
5.00€
Expresso Martini
(Vodka, Kahlua, Café e açucar)
6.00€
Irish Coffee
(Jameson, Café, Açucar e chantily) 
6.00€
Jack & Coke 
(Jack Daniels e Coca Cola)
5.00€
Lemon Drop
(Vodka, Triple Sec, sumo limão e açúcar)
5.00€
Long Island Iced Tea 
(Vodka, Rum, Tequila, Gin, Triple Sec, sumo limão, Coca Cola e açúcar mascavado)
7.00€
Margarita 
(Tequila, *Sumo e açúcar) 
5.00€
Mojito 
(Rum, sumo lima, açúcar, água com gás e hortelã) 
6.00€
Moscow Mule 
(Vodka, Ginger Beer e sumo lima)
5.00€
Negroni 
(Gin, Bitter Campari e Martini Rosso)
5.00€
Pina Colada 
(Rum, batida côco e sumo ananás)
6.00€
Sour 
(Whiskey, vodka ou rum, sumo limão e açúcar)
5.00€
Tequila Sunrise 
(Tequila, sumo laranja e groselha)
5.00€
White Lady
(Gin, Triple Sec, Sumo Limão e açúcar)
5.00€

* Sumo: Laranja, Lima, Ananás ou Maracujá -->
    <table class="menu-table" id="cocktails">
      <thead>
        <tr>
          <th colspan="2">
            <h3>Cocktails</h3>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Aperol Spritz
            <small>
              <em>
                (Prosecco, Aperol e água com gás)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Azedinha
            <small>
              <em>
                (Cachaça, sumo limão galego, açúcar mascavado e limão galego)
              </em>
            </small>
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Blue Lagoon
            <small>
              <em>
                (Vodka, Blue Curaçao, sumo limão e Sprite)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Caipilão
            <small>
              <em>
                (Vodka melão, Lima, açúcar mascavado)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Caipirinha
            <small>
              <em>
                (Cachaça, sumo limas, açúcar mascavado e limas)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Caipiroska
            <small>
              <em>
                (Vodka, sumo limas, açúcar mascavado e limas)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Caipirágua
            <small>
              <em>
                (água, açúcar mascavado e limas)
              </em>
            </small>
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Cuba Libre
            <small>
              <em>
                (Rum, Coca Cola e sumo limão)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Daiquiri
            <small>
              <em>
                (Rum, *Sumo e açúcar)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Dry Martini
            <small>
              <em>
                (Gin e Martini Branco)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Dry Martini com sumo maçã
            <small>
              <em>
                (Gin, Martini Rosso e sumo maçã)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Expresso Martini
            <small>
              <em>
                (Vodka, Kahlua, Café e açucar)
              </em>
            </small>
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Irish Coffee
            <small>
              <em>
                (Jameson, Café, Açucar e chantily)
              </em>
            </small>
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack & Coke
            <small>
              <em>
                (Jack Daniels e Coca Cola)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Lemon Drop
            <small>
              <em>
                (Vodka, Triple Sec, sumo limão e açúcar)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Long Island Iced Tea
            <small>
              <em>
                (Vodka, Rum, Tequila, Gin, Triple Sec, sumo limão, Coca Cola e açúcar mascavado)
              </em>
            </small>
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Margarita
            <small>
              <em>
                (Tequila, *Sumo e açúcar)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Mojito
            <small>
              <em>
                (Rum, sumo lima, açúcar, água com gás e hortelã)
              </em>
            </small>
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Moscow Mule
            <small>
              <em>
                (Vodka, Ginger Beer e sumo lima)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Negroni
            <small>
              <em>
                (Gin, Bitter Campari e Martini Rosso)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Pina Colada
            <small>
              <em>
                (Rum, batida côco e sumo ananás)
              </em>
            </small>
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Sour
            <small>
              <em>
                (Whiskey, vodka ou rum, sumo limão e açúcar)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tequila Sunrise
            <small>
              <em>
                (Tequila, sumo laranja e groselha)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            White Lady
            <small>
              <em>
                (Gin, Triple Sec, Sumo Limão e açúcar)
              </em>
            </small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <th colspan="2" class="footnote">
            * Sumo: Laranja, Lima, Ananás ou Maracujá
          </th>
        </tr>
      </tbody>
    </table>






    <!-- 

Gin

Black Pig
9.00€
Black Pig Montado
12.00€
Bombay Sapphire
7.00€
Bulldog
9.00€
Etsu
10.00€
Etsu Reserva
13.00€
Gordon
5.00€
Gordon Pink
5.00€
Hendrick’s 
10.00€
Hendrick’s Flora Adora 
12.00€
Hendrick’s Lunar
12.00€
Hendrick’s Midsummer Solstice 
12.00€
Hendrick’s Neptunia
12.00€
Hendrick’s Orbium
12.00€
Martin Miller’s
9.00€
Mombassa
14.00€
Monkey 47 
18.00€
Nikka
15.00€
Nordés 
6.00€
Opihr
7.00€
Sharish 
8.00€
Sharish Blue 
8.00€
Tanqueray 
7.00€
Tanqueray Ten 
10.00€
Manezinho Gin
12.00€

Gin Dos Açores: 
Azor Dry
8.00€
Azor Premium
10.00€
Azor Reserva
15.00€
Azor Zero
8.00€
Rocha negra
10.00€ -->
    <table class="menu-table" id="gin">
      <thead>
        <tr>
          <th colspan="2">
            Gin
          </th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>
            Black Pig
          </td>
          <td>
            9.00 €
          </td>
        </tr>
        <tr>
          <td>
            Black Pig Montado
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bombay Sapphire
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bulldog
          </td>
          <td>
            9.00 €
          </td>
        </tr>
        <tr>
          <td>
            Etsu
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Etsu Reserva
          </td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Gordon
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Gordon Pink
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick’s
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick’s Flora Adora
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick’s Lunar
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick’s Midsummer Solstice
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick’s Neptunia
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick’s Orbium
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Martin Miller’s
          </td>
          <td>
            9.00 €
          </td>
        </tr>
        <tr>
          <td>
            Mombassa
          </td>
          <td>
            14.00 €
          </td>
        </tr>
        <tr>
          <td>
            Monkey 47
          </td>
          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nikka
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nordés
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Opihr
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Sharish
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Sharish Blue
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tanqueray
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Tanqueray Ten
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Manezinho Gin
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">
            Gin Dos Açores:
          </th>
        </tr>
        <tr>
          <td>
            Azor Dry
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Azor Premium
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Azor Reserva
          </td>
          <td>
            15.00 €
          </td>
        </tr>
        <tr>
          <td>
            Azor Zero
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Rocha negra
          </td>
          <td>
            10.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Whiskeys
½ dose
1 dose
Bushmills
3.00€
5.00€
Bushmills Black Bush (Sherry Cast)
4.00€
8.00€
Bushmills Single Malt 10 Anos

10.00€
Glenfiddich 10 Anos

8.00€
Jack Daniel’s
3.00€
5.00€
Jack Daniel’s Gentleman Jack

12.00€
Jack Daniel’s Fire
3.50€
6.00€
Jack Daniel’s Honey
3.50€
6.00€
Jack Daniel’s Maçã
3.50€
6.00€
Jack Daniel’s Single Barrel

12.00€
Jameson
3.00€
5.00€
J. Walker Red Label
2.50€
4.00€
J. Walker Black Label
4.00€
7.00€
J. Walker Double Black

10.00€
J. Walker Gold Label Reserva

13.00€
Monkey Shoulders

8.00€
Nikka the Barrel

14.00€
Nikka Taketsuru

18.00€ -->

    <table class="menu-table" id="whiskey">
      <h2></h2>
      <thead>
        <tr>
          <th colspan="3">
            Whiskeys
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th></th>
          <th>½ dose</th>
          <th>1 dose</th>
        </tr>
        <tr>
          <td>
            Bushmills
          </td>
          <td>
            3.00 €
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bushmills Black Bush <small><em>(Sherry Cast)</em></small>
          </td>
          <td>
            4.00 €
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bushmills Single Malt 10 Anos
          </td>
          <td></td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Glenfiddich 10 Anos
          </td>
          <td></td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack Daniel’s
          </td>
          <td>
            3.00 €
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack Daniel’s Gentleman Jack
          </td>
          <td></td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack Daniel’s Fire
          </td>
          <td>
            3.50 €
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack Daniel’s Honey
          </td>
          <td>
            3.50 €
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack Daniel’s Maçã
          </td>
          <td>
            3.50 €
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jack Daniel’s Single Barrel
          </td>
          <td></td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jameson
          </td>
          <td>
            3.00 €
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Red Label
          </td>
          <td>
            2.50 €
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Black Label
          </td>
          <td>
            4.00 €
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Double Black
          </td>
          <td></td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Gold Label Reserva
          </td>
          <td></td>
          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            Monkey Shoulders
          </td>
          <td></td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nikka the Barrel
          </td>
          <td></td>
          <td>
            14.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nikka Taketsuru
          </td>
          <td></td>
          <td>
            18.00 €
          </td>
        </tr>
      </tbody>
    </table>
    Tequila

    <!-- Tres Sombreros
2.50€
Patron Silver
5.00€
Patron Repousado 
6.00€
Patron Añejo
7.00€ -->
    <table class="menu-table" id="tequila">
      <thead>
        <tr>
          <th colspan="2">
            Tequila
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Tres Sombreros
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Patron Silver
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Patron Repousado
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Patron Añejo
          </td>
          <td>
            7.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Rum

Bacardi
3.00€
Barceló Añejo
6.00€ -->
    <table class="menu-table" id="rum">
      <thead>
        <tr>
          <th colspan="2">
            Rum
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Bacardi
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Barceló Añejo
          </td>
          <td>
            6.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Vodka

Smirnoff
3.00€
Absolut
4.00€
Ciroc Ananás
5.00€
Ciroc Pessego
5.00€
Ciroc Maçã
5.00€
Ciroc Manga
5.00€
Grey Goose
6.00€
Grey Goose Cereja
6.00€
Grey Goose Pêra
6.00€ -->

    <table class="menu-table" id="wodka">
      <thead>
        <tr>
          <th colspan="2">
            Vodka
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Smirnoff
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Absolut
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Ciroc Ananás
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Ciroc Pessego
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Ciroc Maçã
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Ciroc Manga
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Grey Goose
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Grey Goose Cereja
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Grey Goose Pêra
          </td>
          <td>
            6.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Aguardentes & Cognac
½ Dose
1 Dose
Antiqua Aguardente Velha
-
4.00€
Brandy Croft
-
4.00€
CRF
-
4.50€
CRF Reserva Extra
-
8.00€
Courvoisier Cognac
4.00€
7.00€
Hine Cognac
4.00€
7.00€

Aguardentes dos Açores:
Bagaceira

2.00€
Bagaço

3.50€
Canela

3.50€
Figo

3.50€ -->
    <table class="menu-table" id="aguardentes">
      <thead>
        <tr>
          <th colspan="3">
            Aguardentes & Cognac
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th></th>
          <th>½ Dose</th>
          <th>1 Dose</th>
        </tr>
        <tr>
          <td>
            Antiqua Aguardente Velha
          </td>
          <td></td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Brandy Croft
          </td>
          <td></td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            CRF
          </td>
          <td></td>
          <td>
            4.50 €
          </td>
        </tr>
        <tr>
          <td>
            CRF Reserva Extra
          </td>
          <td></td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Courvoisier Cognac
          </td>
          <td>
            4.00 €
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hine Cognac
          </td>
          <td>
            4.00 €
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="3">
            Aguardentes dos Açores:
          </th>
        </tr>
        <tr>
          <td>
            Bagaceira
          </td>
          <td></td>
          <td>
            2.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bagaço
          </td>
          <td></td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Canela
          </td>
          <td></td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Figo
          </td>
          <td></td>
          <td>
            3.50 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Licores & Outros

Amarula
3.50€
Amêndoa Amarga
3.50€
Beirão
3.00€
Baileys
3.00€
Campari
3.00€
Drambuie
5.00€
Grand Marnier
5.00€
Jagermeister
3.00€
Vinho Porto Tinto
3.00€
Vinho Porto Branco
3.00€
Vinho Porto Dona Antonia (Reserva)
4.50€
Kahlua
3.50€

Licores dos Açores:
Amora
3.50€
Lajido (licoroso) 
5.00€
Neveda
3.50€
Angelica
3.50€ -->

    <table class="menu-table" id="licores">
      <thead>
        <tr>
          <th colspan="2">
            Licores & Outros
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Amarula
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Amêndoa Amarga
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Beirão
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Baileys
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Campari
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Drambuie
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Grand Marnier
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jagermeister
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vinho Porto Tinto
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vinho Porto Branco
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Vinho Porto Dona Antonia <small><em>(Reserva)</em></small>
          </td>
          <td>
            4.50 €
          </td>
        </tr>
        <tr>
          <td>
            Kahlua
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">
            Licores dos Açores:
          </th>
        </tr>
        <tr>
          <td>
            Amora
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Lajido <small><em>(licoroso)</em></small>
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Neveda
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Angelica
          </td>
          <td>
            3.50 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Aperitivos

Martini Branco
2.50€
Martini Rosso
2.50€
Moscatel
3.00€
Per Se
2.50€ -->
    <table class="menu-table" id="apertivos">
      <thead>
        <tr>
          <th colspan="2">
            Aperitivos
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Martini Branco
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Martini Rosso
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Moscatel
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Per Se
          </td>
          <td>
            2.50 €
          </td>
        </tr>
      </tbody>
    </table>

    <!-- 
À Garrafa:
Água 37.5cl
1.20€
Água 75cl
2.50€
Nestea
1.50€
Sumo Natural 
3.00€

Ao Copo:
Compal
(Ananás, Laranja, Maçã e Maracujá) 
1.50€

Sem Gás


À Garrafa:
Água 37.5cl
1.20€
Água 75cl
2.50€
Nestea
1.50€
Sumo Natural 
3.00€

Ao Copo:
Compal
(Ananás, Laranja, Maçã e Maracujá) 
1.50€

 -->

    <table class="menu-table" id="semcomgas">
      <thead>
        <tr>
          <th colspan="2">
            Sem Gás
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th></th>
          <th>À Garrafa:</th>
        </tr>
        <tr>
          <td>
            Água 37.5cl
          </td>
          <td>
            1.20 €
          </td>
        </tr>
        <tr>
          <td>
            Água 75cl
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Nestea
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Sumo Natural
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <th></th>
          <th>Ao Copo:</th>
        </tr>
        <tr>
          <td>
            Compal <small><em>(Ananás, Laranja, Maçã e Maracujá)</em></small>
          </td>
          <td>
            1.50 €
          </td>
        </tr>
      </tbody>
    </table>


    <!-- Quentes


Café
0.80€
Café Americano
1.60€
Café Pingado
0.80€
Cappuccino
2.50€
Carioca
0.60€
Carioca Limão
0.60€
Chá
1.50€
Descafeinado
0.80€
Galão
2.00€
Garoto
0.80€
Meia de Leite
1.50€ -->

    <table class="menu-table" id="quentes">
      <thead>
        <tr>
          <th colspan="2">
            Quentes
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            Café
          </td>
          <td>
            0.80 €
          </td>
        </tr>
        <tr>
          <td>
            Café Americano
          </td>
          <td>
            1.60 €
          </td>
        </tr>
        <tr>
          <td>
            Café Pingado
          </td>
          <td>
            0.80 €
          </td>
        </tr>
        <tr>
          <td>
            Cappuccino
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Carioca
          </td>
          <td>
            0.60 €
          </td>
        </tr>
        <tr>
          <td>
            Carioca Limão
          </td>
          <td>
            0.60 €
          </td>
        </tr>
        <tr>
          <td>
            Chá
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Descafeinado
          </td>
          <td>
            0.80 €
          </td>
        </tr>
        <tr>
          <td>
            Galão
          </td>
          <td>
            2.00 €
          </td>
        </tr>
        <tr>
          <td>
            Garoto
          </td>
          <td>
            0.80 €
          </td>
        </tr>
        <tr>
          <td>
            Meia de Leite
          </td>
          <td>
            1.50 €
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Snacks










  </section>



</main>

<?php
include "includes/footer.html";


?>