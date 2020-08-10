# POK upload-image (VichUploaderBundle + LiipImagineBundle)

_Pok upload image_

* [LiipImagineBundle](https://github.com/liip/LiipImagineBundle)
* [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle)


## Installation

```bash
git clone https://github.com/madxmind/pok-upload-image.git
cd pok-upload-image
composer install
create .env.local and just add DATABASE_URL ...
composer prepare
```

## Démarer le serveur

```
symfony serve -d
```

## Exemple config bundle .yaml

```
Fichier `vich_uploader.yaml` :
  mappings:
    product_image:
      uri_prefix: /uploads/products/images
      upload_destination: "%kernel.project_dir%/public/uploads/products/images"
      namer: Vich\UploaderBundle\Naming\SmartUniqueNamer
```

```
Fichier `liip_imagine.yaml` :
  filter_sets:
    squared_thumbnail_medium:
      filters:
        thumbnail:
          size: [500, 500]
          mode: outbound
          allow_upscale: true
```