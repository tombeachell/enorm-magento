<?php
namespace Magento\Backend\Block\Dashboard\Totals;

/**
 * Interceptor class for @see \Magento\Backend\Block\Dashboard\Totals
 */
class Interceptor extends \Magento\Backend\Block\Dashboard\Totals implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Reports\Model\ResourceModel\Order\CollectionFactory $collectionFactory, \Magento\Framework\Module\Manager $moduleManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $moduleManager, $data);
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
