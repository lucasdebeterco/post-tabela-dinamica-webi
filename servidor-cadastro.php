<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $matriz  = [[]];
        $table = '';
        $table .= '<table border="1px">';
        
        if(isset($_POST['linhas'])){
            $linhas = $_POST['linhas'];
        } else {
            $linhas = $_GET['linhas'];
        }

        if(isset($_POST['colunas'])){
            $colunas = $_POST['colunas'];
        } else {
            $colunas = $_GET['colunas'];
        }

        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
        } else {
            $numero = $_GET['numero'];
        }
        
       
        for ($linha=0; $linha<$linhas; $linha++) {
            for ($coluna=0; $coluna<$colunas; $coluna++) {
                $matriz[$linha][$coluna] = rand(0,100);
            }
        }
        
        if (isset($_GET["pagina"])){
        for($i = 0;$i <= $linhas/$numero; $i++) {
            if ($_GET["pagina"] == $i) {

                for ($linha = ($i*$numero)-$numero ; $linha <= ($i*$numero)-1 ; $linha++) {
                    $table .= '<tr>';
                    $table .= '<td>' . $linha . '</td>';
                    for ($coluna=0; $coluna<$colunas; $coluna++) {
                        $table .= '<td>' . $matriz[$linha][$coluna] . '';
                    }
                    $table .= '</tr>';
                }
            }
        }}

        $table .= '</table>';
        echo $table;
    ?>
    <div class="paginacao">
        <?php 
            for($i = 1;$i <= $linhas/$numero; $i++) {
                echo '<a href="?pagina=' . $i . '&linhas=' . $linhas . '&colunas='.$colunas. '&numero=' .$numero.'   ">' . $i . '</a>';
                echo ' ';
            }
        ?>
    </div>
</body>
</html>