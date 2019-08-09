<?php
$manifest = array(
  0 =>
  array(
    'acceptable_sugar_versions' =>
    array(
      0 => '9.*',
    ),
  ),
  1 =>
  array(
    'acceptable_sugar_flavors' =>
    array(
      0 => 'PRO',
      1 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => '',
  'author' => 'RJM',
  'description' => 'creando campos',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'selanusa_campos',
  'published_date' => '2019-08-09 00:00:00',
  'type' => 'module',
  'version' => "1.0.0",
);
$installdefs = array(
  'id' => 'selanusa_campos',
  'custom_fields' => array(
    // Leads
    array(
      'name' => 'seo_num_cliente_c',
      'label' => 'LBL_SEO_NUMERO_DE_CLIENTE_C',
      'type' => 'varchar',
      'default_value' => false,
      'module' => 'Leads',
      'date_modified' => '2018-07-11 18:30:00',
      'required' => false,
      'deleted' => '0',
      'audited' => true,
      'duplicate_merge' => false,
      'reportable' => true,
    ),
  ),

  'language' => array(
    array(
      'from' => '<basepath>/custom/Extension/leads/Ext/Language/es_LA.Account_type_custom_lista.php',
      'to_module' => 'leads',
      'language' => 'es_LA'
    ),

  ),

  
);
