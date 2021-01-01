<?php defined('ALTUMCODE') || die() ?>




<?php if($data->link->settings->image): ?>

    <div class="my-3"> 

        <div class="link-btn-image-wrapper <?= $data->link->design->border_class ?>" <?= $data->link->settings->image ? null : 'style="display: none;"' ?>>

            <a href="<?= $data->link->location_url . $data->link->utm_query ?>" data-location-url="<?= $data->link->url ?>">
                <img src="<?= SITE_URL . UPLOADS_URL_PATH . 'backgrounds/' . $data->link->settings->image ?? null ?>" class="link-btn-image" loading="lazy" />
            </a>

        </div>
    </div>
       
    <?php else: ?>  

    <div class="my-3"> 
        <a href="<?= $data->link->location_url . $data->link->utm_query ?>" data-location-url="<?= $data->link->url ?>" class="btn btn-block btn-primary link-btn <?= $data->link->design->link_class ?>" style="<?= $data->link->design->link_style ?>">
       
            <?php if($data->link->settings->icon): ?>
                <i class="<?= $data->link->settings->icon ?> mr-1"></i>
            <?php endif ?>

            <?= $data->link->settings->name ?>
        </a>
    </div>

<?php endif ?>
