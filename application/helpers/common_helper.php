<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Print array/string.
 * @param array $data - data which is going to be printed
 * @param boolean $is_die - if set to true then excecution will stop after print.
 */
function pr($data, $is_die = false) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    } 
    elseif (is_object($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    else {
        echo $data;
    }

    if ($is_die)
        die;
}

/**
 * Print last executed query
 * @param boolean $bool - if set to true then excecution will stop after print
 */
function qry($bool = false) {
    $CI = & get_instance();
    echo $CI->db->last_query();
    if ($bool)
        die;
}