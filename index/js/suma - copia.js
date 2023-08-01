
window.onload = function () {
    document.getElementById("inver").focus();
}



function onKeyPressBlockChars(e,numero){                
    var key = window.event ? e.keyCode : e.which;
    var keychar = String.fromCharCode(key);
    reg = /\d|\./;
    if (numero.indexOf(".")!=-1 && keychar=="."){
        return false;
    }else{
        return reg.test(keychar);
    }               
}

function calculaPorcentajes(numero){
    //porcentajes semna 1
    document.getElementById("semanal").value=((numero*1.5)/100)*5;
    document.getElementById("retiro").value=(((numero*1.5)/100)*5)*10/100;
    document.getElementById("total").value=(((numero*1.5)/100)*5)-((((numero*1.5)/100)*5)*10/100);
        //residuo semana 1
        var total = document.getElementById('total').value;
        var reinv = document.getElementById('reinv').value;

        if(total!=='' && reinv!==''){
            var suma = parseFloat(total)-parseFloat(reinv);
            document.getElementById('residuo').value = suma;

        } 
}
  //onkeypress= function key() {
    //document.getElementById("reinv").focus();
//}

    function sumar(){

        var total = document.getElementById('total').value;
        var reinv = document.getElementById('reinv').value;
        var inver = document.getElementById('inver').value;

        if(total!=='' && reinv!==''){
            var suma = parseFloat(total)-parseFloat(reinv);
            //semana 1 residuo despues de reinvertir
            document.getElementById('residuo').value = suma;

            //inversion semana 2
            var suma2 = parseFloat(inver)+parseFloat(reinv); 
            document.getElementById('inver2').value = suma2;


            //porcentaje 2
            document.getElementById("semanal2").value=(suma2*0.015)*5;
            document.getElementById("retiro2").value=((suma2*0.015)*5)*0.1;
            document.getElementById("total2").value=((suma2*0.015)*5)-(((suma2*0.015)*5)*0.1);
        }
        //residuo 2 antes de reinvertir
        var total2 = document.getElementById('total2').value;
        var residuo1 = document.getElementById('residuo').value;

        var suma3 = parseFloat(total2)+parseFloat(residuo1);
        document.getElementById('residuo2').value = suma3;

//total reinversion SEMANA 1
var m1 = document.getElementById('reinv').value;
document.getElementById('reinvM1').value = m1; 

document.getElementById("reinv2").focus(); 

    }

        function sumar3(){
            var total2 = document.getElementById('total2').value;
            var reinv2 = document.getElementById('reinv2').value;
            var residuo1 = document.getElementById('residuo').value;
            var inver2 = document.getElementById('inver2').value;


            if(total!=='' && reinv!==''){
            var suma3 = parseFloat(total2)-parseFloat(reinv2)+parseFloat(residuo1);
            //semana 2 residuo despues de reinvertir
            document.getElementById('residuo2').value = suma3;

            //inversion semana 3
            var suma4 = parseFloat(reinv2)+parseFloat(inver2);
            document.getElementById('inver3').value = suma4;

            //porcentaje 3
            document.getElementById("semanal3").value=(suma4*0.015)*5;
            document.getElementById("retiro3").value=((suma4*0.015)*5)*0.1;
            document.getElementById("total3").value=((suma4*0.015)*5)-(((suma4*0.015)*5)*0.1);

         //residuo 3 antes de reinvertir
        var total3 = document.getElementById('total3').value;
        var residuo2 = document.getElementById('residuo2').value;

        var suma5 = parseFloat(total3)+parseFloat(residuo2);
        document.getElementById('residuo3').value = suma5;


            }  
            //total reinversion SEMANA 2
var m2 = document.getElementById('reinvM1').value;
var S2 = parseFloat(reinv2)+parseFloat(m2);
document.getElementById('reinvM1').value = S2; 

document.getElementById("reinv3").focus(); 

        }
        function sumar4(){
            var total3 = document.getElementById('total3').value;
            var reinv3 = document.getElementById('reinv3').value;
            var residuo2 = document.getElementById('residuo2').value;
            var inver3 = document.getElementById('inver3').value;


            if(total!=='' && reinv!==''){
            var sumar3 = parseFloat(total3)-parseFloat(reinv3)+parseFloat(residuo2);
            //semana 2 residuo despues de reinvertir
            document.getElementById('residuo3').value = sumar3;

            //inversion semana 4
            var sumar4 = parseFloat(reinv3)+parseFloat(inver3);
            document.getElementById('inver4').value = sumar4;

            //porcentaje 4
            document.getElementById("semanal4").value=(sumar4*0.015)*5;
            document.getElementById("retiro4").value=((sumar4*0.015)*5)*0.1;
            document.getElementById("total4").value=((sumar4*0.015)*5)-(((sumar4*0.015)*5)*0.1);

            //rango oro
            var inver4 = document.getElementById('inver4').value;
            document.getElementById("oro1").value=(inver4*0.05);


         //residuo 4 antes de reinvertir
        var total4 = document.getElementById('total4').value;
        var residuo3 = document.getElementById('residuo3').value;

        var suma5 = parseFloat(total4)+parseFloat(residuo3);
        document.getElementById('residuo4').value = suma5;


            }  
            //restante del mes
        var oro1 = document.getElementById('oro1').value;
        var residuo4 = document.getElementById('residuo4').value;
        var resdM1 = parseFloat(residuo4)-parseFloat(oro1);
        document.getElementById('restM1').value = resdM1; 

        //total reinversion SEMANA 3
var m3 = document.getElementById('reinvM1').value;
var S3 = parseFloat(reinv3)+parseFloat(m3);
document.getElementById('reinvM1').value = S3; 

document.getElementById("reinv4").focus(); 

        

        }
        function sumar5(){
            var total4 = document.getElementById('total4').value;
            var reinv4 = document.getElementById('reinv4').value;
            var residuo3 = document.getElementById('residuo3').value;
            var inver4 = document.getElementById('inver4').value;
            var oro1 = document.getElementById('oro1').value;


            if(total!=='' && reinv!==''){
            var sumar5 = parseFloat(total4)-parseFloat(reinv4)+parseFloat(residuo3)-parseFloat(oro1);
            //semana  residuo despues de reinvertir
            document.getElementById('residuo4').value = sumar5;

            //inversion semana 5
            var sum5 = parseFloat(reinv4)+parseFloat(inver4);
            document.getElementById('inver5').value = sum5;

            //porcentaje 5
            document.getElementById("semanal5").value=(sum5*0.015)*5;
            document.getElementById("retiro5").value=((sum5*0.015)*5)*0.1;
            document.getElementById("total5").value=((sum5*0.015)*5)-(((sum5*0.015)*5)*0.1);

         //residuo 5 antes de reinvertir
        var total5 = document.getElementById('total5').value;
        var residuo4 = document.getElementById('residuo4').value;

        var res5 = parseFloat(total5)+parseFloat(residuo4);
        document.getElementById('residuo5').value = res5;
            } 
            //total reinversion SEMANA 4
var m4 = document.getElementById('reinvM1').value;
var S4 = parseFloat(reinv4)+parseFloat(m4);
document.getElementById('reinvM1').value = S4; 
//restante del mes
var resmes = document.getElementById('restM1').value; 
var resM1 = parseFloat(resmes)-parseFloat(reinv4);
document.getElementById('restM1').value = resM1; 

document.getElementById("reinv5").focus(); 

        }
        
    
        
