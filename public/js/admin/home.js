/* get_statistics */
async function see() {
    let data = new FormData();

    data.append("opcion", "get_statistics");


    await $.ajax({
        type: "post",
        url: "../../controller/admin.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            numeroDeUsuariosUltimos7Dias(response.data1)
            promedioEdadUsuarios(response.data6, response.data2)
            testimonios(response.data3)
            testimoniosHora(response.data4)
            registrosDiario(response.data5)
            respuestasAlTest(response.data7)
        }
    });
}

see();

function numeroDeUsuariosUltimos7Dias(data) {

    const fechas = data.map(item => item.fecha);
    const cantidadUsuarios = data.map(item => item.cantidad_usuarios);

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: fechas,
            datasets: [{
                label: 'Usuarios',
                data: cantidadUsuarios,
                borderWidth: 2,
                borderColor: '#5000ca',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: '# de usuarios registrados los ultimos 7 dias'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}
function promedioEdadUsuarios(data, data2) {

    const genders = data.map(item => item.gender);
    const promedioEdad = data.map(item => item.promedio_edad);

    const ctx = document.getElementById('myChart2');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: genders,
            datasets: [{
                label: 'Promedio de edad',
                data: promedioEdad,
                borderColor: '#e7008a',
                backgroundColor: '#e7008a'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Promedio de edad general: '+data2[0].promedio_edad
                }
            }
        }
    });
}
function testimonios(data) {

    const nombreUsuario = data.map(item => item.nombre_usuario);
    const cantidadTestimonios = data.map(item => item.cantidad_testimonios);

    const ctx = document.getElementById('myChart3');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: nombreUsuario,
            datasets: [{
                label: 'Testimonios',
                data: cantidadTestimonios,
                borderColor: '#5000ca',
                backgroundColor: '#5000ca'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: '# de testimonios por usuarios'
                }
            }
        }
    });
}
function testimoniosHora(data) {

    const hora = data.map(item => item.hora+':00');
    const cantidad_testimonios = data.map(item => item.cantidad_testimonios);

    const ctx = document.getElementById('myChart4');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: hora,
            datasets: [{
                label: 'Numero de registros',
                data: cantidad_testimonios,
                borderColor: '#e7008a',
                backgroundColor: '#e7008a'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Horas en las se registran los testimonios'
                }
            }
        }
    });
}
function registrosDiario(data) {

    const hora = data.map(item => item.hora+':00');
    const cantidad_registros_diario = data.map(item => item.cantidad_registros_diario);

    const ctx = document.getElementById('myChart5');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: hora,
            datasets: [{
                label: 'Numero de registros',
                data: cantidad_registros_diario,
                borderColor: '#5000ca',
                backgroundColor: '#5000ca'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Horas en las se registran las entradas a los diarios'
                }
            }
        }
    });
}


function respuestasAlTest(data) {

    const pregunta = data.map(item => item.pregunta.replace(/p(\d+)/, 'Pregunta $1'));
    const respondieron_no = data.map(item => item.respondieron_no);
    const respondieron_si = data.map(item => item.respondieron_si);

    const ctx = document.getElementById('myChart6');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: pregunta,
            datasets: [{
                label: 'No',
                data: respondieron_no,
                borderWidth: 2,
                borderColor: '#5000ca',
                backgroundColor: '#5000cb70'
            },
            {
                label: 'Si',
                data: respondieron_si,
                borderWidth: 2,
                borderColor: '#e7008a',
                backgroundColor:'#e7008b70'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Respuestas a las preguntas del test'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}