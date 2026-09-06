<!-- Botão para abrir o modal -->

<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCompromisso">
    Ver compromisso
</button>

<!-- Modal -->

<div class="modal fade" id="modalCompromisso" tabindex="-1" aria-labelledby="modalCompromissoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Cabeçalho -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="modalCompromissoLabel">
                    Detalhes do compromisso
                </h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Fechar">
                </button>
            </div>

            <!-- Corpo -->
            <div class="modal-body">

                <div class="row g-3">

                    <div class="col-8">
                        <label class="fw-bold">Data de compromisso</label>
                        <p class="mb-0">
                            <img src="<?= URL ?>/img/Calendariodois.png" width="20" alt="Calendário">
                            06/06/2026
                        </p>
                    </div>

                    <div class="col-4">
                        <label class="fw-bold">Horário</label>
                        <p class="mb-0">
                            <img src="<?= URL ?>/img/relogio.png" width="20" alt="Relógio">
                            09:00
                        </p>
                    </div>

                    <div class="col-8">
                        <label class="fw-bold">Tipo de compromisso</label>
                        <p class="mb-0">
                            <img src="<?= URL ?>/img/Checklist.png" width="20" alt="Checklist">
                            Consulta - periódica
                        </p>
                    </div>

                    <div class="col-8">
                        <label class="fw-bold">Responsável</label>
                        <p class="mb-0">
                            <img src="<?= URL ?>/img/Checklist.png" width="20" alt="Checklist">
                            Enfermeira
                        </p>
                    </div>

                    <div class="col-8">
                        <label class="fw-bold">Descrição</label>
                        <p class="mb-0">
                            Consulta de rotina
                        </p>
                    </div>

                    <div class="col-12">
                        <label class="fw-bold">Observações (opcional)</label>
                        <p class="mb-0">
                            Medir a pressão. Aluno já demonstrou pressão baixa antes.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Rodapé -->
            <div class="modal-footer">
                <button type="button"
                    class="btn btn-outline-danger"
                    data-bs-dismiss="modal">
                    Excluir
                </button>

                <?php include '../App/Views/calendarios/editarConsulta.php' ?>
            </div>

        </div>
    </div>

</div>