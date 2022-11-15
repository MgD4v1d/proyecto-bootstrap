<!-- Start Contact Form -->
<form id="needs-validation-footer" novalidate action="#" method="post" role="form">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
            <div class="form-group">
                <input id="nombref" type="text" class="form-control requiredf" name="nombref" placeholder="* Nombre" required>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
            <div class="form-group">
                <input id="telefonof" type="text" class="form-control phone requiredf" name="telefonof" placeholder="* Teléfono (10 dígitos)" maxlength="10" pattern="[7-9]{1}[0-9]{9}" title="Escribe un teléfono válido con 10 dígitos" size="30" required>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
            <div class="form-group">
                <input id="emailf" type="email" class="form-control email" name="emailf" placeholder="* Correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <textarea id="messagef" class="form-control textarea" name="messagef" rows="4" cols="35" placeholder="Comentarios"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-6 col-md-12 col-lg-6">
                    <div class="form-group">
                        <div class="g-recaptcha" id="recaptchaFooter" data-sitekey="6LfLsrsfAAAAANVDieAOXPOW8vzQT3Mwz-AiHPqE"></div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-12 col-lg-6">
                    <div class="form-group">
                        <button value="Submit" class="btn btn-primary btn-send btn-lg btn-block " type="submit">ENVIAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="successMsg"></div>
