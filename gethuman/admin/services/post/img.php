<?PHP

include_once"../../control/config.php";
extract($_POST);

if (isset($_POST['path'])) {
    $imageUrl = $_POST['path'];
    if ($imageUrl != 'undefined') {
        unlink('../../../' . $imageUrl);
    } 
}

function mtimecmp($a, $b) {
    $mt_a = filemtime($a);
    $mt_b = filemtime($b);

    if ($mt_a == $mt_b)
        return 0;
    else if ($mt_a < $mt_b)
        return -1;
    else
        return 1;
}

$dirname = "../../../upload/blog/";
$images = glob($dirname . "*.{jpg,gif,png}", GLOB_BRACE);
usort($images, "mtimecmp");
$images = array_reverse($images);

if (isset($_POST['keyImg'])) {
    $keyImg = $_POST['keyImg'];
    $input = preg_quote($keyImg, '~');

    $images = preg_grep('~' . $input . '~', $images);
    $i = 0;
    foreach ($images as $image) {
        echo '<div class="col-xs-3 left myImage"><label style="border: 1px solid; margin:5px;"><img title="' . str_replace("../../../upload/blog/", "", $image) . '" width="150" height="150" onerror="this.src="' . BASE_URL . str_replace("../../../", "", $image) . '" src="' . BASE_URL . str_replace("../../../", "", $image) . '" alt="" class="img-check"><input type="radio" name="chk1" id="' . $i . '" value="' . str_replace("../../../", "", $image) . '" class="hidden" autocomplete="off" style="display: none;"></label><p class="imageName" style="display: none">' . str_replace("../../../upload/blog/", "", $image) . '</p></div>';
        $i++;
    }
} else {
    $i = 0;
    foreach ($images as $image) {
        echo '<div class="col-xs-3 left myImage"><label style="border: 1px solid; margin:5px;"><img title="' . str_replace("../../../upload/blog/", "", $image) . '" width="150" height="150" onerror="this.src="' . BASE_URL . str_replace("../../../", "", $image) . '" src="' . BASE_URL . str_replace("../../../", "", $image) . '" alt="" class="img-check"><input type="radio" name="chk1" id="' . $i . '" value="' . str_replace("../../../", "", $image) . '" class="hidden" autocomplete="off" style="display: none;"></label><p class="imageName" style="display: none">' . str_replace("../../../upload/blog/", "", $image) . '</p></div>';
        $i++;
    }
}
?>
