<?php
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' . URL . '/login');
    exit;
}

include '../App/Views/menu.php';
?>
<div class="layout">
    <div class="container-fluid ps-4 pe-4 pt-5 pb-3">
        <div class="row align-items-start">

            <div class="col-8 linha-verde">
                <h1>Sobre Nós</h1>
                <p>Informações sobre os desenvolvedores e o sistema.</p>
            </div>

            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <div class="container text-justify p-4">
        <div class="row shadow-sm p-3 mb-5 rounded">
            <div class="col">
                <h4>Objetivo do sistema</h4>
                <p>O Enfermaria foi pensado e desenvolvido com o objetivo de solucionar uma problemática que ocorre no ambiente escolar em relação ao bem-estar dos estudantes, oferecendo uma ferramenta específica para atuar nesse setor, promovendo maior eficiência e integridade. Um site com comportamentos de cadastro e consulta que promove o armazenamento e agilidade de informações durante a triagem, proporcionando um ambiente seguro onde os dados são gerenciados e acessados por meio da administração dos servidores da CAED.</p>
                <p>
                    O Enfermaria apresenta uma interface eficiente e simples, para ser utilizada até por pessoas com pouco conhecimento tecnológico, permitindo-lhes cadastrar alunos, adicionar triagens e consultar os dados dos alunos. Os usuários podem utilizar diversos recursos proporcionados pelo sistema com os fins de zelar pela saúde dos estudantes no meio escolar. Além de contar com notificações personalizadas para alertar sobre consultas com alunos que precisem de atendimento periódico.
                </p>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gabriel Caminha</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gustavo Henrique Braga Silva</h5>
                        <h6>Desenvolvedor</h6>
                        <p class="card-text">Gosto de esportes.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Laís Lima</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maria Clara</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Maria Eduarda</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mariane C Firmino</h5>
                        <h6>Desenvolvedora Full Stack</h6>
                        <p class="card-text">Desenvolver esse sistema foi algo muito gratificante, principalmente por estar colaborando para uma melhoria no meu campus. Cada etapa foi uma experiência marcante, com muitos desafios e aprendizados, estou muito feliz em desenvolvê-lo junto dos meus amigos.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2 rounded">
                <div class="card" style="width: 18rem;">
                    <img src="u.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rafael Caldeira</h5>
                        <h6>Desenvolvedor Back-end</h6>
                        <p class="card-text">Foi uma ótima experiência trabalhar nesse projeto. Gosto de jogos e esportes.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row shadow-sm p-4 mb-5 rounded">
        <div class="col">
            <h4>Justificativa do sistema</h4>
            <p>A priori, esse projeto surgiu da necessidade de uma ferramenta tecnológica capaz de cadastrar os alunos, inserindo informações pessoais não requisitadas durante a matrícula no IFRO, mas que é de suma importância para equipe responsável por ajudá-los em questões de saúde. Com isso, os alunos responsáveis entraram em contato com a servidora que relatou o problema e fizeram alguns questionamentos iniciais, entre eles, foi revelado que o SUAP (Ferramenta utilizada para encontrar dados dos alunos), não possui a especificidade que é necessária durante a triagem dos estudantes, e por isso começaram a usar o Google Forms como forma de suprir o déficit, porém, o mesmo contava com mais de 20 páginas, entre elas, perguntas padrão que tem q ser repetidas toda vez já que não há um cadastro.
            </p>
            <p>Além de trazer um incremento na área da saúde no setor educacional local, a implementação do software proposta neste trabalho pode trazer benefícios para outros ambientes escolares futuramente, contribuindo para um lugar mais acolhedor e seguro. </p>
            <p>Ademais, outro aspecto que leva ao desenvolvimento desse tema é poder mostrar aos avaliadores, aprendizados que a equipe desse projeto obteve ao longo do curso Técnico em Informática, trazendo as tecnologias e ferramentas de desenvolvimento e aplicando de forma prática.</p>
        </div>
    </div>
</div>
<?php include '../App/Views/footer.php' ?>