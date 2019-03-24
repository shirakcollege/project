     <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>My account</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="../../../public/css/styles.css" type="text/css" media="screen, projection" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../../../public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../../public/css/bootstrap-datetimepicker.min.css" />
        <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../public/css/styles.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="../../../public/css/styles.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
        <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
        <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <style>
            .table-content {
                width: 1450px;
                margin: 50px auto;
                text-align: center;
            }

            td {
                width: 300px;
            }
            tr{

                width: 300px;
            }


            #dateId{

                width: 320px;
            }


            #aboutId{

                width: 500px;

            }

            #productId{

                width: 20px;
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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{\Illuminate\Support\Facades\Auth::user()->name }}<span class="caret"></span></a>
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
<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->

                    <li><a href="/resources/views/product/product.blade.php"><i class="	glyphicon glyphicon-list-alt"></i>Product</a></li>
                    <li><a href="tables.html"><i class="glyphicon glyphicon-book"></i> Category</a></li>
                    <li><a href="/resources/views/content/content.blade.php"><i class="glyphicon glyphicon-record"></i> Content</a></li>
                    <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Orders</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">

                                <div class="table-content">
                                    <table class="table table-borded table-responsive table-striped " id="table-list">
                                        <thead class="table-dark">
                                        <tr>

                                            <td id="productId">ID</td>
                                            <td>Category</td>
                                            <td>Name</td>
                                            <td>Image</td>
                                            <td id="aboutId">About</td>
                                            <td>Status</td>
                                            <td>Price</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="col-md-10">
                                                    <select class="form-control input-sm">
                                                        <option></option>
                                                        <option selected="#">Food&Drink</option>
                                                        <option>SeaFood</option>
                                                        <option>Women's Clothing</option>
                                                        <option>Men's Clothing</option>
                                                        <option>Sports</option>
                                                        <option>Shoes</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>  Name </td>
                                            <td><span><img src="https://www.seoclerk.com/pics/407226-2eWiCl1471372939.jpg" width="100" height="100" class="rounded-circle"></span></td>


                                            <td><textarea name="desc0" placeholder="Description" class="form-control"></textarea></td>
                                            <td><div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div></td>
                                            <td>300$</td>
                                        </tr>

                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="col-md-10">
                                                    <select class="form-control input-sm">
                                                        <option></option>
                                                        <option>Food&Drink</option>
                                                        <option>SeaFood</option>
                                                        <option>Women's Clothing</option>
                                                        <option>Men's Clothing</option>
                                                        <option selected="#">Sports</option>
                                                        <option>Shoes</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>  Name </td>
                                            <td><span><img src="http://best.shoppingonsale.ru/img/products/284-novyj-zhenskij-s-kapjushonom-s-dlinnym-rukavom-podoshve-sploshnoj-perednej-bolshoj-karman-shnurok-tolstovki-sluchajnye-zhenschiny.jpg" width="100" height="100" class="rounded-circle"></span></td>

                                            <td><textarea name="desc0" placeholder="Description" class="form-control"></textarea></td>
                                            <td><div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">

                                                    <label  for="customCheck2"></label>
                                                </div></td>
                                            <td>300$</td>

                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="col-md-10">
                                                    <select class="form-control input-sm">
                                                        <option></option>
                                                        <option>Food&Drink</option>
                                                        <option>SeaFood</option>
                                                        <option selected="#" >Women's Clothing</option>
                                                        <option>Men's Clothing</option>
                                                        <option>Sports</option>
                                                        <option>Shoes</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>  Name </td>
                                            <td><span><img src="http://3.imimg.com/data3/UE/QQ/MY-9769523/shirts-500x500.jpg" width="100" height="100" class="rounded-circle"></span></td>

                                            <td><textarea name="desc0" placeholder="Description" class="form-control">dasdsa</textarea></td>

                                            <td><div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3"></label>
                                                </div></td>
                                            <td>300$</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="col-md-10">
                                                    <select class="form-control input-sm">
                                                        <option></option>
                                                        <option>Food&Drink</option>
                                                        <option>SeaFood</option>
                                                        <option>Women's Clothing</option>
                                                        <option>Men's Clothing</option>
                                                        <option selected="#">Sports</option>
                                                        <option>Shoes</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>  Name </td>
                                            <td><span><img src="https://avatars.mds.yandex.net/get-marketpic/903055/market_rgaoJT1ysdguqOjWCMIwiw/orig" width="100" height="100" class="rounded-circle"></span></td>

                                            <td><textarea name="desc0" placeholder="Description" class="form-control"></textarea></td>
                                            <td><div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4"></label>
                                                </div></td>
                                            <td>300$</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <button class="btn btn-info" id="add"><span class="glyphicon glyphicon-plus-sign"></span>Add New Members</button>
                                    <span style="float:right"><button id="but_add" class="btn btn-danger">Add New Row</button></span>
                                </div>



                                <script>
                                    $(function() {

                                        $('#table-list').SetEditable({ $addButton: $('#but_add')});

                                        $('#submit_data').on('click',function() {
                                            var td = TableToCSV('table-list', ',');
                                            console.log(td);
                                            var ar_lines = td.split("\n");
                                            var each_data_value = [];
                                            for(i=0;i<ar_lines.length;i++)
                                            {
                                                each_data_value[i] = ar_lines[i].split(",");
                                            }

                                            for(i=0;i<each_data_value.length;i++)
                                            {
                                                if(each_data_value[i]>1)
                                                {
                                                    console.log(each_data_value[i][2]);
                                                    console.log(each_data_value[i].length);
                                                }

                                            }

                                        });
                                    });

                                </script>







                                <script>


                                    "use strict";
                                    //Global variables
                                    var params = null;  		//Parameters
                                    var colsEdi =null;

                                    var newColHtml = '<div class="btn-group pull-right">'+

                                        '<button id="bElim" type="button" class="btn btn-danger" onclick="rowElim(this);">' +
                                        '<span class="glyphicon glyphicon-trash" > </span>'+
                                        '</button>'+
                                        '<button id="bAcep" type="button" class="btn btn-sm btn-default" style="display:none;" onclick="rowAcep(this);">' +
                                        '<span class="glyphicon glyphicon-ok" > </span>'+
                                        '</button>'+
                                        '<button id="bCanc" type="button" class="btn btn-sm btn-default" style="display:none;" onclick="rowCancel(this);">' +
                                        '<span class="glyphicon glyphicon-remove" > </span>'+
                                        '</button>'+
                                        '</div>';
                                    var colEdicHtml = '<td name="buttons">'+newColHtml+'</td>';

                                    $.fn.SetEditable = function (options) {
                                        var defaults = {
                                            columnsEd: null,         //Index to editable columns. If null all td editables. Ex.: "1,2,3,4,5"
                                            $addButton: null,        //Jquery object of "Add" button
                                            onEdit: function() {},   //Called after edition
                                            onBeforeDelete: function() {}, //Called before deletion
                                            onDelete: function() {}, //Called after deletion
                                            onAdd: function() {}     //Called when added a new row
                                        };
                                        params = $.extend(defaults, options);
                                        this.find('thead tr').append('<td name="buttons"><span class="glyphicon glyphicon-thumbs-up"></span></td>');  //encabezado vacío
                                        this.find('tbody tr').append(colEdicHtml);
                                        var $tabedi = this;   //Read reference to the current table, to resolve "this" here.
                                        //Process "addButton" parameter
                                        if (params.$addButton != null) {
                                            //Se proporcionó parámetro
                                            params.$addButton.click(function() {
                                                rowAddNew($tabedi.attr("id"));
                                            });
                                        }
                                        //Process "columnsEd" parameter
                                        if (params.columnsEd != null) {
                                            //Extract felds
                                            colsEdi = params.columnsEd.split(',');
                                        }
                                    };
                                    function IterarCamposEdit($cols, tarea) {
//Itera por los campos editables de una fila
                                        var n = 0;
                                        $cols.each(function() {
                                            n++;
                                            if ($(this).attr('name')=='buttons') return;  //excluye columna de botones
                                            if (!EsEditable(n-1)) return;   //noe s campo editable
                                            tarea($(this));
                                        });

                                        function EsEditable(idx) {
                                            //Indica si la columna pasada está configurada para ser editable
                                            if (colsEdi==null) {  //no se definió
                                                return true;  //todas son editable
                                            } else {  //hay filtro de campos
//alert('verificando: ' + idx);
                                                for (var i = 0; i < colsEdi.length; i++) {
                                                    if (idx == colsEdi[i]) return true;
                                                }
                                                return false;  //no se encontró
                                            }
                                        }
                                    }
                                    function FijModoNormal(but) {
                                        $(but).parent().find('#bAcep').hide();
                                        $(but).parent().find('#bCanc').hide();
                                        $(but).parent().find('#bEdit').show();s
                                        $(but).parent().find('#bElim').show();
                                        var $row = $(but).parents('tr');  //accede a la fila
                                        $row.attr('id', '');  //quita marca
                                    }
                                    function FijModoEdit(but) {
                                        $(but).parent().find('#bAcep').show();
                                        $(but).parent().find('#bCanc').show();
                                        $(but).parent().find('#bEdit').hide();
                                        $(but).parent().find('#bElim').hide();
                                        var $row = $(but).parents('tr');  //accede a la fila
                                        $row.attr('id', 'editing');  //indica que está en edición
                                    }
                                    function ModoEdicion($row) {
                                        if ($row.attr('id')=='editing') {
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    }
                                    function rowAcep(but) {
//Acepta los cambios de la edición
                                        var $row = $(but).parents('tr');  //accede a la fila
                                        var $cols = $row.find('td');  //lee campos
                                        if (!ModoEdicion($row)) return;  //Ya está en edición
                                        //Está en edición. Hay que finalizar la edición
                                        IterarCamposEdit($cols, function($td) {  //itera por la columnas
                                            var cont = $td.find('input').val(); //lee contenido del input
                                            $td.html(cont);  //fija contenido y elimina controles
                                        });
                                        FijModoNormal(but);
                                        params.onEdit($row);
                                    }
                                    function rowCancel(but) {
//Rechaza los cambios de la edición
                                        var $row = $(but).parents('tr');  //accede a la fila
                                        var $cols = $row.find('td');  //lee campos
                                        if (!ModoEdicion($row)) return;  //Ya está en edición
                                        //Está en edición. Hay que finalizar la edición
                                        IterarCamposEdit($cols, function($td) {  //itera por la columnas
                                            var cont = $td.find('div').html(); //lee contenido del div
                                            $td.html(cont);  //fija contenido y elimina controles
                                        });
                                        FijModoNormal(but);
                                    }
                                    function rowEdit(but) {  //Inicia la edición de una fila
                                        var $row = $(but).parents('tr');  //accede a la fila
                                        var $cols = $row.find('td');  //lee campos
                                        if (ModoEdicion($row)) return;  //Ya está en edición
                                        //Pone en modo de edición
                                        IterarCamposEdit($cols, function($td) {  //itera por la columnas
                                            var cont = $td.html(); //lee contenido
                                            var div = '<div style="display: none;">' + cont + '</div>';  //guarda contenido
                                            var input = '<input class="form-control input-sm"  value="' + cont + '">';
                                            $td.html(div + input);  //fija contenido
                                        });
                                        FijModoEdit(but);
                                    }
                                    function rowElim(but) {  //Elimina la fila actual
                                        var $row = $(but).parents('tr');  //accede a la fila
                                        params.onBeforeDelete($row);
                                        $row.remove();
                                        params.onDelete();
                                    }
                                    function rowAddNew(tabId) {  //Agrega fila a la tabla indicada.
                                        var $tab_en_edic = $("#" + tabId);  //Table to edit
                                        var $filas = $tab_en_edic.find('tbody tr');
                                        if ($filas.length==0) {
                                            //No hay filas de datos. Hay que crearlas completas
                                            var $row = $tab_en_edic.find('thead tr');  //encabezado
                                            var $cols = $row.find('th');  //lee campos
                                            //construye html
                                            var htmlDat = '';
                                            $cols.each(function() {
                                                if ($(this).attr('name')=='buttons') {
                                                    //Es columna de botones
                                                    htmlDat = htmlDat + colEdicHtml;  //agrega botones
                                                } else {
                                                    htmlDat = htmlDat + '<td></td>';
                                                }
                                            });
                                            $tab_en_edic.find('tbody').append('<tr>'+htmlDat+'</tr>');
                                        } else {
                                            //Hay otras filas, podemos clonar la última fila, para copiar los botones
                                            var $ultFila = $tab_en_edic.find('tr:last');
                                            $ultFila.clone().appendTo($ultFila.parent());
                                            $ultFila = $tab_en_edic.find('tr:last');
                                            var $cols = $ultFila.find('td');  //lee campos
                                            $cols.each(function() {
                                                if ($(this).attr('name')=='buttons') {
                                                    //Es columna de botones
                                                } else {
                                                    $(this).html('');  //limpia contenido
                                                }
                                            });
                                        }
                                        params.onAdd();
                                    }
                                    function TableToCSV(tabId, separator) {  //Convierte tabla a CSV
                                        var datFil = '';
                                        var tmp = '';
                                        var $tab_en_edic = $("#" + tabId);  //Table source
                                        $tab_en_edic.find('tbody tr').each(function() {
                                            //Termina la edición si es que existe
                                            if (ModoEdicion($(this))) {
                                                $(this).find('#bAcep').click();  //acepta edición
                                            }
                                            var $cols = $(this).find('td');  //lee campos
                                            datFil = '';
                                            $cols.each(function() {
                                                if ($(this).attr('name')=='buttons') {
                                                    //Es columna de botones
                                                } else {
                                                    datFil = datFil + $(this).html() + separator;
                                                }
                                            });
                                            if (datFil!='') {
                                                datFil = datFil.substr(0, datFil.length-separator.length);
                                            }
                                            tmp = tmp + datFil + '\n';
                                        });
                                        return tmp;
                                    }

                                    //apply
                                    $("#table-list").SetEditable({
                                        $addButton: $('#add')
                                    });
                                </script>

                                <script src="../../../public/js/jquery-3.2.1.min.js"></script>
                                <script src="../../../public/js/moment-with-locales.min.js"></script>
                                <script src="../../../public/js/bootstrap.min.js"></script>
                                <script src="../../../public/js/bootstrap-datetimepicker.min.js"></script>
                                <script type="text/javascript">

                                    $(function () {
                                        $('#datetimepicker1').datetimepicker({
                                            locale: 'ru',
                                            stepping:10,
                                            format: 'DD.MM.YYYY',
                                            defaultDate: moment('03.03.2019').format('DD.MM.YYYY'),
                                            daysOfWeekDisabled:[0,6]
                                        });
                                        $('#datetimepicker2').datetimepicker({
                                            locale: 'ru'
                                        });
                                    });
                                </script>




                </div>
            </div>

        </div>
    </div>




</body>
</html>

