<?php

namespace DigitalMarketingFramework\Typo3\Distributor\SalesforceCase\Registry\EventListener;

use DigitalMarketingFramework\Distributor\SalesforceCase\DistributorSalesforceCaseInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorSalesforceCaseInitialization('dmf_distributor_salesforcecase'));
    }
}
