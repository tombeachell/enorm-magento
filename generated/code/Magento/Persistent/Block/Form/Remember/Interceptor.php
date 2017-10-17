<?php
namespace Magento\Persistent\Block\Form\Remember;

/**
 * Interceptor class for @see \Magento\Persistent\Block\Form\Remember
 */
class Interceptor extends \Magento\Persistent\Block\Form\Remember implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Persistent\Helper\Data $persistentData, \Magento\Framework\Math\Random $mathRandom, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $persistentData, $mathRandom, $data);
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
