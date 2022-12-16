Desenvolva um site PHP que contenha um formulário POST com diversos campos com os respectivos nomes e suas características
<ul>
<li>nome, um campo do tipo texto.</li>
<li>idade, um campo do tipo número.</li>
<li>email, um campo do tipo email.</li>
<li>estado, um campo de seleção.</li>
<li>comida, um campo de checagens.</li>
<li>forma, um campo radio.</li>
</ul>
O foco desta atividade é o código PHP! No código, todas as checagens de possíveis problemas do recebimento dos valores acima mencionados. Os problemas que devem ser checados são:
<ol>
<li>nome: existe? está vazio? possui 4 caracteres ou menos? possui 10 caracteres ou mais?</li>
<li>idade: existe? está vazio? possui valor menor que 18? possui valor maior que 60?</li>
<li>email: existe? está vazio? é um email válido?</li>
<li>estado: existe? está vazio? é um valor único entre o intervalo esperado?</li>
<li>comida: existe? está vazio? possui a quantidade correta de valores (3)? cada valor está no intervalo esperado (0 a 5)?</li>
<li>forma: existe? está vazio? o valor está no intervalo esperado (0 ou 1)? </li>
</ol>
Todas essas checagens devem ser feitas de forma explícita e, caso falhem, devem ser retornadas como uma mensagem ao usuário.


