<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $levisStyle = $_POST["levisStyle"];
  $colorPreference = $_POST["colorPreference"];
  $age = $_POST["age"];
  $location = $_POST["location"];
  $ownedLevis = isset($_POST["ownedLevis"]) ? "Yes" : "No";
  $knowledgeLevel = $_POST["knowledgeLevel"];

  // Display the gathered information
  echo "<h2>Survey Results:</h2>";
  echo "<p><strong>Favorite Levi's Style:</strong> $levisStyle</p>";
  echo "<p><strong>Jeans Color Preference:</strong> $colorPreference</p>";
  echo "<p><strong>Age:</strong> $age</p>";
  echo "<p><strong>Location:</strong> $location</p>";
  echo "<p><strong>Owned a Pair of Levi's:</strong> $ownedLevis</p>";
  echo "<p><strong>Knowledge About Levi's:</strong> $knowledgeLevel/10</p>";
} else {
  // Invalid request
  echo "Invalid request.";
}
?>
