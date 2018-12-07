
<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>

<div id="job">
    <h1><?php echo $jobs->getCompany() ?></h1>
    <h2><?php echo $jobs->getLocation() ?></h2>
    <h3>
        <?php echo $jobs->getPosition() ?>
        <small> - <?php echo $jobs->getType() ?></small>
    </h3>

    <?php if ($jobs->getLogo()): ?>
        <div class="logo">
            <a href="<?php echo $jobs->getUrl() ?>">
                <img src="/uploads/jobs/<?php echo $jobs->getLogo() ?>"
                     alt="<?php echo $jobs->getCompany() ?> logo" />
            </a>
        </div>
    <?php endif; ?>

    <div class="description">
        <?php echo simple_format_text($jobs->getDescription()) ?>
    </div>

    <h4>How to apply?</h4>

    <p class="how_to_apply"><?php echo $jobs->getHowToApply() ?></p>

    <div class="meta">
        <small>posted on <?php echo $jobs->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
    </div>
</div>
<div>pour retourner a la page d'accueil
    <a href="<?php echo url_for('homepage') ?>">
         cliquer ici!
    </a>

</div>