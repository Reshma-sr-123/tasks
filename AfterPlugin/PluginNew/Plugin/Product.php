<?php

namespace AfterPlugin\PluginNew\Plugin;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return "Magento " . $result; // Adding Magento in product name
    }
}
