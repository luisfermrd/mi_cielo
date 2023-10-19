$(document).ready(function () {
    $('#formulario').on("submit", function (e) {
        e.preventDefault();
        register();
    });
});

async function register() {

    let form = $("#formulario")[0];
    let data = new FormData(form);
    data.append('opcion', 'new_test')
    await $.ajax({
        type: "post",
        url: "../controller/test.php",
        data: data,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status == 1) {
                window.location.href = '#violentometro'
                form.reset();
                get_test();
            } else {
                Swal.fire(
                    'Advertencia!',
                    response.message,
                    'warning'
                  )
            }
        }
    });
}

async function get_test() {
	let data = new FormData();
	data.append("opcion", "get_test")
	await $.ajax({
		type: "post",
		url: "../controller/test.php",
		data: data,
		contentType: false,
		processData: false,
		success: function (response) {
			if (response.status == 1) {
                let con = 0;
                let valor_pregunta = 9.0909090909090909090909090909091;
                if (response.data.p1 == 'si'){
                    con++;
                }
                if (response.data.p2 == 'si'){
                    con++;
                }
                if (response.data.p3 == 'si'){
                    con++;
                }
                if (response.data.p4 == 'si'){
                    con++;
                }
                if (response.data.p5 == 'si'){
                    con++;
                }
                if (response.data.p6 == 'si'){
                    con++;
                }
                if (response.data.p7 == 'si'){
                    con++;
                }
                if (response.data.p8 == 'si'){
                    con++;
                }
                if (response.data.p9 == 'si'){
                    con++;
                }
                if (response.data.p10 == 'si'){
                    con++;
                }
                if (response.data.p11 == 'si'){
                    con++;
                }
                let porcentaje = Math.round(con*valor_pregunta);

                document.getElementById('mercury').style.height = 100-porcentaje+'%';

                if (porcentaje <= 20) {
                    document.getElementById('respuestaTest').innerHTML = 'Me complace informarte que según el violímetro, el nivel de violencia en esta situación es mínimo. Esto indica que las interacciones se están llevando a cabo de manera pacífica y respetuosa. Sigamos promoviendo la comunicación abierta y el entendimiento mutuo.No parece que estés sufriendo violencia en este momento, pero recuerda que siempre puedes buscar ayuda si lo necesitas.';
                }else if(porcentaje <= 40){
                    document.getElementById('respuestaTest').innerHTML = 'Según el violímetro, se ha identificado un nivel moderado de violencia en esta situación. Es importante abordar estas conductas de manera adecuada y buscar alternativas pacíficas para resolver conflictos. Fomentemos el diálogo y la empatía como herramientas para reducir la violencia.';
                }else if(porcentaje <= 60){
                    document.getElementById('respuestaTest').innerHTML = 'La evaluación del violímetro indica que existe un nivel significativo de violencia en esta situación. Es fundamental tomar medidas inmediatas para abordar esta problemática y buscar soluciones no violentas. Prioricemos la seguridad y el bienestar de todas las personas involucradas.';
                }else if(porcentaje <= 80){
                    document.getElementById('respuestaTest').innerHTML = 'El violímetro ha registrado un nivel alto de violencia en esta situación, lo cual es motivo de preocupación. Es esencial tomar acciones urgentes para detener y prevenir cualquier forma de violencia. Busquemos la ayuda de profesionales y trabajemos en conjunto para promover la paz y la seguridad.';
                }else{
                    document.getElementById('respuestaTest').innerHTML = 'Lamentablemente, el violímetro ha detectado un nivel extremo de violencia en esta situación. Es imperativo actuar de manera inmediata y enérgica para proteger a las personas involucradas y poner fin a la violencia. Busquemos apoyo de autoridades competentes y organizaciones especializadas en el manejo de situaciones de alta violencia.';
                }
                
			}
		}
	});
}
get_test();

var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
});