 
 
 <div class="panel-group" style = "height: 550px; ">
          <div class="panel panel-default" style = " border: 2px solid #fed136;  border-color: #fed136;">
              <div class="panel-heading" style =  "background-color:#fff; border-bottom: 1px; solid #00000">
                  <a class = "payment-link" style="width:100%; " data-toggle="collapse" href="#collapse2"> 
                     <h4 class="panel-title">
                            Payment Details
                            <i  style="color: #fed136;" class = "fa fa-caret-down pull-right"></i>
                     </h4>
                  </a>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body" style = "border-top: 0px solid transparent; height: 450px; ">
                        
                      <form id="payment-form" style = "background-color:#fff; padding: 40px; padding-bottom: 0;  padding-top: 10px;" action="{{route('checkout.create')}}" method="post">
                      {{ csrf_field() }}

                            <div class='form-group'>
                                <label class='control-label form-label'>Name on Card</label>
                                <input class='form-control' size='4' type='text'   name="card_name">
                            </div>


                            <div class='form-group required'>
                                <label class='control-label form-label'>Card Number</label>
                                <input name="cardnumber" id="card_number" autocomplete='off' class='form-control card-number' size='20' type='text'>
                            </div>

                            <div class='form-group row'>
                                <div class='form-group cvc col-sm-6 col-xs-12 required'>
                                    <label class='control-label form-label'>CVC</label> 
                                    <input name="cvc" autocomplete='off' id ="cvc"  class='form-control card-cvc' placeholder='ex. 311'
                                    type='text'>
                                </div>

                                <div class='col-sm-6 col-xs-12 form-group expiration required'>
                                    <label class='form-label'>Expiry Date</label><br/>
                                    <div class= "form-group row">
                                     <!-- style = "padding-left: 15px;"> -->
                                        <input name="expy" class= "pull-left form-control" id = "exp_month" style="width:40%; border-right: 0px solid black;  border-top-right-radius: 0px; border-bottom-right-radius: 0px; " class='form-control card-expiry-year col-sm-2' placeholder='MM'  type='text'>
                                        <input name="expy" style = "width:40%; border-left: 0px solid black; border-top-left-radius: 0px; border-bottom-left-radius: 0px;" id = "exp_year" class='form-control card-expiry-year col-sm-2' placeholder='YY' type='text'>
                                    </div>
                                </div>
                            </div>
                            <hr style="width:100%; margin: 0; " class="pull-left"  border-top:1px solid #e8ebeb" >

                            <div class='form-group row'>
                               <div class='col-md-12 form-group'>
                               <button class='form-control btn btn-primary submit-button'
                               type='submit' style="margin-top: 10px; font-weight: bolder; color: black; font-size; 2pt; ">Confirm and Pay    <i style = "margin-left: 10px; " class = "fa fa-lock"></i></button>
                               </div>
                            </div>
                            <div class='form-row'>
                                <div class='col-md-12 error form-group invisible' style = "display: none; ">
                                <div class='alert-danger alert'>Please correct the errors and try again.</div>
                                </div>
                            </div> 

                      </form>


                  </div>
                 
              </div>
          </div>
      </div>
