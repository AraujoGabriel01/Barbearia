
<!DOCTYPE html>
<html>
    <body>
        <h1>Produto</h1>
        <a href="contato.html">Voltar para a parte de contato</a><br/>

        <?php
            if(isset($_POST["bt1"])) Inserir();
        ?>
    </body>
</html>

<?php
    function Inserir(){
        $nomesobrenome = $_POST["nomesobrenome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $mensagem = $_POST["mensagem"];
        $con = new mysqli("localhost", "root", "G@briel123", "barbearia");
        $sql = "insert into contato(nome, email, telefone, mensagem) values('$nomesobrenome', '$email', '$telefone', '$mensagem')";
        mysqli_query($con, $sql);
        mysqli_close($con);
        echo "<h4>Cadastro Realizado com Sucesso!</h4>";
    }
?>