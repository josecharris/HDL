let charge_conductor = ()=>{
	let select_cedula = document.getElementById("slc_conductor_cedula");
	let input_nombre = document.getElementById("conductor_nombre");
	let input_ciudad = document.getElementById("conductor_ciudad");
	let input_residencia = document.getElementById("conductor_residencia");
	let input_telefono = document.getElementById("conductor_celular");

	var xhr = new XMLHttpRequest();

	if(select_cedula.value == "default"){
		input_nombre.value = "";
        input_ciudad.value = "";
        input_residencia.value = "";
        input_telefono.value = "";
	}

	xhr.open("GET","recive.php ? opt=1 & cedula="+select_cedula.value,true);

	xhr.onreadystatechange = function(){
        if (xhr.readyState==4 && xhr.status==200) {
            var info = JSON.parse(xhr.responseText);
            input_nombre.value = info[1];
            input_ciudad.value = info[2];
            input_residencia.value = info[3];
            input_telefono.value = info[4];
        }
    };

	xhr.send(null); 
};