<?php
namespace Vendor\Module\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Vendor\Module\Model\InfoBlockFactory;

class InfoBlock extends Template
{
    protected $infoBlockFactory;

    public function __construct(
        Context $context,
        InfoBlockFactory $infoBlockFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->infoBlockFactory = $infoBlockFactory;
    }

    public function getInfoData()
    {
        $infoBlockModel = $this->infoBlockFactory->create();
        $infoData = $infoBlockModel->getCollection()->getData();
        return $infoData;
    }
}
