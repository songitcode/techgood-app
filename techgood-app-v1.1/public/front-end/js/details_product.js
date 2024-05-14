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

// Thay đổi ảnh nhỏ qua to để xem chi tiết
document.addEventListener("DOMContentLoaded", function () {
    const smallImages = document.querySelectorAll(".img-small img");

    smallImages.forEach(function (img) {
        img.addEventListener("click", function () {
            const largeImage = document.querySelector(".imgs-right img");
            largeImage.src = img.src;
            largeImage.alt = img.alt;
        });
    });
});
// Cụm đánh giá sao
document.addEventListener("DOMContentLoaded", function () {
    const starClusters = document.querySelectorAll('.star');

    starClusters.forEach(function (cluster, index) {
        cluster.addEventListener('click', function () {
            document.querySelectorAll('.star-review').forEach(star => star.classList.remove(
                'checked'));

            cluster.querySelectorAll('.star-review').forEach(star => star.classList.add(
                'checked'));

            document.getElementById('starRating').value = index + 1;
        });
    });
});

// Tăng giảm số lượng
document.addEventListener("DOMContentLoaded", function () {
    const minusButton = document.querySelector('.minus');
    const plusButton = document.querySelector('.plus');
    const numbersDiv = document.querySelector('.numbers');
    const quantityInput = document.getElementById('quantity');
    const maxQuantity = 5; // Số lượng tối đa cho phép

    let quantity = parseInt(numbersDiv.textContent);

    minusButton.addEventListener('click', function () {
        if (quantity > 1) {
            quantity--;
            numbersDiv.textContent = quantity;
            quantityInput.value = quantity;
        }
    });

    plusButton.addEventListener('click', function () {
        if (quantity < maxQuantity) {
            quantity++;
            numbersDiv.textContent = quantity;
            quantityInput.value = quantity;
        } else {
            alert("Chỉ được tăng tối đa là 5 sản phẩm");
        }
    });
});

