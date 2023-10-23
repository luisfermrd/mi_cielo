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
				opcion: 'get_users',
			},
			dataSrc: 'data'
		},
		columns: [
			{ title: 'ID', data: 'id_user' },
			{ title: 'Nombre', data: 'name' },
			{ title: 'Correo', data: 'email' },
			{ 
                title: 'Opciones', 
                data: 'id_user',
                render: function(data, type, row, meta) {
					return `<button onclick="details(${data})" class="btn btn-primary">Detalles</button>
                    <button onclick="test(${data})" class="btn btn-warning">Test</button>
                    <button onclick="diary(${data})" class="btn btn-dark">Diario</button>`;
				}
            },
		],
		"bDestroy": true,
		"iDisplayLength": 5
	});
}

cargarTabla();

function details(id) {
    $(location).attr("href", "option/details.php?id="+id);
}
function test(id) {
    $(location).attr("href", "option/test.php?id="+id);
}
function diary(id) {
    $(location).attr("href", "option/diary.php?id="+id);
}