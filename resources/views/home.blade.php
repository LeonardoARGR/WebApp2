<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #402915;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        input {
            width: 45vw;
            height: 50px;
            font-size: 18px;
            font-weight: bold;
        }
        .main-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 50vw;
            margin-bottom: 30px;
        }
        .form-container{
            background-color: #A67246;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50vw;
            border-radius: 30px;
            margin-top: 30px;
        }
        .input-div {
            margin-top: 70px;
            margin-bottom: 70px;
        }
        .title-1 {
            font-size: 45px;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            font-weight: bold;
            color: #D9AB82;
        }
        .title-2a {
            font-size: 32px;
            text-align: center;
            margin-top: 40px;
            font-weight: bold;
            color: #D9AB82;
        }
        .title-2b {
            font-size: 32px;
            text-align: center;
            margin-top: 40px;
            font-weight: bold;
        }
        .text {
            font-size: 26px;
            text-align: justify;
            margin-top: 10px;
            margin-bottom: 10px;
            color: white;
        }
        .image {
            width: 30vw;
            border: solid #D9AB82;
            border-radius: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="title-1">Biblioteca Horizonte Digital</div>
    <div class="main-container">
        <div class="title-2a">Sobre Nós</div>
        <div class="text">Bem-vindo à Biblioteca Horizonte Digital, o seu portal de conhecimento digital! Somos uma plataforma inovadora dedicada a tornar o acesso à informação, à cultura e ao aprendizado mais fácil e eficiente para todos. Nossa missão é democratizar o acesso à literatura, artigos acadêmicos, livros raros, e materiais educacionais de qualidade, oferecendo uma experiência de leitura acessível em qualquer lugar e a qualquer momento.</div>
        <div class="text">A Biblioteca Horizonte Digital reúne milhares de títulos em diversos formatos, desde e-books e audiolivros até revistas e jornais digitais. Trabalhamos com instituições renomadas, autores independentes e editores para garantir um acervo diversificado e sempre atualizado, atendendo a leitores de todas as idades e interesses.</div>
        <div class="text">Nosso compromisso vai além de simplesmente oferecer conteúdo digital: buscamos promover o hábito da leitura, estimular o pensamento crítico e proporcionar ferramentas que auxiliem no aprendizado contínuo. Com uma interface intuitiva e recursos de acessibilidade, garantimos que todos possam explorar nosso acervo de forma simples e sem barreiras.</div>
        <div class="text">Junte-se a nós nessa jornada de conhecimento e descubra um universo de ideias, histórias e informações que podem transformar sua vida. Seja para estudo, pesquisa ou lazer, na Biblioteca Horizonte Digital, o saber está ao seu alcance!</div>
        <img class="image" src="/biblioteca.jpg">
    </div>
    <div class="form-container">
        <form>
            <div class="title-2b">Cadastre um Livro</div>
            <div class="input-div"><input placeholder="Título do livro" type="text" required></div>
            <div class="input-div"><input placeholder="Autor do livro" type="text" required></div>
            <div class="input-div"><input placeholder="Editora do livro" type="text" required></div>
            <div class="input-div"><input placeholder="Ano de lançamento do livro" type="date" required></div>

            <div class="input-div"><input type="submit" value="Cadastrar"></div>
        </form>
    </div>
</body>
</html>