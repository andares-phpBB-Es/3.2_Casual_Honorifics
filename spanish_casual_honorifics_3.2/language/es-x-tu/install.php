<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Panel de Instalación',
	'SELECT_LANG'	=> 'Seleccionar idioma',

	'STAGE_INSTALL'	=> 'Instalación de phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introducción',
	'INTRODUCTION_BODY'		=> '¡Bienvenido a phpBB3!<br /><br />phpBB® es la solución de foros de código abierto más utilizado en el mundo. phpBB3 es la última entrega de una línea de paquetes que comenzó en el año 2000. Al igual que sus predecesores, phpBB3 tiene varias características, fácil de usar y totalmente apoyado por el Equipo de phpBB. phpBB3 mejora en gran medida de lo que hizo phpBB2 popular, y añade las funciones más solicitadas que no estaban presentes en versiones anteriores. Esperamos que supere sus expectativas.<br /><br />Este sistema de instalación le guiará a instalar phpBB3, actualizar a la última versión de phpBB3 de pasados lanzamientos, así como la conversión a phpBB3 desde un sistema de foros diferentes (incluyendo phpBB2). Para obtener más información, te invitamos a leer <a href="../docs/INSTALL.html">la guía de instalación</a>.<br /><br />Para leer la licencia de phpBB3 o aprender acerca de cómo obtener soporte y nuestra postura sobre ello, por favor, selecciona una de las opciones correspondientes en el menú lateral. Para continuar, selecciona la pestaña correspondiente.',

	// Support page
	'SUPPORT_TITLE'		=> 'Soporte',
	'SUPPORT_BODY'		=> 'Se proporcionará soporte completo para la versión estable actual de phpBB3, de forma gratuita. Esto incluye:</p><ul><li>instalación</li><li>configuración</li><li>cuestiones técnicas</li><li>problemas relacionados con errores potenciales en el software</li><li>actualizaciones de las versiones Release Candidate (RC) a la última versión estable</li><li>conversiones desde phpBB 2.0.x a phpBB3</li><li>conversiones desde otros software de foros a phpBB3 (por favor, consulta el <a href="https://www.phpbb.com/community/viewforum.php?f=486">Foro de Conversiones</a>)</li></ul><p>Animamos a los usuarios que todavía trabajan con versiones Beta de phpBB3, el reemplazar su instalación con una nueva copia de la última versión.</p><h2>Extensiones / Estilos</h2><p>Para cuestiones relacionadas con extensiones, por favor, escribe en el <a href="https://www.phpbb.com/community/viewforum.php?f=451">Foro de Extensiones</a>.<br />Para cuestiones relacionadas con estilos, plantillas y temas, por favor, escribe en el <a href="https://www.phpbb.com/community/viewforum.php?f=471">Foro de Estilos</a>.<br /><br />Si tú pregunta se refiere a un paquete específico, por favor, escribe directamente en el tema dedicado al paquete.</p><h2>Obtención de Soporte</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">El Paquete de Bienvenida de phpBB</a><br /><a href="https://www.phpbb.com/support/">Sección de Soporte</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Guía de Inicio Rápido</a> (en inglés).<br /><br />Para asegurarse que estás actualizado a la última versión, ¿porqué no <a href="https://www.phpbb.com/support/">te suscribes a nuestra lista de correo</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Licencia Pública General',

	// Install page
	'INSTALL_INTRO'	=> 'Bienvenido a la Instalación',
	'INSTALL_INTRO_BODY'		=> 'Con esta opción, es posible instalar phpBB en tú servidor.</p><p>Para proceder, necesitas los datos de configuración de su base de datos. Si no conoces los datos de configuración de su base de datos, por favor, contacta con tu proveedor de hosting y pregúntale. No podrás continuar sin ellos. Necesitas:</p>
	<ul>
		<li>El tipo de base de datos - la base de datos que vas a usar.</li>
		<li>El nombre de servidor o DSN - la dirección del servidor.</li>
		<li>El puerto del servidor - (la mayoría de las veces no se necesita).</li>
		<li>El nombre - El nombre de la base de datos en el servidor.</li>
		<li>Usuario y clave - los datos para identificarse en la base de datos.</li>
	</ul>

	<p><strong>Nota:</strong> Si instalas usando SQLite, deberías ingresar la ruta completa al archivo de tú base de datos en el campo DSN y dejar los campos usuario y clave en blanco. Por razones de seguridad, debería asegurarse de que el archivo de la base de datos no está alojado en una carpeta accesible desde la web.</p>

	<p>phpBB3 soporta las siguientes bases de datos:</p>
	<ul>
		<li>MySQL 3.23 ó superior (MySQLi también)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
        <li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ó superior (directamente o vía ODBC)</li>
		<li>MS SQL Server 2005 ó superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Se mostrarán solamente las bases de datos soportadas por su servidor.',
	'ACP_LINK'	=> 'Lléveme al <a href="%1$s">PCA</a>',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'El archivo no existe',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Para poder instalar phpBB el archivo %1$s necesita existir.',
	'FILE_NOT_WRITABLE'			=> 'No se puede escribir en el archivo',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'Para poder instalar phpBB se debe poder escribir en el archivo %1$s.',

	'DIRECTORY_NOT_EXISTS'				=> 'El directorio no existe',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'Para poder instalar phpBB el directorio %1$s necesita existir.',
	'DIRECTORY_NOT_WRITABLE'			=> 'No se puede escribir en el directorio',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'Para poder instalar phpBB se debe poder escribir en el directorio %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versión PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB requiere la versión 5.4.0 de PHP o superior.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'La función PHP getimagesize() es requerida',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Para que phpBB funcione correctamente, la función getimagesize debe estar disponible.',
	'PCRE_UTF_SUPPORT'					=> 'Soporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB no se ejecutará si la instalación de PHP no está compilado con soporte UTF-8 en la extensión PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Soporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Para que phpBB funcione correctamente, la extensión PHP JSON debe estar disponible.',
	'PHP_SUPPORTED_DB'					=> 'Bases de datos soportadas',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Debe tener soporte de al menos una base de datos compatible con PHP. Si se muestran los módulos de base de datos como no disponibles, deberá comunicarse con su proveedor de hosting, o revise la documentación de instalación de PHP relevante.',

	'RETEST_REQUIREMENTS'	=> 'Probar de nuevo los requerimientos',

	'STAGE_REQUIREMENTS'	=> 'Comprobar requerimientos'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Tiene que llenar todos los campos en este bloque.',
	'PHPBB_ALREADY_INSTALLED'	=> 'phpBB ya esta instalado.'
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Establecer datos de instalación',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Detalles del administrador',

	// Form labels
	'ADMIN_CONFIG'				=> 'Configuración del administrador',
	'ADMIN_PASSWORD'			=> 'Contraseña del administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirme contraseña del administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Por favor, introduzca una contraseña de entre 6 y 30 caracteres de longitud.',
	'ADMIN_USERNAME'			=> 'Nombre del administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Por favor, introduzca un nombre de entre 3 y 20 caracteres de longitud.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'El email que ingresó no es válido.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Las claves que ingresó no concuerdan.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'La contraseña que ingresó es muy larga. La longitud máxima es de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'La ccontraseña que ingresó es muy corta. La longitud mímima es de 6 caracteres.',
	'INST_ERR_USER_TOO_LONG'	=> 'El usuario que ingresó es muy largo. La longitud máxima es de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'El usuario que ingresó es muy corto. La longitud mínima es de 3 caracteres.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Configuración del foro',
	'DEFAULT_LANGUAGE'	=> 'Idioma por defecto',
	'BOARD_NAME'		=> 'Título del foro',
	'BOARD_DESCRIPTION'	=> 'Breve descripción del foro',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Ajustes de la base de datos',

	// Form labels
	'DB_CONFIG'				=> 'Configuración de base de datos',
	'DBMS'					=> 'Tipo de base de datos',
	'DB_HOST'				=> 'Nombre del servidor de la base de datos o DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN significa Data Source Name y es relevante solo para instalaciones ODBC. En PostgreSQL, use localhost para conectar con el servidor local a través del dominio del socket UNIX y 127.0.0.1 para conectar via TCP. En SQLite, introduzca la ruta completa a su base de datos.',
	'DB_PORT'				=> 'Puerto en el servidor de la base de datos',
	'DB_PORT_EXPLAIN'		=> 'Déjelo en blanco a menos que quiera que el servidor opere en un puerto distinto al estándar.',
	'DB_PASSWORD'			=> 'Contraseña de la base de datos',
	'DB_NAME'				=> 'Nombre de la base de datos',
	'DB_USERNAME'			=> 'Usuario de la base de datos',
	'TABLE_PREFIX'			=> 'Prefijo para tablas en la base de datos',
	'TABLE_PREFIX_EXPLAIN'	=> 'El prefijo debe comenzar con una letra y sólo debe contener letras, números y subrayados.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ vía ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativo ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL con Extensiones MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'No se puede cargar el módulo PHP para la base de datos seleccionada.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'El prefijo introducido no es válido. Se debe comenzar con una letra y sólo debe contener letras, números y subrayados.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'El prefijo de tabla que especificó es muy largo. La longitud máxima es de %d caracteres.',
	'INST_ERR_DB_NO_NAME'			=> 'No se especificó nombre de base de datos.',
	'INST_ERR_DB_FORUM_PATH'		=> 'La base de datos especificada está dentro del árbol de carpetas de su sitio. Debería poner este archivo en un lugar no accessible desde la web.',
	'INST_ERR_DB_CONNECT'			=> 'No se puede conectar a la base de datos, mire el mensaje de error de abajo.',
	'INST_ERR_DB_NO_ERROR'			=> 'No se proporcionó mensaje de error.',
	'INST_ERR_PREFIX'				=> 'Ya existen tablas con el prefijo especificado, por favor elija uno diferente.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'La versión de MySQL instalada en esta máquina es incompatible con la opción “MySQL con extensiones MySQLi” que seleccionó. Por favor pruebe la opción “MySQL” en su lugar.',
	'INST_ERR_DB_NO_SQLITE'			=> 'La versión de la extensión SQLite que tiene instalada es muy antigua, hay que actualizarla al menos a la 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'La versión de la extensión SQLite que tiene instalada es muy antigua, hay que actualizarla al menos a la 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'La versión de Oracle instalada en esta máquina requiere que configure el parámetro <var>NLS_CHARACTERSET</var> a <var>UTF8</var>. O bien actualice su instalación a 9.2+ o cambie el parámetro.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'La base de datos que seleccionó no fue creada en <var>UNICODE</var> o <var>UTF8</var>. Pruebe a reinstalar con una base de datos <var>UNICODE</var> o <var>UTF8</var>.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Configuración de correo electrónico',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Configuración del servidor',
	'SCRIPT_PATH'				=> 'Ruta del script',
	'SCRIPT_PATH_EXPLAIN'		=> 'La ruta dónde está ubicado phpBB3 relativa al nombre de dominio, ej. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Gracias, La Administración del Foro',
	'CONFIG_SITE_DESC'				=> 'Un breve texto para describir su Foro',
	'CONFIG_SITENAME'				=> 'sudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Este es un mensaje de ejemplo en su instalación phpBB3. Puede borrar este mensaje, este tema e incluso este foro si quiere, ¡ya que todo parece estar funcionando! Pero es buena idea usar la categoría y el foro creados por defecto para copiar los permisos en los futuros foros a crear. Le simplificará la tarea. ¡Gracias!',

	'FORUMS_FIRST_CATEGORY'			=> 'Mi primera categoría',
	'FORUMS_TEST_FORUM_DESC'		=> 'Es solo para probar el foro.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Foro de Prueba 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador del Sitio',
	'REPORT_WAREZ'					=> 'El mensaje contiene enlaces a software ilegal o pirateado (warez).',
	'REPORT_SPAM'					=> 'El mensaje reportado solo tiene la intención de informar de un sitio web u otro producto.',
	'REPORT_OFF_TOPIC'				=> 'El mensaje reportado es Off-Topic.',
	'REPORT_OTHER'					=> 'El mensaje reportado no se ajusta a ninguna categoría, por favor use el campo de descripción.',

	'SMILIES_ARROW'					=> 'Flecha',
	'SMILIES_CONFUSED'				=> 'Confundido',
	'SMILIES_COOL'					=> 'Tranquilo',
	'SMILIES_CRYING'				=> 'Llorando o muy triste',
	'SMILIES_EMARRASSED'			=> 'Ofuscado',
	'SMILIES_EVIL'					=> 'Malo o muy loco',
	'SMILIES_EXCLAMATION'			=> 'Exclamación',
	'SMILIES_GEEK'					=> 'Friki',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Riendo',
	'SMILIES_MAD'					=> 'Loco',
	'SMILIES_MR_GREEN'				=> 'Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Pregunta',
	'SMILIES_RAZZ'					=> 'Vacilar',
	'SMILIES_ROLLING_EYES'			=> 'Harto',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Sacudido',
	'SMILIES_SMILE'					=> 'Sonrisa',
	'SMILIES_SURPRISED'				=> 'Sorprendido',
	'SMILIES_TWISTED_EVIL'			=> 'Diablo',
	'SMILIES_UBER_GEEK'				=> 'Microsiervo',
	'SMILIES_VERY_HAPPY'			=> 'Muy Feliz',
	'SMILIES_WINK'					=> 'Guiño',

	'TOPICS_TOPIC_TITLE'			=> 'Bienvenido a phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Vista Global',
	'MENU_INTRO'		=> 'Introducción',
	'MENU_LICENSE'		=> 'Licencia',
	'MENU_SUPPORT'		=> 'Soporte',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Creando archivo de configuración',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> 'Añadiendo ajustes de configuración',
	'TASK_ADD_DEFAULT_DATA'			=> 'Añadiendo ajustes por defecto a la base de datos',
	'TASK_CREATE_DATABASE_SCHEMA'	=> 'Creando esquema de la base de datos',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registrando robots',
	'TASK_ADD_LANGUAGES'	=> 'Instalando idiomas disponibles',
	'TASK_ADD_MODULES'		=> 'Instalando módulos',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Enviando notificación al correo electrónico',
	'TASK_POPULATE_MIGRATIONS'	=> 'Rellenando migraciones',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'El instalador ha finalizado correctamente',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Módulo no encontrado',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Un módulo no se pudo encontrar porque el servicio, %s, no está definido.',

	'TASK_NOT_FOUND'				=> 'Tarea no encontrada',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Una tarea no se pudo encontrar porque el servicio, %s, no está definido.',

	'SKIP_MODULE'	=> 'Omitir el módulo “%s”',
	'SKIP_TASK'		=> 'Omitir la tarea “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Todas las tareas de servicios de instalación deben comenzar con “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'La definición de la tarea de servicio de instalación no es válido. El nombre del servicio dado “%1$s”, el espacio de nombres de clase esperado para eso es “%2$s”. Para obtener más información, consulte la documentación de task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'The installer config file is not writable.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Instalar phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Mostrar la configuración que se utilizará',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validar un archivo de configuración',
	'CLI_CONFIG_FILE'				=> 'Archivo de configuración a usar',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Actualizar la instalación de phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Con esta opción, es posible actualizar su instalacion de phpBB a la última versión.<br />Durante el proceso se verificará la integridad de todos los archivos. Podrá también revisar las diferencias y archivos antes de actualizar.<br /><br /> La actualización de archivos en si misma se puede hacer de dos formas distintas.</p><h2>Actualización Manual</h2> <p>Con esta actualización solamente descarga su paquete de archivos cambiados personalizado para asegurarse de no perder sus cambios de archivos. Una vez terminado se le redirige a la comprobación de archivo de nuevo para asegurarse de que todo se actualizó correctamente.<br /><br />',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Type of update to run',

	'UPDATE_TYPE_ALL'		=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Update database only',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Métodos de actualización de los archivos',

	'UPDATE_FILE_METHOD'			=> 'Método de actualización del archivo',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Descargar archivos modificados en un archivo',
	'UPDATE_FILE_METHOD_FTP'		=> 'Archivos de actualización a través de FTP (Automático)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Archivos de actualización a través de acceso directo a archivos (Automático)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccione el formato del archivo de descarga',

	// FTP settings
	'FTP_SETTINGS'			=> 'Ajustes FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No se encontró directorio de actualización válido. Por favor, asegúrese de que ha cargado los archivos correspondientes.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Su versión está actualizada. No hay necesidad de ejecutar la herramienta de actualización. Si quiere verificar la integridad de sus archivos asegúrese de haber subido los archivos actualizados correctos.',
	'OLD_UPDATE_FILES'				=> 'Los archivos actualizados no tienen la fecha correcta. Los archivos actualizados que se encontraron son para actualizar de phpBB %1$s a phpBB %2$s pero la última versión de phpBB es %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Los archivos actualizados encontrados son incompatibles con la versión instalada. La versión instalada es %1$s y el archivo actualizado es para phpBB %2$s a %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Actualizar archivos',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Comprobar archivos a actualizar',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'El archivo de diferencias (differ) %s no se puede abrir.',

	'UPDATE_FILE_DIFF'		=> 'Archivos diferenciados modificados',
	'ALL_FILES_DIFFED'		=> 'Todos los archivos modificados han sido diferenciados.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Archivos de actualización',

	'DOWNLOAD'							=> 'Descargar',
	'DOWNLOAD_CONFLICTS'				=> 'Conflictos en la descarga de este archivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Buscar &lt;&lt;&lt; para descubrir los conflictos',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descargar archivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Una vez descargado, debería desempaquetar el archivo. Encontrará dentro los archivos modificados que necesita subir al directorio raíz de su foro phpBB. Por favor, súbalos a sus respectivas ubicaciones. Después de que los haya subido todos, por favor verifique los archivos de nuevo con el otro botón de abajo.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'El archivo ya está actualizado.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'El archivo no permite que se le aplique diff.',
	'FILE_USED'						=> 'Información empleada',			// Single file
	'FILES_CONFLICT'				=> 'Archivos en conflicto',
	'FILES_CONFLICT_EXPLAIN'		=> 'Los siguientes archivos han sido modificados y no coinciden con los archivos originales de la antigua versión. phpBB ha determinado que esos archivos creará conflitos si se intenta insertarlos. Por favor, investigue los conflictos y trate de resolverlos manualmente o continúe la instalación decidiendo el método de integración preferido. Si resuelve los conflictos manualmente verifique los archivos nuevamente despues de modificarlos. También puede decidir un método de integración para cada archivo. El primero dará como resultado un archivo donde las líneas conflictivas de su viejo archivo se perderán, el otro dará como resultado perder los cambios en el nuevo archivo.',
	'FILES_DELETED'					=> 'Archivos borrados',
	'FILES_DELETED_EXPLAIN'			=> 'Los siguientes archivos no existen en la nueva versión. Estos archivos tienen que ser eliminados de su actual instalación.',
	'FILES_MODIFIED'				=> 'Archivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Los siguientes archivos fueron modificados y no coinciden con los archivos originales de la antigua versión. Las modificaciones se insertarán a los archivos actualizados.',
	'FILES_NEW'						=> 'Archivos nuevos',
	'FILES_NEW_EXPLAIN'				=> 'Los siguientes archivos actualmente no existen en su instalación.',
	'FILES_NEW_CONFLICT'			=> 'Archivos nuevos en conflicto',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Los siguientes archivos son nuevos de la última versión pero se ha determinado que ya hay un archivo con el mismo nombre en la misma ubicación. Este archivo será sobreescrito por el nuevo.',
	'FILES_NOT_MODIFIED'			=> 'Archivos sin modificación',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Los siguientes archivos no han sido modificados y coinciden con los archivos originales de phpBB para la versión a la cual quiere actualizar.',
	'FILES_UP_TO_DATE'				=> 'Archivos actualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Los siguientes archivos ya han sido actualizados.',
	'TOGGLE_DISPLAY'				=> 'Ver/Ocultar lista de archivos',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Actualizando archivos',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'La actualización del archivo “%1$s“ falló. El instalador intentará vuelve a “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'La actualización del archivo falló. No hay métodos de retorno adicionales disponibles.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continuar el proceso de actualización',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Comprobar archivos de nuevo',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Actualizar base de datos',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'La actualización de base de datos se ha realizado correctamente.',
));
