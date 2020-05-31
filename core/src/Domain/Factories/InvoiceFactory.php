<?php


namespace Clean\Invoicer\Domain\Factories;


use Clean\Invoicer\Domain\Entities\Invoice;
use Clean\Invoicer\Domain\Entities\Order;
use DateTime;

class InvoiceFactory
{

    public function createFromOrder(Order $order): Invoice
    {
        /** @var Invoice $invoice */
        $invoice = new Invoice();
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new DateTime());
        $invoice->setTotal($order->getTotal());
        return $invoice;
    }
}
