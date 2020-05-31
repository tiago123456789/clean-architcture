<?php


namespace Clean\Invoicer\Domain\Repositories;


interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getUninvoicedOrders();
}
