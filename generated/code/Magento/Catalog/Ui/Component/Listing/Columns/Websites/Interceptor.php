<?php
namespace Magento\Catalog\Ui\Component\Listing\Columns\Websites;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\Component\Listing\Columns\Websites
 */
class Interceptor extends \Magento\Catalog\Ui\Component\Listing\Columns\Websites implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, array $components = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $storeManager, $components, $data);
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
