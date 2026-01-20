// function changeView() {
//     var signUpBox = document.getElementById("student");
//     var signInBox = document.getElementById("slog");

//     signUpBox.classList.toggle("d-none");
//     signInBox.classList.toggle("d-none");
// }

// function changeView2() {
//     var signUpBox = document.getElementById("teach");
//     var signInBox = document.getElementById("tlog");

//     signUpBox.classList.toggle("d-none");
//     signInBox.classList.toggle("d-none");
// }

function create() {
    var fname = document.getElementById("f");
    var lname = document.getElementById("l");
    var email = document.getElementById("e");
    var password = document.getElementById("p");
    var mobile = document.getElementById("m");
    var school = document.getElementById("s");
    var grade = document.getElementById("gr");
    var gender = document.getElementById("ge");

    var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("p", password.value);
    f.append("m", mobile.value);
    f.append("s", school.value);
    f.append("gr", grade.value);
    f.append("ge", gender.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                document.getElementById("msg").innerHTML = t;
                document.getElementById("msg").className = "alert alert-success";
                document.getElementById("msgdiv").className = "d-block";
            } else {
                document.getElementById("msg").innerHTML = t;
                document.getElementById("msgdiv").className = "d-block";
            }
        }
    }

    r.open("POST", "studentNewAcc.php", true);
    r.send(f);
}
var sv;
function signin() {
    var email = document.getElementById("e2");
    var password = document.getElementById("p2");
    var rememberme = document.getElementById("r");

    var f = new FormData();
    f.append("e2", email.value);
    f.append("p2", password.value);
    f.append("r", rememberme.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "home.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "studentSigninProcess.php", true);
    r.send(f);
}

function verification() {
    var email = document.getElementById("e2");

    var f = new FormData();
    f.append("e2", email.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                var adminVerificationModal = document.getElementById("verificationModal");
                sv = new bootstrap.Modal(adminVerificationModal);
                sv.show();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "studentVerification.php", true);
    r.send(f);
}

function verify2() {
    var verification = document.getElementById("vcode");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                sv.hide();
                window.location = "home.php";
            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "studentVerificationProcess.php?v=" + verification.value, true);
    r.send();
}
// function create2(){
//     var fname = document.getElementById("tf");
//     var lname = document.getElementById("tl");
//     var email = document.getElementById("te");
//     var password = document.getElementById("tp");
//     var mobile = document.getElementById("tm");
//     var school = document.getElementById("ts");
//     var gender = document.getElementById("ge");

//     var f = new FormData();
//     f.append("tf", fname.value);
//     f.append("tl", lname.value);
//     f.append("te", email.value);
//     f.append("tp", password.value);
//     f.append("tm", mobile.value);
//     f.append("ts", school.value);
//     f.append("ge", gender.value);

//     var r = new XMLHttpRequest();

//     r.onreadystatechange = function () {
//         if (r.readyState == 4) {
//             var t = r.responseText;
//             if (t == "success") {
//                 document.getElementById("msg2").innerHTML = t;
//                 document.getElementById("msg2").className = "alert alert-success";
//                 document.getElementById("msgdiv2").className = "d-block";
//             } else {
//                 document.getElementById("msg2").innerHTML = t;
//                 document.getElementById("msgdiv2").className = "d-block";
//             }
//         }
//     }

//     r.open("POST", "teacherNewAcc.php", true);
//     r.send(f);
// }

function teachsignin() {
    var email = document.getElementById("te2");
    var password = document.getElementById("tp2");
    var rememberme = document.getElementById("tr");

    var f = new FormData();
    f.append("te2", email.value);
    f.append("tp2", password.value);
    f.append("tr", rememberme.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "teacherhome.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "teacherSigninProcess.php", true);
    r.send(f);
}

var bm;
function forgotPassword() {

    var email = document.getElementById("e2");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {

                alert("Verification code has sent to your Email. Please check your inbox");
                var m = document.getElementById("forgotPasswordModal");
                bm = new bootstrap.Modal(m);
                bm.show();

            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "forgotPassword.php?e=" + email.value, true);
    r.send();

}

function showPassword() {

    var np = document.getElementById("np");
    var npb = document.getElementById("npb");

    if (np.type == "password") {

        np.type = "text";
        npb.innerHTML = "Hide";

    } else {

        np.type = "password";
        npb.innerHTML = "Show";

    }

}

function showPassword2() {

    var rnp = document.getElementById("rnp");
    var rnpb = document.getElementById("rnpb");

    if (rnp.type == "password") {

        rnp.type = "text";
        rnpb.innerHTML = "Hide";

    } else {

        rnp.type = "password";
        rnpb.innerHTML = "Show";

    }

}

function resetPassword() {

    var email = document.getElementById("e2");
    var np = document.getElementById("np");
    var rnp = document.getElementById("rnp");
    var vcode = document.getElementById("vc");

    var f = new FormData();
    f.append("e", email.value);
    f.append("n", np.value);
    f.append("r", rnp.value);
    f.append("v", vcode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                alert("Your Password Updated");
                bm.hide();
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "resetPassword.php", true);
    r.send(f);

}

function signout() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload();
            }
        }
    };

    r.open("GET", "signoutProcess.php", true);
    r.send();

}

