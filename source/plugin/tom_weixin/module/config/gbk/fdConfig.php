<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$moduleConfig = array(
    'module_cmd'       => "fd",
    'module_desc'      => "΢�ŷ���",
	'power_id'         => '1',
	'module_ver'       => '1.1',
);

$moduleLang = array(
    'no_fid' => '����Ա��û������΢�ſ��Է����İ��',
    'select_fid' => '�����뷢�����ID:',
    'select_err_fid' => '��������ȷ�İ��ID:',
    'select_type' => "��������������:\n1:���ı�����\n2:��ͼƬ����\n3:ͼ������",
    'select_err_type' => "��������ȷ����������:\n1:���ı�����\n2:��ͼƬ����\n3:ͼ������",
    'intitle'=>'���������ӱ��⣺',
    'intitle_err'=>'��������ȷ�����ӱ��⣺',
    'inimage'=>'�뷢��ͼƬ��',
    'inimage_err'=>'�뷢��ͼƬ',
    'incontent'=>'�������������ݣ�',
    'book_err'=>'������Ϊ����������߷�������æ��������ķ������ӷ���ʧ�ܣ���ֱ�Ӵ���ķ�����飬�鿴�Ƿ����ɹ�',
);

$moduleSettingExt = array(
    array(
        'type'   => 'input',
        'title'  => '����΢�ŷ������',
        'name'   => 'fid',
        'value'  => '0,0',
        'desc'   => '����΢�ŷ����İ��ID�������� ��Ӣ�Ķ��š� ����',
    ),
    array(
        'type'   => 'input',
        'title'  => '���ӱ���ǰ׺',
        'name'   => 'tag',
        'value'  => '[΢��]',
        'desc'   => '΢�ŷ��������ӱ���ǰ׺����������ǰ׺�����磺[΢��]�������������������',
    ),
);

?>