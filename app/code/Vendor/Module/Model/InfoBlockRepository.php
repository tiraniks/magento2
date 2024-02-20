<?php
namespace Vendor\Module\Model;

use Vendor\Module\Model\InfoBlock;
use Vendor\Module\Model\ResourceModel\InfoBlock\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;

class InfoBlockRepository
{
    protected $infoBlockFactory;
    protected $infoBlockCollectionFactory;

    public function __construct(
        InfoBlockFactory $infoBlockFactory,
        CollectionFactory $infoBlockCollectionFactory
    ) {
        $this->infoBlockFactory = $infoBlockFactory;
        $this->infoBlockCollectionFactory = $infoBlockCollectionFactory;
    }

    public function getById($id)
    {
        $infoBlock = $this->infoBlockFactory->create();
        $infoBlock->load($id);
        if (!$infoBlock->getId()) {
            throw new NoSuchEntityException(__('Info block with id "%1" does not exist.', $id));
        }
        return $infoBlock;
    }

    public function getPriorityInfoBlock()
    {
        $collection = $this->infoBlockCollectionFactory->create();
        $collection->setOrder('priority', 'DESC');
        $collection->setOrder('info_id', 'DESC');
        $collection->setPageSize(1);
        return $collection->getFirstItem();
    }
}
