<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

if (empty($_GET['page']) || !isset($_GET['page']) || $_GET['page']=='' || $_GET['page']==null) {
	$page = 1;
} else {
	$page = $_GET['page'];
}

if (empty($_GET['pagesize']) || !isset($_GET['pagesize']) || $_GET['pagesize']=='' || $_GET['pagesize']==null || $_GET['pagesize'] > 10) {
	$pagesize = 10;
} else {
	$pagesize = $_GET['pagesize'];
}

$appconfigsql = C::t('#hux_wx#hux_wx_config')->fetch_by_appid('pic');
$appconfig = unserialize($appconfigsql['configs']);
if ($appconfig['delday'] && $appconfig['delday'] != '0') {
	$picdeltime = intval($appconfig['delday']) * 86400;
	C::t('#hux_wx#hux_wx_pic')->delete_by_dateline($picdeltime);
}
$offset = ($page - 1) * $pagesize;
$pagetotal = $page * $pagesize;
$pmdata = C::t('#hux_wx#hux_wx_pic')->fetch_all_by_search('','ORDER BY dateline DESC',1,$offset,$pagesize);
foreach ($pmdata as $v) {
	$users = C::t('#hux_wx#hux_wx')->fetch_by_openid($v['openid'],'uid');
	$user = C::t('#hux_wx#hux_uc_members')->fetch_by_uid($users['uid'],'username');
	$v['message'] = $user['username'];
	$v['date'] = dgmdate($v['dateline']);
	if (CHARSET != 'utf-8' && !$wxsetting['code']) {
		$v['message'] = diconv($v['message'],CHARSET,'utf-8');
	}
	$pmview[] = $v;
}
$result = '{"list":';
$result .= json_encode($pmview);
$result .= '}';

sleep(1);
echo $result;
?>