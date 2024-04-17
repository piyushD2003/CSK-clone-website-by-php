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
  #navbar{
    /* background: linear-gradient(to left, rgb(251, 255, 0), rgb(251, 149, 0)); */
    z-index: 2;
  overflow: hidden;
  /* background-color: #333; */
  position: fixed;
  top: 0;
  width: 100%;
  }
  #csklogo{
    margin-right:10px;
    width:55px !important;
  }
</style>
<div class="container" style="height: 70px;"></div>
  <nav class="navbar navbar-expand-lg bg-warning" id="navbar">

        <div class="container-fluid">
            <img id="csklogo" src="https://upload.wikimedia.org/wikipedia/en/thumb/2/2b/Chennai_Super_Kings_Logo.svg/800px-Chennai_Super_Kings_Logo.svg.png" height="50px"alt="">
          <a class="navbar-brand" href="#"><b>Chennai Super King</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php"><b>Team</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="FanZone.php"><b>FanZone</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.php"><b>About Us</b></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- <div class="background"> -->
</body>
</html>