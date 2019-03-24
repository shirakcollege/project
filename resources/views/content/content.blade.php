
<style>


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link href="../../../public/css/styles.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../../public/css/styles.css" rel="stylesheet">
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <link href="../../../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../../../public/css/styles.css" rel="stylesheet">



    <style>

#editor{

    margin-left: 300px;
    margin-top: -350px;
    position: relative;
    width: 1400px;

}

    </style>


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
                <li class="active"><a href="/resources/views/usersAccount/usersAccount.blade.php">Home</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{ Auth::user()->name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/resources/views/usersAccount/usersAccount.blade.php">HOME</a></li>
                        <li><a href="/resources/views/aboutUsers/aboutUsersPhp.blade.php">ABOUT ME</a></li>
                        <li><a href="/resources/views/usersInfo/usersInfo.blade.php">CHANGE</a></li>
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
<div class="page-content" >
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="/resources/views/product/product.blade.php"><i class="	glyphicon glyphicon-list-alt"></i>Product</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-book"></i> Category</a></li>
                    <li><a href="http://shirakcollege/public/content"><i class="glyphicon glyphicon-record"></i> Content</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Orders</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>

                </ul>
            </div>
        </div>


        <div class="col-md-10" id="editor">
            <div class="row">

                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">

                                    <div class="content-box-large">
                                        <div class="panel-heading">
                                            <div class="panel-title">TinyMCE Full</div>

                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <textarea id="tinymce_full"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../../public/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../public/vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
<script src="../../../public/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

<script src="../../../public/vendors/ckeditor/ckeditor.js"></script>
<script src="../../../public/vendors/ckeditor/adapters/jquery.js"></script>

<script type="text/javascript" src="../../../public/vendors/tinymce/js/tinymce/tinymce.min.js"></script>

<script src="../../../public/js/custom.js"></script>
<script src="../../../public/js/editors.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../../public/bootstrap/js/bootstrap.min.js"></script>
<script src="../../../public/js/custom.js"></script>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>


</body>
</html>

