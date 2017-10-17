<?php
namespace Magento\Customer\Ui\Component\Listing\Column\AttributeColumn;

/**
 * Interceptor class for @see \Magento\Customer\Ui\Component\Listing\Column\AttributeColumn
 */
class Interceptor extends \Magento\Customer\Ui\Component\Listing\Column\AttributeColumn implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Customer\Ui\Component\Listing\AttributeRepository $attributeRepository, array $components = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $attributeRepository, $components, $data);
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
