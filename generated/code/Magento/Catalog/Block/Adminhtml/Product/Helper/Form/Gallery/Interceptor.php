<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Helper\Form\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, \Magento\Framework\Data\Form $form, $data = array())
    {
        $this->___init();
        parent::__construct($context, $storeManager, $registry, $form, $data);
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
