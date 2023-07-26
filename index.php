<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudantes Haitianos</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluindo a biblioteca Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }
        @media (min-width: 769px){ 
        .navbar {
            flex-shrink: 0;
            background-color: #343a40;
            color: rgb(135, 206, 250);
            padding: 10px 0;
            text-align: center;
        }

        .carousel {
            margin-top: 0px;
        }

        .carousel-item img {
            width: 100%;
            height: 900px;
            object-fit: cover;
            
            
        }

        .footer {
            flex-shrink: 0;
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .text-justify {
        text-align: justify;
    }

    }
    @media (max-width: 768px) {
        .navbar {
            flex-shrink: 0;
            background-color: #343a40;
            color: rgb(135, 206, 250);
            padding: 10px 0;
            text-align: center;
        }

        .carousel {
            margin-top: 20px;
        }

        .carousel-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .footer {
            flex-shrink: 0;
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .text-justify {
        text-align: justify;
    }

    }
    
    </style>
</head>
<body>
    <!-- Barra de Navegação -->
    <!-- Restante do código ... -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<div class="container"> <!-- Adicione uma div container para centralizar -->
        <a class="navbar-brand mx-auto" href="#">Estudantes Haitianos</a> <!-- Adicione a classe mx-auto para centralizar -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Adicione a classe mx-auto aqui -->
            <li class="nav-item active">
                <a class="nav-link" href="#inicio">Início</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="sobrenos.php">Sobre Nós</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="contato.php">Contato</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="./votar/eleicao.php"> Eleição</a>
            </li>
            <li class="nav-item" style="margin-left: 70px;">
                <a class="nav-link" href="./adm/login.php"> Area restrita</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Restante do código ... -->


    <!-- Carousel com Fotos em Destaque -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="image8.jpg" alt="Imagem 3">
            </div>
            <div class="carousel-item active">
                <img src="image1.jpg" alt="Imagem 1">
            </div>
            
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- Seção de Fotos -->
<div class="container mt-5">
    <h2>Fotos</h2>
    <div id="carouselFotos" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselFotos" data-slide-to="0" class="active"></li>
            <li data-target="#carouselFotos" data-slide-to="1"></li>
            <li data-target="#carouselFotos" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image4.jpg" class="d-block w-100" alt="Foto 1">
            </div>
            <div class="carousel-item">
                <img src="image9.jpg" class="d-block w-100" alt="Foto 2">
            </div>
            <div class="carousel-item">
                <img src="image7.jpg" class="d-block w-100" alt="Foto 3">
            </div>
            <div class="carousel-item">
                <img src="image10.jpg" class="d-block w-100" alt="Foto 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFotos" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselFotos" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
</div>

<!-- Seção de Publicações -->
<div class="container mt-5">
    <h2>Publicações</h2>
    <ul class="list-group">
        <li class="list-group-item">
            <img src="image10.jpg" class="img-thumbnail" alt="Publicação 1">
            <p class="text-justify">No dia 12 de outubro de 2022, um marco histórico foi alcançado na Universidade Federal da Fronteira Sul (UFFS), pois foi nessa data que o primeiro estudante haitiano concluiu o curso de Ciência da Computação. Com dedicação, esforço e determinação, ele superou desafios e barreiras culturais, tornando-se um exemplo inspirador para toda a comunidade acadêmica.

Desde o início de sua jornada acadêmica, o estudante haitiano demonstrou um profundo interesse e entusiasmo pela área de Ciência da Computação. Sua paixão pelo conhecimento e sua busca incansável por novas habilidades o destacaram como um aluno exemplar. Ao longo dos anos, ele conquistou o respeito e o reconhecimento de seus colegas e professores, que admiravam sua dedicação aos estudos e sua postura colaborativa no ambiente acadêmico. Ao concluir o curso de Ciência da Computação, o primeiro estudante haitiano deixa um legado de perseverança e determinação, provando que o conhecimento e a educação são caminhos poderosos para a transformação pessoal e social. Sua conquista é uma celebração da diversidade e do intercâmbio cultural na universidade, inspirando outros estudantes a trilharem seus próprios caminhos rumo ao conhecimento e ao sucesso.</p>
        </li>
        <li class="list-group-item">
            <img src="image4.jpg" class="img-thumbnail" alt="Publicação 2">
            <p class="text-justify">No dia 27 de abril 2023, um momento histórico e significativo aconteceu na Universidade de Filosofia, pois foi nessa data que o primeiro estudante haitiano, François Urviack, concluiu o curso de Filosofia. Sua jornada acadêmica é um exemplo inspirador de perseverança, dedicação e busca pelo conhecimento em uma área tão fundamental para o entendimento do mundo e da existência humana.

Desde o início de sua trajetória na universidade, François demonstrou uma paixão incomparável pela filosofia. Seu fascínio pelas questões filosóficas e sua vontade de explorar os mais diversos pensamentos e correntes de pensamento o impulsionaram a se destacar como um aluno excepcional. Ao longo de seus estudos, ele mergulhou profundamente nos grandes filósofos do passado e contemporâneos, desenvolvendo um olhar crítico e reflexivo sobre as complexidades da vida e do mundo que o rodeia.

Apesar dos desafios acadêmicos, François se manteve firme em sua busca pelo saber filosófico. Sua dedicação incansável aos estudos e sua disposição em enfrentar as mais difíceis questões filosóficas conquistaram o respeito e a admiração de seus colegas e professores. Sua participação ativa em debates e discussões acadêmicas enriqueceu o ambiente acadêmico, promovendo uma troca enriquecedora de ideias e perspectivas.

Ao longo de sua jornada, François também enfrentou desafios pessoais e culturais, mas encontrou na universidade um espaço acolhedor e plural, que o permitiu expressar sua singularidade como estudante haitiano e enriquecer o ambiente acadêmico com sua diversidade cultural.

Com a conclusão do curso de Filosofia, François Urvicak deixa um legado de coragem intelectual e compromisso com a busca pela verdade e pelo conhecimento. Sua conquista é uma celebração da importância da filosofia como uma disciplina essencial para a compreensão do mundo e da condição humana. </p>
        </li>
        <li class="list-group-item">
            <img src="image13.jpg" class="img-thumbnail" alt="Publicação 3">
            <p class="text-justify">Universidade federal da Fronteira Sul campus Chapeco</p>
        </li>
    </ul>
</div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Estudantes Haitianos. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Your existing scripts ... -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
