<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2>Edit Task</h2>

<form method="post" action="<?= base_url('tasks/update/' . $task['id']) ?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?= esc($task['title']) ?>" required />
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"><?= esc($task['description']) ?></textarea>
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option <?= $task['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
            <option <?= $task['status'] == 'In Progress' ? 'selected' : '' ?>>In Progress</option>
            <option <?= $task['status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Priority</label>
        <select name="priority" class="form-control">
            <option <?= $task['priority'] == 'Low' ? 'selected' : '' ?>>Low</option>
            <option <?= $task['priority'] == 'Medium' ? 'selected' : '' ?>>Medium</option>
            <option <?= $task['priority'] == 'High' ? 'selected' : '' ?>>High</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Due Date & Time</label>
        <input type="datetime-local" name="due_date" class="form-control" value="<?= esc($task['due_date']) ?>" />
    </div>

    <div class="mb-3">
        <label>Replace Attachment (max 2MB - jpg, png, pdf only)</label>
        <input type="file" name="attachment" accept=".jpg,.jpeg,.png,.pdf" class="form-control" />
    </div>

    <?php if (!empty($task['attachment'])): ?>
        <div class="mb-3">
            <p>Current Attachment: <a href="<?= base_url('uploads/' . $task['attachment']) ?>" target="_blank"><?= esc($task['attachment']) ?></a></p>
        </div>
    <?php endif; ?>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
