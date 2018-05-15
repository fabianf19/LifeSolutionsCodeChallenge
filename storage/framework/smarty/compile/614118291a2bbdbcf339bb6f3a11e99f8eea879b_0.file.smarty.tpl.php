<?php
/* Smarty version 3.1.32, created on 2018-05-15 00:19:57
  from '/Users/FelipeOtalora/Documents/Mis-Proyectos/Proyectos/LifeSolutions/recruiting/resources/views/smarty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5afa27adde6750_38487163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '614118291a2bbdbcf339bb6f3a11e99f8eea879b' => 
    array (
      0 => '/Users/FelipeOtalora/Documents/Mis-Proyectos/Proyectos/LifeSolutions/recruiting/resources/views/smarty.tpl',
      1 => 1526343595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afa27adde6750_38487163 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.2.1/dt-1.10.16/b-1.5.1/datatables.min.css"/>
 
        <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.2.1/dt-1.10.16/b-1.5.1/datatables.min.js"><?php echo '</script'; ?>
>


        <title>LifeSoulutions CodeChallenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(() => {
                $('#example').DataTable( {
                    "ajax": "http://127.0.0.1:8000/api/contacts",
                    "columns": [
                        { "data": "name" },
                        { "data": "id" }
                    ]
                } );
            })
        <?php echo '</script'; ?>
>
    </head>

    <body>
        <div class="jumbotron">
            <h1>LifeSoulutions CodeChallenge</h1>
        </div>
        <div class="container">
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact Id</th>
                </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Contact Id</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>
<?php }
}
