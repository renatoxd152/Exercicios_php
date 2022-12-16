O objetivo desse exercício é receber arquivos enviados pelo usuário e fazer os tratamentos necessários.
Os arquivos a serem recebidos devem seguir as seguinte regras:
<ul>
<li>Somente arquivos PDF, JPEG e/ou PNG são aceitos.</li>
<li>Arquivos PDF só serão aceitos se tiverem no mínimo 10KB e no máximo 1MB de tamamnho.</li>
<li>Arquivos JPEG e/ou PNG devem ter no mínimo 500KB de tamanho (sem tamanho máximo).</li>
</ul>
Caso algum dos arquivos enviados extrapole os limites impostos (ou não tenham o tamanho mínimo requerido), TODO O UPLOAD DEVE SER CANCELADO e uma mensagem de erro deve ser impressa na tela (por exemplo: "o arquivo texto.pdf excede o tamanho máximo").

Por exemplo, suponha que o usuário enviou 4 arquivos, o "t1.pdf", "t2.pdf", "t3.pdf" e "t4.txt". Como o último arquivo não é aceito (não é do formato que o sistema deve aceitar, NENHUM dos arquivos é salvo no servidor).

Após o fim do upload, os arquivos armazenados devem ser listados na forma de links clicáveis (ou seja, clicar no link levará o navegador ao arquivo ou iniciará o download do arquivo)...
