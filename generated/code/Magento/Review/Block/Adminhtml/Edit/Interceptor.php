<?php
namespace Magento\Review\Block\Adminhtml\Edit;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Edit
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Review\Model\ReviewFactory $reviewFactory, \Magento\Review\Helper\Action\Pager $reviewActionPager, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $reviewFactory, $reviewActionPager, $registry, $data);
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
