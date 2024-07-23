import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            navbar.classList.remove('fade-in');
            navbar.classList.add('fade-out');
        } else {
            navbar.classList.remove('fade-out');
            navbar.classList.add('fade-in');
        }
        
        lastScrollTop = scrollTop;
    });
});







document.addEventListener('DOMContentLoaded', () => {
    const increaseButtons = document.querySelectorAll('.increase');
    const decreaseButtons = document.querySelectorAll('.decrease');
    const totalPriceElement = document.getElementById('total-price');

    const updateTotalPrice = () => {
        let totalPrice = 0;
        document.querySelectorAll('tr[data-price]').forEach(row => {
            const price = parseInt(row.getAttribute('data-price'));
            const quantity = parseInt(row.querySelector('.quantity').textContent);
            totalPrice += price * quantity;
        });
        totalPriceElement.textContent = totalPrice.toLocaleString();
    };

    increaseButtons.forEach(button => {
        button.addEventListener('click', () => {
            const quantitySpan = button.previousElementSibling;
            let value = parseInt(quantitySpan.textContent);
            quantitySpan.textContent = value + 1;
            updateTotalPrice();
        });
    });

    decreaseButtons.forEach(button => {
        button.addEventListener('click', () => {
            const quantitySpan = button.nextElementSibling;
            let value = parseInt(quantitySpan.textContent);
            if (value > 0) {
                quantitySpan.textContent = value - 1;
                updateTotalPrice();
            }
        });
    });
});


