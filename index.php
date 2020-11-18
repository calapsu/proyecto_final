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

        <?php
        try {
          require_once('includes/fuciones/bd_conexion.php');
          $sql = "SELECT * FROM `categoria_evento` ";
          $resultado = $conn->query($sql);
        } catch (Exception $e) {
          $error = $e->getMessage();
        }
        ?>

        <nav class="menu-program">
          <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $categoria = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($categoria)  ?>">
              <i class="fas <?php echo $cat['icono'] ?>"></i><?php echo $categoria ?></a>
          <?php } ?>
        </nav>

        <?php
        try {
          require_once('includes/fuciones/bd_conexion.php');
          $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos ";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados";
          $sql .= " ON eventos.id_inv = invitados.invitado_id ";
          $sql .= " AND eventos.id_cat_evento = 1 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
          $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos ";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados";
          $sql .= " ON eventos.id_inv = invitados.invitado_id ";
          $sql .= " AND eventos.id_cat_evento = 2 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
          $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos ";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados";
          $sql .= " ON eventos.id_inv = invitados.invitado_id ";
          $sql .= " AND eventos.id_cat_evento = 3 ";
          $sql .= "ORDER BY `evento_id` LIMIT 2;";
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
        ?>

        <?php $conn->multi_query($sql); ?>

        <?php
        do {
          $resultado = $conn->store_result();
          $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

          <?php $i = 0; ?>
          <?php foreach ($row as $evento) : ?>
            <?php if ($i % 2 == 0) { ?>
              <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-course hide clearfix">
              <?php }  ?>
              <div class="event-detail">
                <h3><?php echo $evento['nombre_evento'] ?></h3>
                <p><i class="far fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
                <p><i class="fas fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'] ?></p>
              </div>

              <?php if ($i % 2 == 1) : ?>
                <a href="calendario.php" class="button float-right">ver todos</a>
              </div>
            <?php endif;  ?>
            <?php $i++; ?>
          <?php endforeach; ?>
          <?php $resultado->free(); ?>

        <?php } while ($conn->more_results() && $conn->next_result());

        ?>

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
    <a href="#mc_embed_signup" class="boton_newsletter button transparent">Registro</a>
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