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
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star-rating i');

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const rating = this.getAttribute('data-rating');
            document.getElementById('starRating').value = rating;

            // Update star colors
            stars.forEach(s => {
                if (parseInt(s.getAttribute('data-rating')) <= rating) {
                    s.classList.add('selected');
                } else {
                    s.classList.remove('selected');
                }
            });
        });
    });
});

// Tăng giảm số lượng
document.addEventListener("DOMContentLoaded", function () {
    const minusButton = document.querySelector('.minus');
    const plusButton = document.querySelector('.plus');
    const numbersDiv = document.querySelector('.numbers');
    const quantityInput = document.getElementById('quantity');
    const soluongconlai = document.querySelector('.soluongconlai');

    const maxQuantity = soluongconlai.textContent; // Số lượng tối đa cho phép

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
            alert("Sản phẩm còn lại là: " + maxQuantity);
        }
    });
});

//
document.addEventListener('DOMContentLoaded', (event) => {
    const toggleButton = document.querySelector('.toggle-description');
    toggleButton.addEventListener('click', toggleDescription);
});

function toggleDescription() {
    const shortDescription = document.querySelector('.short-description');
    const fullDescription = document.querySelector('.full-description');
    const toggleButton = document.querySelector('.toggle-description');

    if (fullDescription.style.display === 'none') {
        fullDescription.style.display = 'inline';
        shortDescription.style.display = 'none';
        toggleButton.textContent = 'Ẩn bớt';
    } else {
        fullDescription.style.display = 'none';
        shortDescription.style.display = 'inline';
        toggleButton.textContent = 'Xem thêm';
    }
}
