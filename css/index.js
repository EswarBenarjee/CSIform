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
    if(pv.test(phno)) {
        document.getElementById("phno").style.border = 0;
        document.getElementById("checknum").innerHTML = "";
    } else {
        document.getElementById("phno").style.border = "2px solid red";
        document.getElementById("checknum").innerHTML = "<br>Enter only numbers for Contact number";
        flag = 1;
    }
    var mem = document.getElementById("cmember").value;
    if(mem == 'n') {
        document.getElementById("non-member").style.display = "block";
        document.getElementById("tranid").value = '';
        var f = check();
        if(!f) {
          document.getElementById("tranid").style.border = "2px solid red";
          document.getElementById('trancheck').innerHTML = "Please enter Transaction ID";
          flag = 1;
        } else {
          document.getElementById("tranid").style.border = "";
          document.getElementById('trancheck').innerHTML = "";
        }
    } else {
        document.getElementById("non-member").style.display = "none";
    }

    if(flag==1) {
        return false;
    }
}

function check() {
  var tranid = document.getElementById("tranid").value;
  if(tranid == '') {
    return false;
  }
  return true;
}
