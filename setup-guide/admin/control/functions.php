<?php
include_once"rpAction.php";

//ob_start("compress_code");
/**
 * 
 */
class SeoSmo {

    public function isIndex($index = 0) {
        if ($index == 1) {
            ?>
            <meta name="robots" content="index, follow"/>
            <meta name="googlebot" content="index, follow"/>
            <meta name="bingbot" content="index, follow"/>
            <meta name="allow-search" content="yes"/>
            <?php
        }
        if ($index == 0) {
            ?>
            <meta name="robots" content="noindex, nofollow"/>
            <meta name="googlebot" content="noindex, nofollow"/>
            <meta name="bingbot" content="noindex, nofollow"/>
            <meta name="allow-search" content="no"/>
            <?php
        }
    }

    public function metas($page_title = '', $page_des = '', $page_key = '') {
        if ($page_title != "") {
            echo '<title>' . $page_title . '</title>';
        }
        if ($page_des != "") {
            echo '<meta name="description" content="' . $page_des . '">';
        }
        if ($page_key != "") {
            echo '<meta name="keywords" content="' . $page_key . '">';
        }
    }

    public function ogTags($ogSmoTitle = '', $ogSmoDes = '', $status = 0) {
        $cr_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $imgName = $_SERVER['REQUEST_URI'];
        if ($status == 1) {
            if ($ogSmoTitle != "") {
                echo '<meta property="og:type" content="website" />
				<meta property="og:url" content="' . $cr_url . '" />
				<meta property="og:title" content="' . $ogSmoTitle . '" />
				<meta property="og:description" content="' . $ogSmoDes . '" />';
                //echo '<meta property="og:image" content="'.BASE.'images/'.extractPageName().'.jpg" />';
            }
            if ($ogSmoDes != "") {
                echo '<meta name="twitter:title" content="' . $ogSmoTitle . '">
					<meta name="twitter:description" content="' . $ogSmoDes . '">';
                //echo '<meta property="twitter:image" content="'.BASE.'images/'.extractPageName().'.jpg" />';
            }
        }
    }

}

function sendmail($to, $subject, $message, $name = '') {
    $mail = new PHPMailer();
    $body = $message;
//    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "rahulphpeglobalsoft@gmail.com";
    $mail->Password = "rahul";
    $mail->SMTPSecure = 'tls';
    $mail->SetFrom('info@' . $_SERVER['HTTP_HOST'], brand_title);
    $mail->AddReplyTo("noreply@" . $_SERVER['HTTP_HOST'], brand_title);
    $mail->Subject = $subject;
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
    $mail->MsgHTML($body);
    $address = $to;
    $mail->AddAddress($address, $name);
    if (!$mail->Send()) {
        return 0;
    } else {
        return 1;
    }
}

function businessMsg($id, $businessText) {
    $userData = "SELECT *,users.email as uemail FROM `users` INNER JOIN listing on users.id = listing.userId where listing.listId = $id";
    $userData = queryRun($userData, $debug = 3);
    $userData_row = $userData->fetch_assoc();
    $name = $userData_row['name'];
    $to = $userData_row['uemail'];
    $companyName = $userData_row['companyName'];
    $subject = 'Your ' . $companyName . ' ' . $businessText . ' By ' . brand_title;
    $message = "<p>Hi $name</p><p>Your $companyName $businessText by " . brand_title . " Admin</p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
    sendmail($to, $subject, $message, $name_mailer = '');
}

function reviewMsg($id, $businessText) {
    $userData = "SELECT *,users.email as uemail FROM `rating_review`"
            . " INNER JOIN users on rating_review.userId = users.id"
            . " INNER join listing on listing.listId = rating_review.listId where reviewId = $id";
//    $userData = "SELECT *,users.email as uemail FROM `users` INNER JOIN rating_review on users.id = rating_review.userId where rating_review.reviewId = $id";
    $userData = queryRun($userData, $debug = 3);
    $userData_row = $userData->fetch_assoc();
    $name = $userData_row['name'];
    $to = $userData_row['uemail'];
    $website = $userData_row['website'];
    $subject = $name . ', your review has just been ' . $businessText;
    $message = "<p>Hi $name,</p><p>Your review of " . BASE_URL . "review/$website has just been $businessText. Thanks!</p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
    sendmail($to, $subject, $message, $name_mailer = '');
}

function activationEmail($email, $name) {
    $e = base64_encode($email);
    $to = $email;
    $activeUrl = BASE_URL . "confirm-account?e='$e'";
    $subject = brand_title . ' Activation Email';
    $message = "<p>Hi $name</p><p>Thanks for creating account with us at <a href=" . BASE_URL . ">" . brand_title . ".</a></p><p> <a href=" . $activeUrl . ">Activate account </a></p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
    sendmail($to, $subject, $message, $name_mailer = '');
}

