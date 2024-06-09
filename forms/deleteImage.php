<?php
include 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image_id = $_POST['image_id'];
    $image_path = "../" . $_POST['image_path'];

    // Delete the image file from the server
    if (file_exists($image_path)) {
        unlink($image_path);
    } else {
        exit("File not found: " . $image_path);
    }

    // Delete the image record from the database
    $sql = "DELETE FROM gallery_images WHERE id = $image_id";
    if ($conn->query($sql) === true) {
        echo "Image successfully deleted"; // Debug message

        // Include SweetAlert library
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        
        // Use SweetAlert instead of regular alert
        echo "<script type='text/javascript'>
    
                Swal.fire({
                    title: 'Success!',
                    text: 'Image Successfully Deleted',
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
        echo("Error deleting image: " . $conn->error);
    }

    $conn->close();
    
}
?>
