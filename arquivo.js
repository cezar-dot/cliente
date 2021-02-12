<< ? php
if (isset($_POST['enviar-formulario'])) {
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "arquivo/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().
        ".$extensao";

        if (move_uploaded_file($temporario, $pasta.$novoNome)) {
            $mensagem = "Upload feito com sucesso";
        } else {
            $mensagem = "Erro não foi possivel fazer upload";
        }

    } else {
        $mensagem = "Formato inválido";
    }
    echo $mensagem;
}