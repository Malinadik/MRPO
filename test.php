<?php
// test.php - A simple PHP test script

echo "<h1>PHP Test Script Output</h1>";
echo "<p>Current Date and Time: " . date('Y-m-d H:i:s') . "</p>";

// Simulate a simple task
echo "<p>Executing a test task on the server...</p>";

$testFile = 'testfile.txt';
if (file_put_contents($testFile, "Test file created at " . date('Y-m-d H:i:s'))) {
    echo "<p>Test file created successfully: $testFile</p>";
} else {
    echo "<p>Error creating test file!</p>";
}
?>
