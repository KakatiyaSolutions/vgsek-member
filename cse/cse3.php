<?php
$con = mysqli_connect('srv1328.hstgr.io', 'u629694569_vcpkacin_web', 'Kakatiya@1243', 'u629694569_vcpkacin_web');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query9 = "SELECT * FROM contact_hod WHERE department = 'CSE'";
$result10 = mysqli_query($con, $query9);

// Assuming the database connection has already been established
if (mysqli_num_rows($result10) > 0) {
    echo '<div class="accordion" id="accordionExample2">';
    $count = 1;

    // Loop through the fetched data
    while ($row = mysqli_fetch_assoc($result10)) {
        // Fetching individual data fields
        $name = $row['name'];
        $designation = $row['designation'];

        // Check if image exists and process it
        if (!empty($row['image'])) {
            // If the image is stored as BLOB, base64_encode it
            $imageData = base64_encode($row['image']);
            $imageSrc = "data:image/jpeg;base64," . $imageData;
        } else {
            // If no image, provide a default image or null
            $imageSrc = "path/to/default/image.jpg"; // Update with your default image path
        }

        $message = $row['message'];
        $phone = $row['phone'];
        $email = $row['email'];
        
        // Dynamically create collapse IDs for each HOD section
        $collapseId = "collapse" . $count;
        $headingId = "heading" . $count;
        
        // Output each HOD section
        echo '
        <div class="row hod-start">
            <div class="col-lg-4">
                <div class="hod-img">
                    <!-- Dynamically set image path -->
                    <img src="' . $imageSrc . '" 
                        alt="faculty_img" width="100" class="img-fluid faculty-img-sec" style="border-radius: 50%">
                    <div class="cse-hod">
                        <!-- Dynamically set name and designation -->
                        <h4>' . htmlspecialchars($name) . '</h4>
                        <p>' . htmlspecialchars($designation) . '</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="contact-info">
                    <!-- Dynamically set message -->
                    <p>' . nl2br(htmlspecialchars($message)) . '</p>

                    <div class="cse-hod2">
                        <h4>Contact</h4>
                        <!-- Dynamically set contact info -->
                        <p><b>Mobile Number:</b> ' . htmlspecialchars($phone) . '</p>
                        <p><b>Email:</b> ' . htmlspecialchars($email) . '</p>
                    </div>
                </div>
            </div>
        </div>';
        
        $count++; // Increment the count for next iteration
    }

    echo '</div>'; // Close the accordion div
} else {
    echo "<p>No event details found for the selected branch.</p>";
}
?>

<!-- Use this as temporary file for fetching the dtaa in middle of the border don't use this for actuall purpose -->