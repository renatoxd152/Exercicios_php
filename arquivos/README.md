Vimos no material deste conteúdo o como enviar um arquivo para o servidor, que o receberá e o moverá para uma pasta de sistema.

Nesta atividade, vamos dar um passo extra para melhor compreendermos o conteúdo: o upload de múltiplos arquivos ao mesmo tempo! Como explicado no livro do conteúdo do vídeo, usamos o atributo multiple no campo de entrada <input> para indicarmos que o usuário pode selecionar/enviar múltiplos arquivos...

Mas não mostramos como manipular isso no servidor.

Tendo como base a documentação oficial sobre upload de arquivos com PHP (veja o conteúdo em: https://www.php.net/manual/pt_BR/features.file-upload.post-method.php), crie uma página PHP simples, contendo apenas um único campo input capaz de enviar e armazenar no servidor múltiplos arquivos.

Os arquivos a serem recebidos devem seguir as seguinte regras:
<ul>
<li>Somente arquivos PDF, JPEG e/ou PNG são aceitos.</li>
<li>Arquivos PDF só serão aceitos se tiverem no mínimo 10KB e no máximo 1MB de tamamnho.</li>
<li>Arquivos JPEG e/ou PNG devem ter no mínimo 500KB de tamanho (sem tamanho máximo).</li>
</ul>
Caso algum dos arquivos enviados extrapole os limites impostos (ou não tenham o tamanho mínimo requerido), TODO O UPLOAD DEVE SER CANCELADO e uma mensagem de erro deve ser impressa na tela (por exemplo: "o arquivo texto.pdf excede o tamanho máximo").

Por exemplo, suponha que o usuário enviou 4 arquivos, o "t1.pdf", "t2.pdf", "t3.pdf" e "t4.txt". Como o último arquivo não é aceito (não é do formato que o sistema deve aceitar, NENHUM dos arquivos é salvo no servidor).

Após o fim do upload, os arquivos armazenados devem ser listados na forma de links clicáveis (ou seja, clicar no link levará o navegador ao arquivo ou iniciará o download do arquivo)...
