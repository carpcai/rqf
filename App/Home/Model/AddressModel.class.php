<?php
namespace Home\Model;
use Think\Model;
  /**
   *
   */
  class AddressModel extends Model
  {

    protected $_validate =array(
        array ('platform','require','平台不得为空'),
        array ('shopName','require','平台不得为空'),
        array ('addresser','require','平台不得为空'),
        array ('area_prov','require','省份不得为空'),
        array ('area_city','require','市级不得为空'),
        array ('addrDetail','require','平台不得为空'),
        array ('comments','require','平台不得为空'),
        array ('telPhone','require','手机号码不得为空'),
        array ('telPhone','11','手机号码必须为11位',3,'length'),
        array ('shop_url','require','平台不得为空'),
    );

  }

 ?>
