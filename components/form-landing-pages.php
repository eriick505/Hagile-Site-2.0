<div class="form-card">
    <div class="form-icon text-right">
        <i class="fas fa-thumbs-up"></i>
    </div>  
    <div class="form-head text-center">
        <h3>Quero ser <br> cliente <b>Hagile</b>!</h3>
        <h6>Basta preencher o formulário abaixo e entraremos em contato com você.</h6>
    </div>

    <div class="form-body">
        <form class="form" action="enviaContatoCaptcha.php" id="contact-form" method="post">
            <div class="form-group">
                <label for="formNome">Nome <span>(obrigatório)</span></label>
                <input type="text" class="form-control" name="nome" id="formNome" aria-describedby="nome" required>
            </div>

            <div class="form-group">
                <label for="formEmail">E-mail <span>(obrigatório)</span></label>
                <input type="email" class="form-control" name="email" id="formEmail" aria-describedby="email" required>
            </div>

            <div class="form-group">
                <label for="formEmail">Mensagem <span>(obrigatório)</span></label>
                <textarea class="form-control" name="recebemsg" id="mensagem" rows="3"></textarea>
            </div>

            <div class="g-recaptcha mb-3" data-sitekey="6LcYje4UAAAAAFINgIkW70onFmHmwl6uLju7qDxY"></div>

            <button type="submit" class="btn btn-primary w-100 rounded-pill" onclick="return gtag_report_conversion('https://www.hagile.com.br/impulsione-suas-redes-sociais')" aria-label="comece agora">Comece agora!</button>

        </form>

        <div class="form-footer">
            <h6>Suas informações estão seguras conosco.</h6>
        </div>
    </div>
</div>