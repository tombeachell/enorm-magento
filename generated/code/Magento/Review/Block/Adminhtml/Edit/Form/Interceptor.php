<?php
namespace Magento\Review\Block\Adminhtml\Edit\Form;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Edit\Form
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\System\Store $systemStore, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Review\Helper\Data $reviewData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $systemStore, $customerRepository, $productFactory, $reviewData, $data);
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
