const images = ["pho1.png", "pho2.png", "pho3.png"];
let currentIndex = 0;

function showImage(index) {
    const imageElement = document.querySelector(".pho-image");
    imageElement.src = images[index];
}

function prevImage() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
    showImage(currentIndex);
}

function nextImage() {
    currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
    showImage(currentIndex);
}

document.addEventListener("DOMContentLoaded", () => {
    showImage(currentIndex);
});



