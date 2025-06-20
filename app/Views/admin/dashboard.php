<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h3>Admin Dashboard</h3>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <?php foreach ($users as $user): ?>
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <strong><?= esc($user['username']) ?></strong> (<?= esc($user['email']) ?>)
            </div>
            <div class="card-body">
                <?php
                    $taskModel = new \App\Models\TaskModel();
                    $tasks = $taskModel->where('user_id', $user['id'])->findAll();
                ?>

                <?php if ($tasks): ?>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Due Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $task): ?>
                                <tr>
                                    <td><?= esc($task['title']) ?></td>
                                    <td><?= esc($task['status']) ?></td>
                                    <td><?= esc($task['priority']) ?></td>
                                    <td><?= esc(date('F j, Y - g:i A', strtotime($task['due_date']))) ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/view-task/' . $task['id']) ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="<?= base_url('admin/edit-task/' . $task['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('admin/delete-task/' . $task['id']) ?>" class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p class="text-muted">No tasks found for this user.</p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
