<?php
include 'header.php';
include 'connection.php';

?>
<div class="row mt-2">
        

        <div class="col-md-12 order-md-3">
          <h4 class="mb-3">Billing address</h4>
          <?php 
            if(isset($errorMsg) && count($errorMsg) > 0)
            {
                foreach($errorMsg as $error)
                {
                    echo '<div class="alert alert-danger">'.$error.'</div>';
                }
            }
          ?>
          <form class="needs-validation" method="POST" action="submit.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" value="<?php echo (isset($first_name) && !empty($first_name)) ? $first_name:'' ?>" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" value="<?php echo (isset($last_name) && !empty($last_name)) ? $last_name:'' ?>" >
              </div>
            </div>
 
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php echo (isset($email) && !empty($email)) ? $email:'' ?>">
            </div>
 
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address1" placeholder="1234 Main St" value="<?php echo (isset($address1) && !empty($address1)) ? $address1:'' ?>">
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite" value="<?php echo (isset($address2) && !empty($address2)) ? $address2:'' ?>">
            </div>
 
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" name="country" id="country" >
                  <option value="">Choose...</option>
                  <option value="United States" >United States</option>
                  <option value="United States" >Myanmar</option>
                  <option value="United States" >Thailand</option>
                  <option value="United States" >Korea</option>
                  <option value="United States" >Japan</option>
                </select>
              </div>
              
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zipcode" placeholder="" value="<?php echo (isset($zipCode) && !empty($zipCode)) ? $zipCode:'' ?>" >
              </div>
            </div>
            <hr class="mb-4">
 
            <h4 class="mb-3">Payment</h4>
            
            Enter  Name : <input type="text" name="cname"><br><br>
            Enter Card Number : <input type="text" name="cardnumber"><br>
           
            <hr class="mb-4" >
            <button class="btn btn-info btn btn-secondary btn-lg"  type="submit" name="submit" value="submit">Complete Checkout</button>
          </form>
        </div>
      </div>

      <div class="container p-0"></div><br>
  <!-- Grid container -->
  
  </div>

  
