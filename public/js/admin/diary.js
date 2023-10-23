let table = $('#list');
function cargarTabla() {
	table.DataTable({
		responsive: true,
		language: {
			url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-CO.json'
		},
		"aProcessing": true,
		"aServerSide": true,
		dom: 'Bfrtip',
		ajax: {
			url: '../../../controller/admin.php',
			method: 'POST',
			dataType: 'json',
			data: {
				opcion: 'get_inputs_diary',
				id_user: $("#id_user_pagine").val(),
			},
			dataSrc: 'data'
		},
		columns: [
			{ title: 'Fecha/Hora de registro', data: 'create_at', width: '70px' },
			{ title: 'Nombre', data: 'title', width: '100px' },
			{ title: 'Contenido de la entrada',
			data: 'content',
			width: '400px',
			render: function(data, type, row, meta) {
				return '<div class="overflow-ellipsis">' + data + '</div>';
			} },
		],
		"bDestroy": true,
		"iDisplayLength": 5
	});
}

cargarTabla();