<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/Style_pizzas.css" rel="stylesheet">
    <title>Pizzas</title>
</head>
<body>
    <!--início do header-->
    <header>
        <a href="../index.html"><img src="img/logo.png" alt="Logo"></a>
        <div class="icon-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="list-header">
            <li><a href="">Pizzas</a></li>
            <li><a href="teste.php">Esfihas</a></li>
            <li><a href="">Beirutes</a></li>
            <li><a href="">Bebidas</a></li>
        </ul>
        <div class="icons-header">
            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
        </div>
    </header>
    <!--fim do header-->

    <!--banners de sabores das pizzas-->
    <img class="banner b1" src="img/banner-sabores.png" alt="">
    <img class="banner b2" src="img/banner-sabores-300.png" alt="">
    <!--fim dos banners de sabores das pizzas-->

    <!--Links Internos-->
    <div class='box-links'>
        <a href="#atum">Atum</a>
        <a href="#calabresa">Calabresa</a>
        <a href="#presunto">Presunto</a>
        <a href="#frango">Frango</a>
        <a href="#lombo">Lombo</a>
        <a href="#queijo">Queijos</a>
        <a href="#legumes">Legumes</a>
        <a href="#especialidades">Especialidades</a>
        <a href="#bairro">Do Bairro</a>
        <a href="#doces">Doces</a>
    </div>
    <!--Links Internos-->

    <!--tabela: Bacon - pré tostados-->
    <div class="box-table">
        <h1 id="bacon">Bacon - pré tostado</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 2;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes[$i] ?></td>
                            <td><?php echo $ing[$i] ?></td>
                            <td><?php echo $preco[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes2[$i] ?></td>
                            <td><?php echo $ing2[$i] ?></td>
                            <td><?php echo $preco2[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--fim da tabela: Bacon - pré tostados-->

    <!--tabela: Atum de primeira-->
    <div class="box-table">
        <h1 id="atum">Atum de Primeira</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 2;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes3[$i] ?></td>
                            <td><?php echo $ing3[$i] ?></td>
                            <td><?php echo $preco3[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes4[$i] ?></td>
                            <td><?php echo $ing4[$i] ?></td>
                            <td><?php echo $preco4[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Atum de primeira-->

    <!--tabela: Calabresa-->
    <div class="box-table">
        <h1 id='calabresa'>Calabresa</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 4;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes5[$i] ?></td>
                            <td><?php echo $ing5[$i] ?></td>
                            <td><?php echo $preco5[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes6[$i] ?></td>
                            <td><?php echo $ing6[$i] ?></td>
                            <td><?php echo $preco6[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Calabresa-->

    <!--tabela: Presunto-->
    <div class="box-table">
        <h1 id="presunto">Presunto</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 1;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes7[$i] ?></td>
                            <td><?php echo $ing7[$i] ?></td>
                            <td><?php echo $preco7[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes8[$i] ?></td>
                            <td><?php echo $ing8[$i] ?></td>
                            <td><?php echo $preco8[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Presunto-->

    <!--tabela: Frango-->
    <div class="box-table">
        <h1 id="frango">Frango</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 2;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes9[$i] ?></td>
                            <td><?php echo $ing9[$i] ?></td>
                            <td><?php echo $preco9[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes10[$i] ?></td>
                            <td><?php echo $ing10[$i] ?></td>
                            <td><?php echo $preco10[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Presunto-->

    <!--tabela: Lombo-->
    <div class="box-table">
        <h1 id="lombo">Lombo</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 1;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes11[$i] ?></td>
                            <td><?php echo $ing11[$i] ?></td>
                            <td><?php echo $preco11[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes12[$i] ?></td>
                            <td><?php echo $ing12[$i] ?></td>
                            <td><?php echo $preco12[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Lombo-->

    <!--tabela: Queijo-->
    <div class="box-table">
        <h1 id="queijo">Queijo</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 3;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes13[$i] ?></td>
                            <td><?php echo $ing13[$i] ?></td>
                            <td><?php echo $preco13[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes14[$i] ?></td>
                            <td><?php echo $ing14[$i] ?></td>
                            <td><?php echo $preco14[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Queijo-->

    <!--tabela: Legumes / Verduras-->
    <div class="box-table">
        <h1 id="legumes">Legumes / Verduras</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 5;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes15[$i] ?></td>
                            <td><?php echo $ing15[$i] ?></td>
                            <td><?php echo $preco15[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes16[$i] ?></td>
                            <td><?php echo $ing16[$i] ?></td>
                            <td><?php echo $preco16[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Legumes / Verduras-->

    <!--tabela: Especialidade-->
    <div class="box-table">
        <h1 id="especialidades">Especialidades</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 10;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes17[$i] ?></td>
                            <td><?php echo $ing17[$i] ?></td>
                            <td><?php echo $preco17[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes18[$i] ?></td>
                            <td><?php echo $ing18[$i] ?></td>
                            <td><?php echo $preco18[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Especialidades-->

    <!--tabela: Pizzas do Bairro-->
    <div class="box-table">
        <h1 id="bairro">Pizzas do bairro</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 2;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes19[$i] ?></td>
                            <td><?php echo $ing19[$i] ?></td>
                            <td><?php echo $preco19[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes20[$i] ?></td>
                            <td><?php echo $ing20[$i] ?></td>
                            <td><?php echo $preco20[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Pizzas do Bairro-->

    <!--tabela: Pizzas Doces-->
    <div class="box-table">
        <h1 id="doces">Pizzas Doces</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i <= 5;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes21[$i] ?></td>
                            <td><?php echo $ing21[$i] ?></td>
                            <td><?php echo $preco21[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes22[$i] ?></td>
                            <td><?php echo $ing22[$i] ?></td>
                            <td><?php echo $preco22[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--Fim da tabela: Pizzas Doces-->

    <!--Footer-->
    <footer>
        <a href="../index.html"><img src="img/logo.png" alt="Logo"></a>
        <div class="icons-footer">
            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
        </div>
    </footer>
    <!--Fim do Footer-->


    <script src="js/responsividade_menu.js"></script>
</body>
</html>