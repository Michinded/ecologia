@extends('blogtemplate')
@section('title')
    Agradecimientos
@endsection

@section('content')
  <div class="container">
    <br><br><br><br>
    <center>
        <h1>Agradecimientos</h1>
    </center>
    
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Gracias por visitar nuestro sitio web!') }}</div>

          <div class="card-body">
            <p>Queremos agradecerte por visitar nuestro sitio web. Esperamos que hayas encontrado la información que necesitabas y que hayas disfrutado de tu visita.</p>

            <p>Tenemos el placer de utilizar las siguientes tecnologías:</p>

            <ul class="list-group list-group-flush rounded-sm">
              <li class="list-group-item list-group-item-action small">Laravel 10: <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" alt="Laravel image" class="img-fluid" width="80px" height="80px"></li>
              <li class="list-group-item list-group-item-action small">Bootstrap: <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/1200px-Bootstrap_logo.svg.png" alt="Bootstrap image" class="img-fluid" width="80px" height="80px"></li>
                <li class="list-group-item list-group-item-action small">jQuery: <img src="https://www.solucionex.com/sites/default/files/posts/imagen/jquery.png" alt="JQuery image" class="img-fluid" width="80px" height="80px"></li>
                <li class="list-group-item list-group-item-action small">PHP: <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/800px-PHP-logo.svg.png" alt="PHP image" class="img-fluid" width="80px" height="80px"></li>
                <li class="list-group-item list-group-item-action small">JavaScript: <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="JS image" class="img-fluid" width="80px" height="80px"></li>
                <li class="list-group-item list-group-item-action small">HTML5: <img src="https://img.icons8.com/color/512/html-5--v1.png" alt="HTML5 image" class="img-fluid" width="80px" height="80px"></li>
                <li class="list-group-item list-group-item-action small">MySQL: <img src="https://d1.awsstatic.com/asset-repository/products/amazon-rds/1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png" alt="MySQL image" class="img-fluid" width="80px" height="80px"></li>
              <li class="list-group-item list-group-item-action small">Mexeded & Michinded Technologies: <img src="https://avatars.githubusercontent.com/u/39231587?v=4" alt="Mexinded image" class="img-fluid" width="80px" height="80px"></li>
              <li class="list-group-item list-group-item-action small">Icons8: <a target="_blank" href="https://icons8.com/icon/64041/bot%C3%B3n-ecolog%C3%ADa">Botón Ecología</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a></li>
            </ul>

            <p>Si tienes alguna pregunta o comentario, no dudes en ponerte en contacto con nosotros.</p>

            <p>¡Gracias de nuevo por tu visita!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection