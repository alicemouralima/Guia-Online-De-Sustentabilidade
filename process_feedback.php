<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário de forma segura
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Simples verificação se os campos estão preenchidos
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        // Salvar os dados num arquivo de texto (podes usar uma base de dados como MySQL também)
        $arquivo = fopen("feedbacks.txt", "a") or die("Não foi possível abrir o arquivo!");
        $conteudo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n";
        fwrite($arquivo, $conteudo);
        fclose($arquivo);

        echo '
        <!DOCTYPE html>
        <html lang="pt">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Feedback Enviado</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    text-align: center;
                    padding: 50px;
                }
                .message-box {
                    background-color: #2a9d8f;
                    color: white;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                    display: inline-block;
                    margin-top: 50px;
                }
                .message-box h1 {
                    font-size: 24px;
                    margin-bottom: 10px;
                }
                .message-box p {
                    font-size: 18px;
                    margin-bottom: 20px;
                }
                .back-link {
                    background-color: #e76f51;
                    color: white;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 5px;
                }
                .back-link:hover {
                    background-color: #f4a261;
                }
            </style>
        </head>
        <body>
            <div class="message-box">
                <h1>Obrigado pelo seu feedback, '.$nome.'!</h1>
                <p>Agradecemos por contribuir com o nosso guia de sustentabilidade.</p>
                <a href="feedback.html" class="back-link">Voltar ao formulário</a>
            </div>
        </body>
        </html>';
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de envio inválido.";
}
?>