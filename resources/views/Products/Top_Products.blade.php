<div class="slider-frame">
    <div class="slide-images">
        <div class="img-container">
            <img src="images/image 1.jpg" alt="Slide 1">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/intel 1.jpg') }}" alt="Slide 2">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/gpu 1.jpg') }}" alt="Slide 3">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/ram.jpg') }}" alt="Slide 4">
        </div>
        <div class="img-container">
            <img src="{{ URL('images/motherboard.png') }}" alt="Slide 5">
        </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const slideContainer = document.querySelector(".slide-images");
        const slideImages = document.querySelector(".slide-images");
        let currentIndex = 0;
        let startX;
        let isSwiping = false;

        function showSlide(index) {
            const translateValue = -index * 100 + "%";
            slideImages.style.transform = "translateX(" + translateValue + ")";
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % 5;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + 5) % 5; // Ensure positive index
            showSlide(currentIndex);
        }

        function handleStart(event) {
            if (event.type === "touchstart") {
                startX = event.touches[0].clientX;
            } else {
                startX = event.clientX;
            }
            isSwiping = true;
            event.preventDefault(); // Prevent default behavior to avoid page scrolling
        }

        function handleMove(event) {
            if (!isSwiping) return;

            const currentX = event.type === "touchmove" ? event.touches[0].clientX : event.clientX;
            const diffX = currentX - startX;

            if (Math.abs(diffX) > 50) { // Adjust the sensitivity as needed
                if (diffX > 0) {
                    prevSlide();
                } else {
                    nextSlide();
                }
                startX = null;
                isSwiping = false;
            }
            event.preventDefault(); // Prevent default behavior to avoid page scrolling
        }

        function handleEnd() {
            startX = null;
            isSwiping = false;
        }

        slideContainer.addEventListener("touchstart", handleStart);
        slideContainer.addEventListener("touchmove", handleMove);
        slideContainer.addEventListener("touchend", handleEnd);

        slideContainer.addEventListener("mousedown", handleStart);
        slideContainer.addEventListener("mousemove", handleMove);
        slideContainer.addEventListener("mouseup", handleEnd);

        // Automatic slideshow
        setInterval(nextSlide, 5000);

        // Optional: Pause slideshow on hover
        slideContainer.addEventListener("mouseenter", function () {
            clearInterval(intervalId);
        });

        slideContainer.addEventListener("mouseleave", function () {
            intervalId = setInterval(nextSlide, 5000);
        });
    });
</script>
