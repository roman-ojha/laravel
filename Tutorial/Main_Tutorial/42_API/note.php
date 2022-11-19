<?php

    /*
        *) API
            -> Application programming interface
            -> some application can be integrate/connect directly with server & database like:
                1. React app
                2. Vue app
                3. Android App
            -> In that case we can use API
            -> In API we will send JSON as response to those application

        *) Make First API
            *) Make Controller
            *) Make Route
                -> now we will use './routes/api.php' file to create REST API
            *) Test API on http client:
                -> we had use 'request.http' file to access the REST API
                -> so to access the API route we have to use:
                    -> http://localhost:8000/api/<api_route>
            *) Question
                1. can we use REST API route on 'web.php' route, if we can, should we or not?
    */
