<?php

define('DB_NAME', '$DB_DATABASE');

define('DB_USER', '$DB_USER');

define('DB_PASSWORD', '$DB_USER_PASSWORD');

define('DB_HOST', '$DB_HOST');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

define('AUTH_KEY', 'e+J/|A1!]/pm9(s6DBP]k/HVaE-8|sBKalw:}q:hJ_CBzKv@cx+#4=f&720i5!f~');

define('SECURE_AUTH_KEY', 'ib-o.*j3leNwbd,7}=*=:z*4c!KZ!kpcVDB*iGb WcId(Mz+]yLzDN2~^NY|aP)e');

define('LOGGED_IN_KEY', 'qh_Ui`pW9toC7-Tz!m1FAzz!vVxylNco;#`X&:`^);PZyd1{WjWPKj=~l@-Y{1Od');

define('NONCE_KEY', '({<gyB!|Tl8vsLNYT-1U|G] +8=N-S#(_$|_&k-DxcbKS>zy[C2{Wh+&2I8i-p,I');

define('AUTH_SALT', '_vRXOy1xVq4.AbGbO~/B+_qsF0[UW@3Ms$(7J[53v{k?goI?r%%+9}8jZc?2F-L0');

define('SECURE_AUTH_SALT', '$vZM~zt|o?Onx[rmWZ(OtF#(l^1SNK)wD_3qER33JD}8`y-{ZRu|Codgvc#n!Zgj');

define('LOGGED_IN_SALT', '=V]GausYO;0i*Qe^[&s101EJo$)4N|(huc9t-p//{V-V0rc+Un-l[N_Ug >B.=^Y');

define('NONCE_SALT', ',?[~$q7w*uDpQ4$$?t*Kt@W~[n=nfo2J_c-|.{=1+UlnR9iCi,SAz2l8)uZcdrp]');

define('WP_DEBUG', false);

$table_prefix = 'wp_';

if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
