<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Dedicated to the Craft of Building Websites!</h1>

        <p class="lead">Every year the brightest web designers and front-end developers descend on Chicago to discuss the latest technologies. Join us this August!</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute('user/registration/register');?>">Sign up now</a></p>
    </div>

    <div class="body-content">
        <div class="row">
        <div class="col-lg-4">
        <a class="btn btn-default" role="button" href="./#speakers">
          <h2>Speakers</h2>
            <img src="../assets/images/link-speakers.jpg" width=65% alt="Speakers" class="img-thumbnail">
          <h3>World-Class Speakers</h3>
        </a>
        <p>Joining us from all around the world are over twenty fantastic speakers, here to share their stories.</p>
      </div>

      <div class="col-lg-4">
        <a class="btn btn-default" role="button" href="./#schedule">
          <h2>Schedule</h2>
            <img src="../assets/images/link-sched.jpg" width=65% alt="Schedule" class="img-thumbnail" >
          <h3>Three Inspiring Days</h3>
        </a>
        <p>Enjoy three inspiring and action-packed days of talks, gatherings, and all-around good times.</p>
      </div>

      <div class="col-lg-4">
        <a class="btn btn-default" role="button" href="./#venue">
          <h2>Venue</h2>
            <img src="../assets/images/link-venue.jpg" width=65% alt="Venue" class="img-thumbnail">
          <h3>The Chicago Theatre</h3>
        </a>
        <p>Within the heart of downtown Chicago, The Chicago Theatre will provide a beautiful conference venue.</p>
      </div>

        </div>

    </div>
    <div class="row" id="speakers">
         <h1>Speakers</h1>
<!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-3">
          <img class="img-circle" src="../assets/images/harvey-specter.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Harvey Specter</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>          
        </div>
          <div class="col-lg-3">
          <img class="img-circle" src="../assets/images/ayanna_dixon.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Ayanna Dixon</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="../assets/images/olivia-pope.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Olivia Pope</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>         
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-3">
          <img class="img-circle" src="../assets/images/snoop-dogg.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Snoop Dogg</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>
    <div class="row" id="schedule">
        <h2><p>Style Conference 2016 @ the Chicago Theater</h2> 
           
          <div class=table-responsive> 
              <table class="table table-bordered table-striped"> 
                  <thead> 
                      <tr> 
                          <th></th> 
                          <th> Auditorium 1 
                              <small>Morning Session</small> 
                          </th> 
                          <th> Auditorum 4 
                              <small>Lunch</small> 
                          </th> 
                          <th> Auditorum 2
                              <small>Afternoon Session</small> 
                          </th> 
                          <th> Auditorum 3 
                              <small>Evening Session</small> 
                          </th> 
                      </tr> 
                  </thead> 
                  <tbody> 
                      <tr> 
                          <th class=text-nowrap scope=row>Monday</th> 
                          <td>9AM</td> 
                          <td>12PM</td> 
                          <td>1PM</td> 
                          <td>4PM</td> 
                      </tr> 
                      <tr> 
                          <th class=text-nowrap scope=row>Tuesday</th> 
                          <td>9AM</td> 
                          <td>12PM</td> 
                          <td>1PM</td> 
                          <td>4PM</td> 
                      </tr> 
                      
                  </tbody> 
              </table> 
          </div>
    </div>
    <div class="row" id="venue">
         <h1>Venue</h1>

      <div class="container">
          <div class="col-md-3 pp" >
              
              <div align="left"><p>The Chicago Theatre, originally known as the Balaban and Katz Chicago Theatre, is a landmark theater located on North State Street in the Loop area of Chicago, Illinois, in the United States. Wikipedia</p>
                </div>
              
                
                  <div align="left"><p>Address: 175 N State St, Chicago, IL 60601, United States<br>
                    Capacity: 3,880<br>
                      Opened: October 26, 1921</p>
                  </div>
          </div>
          <div class="col-md-8">              
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11881.402546214706!2d-87.6277052!3d41.8853157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4700ddf60fcbfad6!2sThe+Chicago+Theatre!5e0!3m2!1sen!2sjm!4v1454982388974" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
      </div>
    </div>
</div>
