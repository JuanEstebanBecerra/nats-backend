<?php

namespace Kernel\Infrastructure\Interfaces\Repositories;

interface BaseRepositoryInterface
{
    /**
     * @param $user
     * @return self
     */
    public function setUser($user):self;
}
