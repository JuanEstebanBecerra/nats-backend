<?php

namespace Kernel\Infrastructure\Repositories;

use App\Models\User;
use Kernel\Infrastructure\Interfaces\Repositories\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected User|null $user = null;

    /**
     * @param $user
     * @return $this
     */
    public function setUser($user):self
    {
        $this->user = $user;
        return $this;
    }
}
