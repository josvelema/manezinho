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
        <li class="menu-nav-item"><a href="#bar">Bar</a></li>
        <li class="menu-nav-item"><a href="#food">Food</a></li>
        <li class="menu-nav-item"><a href="#cocktails">Cocktails</a></li>
      </ul>
    </div>
  </header>

  <section id="wine">
    <h3>Wine</h3>
    <table class="menu-table">
      <thead>
        <tr>
          <th>
            <h4>Açores</h4>
          </th>
          <th></th>
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
            16.00€
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
            16.00€
          </td>
        </tr>
        <tr>
          <td>
            Frei Gigante
          </td>
          <td>
            26.00€
          </td>
        </tr>
        <tr>
          <td>
            Pedras Brancas
          </td>
          <td>
            26.00€
          </td>
        </tr>
        <tr>
          <td>
            Rola Pipa
          </td>
          <td>
            30.00€
          </td>
        </tr>
        <tr>
          <td>
            Chão de Lava
          </td>
          <td>
            30.00€
          </td>
        </tr>
        <tr>
          <td>
            Pedras Brancas Reserva
          </td>
          <td>
            30.00€
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
            16.00€
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
        Oitenta 13.00€
Vidigueira 13.00€
Trinca Bolotas 14.00€
Grande Trinca Bolotas 16.00€

Encosta das Predizes (Vinhas Velhas -
reserva)

17.00€
Herdade do Paço do Conde (Syrah) 18.00€
Convento da Tomina 20.00€
Herdade das Servas (sem barrica) 23.00€
Esporão 26.00€
Tapada de Coelheiros 40.00€
Quinta Paral Reserva 45.00€
Dona Maria Grande Reserva 46.00€
Parcelas 55.00€ -->
        <tr>
          <td>
            Oitenta
          </td>
          <td>
            13.00€
          </td>
        </tr>
        <tr>
          <td>
            Vidigueira
          </td>
          <td>
            13.00€
          </td>
        </tr>
        <tr>
          <td>
            Trinca Bolotas
          </td>
          <td>
            14.00€
          </td>
        </tr>
        <tr>
          <td>
            Grande Trinca Bolotas
          </td>
          <td>
            16.00€
          </td>
        </tr>
        <tr>
          <td>
            Encosta das Predizes<small><em>(Vinhas Velhas - reserva)</em></small>
          </td>
          <td>
            17.00€
          </td>
        </tr>
        <tr>
          <td>
            Herdade do Paço do Conde<small><em>(Syrah)</em></small>
          </td>
          <td>
            18.00€
          </td>
        </tr>
        <tr>
          <td>
            Convento da Tomina
          </td>
          <td>
            20.00€
          </td>
        </tr>
        <tr>
          <td>
            Herdade das Servas<small><em>(sem barrica)</em></small>
          </td>
          <td>
            23.00€
          </td>
        </tr>
        <tr>
          <td>
            Esporão
          </td>
          <td>
            26.00€
          </td>
        </tr>
        <tr>
          <td>
            Tapada de Coelheiros
          </td>
          <td>
            40.00€
          </td>
        </tr>
        <tr>
          <td>
            Quinta Paral Reserva
          </td>
          <td>
            45.00€
          </td>
        </tr>
        <tr>
          <td>
            Dona Maria Grande Reserva
          </td>
          <td>
            46.00€
          </td>
        </tr>
        <tr>
          <td>
            Parcelas
          </td>
          <td>
            55.00€
          </td>
        </tr>
        <tr class="tr-divider">
          <th colspan="2">Branco</th>
        </tr>
        <!-- Trinca Bolotas 13.00€
Vidigueira 14.00€

Encosta das Predizes (Private
selection)

15.00€
Esporão 16.00€
Noia 16.00€
Vidigueira (Antão Vaz) 16.00€
Esporão Reserva 22.00€
Quinta do Paral Reserva 28.00€ -->
        <tr>
          <td>
            Trinca Bolotas
          </td>
          <td>
            13.00€
          </td>
        </tr>
        <tr>
          <td>
            Vidigueira
          </td>
          <td>
            14.00€
          </td>
        </tr>
        <tr>
          <td>
            Encosta das Predizes <small><em>(Private selection)</em></small>
          </td>
          <td>
            15.00€
          </td>
        </tr>
        <tr>
          <td>
            Esporão
          </td>
          <td>
            16.00€
          </td>
        </tr>
        <tr>
          <td>
            Noia
          </td>
          <td>
            16.00€
          </td>
        </tr>
        <tr>
          <td>
            Vidigueira<small><em>(Antão Vaz)</em></small>
          </td>
          <td>
            16.00€
          </td>
        </tr>
        <tr>
          <td>
            Esporão Reserva
          </td>
          <td>
            22.00€
          </td>
        </tr>
        <tr>
          <td>
            Quinta do Paral Reserva
          </td>
          <td>
            28.00€
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
        <!-- Taboadella 70.00€ -->
        <tr>
          <td>
            Taboadella
          </td>
          <td>
            70.00€
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
        <!-- Assobio 13.00€
