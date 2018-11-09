<?php $this->layout='acceuil';?>
<?php $this->start('script')?>
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
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false,
                    className: 'info'
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    className: 'important'
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    className: 'important'
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false,
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/',
                    className: 'success'
                }*/
            ],          
        });
        
        
    });
</script>
<?php $this->end()?>
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
                        <h1><a href="index.html"> <img src="/cabinet/img/souka1.jpg" class="img-rounded" alt="Cinque Terre" width="30" height="30"> <?=$data['prenom']?>  <span><?=$data['nom']?> </span></a></h1>
                            <nav role="navigation">
                                    <ul>
                                        <li><a href="#" class="active" onclick="agenda()">Agenda </a></li>
                                        <li><a href="#" onclick="profile()">Mon profile </a></li>
                                        <li ><a href="#" onclick="dossier()">Mon dossier </a></li>
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

<div id="profile" style="display: none;">
    <!-- <section style="padding-top:20px ">
    <hr><br>
    <div class="container bootstrap snippet">
    
    <div class="row">
        <div class="col-sm-3">
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Ajouter une autre image ...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div>
    </hr><br>     
        </div>
        <div class="col-sm-9">           
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                    <?= $this->Form->create(null,['url'=>['controller'=>'users','action'=>'add'],'class'=>'form','id'=>'registrationForm']) ?>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Prénom :</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="<?=$data['prenom']?> " title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Nom :</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?=$data['nom']?>" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Fax : </h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="<?=$data['tel']?>  " title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Télephone:</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="<?=$data['tel']?>" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="<?=$data['mail']?>" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Adresse :</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="<?=$data['adresse']?>" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Mot de passe :</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe 1 " title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verifier </h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="Mot de passe 2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-info" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Enregistrer</button>           
                            </div>
                      </div>
                </form>
              
              <hr>
          </div>

        </div>
    </div>
                                                    
    </div>
    </section> -->
  <div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row" >
      
          
         <div class="col-md-7">

  <div class="panel panel-default" style="box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
    <div class="panel-heading">  

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">modifier</button>
    </div>
     <div class="panel-body">
         
      <div class="box box-info">
          
              <div class="box-body">
                       <div class="col-sm-6">
                       <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                  
                  <input id="profile-image-upload" class="hidden" type="file">
      <div style="color:#999;" >click here to change profile image</div>
                  <!--Upload Image Js And Css-->
             
                
     
                  
                  
                       
                       
                       </div>
                
                <br>
      
                <!-- /input-group -->
              </div>
              <div class="col-sm-6">
              <h4 style="color:#00b1b1;"><?=$data['nom']?> <?=$data['prenom']?></h4></span>
                <span><p>Aspirant</p></span>            
              </div>
              <div class="clearfix"></div>
              <hr style="margin:5px 0 5px 0;">
      
                
    <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?=$data['nom']?></div>
         <div class="clearfix"></div>
    <div class="bot-border"></div>

      <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"> <?=$data['prenom']?></div>
      <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Date Of Joining:</div><div class="col-sm-7"><?=$data['created']?></div>

      <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7">11 Jun 1998</div>

      <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Place Of Birth:</div><div class="col-sm-7">Shirdi</div>

     <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Nationality:</div><div class="col-sm-7">Indian</div>

     <div class="clearfix"></div>
    <div class="bot-border"></div>

    <div class="col-sm-5 col-xs-6 tital " >Relition:</div><div class="col-sm-7">Hindu</div>


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
    width: 80%; /* Could be more or less, depending on screen size */
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
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
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