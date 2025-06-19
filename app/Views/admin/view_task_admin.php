<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>View Task (Admin)</h3>
    <div class="card">
        <div class="card-body">
            <p><strong>Title:</strong> <?= esc($task['title']) ?></p>
            <p><strong>Description:</strong> <?= esc($task['description']) ?></p>
            <p><strong>Status:</strong> <?= esc($task['status']) ?></p>
            <p><strong>Priority:</strong> <?= esc($task['priority']) ?></p>
            <p><strong>Due Date:</strong> <?= esc(date('F j, Y - g:i A', strtotime($task['due_date']))) ?></p>
            <p><strong>Attachment:</strong>
                <?php if ($task['attachment']): ?>
                    <a href="<?= base_url('uploads/' . $task['attachment']) ?>" target="_blank"><?= esc($task['attachment']) ?></a>
                <?php else: ?>
                    None
                <?php endif; ?>
            </p>
        </div>
    </div>
    <a href="<?= base_url('admin/dashboard') ?>" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>

<?= $this->endSection() ?>
