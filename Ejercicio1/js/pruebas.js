function escribirResultado(identificadorElemento){
    return function(textoMostrar){
        document.getElementById(identificadorElemento).innerHTML = "";
        document.getElementById(identificadorElemento).appendChild(document.createTextNode(textoMostrar));
    }
}

function funcionAjaxAsincronaJSON(){
    llamadaAsincrona2("servidor/datosJSON.php","GET",null,"JSON",tratarResultadoJSON);
}

function tratarResultadoJSON(respuesta){
    var resultados= JSON.parse(respuesta);
    let salida="<table border='1'><tr><th>NOMBRE</th><th>DESCRIPCION</th><th>REPARADO</th><th>GARANTIA</th></tr>";

    for (let i=0; i < resultados.length; i++){
        let objeto = resultados[i];
        salida+="<tr><td>"+objeto.nombre+"</td><td>"+
        objeto.descripcion+"</td><td>"+objeto.reparado + " Veces" +"</td><td>"+
        objeto.garantia + " Años" + "</td></tr>";
    }

    salida+="</table>";

    document.getElementById("resultadoAsincronoJSON").innerHTML=salida;

}
