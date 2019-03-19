<?php
    namespace App\Http\Controllers\Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades;
    use App\dbregister;
    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\Redirect;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use App\User;

    use App\Http\Controllers\registersControl;

class loginUsersControl extends Controller
{

    public static function funcUserValidation($email, $password)
    {


        //$info = Input::except(array('_token'));

        $usersLog = array('email' => $email, 'password' => $password);
        if (Auth::attempt($usersLog)){
            $logIn = true;
            return $logIn;
        } else {
            echo 'no match';
        }

    }



    public static function validationPasword($password,$validator)
    {
        if (strlen ($password) > 8 || strlen ($password) < 6 || $password == NULL ||
            str_word_count ($password) >= 2) {
            return Redirect::to ('file')->withErrors($validator);
        }


    }



    public static function funcOldPass($pas,$word)
    {
        $passwordHashed =  Auth::user()->$word;


        if(Hash::check($pas, $passwordHashed)){
            return "yes";

        }else{
            return "not";

        }

    }






    }


