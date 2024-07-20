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
    // Mendapatkan semua tombol dan elemen counter
    const counters = document.querySelectorAll('.counter');
    const decreaseButtons = document.querySelectorAll('.decrease');
    const increaseButtons = document.querySelectorAll('.increase');

    // Menyimpan nilai awal untuk setiap counter
    const counterValues = {};

    // Inisialisasi nilai counter
    counters.forEach(counter => {
        const counterId = counter.getAttribute('data-counter');
        counterValues[counterId] = parseInt(counter.textContent, 10);
    });

    // Fungsi untuk memperbarui nilai counter
    function updateCounter(counterId, newValue) {
        document.querySelector(`.counter[data-counter="${counterId}"]`).textContent = newValue;
    }

    // Menambahkan event listener untuk tombol kurangi
    decreaseButtons.forEach(button => {
        button.addEventListener('click', () => {
            const counterId = button.getAttribute('data-counter');
            const currentValue = counterValues[counterId];
            if (currentValue > 0) {
                counterValues[counterId] = currentValue - 1;
                updateCounter(counterId, counterValues[counterId]);
            }
        });
    });

    // Menambahkan event listener untuk tombol tambah
    increaseButtons.forEach(button => {
        button.addEventListener('click', () => {
            const counterId = button.getAttribute('data-counter');
            counterValues[counterId] = counterValues[counterId] + 1;
            updateCounter(counterId, counterValues[counterId]);
        });
    });
});