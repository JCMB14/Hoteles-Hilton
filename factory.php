<?php
echo '<link rel="stylesheet" type="text/css" href="Style/style.css">';

class factory
{
    public static function hotel($tipo_hotel)
    {
        if ($tipo_hotel > 150000) {
            return new resort();
        } else if ($tipo_hotel > 70000 && $tipo_hotel <= 150000) {
            return new posada();
        } else if ($tipo_hotel >= 40000 && $tipo_hotel <= 70000) {
            return new hostal();
        } else {
            return new NoDisponible();
        }
    }
}
class Hoteles
{
    public function mostrarFormulario()
    {
        return '';
    }
}

class resort extends Hoteles
{
    public function mostrarFormulario()
    {
        return '
        <form class="content_form_hotel">
          <div class="form_hotel">
            <h3>Resort</h3>
            <label>
               Número de personas:
               <input type="number" id="cantidad_persona" class="n_personas" name="Npersona">
            </label>
            <label>
               Días de estadía:
               <input type="number" id="dias_estadia" class="d_estadia" name="Destadia">
            </label>
            <label name="incluir">
                <input type="checkbox" name="incluir" id="inputInclude">
                Plan todo incluido
            </label>

            <button class="enviar_type" id="btnenviar" onclick="imprimirFormularioResort()">Enviar</button>

          </div>

          <div class="form_infohotel">
            <div class="up">
              <img src="img/resort1.png" alt="image">
              <img src="img/resort4.png" alt="image">
            </div>
            <div class="down">
              <img src="img/resort3.png" alt="image">
              <img src="img/resort2.png" alt="image">
            </div>

          </div>

        </form>

        ';
    }
}

class posada extends Hoteles
{
    public function mostrarFormulario()
    {
        return '
        <form class="content_form_hotel">
          <div class="form_hotel">
            <h3>Posada</h3>
            <label>
               Número de personas:
               <input type="number" id="cantidad_persona" class="n_personas name="Npersona">
            </label>
            <label>
               Días de estadía:
               <input type="number" id="dias_estadia" class="d_estadia" name="Destadia">
            </label>
            <label name="incluir">
                <input type="checkbox" name="incluir" id="inputIncludeDesayuno">
                incluir desayuno
            </label>

            <button class="enviar_type" id="btnenviar" onclick="imprimirFormularioPosado()">Enviar</button>

          </div>

          <div class="form_infohotel">
           <div class="up">
             <img src="img/posada1.png" alt="image">
             <img src="img/posada3.png" alt="image">
           </div>
           <div class="down">
             <img src="img/posada4.png" alt="image">
            <img src="img/posada2.png" alt="image">
           </div>
          </div>

        </form>

        ';
    }
}

class hostal extends Hoteles
{
    public function mostrarFormulario()
    {
        return '
        <form class="content_form_hotel">
          <div class="form_hotel">
            <h3>Hostal</h3>
            <label>
               Número de personas:
               <input type="number" id="cantidad_persona" class="n_personas" name="Npersona">
            </label>
            <label>
               Días de estadía:
               <input type="number" id="dias_estadia" class="d_estadia" name="Destadia">
            </label>

            <button class="enviar_type" id="btnenviar" onclick="imprimirFormularioHostal()">Enviar</button>

          </div>

          <div class="form_infohotel">
            <div class="up">
              <img src="img/hostal2.png" alt="image">
              <img src="img/hostal1.png" alt="image">
            </div>
            <div class="down">
              <img src="img/hostal3.png" alt="image">
              <img src="img/hostal4.png" alt="image">
            </div>
          </div>

        </form>

        ';
    }
}
class NoDisponible extends Hoteles
{
    public function mostrarFormulario()
    {
        return '<h1 class="nohay">No hay hoteles disponibles a este precio</h1>
     <svg class="lupa" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
     <svg class="question" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#000000}</style><path d="M80 160c0-35.3 28.7-64 64-64h32c35.3 0 64 28.7 64 64v3.6c0 21.8-11.1 42.1-29.4 53.8l-42.2 27.1c-25.2 16.2-40.4 44.1-40.4 74V320c0 17.7 14.3 32 32 32s32-14.3 32-32v-1.4c0-8.2 4.2-15.8 11-20.2l42.2-27.1c36.6-23.6 58.8-64.1 58.8-107.7V160c0-70.7-57.3-128-128-128H144C73.3 32 16 89.3 16 160c0 17.7 14.3 32 32 32s32-14.3 32-32zm80 320a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/></svg>
     ';
    }
}
