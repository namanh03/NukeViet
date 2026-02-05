<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC <contact@vinades.vn>
 * @Copyright (C) 2015 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sat, 07 Mar 2015 03:43:56 GMT
 */

if (!defined('NV_IS_UPDATE')) {
    die('Stop!!!');
}

$nv_update_config = [];

// Kieu nang cap 1: Update; 2: Upgrade
$nv_update_config['type'] = 1;

// ID goi cap nhat
$nv_update_config['packageID'] = 'NVUD4507';

// Cap nhat cho module nao, de trong neu la cap nhat NukeViet, ten thu muc module neu la cap nhat module
$nv_update_config['formodule'] = '';

// Thong tin phien ban, tac gia, ho tro
$nv_update_config['release_date'] = 1761296400;
$nv_update_config['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$nv_update_config['support_website'] = 'https://github.com/nukeviet/update/tree/to-4.5.07';
$nv_update_config['to_version'] = '4.5.07';
$nv_update_config['allow_old_version'] = [
    '4.5.00',
    '4.5.01',
    '4.5.02',
    '4.5.03',
    '4.5.04',
    '4.5.05',
    '4.5.06',
    '4.5.07'
];

// 0:Nang cap bang tay, 1:Nang cap tu dong, 2:Nang cap nua tu dong
$nv_update_config['update_auto_type'] = 1;

$nv_update_config['lang'] = [];
$nv_update_config['lang']['vi'] = [];
$nv_update_config['lang']['en'] = [];

// Tiếng Việt
$nv_update_config['lang']['vi']['nv_up_modusers4501'] = 'Cập nhật module Users lên 4.5.01';
$nv_update_config['lang']['vi']['nv_up_sys4501'] = 'Cập nhật hệ thống lên 4.5.01';
$nv_update_config['lang']['vi']['nv_up_modnews4502'] = 'Cập nhật module News lên 4.5.02';
$nv_update_config['lang']['vi']['nv_up_sys4502'] = 'Cập nhật hệ thống lên 4.5.02';
$nv_update_config['lang']['vi']['nv_up_modnews4503'] = 'Cập nhật module News lên 4.5.03';
$nv_update_config['lang']['vi']['nv_up_modnews4504'] = 'Cập nhật module News lên 4.5.04';
$nv_update_config['lang']['vi']['nv_up_sys4504'] = 'Cập nhật hệ thống lên 4.5.04';
$nv_update_config['lang']['vi']['nv_up_modnews4505'] = 'Cập nhật module News lên 4.5.05';
$nv_update_config['lang']['vi']['nv_up_sys4505'] = 'Cập nhật hệ thống lên 4.5.05';
$nv_update_config['lang']['vi']['nv_up_sys4506'] = 'Cập nhật hệ thống lên 4.5.06';
$nv_update_config['lang']['vi']['nv_up_modnews4507'] = 'Cập nhật module News lên 4.5.07';
$nv_update_config['lang']['vi']['nv_up_sys4507'] = 'Cập nhật hệ thống lên 4.5.07';

$nv_update_config['lang']['vi']['nv_up_finish'] = 'Cập nhật CSDL lên phiên bản ' . $nv_update_config['to_version'];

// English
$nv_update_config['lang']['en']['nv_up_modusers4501'] = 'Update module Users to 4.5.01';
$nv_update_config['lang']['en']['nv_up_sys4501'] = 'Update system to 4.5.01';
$nv_update_config['lang']['en']['nv_up_modnews4502'] = 'Update module News to 4.5.02';
$nv_update_config['lang']['en']['nv_up_sys4502'] = 'Update system to 4.5.02';
$nv_update_config['lang']['en']['nv_up_modnews4503'] = 'Update module News to 4.5.03';
$nv_update_config['lang']['en']['nv_up_modnews4504'] = 'Update module News to 4.5.04';
$nv_update_config['lang']['en']['nv_up_sys4504'] = 'Update system to 4.5.04';
$nv_update_config['lang']['en']['nv_up_modnews4505'] = 'Update module News to 4.5.05';
$nv_update_config['lang']['en']['nv_up_sys4505'] = 'Update system to 4.5.05';
$nv_update_config['lang']['en']['nv_up_sys4506'] = 'Update system to 4.5.06';
$nv_update_config['lang']['en']['nv_up_modnews4507'] = 'Update module News to 4.5.07';
$nv_update_config['lang']['en']['nv_up_sys4507'] = 'Update system to 4.5.07';

$nv_update_config['lang']['en']['nv_up_finish'] = 'Update to new version ' . $nv_update_config['to_version'];

$nv_update_config['tasklist'] = [];

$nv_update_config['tasklist'][] = [
    'r' => '4.5.01',
    'rq' => 2,
    'l' => 'nv_up_modusers4501',
    'f' => 'nv_up_modusers4501'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.01',
    'rq' => 2,
    'l' => 'nv_up_sys4501',
    'f' => 'nv_up_sys4501'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.02',
    'rq' => 2,
    'l' => 'nv_up_modnews4502',
    'f' => 'nv_up_modnews4502'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.02',
    'rq' => 2,
    'l' => 'nv_up_sys4502',
    'f' => 'nv_up_sys4502'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.03',
    'rq' => 2,
    'l' => 'nv_up_modnews4503',
    'f' => 'nv_up_modnews4503'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.04',
    'rq' => 2,
    'l' => 'nv_up_modnews4504',
    'f' => 'nv_up_modnews4504'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.04',
    'rq' => 2,
    'l' => 'nv_up_sys4504',
    'f' => 'nv_up_sys4504'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.05',
    'rq' => 2,
    'l' => 'nv_up_modnews4505',
    'f' => 'nv_up_modnews4505'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.05',
    'rq' => 2,
    'l' => 'nv_up_sys4505',
    'f' => 'nv_up_sys4505'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.06',
    'rq' => 2,
    'l' => 'nv_up_sys4506',
    'f' => 'nv_up_sys4506'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.07',
    'rq' => 2,
    'l' => 'nv_up_modnews4507',
    'f' => 'nv_up_modnews4507'
];
$nv_update_config['tasklist'][] = [
    'r' => '4.5.07',
    'rq' => 2,
    'l' => 'nv_up_sys4507',
    'f' => 'nv_up_sys4507'
];

$nv_update_config['tasklist'][] = [
    'r' => $nv_update_config['to_version'],
    'rq' => 2,
    'l' => 'nv_up_finish',
    'f' => 'nv_up_finish'
];

// Lấy tất cả ngôn ngữ đã cài đặt
$sql = 'SELECT lang FROM ' . $db_config['prefix'] . '_setup_language WHERE setup=1 ORDER BY weight ASC';
$array_sitelangs = $db->query($sql)->fetchAll(PDO::FETCH_COLUMN);

/**
 * @return string
 */
function nv_get_captchaconfig()
{
    global $global_config;

    $captcha = (!empty($global_config['recaptcha_sitekey']) and !empty($global_config['recaptcha_secretkey'])) ? 'recaptcha' : 'captcha';
    $data = [
        0 => '', // Không hiển thị
        1 => $captcha, // Khi admin đăng nhập
        2 => $captcha, // Khi thành viên đăng nhập
        3 => $captcha, // Khi khách đăng ký
        4 => $captcha, // Khi thành viên đăng nhập hoặc khách đăng ký
        5 => $captcha, // Khi admin hoặc thành viên đăng nhập
        6 => $captcha, // Khi admin đăng nhập hoặc khách đăng ký
        7 => $captcha, // Hiển thị trong mọi trường hợp
    ];

    if (isset($global_config['gfx_chk'])) {
        return (isset($data[$global_config['gfx_chk']]) ? $data[$global_config['gfx_chk']] : $captcha);
    }

    return $captcha;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_modusers4501()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Duyệt tất cả các ngôn ngữ đa
    $_module_users = [];
    foreach ($array_sitelangs as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file='users'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            if (!in_array($mod_data, $_module_users)) {
                // mỗi module ảo chỉ chạy 1 lần
                $_module_users[] = $mod_data;

                try {
                    $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $mod_data . "_openid DROP PRIMARY KEY,
                    CHANGE COLUMN openid openid CHAR(50) NOT NULL DEFAULT '' AFTER userid,
                    ADD COLUMN id CHAR(50) NOT NULL DEFAULT '' AFTER opid,
                    ADD UNIQUE INDEX opid (openid, opid);");
                } catch (PDOException $e) {
                    trigger_error(print_r($e, true));
                }

                // Thêm cấu hình
                try {
                    $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $mod_data . "_config (config, content, edit_time) VALUES ('admin_email', '0', '0');");
                } catch (PDOException $e) {
                    trigger_error(print_r($e, true));
                }
            }
        }
    }

    return $return;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_sys4501()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Duyệt tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Xóa cấu hình loại captcha bình luận
        try {
            $db->query("DELETE FROM " . NV_CONFIG_GLOBALTABLE . " WHERE lang='" . $lang . "' AND config_name='captcha_type_comm';");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }

        // Lấy tất cả các module và module ảo của news
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Xóa cấu hình captcha news
            try {
                $db->query("DELETE FROM " . NV_CONFIG_GLOBALTABLE . " WHERE lang='" . $lang . "' AND module='" . $mod . "' AND config_name='ucaptcha_type';");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            try {
                $db->query("DELETE FROM " . NV_CONFIG_GLOBALTABLE . " WHERE lang='" . $lang . "' AND module='" . $mod . "' AND config_name='scaptcha_type';");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            // Bổ sung cấu hình captcha chung cho news
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'captcha_type', '" . nv_get_captchaconfig() . "');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }

        // Bổ sung cấu hình captcha chung bình luận
        try {
            $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', 'comment', 'captcha_type', '" . nv_get_captchaconfig() . "');");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }

        // Gỡ cấu hình các block QR-Code
        try {
            $db->query("UPDATE " . $db_config['prefix'] . "_" . $lang . "_blocks_groups SET config='' WHERE file_name='global.QR_code.php';");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }
    }

    // Thay đổi key config của captcha
    try {
        $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_name='captcha_type' WHERE lang='sys' AND module='site' AND config_name='ucaptcha_type';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_name='captcha_area' WHERE lang='sys' AND module='site' AND config_name='ucaptcha_area';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Thêm Zalo
    try {
        $sql = "SELECT COUNT(mid) FROM " . $db_config['prefix'] . "_authors_module";
        $weight = intval($db->query($sql)->fetchColumn()) + 1;

        $db->query("INSERT INTO " . $db_config['prefix'] . "_authors_module (module, lang_key, weight, act_1, act_2, act_3) VALUES ('zalo', 'mod_zalo', " . $weight . ", 1, 0, 0);");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'zaloAppID', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'zaloAppSecretKey', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'zaloOAAccessToken', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'zaloOARefreshToken', '');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'zaloOAAccessTokenTime', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Thêm field bảng oauth của admin
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_authors_oauth ADD COLUMN oauth_id VARCHAR(50) NOT NULL DEFAULT '' AFTER oauth_email;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Thêm field bảng oauth của admin
    try {
        $db->query("UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value='connect,create,auto' WHERE lang='sys' AND module='site' AND config_name='openid_processing';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * nv_up_modnews4502()
 *
 * @return
 *
 */
function nv_up_modnews4502()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Chức năng lịch sử bài viết trong quản trị cho module news
            try {
                $db->query('INSERT INTO ' . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'active_history', '0');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            try {
                $db->query("CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_row_histories (
                  id int(11) unsigned NOT NULL AUTO_INCREMENT,
                  new_id int(11) unsigned NOT NULL DEFAULT '0',
                  historytime int(11) unsigned NOT NULL DEFAULT '0',
                  catid smallint(5) unsigned NOT NULL DEFAULT '0',
                  listcatid varchar(255) NOT NULL DEFAULT '',
                  topicid smallint(5) unsigned NOT NULL DEFAULT '0',
                  admin_id mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT 'ID người đăng',
                  author varchar(250) NOT NULL DEFAULT '',
                  sourceid mediumint(8) unsigned NOT NULL DEFAULT '0',
                  publtime int(11) unsigned NOT NULL DEFAULT '0',
                  exptime int(11) unsigned NOT NULL DEFAULT '0',
                  archive tinyint(1) unsigned NOT NULL DEFAULT '0',
                  title varchar(250) NOT NULL DEFAULT '',
                  alias varchar(250) NOT NULL DEFAULT '',
                  hometext text NOT NULL,
                  homeimgfile varchar(255) DEFAULT '',
                  homeimgalt varchar(255) DEFAULT '',
                  inhome tinyint(1) unsigned NOT NULL DEFAULT '0',
                  allowed_comm varchar(255) DEFAULT '',
                  allowed_rating tinyint(1) unsigned NOT NULL DEFAULT '0',
                  external_link tinyint(1) unsigned NOT NULL DEFAULT '0',
                  instant_active tinyint(1) NOT NULL DEFAULT '0',
                  instant_template varchar(100) NOT NULL DEFAULT '',
                  instant_creatauto tinyint(1) NOT NULL DEFAULT '0',
                  titlesite varchar(255) NOT NULL DEFAULT '',
                  description text NOT NULL,
                  bodyhtml longtext NOT NULL,
                  keywords varchar(255) default '',
                  sourcetext varchar(255) default '',
                  files TEXT NULL DEFAULT NULL,
                  tags TEXT NULL DEFAULT NULL,
                  internal_authors VARCHAR(255) NOT NULL DEFAULT '',
                  imgposition tinyint(1) NOT NULL default '1',
                  layout_func varchar(100) DEFAULT '',
                  copyright tinyint(1) NOT NULL default '0',
                  allowed_send tinyint(1) NOT NULL default '0',
                  allowed_print tinyint(1) NOT NULL default '0',
                  allowed_save tinyint(1) NOT NULL default '0',
                  changed_fields text NOT NULL COMMENT 'Các field thay đổi',
                  PRIMARY KEY (id),
                  KEY new_id (new_id),
                  KEY historytime (historytime),
                  KEY admin_id (admin_id)
                ) ENGINE=MyISAM COMMENT 'Lịch sử bài viết';");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }

            // Bổ sung dữ liệu bảng log module news để thống kê
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_logs ADD log_key varchar(60) NOT NULL DEFAULT '' COMMENT 'Khóa loại log, tùy vào lập trình' AFTER userid, ADD INDEX log_key (log_key);");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_logs ADD INDEX status (status);");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_logs CHANGE note note varchar(255) NOT NULL DEFAULT '';");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_sys4502()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Phương thức xác thực API
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . "_api_credential ADD auth_method ENUM('none','password_verify') NOT NULL DEFAULT 'password_verify' COMMENT 'Phương thức xác thực' AFTER credential_ips;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Fix Lỗi không thể tạo tài khoản tường lửa
    try {
        $db->query("ALTER TABLE " . NV_AUTHORS_GLOBALTABLE . "_config CHANGE COLUMN mask mask TINYINT(4) NOT NULL DEFAULT '0' AFTER keyname;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Thêm thiết lập an ninh: Lọc các mã HTML nguy hiểm
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'XSSsanitize', '1');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'admin_XSSsanitize', '1');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Mở rộng trường admins bảng module
    foreach ($array_sitelangs as $lang) {
        try {
            $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_modules CHANGE admins admins VARCHAR(4000) NOT NULL DEFAULT '';");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }
    }

    // Mở rộng trường lưu kích thước file upload
    try {
        $db->query("ALTER TABLE " . NV_UPLOAD_GLOBALTABLE . "_file CHANGE filesize filesize DOUBLE NOT NULL DEFAULT '0';");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Xóa file thừa
    nv_deletefile(NV_ROOTDIR . '/' . NV_ASSETS_DIR . '/editors/ckeditor/plugins/flash', true);
    nv_deletefile(NV_ROOTDIR . '/modules/banners/admin/info_pl.php');
    nv_deletefile(NV_ROOTDIR . '/modules/banners/admin/setting.php');
    nv_deletefile(NV_ROOTDIR . '/themes/admin_default/modules/banners/info_pl.tpl');
    nv_deletefile(NV_ROOTDIR . '/themes/default/blocks/global.QR_code.ini');
    nv_deletefile(NV_ROOTDIR . '/themes/mobile_default/blocks/global.QR_code.ini');
    nv_deletefile(NV_ROOTDIR . '/themes/mobile_default/modules/users/openid_administrator.tpl');
    nv_deletefile(NV_ROOTDIR . '/vendor/endroid', true);
    nv_deletefile(NV_ROOTDIR . '/vendor/symfony/options-resolver', true);

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modnews4503()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm trường giọng đọc bảng detail
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_detail ADD voicedata text NULL DEFAULT NULL COMMENT 'Data giọng đọc json' AFTER bodyhtml;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }

            // Thêm bảng giọng đọc
            try {
                $db->query("CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_voices (
                  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
                  voice_key varchar(50) NOT NULL DEFAULT '' COMMENT 'Khóa dùng trong Api sau này',
                  title varchar(250) NOT NULL DEFAULT '',
                  description text NOT NULL,
                  add_time int(11) unsigned NOT NULL DEFAULT '0',
                  edit_time int(11) unsigned NOT NULL DEFAULT '0',
                  weight smallint(4) unsigned NOT NULL DEFAULT '0',
                  status tinyint(4) NOT NULL DEFAULT '1' COMMENT '0: Dừng, 1: Hoạt động',
                  PRIMARY KEY (id),
                  KEY weight (weight),
                  KEY status (status),
                  UNIQUE KEY title (title)
                ) ENGINE=MyISAM;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modnews4504()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình bật tắt hiển thị tác giả bên ngoài/bên trong module news
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'hide_author', '0');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
            try {
                $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('" . $lang . "', '" . $mod . "', 'hide_inauthor', '0');");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_sys4504()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Cấu hình dung lượng site
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'over_capacity', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    // Dung lượng thư mục upload
    try {
        $db->query("ALTER TABLE " . $db_config['prefix'] . "_upload_dir ADD total_size DOUBLE UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Dung lượng thư mục' AFTER time;");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    // Bật tắt hiển thị dung lượng thư mục
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'show_folder_size', '0');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    // Cấu hình chia sẻ cooike cho tên miền con
    try {
        $db->query("INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'cookie_share', '1');");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modnews4505()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm cấu hình bật tắt hiển thị tác giả bên ngoài/bên trong module news
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_cat ADD layout_func varchar(100) NOT NULL DEFAULT '' COMMENT 'Layout khi xem chuyên mục' AFTER ad_block_cat;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_sys4505()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Thêm iframe live.com
    try {
        $domain = 'view.officeapps.live.com';
        $sql = "SELECT config_value FROM " . NV_CONFIG_GLOBALTABLE . " WHERE module='global' AND lang='sys' AND config_name='domains_whitelist'";
        $domains_whitelist = $db->query($sql)->fetchColumn();
        $domains_whitelist = json_decode($domains_whitelist, true);
        if (!is_array($domains_whitelist)) {
            $domains_whitelist = [];
        }
        if (!in_array($domain, $domains_whitelist)) {
            $domains_whitelist[] = $domain;
        }
        $domains_whitelist = json_encode($domains_whitelist);
        $sql = "UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value=" . $db->quote($domains_whitelist) . " WHERE module='global' AND lang='sys' AND config_name='domains_whitelist'";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $sql = "SELECT config_value FROM " . NV_CONFIG_GLOBALTABLE . " WHERE module='site' AND lang='sys' AND config_name='nv_csp'";
        $nv_csp = $db->query($sql)->fetchColumn();
        if (!empty($nv_csp)) {
            $nv_csp = nv_unhtmlspecialchars($nv_csp);

            $matches = [];
            preg_match_all("/([a-zA-Z0-9\-]+)[\s]+([^\;]+)/i", $nv_csp, $matches);
            $directives = [];
            foreach ($matches[1] as $key => $name) {
                $directives[$name] = trim($matches[2][$key]);
            }

            $frame_src = empty($directives['frame-src']) ? "'self' *.google.com *.youtube.com *.facebook.com *.facebook.net *.twitter.com *.zalo.me" : $directives['frame-src'];
            if (strpos($frame_src, '*.live.com') === false) {
                $frame_src .= ' *.live.com';
            }
            $directives['frame-src'] = $frame_src;

            $nv_csp = '';
            foreach ($directives as $key => $directive) {
                $directive = trim(strip_tags($directive));
                if (!empty($directive)) {
                    $directive = str_replace(["\r\n", "\r", "\n"], ' ', $directive);
                    $nv_csp .= $key . ' ' . preg_replace('/[ ]+/', ' ', str_replace(["'", '"', '<', '>'], ['&#039;', '&quot;', '&lt;', '&gt;'], $directive)) . ';';
                }
            }

            $sql = "UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value=" . $db->quote($nv_csp) . " WHERE module='site' AND lang='sys' AND config_name='nv_csp'";
            $db->query($sql);
        }
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Hỗ trợ thêm thẻ mark
    try {
        $sql = "SELECT config_value FROM " . NV_CONFIG_GLOBALTABLE . " WHERE module='define' AND lang='sys' AND config_name='nv_allowed_html_tags'";
        $nv_allowed_html_tags = $db->query($sql)->fetchColumn();
        $nv_allowed_html_tags = array_filter(array_unique(array_map('trim', explode(',', $nv_allowed_html_tags))));
        if (!in_array('mark', $nv_allowed_html_tags)) {
            $nv_allowed_html_tags[] = 'mark';
        }
        $nv_allowed_html_tags = implode(', ', $nv_allowed_html_tags);

        $sql = "UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value=" . $db->quote($nv_allowed_html_tags) . " WHERE module='define' AND lang='sys' AND config_name='nv_allowed_html_tags'";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    // Thêm quản lý tiêu đề Permissions-Policy
    try {
        $sql = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'nv_pp', 'accelerometer=(self), autoplay=(self \"https://youtube.com\" \"https://www.youtube.com\" \"https://*.youtube.com\"), camera=(self), display-capture=(self), encrypted-media=(self), fullscreen=(self \"https://youtube.com\" \"https://www.youtube.com\" \"https://*.youtube.com\"), gamepad=(self), geolocation=(self), gyroscope=(self), hid=(self), identity-credentials-get=(self), idle-detection=(self), local-fonts=(self), magnetometer=(self), microphone=(self), midi=(self), otp-credentials=(self), payment=(self), picture-in-picture=(self \"https://youtube.com\" \"https://www.youtube.com\" \"https://*.youtube.com\"), publickey-credentials-get=(self), screen-wake-lock=(self), serial=(self), storage-access=(self), usb=(self), web-share=(self), window-management=(self), xr-spatial-tracking=(self)');";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $sql = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'nv_pp_act', '1');";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $sql = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'nv_fp', 'accelerometer \'self\'; autoplay \'self\' https://youtube.com https://www.youtube.com; camera \'self\'; display-capture \'self\'; encrypted-media \'self\'; fullscreen \'self\' https://youtube.com https://www.youtube.com; gamepad \'self\'; geolocation \'self\'; gyroscope \'self\'; hid \'self\'; identity-credentials-get \'self\'; idle-detection \'self\'; local-fonts \'self\'; magnetometer \'self\'; microphone \'self\'; midi \'self\'; otp-credentials \'self\'; payment \'self\'; picture-in-picture \'self\' https://youtube.com https://www.youtube.com; publickey-credentials-get \'self\'; screen-wake-lock \'self\'; serial \'self\'; storage-access \'self\'; usb \'self\'; web-share \'self\'; window-management \'self\'; xr-spatial-tracking \'self\'');";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }
    try {
        $sql = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'nv_fp_act', '1');";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_sys4506()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    try {
        $sql = "INSERT INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'global', 'api_check_time', '5');";
        $db->query($sql);
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return number[]|string[]
 */
function nv_up_modnews4507()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;
    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];
    // Duyệt tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Lấy tất cả các module và module ảo của nó
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Thêm công cụ từ chối duyệt bài, từ chối đăng bài
            try {
                $db->query("ALTER TABLE " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_detail ADD reject_reason text NULL DEFAULT NULL COMMENT 'Nguyên nhân từ chối' AFTER files;");
            } catch (PDOException $e) {
                trigger_error(print_r($e, true));
            }
        }
    }
    return $return;
}

/**
 *
 * @return number[]|string[]
 */
function nv_up_sys4507()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Chức năng block tùy chỉnh trên tất cả các ngôn ngữ
    foreach ($array_sitelangs as $lang) {
        // Thêm bảng theo ngôn ngữ
        try {
            $db->query("CREATE TABLE " . $db_config['prefix'] . "_" . $lang . "_modblocks (
                module_name varchar(50) NOT NULL COMMENT 'Tên module',
                tag varchar(100) NOT NULL COMMENT 'Tag của khối block',
                ini_tag varchar(160) NOT NULL COMMENT 'Tag tương đương trong config ini',
                title varchar(250) NOT NULL DEFAULT '' COMMENT 'Tên gọi nếu có',
                UNIQUE KEY modblock (module_name, tag),
                KEY module_name (module_name),
                KEY tag (tag)
            ) ENGINE=MyISAM COMMENT 'Vị trí block tùy chỉnh theo từng module';");
        } catch (PDOException $e) {
            trigger_error(print_r($e, true));
        }

        // Lấy tất cả các module và module ảo của news
        $mquery = $db->query('SELECT title, module_data FROM ' . $db_config['prefix'] . '_' . $lang . "_modules WHERE module_file = 'news'");
        while (list ($mod, $mod_data) = $mquery->fetch(3)) {
            // Đọc chuyên mục
            $sql = "SELECT * FROM " . $db_config['prefix'] . "_" . $lang . "_" . $mod_data . "_cat";
            $result = $db->query($sql);
            while ($cat = $result->fetch()) {
                $cat['ad_block_cat'] = array_filter(array_unique(array_map('intval', explode(',', $cat['ad_block_cat']))));

                // Block top
                if (in_array(1, $cat['ad_block_cat'])) {
                    try {
                        $tag = 'TCAT' . $cat['catid'];
                        $ini_tag = '[CUSTOM_' . strtoupper($mod_data) . '_' . $tag . ']';
                        $title = 'Top: ' . nv_substr($cat['title'], 0, 150);

                        $sql = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_modblocks (
                            module_name, tag, ini_tag, title
                        ) VALUES (
                            " . $db->quote($mod) . ",
                            " . $db->quote($tag) . ",
                            " . $db->quote($ini_tag) . ",
                            " . $db->quote($title) . "
                        )";
                        $db->query($sql);
                    } catch (Exception $e) {
                        trigger_error(print_r($e, true));
                    }
                }

                // Block bottom
                if (in_array(2, $cat['ad_block_cat'])) {
                    try {
                        $tag = 'BCAT' . $cat['catid'];
                        $ini_tag = '[CUSTOM_' . strtoupper($mod_data) . '_' . $tag . ']';
                        $title = 'Bottom: ' . nv_substr($cat['title'], 0, 150);

                        $sql = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_modblocks (
                            module_name, tag, ini_tag, title
                        ) VALUES (
                            " . $db->quote($mod) . ",
                            " . $db->quote($tag) . ",
                            " . $db->quote($ini_tag) . ",
                            " . $db->quote($title) . "
                        )";
                        $db->query($sql);
                    } catch (Exception $e) {
                        trigger_error(print_r($e, true));
                    }
                }
            }
            $result->closeCursor();
        }
    }

    // Chép hết block sang
    foreach ($array_sitelangs as $lang) {
        $sql = "SELECT * FROM " . $db_config['prefix'] . "_" . $lang . "_blocks_groups";
        $result = $db->query($sql);

        while ($block = $result->fetch()) {
            unset($m);
            if (!preg_match('/^\[([a-zA-Z0-9\-\_]+)\_(BOTTOMCAT|TOPCAT)\_([0-9]+)\]$/', $block['position'], $m)) {
                continue;
            }
            if ($m[2] == 'BOTTOMCAT') {
                $position = '[CUSTOM_' . strtoupper(str_replace('-', '_', $m[1])) . '_BCAT' . $m[3] . ']';
            } else {
                $position = '[CUSTOM_' . strtoupper(str_replace('-', '_', $m[1])) . '_TCAT' . $m[3] . ']';
            }

            // Tạo block mới
            try {
                $sql = "SELECT MAX(weight) FROM " . $db_config['prefix'] . "_" . $lang . "_blocks_groups
                WHERE position=" . $db->quote($position) . " AND theme=" . $db->quote($block['theme']);
                $weight = $db->query($sql)->fetchColumn();
                $weight = (int) $weight + 1;

                $sql = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_blocks_groups(
                    theme, module, file_name, title, link, template,
                    position, exp_time, active, act, groups_view, all_func, weight, config
                ) VALUES (
                    " . $db->quote($block['theme']) . ",
                    " . $db->quote($block['module']) . ",
                    " . $db->quote($block['file_name']) . ",
                    " . $db->quote($block['title']) . ",
                    " . $db->quote($block['link']) . ",
                    " . $db->quote($block['template']) . ",
                    " . $db->quote($position) . ",
                    " . $block['exp_time'] . ",
                    " . $block['active'] . ",
                    " . $block['act'] . ",
                    " . $db->quote($block['groups_view']) . ",
                    " . $block['all_func'] . ",
                    " . $weight . ",
                    " . $db->quote($block['config']) . "
                )";
                $bid = $db->insert_id($sql);
                if (empty($bid)) {
                    continue;
                }

                // Chép cấu hình đặt vào các funcs
                $sql = "INSERT INTO " . $db_config['prefix'] . "_" . $lang . "_blocks_weight(bid, func_id, weight)
                SELECT " . $bid . ", func_id, weight
                FROM " . $db_config['prefix'] . "_" . $lang . "_blocks_weight
                WHERE bid=" . $block['bid'];
                $db->query($sql);
            } catch (Exception $e) {
                trigger_error(print_r($e, true));
            }
        }
        $result->closeCursor();

        $db->query("OPTIMIZE TABLE " . $db_config['prefix'] . "_" . $lang . "_blocks_groups");
        $db->query("OPTIMIZE TABLE " . $db_config['prefix'] . "_" . $lang . "_blocks_weight");
    }

    // Thay đổi trình soạn thảo CKEditor 4 sang CKEditor5 Classic
    try {
        $sql = "UPDATE " . NV_AUTHORS_GLOBALTABLE . " SET editor='ckeditor5-classic' WHERE editor='ckeditor';";
        $db->query($sql);
    } catch (Exception $e) {
        trigger_error(print_r($e, true));
    }

    // Bổ sung vào CSP
    try {
        $sql = "SELECT config_value FROM " . NV_CONFIG_GLOBALTABLE . " WHERE module='site' AND lang='sys' AND config_name='nv_csp'";
        $nv_csp = $db->query($sql)->fetchColumn();
        if (!empty($nv_csp)) {
            $nv_csp = nv_unhtmlspecialchars($nv_csp);

            $matches = [];
            preg_match_all("/([a-zA-Z0-9\-]+)[\s]+([^\;]+)/i", $nv_csp, $matches);
            $directives = [];
            foreach ($matches[1] as $key => $name) {
                $directives[$name] = trim($matches[2][$key]);
            }

            $connect_src = empty($directives['connect-src']) ? "'self' *.zalo.me *.tawk.to wss://*.tawk.to *.ckeditor.com" : $directives['connect-src'];
            if (strpos($connect_src, '*.ckeditor.com') === false) {
                $connect_src .= ' *.ckeditor.com';
            }
            $directives['connect-src'] = $connect_src;

            $nv_csp = '';
            foreach ($directives as $key => $directive) {
                $directive = trim(strip_tags($directive));
                if (!empty($directive)) {
                    $directive = str_replace(["\r\n", "\r", "\n"], ' ', $directive);
                    $nv_csp .= $key . ' ' . preg_replace('/[ ]+/', ' ', str_replace(["'", '"', '<', '>'], ['&#039;', '&quot;', '&lt;', '&gt;'], $directive)) . ';';
                }
            }

            $sql = "UPDATE " . NV_CONFIG_GLOBALTABLE . " SET config_value=" . $db->quote($nv_csp) . " WHERE module='site' AND lang='sys' AND config_name='nv_csp'";
            $db->query($sql);
        }
    } catch (Exception $e) {
        trigger_error(print_r($e, true));
    }

    // Cải tiến quyền sử dụng module Zalo
    try {
        $sql = "UPDATE " . $db_config['prefix'] . "_authors_module SET act_2=1 WHERE module='zalo';";
        $db->query($sql);
    } catch (Exception $e) {
        trigger_error(print_r($e, true));
    }

    return $return;
}

/**
 * @return
 */
function nv_up_finish()
{
    global $nv_update_baseurl, $db, $db_config, $nv_Cache, $global_config, $nv_update_config, $array_sitelangs;

    $return = [
        'status' => 1,
        'complete' => 1,
        'next' => 1,
        'link' => 'NO',
        'lang' => 'NO',
        'message' => ''
    ];

    // Xóa file thừa bản 4.5.07
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor', true);
    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/images/grab.cur');
    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/images/grabbing.cur');
    nv_deletefile(NV_ROOTDIR . '/assets/js/pdf.js/images/shadow.png');
    nv_deletefile(NV_ROOTDIR . '/vendor/phpmailer/phpmailer/get_oauth_token.php');
    nv_deletefile(NV_ROOTDIR . '/vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/CodeOneTwoEightA.php');
    nv_deletefile(NV_ROOTDIR . '/vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/CodeOneTwoEightB.php');
    nv_deletefile(NV_ROOTDIR . '/vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/CodeOneTwoEightC.php');
    nv_deletefile(NV_ROOTDIR . '/vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Aztec.php');
    nv_deletefile(NV_ROOTDIR . '/vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Aztec', true);

    // Xóa file thừa bản 4.5.05
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/plugins/googledocs', true);
    nv_deletefile(NV_ROOTDIR . '/admin/database/delfile.php');
    nv_deletefile(NV_ROOTDIR . '/admin/database/getfile.php');

    // Xóa file thừa bản 4.5.04
    nv_deletefile(NV_ROOTDIR . '/' . NV_ASSETS_DIR . '/js/DOMPurify/purify.js');

    // Xóa file thừa bản 4.5.03
    nv_deletefile(NV_ROOTDIR . '/' . NV_ASSETS_DIR . '/editors/ckeditor/plugins/autosave', true);
    nv_deletefile(NV_ROOTDIR . '/vendor/endroid', true);
    nv_deletefile(NV_ROOTDIR . '/vendor/symfony/options-resolver', true);

    nv_deletefile(NV_ROOTDIR . '/admin/authors/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/database/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/extensions/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/language/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/modules/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/seotools/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/settings/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/siteinfo/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/themes/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/upload/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/admin/webtools/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/assets/images/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/assets/js/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/assets/tpl/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/assets/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/data/cache/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/data/ip/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/data/ip6/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/data/logs/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/data/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/includes/utf8/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/includes/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/modules/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/themes/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/uploads/.htaccess');
    nv_deletefile(NV_ROOTDIR . '/vendor/.htaccess');

    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/plugins/eqneditor/plugin.js');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/plugins/googledocs/plugin.js');

    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/colorpanel.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/elementspath.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/index.html');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/mainui.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/menu.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/notification.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/panel.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/presets.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/richcombo.css');
    nv_deletefile(NV_ROOTDIR . '/assets/editors/ckeditor/skins/moono/toolbar.css');

    nv_deletefile(NV_ROOTDIR . '/vendor/symfony/polyfill-mbstring/bootstrap80.php');

    // Cập nhật phiên bản
    $array_modules = [
        'banners',
        'comment',
        'contact',
        'feeds',
        'freecontent',
        'menu',
        'news',
        'page',
        'seek',
        'statistics',
        'users',
        'voting',
        'two-step-verification'
    ];
    $array_themes = [
        'default',
        'mobile_default'
    ];

    try {
        $db->query("INSERT IGNORE INTO " . NV_CONFIG_GLOBALTABLE . " (lang, module, config_name, config_value) VALUES ('sys', 'site', 'ogp_image', '')");
    } catch (PDOException $e) {
        trigger_error(print_r($e, true));
    }

    $db->query('UPDATE ' . NV_CONFIG_GLOBALTABLE . " SET config_value='" . $nv_update_config['to_version'] . "' WHERE lang='sys' AND module='global' AND config_name='version'");
    $db->query('UPDATE ' . $db_config['prefix'] . "_setup_extensions SET  version='" . $nv_update_config['to_version'] . ' ' . $nv_update_config['release_date'] . "' WHERE type='module' AND basename IN ('" . implode("', '", $array_modules) . "')");
    $db->query('UPDATE ' . $db_config['prefix'] . "_setup_extensions SET  version='" . $nv_update_config['to_version'] . ' ' . $nv_update_config['release_date'] . "' WHERE type='theme' AND basename IN ('" . implode("', '", $array_themes) . "')");

    // Tao lai config_global.php
    nv_save_file_config_global();

    // Chay lai .htaccess
    $array_config_rewrite = [
        'rewrite_enable' => $global_config['rewrite_enable'],
        'rewrite_optional' => $global_config['rewrite_optional'],
        'rewrite_endurl' => $global_config['rewrite_endurl'],
        'rewrite_exturl' => $global_config['rewrite_exturl'],
        'rewrite_op_mod' => $global_config['rewrite_op_mod'],
        'ssl_https' => $global_config['ssl_https']
    ];
    $rewrite = nv_rewrite_change($array_config_rewrite);
    return $return;
}
