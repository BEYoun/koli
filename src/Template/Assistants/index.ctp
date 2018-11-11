<?php $this->layout='acceuil_assistante';?>
<!-- 
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Assistant'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        </ul>
    </nav>
    <div class="assistants index large-9 medium-8 columns content">
        <h3><?= __('Assistants') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assistants as $assistant): ?>
                <tr>
                    <td><?= $this->Number->format($assistant->id) ?></td>
                    <td><?= h($assistant->nom) ?></td>
                    <td><?= h($assistant->prenom) ?></td>
                    <td><?= $this->Number->format($assistant->tel) ?></td>
                    <td><?= $assistant->has('user') ? $this->Html->link($assistant->user->id, ['controller' => 'Users', 'action' => 'view', $assistant->user->id]) : '' ?></td>
                    <td><?= h($assistant->photo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $assistant->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assistant->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assistant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assistant->id)]) ?>
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

<?php $this->start('meta')?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta name="description" content="">
    <meta name="author" content="templatemo">
<?php $this->end()?>
<?php $this->start('css')?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>

        <link href="/cabinet/css/font-awesome.min.css" rel="stylesheet">
        <link href="/cabinet/css/bootstrap.min.css" rel="stylesheet">
        <link href="/cabinet/css/templatemo-style.css" rel="stylesheet">
        <link href='/cabinet/fullcalendar.css' rel='stylesheet' />
        <link href='/cabinet/fullcalendar.print.css' rel='stylesheet' media='print' />


                    <style>

                    .la {
                        
                        margin-top: 40px;
                        text-align: center;
                        font-size: 14px;
                        font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
                        background-color: white;
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
                          border-radius: 8px;
                        box-shadow: 10px 20px 20px #C3C3C3;
                        }
                        .templatemo-content-container{
                            background-color: #FFFFFF
                        }


                    </style>
                    <style>
                    /*css test*/

                    .contact-form{
                        background: #fff;
                        margin-top: 1%;
                        margin-bottom: 1%;
                        width: 70%;
                    }
                    .contact-form .form-control{
                        border-radius:1rem;
                    }
                    .contact-image{
                        text-align: center;
                    }
                    .contact-image img{
                        border-radius: 6rem;
                        width: 11%;
                        margin-top: -3%;
                        transform: rotate(29deg);
                    }
                    .contact-form form{
                        padding: 14%;
                    }
                    .contact-form form .row{
                        margin-bottom: -7%;
                    }
                    .contact-form h1{
                        margin-bottom: 8%;
                        margin-top: -10%;
                        text-align: center;
                        color: #0062cc;
                    }
                    .contact-form .btnContact {
                        width: 50%;
                        border: none;
                        border-radius: 1rem;
                        padding: 3.5%;
                        background: #0062cc;
                        font-weight: 600;
                        color: #fff;
                        cursor: pointer;
                        clear:right;
                    }
                    .btnContactSubmit
                    {
                        width: 50%;
                        border-radius: 1rem;
                        padding: 1.5%;
                        color: #fff;
                        background-color: #0062cc;
                        border: none;
                        cursor: pointer;
                    }
                            
                        </style>
                        <style>
                    /*css test*/

                .contact-form{
                    background: #fff;
                    margin-top: 1%;
                    margin-bottom: 1%;
                    width: 70%;
                }
                .contact-form .form-control{
                    border-radius:1rem;
                }
                .contact-image{
                    text-align: center;
                }
                .contact-image img{
                    border-radius: 6rem;
                    width: 11%;
                    margin-top: -3%;
                    transform: rotate(29deg);
                }
                .contact-form form{
                    padding: 14%;
                }
                .contact-form form .row{
                    margin-bottom: -7%
                    
                }
                .contact-form h1{
                    margin-bottom: 8%;
                    margin-top: -10%;
                    text-align: center;
                    color: #0062cc;
                }
                .contact-form .btnContact {
                    width: 50%;
                    border: none;
                    border-radius: 1rem;
                    padding: 3.5%;
                    background: #0062cc;
                    font-weight: 600;
                    color: #fff;
                    cursor: pointer;
                    clear:right;
                }
                .btnContactSubmit
                {
                    width: 50%;
                    border-radius: 1rem;
                    padding: 1.5%;
                    color: #fff;
                    background-color: #0062cc;
                    border: none;
                    cursor: pointer;
                }
                .templatemo-content-container{
                            background-color: #FFFFFF;
                            padding:  10px 60px 1px 60px;
                            

                        }
                    </style>
