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
        <!--  Salada simples
(mistura de alface, cebola roxa e tomate
cherry)

5.00 €

 Salada de camarão
(camarão frito, mistura de alface, tomate
cherry, cebola roxa e vinagrete)

15.00 €

 Salada de frango
(frango grelhado, mistura de alface,
tomate cherry, cebola roxa e
vinagrete)

12.00 €

 Salada vegano
(mistura de alface, cebola roxa, tomate
cherry, mistura de legumes da época
salteados e tofu)

15.00 €

 Salada vegetariana
(mistura de alface, cebola roxa, tomate
cherry, mistura de legumes da época
salteados e batata assada)

12.00 €
   -->
        <tr class="tr-divider">
          <th colspan="2">
            Saladas:
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
        <tr class="tr-divider">
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

        <tr class="tr-divider">
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
        <tr class="tr-divider">
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

        <!-- Sobremesas:
 À colher 4.00 €
 Ao garfo 4.00 €
 Fruta da época 2.50 € a 3.50 €
 Frutas da época laminada 8 € -->
        <tr class="tr-divider">
          <th colspan="2">
            Sobremesas:
          </th>
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

  </section>


  <section id="bar" style="display:none;">
    <h3>Drinks</h3>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Drinks
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="tr-divider">
          <th colspan="2">
            Quentes
          </th>
        </tr>
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
            Carioca
          </td>
          <td>
            0.70 €
          </td>
        </tr>
        <tr>
          <td>
            Carioca Limão
          </td>
          <td>
            0.70 €
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
        <tr>
          <td>
            Leite com Chocolate
          </td>
          <td>
            2.00 €
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
            Chá
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">
            SEM GÁS
          </th>
        </tr>
        <tr>
          <td>
            Água
          </td>
          <td>
            <span class="menu-size-icon">p</span> 1.20 € &nbsp; <span class="menu-size-icon">g</span> 2.50 €
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
        <tr class="tr-divider">
          <th colspan="2">
            COM GÁS
          </th>
        </tr>
        <tr>
          <td>
            Água com Gás
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Água Tónica
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Fanta
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Sprite
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Coca-Cola
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <td>
            Coca-Cola Zero
          </td>
          <td>
            1.50 €
          </td>
        </tr>
      </tbody>
    </table>

    <h3>Bar</h3>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Cerceja & Cidra
          </th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            Sagres <span class="menu-small-text">0,33cl </span>
          </td>
          <td>
            1.80 €
          </td>
        </tr>
        <tr>
          <td>
            Superbock <span class="menu-small-text">0,33cl </span>
          </td>
          <td>
            1.80 €
          </td>
        </tr>
        <tr>
          <td>
            Super Bock Green
          </td>
          <td>
            1.80 €
          </td>

        </tr>
        <tr>
          <td>
            Bandida do Pomar
          </td>
          <td>
            2.00 €
          </td>
        </tr>
        <tr>
          <td>
            Sommersby
          </td>
          <td>
            1.50 €
          </td>
        </tr>
        <tr>
          <th colspan="2">
            Cerveja Importada
          </th>
        </tr>
        <tr>
          <td>
            Heineken <span class="menu-small-text">0,50cl </span>
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Heineken <span class="menu-small-text">0,25cl </span>
          </td>
          <td>
            1.50 €
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
            Beck´s
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
            Stella Artois
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Leffe Blonde
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
            Hoegaarden
          </td>
          <td>
            3.50 €
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
            La Chouffe
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Chimay Blue
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Delirium Tremens
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
            Kwak
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Rochefort 10
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Rochefort 8
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            La Trappe Blond
          </td>
          <td>
            6.00 €
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
            Tripel Karmeliet
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Diversas
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <th colspan="2">
            Gins
          </th>
        </tr>
        <tr>
          <td>
            Baleia
          </td>
          <td>
            12.00 €
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
            Beefeater
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Beefeater Pink
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bombay Sapphire Dry
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Gordon's Pink
          </td>
          <td>
            5.00 €
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
            Bombay Bramble
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
            Bulldog
          </td>
          <td>
            9.00 €
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
            Nº13
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick's (Diversos)
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Hendrick's
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Monkey 47
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Manezinho
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nikka Coffey
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Azor Gin Reserva
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Mombasa Club
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            Roku
          </td>
          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <th colspan="2">
            Martini's
          </th>
        </tr>
        <tr>
          <td>
            Branco
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Rosso
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Fiero
          </td>
          <td>
            3.00 €
        </tr>
        <tr>
          <td>
            Dry
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Dirty
          </td>
          <td>
            3.50 €
        </tr>
        <tr>
          <td>
            Strawberry
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Lemon Drop
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Cucumbre
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Caramel
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <td>
            Expresso Martini
          </td>
          <td>
            3.50 €
          </td>
        </tr>
        <tr>
          <th colspan="2">Shots</th>
        </tr>
        <tr>
          <td>
            Mix
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Tequila
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Patrón Reposado
          </td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            Patrón Anejo
          </td>
          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Patrón Silver
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Jägermeister
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Fireball
          </td>
          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Gold Strike
          </td>
          <td>
            3.00 €
          </td>
        </tr>
      </tbody>
    </table>
    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="3">Whiskey</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="dark"></th>
          <th>½ dose</th>
          <th>1 dose</th>
        </tr>
        <tr>
          <td>
            Red Label
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
            Black Label
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
            Jack Daniel's
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
            Jack Daniel’s Single Barrel
          </td>
          <td>
            6.00 €
          </td>
          <td>
            12.00 €
          </td>
        </tr>
        <tr>
          <td>
            Glenfiddich
          </td>
          <td>
            5.00 €
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Bushmills
          </td>
          <td>&nbsp;</td>
          <td>
            6.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Double Black
          </td>
          <td>&nbsp;</td>

          <td>
            10.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Gold Label Reserva
          </td>
          <td>&nbsp;</td>

          <td>
            13.00 €
          </td>
        </tr>
        <tr>
          <td>
            J. Walker Ultimate 18
          </td>
          <td>&nbsp;</td>

          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nikka
          </td>
          <td>&nbsp;</td>

          <td>
            18.00 €
          </td>
        </tr>
        <tr>
          <th colspan="3">
            Aguardentes
          </th>
        </tr>
        <tr>
          <th class="dark">&nbsp;</th>
          <th>½ dose</th>
          <th>1 dose</th>
        </tr>
        <tr>
          <td>
            CRF extra reserva
          </td>
          <td>
            4.50 €
          </td>
          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            CRF
          </td>
          <td>&nbsp;</td>

          <td>
            4.50 €
          </td>
        </tr>
        <tr>
          <td>
            Couvoisier
          </td>
          <td>&nbsp;</td>

          <td>
            7.00 €
          </td>
        </tr>
        <tr>
          <td>
            Remy Martin
          </td>
          <td>&nbsp;</td>

          <td>
            8.00 €
          </td>
        </tr>
        <tr>
          <td>
            Brandy Croft
          </td>
          <td>&nbsp;</td>

          <td>
            4.00 €
          </td>
        </tr>
        <tr>
          <td>
            Nevada
          </td>
          <td>&nbsp;</td>

          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Canela
          </td>
          <td>&nbsp;</td>

          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Limão
          </td>
          <td>&nbsp;</td>

          <td>
            3.00 €
          </td>
        </tr>

        <!-- 
        LICOR/OUTROS
