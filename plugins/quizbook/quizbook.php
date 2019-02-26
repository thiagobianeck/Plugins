<?php
/*
Plugin Name: QuizBook
Plugin URI:
Description: Plugin para añadir quizes o questionarios con WordPress
Version: 1.0
Author: Thiago Moreira Bianeck
Author URI: www.beatech.com.br
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: quizbook
 */

/*
 * Adiciona o Post Type de Quizzes
 */

require_once plugin_dir_path(__FILE__) . 'includes/posttypes.php';

/*
 * Regenera as regras das url's ao ativar
 */
register_activation_hook(__FILE__, 'quizbook_rewrite_flush');

/*
 * Adiciona Metaboxes aos Quizzes
 */

require_once plugin_dir_path(__FILE__) . 'includes/metaboxes.php';

/*
 * Adiciona Roles e Capabilities aos Quizzes
 */

require_once plugin_dir_path(__FILE__) . 'includes/roles.php';
register_activation_hook(__FILE__, 'quizbook_crear_role');
register_deactivation_hook(__FILE__, 'quizbook_remover_role');