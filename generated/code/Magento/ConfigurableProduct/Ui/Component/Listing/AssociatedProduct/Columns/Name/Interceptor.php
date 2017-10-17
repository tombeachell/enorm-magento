<?php
namespace Magento\ConfigurableProduct\Ui\Component\Listing\AssociatedProduct\Columns\Name;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Ui\Component\Listing\AssociatedProduct\Columns\Name
 */
class Interceptor extends \Magento\ConfigurableProduct\Ui\Component\Listing\AssociatedProduct\Columns\Name implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\UrlInterface $urlBuilder, array $components = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $urlBuilder, $components, $data);
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
