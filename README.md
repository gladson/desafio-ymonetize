DESAFIO - YMONETIZE

Para rodar e ver os resultados:

> make all

Obs.: E claro voce tem que ter o PHP instalado.

1. Manipulação de Strings

   > Você recebe uma string contendo palavras separadas por espaços. Escreva uma função em PHP
   > para inverter a ordem das palavras na string, mantendo a ordem das letras dentro de cada
   > palavra. Por exemplo, se a entrada for "Desenvolvedor Sênior em PHP", a saída deve ser "PHP
   > em Sênior Desenvolvedor".

   - Solucao:

   ```php
   <?php
   function inverterPalavras($string) {
           // Divide a string em palavras, inverte a ordem e junta novamente
           return implode(' ', array_reverse(explode(' ', $string)));
   }

   // Exemplo de uso
   $string = "Desenvolvedor Sênior em PHP";
   print_r(inverterPalavras($string));

   // Result for 8.2.13: PHP em Sênior Desenvolvedor
   ?>
   ```

2. Manipulação de Arrays

   > Dado o seguinte array em PHP:

   ```php
   $dados = array(
       array("id" => 1, "nome" => "Joao", "idade" => 35),
       array("id" => 2, "nome" => "Maria", "idade" => 28),
       array("id" => 3, "nome" => "Pedro", "idade" => 42)
   );
   ```

   > Escreva uma função que ordene o array pelos nomes em ordem alfabética, mantendo a associação entre id, nome e idade.

   - Solucao:

   ```php
   <?php
       // Dados de exemplo
       $dados = array(
           array("id" => 1, "nome" => "Joao", "idade" => 35),
           array("id" => 2, "nome" => "Maria", "idade" => 28),
           array("id" => 3, "nome" => "Pedro", "idade" => 42)
       );

       // Ordena o array por nome
       usort($dados, fn($a, $b) => strcmp($a['nome'], $b['nome']));

       // Exibe o array ordenado
       print_r($dados);
   ?>

   // Result for 8.2.13:
   Array(
       [0] => Array
       (
           [id] => 1
           [nome] => Joao
           [idade] => 35
       )
       [1] => Array
       (
           [id] => 2
           [nome] => Maria
           [idade] => 28
       )
       [2] => Array
       (
           [id] => 3
           [nome] => Pedro
           [idade] => 42
       )
   )
   ```

3. Manipulação de Arquivos

   > Crie um script PHP que leia o conteúdo de um arquivo chamado "log.txt". O arquivo contém
   > linhas no formato "data: mensagem", onde a data está no formato "dd/mm/aaaa hh:mm:ss". A
   > sua tarefa é imprimir na tela as mensagens que foram registradas entre duas datas específicas
   > fornecidas como parâmetros para a função.

   ```php
   function filtrarMensagensPorData(
       $caminhoArquivo, $dataInicio, $dataFim
       ) {
       // Sua implementacao aqui
   }

   // Exemplo de uso
   filtrarMensagensPorData("log.txt", "01/02/2024 12:00:00", "28/02/2024 23:59:59");
   ```

4. Programação Orientada a Objetos

   > Considere uma aplicação de gerenciamento de funcionários. Crie uma classe em PHP chamada Funcionário com os seguintes atributos:

   - id (int)
   - nome (string)
   - salario (float)

   > Implemente um método na classe para calcular e retornar o salário anual do funcionário, considerando que um ano possui 12 meses.

5. Segurança
   > Você está desenvolvendo um sistema de autenticação para uma aplicação web em PHP.
   > Explique as melhores práticas de segurança que você implementaria para garantir a proteção contra ataques comuns, como injeção de SQL, Cross-Site Scripting (XSS) e Cross-Site Request Forgery (CSRF). Forneça exemplos específicos de como você abordaria cada uma dessas preocupações de segurança em seu código.

* Uso do prepared statements ou parametrização de consultas para evitar a injeção de SQL.
Ex.: 
```php
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
$stmt->execute(['username' => $username, 'password' => $password]);
$user = $stmt->fetch();
```

* Sempre escape ou filtrar dados de entrada antes de exibi-los em páginas da web.
Ex.: 
```php
$userInput = $_POST['comment'];
$escapedInput = htmlspecialchars($userInput);
echo "Comentário: $escapedInput";
```

* Uso de tokens CSRF para verificar se as solicitações vêm de fontes confiáveis.
Ex.: 
```php
// Gere um token CSRF e armazene-o na sessão
$csrfToken = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrfToken;

// Inclua o token no formulário
echo "<input type='hidden' name='csrf_token' value='$csrfToken'>";

// Verifique o token no lado do servidor
if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
    // Processar a solicitação
} else {
    // Token inválido, rejeitar a solicitação
}
```