<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Create Task</h2>

<form method="post" action="<?= base_url('tasks/store') ?>" enctype="multipart/form-data">
    <?= csrf_field() ?> <!-- This is important if CSRF protection is enabled -->

    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required />
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option>Pending</option>
            <option>In Progress</option>
            <option>Completed</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Priority</label>
        <select name="priority" class="form-control">
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Due Date & Time</label>
        <input type="datetime-local" name="due_date" class="form-control" />
    </div>

    <div class="mb-3">
        <label>Attachment (Image or File, max 2MB)</label>
        <input type="file" name="attachment" class="form-control" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" />
    </div>

    <button type="submit" class="btn btn-success">Create</button>
</form>

<?= $this->endSection() ?>
