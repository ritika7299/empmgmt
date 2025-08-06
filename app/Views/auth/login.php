<?= $this->extend('layouts/default_no_auth') ?>

<?= $this->section('content') ?>
<div class="page-content">
    <div class="content-wrapper">
        <div class="content d-flex justify-content-center align-items-center">

            <form class="login-form form-validate" action="<?= base_url('/login') ?>" method="post">
                <?= csrf_field() ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
                <?php endif; ?>
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3"> <i
                                class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h2 class="mb-0">Login</h2>
                        </div>
                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                                required />
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>
                        <div class="form-group form-group-feedback form-group-feedback-left position-relative">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" required />
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                            <i class="fa fa-eye-slash" id="togglePassword" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%);
                            cursor: pointer; color: #aaa; z-index: 2; width: 20px; text-align: center;">
                            </i>
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-input-styled" data-fouc />
                                    Remember
                                </label>
                            </div>
                            <a href="javascript::void(0);" class="ml-auto">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Log in <i class="icon-circle-right2 ml-2"></i>
                            </button>
                        </div>
                        <div class="form-group text-center text-muted content-divider">
                            <span class="px-2">Don't have an account?</span>
                        </div>
                        <div class="form-group">
                            <a href="javascript::void(0);" class="btn btn-light btn-block">Registration</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        if (this.classList.contains('fa-eye-slash')) {
            this.classList.remove('fa-eye-slash');
            this.classList.add('fa-eye');
        } else {
            this.classList.remove('fa-eye');
            this.classList.add('fa-eye-slash');
        }
    });
</script>
<?= $this->endSection() ?>