//=======================================segundo mes==================================
        function sem5(){
            var total5 = document.getElementById('total5').value;
            var reinv5 = document.getElementById('reinv5').value;
            var residuo4 = document.getElementById('residuo4').value;
            var inver5 = document.getElementById('inver5').value;
            
            if(total!=='' && reinv!==''){
            var summ5 = parseFloat(total5)-parseFloat(reinv5)+parseFloat(residuo4);
            //semana  residuo 5 despues de reinvertir
            document.getElementById('residuo5').value = summ5;

            //inversion semana 6
            var ivs6 = parseFloat(reinv5)+parseFloat(inver5);
            document.getElementById('inver6').value = ivs6;

            //porcentaje 6
            document.getElementById("semanal6").value=(ivs6*0.015)*5;
            document.getElementById("retiro6").value=((ivs6*0.015)*5)*0.1;
            document.getElementById("total6").value=((ivs6*0.015)*5)-(((ivs6*0.015)*5)*0.1);

         //residuo 6 antes de reinvertir
        var total6 = document.getElementById('total6').value;
        var residuo5 = document.getElementById('residuo5').value;

        var res6 = parseFloat(total6)+parseFloat(residuo5);
        document.getElementById('residuo6').value = res6;
            } 
            //total reinversion SEMANA 1
var RS1 = document.getElementById('reinv5').value;
document.getElementById('reinvM2').value = RS1;

document.getElementById("reinv6").focus();   

        }

        //============
        function sem6(){
            var total6 = document.getElementById('total6').value;
            var reinv6 = document.getElementById('reinv6').value;
            var residuo5 = document.getElementById('residuo5').value;
            var inver6 = document.getElementById('inver6').value;
            
            if(total!=='' && reinv!==''){
            var summ6 = parseFloat(total6)-parseFloat(reinv6)+parseFloat(residuo5);
            //semana  residuo 6 despues de reinvertir
            document.getElementById('residuo6').value = summ6;

            //inversion semana 7
            var ivs7 = parseFloat(reinv6)+parseFloat(inver6);
            document.getElementById('inver7').value = ivs7;

            //porcentaje 7
              document.getElementById("semanal7").value=(ivs7*0.015)*5;
              document.getElementById("retiro7").value=((ivs7*0.015)*5)*0.1;
             document.getElementById("total7").value=((ivs7*0.015)*5)-(((ivs7*0.015)*5)*0.1);

         //residuo 7 antes de reinvertir
        var total7 = document.getElementById('total7').value;
        var residuo6 = document.getElementById('residuo6').value;

        var res7 = parseFloat(total7)+parseFloat(residuo6);
        document.getElementById('residuo7').value = res7;
            } 
            //total reinversion SEMANA 2 MES 2
var SM1 = document.getElementById('reinvM2').value;
var RS2 = parseFloat(SM1)+parseFloat(reinv6);
document.getElementById('reinvM2').value = RS2;  

document.getElementById("reinv7").focus(); 

        }

        //============
        function sem7(){
            var total7 = document.getElementById('total7').value;
            var reinv7 = document.getElementById('reinv7').value;
            var residuo6 = document.getElementById('residuo6').value;
            var inver7 = document.getElementById('inver7').value;
            
            if(total!=='' && reinv!==''){
            var summ7 = parseFloat(total7)-parseFloat(reinv7)+parseFloat(residuo6);
            //semana  residuo 7 despues de reinvertir
            document.getElementById('residuo7').value = summ7;

            //inversion semana 8
            var ivs8 = parseFloat(reinv7)+parseFloat(inver7);
            document.getElementById('inver8').value = ivs8;

            //porcentaje 8
              document.getElementById("semanal8").value=(ivs8*0.015)*5;
              document.getElementById("retiro8").value=((ivs8*0.015)*5)*0.1;
              document.getElementById("total8").value=((ivs8*0.015)*5)-(((ivs8*0.015)*5)*0.1);

         //residuo 8 antes de reinvertir
        var total8 = document.getElementById('total8').value;
        var residuo7 = document.getElementById('residuo7').value;

        var res8 = parseFloat(total8)+parseFloat(residuo7);
        document.getElementById('residuo8').value = res8;

        //rango oro
            var inver8 = document.getElementById('inver8').value;
            document.getElementById("oro2").value=(inver8*0.05);
            } 

//restante del mes
        var oro2 = document.getElementById('oro2').value;
        var residuo8 = document.getElementById('residuo8').value;
        var resdM2 = parseFloat(residuo8)-parseFloat(oro2);
        document.getElementById('restM2').value = resdM2;

            //total reinversion SEMANA 3 MES 2
var SM2 = document.getElementById('reinvM2').value;
var RS3 = parseFloat(SM2)+parseFloat(reinv7);
document.getElementById('reinvM2').value = RS3;  

document.getElementById("reinv8").focus(); 

}
 //============
        function sem8(){
            var total8 = document.getElementById('total8').value;
            var reinv8 = document.getElementById('reinv8').value;
            var residuo7 = document.getElementById('residuo7').value;
            var inver8 = document.getElementById('inver8').value;
            var oro2 = document.getElementById('oro2').value;
            
            if(total!=='' && reinv!==''){
            var summ8 = parseFloat(total8)-parseFloat(reinv8)+parseFloat(residuo7)-parseFloat(oro2);
            //semana  residuo 7 despues de reinvertir
            document.getElementById('residuo8').value = summ8;

            //inversion semana 8
            var ivs9 = parseFloat(reinv8)+parseFloat(inver8);
            document.getElementById('inver9').value = ivs9;

            //porcentaje 9
             document.getElementById("semanal9").value=(ivs9*0.015)*5;
             document.getElementById("retiro9").value=((ivs9*0.015)*5)*0.1;
             document.getElementById("total9").value=((ivs9*0.015)*5)-(((ivs9*0.015)*5)*0.1);

             //rango oro
            //var inver8 = document.getElementById('inver8').value;
            //document.getElementById("oro2").value=(inver8*0.05);

         //residuo 8 antes de reinvertir
            var total9 = document.getElementById('total9').value;
            var residuo8 = document.getElementById('residuo8').value;

            var res9 = parseFloat(total9)+parseFloat(residuo8);
            document.getElementById('residuo9').value = res9;

        
            } 

//restante del mes
        //var oro2 = document.getElementById('oro2').value;
        //var residuo8 = document.getElementById('residuo8').value;
        //var resdM2 = parseFloat(residuo8)-parseFloat(oro8);
        //document.getElementById('restM2').value = resdM2;

//restante del mes 2
var resmes2 = document.getElementById('restM2').value; 
var resM2 = parseFloat(resmes2)-parseFloat(reinv8);
document.getElementById('restM2').value = resM2;

//total reinversion SEMANA 4 MES 2
var SM4 = document.getElementById('reinvM2').value;
var RS4 = parseFloat(SM4)+parseFloat(reinv8);
document.getElementById('reinvM2').value = RS4;

document.getElementById("reinv9").focus(); 

}
//============
        function sem9(){
            var total9 = document.getElementById('total9').value;
            var reinv9 = document.getElementById('reinv9').value;
            var residuo8 = document.getElementById('residuo8').value;
            var inver9 = document.getElementById('inver9').value;
            //var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ9 = parseFloat(total9)-parseFloat(reinv9)+parseFloat(residuo8);
            //semana  residuo 9 despues de reinvertir
            document.getElementById('residuo9').value = summ9;

            //inversion semana 10
            var ivs10 = parseFloat(reinv9)+parseFloat(inver9);
            document.getElementById('inver10').value = ivs10;

            //porcentaje 10
             document.getElementById("semanal10").value=(ivs10*0.015)*5;
             document.getElementById("retiro10").value=((ivs10*0.015)*5)*0.1;
             document.getElementById("total10").value=((ivs10*0.015)*5)-(((ivs10*0.015)*5)*0.1);

         //residuo 10 antes de reinvertir
            var total10 = document.getElementById('total10').value;
            var residuo9 = document.getElementById('residuo9').value;

            var res10 = parseFloat(total10)+parseFloat(residuo9);
            document.getElementById('residuo10').value = res10;

        //rango oro
            //var inver8 = document.getElementById('inver8').value;
            //document.getElementById("oro2").value=(inver8*0.05);
            } 