function signout2() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location.reload();
            }
        }
    };

    r.open("GET", "signout2Process.php", true);
    r.send();

}
var av;
function adminVerification() {
    var email = document.getElementById("e2");

    var f = new FormData();
    f.append("e2", email.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                var adminVerificationModal = document.getElementById("verificationModal");
                av = new bootstrap.Modal(adminVerificationModal);
                av.show();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "adminVerification.php", true);
    r.send(f);
}

function verify() {
    var verification = document.getElementById("vcode");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                av.hide();
                window.location = "adminPanel.php";
            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "verificationProcess.php?v=" + verification.value, true);
    r.send();
}

function acedamicSignin() {
    var email = document.getElementById("e3");
    var password = document.getElementById("p3");
    var rememberme = document.getElementById("r3");

    var f = new FormData();
    f.append("e3", email.value);
    f.append("p3", password.value);
    f.append("r3", rememberme.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "acedamicHome.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "acedamicSigninProcess.php", true);
    r.send(f);
}


var acm;
function forgotPassword2() {

    var email = document.getElementById("e3");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {

                alert("Verification code has sent to your Email. Please check your inbox");
                var m = document.getElementById("forgotPasswordModal");
                acm = new bootstrap.Modal(m);
                acm.show();

            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "forgotPassword2.php?e=" + email.value, true);
    r.send();

}

function resetPassword2() {

    var email = document.getElementById("e3");
    var np = document.getElementById("np");
    var rnp = document.getElementById("rnp");
    var vcode = document.getElementById("vc");

    var f = new FormData();
    f.append("e", email.value);
    f.append("n", np.value);
    f.append("r", rnp.value);
    f.append("v", vcode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "success") {
                alert("Your Password Updated");
                acm.hide();
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "resetPassword2.php", true);
    r.send(f);

}

function createac() {
    var fname = document.getElementById("acf");
    var lname = document.getElementById("acl");
    var email = document.getElementById("ace");
    var password = document.getElementById("acp");
    var mobile = document.getElementById("acm");
    var gender = document.getElementById("acg");

    var f = new FormData();
    f.append("acf", fname.value);
    f.append("acl", lname.value);
    f.append("ace", email.value);
    f.append("acp", password.value);
    f.append("acm", mobile.value);
    f.append("acg", gender.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                document.getElementById("msg3").innerHTML = t;
                document.getElementById("msg3").className = "alert alert-success";
                window.location = "acedamiclogin.php";
                document.getElementById("msgdiv3").className = "d-block";
            } else {
                document.getElementById("msg3").innerHTML = t;
                document.getElementById("msgdiv3").className = "d-block";
            }
        }
    }

    r.open("POST", "acedamicNewAcc.php", true);
    r.send(f);
}

function changeimg() {
    var view = document.getElementById("img");//img tag
    var file = document.getElementById("profileimg");//file chooser

    file.onchange = function () {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }
}

function uploadfiles() {
    // var view = document.getElementById("viewImg");//img tag
    var file = document.getElementById("fileUpload");//file chooser

    file.onchange = function () {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;
    }
}

function uploadfiles2(){
    var no = document.getElementById("no");
    var subject = document.getElementById("sub");
    var date = document.getElementById("date");
    var file = document.getElementById("assignmentUpload");

    var f = new FormData();
    f.append("no",no);
    f.append("sub",subject);
    f.append("date",date);

    if (file.files.length == 0) {

        var confirmation = confirm("Are you sure You don't want to select any file?");

        if (confirmation) {
            alert("you have not selected any files.");
        }

    } else {
        f.append("assignmentUpload", file.files[0]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                alert("Upload Success.")
                window.location.reload();
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "uploadProcess.php", true);
    r.send(f);
}

function done() {
    var no = document.getElementById("no");
    var title = document.getElementById("ti");
    // var file = document.getElementById("fileUpload");

    var f = FormData();
    f.append("no", no.value);
    f.append("ti", title.value);
    // f.append("file", file.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                echo("Success");
            } else {
                alert(t);
            }

        }
    }

    r.open("POST", "doneProcess.php", true);
    r.send(f);
}

// function sendDetails(){
//     var email = document.getElementById("e");

//     var f = new FormData();
//     f.append("e",email.value);

//     var r = new XMLHttpRequest();

//     r.onreadystatechange = function(){
//        if(r.readyState==4){
//         var t = r.responseText;
//         alert(t);
//        }
//     }

//     r.open("POST","sendDetails.php",true);
//     r.send(f);
// }