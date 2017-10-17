<?php
namespace Magento\Authorizenet\Block\Transparent\Iframe;

/**
 * Interceptor class for @see \Magento\Authorizenet\Block\Transparent\Iframe
 */
class Interceptor extends \Magento\Authorizenet\Block\Transparent\Iframe implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Authorizenet\Helper\DataFactory $dataFactory, \Magento\Framework\Message\ManagerInterface $messageManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $dataFactory, $messageManager, $data);
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
