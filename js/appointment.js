var btnRegister = document.getElementById('btnRegister');
btnRegister.addEventListener('click', function () {
    if (document.getElementById('confirmation').checked) {
        document.location.href = '/online_vaccination_portal/php/Registration.php';
    } else {
        alert("Please confirm your age !");
    }
});

var btnView = document.getElementById('btnView');
btnView.addEventListener('click', function () {
    document.location.href = '/online_vaccination_portal/php/ViewAppointments.php';
});


// ================================

