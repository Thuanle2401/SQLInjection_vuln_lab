<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT name, email FROM users WHERE name = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    // echo "<pre>Database: " . $dbname . "</pre>";
    // echo "<pre>Query: $sql</pre>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $first = $row["name"];
            $email = $row["email"];
            echo "<pre>Name: {$first}\nEmail: {$email}</pre>";
        }
    } else {
        echo "<pre>Invalid username or password!</pre>";
    }
}
?> 

<?php
// include 'config/database.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "SELECT id, name, email FROM users WHERE name = '$username' AND password = '$password'";
//     $result = $conn->query($sql);

//     echo "<pre>Database: " . $dbname . "</pre>";
//     echo "<pre>Query: $sql</pre>";

//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             // $id = $row["id"] ?? '';
//             // $first = $row["name"] ?? '';
//             // $email = $row["email"] ?? '';
//             $id = $row["id"];
//             $first = $row["name"];
//             $email = $row["email"];
//             echo "<pre>ID: {$id}\nName: {$first}\nEmail: {$email}</pre>";
//         }
//     } else {
//         echo "<pre>Invalid username or password!</pre>";
//     }
// }
?>