<?php

namespace Uiza\ApiOperation;

trait Retrieve {
    /**
     * @param array|string $id The ID of the API resource to retrieve,
     *     or an options array containing an `id` key.
     * @param array|string|null $opts
     *
     * @return \Stripe\StripeObject
     */
    public static function retrieve($id, $params = null)
    {
        self::_validateParams($params);
        $instance = new static($id);
        $instance->refresh();

        return $instance;
    }
}