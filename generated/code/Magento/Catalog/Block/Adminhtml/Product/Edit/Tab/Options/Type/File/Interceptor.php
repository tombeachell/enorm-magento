<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\File;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\File
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Type\File implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\Config\Source\Product\Options\Price $optionPrice, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $optionPrice, $data);
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
