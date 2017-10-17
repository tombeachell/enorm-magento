<?php
namespace Magento\Sales\Ui\Component\Listing\Column\Address;

/**
 * Interceptor class for @see \Magento\Sales\Ui\Component\Listing\Column\Address
 */
class Interceptor extends \Magento\Sales\Ui\Component\Listing\Column\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\Escaper $escaper, array $components = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $escaper, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        if (!$pluginInfo) {
            return parent::prepare();
        } else {
            return $this->___callPlugins('prepare', func_get_args(), $pluginInfo);
        }
    }
}
