<?php
namespace Magento\Email\Block\Adminhtml\Template\Preview;

/**
 * Interceptor class for @see \Magento\Email\Block\Adminhtml\Template\Preview
 */
class Interceptor extends \Magento\Email\Block\Adminhtml\Template\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Filter\Input\MaliciousCode $maliciousCode, \Magento\Email\Model\TemplateFactory $emailFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $maliciousCode, $emailFactory, $data);
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
