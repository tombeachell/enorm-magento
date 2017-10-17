<?php
namespace Magento\Review\Ui\Component\Listing\Columns\Visibility;

/**
 * Interceptor class for @see \Magento\Review\Ui\Component\Listing\Columns\Visibility
 */
class Interceptor extends \Magento\Review\Ui\Component\Listing\Columns\Visibility implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Store\Model\System\Store $store, array $components, array $data)
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $store, $components, $data);
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
