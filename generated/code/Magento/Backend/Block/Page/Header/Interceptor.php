<?php
namespace Magento\Backend\Block\Page\Header;

/**
 * Interceptor class for @see \Magento\Backend\Block\Page\Header
 */
class Interceptor extends \Magento\Backend\Block\Page\Header implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Backend\Helper\Data $backendData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $authSession, $backendData, $data);
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
