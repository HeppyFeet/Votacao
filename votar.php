<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="votar.css">

</head>

<body>

    <div>
        <?php
            $nome = $_GET["nome"];
            $idade = $_GET["idade"];

            echo "Nome: " . $nome ." <br> Idade:  " . $idade . " anos";

            if($idade>=71 ){
              echo " <br> Voto Opcional";
            }else if($idade >= 18 && $idade<=70){
                echo " <br> Voto Obrigatorio";
            }else if($idade>= 16  && $idade<=17){
                echo " <br> Voto Opcional";
            }else{
                echo "<br> Voto Não Obrigatorio </h1>";
            }
        ?>

       
    </div>

    <a href="index.html" button type="submit" class="btn btn-primary">Voltar</button></a>
</body>

</html>






<html>