<?php
namespace Magento\Review\Block\Form\Configure;

/**
 * Interceptor class for @see \Magento\Review\Block\Form\Configure
 */
class Interceptor extends \Magento\Review\Block\Form\Configure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Url\EncoderInterface $urlEncoder, \Magento\Review\Helper\Data $reviewData, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Model\Url $customerUrl, array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $urlEncoder, $reviewData, $productRepository, $ratingFactory, $messageManager, $httpContext, $customerUrl, $data, $serializer);
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
