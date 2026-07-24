<?php
$projetos = [
    [
        "titulo" => "Meu primeiro portfólio",
        "descricao" => "esse é meu primeiro projeto, a ideia é criar um portfólio de tudo que já criei e aprendi, servindo de base de conhecimento para consultas e também como vitrine de projetos, para recrutadores e/ou visitantes"
    ],
    [
        "titulo" => "próximo projeto: lista de tarefas (em breve)",
        "descricao" => "Em breve, aqui vou colocar o próximo projeto, que será uma lista de tarefas. Quero que ela funcione tando web, para estudar php e programação web, mas futuramente quero um aplicativo android também."
    ],
    [
        "titulo" => "testando escala de código via array",
        "descricao" => "testando a escala, para reutilizar os códigos HTML, CSS e JS, para não precisar ficar copiando e colando, e sim apenas chamando o array com os dados do projeto."
    ]
];
?>



<!DOCTYPE html>
<html>  <!--abre a tag HTML, tudo aqui dentro é HTML.--> 
    <head> <!--cabeçalho e informações adicionais utilizadas pelo navegador-->
        <meta charset="UTF-8"> <!-- define o alfabeto utilizado na página (conjunto de caracteres e emojis)--> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- define a largura da página para se ajustar à largura do dispositivo, e a escala inicial da página para 1.0 (sem zoom)-->
        <title>Portfólio L.D.</title> <!-- título que aparece na guia do navegador--> 
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body> <!-- conteúdo visível da página--> 
        <header> <!-- título principal da página--> 
            <button id="botao-tema" onclick="alternarTema()">🌙 Modo escuro</button> <!--botão para alternar entre o modo claro e escuro-->
            <h1>Leonardo Dill</h1>  <!--H1 identifica a hierarquida e tamanho do título-->           
        </header>
        <section id="sobre">         <!--Primeira secçao da página, falando um pouco sobre mim, contando com título de hierarquia 2 (<h2>) e conteúdo (<p>)-->
            <h2>Sobre mim</h2>
            <p>Breve resumo sobre minha trajetória e quais são meus objetivos</p>
        </section>
        <section id="projetos"> <!--próxima seção da página, agora com artigos individuais listanto os meus projetos-->
            <h2>Projetos:</h2> <!--título de nível 2 <h2>-->
            <?php foreach ($projetos as $projeto) { ?> 
                <article class ="card-projeto">
                    <h3><?php echo $projeto["titulo"];?></h3>
                    <p><?php echo $projeto["descricao"];?></p>
                </article>
            <?php } ?>
        </section>
        <section id="contato">
            <h2>Contatos:</h2>
            <p>Email: <a href="mailto:leonardo.leo7354@gmail.com">leonardo.leo7354@gmail.com</a></p> <!--hiperlinks clicáveis-->
            <p>Linkedin: <a href="https://www.linkedin.com/in/leonardo-dill-9b78b91b5/">Linkedin</a></p>
            <form action="processa.php" method="POST">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome aqui" required>
                </div>
                <div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem aqui" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </section>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> <a href="https://github.com/Leonardo-Dill">Leonardo Dill</a> Todos os direitos reservados. </p>
        </footer>
        <script>
function alternarTema() {
    document.body.classList.toggle('tema-escuro');
    const escuro = document.body.classList.contains('tema-escuro');
    localStorage.setItem('tema', escuro ? 'escuro' : 'claro');
}

if (localStorage.getItem('tema') === 'escuro') {
    document.body.classList.add('tema-escuro');
}
</script>
    </body>
    <?php
if (isset($_GET["sucesso"])) {  //verifica se a variável "sucesso" foi definida na URL através do método GET, se sim, exibe a mensagem de sucesso.
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";  //alert é uma função do JavaScript que exibe uma caixa de diálogo com a mensagem especificada.
}
?>
</html>