//restante del mes
        //var oro2 = document.getElementById('oro2').value;
        //var residuo8 = document.getElementById('residuo8').value;
        //var resdM2 = parseFloat(residuo8)-parseFloat(oro2);
        //document.getElementById('restM2').value = resdM2;

//total reinversion SEMANA 1
//var SM4 = document.getElementById('reinv9').value;
document.getElementById('reinvM3').value = reinv9;

//restante del mes 2
//var resmes2 = document.getElementById('restM2').value; 
//var resM2 = parseFloat(resmes2)-parseFloat(reinv8);
//document.getElementById('restM2').value = resM2; 
document.getElementById("reinv10").focus(); 

}
//============
        function sem10(){
            var total10 = document.getElementById('total10').value;
            var reinv10 = document.getElementById('reinv10').value;
            var residuo9 = document.getElementById('residuo9').value;
            var inver10 = document.getElementById('inver10').value;
            //var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ10 = parseFloat(total10)-parseFloat(reinv10)+parseFloat(residuo9);
            //semana  residuo 10 despues de reinvertir
            document.getElementById('residuo10').value = summ10;

            //inversion semana 11
            var ivs11 = parseFloat(reinv10)+parseFloat(inver10);
            document.getElementById('inver11').value = ivs11;

            //porcentaje 11
             document.getElementById("semanal11").value=(ivs11*0.015)*5;
             document.getElementById("retiro11").value=((ivs11*0.015)*5)*0.1;
             document.getElementById("total11").value=((ivs11*0.015)*5)-(((ivs11*0.015)*5)*0.1);

         //residuo 11 antes de reinvertir
            var total11 = document.getElementById('total11').value;
            var residuo10 = document.getElementById('residuo10').value;

            var res11 = parseFloat(total11)+parseFloat(residuo10);
            document.getElementById('residuo11').value = res11;

        //rango oro
            //var inver8 = document.getElementById('inver8').value;
            //document.getElementById("oro2").value=(inver8*0.05);
            } 

