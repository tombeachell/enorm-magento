<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Alerts\Price;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Alerts\Price
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Alerts\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\ProductAlert\Model\PriceFactory $priceFactory, \Magento\Framework\Module\Manager $moduleManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $priceFactory, $moduleManager, $data);
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
