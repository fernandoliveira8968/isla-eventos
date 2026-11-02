D4.
O código de estado de erro é o 404.
Na rota eventos/{id}, a variável id é definida como int, por isso abc, não sendo um número inteiro, não executa sequer a função.

Desafio
O whereNumber('id') evita que o "próximos" na rota seja tratado como um id.

Porque é que esta rota não entra em conflito com /eventos/{id}?
Porque as rotas são comparadas segmento a segmento, e uma tem 2 segmentos, enquanto outra tem 3.

PL04

E1.
O título apresenta o script como texto.

E2.
Ao abrir a página o script é executado e aparece um pop-up alerta com a mensagem (XSS). A partir do momento em que o {!! !!} é utilizado, deixa de interpretar o script como puro texto.
