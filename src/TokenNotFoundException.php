<?php

declare(strict_types=1);

namespace Hollow3464\AzureOauthHelper;

use Exception;

final class TokenNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('No cached token found');
    }
}
