<?php
/**
 * TPC! Memory Usage Exception for Logger
 *
 * @link http://webjawns.com/tpc-memory-usage-for-wordpress/
 * @copyright Copyright (c) 2010-2014 Christopher Strosser (http://webjawns.com)
 */

if (!defined('ABSPATH'))
    die('-1');

/** Zend_Exception */
require_once 'Zend/Exception.php';

/**
 * @package Tpcmem
 * @subpackage Tpcmem_Log
 */
class Tpcmem_Log_Exception extends Zend_Exception {
}