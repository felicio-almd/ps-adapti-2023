{{-- Front-end começa aqui! --}}


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">

  <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>

  <title>Seek Job</title>
</head>

<body>
  <header class="header">
    <div class="logo" role="banner">
      <img class="logo-img" src="./public/assets/seek_job.png" alt="Logo da Seek Job" width="75" />
    </div>

    <div class="search" role="search"></div>

    <section class="actions">
      <div class="dark-mode" role="switch" aria-checked="false">
        <input type="checkbox" name="change-theme" id="change-theme" />
        <label for="change-theme">
          <i class="sun iconify" data-icon="material-symbols:sunny" data-inline="false" aria-hidden="true"></i>
          <i class="moon iconify" data-icon="material-symbols:mode-night" data-inline="false" aria-hidden="true"></i>
        </label>
      </div>
      <a href="{{ route('login') }}" class="login" role="button" aria-label="Login">
        <i class="iconify" data-icon="material-symbols:account-circle-full" data-inline="false" aria-hidden="true"></i>
      </a>
    </section>
  </header>

  <main role="main">
    <section class="container">
      <article class="card">
        <img class="card-img-top" src="./public/assets/pinguin maloka.png" alt="Imagem de capa do card" />
        <div class="infos">
          <h3 class="name">Felicio</h3>
          <p class="card-description">
            Um exemplo de descrição rápida para construir o título do card e
            fazer preencher o conteúdo do card.
          </p>
          <p class="occupation">Formado</p>
          <p class="graduation">Ciencia da computação</p>
          <button class="botao" id="botao" onclick="mudarTexto()">Contratar</button>
        </div>
      </article>
    </section>
  </main>

  <footer class="footer" role="contentinfo">
    <div class="footer__copy">
      <p>Made with ❤ by @felicio.almd</p>
      <p>Seek Job © All Rights Reserved</p>
    </div>
  </footer>
  <script src="{{ asset('site/js/scripts.js') }}"></script>
</body>

</html>