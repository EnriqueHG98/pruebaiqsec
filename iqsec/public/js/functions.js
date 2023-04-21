pulsado = document.querySelector('#registro')
    
pulsado.addEventListener('click',(e)=>{

    let correo=document.getElementById('email')
    let nombre=document.getElementById('name')
    let contraseña=document.getElementById('pass')

    correo=correo.value
    nombre=nombre.value
    pass=contraseña.value

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: '/guardarUsuario',
            method:'GET',
            dataType: "json", 
            data:{correo:correo, nombre:nombre, pass:pass},
            success:function(data)
            {
                alert("registrado con exito")
            }
        });
})  