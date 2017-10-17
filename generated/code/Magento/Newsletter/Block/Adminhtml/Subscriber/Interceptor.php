<?php
namespace Magento\Newsletter\Block\Adminhtml\Subscriber;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Subscriber
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Subscriber implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Newsletter\Model\ResourceModel\Queue\CollectionFactory $collectionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $collectionFactory, $data);
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
