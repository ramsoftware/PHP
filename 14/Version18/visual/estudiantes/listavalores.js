	$(document).ready(function(){
		$("#colorojos").select2({
			ajax: {
				url: "../../logica/estudiantes/cboColores.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						ColoresBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}),
		$("#colorprefiere").select2({
			ajax: {
				url: "../../logica/estudiantes/cboColores.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						ColoresBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}),
		$("#profesion").select2({
			ajax: {
				url: "../../logica/estudiantes/cboProfesiones.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						ProfesionesBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}),
		$("#tiposangre").select2({
			ajax: {
				url: "../../logica/estudiantes/cboTipoSangre.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						TipoSangreBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}),
		$("#nacionalidad").select2({
			ajax: {
				url: "../../logica/estudiantes/cboNacionalidad.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						NacionalidadBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}),
		$("#estadocivil").select2({
			ajax: {
				url: "../../logica/estudiantes/cboEstadoCivil.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						EstadoCivilBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}),
		
		$("#paistrabaja").select2({
			ajax: {
				url: "../../logica/estudiantes/cboPais.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						PaisBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		}).on('select2:select', function (e) {
			$('#ciudadtrabaja').val('-1');
			$('#ciudadtrabaja').trigger('change');
		}),
		
		$("#ciudadtrabaja").select2({
			ajax: {
				url: "../../logica/estudiantes/cboCiudad.php",
				type: "post",
				dataType: "json",
				delay: 100,
				data: function (params){
					return {
						PaisBuscado: document.getElementById("paistrabaja").value,
						CiudadBusca: params.term
					};
				},
				processResults: function (response) {
					return {
						results: response
					};
				},
				cache: true
			}
		})
	});
