<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Jobeet Admin Interface</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php include_stylesheets() ?>
    <?php use_javascript('jquery-1.2.6.min.js') ?>
    <?php use_javascript('search.js') ?>
    <?php include_javascripts() ?>

</head>
<body>
<div class="search">
    <h2>Ask for a job</h2>
    <form action="<?php echo url_for('job_search') ?>" method="get">
        <input type="text" name="query" value="<?php echo $sf_request->getParameter('query') ?>" id="search_keywords" />
        <input type="submit" value="search" />
        <img id="loader" src="/legacy/images/loader.gif" style="vertical-align: middle; display: none" />
        <div class="help">
            Enter some keywords (city, country, position, ...)
        </div>
    </form>
</div>
<div id="container">
    <div id="header">
        <h1>
            <a href="<?php echo url_for('homepage') ?>">
                <img src="/legacy/images/logo.jpg" alt="Jobeet Job Board" />
            </a>
        </h1>
    </div>

    <?php if ($sf_user->isAuthenticated()): ?>
        <div id="menu">
            <ul>
                <li><?php echo link_to('Jobs', 'jobeet_job') ?></li>
                <li><?php echo link_to('Categories', 'jobeet_category') ?></li>
                <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
                <li><?php echo link_to('Users', 'sf_guard_user') ?></li>
                <li>
                    <a href="<?php echo url_for('jobeet_affiliate') ?>">
                        Affiliates - <strong><?php echo Doctrine_Core::getTable('JobeetAffiliate')->countToBeActivated() ?></strong>
                    </a>
                </li>
            </ul>
        </div>
    <?php endif ?>

    <div id="content">
        <?php echo $sf_content ?>
    </div>

    <div id="footer">
        <img src="/legacy/images/jobeet-mini.png" />
        powered by <a href="/">
            <img src="/legacy/images/symfony.gif" alt="symfony framework" /></a>
    </div>
</div>
</body>
</html>