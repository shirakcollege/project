
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
    <link href="../../../public/css/styles.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <link href="../../../public/css/style.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                <li class="active"><a href="http://shirakcollege/public/usersAccount">Home</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{ Auth::user()->name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://shirakcollege/public/usersAccount#">HOME</a></li>
                        <li><a href="http://shirakcollege/public/aboutUsers">ABOUT ME</a></li>
                        <li><a href="http://shirakcolleger/public/usersInfo">CHANGE</a></li>
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
<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->

                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>

            <div class="container" id="mydiv">
                <div class="row" >
                    <div class="col-sm-11">
                        <div class="box-shadow-full" >
                            <div class="row" >
                                <div class="col-md-6" >
                                    <div class="row" >

                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img" >
                                                <img src="https://i.pinimg.com/736x/11/34/25/113425ed0614050b3336065f39f3b033--mens-hairstyles--undercut-hairstyles.jpg" class="img-fluid rounded b-shadow-a" alt="" width="150" height="150">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info" >
                                                <p><span class="title-s">Profile: </span> <span>full stack developer</span></p>
                                                <p><span class="title-s">ID: </span> <span>{{ Auth::user()->id}}</span></p>
                                                <p><span class="title-s">Email: </span> <span>{{ Auth::user()->email}}</span></p>
                                                <p><span class="title-s">Name:Surname </span> <span>{{ Auth::user()->name}},{{ Auth::user()->sname}}<span></span></p>
                                                <p><span class="title-s">BirthDay: </span> <span>{{ Auth::user()->bday}}</span></p>
                                                <p><span class="title-s">Phone: </span> <span>(617) 557-0089</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">Skill</p>
                                        <span>HTML</span> <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                        <span>CSS3</span> <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                        <span>PHP</span> <span class="pull-right">50%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                        <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                About me
                                            </h5>
                                        </div>
                                        <p class="lead">
                                            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                                            imperdiet et, porttitor
                                            at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                                            porttitor accumsan tincidunt.
                                        </p>

                                    </div>
                                    <a href="http://shirakcollege/public/usersInfo" class="btn btn-info btn-lg">
                                        <span class="glyphicon glyphicon-pencil"></span> Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</body>
</html>

