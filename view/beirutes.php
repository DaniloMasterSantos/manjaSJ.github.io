<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/Style_beirutes.css" rel="stylesheet">
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
            <li><a href="pizzas.php">Pizzas</a></li>
            <li><a href="esfihas.php">Esfihas</a></li>
            <li><a href="beirutes.php">Beirutes</a></li>
            <li><a href="bebidas.php">Bebidas</a></li>
        </ul>
        <div class="icons-header">
            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
        </div>
    </header>
    <!--fim do header-->

    <!--banners de sabores dos beirutes-->
    <img class="banner b1" src="img/banner-sabores.png" alt="">
    <img class="banner b2" src="img/banner-sabores-1080.jpg" alt="">
    <img class="banner b3" src="img/banner-sabores-300.png" alt="">
    <!--fim dos banners de sabores dos beirutes-->

    <!--tabela: Beirutes-->
    <div class="box-table">
        <h1 id="salgadas">Beirutes</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th id="th2">Ingredientes</th>
                <th id="th3">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays_beirutes.php');
                    for($i = 0;$i <= 6;$i++){ ?>
                        <tr class="tr-light">
                            <td><?php echo $nomes1[$i] ?></td>
                            <td><?php echo $ing1[$i] ?></td>
                            <td><?php echo $precos1[$i] ?></td>
                        </tr>
                        <tr class="tr-dark">
                            <td><?php echo $nomes2[$i] ?></td>
                            <td><?php echo $ing2[$i] ?></td>
                            <td><?php echo $precos2[$i] ?></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!--fim da tabela: Beirutes-->

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