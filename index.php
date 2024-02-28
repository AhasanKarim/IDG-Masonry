<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahasan's Gallery</title>
  <link rel="stylesheet" href="styles.css">
  
</head>
<body>
  <nav id="navbar">
    <label class="switch">
      <input type="checkbox" onchange="toggleNightMode()">
      <span class="slider round"></span>
    </label>
  </nav>
  
  <div class="masonry-gallery">
    <?php
      $directory = 'resources/';
      $images = glob($directory . '*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF}', GLOB_BRACE);
      foreach($images as $image) {
        echo '<img src="'.$image.'" alt="">';
      }
    ?>
  </div>
  <footer>
    <p>&copy; Ahasan Karim 2024</p>
  </footer>
  <script src="scripts.js"></script>
</body>
</html>
