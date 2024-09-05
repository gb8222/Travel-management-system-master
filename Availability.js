const h1Element = document.querySelector('h1');

h1Element.addEventListener('click', function() {
    h1Element.style.color = 'red';
});


const networkStatusElement = document.getElementById('networkStatus');


window.addEventListener('load', checkNetworkStatus);
window.addEventListener('online', checkNetworkStatus);
window.addEventListener('offline', checkNetworkStatus);

function checkNetworkStatus() {
    if (navigator.onLine) {
        networkStatusElement.textContent = 'You are online.';
    } else {
        networkStatusElement.textContent = 'You are offline.';
    }
}