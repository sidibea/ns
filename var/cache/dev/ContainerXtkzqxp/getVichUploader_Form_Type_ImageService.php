<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.form.type.image' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Form/Type/VichFileType.php';
include_once $this->targetDirs[3].'/vendor/vich/uploader-bundle/Form/Type/VichImageType.php';

return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(${($_ = isset($this->services['vich_uploader.storage']) ? $this->services['vich_uploader.storage'] : $this->getVichUploader_StorageService()) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->load('getVichUploader_UploadHandlerService.php')) && false ?: '_'}, ${($_ = isset($this->services['vich_uploader.property_mapping_factory']) ? $this->services['vich_uploader.property_mapping_factory'] : $this->getVichUploader_PropertyMappingFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'}, NULL);
