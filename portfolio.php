<!-- ======= Header ======= -->
<?php
$page_title = "Portfolio";
$current_page = "portfolio";
include 'header.php';

?>

<?php

include 'forms/getAllImages.php';

$sql = "SELECT * FROM gallery_images";
$all_images = $conn->query($sql);


?>

<!-- End Header -->

    <main id="main">
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolioAll">
      <h2 class="myportfolio">My <strong>Portfolio</strong></h2>
        <div class="container">
        <div class="imagebtn">
            <button
              class="imageBtn"
              type="button"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              Upload Images
            </button>
          </div>
          <!-- Modal -->
          <div
            class="modal fade"
            id="exampleModalCenter"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true"
           
          >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">
                    Upload New Images
                  </h5>
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                  >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="imageUploadForm" action="./forms/uploadImages.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="imageName">Image Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="imageName"
                        name ="imageName"
                        placeholder="Enter image name"
                        required
                      />
                    </div>
                    <div class="form-group">
                      <label for="imageFilter">Image Filter</label>
                      <select id="imageFilter" name="imageFilter" class="form-control" required>
                        <option selected>Select Image Filter</option>
                        <option>Landscape</option>
                        <option>Wild-life</option>
                        <option>Costal-birds</option>
                        <option>Wedding</option>
                        <option>Portrait</option>
                        <option>Event</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="imageCategory">Category</label>
                      <select id="inputCategory" name="inputCategory" class="form-control" required>
                        <option selected>Select Image Category</option>
                        <option>Rugged Scottish Landscape Photography</option>
                        <option>Natural Wildlife Photography</option>
                        <option>Coastal Bird Photography</option>
                        <option>Wedding Photography</option>
                        <option>Portrait Photography</option>
                        <option>Special Event Photography</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="imageFile">Select Image</label>
                      <input
                        type="file"
                        class="form-control-file"
                        id="imageUpload"
                        name = "imageUpload"
                        required 
                        hidden
                      />
                    </div>
                    <button id="choose" onclick="upload();">Choose Image</button>
                    <button type="submit" name="submit" value="Upload" class="btn btn-primary mt-3">
                    Upload
                  </button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-Landscape">Scottish landscape</li>
                <li data-filter=".filter-Wild-life">Natural wildlife</li>
                <li data-filter=".filter-Costal-birds">Costal Birds</li>
                <li data-filter=".filter-Wedding">Wedding</li>
                <li data-filter=".filter-Portrait">Portrait</li>
                <li data-filter=".filter-Event">Special Events</li>
              </ul>
            </div>
          </div>

          <!-- Scotish Landscape -->

          <div class="row portfolio-container">
          <?php
          while($row = mysqli_fetch_assoc($all_images)){
       ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row["image_filter"]; ?>">
              <img
                src="./<?php echo ltrim($row["product_image"], "./"); ?>"
                class="img-fluid"
                alt=""
              />
              <div class="portfolio-info">
                <h4><?php echo $row["image_name"];  ?></h4>
                <p><?php echo $row["image_category"];  ?></p>
                <a
                  href="./<?php echo ltrim($row["product_image"], "./"); ?>"
                  data-gallery="portfolioGallery"
                  class="portfolio-lightbox preview-link"
                  title="Landscape 1"
                  ><i class="bx bx-plus"></i
                ></a>
              </div>
            </div>

            <?php

}
?>
       
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
     <script>
      var imagename = document.getElementById("imageName");
var filter = document.getElementById("imageFilter");
var imagecategory = document.getElementById("inputCategory");
var uploadImage = document.getElementById("imageUpload");

function upload() {
  event.preventDefault(); // Prevent the default form submission
  uploadImage.click();
}

uploadImage.addEventListener("change", function () {
  var file = this.files[0];
  if (imagename.value == "") {
    imagename.value = file.name;
  }
  choose.innerHTML = "You can change(" + file.name + ") picture";
});
     </script>
<?php
include 'footer.php';
?>