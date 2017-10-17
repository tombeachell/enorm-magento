<?php
namespace Magento\Bundle\Block\Sales\Order\Items\Renderer;

/**
 * Interceptor class for @see \Magento\Bundle\Block\Sales\Order\Items\Renderer
 */
class Interceptor extends \Magento\Bundle\Block\Sales\Order\Items\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $string, $productOptionFactory, $data, $serializer);
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
