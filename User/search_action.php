<?php 

$servername = "localhost";
$username = "root";
$password = "root";
$db = "membership_project";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";

// $user_name = $_POST['user_name'];
// $membership_id = $_POST['membership_id'];


// $sql = "SELECT * FROM user_info WHERE id = $user_name"; 
$query = "SELECT * FROM financial_year_fees"; 


// $result = $conn->query($sql);

// if ($result->num_rows > 0){

// $row = $result->fetch_assoc();

// $password = $row["password"];
// $mobile_no = $row["mobile_no"];
// $emai_id = $row["emai_id"];
// $effective_from_date = $row["effective_from_date"];
// $effective_to_date = $row["effective_to_date"];
// $description = $row["description"];
// $days = $row["days"];

// }else {
// 	echo "Not Found";
// }

if ($is_query_run = mysqli_query($conn,$query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = $is_query_run->fetch_assoc()) 
    { 
        // these four line is for four column 
        echo $query_executed['id'].' '; 
        echo $query_executed['membership_type'].' '; 
        echo $query_executed['year_of_membership'].' '; 
        echo $query_executed['yearly_charges'].'<br>'; 
    } 
} 
else
{ 
    echo "Error in execution!"; 
} 

?>