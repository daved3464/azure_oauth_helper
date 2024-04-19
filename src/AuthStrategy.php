<?php

declare(strict_types=1);

namespace Hollow3464\AzureOauthHelper;

enum AuthStrategy: string
{
    case AUTHORIZATION_CODE = 'authorization_code';
    case CLIENT_CREDENTIALS = 'client_credentials';
}
