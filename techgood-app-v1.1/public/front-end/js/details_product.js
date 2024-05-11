document.addEventListener('DOMContentLoaded', function () {
    const btnSeemore = document.querySelector('.btn-seemore');
    const additionalInfo = document.querySelector('.additional-info');

    btnSeemore.addEventListener('click', function () {
        if (additionalInfo.style.display === 'none' || additionalInfo.style.display === '') {
            additionalInfo.style.display = 'block';
            btnSeemore.textContent = 'Thu Gọn';
        } else {
            additionalInfo.style.display = 'none';
            btnSeemore.textContent = 'Xem thêm';
        }
    });
});
