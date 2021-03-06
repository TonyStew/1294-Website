<div class="body-container body-container live-stream-container hidden-print">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 id="live-stream-title">Watch our event LIVE here!</h2>
                <p class="lead">We will be live streaming from the <a class="event-link" href="http://www.thebluealliance.com/event/2016wamou">PNW Mount Vernon District Event</a> on <br>
                <span class="event-times">March 18th until March 20th</span>
                </p>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-1">-->
            <div class="col-xs-12">
                <div class="embed-responsive embed-responsive-16by9" id="">
                    <iframe id="Live-Stream" class="embed-responsive-item" src="http://www.ustream.tv/embed/20054416?v=3&amp;wmode=direct&wmode=opaque" scrolling="no" frameborder="0" style="border: 0px none transparent;" seamless></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="stream-buttons">
                    <tbody>
                        <tr style="width:100%;">
                            <?php
                            /*
                            *The following code is to get ride of the calendar button when the event is in progress or when the event has passed
                            *We'll eventually be able to do this by checking the event database
                            * 
                            * TBA API
                            * -------
                            * https://www.thebluealliance.com/apidocs
                            * http://www.thebluealliance.com/api/v2/team/frc1294/2016/events
                            *
                            * FIRST FMS API
                            * -------------
                            * http://docs.frcevents2.apiary.io/
                            * 
                            */
                            $eventDate='18-03-2016';
                            if(strtotime($eventDate) > strtotime('today')){
                                /*Its not passed the event date, show the "before event" button*/ ?>
                            <td style="width: 50%;">
                                <a href="http://www.thebluealliance.com/event/2016wamou" title="Add to Calendar" class="addthisevent">
                                    Add to Calendar
                                    <span class="_start">19-03-2016 9:00:00</span>
                                    <span class="_end">20-03-2016 17:00:00</span>
                                    <span class="_zonecode">6</span>
                                    <span class="_summary">Mount Vernon Competition</span>
                                    <span class="_description">PNW Mount Vernon District Competition</span>
                                    <span class="_location">314 N 9th Street Mount Vernon, WA 98273</span>
                                    <span class="_organizer">Washington FIRST Robotics</span>
                                    <span class="_organizer_email">Organizer e-mail</span>
                                    <span class="_all_day_event">false</span>
                                    <span class="_date_format">DD/MM/YYYY</span>
                                </a>
                            </td>
                            <td style="width: 50%;">
                                <a href="https://www.thebluealliance.com/event/2016wamou/" target="_blank" title="Go to Team List" class="go-to-scores" >
                                    <span class="glyphicon glyphicon-list-alt"></span> Get Team List
                                </a>
                            </td>
                            <?php
                            }
                            else
                            {
                                /*It has passed the event date, the event may be live streaming right now so show the correct buttons accordingly*/
                            ?>
                            <td>
                                <a href="http://www.ustream.tv/channel/pnwfirst-blue" data-placement="top" data-toggle="tooltip" title="Go to ustream.com to view this live stream directly" class="add-tooltip btn btn-default">
                                    <span class="glyphicon glyphicon-facetime-video"></span> Direct Video Stream
                                    <!--Well eventually get the link through the database and do everything automatically-->
                                </a>
                            </td>
                            <td>
                                <a href="http://www.thebluealliance.com/event/2016wamou" target="_blank" class="add-tooltip btn btn-default" data-toggle="tooltip" data-placement="top" data-title="Click here to get current match scores for this event"  >
                                    <span class="glyphicon glyphicon-list-alt"></span> Get Scores
                                </a>
                            </td>
                            <?php
                            } 
                            /*End of PHP for date checking, well evetually do everything automatically with the database at some point*/
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>