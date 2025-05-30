<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Register</h2>
<form method="post" action="<?= base_url('register') ?>">
    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required />
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required />
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required />
    </div>
    <button type="submit" class="btn btn-success">Register</button>
</form>

<p class="mt-3">Already have an account? <a href="<?= base_url('login') ?>">Login here</a>.</p>

<?= $this->endSection() ?>
