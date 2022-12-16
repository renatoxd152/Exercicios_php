Desenvolva um site PHP que contenha um formulário POST com diversos campos com os respectivos nomes e suas características

nome, um campo do tipo texto.
idade, um campo do tipo número.
email, um campo do tipo email.
estado, um campo de seleção.
comida, um campo de checagens.
forma, um campo radio.
O foco desta atividade é o código PHP! No código, todas as checagens de possíveis problemas do recebimento dos valores acima mencionados. Os problemas que devem ser checados são:

nome: existe? está vazio? possui 4 caracteres ou menos? possui 10 caracteres ou mais?
idade: existe? está vazio? possui valor menor que 18? possui valor maior que 60?
email: existe? está vazio? é um email válido?
estado: existe? está vazio? é um valor único entre o intervalo esperado?
comida: existe? está vazio? possui a quantidade correta de valores (3)? cada valor está no intervalo esperado (0 a 5)?
forma: existe? está vazio? o valor está no intervalo esperado (0 ou 1)? 
Todas essas checagens devem ser feitas de forma explícita e, caso falhem, devem ser retornadas como uma mensagem ao usuário.

Para ilustrar o exercício, segue uma versão para ir utilizando e praticando: https://tiagoifsp.ddns.net/pw2/formulario/


Detalhes:

Tanto o formulário como o processamento do arquivo deve ocorrer no mesmo endereço. Arquivos externos podem ser utilizados para auxiliar, mas não devem ser acessíveis!
A interface gráfica não é fundamental nesta atividade: apenas o PHP será considerado.
Dito isso, todo mundo gosta de ver algo bonito...
Algumas das checagens mencionadas podem requerer conhecimentos que podem ser encontrados na internet...
Este é um trabalho que pode ser desenvolvido em grupo. Para isso, você pode usar alguma ferramenta de desenvolvimento online colaborativo como o https://codecollab.io/
