function myFunction(rut) {
     var RUT = rut.split("-");
     var elRut = RUT[0].toArray();
     var factor = 2;
     var suma = 0;
     var dv;
     for(i=(elRut.length-1); i>=0; i--){
         suma += parseInt(elRut[i])*parseInt(factor);
         factor++;
         if(factor>7){factor=2;}
     }
     dv = 11 -(suma % 11);
     if(dv == 11){
         dv = 0;
     }else if (dv == 10){
         dv = "K";
     }
     if(RUT[1] == 'k'){RUT[1]= 'K';}
     if(dv == RUT[1]){
         alert("El rut es válido!!");
         return true;
     }else{         
         alert("El rut es incorrecto");
         return false;
         }
}
