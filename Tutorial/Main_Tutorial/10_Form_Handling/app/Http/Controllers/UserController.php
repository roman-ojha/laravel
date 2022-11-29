<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loadUserView($username)
    {
        $friends = [
            "Jack",
            "Blade",
            "Tom",
            "Harry",
            "Razz",
        ];
        return view('users', ['username'=>$username,'friends'=>$friends]);
    }

    public function getPostData(Request $req)
    {
        // now to this controller we are submitting the form

        // $req is the request object that we get from user request from the client side
        // now we will get the input field data:
        // {"_token":"eElvCQ4YdWslsctTSCMXNxUllyPE7d59uTmDWYeF","username":"roman","password":"ojha"}

        // dd($req);

        // to get the data that we fill in form
        print_r($req->all());
        echo "<br/>";
        // Output: Array ( [_token] => nxikTT5CHVvmIjFXtiaCHyn44hpXebYoaI04v1ce [username] => roman [password] => roman )


        // get data using associative array
        print_r($req->input());
        echo "<br/>";

        // get specific field data
        echo $req->input('username');
        echo "<br/>";
        echo $req->input('password');
        echo "<br/>";

        // another way to access field data
        echo $req->username."<br/>";
        echo $req->password."<br/>";

        // we can even check does input data exist or not
        if ($req->has('username')) {
            echo "Username Exist <br/>";
        }
        // multiple change
        if ($req->has(['username','password'])) {
            // if 'username' && 'password' exist
            echo "Username and password Exist <br/>";
        }
        if ($req->hasAny(['username','password'])) {
            // if 'username' || 'password' exist
            echo "Username Or password Exist <br/>";
        }

        // to check is field value is empty or not
        if ($req->filled('username')) {
            echo "Username is filled <br/>";
        }

        // we can also check does key is missing or not
        if ($req->missing('name')) {
            echo "Name is missing <br/>";
        }

        // we can call the closure function if given input field exist
        $req->whenHas('username', function ($input) {
            // $input: is the value of 'username' field
            echo $input."<br/>";
        });

        // call closure function if give input field contain value
        $req->whenFilled('username', function ($input) {
            echo "Username is Filled <br/>";
            echo $input."<br/>";
        });

        // we can store old data using flash session
        // store data in this request and can use that data for next request
        // here we are storing current input into flash
        $req->flash();

        // now we can access the flash data for next request
        echo $req->old('username')."<br/>";
        echo $req->old('password')."<br/>";

        // store only specific input data
        $req->flashOnly(["username","password"]);

        // exclude some specific data to store
        $req->flashExcept("password");

        // redirect with flash data
        return redirect('olddata')->withInput();
        // using named route
        return redirect()->route('old')->withInput();
        // redirect without flashing some data
        return redirect('olddata')->withInput($req->except('password'));

        // Form validation
        $req->validate([
            // so here we are making 'username' and 'password' as required field
            'username' => 'required | max:10',
            'password' => 'required | min:5',
            // we will also apply max min character value validation
        ]);
    }
}
