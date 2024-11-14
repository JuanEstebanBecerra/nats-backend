<?php

namespace Kernel\Application\Mappers;


use Kernel\Domain\Dto\BaseDto;

abstract class BaseMapper
{
    protected BaseDto $dto;

    /**
     * @return BaseDto
     */
    abstract protected function getNewDto(): BaseDto;
}
