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

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $event_type = $_POST['event_type'];
    $additional_details = $_POST['additional_details'];

    // Validate date and event type fields
    if (empty($date) || $event_type == "Select Event Type") {
        echo "Error: Date and event type must be selected.";
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            
        // Use SweetAlert instead of regular alert
        echo "<script type='text/javascript'> 
        
                Swal.fire({
                    icon: 'error',
                    title: 'Failed!',
                    text: 'Date and event type must be selected.',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.history.back();  // Go back to the previous page
                });
              </script>";
        return;

        }else{
            
    $stmt ="INSERT INTO `contact_messages`(`name`, `email`, `mobile`, `date`, `location`, `event_type`, `additional_details`) VALUES ('$name','$email','$mobile','$date','$location','$event_type','$additional_details')";
    
    // Execute the statement
    if ($conn->query($stmt) == true) {
        echo "Record added successfully"; // Debug message

        // Include SweetAlert library
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        
        // Use SweetAlert instead of regular alert
        echo "<script type='text/javascript'>
    
                Swal.fire({
                    title: 'Success!',
                    text: 'Record added successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log('Redirecting...'); // Debug message
                        window.location.href = './../contactUs.php';  // Redirect to another page
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
    $conn->close();
?>
