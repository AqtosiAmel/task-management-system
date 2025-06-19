<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Register</h4>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('register') ?>">
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required value="<?= old('username') ?>" />
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required value="<?= old('email') ?>" />
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label>Role</label>
                        <select name="role" class="form-control" id="roleSelect">
                            <option value="user" <?= old('role') === 'user' ? 'selected' : '' ?>>User</option>
                            <option value="admin" <?= old('role') === 'admin' ? 'selected' : '' ?>>Admin</option>
                        </select>
                    </div>
                    <div class="mb-3" id="regCodeDiv" style="display: none;">
                        <label for="reg_code" class="form-label">Registration Code</label>
                        <input type="text" name="reg_code" id="reg_code" class="form-control" value="<?= old('reg_code') ?>" />
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
                <p class="mt-3 text-center">Already have an account? <a href="<?= base_url('login') ?>">Login here</a>.</p>
            </div>
        </div>
    </div>
</div>
<script>
    function toggleRegCode() {
        var role = document.getElementById('roleSelect').value;
        var regDiv = document.getElementById('regCodeDiv');
        var regInput = document.getElementById('reg_code');
        if (role === 'admin') {
            regDiv.style.display = 'block';
            regInput.required = true;
        } else {
            regDiv.style.display = 'none';
            regInput.required = false;
            regInput.value = '';
        }
    }
    document.getElementById('roleSelect').addEventListener('change', toggleRegCode);
    window.onload = toggleRegCode;
</script>
<?= $this->endSection() ?>
