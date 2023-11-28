{{-- Front-end começa aqui! --}}


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('site/img/logo1.png') }}">
  <link rel="stylesheet" href="{{ asset('site/css/styles.css') }}">


  <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>

  <title>Seek Job</title>
</head>

<body>

  <header class="header">
    <a class="logo" role="banner" href="/">
      <img class="logo-img" src="{{ asset('site/img/logo.png') }}" alt="Logo da Seek Job" width="80" />
    </a>

    <form class="search-bar" action="{{ url('/search') }}" method="GET" id="searchForm">
      <input class="search-input" type="text" name="search" placeholder="Filtrar por nome e curso">
      <button class="search-button" type="submit"><i class="search iconify" data-icon="material-symbols:search" data-inline="false" aria-hidden="true"></i></button>
    </form>

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

  <main class="main">
    <section class="container">
      @foreach ($alunos as $aluno)
      <article class="card">
        <img class="card-img-top" src="{{ url($aluno->imagem) }}" alt="Imagem de {{ $aluno->nome }}" />
        <div class="card-infos">
          <h3 class="card-name">{{ $aluno->nome }}</h3>
          <p class="card-description">
            {{ $aluno->descricao }}
          </p>
          <p class="card-graduation">Curso: {{ $aluno->curso->curso }}</p>
          <p class="card-occupation">{{ $aluno->formado ? 'Formado' : 'Não Formado' }}</p>
        </div>
        @if($aluno->contratado)
        <p class="card-contratado">Contratado!</p>
        @else
        <form class="card-form" action="{{ route('contratar', $aluno) }}" method="post">
          @csrf
          <button class="card-button" type="submit">Contratar</button>
        </form>
        @endif
      </article>
      @endforeach

    </section>
    <button onclick="toTop()" id="scroll-button" title="Go to top"><i class="iconify" data-icon="material-symbols:arrow-upward-alt-rounded" data-inline="false" aria-hidden="true"></i></button>
    <div class="pagination">
      {{ $alunos->links() }}
    </div>
  </main>

  <footer class=" footer" role="contentinfo">
    <div class="footer__copy">
      <p>Made with ❤ by @felicio.almd</p>
      <p>Seek Job © All Rights Reserved</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="{{ asset('site/js/scripts.js') }}"></script>
</body>

</html>