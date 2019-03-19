<?php

namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
class dbregister extends Authenticatable
{

//class dbregister extends Model{

protected $table = "register_users";

  public static function dbForm($info)
  {


    $userName = Input::get('name');
    //echo   $userName;
    $sName = Input::get('sName');
    $email = Input::get('email');
    $bday = Input::get('bday');

    $password = Hash::make(Input::get('pass'));

    $newpassword = Hash::make(Input::get('newPasswordVerification'));
    //echo   $password;
       $users = new dbregister();
       $users->name = $userName;
       $users->sname = $sName;
       $users->email = $email;
       $users->bday = $bday;
       $users->password = $password;
      $users->password = $newpassword;
     $users ->save();
  }


}
