<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chennai Super Kings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
    .container1 {
      box-shadow: 0 40px 28px 0 rgba(0, 0, 0, 0.2), 0 26px 40px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
      background-color: rgb(255, 238, 3);
    }
    #cont1,#cont2,#cont3,#ele1,#ele2,#ele3{
      opacity: 0;
      transform: translateY(-20px);
      transition: opacity 2s, transform 1.5s;
    }
    iframe,#img2 {
      width: clamp(180px, 100%, 600px)
    }
    img {
      transition: 0.5s all ease-in-out;
    }

    img:hover {
      transform: scale(1.1);
    }
    #img1 {
      height: 200px;
      width: 600px;
    }

    #img2 {
      height: 200px;
      /* width: 600px; */
    }

    #map {
      height: 18px;
    }
  </style>
</head>

<body>
  <?php require_once("navbar.php")?>
  <div class="container container1 p-5" id='cont1'>
    <div id="ele1">
    <h1>CSK ACADMEY</h1>
    <div class="row my-2 pb-5">
      <div class="text-center col-5">
        <img id="img1"
          src="https://ska-gallery.s3.ap-south-1.amazonaws.com/Stephen_Fleming_launches_Junior_Super_Kings/1.jpg"
          class="img-fluid" alt="..." style="">
      </div>
      <div class="text-center col-7">
        <img id="img1" src="https://www.superkingsacademy.com/assets/images/CoimbatoreAndTiruppurBanner.jpg"
          class="img-fluid" alt="..." style="">
      </div>
    </div>
    <div class="col">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. Delectus, aliquid ab, tempora sunt inventore repellat suscipit
              sequi quis ut tempore animi vero sint tenetur architecto nisi quam eligendi similique facere
              nobis sapiente. Adipisci facere, architecto ex officiis nihil eius cupiditate earum labore magni
              quia aspernatur illo deleniti soluta iste autem veniam blanditiis ipsam culpa temporibus odit
              consequatur? Repellat modi ipsum saepe aliquid ut, mollitia quas quae earum!
              <code>.accordion-flush</code> class. This is the first item's accordion body.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
              the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
              this being filled with some actual content.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
              the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
              exciting happening here in terms of content, but just filling up the space to make it look, at
              least at first glance, a bit more representative of how this would look in a real-world
              application.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto my-4 mt-5">
      <button class="btn btn-primary" type="button">GO TO ACADMEY</button>
    </div>
    </div>
  </div>

  <div class="container container1 p-5 mt-4" id='cont2'>
    <div id="ele2">
    <h1>SHOP</h1>
    <br>
    <div class="col pb-5">
      <img id="img2"
        src="https://www.chennaisuperkings.com/shop/_next/image?url=https%3A%2F%2Fstore.chennaisuperkings.com%2F%2Fmedia%2Fbanners%2FAuctionWearBanner_1519x350_copy.png&w=1920&q=75"
        alt="">
    </div>

    <div class="col">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Accordion Item #1
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. Delectus, aliquid ab, tempora sunt inventore repellat suscipit
              sequi quis ut tempore animi vero sint tenetur architecto nisi quam eligendi similique facere
              nobis sapiente. Adipisci facere, architecto ex officiis nihil eius cupiditate earum labore magni
              quia aspernatur illo deleniti soluta iste autem veniam blanditiis ipsam culpa temporibus odit
              consequatur? Repellat modi ipsum saepe aliquid ut, mollitia quas quae earum!
              <code>.accordion-flush</code> class. This is the first item's accordion body.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Accordion Item #2
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
              the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
              this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Accordion Item #3
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
              the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
              exciting happening here in terms of content, but just filling up the space to make it look, at
              least at first glance, a bit more representative of how this would look in a real-world
              application.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto my-4 mt-5">
      <button class="btn btn-primary" type="button">GO TO SHOP</button>
    </div>
    </div>
  </div>

  <div class="container container1 p-5 mt-4 mb-4" id="cont3">
    <div id="ele3">
    <h1>CONTACT</h1>
      <br>
      <div class="row my-2 pb-5">
        <div class="text-center col-lg-6 col-md-6 mb-4 mb-md-0">
          <div class='p-4' style="background-color:white; height: 350px; text-align: left;">
            <br> <img id="map" src="https://cdn-icons-png.flaticon.com/512/3082/3082383.png" alt=""><b>Address</b><br>
            Dhun Building, No: 827, 3rd Floor, Mount Road,<br>
            Anna Salai, Chennai - 600 002.<br>
            Tamil Nadu, India<br><br>
            <img id="map" src="https://w7.pngwing.com/pngs/490/260/png-transparent-email-email-thumbnail.png" alt="">
            <a href="mailto:support@chennaisuperkings.com">support@chennaisuperkings.com</a><br><br>
            <img id="map" src="https://w7.pngwing.com/pngs/356/440/png-transparent-iphone-computer-icons-telephone-email-telephone-electronics-text-mobile-phones.png" alt="">
            <a href="callto:support@chennaisuperkings.com">+91 4646 4533</a>
          </div>
        </div>
        <div class="text-center col-lg-6 col-md-6 mb-4 mb-md-0">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.5112936784194!2d80.26681807484309!3d13.066749587257425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52677a871c433f%3A0xae926753dcc84814!2sChennai%20Super%20Kings%20Cricket%20Limited!5e0!3m2!1sen!2sin!4v1704479320130!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" height="350px" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
    </div>
  </div>
<?php require_once("footer.php")?>

<script> document.addEventListener('DOMContentLoaded', function() {
    //   var card = document.getElementById('myCard');
      function show(cardId, delay) {
        let card = document.getElementById(cardId);

        // Set a timeout to delay the appearance of the card
        setTimeout(function() {
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, delay);
      }

      show('cont1',250)
      show('cont2',400)
      show('cont3',550)
      show('ele1',1000)
      show('ele2',1200)
      show('ele3',1200)
    });
</script>
</body>

</html>