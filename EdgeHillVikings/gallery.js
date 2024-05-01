// (A) Function to check if all images are loaded
    function checkAllImagesLoaded(images, callback) {
      let loadedCount = 0;

      function imageLoaded() {
        loadedCount++;
        if (loadedCount === images.length) {
          callback();
        }
      }

      for (let i = 0; i < images.length; i++) {
        images[i].addEventListener('load', imageLoaded);
      }
    }

    // (B) Main function
    window.addEventListener("DOMContentLoaded", () => {
      var allImages = document.querySelectorAll(".gallery img");
      var loadingAnimation = document.querySelector(".loading");

      checkAllImagesLoaded(allImages, () => {
        loadingAnimation.style.display = 'none';
        // Now that all images are loaded, show the gallery content
        var gallery = document.querySelector(".gallery");
        gallery.style.display = 'block';
      });

      // (C) CLICK ON IMAGE TO TOGGLE FULLSCREEN
      if (allImages.length > 0) {
        for (let img of allImages) {
          img.onclick = () => img.classList.toggle("full");
        }
      }
    });