
      <div class="panel-group">
          <div class="panel panel-default">
                <div class="panel-heading"  style = "background-color: #fed136;"   >
                  <a class = "payment-link" style="width:100%; height: 100%; " data-toggle="collapse" href="#collapse1"> 
                    <h4 class="panel-title">
                        Personal Details
                        <i  class = "fa fa-caret-down pull-right"></i>
                    </h4>
                   </a>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class= "panel-body">
                         <form style = "background-color:#fff; height: auto;   padding: 40px; padding-top: 20px;"  action=" {{route('checkout.create')}}" method="post">
                         
                           {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"  placeholder="Emmanuel Audu " required="true">
                            </div>

                            <div class="form-group">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="adu@gmail.com" required="true">         
                            </div>

                            <div class="form-group">
                              <label for="phone_number" class="form-label">Phone No</label>
                              <input type="text" class="form-control" id="phone-number" name="phone" placeholder="+447032245111" required="true">
                            </div>
                            <div class="form-group">
                              <label for="address" class="form-label">Address #1</label>
                              <input type = "Address Line #1" class="form-control" id="address" required="true" rows="5" name="address"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="address" class="form-label">Address #2</label>
                              <input type = "Address Line #2" class="form-control" id="address2"  required="true" rows="5" name="address"></textarea>
                            </div>

                        </form>
                    </div>
                </div>
          </div>
      </div>