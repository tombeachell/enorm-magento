<?php
namespace Mageplaza\Smtp\Block\Adminhtml\View\Email;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Block\Adminhtml\View\Email
 */
class Interceptor extends \Mageplaza\Smtp\Block\Adminhtml\View\Email implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mageplaza\Smtp\Model\LogFactory $logFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $logFactory, $data);
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