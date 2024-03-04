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

    <!--lista de sabores das pizzas-->
    <div class="box-table">
        <h1>Bacon - pré tostado</h1>
        <table>
            <thead>
                <th id="th1">Nome</th>
                <th>Ingredientes</th>
                <th id="th2">Preço</th>
            </thead>
            <tbody>
                <?php 
                    include_once('arrays.php');
                    for($i = 0;$i < 2;$i++){ ?>
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

    <script src="js/responsividade_menu.js"></script>
</body>
</html>