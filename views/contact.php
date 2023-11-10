<div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="page-heading">
                <h1>Bize Ulaş</h1>
                <span class="subheading">Sorularınız için formu doldurun.</span>
            </div>
        </div>
        <div class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="my-5">
                            <form id="contactForm">
                                <div class="form-floating">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Ad Soyad" />
                                    <label for="ad">Ad Soyad</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="Email Adresiniz." />
                                    <label for="email">Email Adresiniz</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="phone" name="phone"
                                        placeholder="Telefon Numaranız" />
                                    <label for="phone">Telefon Numaranız</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Mesajınız" name="message"
                                        style="height: 12rem"></textarea>
                                    <label for="mesaj">Mesajınız</label>
                                </div>
                                <br />
                                <button class="btn btn-dark text-uppercase" id="submitButton" type="button"
                                    onclick="addContact()">Gönder</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/modules/contact.js"></script>