Papa-Figos 15.00€
Vinha Grande 18.00€
Callabriga 22.00€
Duas Quintas 24.00€
Castas Escondidas 38.00€
Duas Quintas Reserva 45.00€
Quinta da Lêda 50.00€
Batuta 65.00€
Carvalhas Tinta Francisca 70.00€
Carvalhas Vinhas Velhas 70.00€
Antónia Adelaide Ferreira 105.00€
Mirabílis 180.00€

Branco:

Papa-Figos 15.00€
Grainha 19.00€
Carvalhas 40.00€
Antónia Adelaide Ferreira 65.00€
Mirabílis 80.00€ -->
        <tr>
          <td>
            Assobio
          </td>
          <td>
            13.00€
          </td>
        </tr>
        <tr>
          <td>
            Papa-Figos
          </td>
          <td>
            15.00€
          </td>
        </tr>
        <tr>
          <td>
            Vinha Grande
          </td>
          <td>
            18.00€
          </td>
        </tr>
        <tr>
          <td>
            Callabriga
          </td>
          <td>
            22.00€
          </td>
        </tr>
        <tr>
          <td>
            Duas Quintas
          </td>
          <td>
            24.00€
          </td>
        </tr>
        <tr>
          <td>
            Castas Escondidas
          </td>
          <td>
            38.00€
          </td>
        </tr>
        <tr>
          <td>
            Duas Quintas Reserva
          </td>
          <td>
            45.00€
          </td>
        </tr>
        <tr>
          <td>
            Quinta da Lêda
          </td>
          <td>
            50.00€
          </td>
        </tr>
        <tr>
          <td>
            Batuta
          </td>
          <td>
            65.00€
          </td>
        </tr>
        <tr>
          <td>
            Carvalhas Tinta Francisca
          </td>
          <td>
            70.00€
          </td>
        </tr>
        <tr>
          <td>
            Carvalhas Vinhas Velhas
          </td>
          <td>
            70.00€
          </td>
        </tr>
        <tr>
          <td>
            Antónia Adelaide Ferreira
          </td>
          <td>
            105.00€
          </td>
        </tr>
        <tr>
          <td>
            Mirabílis
          </td>
          <td>
            180.00€
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
            15.00€
          </td>
        </tr>
        <tr>
          <td>
            Grainha
          </td>
          <td>
            19.00€
          </td>
        </tr>
        <tr>
          <td>
            Carvalhas
          </td>
          <td>
            40.00€
          </td>
        </tr>
        <tr>
          <td>
            Antónia Adelaide Ferreira
          </td>
          <td>
            65.00€
          </td>
        </tr>
        <tr>
          <td>
            Mirabílis
          </td>
          <td>
            80.00€
          </td>
        </tr>

    </table>
    <!-- Minho

Branco/Verde:

Muralhas de Monçao 12.00€
Torre de Menagem 14.00€

Rosé:

Mateus 10.00€ -->
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
            12.00€
          </td>
        </tr>
        <tr>
          <td>
            Torre de Menagem
          </td>
          <td>
            14.00€
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
            10.00€
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Tejo

Tinto:

Cabeça de Toiro 14.00€ -->

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
            14.00€
          </td>
        </tr>
      </tbody>
    </table>

<!-- 
    Itália

Vinho Espumante Rosé:
Lambrusco 8.00€
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
            8.00€
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Vinho Ao Copo

Tinto 3.00€
Branco 3.00€
Rosé 3.00€
Pressão 3.00€
Dos Açores 6.00€ -->
  
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
              3.00€
            </td>
          </tr>
          <tr>
            <td>
              Branco
            </td>
            <td>
              3.00€
            </td>
          </tr>
          <tr>
            <td>
              Rosé
            </td>
            <td>
              3.00€
            </td>
          </tr>
          <tr>
            <td>
              Pressão
            </td>
            <td>
              3.00€
            </td>
          </tr>
          <tr>
            <td>
              Dos Açores
            </td>
            <td>
              6.00€
            </td>
          </tr>
        </tbody>
      </table>

      <!-- menu sala  -->

      <!-- Entradas:


 Sopa do dia 2.5€

 Cesto de pão com manteiga
aromatizada

2€

 Azeitonas temperadas 1.5€

 Aros de cebola em tempura 3.5€
 Batatas à Manezinho
(batata frita com bacon e molho de
queijo)

5€

 Tábua de queijos de São Jorge
(queijos de 3, 7, 12 e 24 meses de cura
com mel da fajã)

15€

 Tábua de queijos
(queijos regionais, a acompanhar com
compota e torradinhas)

10€

 Tábua mista
(queijos regionais, presunto, chourição,
paio, compota e azeitonas temperadas)

13€

 Camarão alhinho
(camarão temperado com alho e massa
malagueta e vinho branco,
acompanhado de um cesto de pão)

