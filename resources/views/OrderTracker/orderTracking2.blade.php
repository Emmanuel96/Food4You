@extends('layouts.header')

@section('content')
    
<!-- <style> 
    .timeline { list-style: none; padding: 0; position:relative; }
    .timeline:before { top: 0; bottom: 0; position: absolute; content: ""; width: 2px; background-color: #f1f1f1; left: 40px; margin-left: -1.5px; }
    .timeline { top: 0; bottom: 0; position: absolute; content: ""; width: 2px; background-color: #f1f1f1; left: 40px; margin-left: -1.5px; }
    .timeline > li { clear: both; content: " "; display: table;}
    .timeline > li { margin-bottom: 50px; position: relative; min-height: 50px; }
    .timeline > li .timeline-panel:after { border-left-width: 0; border-right-width: 14px; left: -14px; right: auto; }
    .timeline > li .timeline-panel { border-left-width: 0; border-right-width: 14px; left: -14px; right: auto; }
    .timeline > li .timeline-panel { width: 100%; float: right;   padding: 0 20px 0 100px; position: relative; text-align: left; }
    .timeline > li .timeline-image h4 { font-size: 10px; margin-top: 12px; line-height: 14px; }
    .timeline > li.timeline-inverted > .timeline-panel { float: right; text-align: left; padding: 0 20px 0 100px; }
    .timeline > li:last-child { margin-bottom: 0;}
    .timeline .timeline-heading h4 { margin-top: 0; color: inherit; }
    .timeline .timeline-heading h4.subheading { text-transform: none }
    .timeline .timeline-body > p,
    .timeline .timeline-body > ul { margin-bottom: 0;}
    .timeline > li .timeline-image { left: 0; margin-left: 0; width: 80px; height: 80px; position: absolute; z-index: 100; background-color: #fed136; color: white;  border-radius: 100%; border: 7px solid #f1f1f1; text-align: center; }

</style> -->
<section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Order Tracking</h2>
          <br>
          <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Step 1:</h4>
                  <h4 class="subheading">Preparing</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Step 2:</h4>
                  <h4 class="subheading">Ready For Delivery</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Step 3:</h4>
                  <h4 class="subheading">Out For Delivery</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Step 4:</h4>
                  <h4 class="subheading">Delivered</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer style = "margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Naija Bites 2017</span>
            </div>
            <div class="col-md-3">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-wechat"></i></a>
                    </li>
                    <li><a href="https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com"><i class="fa fa-weibo"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@endsection