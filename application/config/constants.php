<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/*
|--------------------------------------------------------------------------
| Default for site and admin
|--------------------------------------------------------------------------
|
| These modes are used with site and admin
|
*/

define('NAME_SITE', 'lemon digital');  							// Nome do Site
define('ADMINISTRATOR', 0);                                     // Perfil de Administrador
define('MANAGER',       1);                                     // Perfil de Administrador
define('OPERATOR',      2);                                     // Perfil de Administrador

define('ENTRADA',   0);     // Entrada de Produtos
define('SAIDA',     1);     // Saida de Produtos


/*
|--------------------------------------------------------------------------
| Payments
|--------------------------------------------------------------------------
|
| Periodo de pagamento
|
*/

define('MENSAL', 12); 	  # 1 = 20,00
define('TRIMESTRAL', 4);  # 2 = 60,00
define('ANUAL', 1);       # 3 = 240,00

define('MENSAL3', 5); 	   # 1 = 20,00
define('TRIMESTRAL3', 4);  # 2 = 60,00
define('ANUAL3', 1);       # 3 = 240,00

/*
|--------------------------------------------------------------------------
| Valores
|--------------------------------------------------------------------------
|
| Valores dos boletos
|
*/

define('VALOR_MENSAL', 20.00); 	  # 1 = 20,00
define('VALOR_TRIMESTRAL', 60.00);  # 2 = 60,00
define('VALOR_ANUAL', 240.00);       # 3 = 240,00

define('VALOR_MENSAL3', 20.00); 	  # 1 = 20,00
define('VALOR_TRIMESTRAL3', 25.00);  # 2 = 25,00
define('VALOR_ANUAL3', 100.00);       # 3 = 100,00

/*
|--------------------------------------------------------------------------
| Naturezas
|--------------------------------------------------------------------------
|
| Natureza de Operações
|
*/

define('ROMANEIO_ENTRADA',  1);
define('ROMANEIO_SAIDA',    2);
define('VENDA',             3);
define('RECEITA',           4);
define('DESPESA',           5);
define('TRANSFERENCIA',     6);


/* End of file constants.php */
/* Location: ./application/config/constants.php */
