<?php

    /*
        *) Localization
            -> Putting a website in Language is called Localization
        *) How to define Localization
            -> create file under './lang/' folder
            -> where we will create the folder respective of their language
            -> and we will create file that we want to use as localization
            -> and then we will access these data into 'profile.blade.php'
        *) Set Default Local
            -> now we have to make the default language
            -> for that we will go to 'config/app.php' where we will set the default language to the folder name that we created on '/lang' folder
            -> EX setting default lang as hindi:
                return [
                    'locale' => 'hi',
                ]
        *) Set Local with Route
            -> you can set the language based on route as well for that we have to write some code inside '/routes/web.php' file
        => We have done example on 'profile.blade.php', 'web.php' route, './lang/en/profile.php', './lang/hi/profile.php', './lang/ko/profile.php' & './config/app.php'
        *) Question
    */
