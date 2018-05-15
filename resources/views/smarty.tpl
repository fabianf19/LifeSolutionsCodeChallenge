<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.2.1/dt-1.10.16/b-1.5.1/datatables.min.css"/>
 
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.2.1/dt-1.10.16/b-1.5.1/datatables.min.js"></script>


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

            p{
                margin-bottom: 0px;
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

            .number-notes{
                position: relative;
            }

            .number-notes .content{
                display: none;
            }
            .number-notes:hover .content{
                display: block;
                position: absolute;
                top: 0px;
                right: 0px;    
                background-color: royalblue;
                z-index: 1000;
                padding: 10px;
                display: flex;
                flex-direction: column;
                align-items: flex-start;            
            }

            .my-modal{
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                background-color: rgba(0,0,0,0.2); 
                z-index : 200000;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .my-modal .modal-content{
                max-width: 400px;
                height: 400px;
                padding: 30px;
                display: flex;
                flex-direction: column;
            }

            .my-modal.hidden{
                display: none;
            }

            .my-modal .modal-content h3{
                margin-bottom: auto;
            }

            .my-modal .modal-content input{
                margin-bottom: 20px;
            }

            .note-li{
                display: flex;
                align-items: center;
            }

            .del-note{
                padding: 5px;
                cursor: pointer;
                margin-left: 30px;
                color: white;
                background-color: #dc3545;
                border-radius: 6px;
            }

            .del-note:hover{
                opacity: 0.7;
            }

        </style>
        <script type="text/javascript">

            window.table = null;
            const SERVER_URL = 'http://127.0.0.1:8000';

            function render_tooltip(notes){
                let content = '';

                let ul = $("<ul>");

                for (var i = notes.length - 1; i >= 0; i--) {
                    let note = notes[i];
                    let p = $("<p>").text(note['notes']);
                    let del_note = $("<div>").attr("class","del-note").text("Delete Note").attr("onclick","delete_note(" + note['id'] + ")");

                    let li = $("<li>").attr("class","note-li");
                    $(li).append(p);
                    $(li).append(del_note);

                    console.log(li);

                    $(ul).append(li);
                }

                content = '<ul class="content">' + $(ul).html() + '</ul>';

                console.log(content);

                let btn = '<button type="button" class="btn btn-secondary number-notes" data-toggle="tooltip" data-placement="top" title="Tooltip on top">' + notes.length + content + ' notes</button>'
                return btn
            }

            function show_modal(contact_id){
                $("#modal-create-note").toggleClass('hidden');

                window.contact_id = contact_id;
            }

            function delete_note(note_id){
                $.ajax({
                    url : SERVER_URL + '/api/notes/' + note_id,
                    method : 'DELETE',
                    success : (response) => {
                        alert("Note Deleted! Refreshing table...");
                        window.table.ajax.reload();
                    }
                })
            }

            $(document).ready(() => {
                window.table = $('#example').DataTable( {
                    "ajax": SERVER_URL + "/api/contacts",
                    "columns": [
                        { "data": "name" },
                        { "data": "id" },
                        { "data": "created_at" },
                        { "data": "updated_at" },
                    ],
                    "columnDefs": [ {
                        "targets": 4,
                        "data": "notes",
                        render: function ( data, type, row, meta ) {
                            console.log(data);
                            return render_tooltip(data);
                        }
                      },
                      {
                        "targets": 5,
                        "data": "id",
                        render: function ( data, type, row, meta ) {
                            console.log(data);
                            return '<button type="button" class="btn btn-success" onclick="show_modal(' + data + ')">Add Note</button>'
                        }
                      }
                       ]
                } );

                $("#add-note").click(() => {
                    let note_txt = $("#note-txt").val();
                    if (note_txt != ''){
                        $.ajax({
                            url : SERVER_URL + '/api/contacts/' + window.contact_id + '/notes',
                            headers : {
                                'Content-Type' : 'application/json'
                            },
                            method : 'POST',
                            data : JSON.stringify({
                                notes : note_txt
                            }),
                            success : (response) => {
                                alert("Note Created! Refreshing table...");
                                window.table.ajax.reload();
                                $("#modal-create-note").toggleClass('hidden');
                                $("#note-txt").val('');
                            }
                        })
                    }else{
                        alert("The note must not be empty");
                    }
                });

                $("#modal-create-note").click((e) => {
                    if (e.target.id == 'modal-create-note'){
                        $("#modal-create-note").toggleClass('hidden');
                    }
                });
            })
        </script>
    </head>

    <body>
        <div class="jumbotron">
            <div class="container">
                <h1>LifeSoulutions CodeChallenge</h1>
            </div>
        </div>
        <div class="container">
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact Id</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Notes</th>
                    <th>Add Note</th>
                </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Contact Id</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Notes</th>
                        <th>Add Note</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="my-modal hidden" id="modal-create-note"> 
            <div class="modal-content">
                <h3>Add Note</h3>
                <input type="text" name="note" id="note-txt" placeholder="Note text"/>
                <button type="button" class="btn btn-success" id="add-note">Add Note</button>
            </div>
        </div>
    </body>
</html>
