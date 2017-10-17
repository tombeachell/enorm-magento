<?php
namespace Magento\Checkout\Block\Onepage;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Onepage
 */
class Interceptor extends \Magento\Checkout\Block\Onepage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Form\FormKey $formKey, \Magento\Checkout\Model\CompositeConfigProvider $configProvider, array $layoutProcessors = array(), array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $formKey, $configProvider, $layoutProcessors, $data, $serializer);
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
