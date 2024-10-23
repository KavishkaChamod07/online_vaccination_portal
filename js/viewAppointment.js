var table = document.getElementById('appointments');
var rows = table.getElementsByTagName("tr");
for (var i = 0; i < rows.length; i++) {
    var currentRow = table.rows[i];
    var createClickHandler = function (row) {
        return function () {
            document.getElementById("myModal").style.display = "block";
            document.getElementById("modalAppointmentId").value = row.getElementsByTagName("td")[0].innerHTML;
            document.getElementById("modalNic").value = row.getElementsByTagName("td")[1].innerHTML;
            document.getElementById("modalName").value = row.getElementsByTagName("td")[2].innerHTML;
            document.getElementById("modalDoseNo").value = row.getElementsByTagName("td")[5].innerHTML;
            document.getElementById("modalAppointmentDate").value = row.getElementsByTagName("td")[6].innerHTML;
        };
    };
    currentRow.onclick = createClickHandler(currentRow);
}

// var btnGetData = document.getElementById('btnGetData');
// btnGetData.addEventListener('click', function () {
//     if (document.getElementById('viewNic').value == "") {
//         alert("Please enter the NIC !");
//     } else {
        
//     }
// });


//=================



// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}