@extends('layouts.header')

@section('content')


<style>
.bs-wizard {
    margin-top: 40px;
}

/*Form Wizard*/
.bs-wizard {
    border-bottom: solid 1px #e0e0e0; 
    padding: 0 0 10px 0;
}
.bs-wizard > .bs-wizard-step {
    padding: 0; 
    position: relative;
}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {
    color: #595959; 
    font-size: 16px; 
    margin-bottom: 5px;
}
.bs-wizard > .bs-wizard-step .bs-wizard-info {
    color: #999; 
    font-size: 14px;
    display:none; 
}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {
    position: absolute; 
    width: 30px; 
    height: 30px; 
    display: block; 
    background: #fbe8aa; 
    top: 45px; 
    left: 50%; 
    margin-top: -15px;
     margin-left: -15px; 
     border-radius: 50%;
} 
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {
    content: ' ';
     width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; } 
.bs-wizard > .bs-wizard-step > .progress {
    position: relative; 
    border-radius: 0px; 
    height: 8px; 
    box-shadow: none; 
    margin: 20px 0;
}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {
    width:0px;
     box-shadow: none;
      background: #fbe8aa;
}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {
    width:100%;
}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {
    width:50%;
}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {
    width:0%;
}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {
    width: 100%;
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {
    background-color: #f5f5f5;
}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {
    opacity: 0;
}
.bs-wizard > .bs-wizard-step:first-child  > .progress {
    left: 50%; 
    width: 50%;
}
.bs-wizard > .bs-wizard-step:last-child  > .progress {
    width: 50%;
}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{
     pointer-events: none; 
}
/*END Form Wizard*/


@media(max-width: 500px)
{
    .bs-wizard > .bs-wizard-step .bs-wizard-stepnum {
        display: none; 
    }

    .bs-wizard > .bs-wizard-step > .bs-wizard-dot {
        top: 23px;
    }  

    .bs-wizard > .bs-wizard-step .bs-wizard-info {
        display: block;
    } 
}
</style>

<div class="container" style= "margin-top: 100px;">
		
        <h2 class = "text-center" style= "margin-bottom: 30px; ">
            We appreciate your order & really hope to see you again. 
        </h2>
        <div class="row bs-wizard" style="border-bottom:0;">
            
            <div class="col-xs-3 bs-wizard-step complete">
              <div class="text-center bs-wizard-stepnum">Step 1: Preparing</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Payment</div>
            </div>
            
            <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 2: Ready For Delivery</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Ready</div>
            </div>
            
            <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
              <div class="text-center bs-wizard-stepnum">Step 3: Out For Delivery</div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">On Its Way</div>
            </div>
            
            <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
              <div class="text-center bs-wizard-stepnum">Step 4: Delivered </div>
              <div class="progress"><div class="progress-bar"></div></div>
              <a href="#" class="bs-wizard-dot"></a>
              <div class="bs-wizard-info text-center">Delivered</div>
            </div>
        </div>
    
    
    
    
    
</div>
</div>

<footer style = "margin-top: 700px;">
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