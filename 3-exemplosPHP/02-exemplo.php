<html>
    <title>declarando variaveis</title>

    <?php
        echo "mostrando conteudo";
        echo "<hr>";
        $num=10;
        $num2=50;
        $aluno="nome do aluno";
        $checado=true;
        echo "conteudo de num:";    
        echo $num;  
        echo "<br>";
        echo "conteudo de num2";    
        echo $num2;    
        echo "<br>";    
        echo "nome do aluno";    
        echo $aluno;
        echo "<br>";
        echo "checado:";
        echo $checado;
    
        echo "<hr>";
        
        // fazendo diferente usando .
        echo "conteudo de num:$num" . "<br>";
        echo "conteudo de num2: $num2" . "<br>";    
        echo "nome do aluno:$aluno" . "<br>";
        echo "checado:$checado";

    ?>
</html>