<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.feature.repository.feature_value_repository' shared service.

return $this->services['prestashop.adapter.feature.repository.feature_value_repository'] = new \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'respawn', ${($_ = isset($this->services['prestashop.adapter.feature.validate.feature_value_validator']) ? $this->services['prestashop.adapter.feature.validate.feature_value_validator'] : ($this->services['prestashop.adapter.feature.validate.feature_value_validator'] = new \PrestaShop\PrestaShop\Adapter\Feature\Validate\FeatureValueValidator())) && false ?: '_'});
