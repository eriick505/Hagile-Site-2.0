<div class="patternForm">
  <form class="form" action="enviaContatoCaptcha.php" id="contact-form" method="post">
    <div class="form-group">
      <input type="text" name="nome" class="form-control rounded-pill" aria-label="nome" placeholder="Nome ou Empresa">
    </div>

    <div class="form-group">
      <input type="email" name="email" class="form-control rounded-pill" aria-label="e-mail" placeholder="E-mail">
    </div>

    <div class="form-group">
      <input type="tel" name="telefone" class="form-control rounded-pill" aria-label="telefone" placeholder="Telefone">
    </div>

    <div class="form-group">
      <label class="sr-only" for="mensagem">Mensagem</label>
      <textarea class="form-control" name="recebemsg" placeholder="Mensagem..." id="mensagem" rows="3"></textarea>
    </div>

    <div class="g-recaptcha mb-2" data-sitekey="6LcYje4UAAAAAFINgIkW70onFmHmwl6uLju7qDxY"></div>

    <button type="submit" class="btn btn-primary w-100 rounded-pill mt-3" aria-label="comece agora"><b>Fale Conosco!</b></button>
  </form>

  <div class="another-option">
    <span>Ou se preferir... <br> Fale Conosco via <a href="https://api.whatsapp.com/send?phone=5581988141162&text=Ol%C3%A1,%20estou%20entrando%20em%20contato%20atrav%C3%A9s%20do%20site,%20voc%C3%AA%20poderia%20ajudar?" target="_blank" rel="noopener noreferrer"><b>WhatsApp <i class="fab fa-whatsapp"></i></b></a></span>
  </div>
</div>