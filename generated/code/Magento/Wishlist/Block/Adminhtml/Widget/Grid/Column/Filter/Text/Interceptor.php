<?php
namespace Magento\Wishlist\Block\Adminhtml\Widget\Grid\Column\Filter\Text;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Adminhtml\Widget\Grid\Column\Filter\Text
 */
class Interceptor extends \Magento\Wishlist\Block\Adminhtml\Widget\Grid\Column\Filter\Text implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $data);
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
