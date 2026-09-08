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
        <div class="container-fluid">

            <!-- PRIMEIRA LINHA -->
            <div class="row g-4 mb-4">

                <!-- Gabriel -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/gabriel.jpeg"
                                class="card-img-top rounded-top"
                                alt="Gabriel Caminha">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Gabriel Caminha
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedor Back-end</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Estou gostando muito de desenvolver esse sistema,
                                ainda mais ao lado de meus amigos, está sendo uma
                                experiência incrível.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Gustavo -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/gustavo.jpeg"
                                class="card-img-top rounded-top"
                                alt="Gustavo Henrique Braga Silva">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Gustavo Henrique Braga Silva
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedor Front-End</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Gosto de esportes.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Laís -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/laís.jpeg"
                                class="card-img-top rounded-top"
                                alt="Laís Lima">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Laís Firmino
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedora Back-End</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Participar desse projeto no meu último ano foi muito
                                gratificante, e com a ajuda do meu grupo, conseguimos
                                um ótimo resultado.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Maria Clara -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/mariaC.jpeg"
                                class="card-img-top rounded-top"
                                alt="Foto de Maria Clara">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Maria Clara
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedora Front-End</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Eu e meus amigos trabalhamos juntos para transformar
                                os conhecimentos adquiridos durante o curso em um
                                projeto prático. Fiquei responsável por parte do
                                front-end, contribuindo para o desenvolvimento da
                                aparência do sistema e para tornar a experiência do
                                usuário mais simples e agradável.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


            <!-- SEGUNDA LINHA -->
            <div class="row g-4">

                <!-- Maria Eduarda -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/maia.jpeg"
                                class="card-img-top rounded-top"
                                alt="Foto de Maria Eduarda">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Maria Eduarda
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedora Front-End</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Mesmo com algumas dificuldades, gostei muito de fazer parte disso e de ver o projeto ficando pronto aos poucos. Espero que ele dê certo e que realmente possa ajudar a escola.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mariane -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/mari-ft.jpeg"
                                class="card-img-top rounded-top"
                                alt="Foto de Mariane">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Mariane Firmino
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedora Full Stack</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Desenvolver esse sistema foi algo muito gratificante,
                                principalmente por estar colaborando para uma melhoria
                                no meu campus. Cada etapa foi uma experiência marcante,
                                com muitos desafios e aprendizados, estou muito feliz
                                em desenvolvê-lo junto dos meus amigos.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Rafael -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm text-center">
                        <div>
                            <img src="<?= URL ?>/img/rafael-ft.jpeg"
                                class="card-img-top rounded-top"
                                alt="Foto de Rafael">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                Rafael Caldeira
                            </h5>

                            <h6 class="text-success">
                                <strong>Desenvolvedor Back-end</strong>
                            </h6>

                            <p class="card-text mt-2">
                                Foi uma ótima experiência trabalhar nesse projeto.
                                Gosto de jogos e esportes.
                            </p>
                        </div>
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