book();
get_inputs();

var front = document.querySelector('.face-front');
var back = document.querySelector('.face-back');



const modal_container = document.getElementById('modal_container');
const close = document.getElementById('closeTerminos');
const noQuieroVerMasEsto = document.getElementById('noQuieroVerMasEsto');
const new_entry = document.getElementById('new_entry');



new_entry.addEventListener('click', () => {
	modal_container.classList.add('show2');
});
close.addEventListener('click', () => {
	modal_container.classList.remove('show2');
});
noQuieroVerMasEsto.addEventListener('click', () => {
	new_entry_form();
});



async function new_entry_form() {

	let form = $("#formulario")[0];
	let data = new FormData(form);
	data.append("opcion", "new_entry")
	await $.ajax({
		type: "post",
		url: "../controller/diario.php",
		data: data,
		contentType: false,
		processData: false,
		success: function (response) {
			if (response.status == 1) {
				Swal.fire(
					'Perfecto!',
					response.message,
					'success'
				)
				form.reset();
				$("#container_book").html(`<div class="book" id="book_portada">
												<div class="face-front" id="portada"></div>
												<div class="face-back" id="trsf"></div>
											</div>

											

											<div class="book">
												<div class="face-front"></div>
												<div class="face-back" id="portada-back">
												</div>
											</div>`);
				get_inputs();
			} else {
				Swal.fire(
					'Opps!',
					response.message,
					'error'
				)
			}
		}
	});
}

async function get_inputs() {

	let front = true;
	let form = $("#formulario")[0];
	let data = new FormData(form);
	data.append("opcion", "get_inputs")
	await $.ajax({
		type: "post",
		url: "../controller/diario.php",
		data: data,
		contentType: false,
		processData: false,
		success: function (response) {
			if (response.status == 1) {
				let html = ``;

				response.data.forEach(element => {
					if (front) {
						html += `<div class="book">
									<div class="face-front">
										<h1>${element.title}</h1>
										<p>(${element.create_at})</p>
										<p>${element.content}</p>
									</div>`;
						front = false;
					} else {
						html += `<div class="face-back">
									<h1>${element.title}</h1>
									<p>(${element.create_at})</p>
									<p>${element.content}</p>
								</div>
							</div>`;
						front = true;
					}
				});

				if (!front) {
					html += `<div class="face-back">
							</div>
						</div>`;
				}


				var reference = document.getElementById('book_portada');
				reference.insertAdjacentHTML('afterend', html);


				book();

			}
		}
	});
}

function book() {

	var flip = document.querySelector('.book-content');
	var uno = document.querySelectorAll('.book');
	var portada = document.querySelectorAll('#portada');

	var contZindex = 2;
	var customZindex = 1;

	for (var i = 0; i < uno.length; i++) {
		uno[i].style.zIndex = customZindex;
		customZindex--;

		uno[i].addEventListener('click', function (e) {

			var tgt = e.target;
			var unoThis = this;

			unoThis.style.zIndex = contZindex;
			contZindex++;

			if (tgt.getAttribute('class') == 'face-front') {
				unoThis.style.zIndex = contZindex;
				contZindex += 20;
				setTimeout(function () {
					unoThis.style.transform = 'rotateY(-180deg)';
				}, 100);
			}
			if (tgt.getAttribute("class") == 'face-back') {
				unoThis.style.zIndex = contZindex;
				contZindex += 20;

				setTimeout(function () {
					unoThis.style.transform = 'rotateY(0deg)';
				}, 100);
			}

			if (tgt.getAttribute('id') == 'portada') {
				flip.classList.remove("trnsf-reset");
				flip.classList.add("trnsf");
			}
			if (tgt.getAttribute('id') == 'trsf') {
				flip.classList.remove("trnsf");
				flip.classList.add("trnsf-reset");
			}

		});
	}
}
function countChars(obj) {
	const MAX_LENGTH = 600;
	let str_length = obj.value.length;
	if (str_length <= MAX_LENGTH) {
		$("#num_caracter").html(str_length);
	} else {
		let str = obj.value;
		$("#message-text").val(str.slice(0, MAX_LENGTH));
	}
}