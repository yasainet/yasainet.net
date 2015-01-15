<?php
# function adSp(){
#   $nend = 'hoge';
#   $imobile = 'piyo';
#   $maist = 'moga';
#
#   $data = array($nend, $imobile, $maist);
#   $perc = array(10, 50, 40);
#
#   $arr = array();
#   foreach($data as $key => $val){
#     $arr = array_merge($arr, array_fill(0, $perc[$key], $val));
#   }
#
#   shuffle($arr);
#
#   echo current($arr);
#
#   sprintf($arr);
# }
#
# adSp();

function adSp(){
$maist = <<<EOM
<script language='javascript' src='http://ad.maist.jp/ad/js/spssi.js'></script>
<script language='javascript'><!--
maist_sp_js('http://ad.maist.jp/ad', '_site=10988&_loc=11255');
//--></script>
<noscript>
<a target='_blank' href='http://ad.maist.jp/ad/sps/r?_site=10988&_loc=11255'>
<img src='http://ad.maist.jp/ad/p/img?_site=10988&_loc=11255' border=0></a>
</noscript>
EOM;
$nend = <<<EOM
<script type="text/javascript">
var nend_params = {"media":10239,"site":44214,"spot":88127,"type":1,"oriented":1};
</script>
<script type="text/javascript" src="http://js1.nend.net/js/nendAdLoader.js"></script>
EOM;
$imobile = <<<EOM
<!-- i-mobile for SmartPhone client script -->
<script type="text/javascript">
    imobile_tag_ver = "0.2";
    imobile_pid = "25461";
    imobile_asid = "171603";
    imobile_type = "inline";
</script>
<script type="text/javascript" src="http://spad.i-mobile.co.jp/script/adssp.js?20110215"></script>
EOM;

      $data = array($maist, $nend, $imobile);
      $perc = array(30, 40, 30);

      $arr = array();
      foreach($data as $key => $val){
              $arr = array_merge($arr, array_fill(0, $perc[$key], $val));
      }

      shuffle($arr);
      echo current($arr);
}

adSp();

# http://yasainet.net/wp-content/themes/yasainet.net/hoge.php
?>
