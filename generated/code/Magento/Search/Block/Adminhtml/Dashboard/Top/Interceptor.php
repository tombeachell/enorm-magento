<?php
namespace Magento\Search\Block\Adminhtml\Dashboard\Top;

/**
 * Interceptor class for @see \Magento\Search\Block\Adminhtml\Dashboard\Top
 */
class Interceptor extends \Magento\Search\Block\Adminhtml\Dashboard\Top implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Framework\Module\Manager $moduleManager, \Magento\Search\Model\ResourceModel\Query\CollectionFactory $queriesFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $moduleManager, $queriesFactory, $data);
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
