<?php

namespace Tasks\CreateANewPage\Controller\Index;

use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Index
{
    protected $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute(): ResultInterface
    {
        return $this->pageFactory->create();
    }
}

