<?php
namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;

class InfoBlock extends AbstractModel
{
    protected $_idFieldName = 'info_id';

    protected $_cacheTag = 'vendor_module_infoblock';

    protected $_eventPrefix = 'vendor_module_infoblock';

    protected function _construct()
    {
        $this->_init(\Vendor\Module\Model\ResourceModel\InfoBlock::class);
    }
}
