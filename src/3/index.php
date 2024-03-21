<?php
function filtrarMensagensPorData($caminhoArquivo, $dataInicio, $dataFim)
{
    // Abre o arquivo para leitura
    $arquivo = fopen($caminhoArquivo, 'r');

    // Inicializa um array para armazenar as mensagens filtradas
    $mensagensFiltradas = [];

    // Lê cada linha do arquivo
    while (!feof($arquivo)) {
        $linha = fgets($arquivo);

        // Extrai a data da linha (assumindo que o formato é "dd/mm/aaaa hh:mm:ss")
        $partes = explode(': ', $linha);
        $dataHoraLinha = $partes[0];
        $mensagem = $linha; //$partes[1];

        // Converte a data e hora para um formato comparável (por exemplo, "aaaa-mm-dd hh:mm:ss")
        $dataHoraFormatada = DateTime::createFromFormat('d/m/Y H:i:s', $dataHoraLinha)->format('Y-m-d H:i:s');

        // Verifica se a data está dentro do intervalo especificado
        if ($dataHoraFormatada >= $dataInicio && $dataHoraFormatada <= $dataFim) {
            // Adiciona a mensagem ao array de mensagens filtradas
            $mensagensFiltradas[] = $mensagem;
        }
    }

    // Fecha o arquivo
    fclose($arquivo);

    print_r("3 - \n");
    // Imprime as mensagens filtradas
    foreach ($mensagensFiltradas as $mensagem) {
        echo $mensagem;
    }
}

// Exemplo de uso
filtrarMensagensPorData("log.txt", "2024-02-01 00:00:00", "2024-02-28 23:59:59");
