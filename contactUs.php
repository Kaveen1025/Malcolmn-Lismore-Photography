<!-- ======= Header ======= -->
<?php
$page_title = "Contact Us";
$current_page = "contact";
include 'header.php';
?>
<!-- End Header -->

    <main id="main">
      <!-- ======= Contact Section ======= -->
      <div class="contactImage">
        <img src="./assets/img/contact.jpg" alt="Snow" class="contactI" />
        <div class="centeredText"><h4 class="contactUS">Contact Us...</h4></div>
      </div>
      <section id="contact" class="contact">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="info-wrap">
                <div class="row">
                  <div class="col-lg-4 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>
                      23 Rose Street, Edinburgh <br />
                      Scotland, EH2 2QA
                    </p>
                  </div>

                  <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>
                      info@malcolmnlismore.com<br />contact@malcolmnlismore.com
                    </p>
                  </div>

                  <div class="col-lg-4 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+131 555 1234<br />+141 678 5678</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
              <form
                action="./forms/contact.php"
                method="post"
                class="contactform"
                role="form"
                id="contactForm"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="mobile"
                      class="form-control"
                      id="mobile"
                      placeholder="Your Mobile Number"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="date"
                      class="form-control"
                      id="date"
                      name="date"
                    />
                  </div>
                </div>

                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="location"
                    id="location"
                    placeholder="Your location"
                    required
                  />
                </div>

                <div class="form-group mt-3">
                  <select
                    id="inputEvent"
                    class="form-control"
                    name="event_type"
                    required
                  >
                    <option selected>Select Event Type</option>
                    <option>Rugged Scottish Landscape Photography</option>
                    <option>Natural Wildlife Photography</option>
                    <option>Coastal Bird Photography</option>
                    <option>Wedding Photography</option>
                    <option>Portrait Photography</option>
                    <option>Special Event Photography</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="additional_details"
                    rows="5"
                    placeholder="Additional Details"
                    required
                  ></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" style="margin-top:30px">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
<?php
include 'footer.php';
?>

