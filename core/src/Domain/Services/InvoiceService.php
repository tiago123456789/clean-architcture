<?php


namespace Clean\Invoicer\Domain\Services;


use Clean\Invoicer\Domain\Factories\InvoiceFactory;
use Clean\Invoicer\Domain\Repositories\OrderRepositoryInterface;

class InvoiceService
{

    private $orderRepository;

    private $invoiceFactory;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        InvoiceFactory $invoiceFactory
    )
    {
        $this->orderRepository = $orderRepository;
        $this->invoiceFactory = $invoiceFactory;
    }

    public function generateInvoices()
    {
        $orders = $this->orderRepository->getUninvoicedOrders();
        $invoices = [];

        foreach($orders as $key => $order) {
            $invoices[] = $this->invoiceFactory->createFromOrder($order);
        }

    }
}
