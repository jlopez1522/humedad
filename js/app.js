var tabla;
//funcion que se ejecuta al inicio

function init()
{
	listar();
    
	$("#formulario").on("submit",function(e)
	{
		buscar(e);
	})
}

//Función limpiar 
function limpiar()
{
	$("#busqueda").val("");
}


//Funcion cancelarform
function cancelarform()
{
	limpiar();

}

//Funcion Listar
function listar()
{	

	$.post("ajax/medicion.php?op=listar&id=",function(r){
		$("#resultado_busqueda").html(r);
	});
	
}
//Funcion para guardar o editar

function buscar(e)
{
    e.preventDefault(); //No se activará la accion predeterminada del evento
    $("#btnGuardar").prop("disabled",true);

    var busqueda = $("#busqueda").val();

    if(busqueda){
    
        $.ajax({

            url: "https://nominatim.openstreetmap.org/search?format=json&q="+busqueda,
            type: "GET",
            contentType: false,
            processData: false,

            success: function(datos)
            {

                if(datos[0]){

                    var lat = datos[0]['lat'];
                    var lon = datos[0]['lon'];
                    
                    var humedad_valor = valorHumedad(busqueda,lat,lon);

                    var humedad = 'muy buena';

                    console.log(humedad_valor);
                    
                    



                }else{
                    alert(datos);
                }
            }
        });
    }else{
        alert("Debe ingresar una ciudad");
    }    

    limpiar();
}
//Funcion ubicacion mapa

function guardar(data){

    $.ajax({

        url: "ajax/medicion.php?op=guardaryeditar",
        method: "POST",
        data: data,
        success: function(datos)
        {
            alert(datos);
            
        }
    });

}

function mapa(lat,lon,hum){

    var map = L.map('map').setView([lat, lon], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lon]).addTo(map)
        .bindPopup('La humedad de este lugar es de '+hum+'%')
        .openPopup();

}

function valorHumedad(ciudad,lat,lon){

    $.ajax({

        url: "https://api.openweathermap.org/data/2.5/weather?lat="+lat+"&lon="+lon+"&appid=0efd7ffc1c96b4673f344c2c71e28090",
        method: "GET",
        success: function(datos)
        {
            ubicar(ciudad,lat,lon,datos.main.humidity)
        }
    });

}

function ubicar(ciudad,lat,lon,hum){
    mapa(lat,lon,hum);
    var data = {ciudad: ciudad, lat:lat, lat:lat, lon:lon, humedad:hum};                    
    guardar(data);
}

init();