function createAccount($email, $name) {
    $to = $email;
    $subject = brand_title . ' Verify Account Details';
    $message = "<p>Hi $name</p><p>Thanks for creating account with us at <a href=" . BASE_URL . ">" . brand_title . ".</a></p><p> User - $email</p><p>Password - 123456</p><p>Login Url : " . BASE_URL . "login</p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
    sendmail($to, $subject, $message, $name_mailer = '');
}

function activeUser($email, $name) {
    $to = $email;
    $subject = brand_title . ' Account Details';
    $message = "<p>Hi $name</p><p>Thanks for creating account with us at <a href=" . BASE_URL . ">" . brand_title . ".</a></p><p> User - $email</p><p>Password - $password</p><p>Login Url : " . BASE_URL . "login</p><p>" . brand_title . " Team<br/><a href=" . BASE_URL . ">" . brand_title . "</a>";
    sendmail($to, $subject, $message, $name_mailer = '');
}

function total_review($listId) {
    $data_total_review = "SELECT * FROM `rating_review` WHERE listId = $listId AND status = 1";
    $data_total_review = queryRun($data_total_review, $debug = 3);
    return $total_review = $data_total_review->num_rows;
}

function avg_rating($listId) {
    $data_rating_avg = "SELECT AVG(rating) AS avg_rating FROM `rating_review` WHERE listId = $listId AND status = 1";
    $data_rating_avg_data = queryRun($data_rating_avg, $debug = 3);
    if ($data_rating_avg_data->num_rows > 0) {
        $data_rating_avg_row = $data_rating_avg_data->fetch_assoc();
        $avg_rating = $data_rating_avg_row['avg_rating'];
        $avg_rating = round($avg_rating);
    } else {
        $avg_rating = 0;
    }
    return $avg_rating;
}

// content management
function content($contentPath, $lenth = 1000) {
    $filename = $contentPath;
    $rahulphpArray = [];
    // Open the file for reading
    if (($h = fopen("{$filename}", "r")) !== FALSE) {
        while (($data = fgetcsv($h, $lenth, ",")) !== FALSE) {
            $rahulphpArray[] = $data;
        }
        // Close the file
        fclose($h);
    }
    return $rahulphpArray;
    //var_dump($rahulphpArray);
}

function dynamicContent($content) {
    $element = count($content) - 2;
    $contentR = 2;
    for ($contentLoop = 0; $contentLoop < $element; $contentLoop++) {
        ?>
        <h4><?php echo $content[$contentR][0]; ?></h4>
        <p><?php echo $content[$contentR][2]; ?></p>
        <?php
        $contentR++;
    }
}

function fileUrl($key_file) {
    $data = "https://docs.google.com/spreadsheets/d/e/2PACX-" . $key_file;
    $about = content($data);
}

function seoUrl($linkName, $phpSlash = '') {
    $filterUrl = str_replace(" ", "-", $linkName);
    $filterUrl = strtolower($filterUrl);
    echo BASE . $filterUrl . $phpSlash;
}

function extractPageName() {
    $urlExtract = basename($_SERVER['PHP_SELF']);
    //$urlExtract=str_replace("-", " ", $urlExtract);
    $finalName = str_replace(".php", "", $urlExtract);
    return $finalName;
}

function findMetas($pageMetas) {
    $classSeo = new SeoSmo();
    $metas = fopen(BASE . "content/metas.csv", "r");
    while ($row = fgetcsv($metas)) {
        if (in_array($pageMetas, $row)) {
            //print_r($row);
            $classSeo->metas(ucwords($row[1]), $row[2], $row[3]);
            $classSeo->ogTags($row[1], $row[2], $status = 1);
        }
    }
}

// compress website
function compress_code($code) {
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s'
    );

    $replace = array('>', '<', '\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
}

function img($img) {
    $src = "data:image/jpg;base64,";
    echo $src . base64_encode(file_get_contents($img));
}

function cleanStr($str, $key = 0) {
    if ($key == 0) {
        $url = str_replace(" ", "-", $str);
        $url = str_replace("&", "and", $url);
        $url = strtolower($url);
        echo $url;
    }
    if ($key == 1) {
        $url = str_replace("-", " ", $str);
        $url = str_replace(".php", "", $url);
        $url = ucwords($url);
        echo $url;
    }

    if ($key == 2) {
        $url = str_replace(".php", "", $str);
        echo strtolower($url);
    }
    if ($key == 3) {
        $url = str_replace("-", " ", $str);
        $url = str_replace(".php", "", $url);
        $url = strtolower($url);
        return $url;
    }
}

function CsvToJson($file) {
    $csv = file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $json = json_encode($array);
    print_r($json);
}

function formatBytes($bytes, $precision = 2) {
    $units = array("b", "kb", "mb", "gb", "tb");

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= (1 << (10 * $pow));

    return round($bytes, $precision) . " " . $units[$pow];
}

function ip() {
    $ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
}

function dateFormate($date, $format, $type = 0) {
    $source = $date;
    $date = new DateTime($source);
    $date = $date->format($format);
    if ($type == 1) {
        return $date;
    } else {
        echo $date;
    }
}

