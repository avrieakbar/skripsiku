<?= $this->extend('layout/templates'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form action="<?= route_to('login') ?>" method="post" class="user">
                                    <?= csrf_field() ?>
                                    <?php if ($config->validFields === ['email']) : ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LdhpzUdAAAAANhqL70TPWyiP3Q5oa_IspORz0XE">
                                        </div>
                                    </div>
                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remembering" class="custom-control-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <label class="custom-control-label" for="customCheck"> <?= lang('Auth.rememberMe') ?></label>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?= lang('Auth.loginAction') ?>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p><a class="small" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                    <p><a class="small" href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>