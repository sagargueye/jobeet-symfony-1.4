<?php use_stylesheet('jobs.css') ?>

<h1>Job List</h1>

<table>
    <thead>
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Type</th>
        <!-- more columns here -->
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
        <tr>
            <td>
                <a href="<?php echo url_for('job/show?id='.$jobeet_job->getId()) ?>">
                    <?php echo $jobeet_job->getId() ?>
                </a>
            </td>
            <td><?php echo $jobeet_job->getCategoryId() ?></td>
            <td><?php echo $jobeet_job->getType() ?></td>
            <!-- more columns here -->
            <td><?php echo $jobeet_job->getCreatedAt() ?></td>
            <td><?php echo $jobeet_job->getUpdatedAt() ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="<?php echo url_for('job/new') ?>">New</a>

<div id="jobs">
    <table class="jobs">
        <?php foreach ($jobeet_jobs as $i => $job): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <td class="location"><?php echo $job->getLocation() ?></td>
                <td class="position">
                    <a href="<?php echo url_for('job/show?id='.$job->getId()) ?>">
                        <?php echo $job->getPosition() ?>
                    </a>
                </td>
                <td class="company"><?php echo $job->getCompany() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>