//restante del mes
        //var oro2 = document.getElementById('oro2').value;
        //var residuo8 = document.getElementById('residuo8').value;
        //var resdM2 = parseFloat(residuo8)-parseFloat(oro2);
        //document.getElementById('restM2').value = resdM2;

//total reinversion SEMANA 2 MES 3
var SM5 = document.getElementById('reinvM3').value;
var RS5 = parseFloat(SM5)+parseFloat(reinv10);
document.getElementById('reinvM3').value = RS5;

//restante del mes 2
//var resmes2 = document.getElementById('restM2').value; 
//var resM2 = parseFloat(resmes2)-parseFloat(reinv8);
//document.getElementById('restM2').value = resM2;

document.getElementById("reinv11").focus();  

}
//============ semana 
        function sem11(){
            var total11 = document.getElementById('total11').value;
            var reinv11 = document.getElementById('reinv11').value;
            var residuo10 = document.getElementById('residuo10').value;
            var inver11 = document.getElementById('inver11').value;
            //var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ11 = parseFloat(total11)-parseFloat(reinv11)+parseFloat(residuo10);
            //semana  residuo 11 despues de reinvertir
            document.getElementById('residuo11').value = summ11;

            //inversion semana 12
            var ivs12 = parseFloat(reinv11)+parseFloat(inver11);
            document.getElementById('inver12').value = ivs12;

            //porcentaje 12
             document.getElementById("semanal12").value=(ivs12*0.015)*5;
             document.getElementById("retiro12").value=((ivs12*0.015)*5)*0.1;
             document.getElementById("total12").value=((ivs12*0.015)*5)-(((ivs12*0.015)*5)*0.1);

         //residuo 12 antes de reinvertir
            var total12 = document.getElementById('total12').value;
            var residuo11 = document.getElementById('residuo11').value;

            var res12 = parseFloat(total12)+parseFloat(residuo11);
            document.getElementById('residuo12').value = res12;

        //rango oro
            var inver12 = document.getElementById('inver12').value;
            document.getElementById("oro3").value=(inver12*0.05);
            } 

