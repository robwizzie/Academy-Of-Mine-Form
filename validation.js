function validateform() {
    var x = document.myform.email.value;
    var atposition = x.indexOf("@");
    var dotposition = x.lastIndexOf(".");
    var firstName = document.myform.firstName.value;
    var lastName = document.myform.lastName.value;
    var message = document.myform.message.value;

    if (firstName == null || firstName == "") {
        alert("First name can't be blank");
        return false;
    } else if (lastName == null || lastName == "") {
        alert("Last name can't be blank");
        return false;
    } else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
        alert("Please enter a valid e-mail address!");
        return false;
    } else if (message.length < 10) {
        alert("Message has to be longer than 10 characters");
        return false;
    }
}