15€

 Camarão à Manezinho
(camarão frito em tempura
acompanhado com batata frita e
molhos: açafrão, tártaro e ketchup)

20€

 Chouriço frito com mel e
alecrim

4€

 Morcela frita com laranja e
ananás

8€

 Palitos de frango panados
(com molho picante)

6€ -->
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
        2.5€
      </td>
    </tr>
    <tr>
      <td>
        Cesto de pão com manteiga
        aromatizada
      </td>
      <td>
        2€
      </td>
    </tr>
    <tr>
      <td>
        Azeitonas temperadas
      </td>
      <td>
        1.5€
      </td>
    </tr>
    <tr>
      <td>
        Aros de cebola em tempura
      </td>
      <td>
        3.5€
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
        5€
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
        15€
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
        10€
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
        13€
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
        15€
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
        20€
      </td>
    </tr>
    <tr>
      <td>
        Chouriço frito com mel e
        alecrim
      </td>
      <td>
        4€
      </td>
    </tr>
    <tr>
      <td>
        Morcela frita com laranja e
        ananás
      </td>
      <td>
        8€
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
        6€
      </td>
    </tr>
  <!--  Salada simples
(mistura de alface, cebola roxa e tomate
cherry)

5.00€

 Salada de camarão
(camarão frito, mistura de alface, tomate
cherry, cebola roxa e vinagrete)

15.00€

 Salada de frango
(frango grelhado, mistura de alface,
tomate cherry, cebola roxa e
vinagrete)

12.00€

 Salada vegano
(mistura de alface, cebola roxa, tomate
cherry, mistura de legumes da época
salteados e tofu)

15.00€

 Salada vegetariana
(mistura de alface, cebola roxa, tomate
cherry, mistura de legumes da época
salteados e batata assada)

12.00€
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
        5.00€
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
        15.00€
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
        12.00€
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
        15.00€
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
        12.00€  
      </td>
    </tr>

<!-- Hambúrguer:
 Hambúrguer à Manezinho
(pão, molho Mil Ilhas, dupla de carne de
vaca, marmelada de cebola, dupla de
bacon, dupla de queijo cheddar e aros
de cebola)

15.00€

 Hambúrguer à Manezinho
Picante
(pão, molho Mil Ilhas, molho picante,
dupla de carne de vaca, marmelada de
cebola, dupla de bacon, dupla de queijo
cheddar, jalapenhos e aros de cebola)

16.00€

 Hambúrguer à Manezinho
Simples
(pão, molho Mil Ilhas, carne de vaca,
marmelada de cebola, bacon, queijo
cheddar e aros de cebola)

10.00€

 Hambúrguer de Atum
(pão, molho tártaro, bife de atum e aros
de cebola)

16.00€

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
    15.00€
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
    16.00€
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
    10.00€
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
    16.00€
  </td>
</tr>
<tr class="tr-divider">
<th colspan="2">
*Acompanhadas com Salada, batata frita e molhos (açafrão, tártaro e ketchup)

</th>
</tr>
<!-- Carne:
 Bife à Manezinho
(Filet Mignon em cama de espinafres,
batata doce assada e molho de
mostarda)

26.50€

 Vazia
(com manteiga aromatizada) 20.00€
 Picanha importada
(com manteiga aromatizada) 24.00€
 Secretos de porco preto

22.00€

 Seleção de carnes (2 pessoas)
(picanha, filet mignon e secretos de
porco preto

60.00€

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
    26.50€
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
    20.00€
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
    24.00€
  </td>
</tr>
<tr>
  <td>
    Secretos de porco preto
  </td>
  <td>
    22.00€
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
    60.00€
  </td>
</tr>
<tr>
  <th colspan="2">
    * Acompanhadas de arroz branco, legumes salteados, batata doce e branca assada
  </th>
</tr>
<!-- Peixe:
 Peixe:

 Tempura de peixe branco
(em cama de mistura de salada, molho
tártaro e batata frita)

18€

 Peixe grelhado da época
(inteiro, à posta ou filete)

(preço sob consulta) 17€ a 28€

 Polvo à Manezinho
(com batata assada)

26€

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
    18€
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
   17€ a 28€
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
    26€
  </td>
</tr>
<tr>
  <th colspan="2">
    * Acompanhado com arroz de grelos ou salada de batata
  </th>
</tr>

<!-- Sobremesas:
 À colher 4.00€
 Ao garfo 4.00€
 Fruta da época 2.50€ a 3.50€
 Frutas da época laminada 8€ -->
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
    4.00€
  </td>
</tr>
<tr>
  <td>
    Ao garfo
  </td>
  <td>
    4.00€
  </td>
</tr>
<tr>
  <td>
    Fruta da época
  </td>
  <td>
    2.50€ a 3.50€
  </td>
</tr>
<tr>
  <td>
    Frutas da época laminada
  </td>
  <td>
    8€
  </td>
</tr>




  </tbody>
</table>



  </section>  
  <section class=" menu-section">
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