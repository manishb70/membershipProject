<?php

include("./db.php");
session_start();

include("./navbar.php");

$user_id  = $_SESSION["user_id"];

$sql = "SELECT * from user_info where id = $user_id ";



$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);



// var_dump($row);









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .container {
        padding: 20px;
        background-color: #f8f9fa;
    }

    .profile-header h2 {
        font-size: 2rem;
        color: #333;
        margin-bottom: 20px;
    }

    .profile-info {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
    }

    .profile-card {
        flex: 1;
        background-color: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .profile-card h3 {
        font-size: 1.5rem;
        color: #495057;
        margin-bottom: 10px;
    }

    .profile-card p {
        font-size: 1rem;
        color: #212529;
    }

    .profile-actions {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
    }

    .btn-edit,
    .btn-logout {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-logout {
        background-color: #dc3545;
    }

    .btn-edit:hover,
    .btn-logout:hover {
        opacity: 0.9;
    }
</style>

<body>




    <div class="container">
        <div class="profile-header">
            <h2>User Profile</h2>
        </div>

        <div class="profile-info">
            <div class="profile-card">
                <h3>Personal Details</h3>
                <p><strong>User name:</strong> <?php echo $row['user_name'];  ?></p>
                <p><strong>Mobile:</strong> <?php echo $row['mobile_no'];  ?></p>
                <p><strong>Email ID:</strong> <?php echo $row['emai_id'];  ?></p>
            </div>

            <div class="profile-card">
                <h3>Membership Details</h3>
                <p><strong>Membership ID:</strong> <?php echo $row['membership_id'];  ?></p>
                <p><strong>Effective From:</strong> <?php echo $row['membership_id'];  ?></p>
                <p><strong>Effective To:</strong> <?php echo $row['effective_to_date'];  ?></p>
                <p><strong>Description:</strong> <?php echo $row['description'];  ?></p>
            </div>
        </div>

        <div class="profile-actions">
            <!-- <button class="btn-edit">Edit Profile</button> -->
            <a href="./logout.php" class="btn-logout">Logout</a>
        </div>
    </div>

</body>

</html>