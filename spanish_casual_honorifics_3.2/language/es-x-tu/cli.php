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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Establece esta opción si la opción de configuración cambia con demasiada frecuencia para ser almacenado en caché de manera eficiente.',
	'CLI_CONFIG_CURRENT'				=> 'Valor de configuración actual, usa 0 y 1 para especificar los valores boolean',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Configuración %s borrada correctamente.',
	'CLI_CONFIG_NEW'					=> 'Nuevo valor de configuración, usa 0 y 1 para especificar los valores boolean',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Configuración %s no existe',
	'CLI_CONFIG_OPTION_NAME'			=> 'El nombre de la opción de configuración',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Establece esta opción si el valor debe imprimirse sin una nueva línea al final.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Cantidad a incrementar por',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Configuración incrementada correctamente %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'No se pudo establecer la configuración %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Configuración establecida correctamente %s',

 	'CLI_DESCRIPTION_CRON_LIST'					=> 'Imprime una lista de trabajos cron preparados y no preparados.',
 	'CLI_DESCRIPTION_CRON_RUN'					=> 'Ejecuta todas las tareas cron preparadas.',
 	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nombre de la tarea que se ejecutará',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Listar todas las migraciones instaladas y disponibles.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Actualiza la base de datos mediante la aplicación de migración.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Revertir una migración.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Elimina una opción de configuración',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Deshabilita la extensión especificada.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Habilita la extensión especificada.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Encuentra las migraciones que no dependían.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Obtiene el valor de una opción de configuración',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Incrementa el valor de una opción de configuración',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Lista de todas las extensiones de la base de datos y del sistema de archivos.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Nombre del ambiente.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Ejecutar en modo seguro (sin extensiones).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Iniciar el shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Purga la extensión especificada.',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Enumera los tipos de texto que se puede reanálisis (reparsed).',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Los Reparses almacenan texto con los servicios text_formatter actuales.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Tipo de texto del reanálisis. Dejar en blanco para reanálisis de todo.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'No guardar los cambios; simplemente imprimir lo que sucedería',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'ID del registro menor a porcesar',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'ID del registro mayor a procesar',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Número aproximado de registros a procesar ahora',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Comienzar el reanálisis donde la última ejecución se detuvo',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Recalcula la columna de user_email_hash de la tabla de usuarios.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Establece el valor de una opción de configuración solamente si el valor antiguo coincide con el valor actual',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Establece el valor de una opción de configuración',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Eliminar todas las miniaturas existentes.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Generar todas las miniaturas que faltan.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Volver a crear todas las miniaturas.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'No se pudo deshabilitar la extensión %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Extensión %s deshabilitada correctamente',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'No se pudo habilitar la extensión %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Extensión %s habilitada correctamente',
	'CLI_EXTENSION_NAME'				=> 'Nombre de la extensión',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'No se pudo purgar la extensión %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Extensión %s purgada correctamente',
	'CLI_EXTENSION_NOT_FOUND'			=> 'No se encontraron extensiones.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Disponible',
	'CLI_EXTENSIONS_DISABLED'			=> 'Deshabilitada',
	'CLI_EXTENSIONS_ENABLED'			=> 'Habilitada',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Todos los hashes de correo se han recalculado correctamente.',

	'CLI_MIGRATION_NAME'					=> 'Nombre de Migración, incluyendo el espacio de nombres (utilice barras inclinadas en lugar de barras invertidas para evitar problemas).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migraciones disponibles',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migraciones instaladas',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Mostrar soló migraciones disponibles',
	'CLI_MIGRATIONS_EMPTY'                  => 'No hay migraciones.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reanálisis %1$s (rango %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reanálisis %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'El reanálisis terminó correctamente',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) borrado.',
	'CLI_THUMBNAIL_DELETING'	=> 'Eliminación de miniaturas',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) saltado.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generado.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Generación de miniaturas',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Todas las miniaturas se han regenerado.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Todas las miniaturas se han eliminado.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'No hay miniaturas para generar.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'No hay miniaturas para borrar.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opcionalmente se puede especificar un nombre de tarea cron para ejecutar, sólo la tarea cron especificada.',
));
