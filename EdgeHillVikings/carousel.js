document.addEventListener("DOMContentLoaded", function () {
  const images = document.querySelectorAll(".carousel img");
  let currentIndex = 0;

  function showImage(index) {
    images.forEach((img, i) => {
      if (i === index) {
        img.style.display = "block";
      } else {
        img.style.display = "none";
      }
    });
  }

  function switchImage(direction) {
    if (direction === "prev") {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
    } else {
      currentIndex = (currentIndex + 1) % images.length;
    }
    showImage(currentIndex);
  }

  showImage(currentIndex);

  document.querySelector(".left").addEventListener("click", () => switchImage("prev"));
  document.querySelector(".right").addEventListener("click", () => switchImage("next"));

  setInterval(() => switchImage("next"), 8000); // Change image every 3 seconds (adjust as needed)
});
