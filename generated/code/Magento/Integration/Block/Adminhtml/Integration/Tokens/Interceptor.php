<?php
namespace Magento\Integration\Block\Adminhtml\Integration\Tokens;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Integration\Tokens
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Integration\Tokens implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $data);
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
