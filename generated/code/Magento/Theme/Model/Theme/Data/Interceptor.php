<?php
namespace Magento\Theme\Model\Theme\Data;

/**
 * Interceptor class for @see \Magento\Theme\Model\Theme\Data
 */
class Interceptor extends \Magento\Theme\Model\Theme\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\View\Design\Theme\FlyweightFactory $themeFactory, \Magento\Framework\View\Design\Theme\Domain\Factory $domainFactory, \Magento\Framework\View\Design\Theme\ImageFactory $imageFactory, \Magento\Framework\View\Design\Theme\Validator $validator, \Magento\Framework\View\Design\Theme\CustomizationFactory $customizationFactory, \Magento\Theme\Model\ResourceModel\Theme $resource = null, \Magento\Theme\Model\ResourceModel\Theme\Collection $resourceCollection = null, array $data = array(), \Magento\Theme\Model\ThemeFactory $themeModelFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $themeFactory, $domainFactory, $imageFactory, $validator, $customizationFactory, $resource, $resourceCollection, $data, $themeModelFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
