function formValidation(){
    var check = true;
    if(document.getElementById("nic").value == "") {
        check = false;
        alert("Please enter NIC");
    }
    else if(document.getElementById("fullName").value == "") {
        check = false;
        alert("Please enter full name");
    }
    else if(document.getElementById("gender").value == "") {
        check = false;
        alert("Please enter gender");
    }
    else if(document.getElementById("address").value == "") {
        check = false;
        alert("Please enter address");
    }
    else if(document.getElementById("noOfDose").value == "") {
        check = false;
        alert("Please enter no of dose");
    }
    else {
        if(document.getElementById("noOfDose").value == 1){
            if(document.getElementById("firstDose").value == "default"){
                check = false;
                alert("Please select first dose");
            }
        }
        else if(document.getElementById("noOfDose").value == 2){
            if(document.getElementById("firstDose").value == "default" || document.getElementById("secondDose").value == "default"){
                check = false;
                alert("Please select dose");
            }
        }
        else if(document.getElementById("noOfDose").value == 3){
            if(document.getElementById("firstDose").value == "default" || document.getElementById("secondDose").value == "default"
                || document.getElementById("thirdDose").value == "default"){
                check = false;
                alert("Please select dose");
            }
        }
        else if(document.getElementById("noOfDose").value == 4){
            if(document.getElementById("firstDose").value == "default" || document.getElementById("secondDose").value == "default"
                || document.getElementById("thirdDose").value == "default" || document.getElementById("fourthDose").value == "default"
            ){
                check = false;
                alert("Please select dose");
            }
        }
    }
    
    return check;
}