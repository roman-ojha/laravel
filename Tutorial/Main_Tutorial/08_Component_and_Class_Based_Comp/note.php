<?php

    /*
        *) What is Component:
            -> Peace of code that can be use multiple times
            -> let's say we have header component that we don't have to write it again and again in every view in that case for every page we can use same header component
        *) Make Component:
            -> Create component using command line:
                -> php artisan make:component <component_name>
                -> php artisan make:component Header
            -> it create:
                -> one blade file on './resources/views/components/'
                    -> to write html code
                -> one php file on './app/View/components/'
                    -> to write dynamic code
        *) Use Component:
            -> so we had create the 'header' component now we will use that header component inside 'users.blade.php' & 'about.blade.php'
        *) Pass Data in Component:
            -> first we will pass data from another view page or component as attribute
            -> then we will access that through
        *) Interview Question:
            -> 1. Can we use component into route?
    */
