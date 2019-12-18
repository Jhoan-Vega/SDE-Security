function habilitar(value){
    if(value == "1" || value == true){
      document.getElementById("idsub_permisos").disabled=false;
    }else{
      document.getElementById("idsub_permisos").disabled=true;
      document.getElementById("idsub_permisos").options.item(0).selected = 'selected';
    }
  }