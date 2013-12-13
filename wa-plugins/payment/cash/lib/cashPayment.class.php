<?php
/**
 * @package wa-plugin/payment
 */
class cashPayment extends waPayment
{
    public function allowedCurrency()
    {
        return true;
    }
}
