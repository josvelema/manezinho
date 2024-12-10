<head>
  <title>Azores Restaurant | Delicious Portuguese Cuisine</title>
  <meta name="description" content="Visit our restaurant on the beautiful Azores islands and enjoy authentic Portuguese cuisine made with fresh, local ingredients. We offer a wide variety of dishes, including seafood, meats, and vegetarian options. Reservations are recommended.">
  <meta name="keywords" content="Azores, restaurant, Portuguese, cuisine, seafood, meats, vegetarian, reservations">
</head>

<head>
  <?php
  $page_title = "Azores Restaurant | Delicious Portuguese Cuisine";
  $page_description = "Visit our restaurant on the beautiful Azores islands and enjoy authentic Portuguese cuisine made with fresh, local ingredients. We offer a wide variety of dishes, including seafood, meats, and vegetarian options. Reservations are recommended.";
  $page_keywords = "Azores, restaurant, Portuguese, cuisine, seafood, meats, vegetarian, reservations";

  echo "<title>" . $page_title . "</title>";
  echo "<meta name='description' content='" . $page_description . "'>";
  echo "<meta name='keywords' content='" . $page_keywords . "'>";
  ?>
</head>
<?php
// Connect to the database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database_name";

$dsn = "mysql:host=$host;dbname=$dbname";
$pdo = new PDO($dsn, $user, $password);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $location = $_POST['location'];
  $device = $_POST['device'];
  $previous_site = $_POST['previous_site'];
  $number_of_visits = $_POST['number_of_visits'];
  $last_visit = $_POST['last_visit'];

  // Insert the data into the database
  $sql = "INSERT INTO visitors (location, device, previous_site, number_of_visits, last_visit) VALUES (?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$location, $device, $previous_site, $number_of_visits, $last_visit]);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    // Send the data to the server using Ajax
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "visitor_data.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
      console.log(this.responseText);
    };
    xhr.send(`location=${navigator.location}&device=${navigator.platform}&previous_site=${document.referrer}&number_of_visits=1&last_visit=${new Date().toISOString().slice(0, 19).replace('T', ' ')}`);
  });
  </script>
</head>
<body>
  <!-- Your website content goes here -->
</body>
</html>
/*
  Code based on advice from chatGPT, a large language model trained by OpenAI.
  Knowledge cutoff: 2021-09
  Browsing: disabled
*/