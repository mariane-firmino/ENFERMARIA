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
                <h1>Calendário</h1>
                <p>Gerencie seus compromissos no calendário.</p>
            </div>
            <div class="col-4 text-end">
                <img src="<?= URL ?>/img/logo_enfermaria.jpeg" class="logo-home" alt="Logo">
            </div>
        </div>
    </div>

    <main class="calendario-agenda-page">


        <!-- =================================================
        ÁREA PRINCIPAL
        ================================================== -->

        <div class="calendario-agenda-layout">


            <!-- =================================================
                COLUNA DO CALENDÁRIO
            ================================================== -->

            <div class="calendario-agenda-calendar-column">


                <!-- BOTÃO
                    FICA EM CIMA DO CALENDÁRIO
                    E NA PONTA ESQUERDA
                -->

                <?php include '../App/Views/calendarios/adicionarCompromisso.php' ?>


                <!-- =================================================
                    CALENDÁRIO
                ================================================== -->

                <section class="calendario-agenda-box">


                    <!-- CABEÇALHO -->

                    <header class="calendario-agenda-header">

                        <button
                            id="calendario-agenda-prev"
                            class="calendario-agenda-arrow"
                            type="button">
                            ←
                        </button>

                        <div class="calendario-agenda-title-area">


                            <button
                                id="calendario-agenda-month-button"
                                class="calendario-agenda-title-button"
                                type="button">
                                Janeiro
                            </button>


                            <span class="calendario-agenda-title-of">
                                de
                            </span>


                            <button
                                id="calendario-agenda-year-button"
                                class="calendario-agenda-title-button"
                                type="button">
                                2026
                            </button>


                        </div>


                        <button
                            id="calendario-agenda-next"
                            class="calendario-agenda-arrow"
                            type="button">
                            →
                        </button>
                    </header>



                    <!-- MENU MESES -->

                    <div
                        id="calendario-agenda-month-menu"
                        class="calendario-agenda-dropdown calendario-agenda-month-dropdown">
                    </div>



                    <!-- MENU ANOS -->

                    <div
                        id="calendario-agenda-year-menu"
                        class="calendario-agenda-dropdown calendario-agenda-year-dropdown">
                    </div>



                    <!-- DIAS DA SEMANA -->

                    <div
                        id="calendario-agenda-week"
                        class="calendario-agenda-week">
                    </div>



                    <!-- DIAS -->

                    <div
                        id="calendario-agenda-grid"
                        class="calendario-agenda-grid">
                    </div>


                </section>

            </div>



            <!-- =================================================
                PAINEL DIREITO
            ================================================== -->

            <aside class="calendario-agenda-side-panel">
                <h2 class="calendario-agenda-side-title">
                    Compromissos do mês
                </h2>



                <div class="calendario-agenda-legend">
                    <span
                        class="calendario-agenda-legend-dot calendario-agenda-black">
                    </span>
                    <span>
                        Consultas realizadas
                    </span>
                </div>



                <!-- PRÓXIMAS -->
                <section class="calendario-agenda-side-section">
                    <h3>
                        Próximas consultas
                    </h3>

                    <div
                        id="calendario-agenda-upcoming"
                        class="calendario-agenda-side-list">
                    </div>
                </section>



                <!-- REALIZADAS -->
                <section
                    class="calendario-agenda-side-section calendario-agenda-completed-section">

                    <h3>
                        Consultas realizadas
                    </h3>

                    <div
                        id="calendario-agenda-completed"
                        class="calendario-agenda-side-list">
                    </div>

                </section>
            </aside>
        </div>
    </main>



    <!-- =================================================
        MODAL
    ================================================== -->

    <div
        id="calendario-agenda-modal"
        class="calendario-agenda-modal">


        <div class="calendario-agenda-modal-box">
            <div class="calendario-agenda-modal-header">

                <h2>
                    Adicionar Compromisso
                </h2>

                <button
                    id="calendario-agenda-modal-close"
                    type="button">
                    ×
                </button>
            </div>



            <form id="calendario-agenda-form">
                <div class="calendario-agenda-field">
                    <label for="calendario-agenda-date">
                        Data
                    </label>

                    <input
                        id="calendario-agenda-date"
                        type="date"
                        required>

                </div>



                <div class="calendario-agenda-field">
                    <label for="calendario-agenda-time">
                        Horário
                    </label>

                    <input
                        id="calendario-agenda-time"
                        type="time"
                        required>
                </div>



                <div class="calendario-agenda-field">
                    <label for="calendario-agenda-type">
                        Tipo
                    </label>

                    <input
                        id="calendario-agenda-type"
                        type="text"
                        placeholder="Consulta"
                        required>
                </div>



                <div class="calendario-agenda-field">
                    <label for="calendario-agenda-color">
                        Cor
                    </label>

                    <input
                        id="calendario-agenda-color"
                        type="color"
                        value="#ff0000">
                </div>

                <button
                    class="btn btn-success w-100"
                    type="submit">

                    Salvar compromisso
                </button>
            </form>
        </div>
    </div>

</div>
<?php include '../App/Views/footer.php' ?>