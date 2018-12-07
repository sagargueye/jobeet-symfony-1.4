<?php

require_once dirname(__FILE__).'/../lib/jobGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/jobGeneratorHelper.class.php';

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends autoJobActions
{
    public function executeBatchExtend(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');

        $q = Doctrine_Query::create()
            ->from('JobeetJob j')
            ->whereIn('j.id', $ids);

        foreach ($q->execute() as $job)
        {
            $job->extend(true);
        }

        $this->getUser()->setFlash('notice', 'The selected jobs have been extended successfully.');

        $this->redirect('jobeet_job');
    }
    public function executeListDeleteNeverActivated(sfWebRequest $request)
    {
        $nb = Doctrine::getTable('JobeetJob')->cleanup(60);

        if ($nb)
        {
            $this->getUser()->setFlash('notice', sprintf('%d never activated jobs have been deleted successfully.', $nb));
        }
        else
        {
            $this->getUser()->setFlash('notice', 'No job to delete.');
        }

        $this->redirect('jobeet_job');
    }
    public function executeExtend(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $job = $this->getRoute()->getObject();
        $this->forward404Unless($job->extend());

        $this->getUser()->setFlash('notice', sprintf('Your job validity has been extended until %s.', $job->getDateTimeObject('expires_at')->format('m/d/Y')));

        $this->redirect($this->generateUrl('job_show_user', $job));
    }
    public function executeShow(sfWebRequest $request)
    {
        $this->jobs = $this->getRoute()->getObject();

    }
    public function executeSearch(sfWebRequest $request)
    {
        $this->forwardUnless($query = $request->getParameter('query'), 'job', 'index');

        $this->jobs = Doctrine_Core::getTable('JobeetJob')->getForLuceneQuery($query);

        if ($request->isXmlHttpRequest())
        {
            if ('*' == $query || !$this->jobs)
            {
                return $this->renderText('No results.');
            }

            return $this->renderPartial('job/list', array('jobs' => $this->jobs));
        }
    }
}
