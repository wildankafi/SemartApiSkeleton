<?php

declare(strict_types=1);

namespace App\Setting\Model;

/**
 * @author Muhamad Surya Iksanudin<surya.iksanudin@alpabit.com>
 */
interface SettingInterface
{
    public function getParameter(): ?string;

    public function getValue(): ?string;
}
