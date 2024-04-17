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
      img {
        /* width: 100%; */
        transition: 0.5s all ease-in-out;
      }
      img:hover {
        transform: scale(1.1);
      }
      .card-title{
            font-size: clamp(0.7rem, 2.5vw, 1.6rem);
        }
      .card,.h2{
    opacity: 0;
    transform: translateY(-20px);
    /* background-color: #e5fa02; */
    transition: opacity 2s, transform 1.5s;
  }
        #card1,#card2,#card3,#card4,#card5,#card6,#card7,#card8,#card9,#card10,#card11,#card12,#card13,#card14,#card15{
            width: clamp(188px,100%,188px);
            border-color: rgb(255, 255,0);
            /* background:linear-gradient(rgb(71, 71, 154),rgb(35, 168, 234)); */
            background-color: rgba(255, 255, 255, 0);
            /* background-attachment: fixed; */
            background-size:cover;
            background-repeat: no-repeat;
        }
    </style>
  <?php require_once("navbar.php")?>
  <?php require_once("navtab.php")?>
  
  <div class="container p-5">
  <div class="container text-center p-5">
    <div class="row justify-content-md-center">
      <p id="r1" class="h2 container text-center">WICKET KEEPER</p>
      
      <div class="card col-sm-3 my-3 mx-1 text-center" id="card1">
        <img id='player' src="image\download.png" class="card-img-top ms-0" alt="...">
        <div class="card-body">
          <h5 class="card-title">MS Dhoni</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <p id="r2" class="h2 container text-center">BATSMAN</p>

      <div class="card col-sm-3 my-2 mx-3" id="card2">
        <img id='player' src="image\download (1).png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">RUTURAJ GAIKWAD</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3 " id="card3">
        <img id='player' src="image\download (2).png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">DEVON CONWAY</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3 " id="card4">
        <img id='player' src="image\download (3).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">AJINKIYA RAHANE</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <p id="r3" class="h2 container text-center">BOWLING</p>
      <div class="card col-sm-3 my-2 mx-3" id="card5">
        <img id='player' src="image\download (4).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">DEEPAK CHAHAR</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card6">
        <img id='player' src="image\download (5).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MATHEESA PATHIRANA</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card7">
        <img id='player' src="image\download (6).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MUSTAFIZUR RAHMAN</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <p id="r4" class="h2 container text-center">ALL ROUNDER</p>
      <div class="card col-sm-3 my-2 mx-3" id="card8">
        <img id='player' src="image\download (7).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">RAVINDRA JADEJA</h5>

          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card9">
        <img id='player' src="image\download (8).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MOEEN <br> ALI</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card10">
        <img id='player' src="image\download (9).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MITCHEL SANTNER</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card11">
        <img id='player' src="image\download (10).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">SHIVAM DUBEY</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card12">
        <img id='player' src="image\download (11).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">MAHEESHA THEEKSHANA</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card13">
        <img id='player' src="image\download (12).png" class="card-img id='player'-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">SHARDUL THAKUR</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card14">
        <img id='player' src="image\download (13).png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">RACHIN RAVINDRA</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
      <div class="card col-sm-3 my-2 mx-3" id="card15">
        <img id='player' src="image\download (14).png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">DAREYN MITCHELL</h5>
          <a href="#" class="btn btn-primary">Player Info</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php require_once("footer.php")?>
  <script>
    // JavaScript to handle the transition
    document.addEventListener('DOMContentLoaded', function() {
    //   var card = document.getElementById('myCard');
      function showCard(cardId, delay) {
        let card = document.getElementById(cardId);

        // Set a timeout to delay the appearance of the card
        setTimeout(function() {
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, delay);
      }

      // Specify the delay for each card
      showCard('r1', 150);
      showCard('card1', 250);
      showCard('r2', 400);
      showCard('card2', 500);
      showCard('card3', 750);
      showCard('card4', 1000);
      showCard('r3', 1150);
      showCard('card5', 1250);
      showCard('card6', 1500);
      showCard('card7', 1750);
      showCard('r4', 1900);
      showCard('card8', 2000);
      showCard('card9', 2250);
      showCard('card10', 2500);
      showCard('card11', 2750);
      showCard('card12', 2750);
      showCard('card13', 2750);
      showCard('card14', 2750);
      showCard('card15', 2750);
    });
</script>

</body>

</html>