<?php
namespace Illuminate\Contracts\Container;
namespace Illuminate\Database\Query;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\dbregister;
use Illuminate\Support\Facades;
use Illuminate\Auth;
use Illuminate\Support\HtmlString;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\loginUsersControl;
use App\dbregister;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema;


class RegisterController extends Controller
{

    public $info;

    public function funcForRegistration()
    {

        $info = Input::except (array('token'));
        //var_dump($info);


        $name = $info["name"];
        $sName = $info["sName"];
        $email = $info["email"];
        $bday = $info["bday"];
        $password = $info["pass"];
        $rePass = $info["rePass"];
        trim($password);

        $rule = array(
            'name' => 'required|max:25',
            'sName' => 'required|max:25',
            'bday' => 'required|date',
            'pass' => 'required|min:6|max:10',
            'email' => 'required|email',
            'rePass' => 'required|same:pass'

        );


        $showErr = array(

            'name.max' => 'Name must be have maximum 25 symbols',
            'sName.max' => 'Surname must be have maximum 25 symbols',
            'pass.min' => 'Password must be have minimum 6 symbols',
            'pass.max' => 'Password must be have maximum 10 symbols',
            'rePass.same' => 'The repassword and password must match.',
            'rePass.riquired' => 'Please confirm the password'

        );






        $validator = Validator::make ($info, $rule, $showErr);

        $function = new  loginUsersControl();

        if ($validator->fails() || $function->validationPasword($password,$validator)) {
            return Redirect::to ('file')->withErrors($validator);
        } else {
            $user = array(
                'email' => Input::get ($email),
                'password' => Input::get ($password)
            );
            dbregister::dbForm(Input::except(array('_token', 'rePass')));
            return redirect ('alert')->with('message', 'Congritulation Session are succesfuly');

        }


    }


    public static function loginuser()
    {

        $info = Input::except(array('_token'));


        $email = $info["email"];
        $password = $info["Pass"];



        $rule = array(
            'email' => 'required',
            'Pass' => 'required',
            'rePass' => 'required|same:Pass'

        );


        $validator = Validator::make($info, $rule);
        if ($validator->fails()){
            return Redirect::to ('log')->withErrors($validator);
        } else{
            $functionLogin = new  loginUsersControl();
            if($functionLogin->funcUserValidation($email,$password) == true){
                return Redirect::to ('usersAccount');



            }

            }


        }


    public function funcChangePassword()
    {

                    $info = Input::except (array('_token'));
                    //var_dump($info);




                    $password = $info["password"];
                    $newPasswords = $info["newPassword"];
                    $newPassword = $info["newPasswordVerification"];
                    trim($password);





        $rule = array(
            'newPassword' => 'required|min:6|max:10',
            'newPasswordVerification' => 'required|same:newPassword'
        );

      //  $passHashed = Hash::make(Input::get('password'));


        $index = "password";
        $oldPass = new  loginUsersControl();

        $result  = $oldPass->funcOldPass($password,$index);



                if($result == 'not'){
                    return \redirect('usersInfo')->with('messages', 'Pleas select to correct');

                           }else{

                                    $validator = Validator::make($info, $rule);
                                    if ($validator->fails()) {
                                        return Redirect::to ('usersInfo')->withErrors ($validator);
                                    }else


                                        dbregister::table('register_users')->get();

                                       dbregister::table('register_users')
                                        ->where('id', 10)
                                        ->update(['password' => 'newPasswordVerification']);

                                    }


                }










    }