//restante del mes rebajando oro
        var oro3 = document.getElementById('oro3').value;
        var residuo12 = document.getElementById('residuo12').value;
        var resdM3 = parseFloat(residuo12)-parseFloat(oro3);
        document.getElementById('restM3').value = resdM3;

//total reinversion SEMANA 3 MES 3
var SM6 = document.getElementById('reinvM3').value;
var RS6 = parseFloat(SM6)+parseFloat(reinv11);
document.getElementById('reinvM3').value = RS6;

//restante del mes 2
//var resmes2 = document.getElementById('restM2').value; 
//var resM2 = parseFloat(resmes2)-parseFloat(reinv8);
//document.getElementById('restM2').value = resM2; 
document.getElementById("reinv12").focus(); 

}
//============ semana 
        function sem12(){
            var total12 = document.getElementById('total12').value;
            var reinv12 = document.getElementById('reinv12').value;
            var residuo11 = document.getElementById('residuo11').value;
            var inver12 = document.getElementById('inver12').value;
            var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ12 = parseFloat(total12)-parseFloat(reinv12)+parseFloat(residuo11)-parseFloat(oro3);
            //semana  residuo 12 despues de reinvertir
            document.getElementById('residuo12').value = summ12;

            //inversion semana 13
            var ivs13 = parseFloat(reinv12)+parseFloat(inver12);
            document.getElementById('inver13').value = ivs13;

            //porcentaje 13
             document.getElementById("semanal13").value=(ivs13*0.015)*5;
             document.getElementById("retiro13").value=((ivs13*0.015)*5)*0.1;
             document.getElementById("total13").value=((ivs13*0.015)*5)-(((ivs13*0.015)*5)*0.1);

         //residuo 13 antes de reinvertir
            var total13 = document.getElementById('total13').value;
            var residuo12 = document.getElementById('residuo12').value;

            var res13 = parseFloat(total13)+parseFloat(residuo12);
            document.getElementById('residuo13').value = res13;

        //rango oro
            //var inver12 = document.getElementById('inver12').value;
            //document.getElementById("oro3").value=(inver12*0.05);
            } 

