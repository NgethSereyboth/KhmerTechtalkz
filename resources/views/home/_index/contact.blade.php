<div class="col-md-12" id="contact">
  <div class="container">
    <div class="row d-flex justify-content-center">
          <!-- <div class="col-md-8">
              <div class="well well-sm">
                  <form>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Name</label>
                              <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                          </div>
                          <div class="form-group">
                              <label for="email">
                                  Email Address</label>
                              <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                  </span>
                                  <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                          </div>
                          <div class="form-group">
                              <label for="subject">
                                  Subject</label>
                              <select id="subject" name="subject" class="form-control" required="required">
                                  <option value="na" selected="">Choose One:</option>
                                  <option value="service">General Customer Service</option>
                                  <option value="suggestions">Suggestions</option>
                                  <option value="product">Product Support</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">
                                  Message</label>
                              <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                  placeholder="Message"></textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                              Send Message</button>
                      </div>
                  </div>
                  </form>
              </div>
          </div> -->
      <!-- Wrapper container -->
      <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form class="border border-4 rounded p-3" id="contactForm">
      
          <div class="row">

            <div class="col-6">

              <!-- Name input -->
              <div class="mb-3">
                  <label class="form-label" for="name">Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" />
              </div>

              <!-- Phone Numbers -->
              <div class="mb-3">
                  <label class="form-label" for="phone">Phone Numbers</label>
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Phone Numbers" />
              </div>
            
              <!-- Email address input -->
              <div class="mb-3">
                  <label class="form-label" for="emailAddress">Email Address</label>
                  <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
              </div>
              
            </div>

            <div class="col-6">
              <!-- Message input -->
              <div class="mb-3">

                <label 
                  class="form-label" 
                  for="message"
                >
                  Message
                </label>
                
                <textarea 
                  class="form-control" 
                  id="message" 
                  type="text" 
                  placeholder="Message" 
                  style="height: 10rem;"
                >
                </textarea>

              </div>

            </div>

            <hr>

            <!-- Form submit button -->
            <div class="d-grid col-3 mx-auto">
              
              <button 
                class="btn btn-primary btn-lg rounded btn-danger" type="submit"
              >
                Send Message
              </button>
            
            </div>

          </div>

        </form>
      
      </div>
    
    </div>
  
  </div>

</div>