var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  }
});





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
    url: "../controller/testimonio.php",
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

  let form = $("#formulario")[0];
  let data = new FormData(form);
  data.append("opcion", "get_inputs")
  await $.ajax({
    type: "post",
    url: "../controller/testimonio.php",
    data: data,
    contentType: false,
    processData: false,
    success: function (response) {
      if (response.status == 1) {
        let html = ``;

        response.data.forEach(element => {
          html += `<div class="swiper-slide slide-centrar">
                    <div class="testimonio">
                        <i class="ri-double-quotes-l"></i>
                        <p>${element.message}</p>
                        <div class="rating">
                            <strong><p>- <i>${element.name}</i></p></strong>
                        </div>
                      
                    </div>
                </div>`;
        });

        document.getElementById('testimonios-container').innerHTML = html;

      }
    }
  });
}

get_inputs();


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