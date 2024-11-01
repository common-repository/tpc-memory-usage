<?php
/**
 * Manage checkpoint administration actions
 *
 * @link http://webjawns.com/tpc-memory-usage-for-wordpress/
 * @copyright Copyright (c) 2010-2014 Christopher Strosser (http://webjawns.com)
 */

if (!defined('ABSPATH'))
    die('-1');

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
switch ($action) {
    case 'edit':
        $checkpoint_id = (int) $_GET['checkpoint_id'];

        if (!$checkpoint = tpcmem_get_checkpoint($checkpoint_id))
            wp_die(__('Checkpoint not found.'));

        include('edit-checkpoint-form.php');
        break;

    default:
        $checkpoint = tpcmem_get_default_checkpoint_to_edit();

        include('edit-checkpoint-form.php');
        break;

}
