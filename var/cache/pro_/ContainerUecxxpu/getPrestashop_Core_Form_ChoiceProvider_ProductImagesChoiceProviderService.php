<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.product_images_choice_provider' shared service.

return $this->services['prestashop.core.form.choice_provider.product_images_choice_provider'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ProductImagesChoiceProvider(${($_ = isset($this->services['prestashop.core.command_bus']) ? $this->services['prestashop.core.command_bus'] : $this->load('getPrestashop_Core_CommandBusService.php')) && false ?: '_'});
