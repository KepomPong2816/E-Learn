<!-- Login -->
<div class="container-fluid">
    <div class="container d-grid d-md-flex p-4 p-md-0 position-relative" style="margin-top: 50px">
        <div class="w-100">
            <div class="d-none d-lg-block">
                <img src="<?= asset('assets/img/about.jpg') ?>"
                    class="float-end d-block img-fluid rounded-5 rounded-start h-auto ">
            </div>
            <div class="col-12 col-lg-6 h-100 p-4 pe-5 bg-white rounded-5 position-absolute" id="formLogin">
                <div class="d-flex ps-md-4 flex-column justify-content-center h-100">
                    {{--
                        msg error
                    --}}
                    <h4 class="ps-1 fw-semibold">Login</h4>
                    <form class="fw-normal" action="<?= url('login/authentication') ?>" method="POST">
                        @csrf
                        <div class="my-4 float-label-control">
                            <input type="email"
                                class="form-control input-text woocommerce-Input woocommerce-Input--text"
                                id="exampleInputEmail1" name="email" placeholder="Email" aria-describedby="emailHelp"
                                required>
                        </div>
                        <div class="input-group my-4">
                            <input type="password"
                                class="form-control input-text woocommerce-Input woocommerce-Input--text"
                                name="password" id="exampleInputPassword1" placeholder="Password"
                                aria-describedby="passwordHelp" required>
                            <span class="align-self-center fw-semibold" id="togglePassword"
                                style="cursor: pointer;margin-left: -46px;z-index: 5;padding: 10px;"><i
                                    class="far fa-eye fs-4"></i></span>
                        </div>
                        <div class="mt-4 my-3">
                            <div class="g-recaptcha" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                        </div>
                        <div class="mt-3 my-3">
                            <a href="<?= url('forgot-password') ?>"
                                class="text-decoration-none fw-bold text-black">Forgot Password?</a>
                        </div>
                        <div class="my-4">
                            <button type="submit"
                                class="btn  btn-main-2 btn-primary w-100 rounded-3 fw-semibold py-2 text-black border-0">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login -->

<style>
    #g-recaptcha-response {
        display: block !important;
        position: absolute;
        margin: -78px 0 0 0 !important;
        width: 302px !important;
        height: 76px !important;
        z-index: -999999;
        opacity: 0;
    }
</style>

<script>
    window.onload = function() {
        var $recaptcha = document.querySelector('#g-recaptcha-response');

        if ($recaptcha) {
            $recaptcha.setAttribute("required", "required");
        }
        const $form = document.querySelector('form');
        $form.addEventListener('submit', (event) => {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                event.preventDefault();
            }
        });
    };

    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#exampleInputPassword1");

    togglePassword.addEventListener("click", function(e) {
        if (password.value) {
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            togglePassword.innerHTML = password.getAttribute("type") === "password" ?
                "<i class='far fa-eye fs-4'></i>" :
                "<i class='far fa-eye-slash fs-4'></i>";
            e.preventDefault();
        }
    });
</script>
