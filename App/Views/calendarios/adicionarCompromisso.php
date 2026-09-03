    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Adicionar Consulta
</button>

<!-- Modal Container with static backdrop -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content w-100">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Adicionar Consulta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="container text-justify">
                <div class="row align-items-start">
                        <div class="co-12 col-md-6">
                            <!-- Campo de Data -->
                            <div class="mb-3">
                            <label for="dataInput" class="form-label "><b>Data</b></label>
                            <input type="date" class="form-control" id="dataInput">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Campo de Hora -->
                            <div class="mb-3">
                            <label for="horaInput" class="form-label"><b>Hora</b></label>
                            <input type="time" class="form-control" id="horaInput">
                            </div>
                        </div>
                            
                        </div>
                </div>
                <div class="row align-items-start">
                        <div class="co-12 col-md-12">
                            <div class="mb-3">
                            <label for="tipoConsulta" class="form-label"><b>Tipo de Consulta</b></label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione uma opçao</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                        </div>
                </div>
                <div class="row align-items-start">
                        <div class="co-12 col-md-12">
                            <div class="mb-3">
                            <label for="tipoConsulta" class="form-label"><b>Responsável</b></label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione uma opçao</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            </select>
                        </div>
                        </div>
                </div>
                <div class="row align-items-start">
                        <div class="co-12 col-md-12">
                            <div class="mb-3">
                            <label for="tipoConsulta" class="form-label"><b>Descrição</b></label>
                            <input type="text" class="form-control" id="tipoConsulta" placeholder="Digite a descrição da consulta">
                            </div>
                        </div>
                </div>
                <div class="row align-items-start">
                        <div class="co-12 col-md-12">
                            <div class="mb-3">
                            <label for="tipoConsulta" class="form-label"><b>Observação(Opcional)</b></label>
                            <textarea class="form-control" id="tipoConsulta" rows="3" placeholder="Digite a observação da consulta"></textarea>
                            </div>
                        </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Salvar</button>
      </div>
    </form>
      
    </div>
  </div>
</div>