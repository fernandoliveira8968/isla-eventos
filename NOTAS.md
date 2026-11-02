D4.
O código de estado de erro é o 404.
Na rota eventos/{id}, a variável id é definida como int, por isso abc, não sendo um número inteiro, não executa sequer a função.

Desafio
O whereNumber('id') evita que o "próximos" na rota seja tratado como um id.

Porque é que esta rota não entra em conflito com /eventos/{id}?
Porque o as rotas são comparadas segmento a segmento, e uma tem 2 segmentos, enquanto outra tem 3.