function UrlClean($string) {
    $string = trim($string);
    $string = preg_replace("/[^a-zA-Z0-9- ]/", "", $string);
    $string = str_replace(' ', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    return $string = strtolower($string);
}

// Removes special chars.
function clean_spcial_char($string) {
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}

function UrlCleanSearch($string) {
    $string = trim($string);
    $string = preg_replace("/[^a-zA-Z0-9- ]/", "", $string);
    $string = str_replace(' ', '+', $string);
    $string = str_replace('&', '+', $string);
    $string = preg_replace('/-+/', '+', $string);
    $string = str_replace('++', '+', $string);
    return $string = strtolower($string);
}

function google_recaptcha() {
    if (isset($_POST['g-recaptcha-response'])) {
        $response = $_POST['g-recaptcha-response'];

        $res = recaptcha($response, gr_secretkey);
        $res = json_decode($res, TRUE);
        //print_r($res);
        if ($res['success'] != 1) {
            echo '{"status":"error","msg":"Please tick the box to prove you are not a robot!"}';
            exit();
        }
    }
}

function recaptcha($response, $secret) {
    $postvars = array("secret" => "$secret", "response" => "$response");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, '3');
    $content = trim(curl_exec($ch));
    curl_close($ch);
    return $content;
}

function resizeImage($tempName, $file_path, $extension, $width, $height) {
    // Width auto resize 150*150
    $result = move_uploaded_file($tempName, $file_path);
    if ($extension == 'png') {
        $orig_image = imagecreatefrompng($file_path);
    } elseif ($extension == 'jpeg' || $extension == 'jpg' || $extension == 'JPEG') {
        $orig_image = imagecreatefromjpeg($file_path);
    }
    $image_info = getimagesize($file_path);
    $width_orig = $image_info[0]; // current width as found in image file
    $height_orig = $image_info[1]; // current height as found in image file
    $destination_image = imagecreatetruecolor($width, $height);
    imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    // This will just copy the new image over the original at the same filePath.
    imagejpeg($destination_image, $file_path, 100);
}

function sitemap_create($url) {
    $xmldoc = new DomDocument('1.0');
    $xmldoc->preserveWhiteSpace = false;
    $xmldoc->formatOutput = true;

    $limit = "daily";
    $prt = "0.80";
    if ($xml = file_get_contents('../sitemap.xml')) {
        $xmldoc->loadXML($xml, LIBXML_NOBLANKS);

        // find the headercontent tag
        $root = $xmldoc->getElementsByTagName('urlset')->item(0);

        // create the <product> tag
        $product = $xmldoc->createElement('url');

        // add the product tag before the first element in the <headercontent> tag
        $root->insertBefore($product, $root->lastChild);

        // create other elements and add it to the <product> tag.
        $nameElement = $xmldoc->createElement('loc');
        $product->appendChild($nameElement);
        $nameText = $xmldoc->createTextNode($url);
        $nameElement->appendChild($nameText);

        $categoryElement = $xmldoc->createElement('changefreq');
        $product->appendChild($categoryElement);
        $categoryText = $xmldoc->createTextNode($limit);
        $categoryElement->appendChild($categoryText);

        $availableElement = $xmldoc->createElement('priority');
        $product->appendChild($availableElement);
        $availableText = $xmldoc->createTextNode($prt);
        $availableElement->appendChild($availableText);

        $xmldoc->save('../sitemap.xml');
    }
}

function sitemap_create_admin($url) {
    $xmldoc = new DomDocument('1.0');
    $xmldoc->preserveWhiteSpace = false;
    $xmldoc->formatOutput = true;

    $limit = "daily";
    $prt = "0.80";
    if ($xml = file_get_contents('../../../sitemap.xml')) {
        $xmldoc->loadXML($xml, LIBXML_NOBLANKS);

        // find the headercontent tag
        $root = $xmldoc->getElementsByTagName('urlset')->item(0);

        // create the <product> tag
        $product = $xmldoc->createElement('url');

        // add the product tag before the first element in the <headercontent> tag
        $root->insertBefore($product, $root->lastChild);

        // create other elements and add it to the <product> tag.
        $nameElement = $xmldoc->createElement('loc');
        $product->appendChild($nameElement);
        $nameText = $xmldoc->createTextNode($url);
        $nameElement->appendChild($nameText);

        $categoryElement = $xmldoc->createElement('changefreq');
        $product->appendChild($categoryElement);
        $categoryText = $xmldoc->createTextNode($limit);
        $categoryElement->appendChild($categoryText);

        $availableElement = $xmldoc->createElement('priority');
        $product->appendChild($availableElement);
        $availableText = $xmldoc->createTextNode($prt);
        $availableElement->appendChild($availableText);

        $xmldoc->save('../../../sitemap.xml');
    }
}

function get_domain($url) {
    $pieces = parse_url($url);
    $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
        return $regs['domain'];
    }
    return false;
}
function OgTagClean($string) {
    $string = trim($string);
    $string = preg_replace("/[^a-zA-Z0-9- ]/", "", $string);
    return $string = preg_replace('/-+/', '', $string);
}
?>