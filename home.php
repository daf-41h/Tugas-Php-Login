<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Tugas PHP | Home</title>

    <!-- CDN TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="h-screen flex items-center justify-center bg-slate-950">
    <div class="text-white flex flex-col">
      <h2 class="text-2xl font-medium">Welcome <?php echo $username; ?> To | Landing Page</h2>
    </div>
  </body>
</html>
