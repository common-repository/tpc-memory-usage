<?php
/**
 * TPC! Memory Usage Adapter Interface for Logger
 *
 * @link http://webjawns.com/tpc-memory-usage-for-wordpress/
 * @copyright Copyright (c) 2010-2014 Christopher Strosser (http://webjawns.com)
 */

if (!defined('ABSPATH'))
    die('-1');

/**
 * @package Tpcmem
 * @subpackage Tpcmem_Log
 */
interface Tpcmem_Log_Adapter_Interface {
    public function log(array $event, $priority);
}