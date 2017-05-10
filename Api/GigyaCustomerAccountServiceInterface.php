<?php
/**
 * Copyright © 2016 X2i.
 */

namespace Gigya\GigyaIM\Api;

use Gigya\CmsStarterKit\sdk\GSApiException;
use Gigya\GigyaIM\Api\Data\GigyaCustomerAccountInterface;

/**
 * Interface GigyaCustomerAccountService
 *
 * Proxy to the Gigya service for all operations concerning the customer accounts.
 *
 * @package Gigya\GigyaIM\Api
 */
interface GigyaCustomerAccountServiceInterface
{
    const ERR_CODE_BAD_CONFIGURATION = 400002;
    const ERR_CODE_MISSING_CERTIFICATE = 400003;
    const ERR_CODE_NOT_JOINABLE = 500000;
    const ERR_CODE_TIMEOUT = 504002;

    /**
     * Update an existing Gigya's customer account.
     *
     * @param GigyaCustomerAccountInterface $gigyaCustomerAccount Shall have a uid not null.
     * @throws GSApiException If error encountered on service call or functional error returned by service. Check error code to identify the case.
     */
    function update(GigyaCustomerAccountInterface $gigyaCustomerAccount);
}