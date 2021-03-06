<?php
/**
 * calendar extension Function Exceptions dictionary for PHP_CompatInfo 1.9.0b2 or better
 *
 * PHP versions 4 and 5
 *
 * @category PHP
 * @package  PHP_CompatInfo
 * @author   Davey Shafik <davey@php.net>
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD
 * @version  CVS: $Id: calendar_func_exceptions.php,v 1.1 2008/12/28 19:47:37 farell Exp $
 * @link     http://pear.php.net/package/PHP_CompatInfo
 * @since    version 1.9.0 (2009-01-19)
 */

if (!isset($function_exceptions['calendar'])) {
    $function_exceptions['calendar'] = array();
}

$function_exceptions['calendar'] = array_merge($function_exceptions['calendar'], array(
  'cal_days_in_month' =>
  array (
    'init' => '4.0.7',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'cal_from_jd' =>
  array (
    'init' => '4.0.7',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'cal_info' =>
  array (
    'init' => '4.0.7',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'cal_to_jd' =>
  array (
    'init' => '4.0.7',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'easter_date' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'easter_days' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'frenchtojd' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'gregoriantojd' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jddayofweek' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jdmonthname' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jdtofrench' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jdtogregorian' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jdtojewish' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jdtojulian' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jdtounix' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'jewishtojd' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'juliantojd' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ),
  'unixtojd' =>
  array (
    'init' => '4.0.0',
    'ext' => 'calendar',
    'pecl' => false,
  ))
);
?>