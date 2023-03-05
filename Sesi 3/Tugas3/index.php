<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio Sederhana</title>
    <!-- Bootsrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-sticky">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portofolio</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Product</a>
            <a class="nav-link" href="#">Gallery</a>
            <a class="nav-link" href="#">Blog</a>
            <a class="nav-link" href="#">Inventory</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <header class="bg-body-tertiary">
      <div class="img">
        <img
          src="Social_Media_Chatting_Online_Blank_Profile_Picture_Head_And_Body_Icon_People_Standing_Icon_Grey_Background_generated.jpg"
          alt=""
        />
      </div>
      <div class="profil">
        <h5>Dony Abriansyah Utoyo</h5>
        <p>Front End Developer</p>
        <a class="btn btn-primary" href="#" role="button">Kontak</a>
        <a class="btn btn-light" href="#" role="button">Resume</a>
      </div>
      <div class="resume">
        <div>
          <p><strong>availability</strong></p>
          <p><strong>Usia</strong></p>
          <p><strong>Lokasi</strong></p>
          <p><strong>Pengalaman</strong></p>
          <p><strong>Email</strong></p>
        </div>
        <div>
          <p>: Full Time</p>
          <p>: 25</p>
          <p>: Bangkalan</p>
          <p>: Kurang Dari 1 Tahun</p>
          <p>: donyabriansyah@icloud.com</p>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Form Start -->
    <form class="bg-body-tertiary">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Name"
        />
        <label for="formGroupExampleInput" class="form-label">Role</label>
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Role"
        />
        <label for="formGroupExampleInput" class="form-label"
          >Availability</label
        >
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Availability"
        />
        <label for="formGroupExampleInput" class="form-label">Age</label>
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Age"
        />
        <label for="formGroupExampleInput" class="form-label">Lokasi</label>
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Lokasi"
        />
        <label for="formGroupExampleInput" class="form-label"
          >Years Experience</label
        >
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Years Experience"
        />
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input
          type="text"
          class="form-control"
          id="formGroupExampleInput"
          placeholder="input Email"
        />
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-success" type="button">Submit</button>
      </div>
    </form>
    <!-- Form End -->
    <!-- JS Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
