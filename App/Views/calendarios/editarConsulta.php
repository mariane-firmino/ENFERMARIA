<!-- Botão para abrir o modal -->
<button type="button"
    class="btn btn-success"
    data-bs-toggle="modal"
    data-bs-target="#modalCompromisso">
    Editar compromisso
</button>


<!-- Modal -->
<div class="modal fade"
    id="modalCompromisso"
    tabindex="-1"
    aria-labelledby="modalCompromissoLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Corpo -->
            <div class="modal-body">

                <h5 class="modal-title fw-bold mb-3" id="modalCompromissoLabel">
                    Editar compromisso
                </h5>

                <div class="row g-2">

                    <!-- Data -->
                    <div class="col-8">
                        <label for="data" class="form-label fw-bold mb-1">
                            Data do compromisso
                        </label>

                        <input type="date"
                            class="form-control"
                            id="data"
                            name="data"
                            value="2026-06-06">
                    </div>


                    <!-- Horário -->
                    <div class="col-4">
                        <label for="horario" class="form-label fw-bold mb-1">
                            Horário
                        </label>

                        <input type="time"
                            class="form-control"
                            id="horario"
                            name="horario"
                            value="09:00">
                    </div>


                    <!-- Tipo -->
                    <div class="col-12">
                        <label for="tipo" class="form-label fw-bold mb-1">
                            Tipo de compromisso
                        </label>

                        <select class="form-select"
                            id="tipo"
                            name="tipo">

                            <option selected>
                                Consulta - Periódica
                            </option>

                            <option>
                                Consulta - Emergencial
                            </option>

                            <option>
                                Avaliação
                            </option>

                            <option>
                                Retorno
                            </option>

                        </select>
                    </div>


                    <!-- Responsável -->
                    <div class="col-12">
                        <label for="responsavel" class="form-label fw-bold mb-1">
                            Responsável
                        </label>

                        <select class="form-select"
                            id="responsavel"
                            name="responsavel">

                            <option selected>
                                Enfermeira
                            </option>

                            <option>
                                Médico
                            </option>

                            <option>
                                Técnico de enfermagem
                            </option>

                        </select>
                    </div>


                    <!-- Descrição -->
                    <div class="col-12">
                        <label for="descricao" class="form-label fw-bold mb-1">
                            Descrição
                        </label>

                        <input type="text"
                            class="form-control"
                            id="descricao"
                            name="descricao"
                            value="Consulta de rotina">
                    </div>


                    <!-- Observações -->
                    <div class="col-12">
                        <label for="observacoes" class="form-label fw-bold mb-1">
                            Observações (opcional)
                        </label>

                        <textarea class="form-control"
                            id="observacoes"
                            name="observacoes"
                            rows="4">Medir a pressão. Aluno já demonstrou pressão baixa antes.</textarea>
                    </div>

                </div>

            </div>


            <!-- Rodapé -->
            <div class="modal-footer">

                <button type="button"
                    class="btn btn-outline-secondary px-4"
                    data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button type="submit"
                    class="btn btn-success px-5">
                    Salvar
                </button>

            </div>

        </div>
    </div>
</div>