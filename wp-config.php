<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'longhash_bctech');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'longhash');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'mpytmm6bg9');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql714.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Sq8m4+YwKC_!G`3u_QAo6!do(W30]b{P)0bA:?Bt3o< #Yrew8aBBM*~/ESW!k?2');
define('SECURE_AUTH_KEY',  'I)<wy^3Hz-T+bzh)GWE+CEd{&@K:e|([mdVIT2.qS5OH#sC55Uv-|M(}c]>#~oBR');
define('LOGGED_IN_KEY',    'f9^+bjQb~)y2Ts7md2(3vs1Y-ug]kH/{nT5=[GtCpn}8|00z}qm)05iG[>JW*FxB');
define('NONCE_KEY',        'o]JH73`U*+xA]-[~|T|/zbKF{4+PgG;j_6.i^mCp+$T/[d$NgwF5EERXw(rWsT[,');
define('AUTH_SALT',        'B_U+%rlCdVhvpz<SIv~0TOPp9rS5+)&%7tHZQ ,<8&Lv=dhytu}BFWUNi1sF=8&D');
define('SECURE_AUTH_SALT', 'n|[s>r~{a0/=p[He9kE%DGFd*-fKggCxH@tG<^5]<)PA#o5YuHTZR[0SD1D!r_Xj');
define('LOGGED_IN_SALT',   '{6:2)u@+Z[XDLzQY$Z~rJO5!RwO:q1dbBvT|m32E@[0_Ro8AdgJR)#X`-o_jQscK');
define('NONCE_SALT',       'JpriOXn+>LA|S.oit@C{MYXq<8JAGO{Dg8-#||S9=<blQIO_#@f0Vm-+jX1F[DvB');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wpcd6408';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
