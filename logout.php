<?php 
// Start the session
session_start();

// Delete the session
session_destroy();

echo "<script>
    alert('Terima Kasih');
    location.href='index.php';
    </script>";
?>