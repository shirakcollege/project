
<style>

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="../../../public/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />


</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WELCOME</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://register/public/usersAccount">Home</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{ Auth::user()->name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://register/public/usersAccount#">HOME</a></li>
                        <li><a href="http://register/public/aboutUsers">ABOUT ME</a></li>
                        <li><a href="http://register/public/usersInfo">CHANGE</a></li>
                    </ul>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out"></span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>



            </ul>
        </div>
    </div>
</nav>






<section id="my-account-security-form" class="page container">


    <form id="userSecurityForm" class="form-horizontal" action="" method="post">

        <div class="container">

            <div class="alert alert-block alert-info">
                <p>
                    Enter updated security information for your account as desired.  Fields marked with an asterisk
                    are required.
                </p>
        </div>
    </form>



            <div class="row">
                <form id="acct-password-row" class="span7"  action="change_action" method="post">
                    <fieldset>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <legend>Do you want change password?</legend><br>

                        @if(session()->has('messages'))
                            <div class="alert alert-danger">
                                {{ session()->get('messages')}}
                            </div>
                        @endif


                        <div class="control-group ">
                            <label class="control-label">Current Password <span class="required">*</span></label>
                            <div class="controls">
                                <input id="current-pass-control" name="password" class="span4" type="password" value="">

                            </div>
                        </div>



                        @if($errors ->has('newPassword'))
                            <div class="alert alert-danger">
                                {{$errors ->first('newPassword')}}
                            </div>
                        @endif


                        <div class="control-group ">
                            <label class="control-label">New Password</label>
                            <div class="controls">
                                <input id="new-pass-control" name="newPassword" class="span4" type="password" value="" autocomplete="false">

                            </div>
                        </div>

                        @if($errors ->has('newPasswordVerification'))
                            <div class="alert alert-danger">
                                {{$errors ->first('newPasswordVerification')}}
                            </div>
                        @endif
                        <div class="control-group ">
                            <label class="control-label">Verify New Password</label>
                            <div class="controls">
                                <input id="new-pass-verify-control" name="newPasswordVerification" class="span4" type="password" value="" autocomplete="false">

                            </div>
                        </div>
                    </fieldset>


                    <footer class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">Cancel</button>
                    </footer>
                </form>

                </div>





</section>


</body>
</html>

