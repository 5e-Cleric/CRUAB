
$(document).ready(function(){
	console.log("Ready");

	

	//===================ELECCIONS I CENS=====================
	$(".votar-llista").click(function()
	{
		index_llista = $(this).attr('id').split("_")[1];
		console.log("Apretat "+index_llista);
		console.log("votar.php?vot="+index_llista);
		$(".taula-eleccions").load("votar.php?vot="+index_llista+" #resultat_ajax");
	});
	$("#cens-actiu, #cens-inactiu").click(function()
	{
		estat = $(this).attr('id').split("-")[1]=="actiu"? 1 : 0;
		console.log("Apretat "+ estat);
		console.log("set_estat.php?estat="+estat);
		$("#estat-cens").load("set_estat_usuari.php?estat="+estat+" #resultat_ajax");
	});

	numero_vocals = 0;
	$("#afegir-vocal").click(function()
	{
		console.log("afegint vocal");
		$('<div class="form-option" id="div-vocal_'+numero_vocals+'"><label class="form-input-label" for="vocal_'+numero_vocals+'">Vocal '+(numero_vocals+1)+'</label><select name="vocal_'+numero_vocals+'" id="vocal_'+numero_vocals+'" form="form-candidatura"></select><button class="eliminar-vocal neutre" id="eliminar-vocal_'+numero_vocals+'">Eliminar vocal</button></div>').insertAfter('.form-option:last');
		var $options = $("#presidenti > option").clone();

		$('#vocal_'+numero_vocals).append($options);
		numero_vocals += 1;
	});
	$("#form-candidatura").on("click", ".eliminar-vocal", function()
	{
		console.log("eliminant vocal");
		index_vocal = $(this).attr('id').split("_")[1];
		$('#div-vocal_'+index_vocal).remove();
	});
	$("#presentar-candidatura-submit").click(function()
	{
		var formData = {
			nom: $("#nom-llista").val(),
			presidenti: $("#presidenti").val(),
			vicepresidenti: $("#vicepresidenti").val(),
			secretari: $("#secretari").val(),
			tresoreri: $("#tresoreri").val(),
		};
		$('[id^="vocal_"]').each(function() {
		    formData[$(this).attr('id')] = $(this).val();
		});
		
		console.log(formData);
		$("#presentar-candidatura-form").load("presentar_candidatura.php #resultat_ajax", formData);
		//load("presentar_candidatura.php", formData)
		/*$.ajax({
			type: "POST",
			url: "presentar_candidatura.php",
			data: formData,
			dataType: "json",
			encode: true,
			}).done(function (data) {
			console.log(data);
		});*/
	});

	//===================JUNTA ELECTORAL=====================
	$(".aprovar-llista").click(function()
	{
		index_llista = $(this).attr('id').split("_")[1];
		console.log("Aprovat "+index_llista);
		$("#gestio-llista_"+index_llista).load("set_estat_llista.php?id="+index_llista+"&estat=1 #resultat_ajax");
	});
	$(".denegar-llista").click(function()
	{
		index_llista = $(this).attr('id').split("_")[1];
		console.log("Denegat "+index_llista);
		$("#gestio-llista_"+index_llista).load("set_estat_llista.php?id="+index_llista+"&estat=-1 #resultat_ajax");
	});
	$(".seleccionar-llista").click(function()
	{
		index_llista = $(this).attr('id').split("_")[1];
		console.log("Seleccionat "+index_llista);
		$("#div-seleccionar-llista_"+index_llista).load("set_llista_guanyadora.php?llista="+index_llista+" #resultat_ajax");
	});
	$(".canviar-etapa").click(function()
	{
		index_etapa = $(this).attr('id').split("_")[1];
		console.log("Canviant etapa a "+index_etapa);
		$("#botons-gestio-etapa").load("set_etapa.php?etapa="+index_etapa+" #resultat_ajax");
	});

});