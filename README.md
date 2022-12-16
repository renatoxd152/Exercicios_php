# Exercicios com php
Em 1930, o matemático alemão Luther Collatz teria criado um problema matemático aparentemente simples que ficou conhecido posteriormente como "Conjectura de Collatz". Muitos outros nomes existem para esse problema, sendo conhecido também simplesmente como 3x+1.

O esquema é o seguinte. Escolha um número. Qualquer número. Digamos sete (7).

A regra é a seguinte: caso o número seja impar, o número X deve ser multiplicado por 3 e somado a 1. Ou seja, 3x+1.

Assim, como 7 é impar, então 3*7+1 é igual a 22.

22 é um número par. Para os casos de números pares, dividimos por 2 o valor, ou seja x/2. Assim, 22/2 = 11.

E assim continua o esquema

<ul>
11 (impar): 3*11+1 = 34
34 (par): 34/2 = 17
17 (impar): 3*17+1 = 52
52 (par): 52/2 = 26
26 (par): 26/2 = 13
13 (impar): 3*13+1 = 40
40 (par): 40/2 = 20
20 (par): 20/2 = 10
10 (par): 10/2 = 5
5 (impar): 3*5+1 = 16
16 (par): 16/2 = 8
8 (par): 8/2 = 4
4 (par): 4/2 = 2
2 (par): 2/2 = 1
<ul>
Agora, chegamos no número 1. Como 1 é um número impar, teríamos 3*1+1 = 4. Só que 4 já sabemos que é par, que será dividido por 2 e resultará em 2, que é par e será dividido por 2 e resultará em 1, que é impar... Ou seja, um loop infinito.

Parece coincidência, mas não. TODOS os números inteiros positivos conhecidos e testados, sem excessão, sempre acaba caindo no loop 4, 2 e 1. A conjectura pergunta: "existe algum número que não cai no loop do 4, 2, 1?".

Portanto, o intuito é desenvolver um website que exiba essas informações como uma tabela, calculando para os primeiros 1000 números (1 a 1000) quantos passos são necessários para chegar ao valor 1 seguindo a regra do 3x+1, e também qual é o maior número que é alcançado
