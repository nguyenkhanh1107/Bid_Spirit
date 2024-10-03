document.addEventListener('DOMContentLoaded', function () {
    const imageItems = document.querySelectorAll('.image-item');
    let currentIndex = 0;

    function updateModalContent() {
        if (!imageItems || imageItems.length === 0) {
            console.error("No image items found.");
            return;
        }

        const currentItem = imageItems[currentIndex];

        if (!currentItem) {
            console.error(`Item at index ${currentIndex} is undefined.`);
            return;
        }

        const currentImage = currentItem.getAttribute('data-image');
        const currentDescription = currentItem.innerHTML;

        document.getElementById("modalImage").src = currentImage;
        document.getElementById("descriptionContent").innerHTML = currentDescription;
    }

    function prevImage() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : imageItems.length - 1;
        updateModalContent();
    }

    function nextImage() {
        currentIndex = (currentIndex < imageItems.length - 1) ? currentIndex + 1 : 0;
        updateModalContent();
    }

    // Thêm sự kiện click cho các nút
    document.getElementById('prevButton').addEventListener('click', prevImage);
    document.getElementById('nextButton').addEventListener('click', nextImage);

    // Khởi tạo lần đầu
    updateModalContent();
});
