

<?php
// <<< @Gitara_Hacker tomonidan yozildi >>> <<< @YunusGitara kanalida tarqatildi >>>
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("5 hour"));
$sana=date('d-M Y',strtotime('5 hour'));
$kun=date("d",strtotime("5 hour"));
      $haf = date('N',strtotime('5 hour'));
      $haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
      $ex=explode("$haf",$haft);
      $hafta="$ex[1]";
$MadelineProto->account->updateProfile(['first_name'=>"Mᵁᴮᴼˁᴴᴱᴿ Mᵁʸᴰᴵᴺᴼᵛ $time",'about'=>"Insoniylik baridan ustun!! "]);

$logopic="http://xamroyev.tuit.ru/Apilar/Zak2/index.php?text=$time";

header('Content-type: image/jpg');
file_put_contents("Salom.jpg",file_get_contents($logopic));
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);

$MadelineProto->photos->updateProfilePhoto(['file' => "Salom.jpg" ]);
?>

