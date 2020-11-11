<?php include_once 'includes/templates/header.php'; ?>
<!-- description del evento -->
<section class="section container">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi deleniti
    aliquam voluptate quas totam, maiores nisi cum sequi, accusamus
    praesentium mollitia impedit ipsam ea, adipisci culpa ratione similique
    est maxime? Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Ducimus
  </p>
</section>
<!-- /description del evento -->

<!-- programacion evento  -->
<section class="program">
  <div class="container-video">
    <video autoplay loop poster="img/bg-talleres.jpg">
      <source src="img/video/video.mp4" type="video/mp4" />
      <source src="img/video/video.webm" type="video/webm" />
      <source src="img/video/video.ogv" type="video/ogv" />
    </video>
  </div>

  <div class="content-program">
    <div class="container">
      <div class="program-event">
        <h2>Programa del Evento</h2>
        <nav class="menu-program">
          <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
          <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
        </nav>

        <div id="talleres" class="info-course hide clearfix">
          <div class="event-detail">
            <h3>HTML5, CSS3 y JavaScript</h3>
            <p><i class="far fa-clock"></i>16:00 hrs</p>
            <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Sebastian Calapsu carvajal</p>
          </div>
          <div class="event-detail">
            <h3>Responsive web Desing</h3>
            <p><i class="far fa-clock"></i>16:00 hrs</p>
            <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Sebastian Calapsu carvajal</p>
          </div>

          <a href="#" class="button float-right">ver todos</a>
        </div>
        <div id="conferencias" class="info-course hide clearfix">
          <div class="event-detail">
            <h3>Como ser Freelancer</h3>
            <p><i class="far fa-clock"></i>10:00 hrs</p>
            <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Gregorio Sanchéz</p>
          </div>
          <div class="event-detail">
            <h3>Tecnología del Futuro</h3>
            <p><i class="far fa-clock"></i>17:00 hrs</p>
            <p><i class="far fa-calendar-alt"></i>10 de Dic</p>
            <p><i class="fas fa-user"></i>Susan Sanchez</p>
          </div>

          <a href="#" class="button float-right">ver todos</a>
        </div>
        <div id="seminarios" class="info-course hide clearfix">
          <div class="event-detail">
            <h3>Diseño de UI/UX para móviles</h3>
            <p><i class="far fa-clock"></i>17:00 hrs</p>
            <p><i class="far fa-calendar-alt"></i>11 de Dic</p>
            <p><i class="fas fa-user"></i>Haról Garcia</p>
          </div>
          <div class="event-detail">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="far fa-clock"></i>10:00 hrs</p>
            <p><i class="far fa-calendar-alt"></i>11 de Dic</p>
            <p><i class="fas fa-user"></i>Susana Rívera</p>
          </div>

          <a href="#" class="button float-right">ver todos</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /programacion evento -->

<?php include_once 'includes/templates/invitados.php' ?>

<!-- contador -->
<div class="counter parallax">
  <div class="container">
    <ul class="summary-event clearfix">
      <li>
        <p class="number"></p>Invitados
      </li>
      <li>
        <p class="number"></p>Talleres
      </li>
      <li>
        <p class="number"></p>Dias
      </li>
      <li>
        <p class="number"></p>Conferencias
      </li>
    </ul>
  </div>
</div>
<!-- /contador -->

<!-- precios -->

<section class="price section">
  <h2>Precios</h2>
  <div class="container">
    <ul class="price-list clearfix">
      <li>
        <div class="price-table">
          <h3>Pase pordia</h3>
          <p class="number">$30</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="price-table">
          <h3>Todos los días</h3>
          <p class="number">$50</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="price-table">
          <h3>Pase por 2 días</h3>
          <p class="number">$45</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>
<!-- /precios -->

<!-- mapa -->
<div id="mapa" class="map"></div>
<!-- /mapa -->

<!-- testimoniales -->
<section class="section">
  <h2>testimoniales</h2>
  <div class="testimonials container clearfix">
    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci placeat voluptates officiis iusto
          delectus
          distinctio nulla ut. Non fugit expedita laboriosam nulla quam laborum exercitationem temporibus, </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>

    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci placeat voluptates officiis iusto
          delectus
          distinctio nulla ut. Non fugit expedita laboriosam nulla quam laborum exercitationem temporibus, </p>
        <footer class="info-testimonial clearfix">
          <img src=" img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>

    <div class="testimonial">
      <blockquote>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci placeat voluptates officiis iusto
          delectus
          distinctio nulla ut. Non fugit expedita laboriosam nulla quam laborum exercitationem temporibus, </p>
        <footer class="info-testimonial clearfix"> <img src="img/testimonial.jpg" alt="imagen testimonial">
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
  </div>
</section>
<!-- /testimoniales -->

<!-- register -->
<div class="newsletter parallax">
  <div class=" content container">
    <p> regístrate al newsletter:</p>
    <h3>gdlwebcamp</h3>
    <a href="#" class="button transparent">Registro</a>
  </div>
</div>
<!-- /register -->

<!-- cuenta regresiva -->
<section class="section">
  <h2>Faltan</h2>
  <div class="countdown container">
    <ul class="clearfix">
      <li>
        <p id="days" class="number"></p>
        días
      </li>
      <li>
        <p id="hours" class="number"></p>
        horas
      </li>
      <li>
        <p id="minute" class="number"></p>
        minutos
      </li>
      <li>
        <p id="seconds" class="number"></p>
        segundos
      </li>
    </ul>
  </div>
</section>
<!-- /cuenta regresiva -->

<?php include_once 'includes/templates/footer.php' ?>