<?php

// Step 1: Read the file
$content = file_get_contents("students.txt");
echo "<b>Original Content:</b><br>";
echo nl2br($content); // display with line breaks


//Step 2: Format the content
$formatted = ucwords($content);

echo "<br><br><b>Formatted Content:</b><br>";
echo nl2br($formatted);


// Step 3: Save the changes
file_put_contents("students.txt", $formatted);

echo "<br><br>Changes saved successfully!";


// Step 4: Display updated file content
$newContent = file_get_contents("students.txt");

echo "<br><br><b>Updated File Content:</b><br>";
echo nl2br($newContent);

?>
