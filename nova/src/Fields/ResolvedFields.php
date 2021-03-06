<?php

namespace Laravel\Nova\Fields;

use Illuminate\Support\Fluent;
use Illuminate\Support\Collection;

class ResolvedFields extends Fluent
{
    /**
     * The posts-storage callbacks for the fields.
     *
     * @var \Illuminate\Support\Collection
     */
    public $callbacks;

    /**
     * Create a new resolved fields instance.
     *
     * @param  \Illuminate\Support\Collection  $attributes
     * @param  \Illuminate\Support\Collection  $callbacks
     * @return void
     */
    public function __construct(Collection $attributes, Collection $callbacks)
    {
        parent::__construct($attributes->all());

        $this->callbacks = $callbacks;
    }

    /**
     * Get the posts-storage callbacks for the fields.
     *
     * @return \Illuminate\Support\Collection
     */
    public function callbacks()
    {
        return $this->callbacks;
    }
}
