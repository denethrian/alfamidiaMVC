<?php
echo "view<br/>";
$clientes = $_REQUEST['clientes'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC Basico</title>

        <style>
            table,tr,th,td{border: 1px solid black;};
        </style>
    </head>
    <body>
        <?php if (count($clientes) > 0) { ?>
            <h1>Listagem</h1>
            <hr/>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                </tr>
                <?php
                foreach ($clientes as $cliente) {
                    ?>
                    <tr>
                        <td><?php echo $cliente->id_cliente; ?></td>
                        <td><?php echo $cliente->nome; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        } else {
            echo '<hr><h4>Não há registros para listagem</h4><br/><hr> ';
        }
        ?>
        <article>
            <hr>
            <h2>Salvar</h2>
            <hr>
            <form action="" method="post">
                <label for="id_cliente">Id Cliente</label><br/>
                <input type="number" id="id_cliente" name="id_cliente"/>
                <br/>
                <br/>
                <label for="nome">Nome Cliente</label><br/>
                <input type="text" id="nome" name="nome"/>

                <input type="submit" value="Salvar" id="1"/>
            </form>
        </article>


    </body>
</html>
