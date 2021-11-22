
var username = document.getElementById("username");
let password = document.getElementById("password");

function check() {
        var radios = document.getElementsByName("shipping");
        for (var i = 0; i < (radios.length); i++) {
                if (radios[i].checked) {
                        return true;
                }
        }

        return false;
}
function checkfrom() {
        if (username.value.length == 0) {
                alert("Username is empty");
                return false;
        }

        else if (password.value.length == 0) {
                alert("Password is empty");
                return false;
        }
        else if (check() == false) {
                alert("Haven't selected shipping option");
                return false;
        }





}
