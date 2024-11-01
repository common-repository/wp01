
<div class="wp01-toolbar wp-filter">
    <div class="wp01-toolbar-content">
        <button class="button button-prev-step"><?php _e('Предыдущий шаг', 'WP01') ?></button>
        <div class="wp01-toolbar-center">
            <select class="steps-controller" title="<?php _e('Перейти к шагу', 'WP01') ?>"></select>
            <form class="settings" action="<?php echo admin_url('admin-ajax.php') ?>" method="POST">
                <div class="button button-default settings-btn">
                    <?php _e('Настройки', 'WP01') ?>
                    <span class="dashicons dashicons-admin-generic"></span>
                </div>
                <div class="settings-wrap" style="display:none;">
                    <span class="settings-close">&times;</span>
                    <h2><?php _e('Настройки плагина', 'WP01') ?></h2>
                    <label><?php _e('Отображение плагина:', 'WP01') ?></label>
                    <br>
                    <select name="menu_position">
                        <option value="top" <?php if (WP01::get_menu_page_position() === 'top') echo 'selected' ?>>
                            <?php _e('В меню администратора', 'WP01') ?>
                        </option>
                        <option value="sub" <?php if (WP01::get_menu_page_position() === 'sub') echo 'selected' ?>>
                            <?php _e('В меню "Настройки"', 'WP01') ?>
                        </option>
                    </select>
                    <br>
                    <br>
                    <button class="button button-primary" type="submit">
                        <?php _e('Сохранить изменения', 'WP01') ?>
                    </button>
                </div>
            </form>
            <select class="wp01-langSelect">
                <option value="ru" <?php if (WP01::get_language_dir() === 'ru') echo 'selected' ?>>Russian</option>
                <option value="en" <?php if (WP01::get_language_dir() === 'en') echo 'selected' ?>>English</option>
            </select>
            <span class="analog-info analog-btn">
                <span class="analog-popup">
                    <span class="analog-popup-text">
                        <?php _e('Выбор языка в плагине влияет на отображение языка для профиля в целом', 'WP01') ?>
                    </span>
                </span>
            </span>
        </div>
        <button class="button button-primary button-next-step">
            <?php _e('Следующий шаг', 'WP01') ?>
            <span class="dashicons dashicons-arrow-right-alt"></span>
        </button>
    </div>
</div>
