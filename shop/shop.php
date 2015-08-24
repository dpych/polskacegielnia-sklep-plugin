<?php
/**
 * @package Sklep Polska Cegła
 */
/*
Plugin Name: Sklep
Plugin URI:
Description: Sklep dla Polskiej Cegły (Cerbud)
Version: 1.0.0
Author: Dawid Pych
Author URI:
License:
Text Domain: sklep
*/

/*
System umożliwiający wystawianie ofertowe oraz możliwość wysyłania
przez klientów zapytań produktowych.
*/

class Cerbud_Sklep {

    protected $vendor_attr = array(
        'name'  => 'vendor',
        'attr'  => array(

        )
    );

    public function install() {
        $this->create_roles();
    }

    public function uninstall() {
        $this->remove_roles();
    }

    private function create_roles() {
        add_role(
            $this->vendor_attr['name'],
            __($this->vendor_attr['name'] , 'sklepcerbud'),
            $this->vendor_attr['attr']
        );
    }

    public function remove_roles() {
        remove_role( $this->vendor_attr['name'] );
    }
}

register_activation_hook( __FILE__, array( 'Cerbud_Sklep', 'install') );
register_deactivation_hook( __FILE__, array( 'Cerbud_Sklep', 'unistall' ) );