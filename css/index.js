function validate() {
    var nv = /[A-Za-z]/;
    var name = document.getElementById("name").value;
    var flag= 0 ;
    if(nv.test(name)) {
        document.getElementById("name").style.border = 0;
        document.getElementById("checkname").innerHTML = "";
    } else {
        document.getElementById("name").style.border = "2px solid red";
        document.getElementById("checkname").innerHTML = "<br>Enter only characters for name";
    }
    var jntuc = /[0-9A-Za-z]{10}/;
    var jntu = document.getElementById("jntuno").value;
    var flag= 0 ;
    if(jntuc.test(name)) {
        document.getElementById("jntuno").style.border = 0;
        document.getElementById("checkjntu").innerHTML = "";
    } else {
        document.getElementById("jntuno").style.border = "2px solid red";
        document.getElementById("checkjntu").innerHTML = "<br>Enter JNTU number correctly";
        flag = 1;
    }
    var pv = /[0-9]{10}/;
    var phno = document.getElementById("phno").value;
    var flag= 0 ;
    if(pv.test(phno)) {
        document.getElementById("phno").style.border = 0;
        document.getElementById("checknum").innerHTML = "";
    } else {
        document.getElementById("phno").style.border = "2px solid red";
        document.getElementById("checknum").innerHTML = "<br>Enter only numbers for Contact number";
        flag = 1;
    }

    if(flag==1) {
        return false;
    }
}