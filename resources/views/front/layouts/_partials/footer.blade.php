<footer>

    <div class="container">

        <div class="row d-flex align-items-center">

            <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                <div class="copy text-light">
                    © @php echo date('Y'); @endphp Comicro, Inc. - Todos os direitos reservados
                </div>
            </div><!-- COL -->

            <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-center justify-content-md-end">

                    <a href="https://comicro.org.br/" title="Site COMICRO" target="_blank">Site COMICRO</a>

                    <ul class="d-flex">
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=5581981531166&text=Ol%C3%A1,%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20COMICRO%20Conectando%C2%A0Neg%C3%B3cios" title="Nosso WhatsApp" target="_blank">
                                <img src="{{ asset('img/icone-whatsapp-footer.svg') }}" alt="Nosso WhatsApp" title="Nosso WhatsApp" width="24" height="24" />
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/comicrobrasil/" title="Siga-nos no Instagram" target="_blank">
                                <img src="{{ asset('img/icone-instagram-footer.svg') }}" alt="Siga-nos no Instagram" title="Siga-nos no Instagram" width="28" height="28" />
                            </a>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/comicrobrasil" title="Siga-nos no Facebook" target="_blank">
                                <img src="{{ asset('img/icone-facebook-footer.svg') }}" alt="Siga-nos no Facebook" title="Siga-nos no Facebook" width="28" height="28" />
                            </a>
                        </li>

                        <li>
                            <a href="https://www.linkedin.com/company/comicrobrasil/" title="Siga-nos no Linkedin" target="_blank">
                                <img src="{{ asset('img/icone-linkedin.svg') }}" alt="Siga-nos no Linkedin" title="Siga-nos no Linkedin" width="24" height="24" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- COL -->

        </div><!-- ROW -->

    </div><!-- CONTAINER -->

</footer>

<!--------------- WHATSAPP FLUTUANTE ------------->
<div class="overlay-wa-flutuante"></div>

<section class="wa-flutuante">
    <div class="icone-wa">
        <a href="#" title="Fale conosco pelo Whatsapp" data-bs-toggle="modal" data-bs-target="#waModal">
            <img src="{{ asset('img/wa-flutuante.png') }}" alt="Fale conosco pelo Whatsapp" title="Fale conosco pelo Whatsapp" width="60" height="61" class="shake" />
        </a>
    </div>

    <div class="content-wa" id="content-wa">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="thumb-title d-flex align-items-center">
                    <img src="{{ asset('img/icone-comicro.png') }}" width="50" height="50" title="COMICRO" alt="COMICRO" class="me-3" />
                    <div class="status-title d-flex flex-column">
                        <h4>COMICRO</h4>
                        <span>online</span>
                    </div>
                </div>
                <button type="button" class="btn-close-wa" aria-label="Close">X</button>
            </div>

            <div class="card-body">
                <p>Olá, tudo bem? Em que podemos te ajudar?</p>

                <form method="post" action="">
                    <!-- PARA DEIXAR OS INPUTS NO FORMATO DE INVÁLIDO É SÓ ADICIONAR A CLASSE is-invalid -->
                    <div class="input-group has-validation mb-3">
                        <input type="email" class="form-control is-invalid" placeholder="E-mail*" id="validationEmail" aria-describedby="validationEmailFeedback" required>
                        <div id="validationEmailFeedback" class="invalid-feedback">
                            Por favor informe um e-mail válido
                        </div>
                    </div>

                    <div class="input-group has-validation mb-3">
                        <input type="text" class="form-control" placeholder="Telefone*" id="validationPhone" aria-describedby="validationPhoneFeedback" required>
{{--                        <div id="validationPhoneFeedback" class="invalid-feedback">--}}
{{--                            Por favor informe seu telefone--}}
{{--                        </div>--}}
                    </div>

                    <div class="input-group has-validation">
                        <input type="text" class="form-control" placeholder="Nome*" id="validationName" aria-describedby="validationNameFeedback" required>
{{--                        <div id="validationNameFeedback" class="invalid-feedback">--}}
{{--                            Por favor informe seu Nome--}}
{{--                        </div>--}}
                    </div>

                    <div class="card-footer text-end mt-4">
                        <button type="submit" class="btn btn-sm btn-success">Iniciar conversa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
