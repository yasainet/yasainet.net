<?php
// 自動挿入されるpやbrタグを削除
remove_filter('the_content', 'wpautop');

// ad
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
      $perc = array(80, 10, 10);

      $arr = array();
      foreach($data as $key => $val){
              $arr = array_merge($arr, array_fill(0, $perc[$key], $val));
      }

      shuffle($arr);
      echo current($arr);
}


// adadtest
class AdAbTest {
  private $templates = array();
  public function addTemplate($template, $ratio) {
    $this->templates[] = array(
      "template" => $template,
      "ratio" => $ratio,
    );
  }
  public function calc() {
    $sum = array_reduce($this->templates, function($sum, $e){$sum += $e["ratio"];return $sum;});
    $rand = mt_rand(0, $sum -1);
    $bound = 0;
    foreach ($this->templates as $t) {
      $next_bound = $bound + $t["ratio"];
      if ($rand >= $bound && $rand < $next_bound) {
//        print "DEBUG: bound matched ${bound} <= rand:${rand} < ${next_bound} \n";
        return $t;
      }
      $bound = $next_bound;
    }
    throw new Exception("not matched rand:${rand}");
  }

  public function display() {
    $tpl = $this->calc();
    print "display template : ${tpl["template"]} \n";
  }
}

function test() {
  $ad = new AdAbTest();
  $ad->addTemplate("<span>r15</span>", 15);
  $ad->addTemplate("<span>r25</span>", 25);
  $ad->addTemplate("<span>r60</span>", 60);
  $ad->display();

  $result = array();
  for ($i = 0;$i < 1000000; $i++) {
    $tpl = $ad->calc();
    $result[] = $tpl["ratio"];
  }
  $stat = array_count_values($result);
  var_dump($stat);
}

?>
