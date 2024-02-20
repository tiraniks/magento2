<?php
namespace Vendor\Module\Model\ResourceModel\InfoBlock;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vendor\Module\Model\InfoBlock;
use Vendor\Module\Model\ResourceModel\InfoBlock as InfoBlockResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'info_id';

    protected $_eventPrefix = 'vendor_module_infoblock_collection';

    protected function _construct()
    {
        $this->_init(InfoBlock::class, InfoBlockResource::class);
    }
}
