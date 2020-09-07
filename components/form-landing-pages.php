<div class="form-card">
    <div class="form-icon text-right">
        <i class="fas fa-thumbs-up"></i>
    </div>  
    <div class="form-head text-center">
        <h3>Quero ser <br> cliente <b>Hagile</b>!</h3>
        <p>Basta preencher o formulário abaixo e entraremos em contato com você.</p>
    </div>

    <div class="form-body">
        <form class="form" action="<?php bloginfo('template_url'); ?>/utils/enviar-email.php" id="contact-form" method="post">
            <div class="form-group">
                <label for="formNome">Nome <span>*</span></label>
                <input type="text" class="form-control" name="nome" id="formNome" aria-describedby="nome" required>
            </div>

            <div class="form-group">
                <label for="formEmail">E-mail <span>*</span></label>
                <input type="email" class="form-control" name="email" id="formEmail" aria-describedby="email" required>
            </div>

            <div class="form-group">
                <label for="formTelefone">Telefone <span>*</span></label>
                <input type="text" class="form-control" name="telefone" id="formTelefone" aria-describedby="telefone" required>
            </div>

            <div class="form-group">
                <label for="FormMensagem">Mensagem <span>*</span></label>
                <textarea class="form-control" name="mensagem" id="FormMensagem" rows="3"></textarea>
            </div>

            <div class="g-recaptcha mb-3" data-sitekey="6LcYje4UAAAAAFINgIkW70onFmHmwl6uLju7qDxY"></div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill" onclick="return gtag_report_conversion('https://www.hagile.com.br/impulsione-suas-redes-sociais')" aria-label="comece agora">Comece agora!</button>
        </form>

        <div class="form-footer text-center mt-3">
            <h6 class="text-secondary">Suas informações estão seguras conosco.</h6>
        </div>
    </div>
</div>