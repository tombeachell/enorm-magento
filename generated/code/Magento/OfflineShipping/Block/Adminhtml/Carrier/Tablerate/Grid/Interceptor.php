<?php
namespace Magento\OfflineShipping\Block\Adminhtml\Carrier\Tablerate\Grid;

/**
 * Interceptor class for @see \Magento\OfflineShipping\Block\Adminhtml\Carrier\Tablerate\Grid
 */
class Interceptor extends \Magento\OfflineShipping\Block\Adminhtml\Carrier\Tablerate\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\OfflineShipping\Model\ResourceModel\Carrier\Tablerate\CollectionFactory $collectionFactory, \Magento\OfflineShipping\Model\Carrier\Tablerate $tablerate, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $collectionFactory, $tablerate, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}
