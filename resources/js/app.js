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

document.getElementById('showNotification').addEventListener('click', function () {
    document.getElementById('notification').classList.remove('notification-hidden');
    document.getElementById('notification').classList.add('notification-visible');
});

document.getElementById('hideNotification').addEventListener('click', function () {
    document.getElementById('notification').classList.remove('notification-visible');
    document.getElementById('notification').classList.add('notification-hidden');
});

document.addEventListener('click', function (event) {
    var notification = document.getElementById('notification');
    var showNotificationButton = document.getElementById('showNotification');

    if (!notification.contains(event.target) && !showNotificationButton.contains(event.target)) {
        notification.classList.remove('notification-visible');
        notification.classList.add('notification-hidden');
    }
});