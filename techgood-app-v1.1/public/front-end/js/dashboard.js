document.addEventListener("DOMContentLoaded", function() {
    const showMenuButton = document.querySelector('.show-menu');
    const menuNav = document.querySelector('.menu-nav');

    // Xử lý sự kiện khi click vào nút show-menu
    showMenuButton.addEventListener('click', function() {
        // Toggle class để hiện/ẩn menu-nav
        menuNav.classList.toggle('menu-nav-visible');
    });
});
