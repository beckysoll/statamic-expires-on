<?php

namespace Statamic\Addons\ExpiresOn;

use Statamic\Extend\Modifier;

class ExpiresOnModifier extends Modifier
{
    /**
     * Filter Array by expiration_date
     *
     * @param $value
     * @param $params
     * @return array
     */
    public function index($value, $params)
    {
        $expiration = array_get($params, 0);

        return collect($value)->filter(function ($value) use ($expiration) {
          return !(isset($value[$expiration])) || carbon($value[$expiration])->isFuture();
        })->toArray();

    }
}
