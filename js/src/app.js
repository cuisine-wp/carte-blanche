import Nav from './components/Nav.js'

define([
    'jquery',
    'social-share',
], function ($) {

    //set jQuery as a global for this theme and it's components.
    global.$ = $;

    //on Ready:
    $( document ).ready( () => {

        //start the nav:
        let nav = new Nav();

    });
    

    //on Load:
    $( window ).load( () => {

    });

});