//restante del mes 3
var resmes3 = document.getElementById('restM3').value; 
var resM3 = parseFloat(resmes3)-parseFloat(reinv12);
document.getElementById('restM3').value = resM3;


//total reinversion SEMANA 4 MES 3
var SM7 = document.getElementById('reinvM3').value;
var RS7 = parseFloat(SM7)+parseFloat(reinv12);
document.getElementById('reinvM3').value = RS7;

document.getElementById("reinv13").focus(); 
}
//============ semana 
        function sem13(){
            var total13 = document.getElementById('total13').value;
            var reinv13 = document.getElementById('reinv13').value;
            var residuo12 = document.getElementById('residuo12').value;
            var inver13 = document.getElementById('inver13').value;
            //var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ13 = parseFloat(total13)-parseFloat(reinv13)+parseFloat(residuo12);
            //semana  residuo 13 despues de reinvertir
            document.getElementById('residuo13').value = summ13;

            //inversion semana 14
            var ivs14 = parseFloat(reinv13)+parseFloat(inver13);
            document.getElementById('inver14').value = ivs14;

            //porcentaje 14
             document.getElementById("semanal14").value=(ivs14*0.015)*5;
             document.getElementById("retiro14").value=((ivs14*0.015)*5)*0.1;
             document.getElementById("total14").value=((ivs14*0.015)*5)-(((ivs14*0.015)*5)*0.1);

         //residuo 14 antes de reinvertir
            var total14 = document.getElementById('total14').value;
            var residuo13 = document.getElementById('residuo13').value;

            var res14 = parseFloat(total14)+parseFloat(residuo13);
            document.getElementById('residuo14').value = res14;

        //rango oro
            //var inver12 = document.getElementById('inver12').value;
            //document.getElementById("oro3").value=(inver12*0.05);
            } 

//restante del mes 3
//var resmes3 = document.getElementById('restM3').value; 
//var resM3 = parseFloat(resmes3)-parseFloat(reinv12);
//document.getElementById('restM3').value = resM3;


//total reinversion SEMANA 1 MES 4
document.getElementById('reinvM4').value = reinv13;
//var SM8 = document.getElementById('reinvM3').value;
//var RS8 = parseFloat(SM8)+parseFloat(reinv12);
//document.getElementById('reinvM3').value = RS8;

document.getElementById("reinv14").focus(); 
}
//============ semana 
        function sem14(){
            var total14 = document.getElementById('total14').value;
            var reinv14 = document.getElementById('reinv14').value;
            var residuo13 = document.getElementById('residuo13').value;
            var inver14 = document.getElementById('inver14').value;
            //var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ14 = parseFloat(total14)-parseFloat(reinv14)+parseFloat(residuo13);
            //semana  residuo 14 despues de reinvertir
            document.getElementById('residuo14').value = summ14;

            //inversion semana 15
            var ivs15 = parseFloat(reinv14)+parseFloat(inver14);
            document.getElementById('inver15').value = ivs15;

            //porcentaje 15
             document.getElementById("semanal15").value=(ivs15*0.015)*5;
             document.getElementById("retiro15").value=((ivs15*0.015)*5)*0.1;
             document.getElementById("total15").value=((ivs15*0.015)*5)-(((ivs15*0.015)*5)*0.1);

         //residuo 15 antes de reinvertir
            var total15 = document.getElementById('total15').value;
            var residuo14 = document.getElementById('residuo14').value;

            var res15 = parseFloat(total15)+parseFloat(residuo14);
            document.getElementById('residuo15').value = res15;

        //rango oro
            //var inver12 = document.getElementById('inver12').value;
            //document.getElementById("oro3").value=(inver12*0.05);
            } 

//restante del mes 3
//var resmes3 = document.getElementById('restM3').value; 
//var resM3 = parseFloat(resmes3)-parseFloat(reinv12);
//document.getElementById('restM3').value = resM3;


//total reinversion SEMANA 2 MES 4
//document.getElementById('reinvM4').value = reinv13;
var SM8 = document.getElementById('reinvM4').value;
var RS8 = parseFloat(SM8)+parseFloat(reinv14);
document.getElementById('reinvM4').value = RS8;

