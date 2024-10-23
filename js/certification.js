var btnValidate = document.getElementById('btnValidate');
btnValidate.addEventListener('click', function() {
    document.location.href = '/online_vaccination_portal/php/CertificateValidate.php';
});

var btnIssue = document.getElementById('btnIssue');
btnIssue.addEventListener('click', function() {
    document.location.href = '/online_vaccination_portal/php/CertificateIssue.php';
});