function fnRegistrationValidate() {
    //debugger
    if (document.getElementById('nic').value == "") {
        alert("Please enter the NIC No.");
        return false;
    } else if (document.getElementById('nic').value.length != 10) {
        alert("NIC should be 10 characters.");
        return false;
    } else if (document.getElementById('nic').value.slice(-1) != "V" && document.getElementById('nic').value.slice(-1) != "v") {
        alert("NIC last character should be 'V'.");
        return false;
    } else if (document.getElementById('fName').value == "") {
        alert("Please enter the First name.");
        return false;
    } else if (document.getElementById('lName').value == "") {
        alert("Please enter the Last name.");
        return false;
    } else if (document.getElementById('address1').value == "") {
        alert("Please enter the Address 1.");
        return false;
    } else if (document.getElementById('address2').value == "") {
        alert("Please enter the Address 2.");
        return false;
    } else if (document.getElementById('city').value == "") {
        alert("Please enter the City.");
        return false;
    } else if (document.getElementById('province').value == "") {
        alert("Please enter the Province.");
        return false;
    } else if (document.getElementById('country').value == "") {
        alert("Please enter the Country.");
        return false;
    } else if (document.getElementById('postalCode').value == "") {
        alert("Please enter the PostalCode.");
        return false;
    } else if (document.getElementById('gender').value == "default") {
        alert("Please select the Gender.");
        return false;
    } else if (document.getElementById('age').value == "") {
        alert("Please enter the Age.");
        return false;
    } else if (document.getElementById('phone').value == "") {
        alert("Please enter the Phone.");
        return false;
    } else if (document.getElementById('phone').value.length != 10) {
        alert("Phone No. should be 10 characters.");
        return false;
    } else if (document.getElementById('email').value == "") {
        alert("Please enter the Email.");
        return false;
    } else if (!document.getElementById('email').value.includes("@") || !document.getElementById('email').value.includes(".")) {
        alert("Please enter a valid Email.");
        return false;
    } else if (document.getElementById('nationality').value == "") {
        alert("Please enter the Nationality.");
        return false;
    } else if (document.getElementById('profession').value == "") {
        alert("Please enter the Profession.");
        return false;
    } else if (document.getElementById('doseNo').value == "") {
        alert("Please enter the Dose No.");
        return false;
    } else if (document.getElementById('appointmentDate').value == "") {
        alert("Please enter the Appointment Date.");
        return false;
    } else {
        return true;
    }
}