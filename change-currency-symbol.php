<?php
/*
 * Plugin Name: Замена стандартных символов валют WooСommerce
 * Description: ₽ => Р
 * Version: 0.0.1
 * Author: Александр Боровлев
 * Author URI: https://vk.com/borovlioff
 * License: GPLv2 or later
 */

 
add_filter('woocommerce_currency_symbol', 'change_currency_symbol', 9999, 2);
 

/* Замена символа рубля  */
function change_currency_symbol( $valyuta_symbol, $valyuta_code ) {

	if( $valyuta_code === 'RUB' ) {
		return ' Р';
	}
	return $valyuta_symbol;
}