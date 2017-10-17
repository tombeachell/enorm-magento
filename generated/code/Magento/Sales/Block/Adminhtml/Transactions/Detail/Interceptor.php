<?php
namespace Magento\Sales\Block\Adminhtml\Transactions\Detail;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Transactions\Detail
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Transactions\Detail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, \Magento\Sales\Api\OrderPaymentRepositoryInterface $orderPaymentRepository, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $adminHelper, $orderPaymentRepository, $data);
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
