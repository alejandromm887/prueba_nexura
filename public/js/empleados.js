function valida_envia(){
    //valido el nombre
    if (document.form.nombre.value.length==0){
           alert("Tiene que escribir su nombre");
           document.form.nombre.focus()
           return 0;
    }
    if (document.form.descripcion.value.length==0){
        alert("Tiene que escribir una descripcion");
        document.form.descripcion.focus()
        return 0;
 }
 if (document.form.correo.value.length==0){
    alert("Tiene que escribir su correo");
    document.form.correo.focus()
    return 0;
}
    document.fvalida.submit();
}