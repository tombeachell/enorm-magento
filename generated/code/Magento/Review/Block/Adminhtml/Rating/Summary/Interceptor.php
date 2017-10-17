<?php
namespace Magento\Review\Block\Adminhtml\Rating\Summary;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Rating\Summary
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Rating\Summary implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Review\Model\ResourceModel\Rating\Option\Vote\CollectionFactory $votesFactory, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $votesFactory, $ratingFactory, $registry, $data);
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
