<?php
namespace Magento\Review\Block\Adminhtml\Rating\Detailed;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Rating\Detailed
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Rating\Detailed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Review\Model\ResourceModel\Rating\CollectionFactory $ratingsFactory, \Magento\Review\Model\ResourceModel\Rating\Option\Vote\CollectionFactory $votesFactory, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $ratingsFactory, $votesFactory, $registry, $data);
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
