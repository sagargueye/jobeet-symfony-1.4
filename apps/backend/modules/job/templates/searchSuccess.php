

    <div id="jobs">
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
                <?php foreach ($jobs as $job): ?>

                    <tr>
                        <td>
                            <a href="<?php echo url_for('job/show?id='.$job->getId()) ?>">
                                <?php echo $job->getId() ?>
                            </a>
                        </td>
                        <td><?php echo $job->getCategoryId() ?></td>
                        <td><?php echo $job->getType() ?></td>
                        <!-- more columns here -->
                        <td><?php echo $job->getCreatedAt() ?></td>
                        <td><?php echo $job->getUpdatedAt() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div>pour retourner a la page d'accueil
        <a href="<?php echo url_for('homepage') ?>">
            cliquer ici!
        </a>

    </div>