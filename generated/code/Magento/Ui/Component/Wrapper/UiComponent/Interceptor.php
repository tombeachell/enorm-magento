<?php
namespace Magento\Ui\Component\Wrapper\UiComponent;

/**
 * Interceptor class for @see \Magento\Ui\Component\Wrapper\UiComponent
 */
class Interceptor extends \Magento\Ui\Component\Wrapper\UiComponent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\View\Element\UiComponentInterface $component, \Magento\Ui\Component\Wrapper\BlockFactory $blockWrapperFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $component, $blockWrapperFactory, $data);
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
