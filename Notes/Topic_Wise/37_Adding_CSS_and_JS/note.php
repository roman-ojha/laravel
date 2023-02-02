<?php

    /*
        *) Different way to use CSS & JS on laravel
            1. Internal CSS & JS inside blade template
            2. External CSS & JS
                -> we can created CSS & JS file:
                    1. inside public folder
                    2. inside resources folder

        *) Inside resources folder:
            -> run : npm install
            -> if you want to process or compile JS & CSS in that case use resources folder
            -> if you want to use postCSS, Sass in that case use resources folder
            -> NOTE: because it is using 'vite' so the given instruction inside image won't work
            -> https://laravel.com/docs/9.x/vite#working-with-scripts
            -> https://laravel.com/docs/9.x/vite#main-content
            *) using vite:
                -> you need to configure it into 'vite.config.js' file
                -> then you can include CSS & JS file inside blade template
            -> in last run : npm run dev

        *) add Tailwind:
            -> https://tailwindcss.com/docs/guides/laravel
    */
