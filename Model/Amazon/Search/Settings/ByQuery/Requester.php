<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model\Amazon\Search\Settings\ByQuery;

class Requester
    extends \Ess\M2ePro\Model\Amazon\Connector\Search\ByQuery\ItemsRequester
{
    // ########################################

    protected function getResponserRunnerModelName()
    {
        return 'Amazon\Search\Settings\ProcessingRunner';
    }

    protected function getResponserParams()
    {
        return array_merge(
            parent::getResponserParams(),
            array('type' => 'string', 'value' => $this->getQuery())
        );
    }

    // ########################################

    protected function getQuery()
    {
        return $this->params['query'];
    }

    protected function getVariationBadParentModifyChildToSimple()
    {
        return $this->params['variation_bad_parent_modify_child_to_simple'];
    }

    // ########################################
}