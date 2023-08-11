<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TRAVEL & TOURS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- HEADER SECTION -->
    <section class="header">
      <a href="index.html" class="logo"><i class="fa-solid fa-paper-plane"></i> Travel & Tours</a>
      <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="package.html">Packages</a>
        <a href="book.php">Book</a>
      </nav>
      <div id="menu-btn" class="fa-solid fa-bars"></div>
    </section>

    <div class="heading" style="background:url(img/about-3.jpg) no-repeat">
        <h1>Book Now</h1>
    </div>

    <!-- BOOK SECTION -->
    <section class="booking">
        <h1 class="heading-title">Book Your Trip!</h1>
        <form action="book-form.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Your name here..." name="name">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="name@example.com" name="email">
                </div>
                <div class="inputBox">
                    <span>Mobile Phone :</span>
                    <input type="number" placeholder="Your mobile phone..." name="phone">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Your address here..." name="address">
                </div>
                <div class="inputBox">
                    <span>Places to visit :</span>
                    <input type="text" placeholder="Where you want to go..." name="location">
                </div>
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Departure :</span>
                    <input type="date" name="departure">
                </div>
                <div class="inputBox">
                    <span>Adult :</span>
                    <input type="number" placeholder="Number of adults..." name="adult">
                </div>
                <div class="inputBox">
                    <span>Child :</span>
                    <input type="number" placeholder="Number of children..." name="child">
                </div>
                <div class="inputBox">
                    <span>Type of Tour :</span>
                    <select name="title" class="form-select" aria-label="Default select example">
                      <option selected disabled>Choose Tour</option>
                      <?php
                        include_once 'config.php';
                        $sql = "SELECT * FROM tour_title ORDER BY id_tour";
                        $sql_run = $db->query($sql);

                        if ($sql_run->num_rows > 0){
                          while ($row = $sql_run->fetch_assoc()) {
                            echo '<option value="'.$row['id_tour'].'">'.$row['tour_title'].'</option>';
                          }
                        } else {
                          echo '<option value="">Tour title not available</option>';
                        }
                      ?>
                    </select>
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="btnSave">
        </form>
    </section>

    <!-- FOOTER SECTION -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Quick Links</h3>
          <a href="index.html"><i class="fa-solid fa-angle-right"></i> Home</a>
          <a href="about.html"><i class="fa-solid fa-angle-right"></i> About</a>
          <a href="package.html"><i class="fa-solid fa-angle-right"></i> Packages</a>
          <a href="book.php"><i class="fa-solid fa-angle-right"></i> Book</a>
        </div>
        <div class="box">
          <h3>Extra Links</h3>
          <a href="#"><i class="fa-solid fa-angle-right"></i> Ask Questions</a>
          <a href="#"><i class="fa-solid fa-angle-right"></i> FAQ</a>
          <a href="#"><i class="fa-solid fa-angle-right"></i> Privacy Policy</a>
          <a href="#"><i class="fa-solid fa-angle-right"></i> Terms of Use</a>
        </div>
        <div class="box">
          <h3>Contact Info</h3>
          <a href="#"><i class="fa-solid fa-phone"></i> +603 - 8892 1485</a>
          <a href="#"><i class="fa-solid fa-envelope"></i> admin@travel-tours.com</a>
          <a href="#"><i class="fa-solid fa-location-dot"></i> Cyberjaya, Malaysia</a>
        </div>
        <div class="box">
          <h3>Follow Us</h3>
          <a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a>
          <a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a>
          <a href="#"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
        </div>
      </div>
      <div class="credit">Created By <span>Sha Harun</span> | All Right Reserved</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