document.getElementById("reinv15").focus(); 
}
//============ semana 
        function sem15(){
            var total15 = document.getElementById('total15').value;
            var reinv15 = document.getElementById('reinv15').value;
            var residuo14 = document.getElementById('residuo14').value;
            var inver15 = document.getElementById('inver15').value;
            //var oro3 = document.getElementById('oro3').value;
            
            if(total!=='' && reinv!==''){
            var summ15 = parseFloat(total15)-parseFloat(reinv15)+parseFloat(residuo14);
            //semana  residuo 15 despues de reinvertir
            document.getElementById('residuo15').value = summ15;

            //inversion semana 16
            var ivs16 = parseFloat(reinv15)+parseFloat(inver15);
            document.getElementById('inver16').value = ivs16;

            //porcentaje 16
             document.getElementById("semanal16").value=(ivs16*0.015)*5;
             document.getElementById("retiro16").value=((ivs16*0.015)*5)*0.1;
             document.getElementById("total16").value=((ivs16*0.015)*5)-(((ivs16*0.015)*5)*0.1);

         //residuo 16 antes de reinvertir
            var total16 = document.getElementById('total16').value;
            var residuo15 = document.getElementById('residuo15').value;

            var res16 = parseFloat(total16)+parseFloat(residuo15);
            document.getElementById('residuo16').value = res16;

        //rango oro
            var inver16 = document.getElementById('inver16').value;
            document.getElementById("oro4").value=(inver16*0.05);
            } 

            //restante del mes rebajando oro
        var oro4 = document.getElementById('oro4').value;
        var residuo16 = document.getElementById('residuo16').value;
        var resdM4 = parseFloat(residuo16)-parseFloat(oro4);
        document.getElementById('restM4').value = resdM4;

//restante del mes 4
//var resmes3 = document.getElementById('restM3').value; 
//var resM3 = parseFloat(resmes3)-parseFloat(reinv12);
//document.getElementById('restM3').value = resM3;


//total reinversion SEMANA 3 MES 4
//document.getElementById('reinvM4').value = reinv13;
var SM9 = document.getElementById('reinvM4').value;
var RS9 = parseFloat(SM9)+parseFloat(reinv15);
document.getElementById('reinvM4').value = RS9;

document.getElementById("reinv16").focus(); 
}
//============ semana 
        function sem16(){
            var total16 = document.getElementById('total16').value;
            var reinv16 = document.getElementById('reinv16').value;
            var residuo15 = document.getElementById('residuo15').value;
            var inver16 = document.getElementById('inver16').value;
            var oro4 = document.getElementById('oro4').value;
            
            if(total!=='' && reinv!==''){
            var summ16 = parseFloat(total16)-parseFloat(reinv16)+parseFloat(residuo15)-parseFloat(oro4);
            //semana  residuo 15 despues de reinvertir
            document.getElementById('residuo16').value = summ16;

            //inversion semana 16
            //var ivs16 = parseFloat(reinv15)+parseFloat(inver15);
            //document.getElementById('inver16').value = ivs16;

            //porcentaje 16
             //document.getElementById("semanal16").value=(ivs16*0.05);
             //document.getElementById("retiro16").value=((ivs16*0.015)*5)*0.1;
             //document.getElementById("total16").value=((ivs16*0.015)*5)-(((ivs16*0.015)*5)*0.1);

         //residuo 16 antes de reinvertir
            //var total16 = document.getElementById('total16').value;
            //var residuo15 = document.getElementById('residuo15').value;

            //var res16 = parseFloat(total16)+parseFloat(residuo15);
            //document.getElementById('residuo16').value = res16;

        //rango oro
            //var inver16 = document.getElementById('inver16').value;
            //document.getElementById("oro4").value=(inver16*0.05);
            } 

//restante del mes 4
var resmes4 = document.getElementById('restM4').value; 
var resM4 = parseFloat(resmes4)-parseFloat(reinv16);
document.getElementById('restM4').value = resM4;


//total reinversion SEMANA 3 MES 4
//document.getElementById('reinvM4').value = reinv13;
var SM10 = document.getElementById('reinvM4').value;
var RS10 = parseFloat(SM10)+parseFloat(reinv16);
document.getElementById('reinvM4').value = RS10;
}



