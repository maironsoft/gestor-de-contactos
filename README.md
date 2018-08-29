# pruebacmym_fn

Para ejecutar esta apliación es necesario lo siguiente:

1. Instalar y Ejecutar Apache en el servidor

2. Instalar y ejecutar mysql

3. Crear la base de datos pruebacmym en mysql.

4. Crear y asiganrle un usuario a la base de datos

5. Cambiar el archivo app/config/database.php con los accesos para la base de datos:

Línea 55: 
'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'pruebacmym',
			'username'  => 'aqui_el_nombre_del_usuario',
			'password'  => 'aqui_la_contraseña_del_usuario',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
    
6. Ir a la consola y dirigirse hasta la carpeta del proyecto

7. Ejecutar el comando: php artisan migrate:refresh --seed --force

8. Si todo sale bien podrá abrir la url del proyecto en localhost/pruebacmym/public
