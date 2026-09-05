<!-- Botão -->
<button type="button"
  id="calendario-agenda-add-button"
  class="btn btn-success calendario-agenda-add-button"
  data-bs-toggle="modal"
  data-bs-target="#modalAdicionarConsulta">
  + Adicionar Consulta
</button>


<!-- Modal Adicionar Consulta -->
<div class="modal fade"
  id="modalAdicionarConsulta"
  data-bs-backdrop="static"
  data-bs-keyboard="false"
  tabindex="-1"
  aria-labelledby="modalAdicionarConsultaLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

    <div class="modal-content w-100">

      <div class="modal-header">
        <h5 class="modal-title" id="modalAdicionarConsultaLabel">
          Adicionar Consulta
        </h5>

        <button type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close">
        </button>
      </div>

      <div class="modal-body">

        <form>

          <div class="row align-items-start">

            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="dataConsulta" class="form-label">
                  <b>Data</b>
                </label>

                <input type="date"
                  class="form-control"
                  id="dataConsulta">
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="mb-3">
                <label for="horaConsulta" class="form-label">
                  <b>Hora</b>
                </label>

                <input type="time"
                  class="form-control"
                  id="horaConsulta">
              </div>
            </div>

          </div>

          <div class="mb-3">
            <label for="tipoConsulta" class="form-label">
              <b>Tipo de Consulta</b>
            </label>

            <select class="form-select" id="tipoConsulta">
              <option selected>Selecione uma opção</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="responsavelConsulta" class="form-label">
              <b>Responsável</b>
            </label>

            <select class="form-select" id="responsavelConsulta">
              <option selected>Selecione uma opção</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="descricaoConsulta" class="form-label">
              <b>Descrição</b>
            </label>

            <input type="text"
              class="form-control"
              id="descricaoConsulta"
              placeholder="Digite a descrição da consulta">
          </div>

          <div class="mb-3">
            <label for="observacaoConsulta" class="form-label">
              <b>Observação (Opcional)</b>
            </label>

            <textarea class="form-control"
              id="observacaoConsulta"
              rows="3"
              placeholder="Digite a observação da consulta"></textarea>
          </div>

        </form>

      </div>

      <div class="modal-footer">
        <button type="button"
          class="btn btn-light"
          data-bs-dismiss="modal">
          Cancelar
        </button>

        <button type="button" class="btn btn-success">
          Salvar
        </button>
      </div>

    </div>
  </div>
</div>