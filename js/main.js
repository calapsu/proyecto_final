(function () {
    "use strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener("DOMContentLoaded", function () {

        //mapa

        if (document.getElementById('mapa')) {
            var map = L.map('mapa').setView([2.196899, -75.628831], 14);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([2.196899, -75.628831]).addTo(map)
                .bindPopup('GDLWEbCamp 2020 <br> Boletos ya disponibles')
                .openPopup()
                .bindTooltip('Garzon-Huila')
                .openTooltip();
        }


        //Campos Datos usuarios
        var nombre = document.getElementById("nombre");
        var apellido = document.getElementById("apellido")
        var email = document.getElementById("email")


        //Campos pases
        var pase_dia = document.getElementById("pase_dia");
        var pase_dosdias = document.getElementById("pase_dosdias");
        var pase_completo = document.getElementById("pase_completo");

        //botones y divs 
        var calcular = document.getElementById("calcular");
        var errorDiv = document.getElementById("error");
        var botonRegistro = document.getElementById("btnRegistro");
        var lista_productos = document.getElementById("lista-productos");
        var suma = document.getElementById('suma-total');

        //extras
        var camisas = document.getElementById('camisa_evento')
        var etiquetas = document.getElementById('etiquetas')

        botonRegistro.disabled = true;

        if (document.getElementById('calcular')) {

            //function de calcular
            calcular.addEventListener('click', calcularMontos);
            pase_dia.addEventListener('blur', mostrarDias);
            pase_dosdias.addEventListener('blur', mostrarDias);
            pase_completo.addEventListener('blur', mostrarDias)


            nombre.addEventListener('blur', validarCampos)
            apellido.addEventListener('blur', validarCampos)
            email.addEventListener('blur', validarCampos)
            email.addEventListener('blur', validarMail);


            function validarCampos() {
                if (this.value == "") {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "este campo es obligatorio"
                    this.style.border = "1px solid red"
                    errorDiv.style.border = "red 1px solid"
                } else {
                    errorDiv.style.display = "none"
                    this.style.border = "1px solid #cccccc"
                }
            }

            function validarMail() {
                if (this.value.indexOf("@") > -1) {
                    errorDiv.style.display = "none"
                    this.style.border = "1px solid #cccccc"
                } else {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = "deve tener almenos una @"
                    this.style.border = "1px solid red"
                    errorDiv.style.border = "red 1px solid"
                }
            }


            function calcularMontos(event) {
                event.preventDefault();
                if (regalo.value === '') {
                    alert('Debes elegir un regalo')
                    regalo.focus();
                } else {
                    var boletosDia = parseInt(pase_dia.value, 10) || 0,
                        boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                        boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                        cantCamisas = parseInt(camisas.value, 10) || 0,
                        cantEtiquetas = parseInt(etiquetas.value, 10) || 0;


                    var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) +
                        ((cantCamisas * 10) * .93) + (cantEtiquetas * 2)

                    var listadoProductos = [];
                    if (boletosDia >= 1) {
                        listadoProductos.push(`${boletosDia} pase por dia`);
                    }
                    if (boletos2Dias >= 1) {
                        listadoProductos.push(`${boletos2Dias} pase por 2 dias`);
                    }
                    if (boletoCompleto >= 1) {
                        listadoProductos.push(`${boletoCompleto} pase  completo`);
                    }
                    if (cantCamisas >= 1) {
                        listadoProductos.push(`${cantCamisas} Camisas`)
                    }
                    if (cantEtiquetas >= 1) {
                        listadoProductos.push(`${cantEtiquetas} Etiquetas`)
                    }
                    lista_productos.style.display = "block"
                    lista_productos.innerHTML = '';
                    for (var i = 0; i < listadoProductos.length; i++) {
                        lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                    }
                    suma.innerHTML = `$ ${totalPagar.toFixed(2)}`

                    botonRegistro.disabled = false;
                    document.getElementById('total_pedido').value = totalPagar;

                }
            }

            function mostrarDias() {
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0;

                var diasElegidos = [];

                if (boletosDia > 0) {
                    diasElegidos.push('viernes');
                }
                if (boletos2Dias > 0) {
                    diasElegidos.push('viernes', 'sabado');
                }
                if (boletoCompleto > 0) {
                    diasElegidos.push('viernes', 'sabado', 'domingo')
                }

                for (var i = 0; i < diasElegidos.length; i++) {
                    document.getElementById(diasElegidos[i]).style.display = "block";
                }
            }
        }
    });
})();


//programa del evento


$(function () {

    //lettering

    $('.site-name').lettering();

    //agregar clase a Menu

    $('body.conferencia .main-navigation a:contains("Conferencia")').addClass('activo');
    $('body.calendario .main-navigation a:contains("Calendario")').addClass('activo');
    $('body.invitados .main-navigation a:contains("Invitados")').addClass('activo');

    //Menu fijo

    var windowHeight = $(window).height();
    var barraAltura = $('.bar').innerHeight();
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.bar').addClass('fixed')
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.bar').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    })


    //menu responsive

    $('.mobile-menu').on('click', function () {
        $('.main-navigation').slideToggle();
    })



    //Programa de Conferencia
    $('.program-event .info-course:first').show();
    $('.menu-program a:first').addClass('activo');
    $('.menu-program a').on('click', function () {
        $('.menu-program a').removeClass('activo');
        $(this).addClass('activo');
        $('.hide').hide();
        var enlace = $(this).attr('href')
        $(enlace).fadeIn(1000)

        return false;
    });

    //Animaciones para los Numeros
    $('.summary-event li:nth-child(1) p').animateNumber({ number: 6 }, 1200)
    $('.summary-event li:nth-child(2) p').animateNumber({ number: 15 }, 1200)
    $('.summary-event li:nth-child(3) p').animateNumber({ number: 3 }, 1000)
    $('.summary-event li:nth-child(4) p').animateNumber({ number: 9 }, 1500)


    //cuenta regresiva

    $('.countdown').countdown('2020/12/10 09:00:00', function (event) {
        $('#days').html(event.strftime('%D'));
        $('#hours').html(event.strftime('%H'));
        $('#minute').html(event.strftime('%M'));
        $('#seconds').html(event.strftime('%S'));
    });

    //Colorbox

    $('.invitado-info').colorbox({inline:true, width: "50%" });
});