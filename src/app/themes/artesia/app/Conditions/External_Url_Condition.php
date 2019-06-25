<?php

namespace App\Conditions;

use Carbon_Fields\Container\Condition\Condition;
use App\Debug;

class External_Url_Condition extends Condition
{

    /**
     * Check if the condition is fulfilled
     *
     * @param  array $environment
     * @return bool
     */
    public function is_fulfilled($environment)
    {
        $urlField = carbon_get_post_meta($environment['post_id'], 'home_external_url');

        return $this->compare(
            (bool) $urlField,
            $this->get_comparison_operator(),
            $this->get_value()
        );
    }
}