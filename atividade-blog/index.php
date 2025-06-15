<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atividade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <a class="navbar-brand" href="#">Doctor Who</a>
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.doctorwho.tv/news-and-features">Latest News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Series
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.imdb.com/pt/title/tt0056751/?ref_=fn_all_ttl_3">Classic Who</a></li>
            <li><a class="dropdown-item" href="https://www.imdb.com/pt/title/tt0436992/">New Who</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="https://www.imdb.com/pt/title/tt31433814/?ref_=fn_all_ttl_1">2024 series </a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="alert alert-primary text-center mt-3">Bem-vindo!</div>

<div class="container mt-4">
    <div class="row">
        <!-- Área de conteúdo principal -->
        <div class="col-md-8">
            <?php
            $postagens = [
                [
                    "titulo" => "Serie Clássica", 
                    "data" => "15/06/2025", 
                    "imagem" => "https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2009/10/5/1254754876989/2-Doctor-Who-logo-used-fr-003.jpg?width=300&quality=85&auto=format&fit=max&s=cedd361d6ee0da28c74ed4b874ada16c", 
                    "conteudo" => "A série clássica de Doctor Who foi composta por 26 temporadas, exibidas a partir de 23 de novembro de 1963 até 6 de dezembro de 1989. Durante a exibição da série, cada episódio semanal fazia parte de uma história (ou serial, 'Arco') — geralmente composta de 4 a 6 episódios de 25 minutos cada; nas últimas temporadas era composta de 3 episódios de 45 a 50 minutos cada. As exceções notáveis foram: 'The Daleks' 'Master Plan' (1965-1966), que foi exibido em 12 episódios, a história final da 6ª temporada 'The War Games' (1969) com 10 episódios e a 23ª temporada 'The Trial of a Time Lord' (1986) que teve 14 episódios (dividido em 3 códigos de produção e 4 segmentos narrativos). Ocasionalmente as temporadas possuíam eventos que conectavam suas histórias, como a 8ª temporada, com o Doutor lutando contra o Mestre (Senhor do Tempo renegado e rival do Doutor), a 16ª temporada ('The Key to Time') que mostra a busca do Doutor e Romana I pela Chave do Tempo, a 18ª temporada mostrando a jornada do Doutor e Romana II no E-Space e a 20ª temporada com a trilogia 'Black Guardian'.",
                    
                ],
                [
                    "titulo" => "New Who", 
                    "data" => "14/06/2025", 
                    "imagem" => "https://i.pinimg.com/736x/25/49/7f/25497fe1b644515079646515c6815873.jpg", 
                    "conteudo" => "Em 2005, o formato da série mudou com cada temporada possuindo entre 10 e 13 episódios de 45 a 50 minutos e um especial de natal ou ano-novo de 60 minutos de duração. Cada temporada inclui várias histórias individuais ou separadas em alguns episódios, todas conectadas num mesmo arco que geralmente é resolvido no episódio final. Alguns episódios, como 'Journey's End' (2008), 'The Eleventh Hour' (2010) e 'Deep Breath' (2014) excederam o tempo de 1 hora de duração.[63] A exceção a esse formato é a 13ª temporada ('Flux'), que contém apenas 6 episódios, além de ser seguida por três episódios especiais: um de ano-novo, um de natal e um de regeneração."
                ],
                [
                    "titulo" => "Atual", 
                    "data" => "13/06/2025", 
                    "imagem" => "https://lumiere-a.akamaihd.net/v1/images/doctorwho_logo_25348caf.png?region=0,271,1080,434", 
                    "conteudo" => "Apesar da produção da série não parar em nenhum momento após sua retomada em 2005, a volta de Russell T Davies em 2023 foi encarada por muitos como uma nova retomada da série. Essa volta contou também com David Tennant, considerado o ator mais popular a interpretar o papel do Doutor, além de diversas outras participações especiais nos episódios comemorativos de 60 anos. Além disso, uma parceria com a produtora Bad Wolf Ltd e com o serviço de streaming Disney+"
                ],
            ];

            foreach ($postagens as $index => $post): ?>
                <article class="card mb-3">
                    <img src="<?= htmlspecialchars($post["imagem"], ENT_QUOTES, 'UTF-8') ?>" 
                         class="card-img-top" 
                         alt="<?= htmlspecialchars($post["titulo"], ENT_QUOTES, 'UTF-8') ?>"
                         loading="lazy"
                         style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= htmlspecialchars($post["titulo"], ENT_QUOTES, 'UTF-8') ?>
                        </h5>
                        
                        <p class="text-muted">
                            <small>
                                <i class="fas fa-calendar-alt me-1" aria-hidden="true"></i>
                                <time datetime="<?= date('Y-m-d', strtotime(str_replace('/', '-', $post["data"]))) ?>">
                                    <?= htmlspecialchars($post["data"], ENT_QUOTES, 'UTF-8') ?>
                                </time>
                            </small>
                        </p>
                        
                        <p class="card-text">
                            <?= htmlspecialchars($post["conteudo"], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                        
                        <a href="#post-<?= $index ?>" 
                           class="btn btn-primary"
                           aria-label="Leia mais sobre <?= htmlspecialchars($post["titulo"], ENT_QUOTES, 'UTF-8') ?>">
                            Leia mais...
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
 <!-- Sidebar -->
<div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Sobre os Autores</h5>
                    <p>A série Doctor Who foi criada por Sydney Newman, C.E. Webber e Donald Wilson. Sydney Newman, foi o produtor e criador da série que tinha a função de chefe de drama da BBC e trabalhou no desenvolvimento do conceito da série. C.E. Webber, participou ativamente na criação da série, trabalhando com Newman e Wilson. 
Donald Wilson, chefe do departamento de roteiro da BBC, trabalhou na criação do programa com Newman e Webber. </p>
                </div>
            </div>
        </div>






    </div>
</div>


<!-- Rodapé -->
<footer class="bg-dark text-white text-center p-3 mt-4">
    <h5>Contato</h5>
    <p>Email: contato@meublog.com | Telefone: (00) 0000-0000</p>
</footer>

<footer class="bg-dark text-white mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>
                        <i class="fas fa-envelope me-2"></i>Entre em Contato
                    </h5>
                    <form>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-1"></i>Enviar Mensagem
                        </button>
                    </form>
                </div>
                
                <div class="col-md-6">
                    <h5>
                        <i class="fas fa-info-circle me-2"></i>Informações de Contato
                    </h5>
                    <div class="mb-3">
                        <p><i class="fas fa-envelope me-2"></i>contato@email.com</p>
                        <p><i class="fas fa-phone me-2"></i>(62) 99999-9999</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Goiás - Brasil</p>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2025. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>





</body>
</html>