Vinho do Porto
Per Se
Per Se (Tónico)
Beirão
Campari
Baileys
DramBuie
Limoncello
Disaronno
Amêndoa Amarga
Angelica
Grand Marnier
2.50€
3.00€
4.50€
3.00€
3.00€
3.00€
5.00€
3.00€
5.00€
3.50€
3.50€
5.00€ -->
        <tr>
          <th colspan="2">
            Licor/Outros
          </th>
        </tr>
        <tr>
          <td>
            Vinho do Porto
          </td>
          <td>
            2.50 €
          </td>
        </tr>
        <tr>
          <td>
            Per Se
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Per Se (Tónico)
          </td>
          <td>
            4.50 €
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
            Campari
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
            DramBuie
          </td>
          <td>
            5.00 €
          </td>
        </tr>
        <tr>
          <td>
            Limoncello
          </td>
          <td>
            3.00 €
          </td>
        </tr>
        <tr>
          <td>
            Disaronno
          </td>
          <td>
            5.00 €
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
            Angelica
          </td>
          <td>
            3.50 €
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
      </tbody>
    </table>

    <h3>Cocktails</h3>
    Cocktails

    <!-- Aperol Spritz 
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

    <table class="menu-table">
      <thead>
        <tr>
          <th colspan="2">
            Cocktails
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
      </tbody>
    </table>









    <p class="menu-legend-p">
      <span><i class="menu-size-icon">p</i> &nbsp;Pequeno</i></span>
      <span><i class="menu-size-icon">g</i> &nbsp;Grande </span>






  </section>


  <!-- <div class="menu-nav">
    <ul>
      <!-- <li class="menu-nav-item"><a href="#drinks">Drinks</a></li> 
      <li class="menu-nav-item"><a href="#wine">Wine</a></li>
      <li class="menu-nav-item"><a href="#bar">Bar</a></li>
      <li class="menu-nav-item"><a href="#food">Food</a></li>
      <li class="menu-nav-item"><a href="#drinks">Drinks</a></li>
    </ul>
  </div> -->
</main>

<?php
include "includes/footer.html";


?>