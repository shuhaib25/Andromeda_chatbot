
    const slideOut = document.getElementById('slide-out');
    const profileLink = document.getElementById('profile-link');

    profileLink.addEventListener('click', function() {
      profileLink.classList.toggle('active');
      slideOut.classList.toggle('show');
    });
