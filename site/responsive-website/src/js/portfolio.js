var xhr=null;
function getPortfolio(typePort){
    xhr=getXHR();

    xhr.open('GET','ajax/ajaxPortfolio.php?typePort='+typePort);
    xhr.onreadystatechange=callback; //cuando sscambie la propiedad readychanged llama a callback
    xhr.send();
}

function callback(){
	if(xhr.readyState==1)
	{
	    //var cargando=document.getElementById('cargando');
	    //cargando.style.display = "block";
	    //contenedor.style.background = "url('../Imagenes/espera.gif') no-repeat center";
	} else {
		if (xhr.readyState==4) { // Readystate 4 significa que ya acabó de cargarlo
		    //var cargando=document.getElementById('cargando');
		        //cargando.style.display = "none";
		    if(xhr.status==200 || xhr.status==500){
		    	var listAjax=document.getElementById('portfolio-list');
                listAjax.innerHTML=xhr.responseText;
            }
        }
    }
}