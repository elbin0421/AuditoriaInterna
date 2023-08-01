
window.onload = function () {
    document.getElementById("inver1").focus();
}


//var inver1 = document.getElementById('inver1').value;
function calculaPorcentajes1(inver1){

    //porcentajes 1
    document.getElementById("semanal2").value=((inver1*0.5)/100);
    document.getElementById("retiro2").value=(((inver1*0.5)/100)*5);
    document.getElementById("total2").value=(((inver1*0.5)/100)*5)*4;
}


function calculaPorcentajes2(inver1){

    //porcentajes 1
    document.getElementById("semanal1").value=((inver1*0.5)/100);
    document.getElementById("retiro1").value=(((inver1*0.5)/100)*5);
    document.getElementById("total1").value=(((inver1*0.5)/100)*5)*4;
}