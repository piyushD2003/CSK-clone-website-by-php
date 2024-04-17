<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">
    <title>Chennai Super Kings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        .card-text{
            font-size: clamp(0.3rem, 2.5vw, 1rem);
        }
        .card-title{
            font-size: clamp(0.7rem, 2.5vw, 1.6rem);
        }
        #img1{
            width: clamp(100px, 100%, 2000px);
        }
        .carousel-item {
            width: clamp(100px, 100%, 2000px);
            /* Adjust as needed */
            height: 420px;
            /* Adjust as needed */
            overflow: hidden;
        }
        /* .card{
            border-radius:30px !important
        } */
        img {
            width: 100%;
            transition: 0.5s all ease-in-out;
            }
  img:hover {
  transform: scale(1.1);
}
        #demo, .card{
  opacity: 0;
  transform: translateY(-20px);
  transition: opacity 1s, transform 1.5s;
}
        #img1 {
            height: 500px;
            object-fit: cover;
            object-position: 5% 52%;
        }

        #img2 {
            height: 500px;
            object-fit: cover;
            object-position: 25% 40%;
        }
    </style>
</head>

<body>
    <?php require_once("navbar.php")?>
    <div class="page-container">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="img1" src="https://www.chennaisuperkings.com/assets/images/ChampionsBanner.webp" alt="Los Angeles" class="img-fluid d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>2023 Winner</h3>
                        <p>5th TIME CHAMPIONS</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="img1"
                        src="https://gallery.chennaisuperkings.com/PROD/GALLERY_CONTENT/GALLERY_IMAGES/CSKGAL_IMG20210101085155616969.jpg"
                        alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>2021 Winner</h3>
                        <p>4th TIME CHAMPIONS</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="img1"
                        src="https://gallery.chennaisuperkings.com/PROD/GALLERY_CONTENT/GALLERY_IMAGES/CSKGAL_IMG20180528030219479291.jpg"
                        alt="Chicago" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>2018 Winner</h3>
                        <p>3rd TIME CHAMPIONS</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="img2" src="https://cdn.wisden.com/wp-content/uploads/2023/05/CSK-2011-980x530.png"
                    alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h3>2011 Winner</h3>
                        <p>2nd TIME CHAMPIONS</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img id="img1" src="https://wallpapercave.com/wp/wp2525541.jpg" alt="New York" class="d-block"
                        style="width:100%">
                    <div class="carousel-caption">
                        <h3>2010 Winner</h3>
                        <p>1st TIME CHAMPIONS</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="container d-flex mt-4 p-4"> 
            
            <div class="card mb-3" id="mem" style="background-color: rgba(255, 255, 255, 0);max-width:540px; "> 
                <div class="row g-0"> 
                    <div class="col-md-6"> 
                        <img src= "https://cricfit.com/wp-content/uploads/2021/08/Kasi-Vishwanathan.jpg" class="img-fluid rounded-start"> 
                        <p class="card-text ms-5 ps-5"> <small class="text-muted"> CEO </small> </p> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="card-body"> 
                        <h5 class="card-title">K VISHWANATHAN</h5> 
                            <p class="card-text text-sm-start">is the CEO of the Chennai Super Kings (CSK). In November 2023, Viswanathan said that MS Dhoni will play in the 2024 season after the five-time champions retained him </p> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="container d-flex flex-row-reverse mt-2 p-4"> 
            <div class="card mb-3" id="mem1" style="background-color: rgba(255, 255, 255, 0); max-width:540px;"> 
                <div class="row g-0"> 
                    <div class="col-md-6"> 
                        <img src= "https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1200,q_50/lsci/db/PICTURES/CMS/188000/188023.jpg" class="img-fluid rounded-start" alt="..."> 
                        <p class="card-text ms-5 ps-3"> <small class="text-muted"> Vice Chairman </small> </p> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="card-body"> 
                        <h5 class="card-title">N SRINIVASAN</h5> 
                            <p class="card-text">is vice chairman and managing director of The India Cements Ltd., and his family have returned as promoters of Chennai Super Kings Cricket Ltd</p> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="container d-flex mt-2 p-4"> 
            <div class="card mb-3" id="mem2" style="background-color: rgba(255, 255, 255, 0); max-width:540px;"> 
                <div class="row g-0"> 
                    <div class="col-md-6"> 
                        <img src= "https://staticg.sportskeeda.com/editor/2023/03/03991-16790449280592-1920.jpg" class="img-fluid rounded-start" alt="..."> 
                        <p class="card-text ms-5 ps-4"> <small class="text-muted"> Head Coach </small> </p> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="card-body"> 
                        <h5 class="card-title">STEPHEN FLEMING</h5> 
                            <p class="card-text">is vice chairman and managing director of The India Cements Ltd., and his family have returned as promoters of Chennai Super Kings Cricket Ltd</p> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
    <?php require_once("footer.php")?>
    <script> 
    document.addEventListener('DOMContentLoaded', function() {
    //   var card = document.getElementById('myCard');
      function show(cardId, delay) {
        let card = document.getElementById(cardId);

        // Set a timeout to delay the appearance of the card
        setTimeout(function() {
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, delay);
      }

      show('demo',250)
      show('mem',500)
      show('mem1',750)
      show('mem2',1000)
    //   show('CEO3',1200)
    });
</script>
</body>

</html>