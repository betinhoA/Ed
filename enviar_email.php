<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $idade = $_POST['idade'];
    $mensagem = $_POST['mensagem'];
    
    $para = "betinhoalbertodossantos625@gmail.com"; // Seu endereço de e-mail
    $assunto = "Nova sugestão recebida";
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "País: $pais\n";
    $corpo .= "Província: $provincia\n";
    $corpo .= "Idade: $idade anos\n";
    $corpo .= "Mensagem: $mensagem\n";
    
    // Enviar e-mail
    mail($para, $assunto, $corpo);
    
    // Redirecionar de volta para a página de contato
    header("Location: index.html");
}
?>
