<?php defined('ALTUMCODE') || die() ?>

<footer class=" <?= \Altum\Routing\Router::$controller_key == 'index' ? 'm-0' : null ?>">
    <div class="page-footer-section bg-dark fg-white">
        <div class="container mb-5">
            <div class="row justify-content-center text-center wow fadeInUp">
                <div class="col-lg-8">
                    <div class="text-center mb-3">

                    </div>
                    <h3 class="mb-3"><span class="fg-primary">troo</span>.link</h3>
                    <p class="caption">Making it easier for your business to be accessible to everyone. <br> Create, Build and Share your unique troolink profile with the everyone</p>

                    <ul class="nav justify-content-center py-3">
                        <?php foreach ($data->pages as $data) : ?>
                            <li class="nav-item"><a href="<?= $data->url ?>" target="<?= $data->target ?>" class="nav-link fg-white px-4"><?= $data->title ?></a></li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </div>
        </div>

        <hr>
        <!-- Please don't remove or modify the credits below -->
        <p class="text-center mt-4 wow fadeIn">Copyright &copy; 2020 troo.link. All right reserved</p>
    </div>

    <script src='<?= SITE_URL . ASSETS_URL_PATH . 'js/jquery-3.5.1.min.js' ?>'></script>
    <script src='<?= SITE_URL . ASSETS_URL_PATH . 'js/bootstrap.bundle.min.js' ?>'></script>
    <script src='<?= SITE_URL . ASSETS_URL_PATH . 'vendor/owl-carousel/js/owl.carousel.min.js' ?>'></script>
    <script src='<?= SITE_URL . ASSETS_URL_PATH . 'vendor/wow/wow.min.js' ?>'></script>
    <script src='<?= SITE_URL . ASSETS_URL_PATH . 'js/mobster.js' ?>'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>