<script>
    function doDate()
    {
        var now = new Date();
        if( true ) {
            document.location.href="/cabinet/users/sendmail";
        }
    }
</script>
<?php $this->layout='acceuil';?>
<?php $this->start('script')?>
<?php  ?>
<script>

    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        /*  className colors

        className: default(transparent), important(red), chill(pink), success(green), info(blue)

        */


        /* initialize the external events
        -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });


        /* initialize the calendar
        -----------------------------------------------------------------*/

        var calendar =  $('#calendar').fullCalendar({
            header: {
                left: 'title',
                center: 'agendaDay,agendaWeek,month',
                right: 'prev,next today'
            },
            editable: true,
            firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
            selectable: true,
            defaultView: 'month',

            axisFormat: 'h:mm',
            columnFormat: {
                month: 'ddd',    // Mon
                week: 'ddd d', // Mon 7
                day: 'dddd M/d',  // Monday 9/7
                agendaDay: 'dddd d'
            },
            titleFormat: {
                month: 'MMMM yyyy', // September 2009
                week: "MMMM yyyy", // September 2009
                day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
            },
            allDaySlot: false,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                        true // make the event "stick"
                    );
                }
                calendar.fullCalendar('unselect');
            },
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            },

            events: [


                /*{
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false,
                    className: 'info'
                },
                */
            ],
        });


    });
</script>
<?php $this->end()?>
<style type="text/css">
  body{
    background-color: #D8D8D8;
  }
</style>
<script>
    function agenda(){
        document.getElementById("agenda").style.display = "block";
        document.getElementById("profile").style.display = "none";
        document.getElementById("dossier").style.display = "none";
    }
    function profile(){
        document.getElementById("agenda").style.display = "none";
        document.getElementById("profile").style.display = "block";
        document.getElementById("dossier").style.display = "none";
    }
    function dossier(){
        document.getElementById("agenda").style.display = "none";
        document.getElementById("profile").style.display = "none";
        document.getElementById("dossier").style.display = "block";
    }
</script>
    <header id="fh5co-header" role="banner" style="display: block;">

        <div class="container">
            <div class="row">
                    <div class="header-inner">
                        <h1><a href="#"> <img src="<?= $data['photo'] ?>" class="img-rounded" alt="Cinque Terre" width="40" height="45"> <?=$data['prenom']?>  <span><?=$data['nom']?> </span></a></h1>
                            <nav role="navigation">
                                    <ul>
                                        <li><a href="#" class="active" onclick="agenda()">Agenda </a></li>
                                        <li><a href="#" onclick="profile()">Mon profile </a></li>
                                        <li ><a href="#" onclick="dossier()">Mon dossier </a></li>
                                        <li ><a href="#" onclick="doDate()">essaie email</a></li>
                                        <li class="cta"><?= $this->Html->link('log out',['action'=>'index']) ?></li>
                                        <li><a href="#"> </a></li>
                                    </ul>
                            </nav>
                    </div>
            </div>
        </div>
    </header>
<div id="agenda" style="display: block;">
  <br>
    <div id='wrap'>
        <div id='calendar'></div>
        <div style='clear:both'></div>
    </div>
</div>
<div id="dossier" style="display: none;">
  <br>
    <section style="padding-top: 100px" class="container">
    <table class="table">
        <thead >
          <tr class="table-primary">
            <th style="text-align: center;">Date de visite </th>
            <th style="text-align: center;">Ordonance</th>
            <th style="text-align: center;">Analyse </th>
            <th style="text-align: center;">Remarques </th>
          </tr>
        </thead>
        <tbody>
        <tr >
            <td>20/05/1994</td>
            <td>5 midico 54 5 midico 94 <br> <button type="button" class="btn btn-info" style="width: 150Px">Imprimer </button> </td>
            <td><p>alpha 54</p> <button type="button" class="btn btn-info" style="width: 150Px">Imprimer </button></td>
            <td>Mola7ada</td>
        </tr>
        </tbody>
      </table>
    </section>
</div>
<div id="profile" style="display: none;">
    
  <div class="container" style="margin:0 25%">
    <br>
    <br>
    <br>
    <br>
    <div class="row" >


         <div class="col-md-7">

  <div class="panel panel-default" style="box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
    <div class="panel-heading">

