<?php
/**
 * Plugin Name: ingenidev, KSA - SAR Currency Symbol Changer
 * Plugin URI: https://ingenidev.com/ksa-sar-currency-symbol-changer/
 * Author: ingeniDev
 * Author URI: https://ingenidev.com
 * Description: By default, WooCommerce uses the currency symbol for the Kingdom of Saudi Arabia  (SAR) as "ر.س". This plugin changes it to "SAR".
 * Version: 1.0.0
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') or die('Direct access not permitted');

add_filter('woocommerce_currency_symbol', 'ingenidev_ksacsc_change_ksa_currency_symbol', 10, 2);

function ingenidev_ksacsc_change_ksa_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'SAR':
            $currency_symbol = 'SAR';
            break;
    }
    return $currency_symbol;
}


