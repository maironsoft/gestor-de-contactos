# gestor_de_contactos

Para que el proyecto funcione se deben instalar laravel 4.2 desde composer (http://getcomposer.org/)

1. Primero, descargue una copia de composer.phar. Una vez que tenga el archivo PHAR, puede guardarlo en su directorio local de proyectos o moverlo a usr/local/bin para usarlo globalmente en su sistema. En Windows, puede usar el instalador de Composer para Windows https://getcomposer.org/Composer-Setup.exe

2. Ejecutar en la línea de comandos lo siguiente: composer create-project laravel/laravel pruebacmym 4.2 --prefer-dist

3. reemplazar los archivos por los de este repositorio

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

Para probar esta apliación es necesario lo siguiente:

1. Instalar y Ejecutar Apache en el servidor

2. Instalar y ejecutar mysql

3. Crear la base de datos pruebacmym en mysql.

4. Crear y asiganrle un usuario a la base de datos

5. Cambiar el archivo app/config/database.php con los accesos para la base de datos (username y password):

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
