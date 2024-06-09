<?php
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "photography";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
    if ($conn->connect_error) {
           
            die("Connection failed: " . $conn->connect_error);
         
    } 

    if(isset($_POST["submit"])){
        $image_name = $_POST["imageName"];
        $image_filter = $_POST["imageFilter"];
        $image_category = $_POST["inputCategory"];
      
        //For uploads photos
        $upload_dir = "../assets/uploads/"; //this is where the uploaded photo stored
        $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
        $upload_dir.$_FILES["imageUpload"]["name"];
        $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
        $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
        $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
        $upload_ok = 0;
      
        if(file_exists($upload_file)){
            echo "<script>alert('The file already exist')</script>";
            $upload_ok = 0;
        }else{
            $upload_ok = 1;
            if($check !== false){
              $upload_ok = 1;
              if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif' || $imageType == 'webp'){
                  $upload_ok = 1;
              }else{
                  echo '<script>alert("please change the image format")</script>';
              }
            }else{
                echo '<script>alert("The photo size is 0 please change the photo ")</script>';
                $upload_ok = 0;
            }
        }
      
        if($upload_ok == 0){
           echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
        }else{
            if($image_name != "" && $image_filter !="Select Image Filter" && $image_category != "Select Image Category"){
                move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

                $sql = "INSERT INTO `gallery_images`(image_name,image_filter,image_category, product_image)
                VALUES('$image_name','$image_filter','$image_category','$product_image')";

                    // Execute the statement
    if ($conn->query($sql) == true) {
        echo "Image added successfully"; // Debug message

        // Include SweetAlert library
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        
        // Use SweetAlert instead of regular alert
        echo "<script type='text/javascript'>
    
                Swal.fire({
                    title: 'Success!',
                    text: 'Your Image Uploaded Successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log('Redirecting...'); // Debug message
                        window.location.href = './../portfolio.php';  // Redirect to another page
                    }
                    else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    }
                    
                });
              </script>";
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }
            }
        }
      }


    $conn->close();
?>
