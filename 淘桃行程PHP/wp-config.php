<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'pony' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', '1' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XJMF%l(K}{<iZ$i9Otx%n~_qWpD+vOSv:TO$MA^c<T%SL[tHbA1=1arXJ6:.QW0Z' );
define( 'SECURE_AUTH_KEY',  'b?TW_x<, =n#/e}c,0<eFLs0Ov&6UIA<!X&Ko8Rm63_ 4E&Xs*=o1@)F7>@85[?T' );
define( 'LOGGED_IN_KEY',    'Gy0l;BUOHRuse{~,&87OsKXKd(e5K-niu8pHd)hI%%rOCviSy5Zh<?@zwR2(|Iwk' );
define( 'NONCE_KEY',        'E{]]H?2.!hB`Gn2m;YDK!Ih6L.y~l6l=:a| v[ YMB!_B>E|3.nUyN}jUn}@(0]*' );
define( 'AUTH_SALT',        'f9}{8B$Ywx0iFld<F;%EpFo>xuk^)9o &JH?01Y-wu2e59#.7GA@2j4ex)Mr}o&`' );
define( 'SECURE_AUTH_SALT', 'b;560GF|N!^;siVw@=KBpa?0lFk&j[wN]jP&$0a`Je[98TQy5jg}-?s6qgfiTHq@' );
define( 'LOGGED_IN_SALT',   '>X#!T%d&F$*qBN./8*-$JX|kiVgcd++ov]+iQjS6dCl/g-`,aU=K^&b{1e5Q@hfX' );
define( 'NONCE_SALT',       'Dn(z;WeJFbATMVEN@|M2gBo ZF0>}WCKbf/Aq~7Sba-yNn#ziw}sY#9[om~4)G63' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );