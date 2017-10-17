<?php
namespace Magento\Reports\Block\Adminhtml\Review\Detail;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Review\Detail
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Review\Detail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Catalog\Model\ProductFactory $productFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $productFactory, $data);
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
