function formValidation(){
    var check = true;
    if(document.getElementById("certificateNo").value == "") {
        check = false;
        alert("Please enter certificate no");
    }
    else if(document.getElementById("fullName").value == "") {
        check = false;
        alert("Please enter full name");
    }

    return check;
}