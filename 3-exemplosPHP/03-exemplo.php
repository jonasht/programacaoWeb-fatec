<html>
    <title>exemplo 3</title>

    <body>
        <?php
            $data=date("d/m/Y",time()); // retorna a data atual do servidor
            $hora=date("h:i",time());
        
        ?>
        <p align="center"><strong><font color="#0000FF">hoje eh o dia</font>
        <?php echo$data; ?>
        <font color="#FF0000">e agora sao </font>
        <?php echo $hora; ?>
        </strong>
        </p>
    </body>
</html>