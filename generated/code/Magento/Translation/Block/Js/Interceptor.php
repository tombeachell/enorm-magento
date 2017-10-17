<?php
namespace Magento\Translation\Block\Js;

/**
 * Interceptor class for @see \Magento\Translation\Block\Js
 */
class Interceptor extends \Magento\Translation\Block\Js implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Translation\Model\Js\Config $config, \Magento\Translation\Model\FileManager $fileManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $config, $fileManager, $data);
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
