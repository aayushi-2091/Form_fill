<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show images</title>
</head>

<body>
    <form action="form.php" method="POST">
        <button
            style="background-color: aqua; border-radius: 10px; cursor: pointer; box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);">Add images</button>
    </form>
    <div>
        <?php
        include '_dbconnect.php'; // Connect to the database
        
        // Check if user_id is set in the URL
        if (isset($_GET['user_id'])) {
            $user_id = $_GET['user_id'];
        
            // Fetch user details from the form_input table
            $sql_user = "SELECT * FROM `form_input` WHERE `Sno` = '$user_id'";
            $result_user = mysqli_query($conn, $sql_user);
            $user = mysqli_fetch_assoc($result_user); // Fetch user data
        
            // Fetch images from the image table associated with this user
            $sql_images = "SELECT * FROM `image` WHERE `Form_id` = '$user_id'";
            $result_images = mysqli_query($conn, $sql_images);
        
            // Check if user exists
            if ($user) {
                // Display the images
                echo '<h2>Uploaded Images:</h2>';
                if (mysqli_num_rows($result_images) > 0) {
                    while ($image = mysqli_fetch_assoc($result_images)) {
                        $img_path = $image['Path'];
                        $img_name = $image['Name'];
        
                        // Display image
                        echo '<div>';
                        echo '<p>Image Name: ' . $img_name . '</p>';
                        echo "<img src='" . $img_path . "' alt='" . $img_name . "' style='width:200px;height:auto;'>";
                        echo '</div><br>';
                    }
                } 
                else {
                    echo '<p>No images uploaded for this user.</p>';
                }
            } 
            else {
                echo 'User not found.';
            }
        } 
        else {
            echo 'No user ID provided.';
        }
        ?>
    </div>
</body>
</html>