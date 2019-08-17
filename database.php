$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> 'pgsql:host=123.123.123.123;dbname=books',
	'hostname' => '123.123.123.123',
	'username' => 'postgres',
	'password' => 'post123',
	'database' => 'books',
	'dbdriver' => 'pdo',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$active_group = 'DEMO';
$query_builder = TRUE;

$db['DEMO'] = array(
    'dsn'	=> 'pgsql:host=localhost;dbname=pens',
    'hostname' => 'localhost',
    'username' => 'postgres',
    'password' => 'post123',
    'database' => 'pens',
    'dbdriver' => 'pdo',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$active_group = 'DEMO2';
$query_builder = TRUE;

$db['DEMO2'] = array(
    'dsn'	=> 'pgsql:host=localhost;dbname=mobiles',
    'hostname' => 'localhost',
    'username' => 'postgres',
    'password' => 'post123',
    'database' => 'mobiles',
    'dbdriver' => 'pdo',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
