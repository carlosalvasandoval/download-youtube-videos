<!-- Modal -->
<div class="modal fade" id="modalTutorial" tabindex="-1" role="dialog" aria-labelledby="modalTutorial">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tutorial de uso</h4>
      </div>
      <div class="modal-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/FmtpqbVe_Uo" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalFeedback" tabindex="-1" role="dialog" aria-labelledby="modalFeedback">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div id="feedbackMessage"></div>
        <form id="feedbackform">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Correo electrónico">
          </div>
          <div class="form-group">
            <textarea name="comentario" class="form-control" rows="4"
                      placeholder="Cuentame en que podemos mejorar, alguna funcionalidad nueva o lo que no te gustó"></textarea>
          </div>
          <div class="form-group text-center">
            <div class="g-recaptcha" data-sitekey="6Let-zQUAAAAALMVKAaC2taXgWfbOIst7yLTy22S"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-block btn-success" data-loading-text="Enviando..." id="btn-enviar-feedback">Enviar</button>
      </div>
    </div>
  </div>
</div>