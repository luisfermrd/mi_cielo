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
			url: '../../controller/admin.php',
			method: 'POST',
			dataType: 'json',
			data: {
				opcion: 'get_all_reports',
			},
			dataSrc: 'data'
		},
		columns: [
			{ title: 'Id reporte', data: 'id_report' },
			{ title: 'Id usuario', data: 'id_user' },
			{ title: 'Nombre', data: 'name' },
			{ title: 'Correo', data: 'email' },
			{ title: 'Fecha/Hora reporte', data: 'create_at' },
			{ 
                title: 'Opciones', 
                data: 'id_report',
                render: function(data, type, row, meta) {
					return `<button onclick="details(${data})" class="btn btn-primary">Detalles</button>`;
				}
            },
		],
		"bDestroy": true,
		"iDisplayLength": 5
	});
}

cargarTabla();

function details(id) {
    $(location).attr("href", "option/details_reports.php?id="+id);
}