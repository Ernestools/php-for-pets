const link = document.getElementById('logout');

function clearAllCookies() {
    // Split document.cookie into individual cookies
    const cookies = document.cookie.split(';');

    // Loop through and clear each cookie
    for (let cookie of cookies) {
        const cookieName = cookie.split('=')[0].trim();
        document.cookie = cookieName + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }
}

link.addEventListener('click', function(event) {
    event.preventDefault();
    console.log('Link clicked, but navigation is prevented.');
    clearAllCookies();
    window.location.href = "?route=home";
});