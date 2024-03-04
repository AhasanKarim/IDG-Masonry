<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahasan's Gallery</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
  <link rel="stylesheet" href="dist/output.css" />
  <link rel="stylesheet" href="styles.css" />
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'custom': ['Georgia', 'serif']
          }
        }
      },
      plugins: [],
    };
  </script>
  <style>
    .spinner-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(255, 255, 255, 0.9);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .spinner {
      border: 4px solid rgba(0, 0, 0, 0.1);
      width: 36px;
      height: 36px;
      border-radius: 50%;
      border-left-color: #09f;
      animation: spin 1s ease infinite;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
  
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
  <div class="max-w-screen-xl py-16 mx-auto">
    <div class="grid grid-cols-1 gap-8 text-center mx-auto">
      <div>
        <p class="font-signika"><b>Ahasan Karim</b></p>
        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
          Ahasan Karim | +1 (737)-727-9987 <br /> contact@ahasanulkarim.xyz
        </p>
        <div class="flex mx-auto">
          <div class="mx-auto space-x-6 flex mt-8 text-gray-600 dark:text-gray-300">
            <!-- Instagram Icon -->
            <a class="transition duration-300 hover:opacity-75" href="https://www.instagram.com/ahasan._.karim" target="_blank" rel="noreferrer">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7zm6.125-3a1.125 1.125 0 1 1 0 2.25 1.125 1.125 0 0 1 0-2.25z" clip-rule="evenodd"></path>
              </svg>
            </a>
            <!-- LinkedIn Icon -->
            <a class="transition duration-300 hover:opacity-75" href="https://www.linkedin.com/in/mdahasanulkarimahasan/" target="_blank" rel="noreferrer">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M19 0h-14c-2.8 0-5 2.2-5 5v14c0 2.8 2.2 5 5 5h14c2.8 0 5-2.2 5-5v-14c0-2.8-2.2-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.3c-1 0-1.8-0.8-1.8-1.8s0.8-1.8 1.8-1.8 1.8 0.8 1.8 1.8-0.8 1.8-1.8 1.8zm13.5 12.3h-3v-5.6c0-1.3 0-3-1.8-3s-2.2 1.4-2.2 2.9v5.7h-3v-11h2.9v1.5h0.1c0.4-0.7 1.3-1.5 2.7-1.5 2.9 0 3.5 1.9 3.5 4.3v6.7z"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <p class="mt-8 text-xs text-gray-600 dark:text-gray-300 text-center">
      © 2024 Developed and Designed by <a href="https://www.ahasanulkarim.xyz/">Ahasan Karim</a>
    </p>
  </div>
</footer>
<script>
    Fancybox.bind("[data-fancybox]", {});
  </script>
  <script src="dist/fade_in.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var spinner = document.getElementById('loadingSpinner');
      window.onload = function() {
        spinner.style.display = 'none';
      };
    });
  </script>
  <script>
    Fancybox.bind("[data-fancybox]", {});
  </script>
  <script src="dist/fade_in.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var spinner = document.getElementById('loadingSpinner');
      window.onload = function() {
        spinner.style.display = 'none';
      };
    });
  </script>
  <script src="scripts.js"></script>
</body>
</html>
