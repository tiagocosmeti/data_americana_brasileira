
# data_americana_brasileira

## Função para converter data com formato americano para brasileiro

Utilize o comando composer require tiagocosmeti/data_americana_brasileira

+ Chame a função data_americana_brasileira em seu projeto.
+ A função necessita de dois parâmetros. 
+ O primeiro parâmetro é a data em formato americano (pode incluir com a hora também).
+ O segundo parâmetro é responsável por incluir a hora na data informada no primeiro parâmetro. Esse parâmetro é opcional. Por default é FALSE.
+ Caso queira receber o retorno da data com o horário, altere o valor do segundo parâmetro para TRUE.

### Exemplo de uso

```php

<?php

require __DIR__ . '/vendor/autoload.php';

use DataAmericanaBrasileira\Data;

echo Data::data_americana_brasileira('2021-11-28 09:00:00');

```
