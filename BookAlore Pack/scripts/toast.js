var logoutToast = new bootstrap.Toast(document.getElementById('logoutToast'));
var logoutBtn = document.getElementById('logoutBtn');

logoutBtn.addEventListener('click', function () {
    logoutToast.show();
});