<button onclick="document.getElementById('id01').style.display='block'" style="width:40%" class="btn btn-success">Modifier</button>
    </div>
     <div class="panel-body">

      <div class="box box-info">

              <div class="box-body">
                       <div class="col-sm-6">
                       <div  aligne="center"> <img alt="User Pic" src="<?= $data['photo'] ?>" id="profile-image1" class="img-circle img-responsive">

                       </div>

                <br>
                <!-- /input-group -->
              </div>
              <div class="col-sm-6">
              <h4 style="color:#00b1b1;"><?=$data['nom']?> <?=$data['prenom']?></h4></span>
                <span><p><?=$this->request->session()->read('Auth.User.type')?></p></span>
              </div>
              <div class="clearfix"></div>
              <hr style="margin:5px 0 5px 0;">


    <div class="col-sm-5 col-xs-6 tital " >Nom :</div><div class="col-sm-7 col-xs-6 "><?=$data['nom']?></div>
         <div class="clearfix"></div>
    <div class="bot-border"></div>

      <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Prénom :</div><div class="col-sm-7"> <?=$data['prenom']?></div>
      <div class="clearfix"></div>
    <div class="bot-border"></div>


    <div class="col-sm-5 col-xs-6 tital " >Télephone :</div><div class="col-sm-7"><?=$data['tel']?></div>

      <div class="clearfix"></div>
    <div class="bot-border"></div>

  <div class="col-sm-5 col-xs-6 tital " >Adresse :</div><div class="col-sm-7"><?=$data['adresse']?></div>


  <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?=$this->request->session()->read('Auth.User.mail')?></div>


     <div class="clearfix"></div>
    <div class="bot-border"></div>




                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>


        </div>
        </div>
  </div>
      <script>
                $(function() {
      $('#profile-image1').on('click', function() {
          $('#profile-image-upload').click();
      });
  });
                </script>

     </div>
  </div>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<div id="id01" class="modal">
  <div class="modal-content animate" action="/action_page.php">
      <section >
                         <div class="container bootstrap snippet">

                             <div class="row">
                                <?= $this->Form->create(null, ['type'=>'file','url'=>['action'=>'edit'],'class'=>'form','class'=>'col-sm-8','id'=>'registrationForm']) ?>
                               <div class="col-sm-4" style="margin:0 15%"><!--left col-->
                                   <div class="text-center">
                                      <img src="<?= $data['photo'] ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                                      <h6>Ajouter une autre image ...</h6>
                                      <?php echo $this->Form->control('photo',['type'=>'file','label'=>false,'class'=>'text-center center-block file-upload','placeholder'=>'choisir un fichier','value'=>$data['photo']]); ?>
                                  </div>
                                </div>

                             </div>
                            <div class="row">
                                <div class="col-sm-8">
                                      <div class="t">
                                         <div class="tab-pane active" id="home">
                                     <hr>
                                  <div class="form-group">

                                      <div style="margin-top:1%" class="col-xs-6">
                                          <?php echo $this->Form->control('prenom',['type'=>'text','label'=>false,'class'=>'form-control','value'=>$data['prenom'],'title'=>'enter your first name if any.','name'=>'prenom','id'=>'first_name']); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">

                                      <div style="margin-top:1%"  class="col-xs-6">
                                          <?php echo $this->Form->control('nom',['type'=>'text','label'=>false,'class'=>'form-control','value'=>$data['nom'],'title'=>'enter your last name if any.','name'=>'nom','id'=>'last_name']); ?>
                                      </div>
                                  </div>



                                  <div class="form-group">
                                      <div style="margin-top:1%"  class="col-xs-6">
                                          <?php echo $this->Form->control('tel',['type'=>'text','label'=>false,'class'=>'form-control','value'=>$data['tel'],'title'=>'enter your mobile number if any.','name'=>'tel','id'=>'mobile']); ?>
                                          
                                      </div>
                                  </div>
                                  <div class="form-group">

                                      <div style="margin-top:1%"  class="col-xs-6">
                                          <?php echo $this->Form->control('fax',['type'=>'text','label'=>false,'class'=>'form-control','value'=>$data['tel'],'title'=>'enter your fax.','name'=>'fax','id'=>'fax']); ?>
                                          
                                      </div>
                                  </div>
                                  <div  class="form-group">

                                      <div style="margin-top:1%" class="col-xs-12">
                                          <?php echo $this->Form->control('mail',['type'=>'email','label'=>false,'class'=>'form-control','value'=>$this->request->session()->read('Auth.User.mail'),'title'=>'enter your email.','name'=>'mail','id'=>'mail']); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">

                                      <div style="margin-top:1%" class="col-xs-6">

                                          <?php echo $this->Form->control('password',['type'=>'password','label'=>'ancien mdp','class'=>'form-control','title'=>'enter your password.','name'=>'password','id'=>'password']); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">

                                      <div  style="margin-top:1%" class="col-xs-6">

                                          
                                           <?php echo $this->Form->input('password_nv',['type'=>'password','label'=>'new mdp','class'=>'form-control','title'=>'enter your password.','name'=>'password','id'=>'password']); ?>
                                      </div>
                                  </div>
                                  <div class="form-group">
                              <?php echo $this->Form->control('users_id', ['value' => $data['users_id'],'type'=>'Hidden','label'=>false]); ?>
                              <?php echo $this->Form->control('id', ['value' => $data['id'],'type'=>'Hidden','label'=>false]); ?>

                                     <div  style="margin-top:1%" class="col-xs-6">
                                              
                                              <?= $this->Form->button(__('Submit'),['type'=>'submit','class'=>'btn btn-lg btn-info']) ?>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                      <div  style="margin-top:1%" class="col-xs-6">
                                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-lg btn-danger" >Cancel</button>
                                     </div>

                                  </div>

                            <?php ?><?= $this->Form->end() ?>

                          <hr>
                      </div><!--/tab-content-->

                    </div><!--/col-9-->
                </div><!--/row-->


</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

</div>


