<?php

    /*
        *) Make First Change in file
            -> first go to './resources/views/welcome.blade.php'
            -> where you can create html template

        *) Create First file
            -> now go again to './resource/views'
            -> and create new file 'hello.blade.php'
            -> but we will not directly see the html view in webpage first we have to create route for that
            -> so you can create new route by going to './routes/web.php' and add:
                Route::get('/hello', function () {
                    return view('hello');
                });
    */
