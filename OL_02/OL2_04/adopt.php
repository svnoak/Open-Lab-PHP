<?php include_once "include/header.php" ?>


<?php

        $status = "";
        if( str_contains($_POST['email'],"@" ) && is_numeric($_POST['zip'])  && strlen($_POST['zip']) === 5){
            foreach( $_POST as $field ){
                if( strlen($field) > 1 ){
                    $status = true;
                }else{
                    $status = false;
                    var_dump($field);
                    break;
                }
        }
        
            if( $status ){
                $registrar = [
                    "name" => $_POST['firstname'] . " " . $_POST['lastname'],
                    "race" => $_POST['race'],
                    "about" => $_POST['about'],
                    "street" => $_POST['street'],
                    "additional" => $_POST['additional'],
                    "zip" => $_POST['zip'],
                    "city" => $_POST['city'],
                    "country" => $_POST['country'],
                    "phone" => $_POST['phone'],
                    "email" => $_POST['email']
                ];
            }
        }

    
?>
<?php if( $status ) { ?>
<div class="container success">Tack för ditt meddelande</div>
<?php } ?>
<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                <form action="adopt.php" method="POST">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Sir</option>
                      <option value="2">Madam</option>
                      <option value="3">The one and only</option>
                      <option value="4">Your highness</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="firstname" />
                        <label class="form-label" for="form3Examplev2">First name</label>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" name="lastname"/>
                        <label class="form-label" for="form3Examplev3">Last name</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                  <label class="form-label" for="form3Examplev3">Vilken hundras vill du adoptera?</label>
                    <select class="select" name="race">
                      <option value="Shiba">Shiba</option>
                      <option value="Tax">Tax</option>
                      <option value="Collie">Collie</option>
                      <option value="Schäfer">Schäfer</option>
                      <option value="Labrador">Labrador</option>
                    </select>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <textarea type="textarea" id="form3Examplev4" class="form-control form-control-lg" name="about"></textarea>
                      <label class="form-label" for="form3Examplev4">Beskriv dig kort</label>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="street"/>
                      <label class="form-label" for="form3Examplea2">Street + Nr</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea3" class="form-control form-control-lg" name="additional"/>
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" name="zip"/>
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea5" class="form-control form-control-lg" name="city"/>
                        <label class="form-label" for="form3Examplea5">City</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea6" class="form-control form-control-lg" name="country"/>
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input type="text" id="form3Examplea8" class="form-control form-control-lg" name="phone"/>
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input type="text" id="form3Examplea9" class="form-control form-control-lg" name="email"/>
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <!-- <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input
                      class="form-check-input me-3"
                      type="checkbox"
                      value=""
                      id="form2Example3c"
                    />
                    <label class="form-check-label text-white" for="form2Example3">
                      I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your site.
                    </label>
                  </div> -->

                  <button class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Adopt</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once "include/footer.php" ?>