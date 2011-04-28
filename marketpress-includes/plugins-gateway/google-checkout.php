<?php
/*
MarketPress Google Checkout Gateway Plugin
Author: Aaron Edwards
*/
class MP_Gateway_GoogleCheckout extends MP_Gateway_API {}
//register payment gateway plugin
mp_register_gateway_plugin( 'MP_Gateway_GoogleCheckout', 'google-checkout', __('Google Checkout', 'mp'), false, true );
?>