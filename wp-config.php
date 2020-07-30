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
define('DB_NAME', 'db_blog');

/** MySQL数据库用户名 */
define('DB_USER', 'db_blog');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'db_blog');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AVS_qBG;[=~uk|OmGN7]/#q(XR/&{K`-E*`Hb1waU +2nmaAr 7v_J9&z|*Wy)~@');
define('SECURE_AUTH_KEY',  'v8z;NE>~zp`[@qj_qsr.kxgF>}I>p.NSrCve|hZvbpz1|Mz9herBO4}{F! (+o|X');
define('LOGGED_IN_KEY',    'BnO!^J=sC+p]]F%CDm~wjv+S(FZNSYAq}4NX^V<.;%|k-njl2W`Rjm6|}]f,Nx1A');
define('NONCE_KEY',        'wYui#H&Rm.fQT:OOqV7a*7w=.pVO?=&.HVmG;ZKt`TxA~wwp>~}ccfQuQf+cX]Y0');
define('AUTH_SALT',        'Z@7wn9<XCr?AN*IkrUoE)A BgY&iS|V6xpk@&Xs9Gx:hKt)/?ILU$-,aqs& #0p=');
define('SECURE_AUTH_SALT', 'S&;[[_pP(k7)}{cs@#d[aw%MF]xn5psR?Hb{#Exc2HL@}2qoXP5:,>5_I[+Cp^=r');
define('LOGGED_IN_SALT',   'L?{DNfb}Atv*/K/u_!Op$`A6+7B=ENAHzKsvHh_wnXoO{UVo}t.uQSt^~f#>1Gxc');
define('NONCE_SALT',       '{kYZ|;5yDK:?9g{P3,6ldd0_HT_ U6xs4WE+6uA~SoQl:>]Le{;jU!W}h13+jOig');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

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

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

/** 设置禁止自动更新。 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/** 不使用FTP。 */
define("FS_METHOD","direct");
define("FS_CHMOD_DIR",0777);
define("FS_CHMOD_FILE",0777);
 
