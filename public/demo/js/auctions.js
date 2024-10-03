document.addEventListener("DOMContentLoaded", function () {
    let currentIndex = 0; // Chỉ số hiện tại của slide
    const artworksGallery = document.querySelector('.artworks-gallery'); // Lấy gallery chứa ảnh
    const artworkItems = document.querySelectorAll('.artwork-item'); // Lấy tất cả các mục ảnh
    const totalItems = artworkItems.length; // Tổng số ảnh
    const itemsToShow = 4; // Số ảnh hiển thị cùng lúc
    const itemWidth = artworkItems[0].offsetWidth; // Lấy chiều rộng của một mục ảnh

    function updateGalleryPosition() {
        const newPosition = -currentIndex * itemWidth; // Tính toán vị trí mới của slider
        artworksGallery.style.transform = `translateX(${newPosition}px)`; // Di chuyển slider theo pixel
    }

    // Lắng nghe sự kiện click cho nút prev
    document.querySelector('.prev').addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateGalleryPosition();
        }
    });

    // Lắng nghe sự kiện click cho nút next
    document.querySelector('.next').addEventListener('click', () => {
        if (currentIndex < totalItems - itemsToShow) {
            currentIndex++;
            updateGalleryPosition();
        }
    });

    updateGalleryPosition(); // Thiết lập vị trí ban đầu
});
