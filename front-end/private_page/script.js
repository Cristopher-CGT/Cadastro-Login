// Quando a página for fechada, faça uma requisição no logout
window.addEventListener('beforeunload', function() {
    navigator.sendBeacon('../../back-end/logout.php');
});