
<!--
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Medecin'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        </ul>
    </nav>
    <div class="medecins index large-9 medium-8 columns content">
        <h3><?= __('Medecins') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medecins as $medecin): ?>
                <tr>
                    <td><?= $this->Number->format($medecin->id) ?></td>
                    <td><?= h($medecin->nom) ?></td>
                    <td><?= h($medecin->prenom) ?></td>
                    <td><?= h($medecin->photo) ?></td>
                    <td><?= $medecin->has('user') ? $this->Html->link($medecin->user->id, ['controller' => 'Users', 'action' => 'view', $medecin->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $medecin->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medecin->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medecin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medecin->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div> 
-->


<?php $this->assign('title','Cabinet medicale');?>
<?php $this->start('meta');?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $this->end();?>
<?php $this->start('css');?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href='fullcalendar.css' rel='stylesheet' />
    <link href='fullcalendar.print.css' rel='stylesheet' media='print' />
    <style>
    .like {
        margin-top: 40px;
        text-align: center;
        font-size: 14px;
        font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
        background-color: #DDDDDD;
        }
    #wrap {
        padding: 20px;
        width: 1100px;
        margin: 0 auto;
        }   
    #external-events {
        float: left;
        width: 150px;
        padding: 0 10px;
        text-align: left;
        }   
    #external-events h4 {
        font-size: 16px;
        margin-top: 0;
        padding-top: 1em;
        }   
    .external-event { /* try to mimick the look of a real event */
        margin: 10px 0;
        padding: 2px 4px;
        background: #3366CC;
        color: #fff;
        font-size: .85em;
        cursor: pointer;
        }   
    #external-events p {
        margin: 1.5em 0;
        font-size: 11px;
        color: #666;
        }   
    #external-events p input {
        margin: 0;
        vertical-align: middle;
        }
    #calendar {
/*      float: right; */
        margin: 0 auto;
        width: 900px;
        background-color: #FFFFFF;
          border-radius: 6px;
        box-shadow: 0 1px 2px #C3C3C3;
        }

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
<?php $this->end();?>
<?php $this->start('script');?>
    <script src='jquery/jquery-1.10.2.js'></script>
    <script src='jquery/jquery-ui.custom.min.js'></script>
    <script src='fullcalendar.js' id="tabl"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>  
    <script>

    $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        $('#external-events div.external-event').each(function() {
            var eventObject = {
                title: $.trim($(this).text()) 
            };
            $(this).data
            ble({
                zIndex: 999,
                revert: true,   
                revertDuration: 0  
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
            firstDay: 1, 
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
        }); 
    });
</script>
<?php $this->end();?>


<div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
           <div class="square"></div>
          <h1>Docteur</h1>
        </header>
        <div class="profile-photo-container">
          <img src="/cabinet/img/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
          
        </div>      
        
        
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href=""><i class="fa fa-home fa-fw"></i>Mes RDVs</a></li>

            <li><a href="#"><i class="fa fa-bar-chart fa-fw"></i>Les recettes</a></li>
            
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Se déconnecter</a></li>
          </ul>  
        </nav>
      </div>



 <div class="col-1 ">
          
        <div class="templatemo-top-nav-container" style="height: 62px;background-color:#1f2124;padding-top:20px; ">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                
                <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Ordonnance</a></li>
                <li><a href="#"" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Documents des patients</a></li>
                <li><a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">La base vital</a></li>
              </ul>  
            </nav> 
          </div>
        </div>



   
  
  <!-- Modal 1 -->

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rechercher l'dentifiant du patient</h4>
        </div>
        <div class="modal-body">
           <div class="form-group">
          <label for="usr">ID patient:</label>
          <input type="text" class="form-control" id="usr">
          </div>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Rechercher</button>
        </div>
      </div>
    </div>
  </div>



        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Visite</h4>
        </div>
   <div class="modal-body">
          
    <form action="">
    <div class="form-group">
      <label for="id-patient">ID patient:</label>
      <input type="" class="form-control" id="id-patient"  name="id-patient">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="ordonnance">Ordonnance:</label>
      <textarea class="form-control" rows="5" id="ordonnance"></textarea>
    </div>
    <div class="form-group">
      <label for="analyse">Analyse:</label>
      <textarea class="form-control" rows="5" id="analyse"></textarea>
    </div>
    <div class="form-group">
      <label for="remarque">Remarque:</label>
      <textarea class="form-control" rows="5" id="remarque"></textarea>
    </div>

    </form>
  </div>

    <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Enregistrer</button>
    </div>
  
</div>
</div>
</div>



    <div class="templatemo-content-container">         
          <div class="like">
               <div id='wrap'>

                    <div id='calendar'></div>

                    <div style='clear:both'></div>
                </div>
           </div>
    </div>


    <footer class="text-right">
            <p>Copyright  
            | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
     </footer>         

 </div>
</div>

<div id="id01" class="modal" >
  
  <div class="templatemo-content-container" style="width: 700px;margin-left: 400px;position: absolute; z-index: 999;">  

        <div class="templatemo-content-widget white-bg">

                    <h4 class="modal-title">Visite</h4>
                    <div class="modal-body">
          
                            <form action="">
                            <div class="form-group">
                              <label for="id-patient">ID patient:</label>
                              <input type="" class="form-control" id="id-patient"  name="id-patient">
                            </div>
                            <div class="form-group">
                              <label for="date">Date:</label>
                              <input type="date" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group">
                              <label for="ordonnance">Ordonnance:</label>
                              <textarea class="form-control" rows="5" id="ordonnance"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="analyse">Analyse:</label>
                              <textarea class="form-control" rows="5" id="analyse"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="remarque">Remarque:</label>
                              <textarea class="form-control" rows="5" id="remarque"></textarea>
                            </div>

                            </form>
                    </div>

                    <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-dismiss="modal">Enregistrer</button>
                   </div>

        </div>  
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