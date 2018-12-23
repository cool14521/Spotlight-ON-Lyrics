<?php

namespace Laravel\Nova\Tests\Fixtures;

class PostPolicy
{
    /**
     * Determine if the given user can view resources.
     */
    public function viewAny($user)
    {
        return true;
    }

    /**
     * Determine if the given posts can be updated.
     */
    public function update($user, $model)
    {
        return $_SERVER['nova.posts.updatable'] ?? true;
    }

    /**
     * Determine if the given posts can be deleted.
     */
    public function delete($user, $model)
    {
        return $_SERVER['nova.posts.deletable'] ?? true;
    }
}
