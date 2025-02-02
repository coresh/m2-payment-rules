<?php

declare(strict_types=1);

namespace Infrangible\PaymentRules\Traits;

/**
 * @author      Andreas Knollmann
 * @copyright   2014-2024 Softwareentwicklung Andreas Knollmann
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 */
trait Condition
{
    protected function getModuleKey(): string
    {
        return 'Infrangible_PaymentRules';
    }

    protected function getResourceKey(): string
    {
        return 'infrangible_paymentrules';
    }

    protected function getMenuKey(): string
    {
        return 'infrangible_paymentrules_manage';
    }

    protected function getObjectName(): string
    {
        return 'Condition';
    }

    protected function getTitle(): string
    {
        return __('Payment > Rule > Conditions')->render();
    }

    protected function allowAdd(): bool
    {
        return true;
    }

    protected function allowEdit(): bool
    {
        return true;
    }

    protected function allowView(): bool
    {
        return false;
    }

    protected function allowDelete(): bool
    {
        return true;
    }

    protected function getObjectNotFoundMessage(): string
    {
        return __('Unable to find the condition with id: %s!')->render();
    }
}
