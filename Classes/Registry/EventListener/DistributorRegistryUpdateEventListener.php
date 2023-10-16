<?php

namespace DigitalMarketingFramework\Typo3\Distributor\SalesforceCase\Registry\EventListener;

use DigitalMarketingFramework\Distributor\SalesforceCase\DistributorSalesforceCaseInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorSalesforceCaseInitialization('dmf_distributor_salesforcecase'));
    }
}
