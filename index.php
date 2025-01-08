<?php
    $currentDate = date('l, F j, Y');
?>

<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />
    <style>
       body {
  background-color: #ffffff;
  color: #000000;
  transition: all 0.3s ease-in-out;
}

body.dark-mode {
  background-color: #121212;
  color: #ffffff;
}

.navbar, .footer {
  transition: background-color 0.3s ease-in-out;
}

.navbar.dark-mode, .footer.dark-mode {
  background-color: #343a40;
}

.card {
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.card.dark-mode {
  background-color: #1e1e1e;
  color: #ffffff;
}

      .carousel-item img,
      .carousel-item iframe {
        height: 75vh;
        object-fit: cover;
        width: 100%;
        border-radius: 8px;
      }

      .row {
        margin-top: 30px;
      }

      .btn a {
        text-decoration: none;
        color: inherit;
      }

      .shared-padding {
        padding: 40px 70px;
      }
      #hero {
        justify-content: center;
      }
      .gallery-images {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: space-evenly;
      }
      .gallery-images img {
        width: 11.2rem;
        border-radius: 5px;
      }
      .card-equal {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

      <nav class="navbar navbar-expand-lg bg-body-tertiary shared-padding">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Xcash</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="article.php">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search" />
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <button id="darkModeToggle" class="btn btn-dark ms-3">Dark Mode</button>
    </div>
  </div>
</nav>


    <section id="hero" class="container-fluid shared-padding">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="3"
            aria-label="Slide 4"></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/lockdown.jpg" class="d-block w-150" alt="Lockdown" />
          </div>
          <div class="carousel-item">
            <img src="img/nibiru.jpg" class="d-block w-100" alt="Nibiru" />
          </div>
          <div class="carousel-item">
            <img src="img/aquaman.jpg" class="d-block w-100" alt="Aquaman" />
          </div>
          <div class="carousel-item">
            <img src="img/malam_pencabut_nyawa.jpg" class="d-block w-100" alt="Malam Pencabut Nyawa" />
          </div>
          <div class="carousel-item">
            <img src="img/kangmmak.jpeg" class="d-block w-100" alt="Kang Mak" />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
<gallery>
      <h1 class="text-center" id="gallery">Gallery</h1>
      <br>
      <br>
  <div class="kotak">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/aquaman.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item"> 
            <img src="img/hellboy.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/joker.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    </section>
  </body>

  <footer class="py-3 my-4 shared-padding">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item">
        <a href="index.php" class="nav-link px-2 text-body-secondary">Home</a>
      </li>
      <li class="nav-item">
        <a href="article.php" class="nav-link px-2 text-body-secondary"
          >Movies</a
        >
      </li>
      <li class="nav-item">
        <a href="gallery.php" class="nav-link px-2 text-body-secondary"
          >Gallery</a
        >
      </li>
      <li class="nav-item">
        <a href="index.php" class="nav-link px-2 text-body-secondary">About</a>
      </li>
    </ul>
    <p class="text-center text-body-secondary">© <?php echo date("Y"); ?> CpW</p>
  </footer>
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const darkModeToggle = document.getElementById("darkModeToggle");
    const body = document.body;

    // Check for saved preference
    if (localStorage.getItem("dark-mode") === "enabled") {
      body.classList.add("dark-mode");
      darkModeToggle.textContent = "Light Mode";
    }

    // Toggle dark mode
    darkModeToggle.addEventListener("click", () => {
      body.classList.toggle("dark-mode");
      if (body.classList.contains("dark-mode")) {
        localStorage.setItem("dark-mode", "enabled");
        darkModeToggle.textContent = "Light Mode";
      } else {
        localStorage.setItem("dark-mode", "disabled");
        darkModeToggle.textContent = "Dark Mode";
      }
    });
  });
</script>


</html>