<?php $this->end()?>
<?php $this->start('script')?>
    <script src='/cabinet/jquery/jquery-1.10.2.js'></script>
    <script src='/cabinet/jquery/jquery-ui.custom.min.js'></script>
    <script src='/cabinet/fullcalendar.js'></script>



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
            
            /*events: [
                {
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
                }
            ],  */      
        });
        
        
    });

    </script>
    <script>
    function RDV(){
        document.getElementById("RDV").style.display = "block";  
        document.getElementById("paiment").style.display = "none";  
        document.getElementById("dossier").style.display = "none";  
    }
    function paiment(){
        document.getElementById("RDV").style.display = "none";  
        document.getElementById("paiment").style.display = "block";  
        document.getElementById("dossier").style.display = "none";
    }
    function dossier(){
        document.getElementById("RDV").style.display = "none";  
        document.getElementById("paiment").style.display = "none";  
        document.getElementById("dossier").style.display = "block";
    }
    </script>
<?php $this->end()?>
<div id="all">
    <div class="templatemo-flex-row">
        <div class="templatemo-sidebar">
            <header class="templatemo-site-header">
                <h1>L'assistante</h1>
            </header>
            <div class="profile-photo-container">
                <img src="/cabinet/img/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
              
            </div>      
            
            
            <div class="mobile-menu-icon">
                <i class="fa fa-bars"></i>
                </div>
            <nav class="templatemo-left-nav">          
                <ul>
                    <li><a href="#"class="active" onclick="RDV()"><i class="fa fa-calendar-alt"></i>Les RDVS</a></li>
                    <li><a href="#" onclick="dossier()"><i class="fa fa-credit-card"></i>Dossiers des patients</a></li>
                    <li><a href="#" onclick="paiment()"><i class="fa fa-database fa-fw"></i>Les recettes</a></li>
                    <li><a href="#"><i class="fa fa-eject fa-fw"></i><?= $this->Html->link('Se Deconecter',['controller'=>'users','action'=>'logout']) ?></a></li>
                </ul>  
            </nav>
        </div>
          
        <div class="col-1 ">
            <div class="templatemo-top-nav-container" style="background-color:#1f2124 ">
                <div class="row">
                    <nav class="templatemo-top-nav col-lg-12 col-md-12">
                    <ul class="text-uppercase">
                        <li><a href="" class="active">  </a></li>
                        <li><a href="">  </a></li>
                        <li><a href="">  </a></li>
                        <li><a href="">  </a></li>
                    </ul>  
                    </nav> 
                </div>
            </div>
            
                
 
            <div id="RDV" style="display: block">
                <div class="templatemo-content-container">         
                    <div class="la">
                        <div id='wrap'>
                            <div id='calendar'></div>

                            <div style='clear:both' ></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="paiment" style="display: none">
                <div class="templatemo-content-container" >         
                    <div class="templatemo-content-widget white-bg" style="box-shadow:10px 20px 20px #C3C3C3">
                        <div class="container contact-form" >
                            <div class="contact-image">
                                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
                            </div>
                                <form method="post" >
                                    <h1>Paiement des patients</h1>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputPrenom">Nom</label>
                                                <input type="text" class="form-control" id="inputNom" placeholder="Nom"  />
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPrenom">Prenom</label>
                                                <input type="text" class="form-control" id="inputPrenom"  placeholder="Prenom" />
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPrenom">CIN</label>
                                                <input type="text" class="form-control" id="inputCIN" placeholder="CIN" />
                                            </div>
                                            <div class="form-group">
                                                <label for="inputDate">Date</label>
                                                <input type="date" class="form-control" id="inputDate">
                                            </div>
                                            <div class="dropdown form-group">
                                                <button class="btn btn-basic dropdown-toggle" type="button" data-toggle="dropdown" style="color: black">Montant
                                                <span class="caret"></span></button>
                                                 <ul class="dropdown-menu">
                                                 <li><a href="#">espèce</a></li>
                                                 <li><a href="#">chèque</a></li>
                                                 </ul>
                                            </div>
                                    
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="btnSubmit" class="btnContact" value="Enregistrer" />
                                        </div>
                                    </div>
                                </form>        
                    
                        </div>
            
                    </div>


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

                <footer class="text-right">
                    <p>Copyright &copy; 2084 Company Name 
                    | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
                </footer>         
        </div>
    </div>
</div>




