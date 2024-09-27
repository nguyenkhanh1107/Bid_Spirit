function toggleSearch() {
    const searchContainer = document.getElementById('search-container');
    const searchIcon = document.querySelector('.search-icon');

    if (searchContainer.style.display === 'none' || searchContainer.style.display === '') {
        searchContainer.style.display = 'block'; // Hiện thanh tìm kiếm
        searchIcon.style.display = 'none'; // Ẩn biểu tượng kính lúp
    } else {
        searchContainer.style.display = 'none'; // Ẩn thanh tìm kiếm
        searchIcon.style.display = 'block'; // Hiện biểu tượng kính lúp
    }
}