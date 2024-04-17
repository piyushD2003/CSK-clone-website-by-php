<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chennai Super Kings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <style>
        .h11{
            font-size: clamp(0.5cm, 6.5vw, 6cm);
            -webkit-text-size-adjust: auto;
  background: linear-gradient(to right, #fe5f03, #e5fa02);
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  background-clip: text;

        }
        .needs-validation {
  color: white;
  background: linear-gradient(45deg, rgb(251, 255, 0), rgb(252, 5, 26));
  border-radius: 10px;
  border: 2px solid;
}
    </style>
<?php require_once("navbar.php")?>
<div class="text-center m-4">
<h1 class="h11"><i>BE_THE_YELLOW_ARMY</i></h1>
</div> 
<form class="row g-3 needs-validation m-5 p-3" id="myForm" style="opacity:1">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="01" value="" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" id="02" value="" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="03" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">City</label>
        <input type="text" class="form-control" id="04" required>
        <div class="invalid-feedback">
            Please provide a valid city.
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input type="text" class="form-control" id="06" required>
        <div class="invalid-feedback">
            Please provide a valid zip.
        </div>
    </div>
    <div class="col-12">
        <!-- Button trigger modal -->
        <button type="button" id="myButton" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal" disabled>Join</button>
    </div>

          </form>
          <!-- Modal -->
          <div class="modal fade text-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
              style="background:linear-gradient(100deg,rgb(255, 77, 0),yellow); padding:60px">
              <div class="modal-dialog modal-dialog-centered text-center">
                  <div class="modal-content" style="background: rgb(52, 52, 232);">
                      <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Congratulation!!</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <p style="font-size:xx-large;">You become family of CSK</p>
                      </div>
                      <div class="modal-footer">
                          <button style="background-color: #ead70e;" type="button" class="btn btn-primary"
                              data-bs-dismiss="modal">Thanks!</button>
                      </div>
                  </div>
              </div>
          </div>
<?php require_once("footer.php")?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Get form and button elements
    const myForm = document.getElementById('myForm');
    const submitButton = document.getElementById('myButton');

    // Add event listener to the form
    myForm.addEventListener('input', function () {
      // Check if all input fields have values
      const inputs = Array.from(myForm.querySelectorAll('input'));
      const allInputsFilled = inputs.every(input => input.value.trim() !== '');

      // Enable or disable the button based on the condition
      submitButton.disabled = !allInputsFilled;
    });
  });
</script>
</body>
</html>