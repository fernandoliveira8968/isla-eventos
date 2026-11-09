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

Tanto o yield/section como o stack/push guardam um espaço de "armazenamento" para apresentar dados.
No yield/section apenas posso colocar 1 informação, porque se adicionar mais, irá substituir a antiga. O push/stack servem o mesmo propósito que o yield/section mas posso colocar mais que 1 conteudo por "armazenamento" sem que se substituam.

PL05

A3.
SQLSTATE[42S02]: Base table or view not found: 1146 Table 'isla_eventos.sessions' doesn't exist
O Laravel procura a tabela Sessions porque é onde estariam guardadas as sessões da base de dados.

A4.
A base de dados apresenta 4 tabelas. Esta consulta não foi feita pelo php artisan db:show porque obtenho um erro pelo MariaDB desatualizado. No entanto, no macos esta é a única versão do XAMPP. A consulta foi feita através do PHPMyAdmin.

B2.
Titulo - varchar
Data - Date
Vagas - smallint

Vagas é unsigned porque não pode ter número negativos.

C3.
O comando apaga as tabelas todas e volta a dar migrate. Depois insere os dados do Seeder na tabela Eventos.
Não deve ser corrido em servidores com inscrições reais porque apaga as tabelas assim como os seus dados. Logo, os dados inseridos pelos utilizadores
desapareciam e ficavam apenas os dados do Seeder.
