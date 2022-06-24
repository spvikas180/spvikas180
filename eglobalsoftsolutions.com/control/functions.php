<?php
header("Cache-Control: no-cache, must-revalidate");
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
        if ($status == 1) {
            if ($ogSmoTitle != "") {
                echo '<meta itemprop="name" content="' . $ogSmoTitle . '">
				<meta itemprop="' . $ogSmoDes . '">
				<meta itemprop="image" content="https://www.tirelessitservices.com/<?php echo BASE; ?>images/development/wd.jpg"/>';
                echo '<meta property="og:type" content="website" />
				<meta property="og:url" content="' . $_SERVER['REQUEST_URI'] . '" />
				<meta property="og:title" content="' . $ogSmoTitle . '" />
				<meta property="og:description" content="' . $ogSmoDes . '" />
				<meta property="og:image" content="https://www.tirelessitservices.com/<?php echo BASE; ?>images/designs/bg.png" />';
            }
            if ($ogSmoDes != "") {
                echo '<meta name="twitter:title" content="' . $ogSmoTitle . '">
					<meta name="twitter:description" content="' . $ogSmoDes . '">
					<meta name="twitter:image" content="https://www.tirelessitservices.com/<?php echo BASE; ?>images/designs/bg.png">';
            }
        }
    }

}

/**
 * page builder
 */
class Pages {
    
}



function sendmail($to, $subject, $message, $name) {
    $mail = new PHPMailer();
    $body = $message;
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->Username = "rahulphpeglobalsoft@gmail.com";
    $mail->Password = "rahulphp@123";
    $mail->SMTPSecure = 'tls';
    $mail->SetFrom('info@tirelessitservices.com', 'Your name');
    $mail->AddReplyTo("noreply@tirelessitservices.com", "Your name");
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



function builder() {
    if (isset($_POST['create_page'])) {
        error_reporting(E_ALL);
        $upperName = ucwords($_POST['name']);
        $pagenameurl = strtolower($_POST['name']);
        $pagenameurl = str_replace(" ", "-", $pagenameurl);
        $pagename = $pagenameurl;
        for ($i = 1; $i <= 4; $i++) {
            if ($i == 1) {
                $newFileName = 'pages/' . $pagename . ".php";
                $newFileContent = '<h1> welocme to ' . $pagename . '</h1>';
            }
            if ($i == 2) {
                $newFileName = 'css/pages/' . $pagename . ".css";
                $newFileContent = '/*' . $pagename . '*/';
            }
            if ($i == 3) {
                $newFileName = 'js/pages/' . $pagename . ".js";
                $newFileContent = '// ' . $pagename;
            }
            if ($i == 4) {
                $newFileName = $pagename . ".php";
                $newFileContent = '<?php include"config.php"; ?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		    <?php
		    $page_title="' . $upperName . ' - Nexus Web World";
		    $page_des="";
		    $page_key="";
		    $pageName="";
		    ?>
		    <!-- COMMON TAGS -->
		    <?php include_once"head.php"; ?>
		    <?php
		    $page="' . $pagename . '.php";
		    $path= "pages";
		    $fileName = scandir($path, 1);
		    $indirName=array_search($page,$fileName);
		    $flatName=str_replace(".php","",$page);
		     ?>
		    <link rel="stylesheet" href="css/pages/' . $pagename . '.css">
		</head>
		<body><?php include_once"header.php"; ?>
		<?php include_once"temp-part/common-banner.php"; ?>
		<section class="page_wrapper">
		    <?php //include_once"temp-part/static-1.php"; ?>
		    <?php
		        if (in_array($page, $fileName)) {
		            include_once $path."/".$page;
		        }else{
		            echo "<h1>Unvarified page</h1>";
		        }
		        ?>
		    <?php //include_once"pages/about.php"; ?>
		</section>
		<?php include_once"footer.php"; ?>
		<script src="js/pages/' . $pagename . '.js"></script>
		</body>
		</html>';
            }
            if (file_put_contents($newFileName, $newFileContent) !== false) {
                echo "File created (" . basename($newFileName) . ")";
            } else {
                echo "Cannot create file (" . basename($newFileName) . ")";
            }
        }
    }
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
// compress website
function compress_code($code) 
{
 $search = array(
  '/\>[^\S ]+/s',  // remove whitespaces after tags
  '/[^\S ]+\</s',  // remove whitespaces before tags
  '/(\s)+/s'       // remove multiple whitespace sequences
 );

 $replace = array('>','<','\\1');
 $code = preg_replace($search, $replace, $code);
 return $code;
}
function img($img){
    $src="data:image/jpg;base64,";
    echo $src.base64_encode(file_get_contents($img));
}

function tis_confiq($option,$key="")
 {
     switch ($option) {

        case 'homeSer':
            $cats=array('Electrician', 'Air conditioning & heat','Garden & Backyard Maintenance','Carpenters','Plumbers','Packers & Movers','Cleaners','Laundry Services','Security Services');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'realestate':
            $cats=array("real-estate");
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'health':
            $cats=array('Gym/Crossfit', 'Beauty Salons','health stores','Nail Salons','Chiroprators','Dentists','Doctors','SPA/Massages','Medical Diagnostic Labs');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'restobars':
            $cats=array('Restaurants');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'web':
            $cats=array('Accounting Companies', 'Business Legal Services');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'edu':
            $cats=array('Pre-Schools', 'Training Institutes','Cooking Schools');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'delivery':
            $cats=array('Florists', 'Food Delivery','Booze delivery');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    }
 }
function linksExm($option,$key="")
 {
     switch ($option) {

        case 'Electrician':
            $cats=array('https://www.rgelectric.net/', 'http://sdselectric.com/','https://www.mjelectricli.com/','https://kuhlmanelectricalservices.com/','https://www.branovercontractors.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Air conditioning & heat':
            $cats=array('http://www.craigsair.com/', 'https://www.scarpellimechanical.com/','https://pacwestair.com/air-conditiong','https://www.drductless.com/','https://www.eminsair.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Garden & Backyard Maintenance':
            $cats=array('https://www2.lawnlove.com/california/los-angeles-lawn-care?utm_campaign=Paid&utm_medium=WebsiteLink&utm_source=Yelp','https://www.landscapingtreela.com/','http://www.californiagreentreecare.com/','http://www.garysgreeneryla.com/home','https://www.sparkleyard.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Carpenters':
            $cats=array('https://luxzpaintingdesign.com/','https://www.abastascabinets.com/','https://premiumcabinets.com/houston','https://simplehome.solutions/','https://theebonycarpenter.us/
');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Plumbers':
            $cats=array('https://www.williamsburgplumber.com/
','https://www.plumberinqueens.com/','http://francobelli.com/','https://peralpiping.heyastro.io/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Packers & Movers':
            $cats=array('https://bartsofficemoving.com/','https://www.roadwaymoving.com/
','https://www.vectormoversnj.com/','https://www.veteranmoversnyc.com/','https://sekamoving.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Cleaners':
            $cats=array('https://www.myclean.com/?r=NYC','https://obsessivecleaning.com/','https://maidsailors.com/book-now/?rcode=YELPER10','https://orchidhousecleaning.com/','https://helpmaidcleaningservices.com/
');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Laundry Services':
            $cats=array('http://www.chenillecleaner.com/','https://www.wash.com/','https://www.thelaundress.com/
','https://www.crescenthillscleaners.com/','http://www.windsorparkcleaners.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Security Services':
            $cats=array('https://topgunsecurityservices.com/','https://www.wilsonjames.co.uk/security
','https://www.adt.com/','https://www.pinkerton.com/#landing');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'real-estate':
            $cats=array('https://daniellelazier.com/','http://www.loczidesign.com/','https://www.decorist.com/
','https://sengadesign.com/','https://perch-home.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Gym/Crossfit':
            $cats=array('https://www.packtraining.com/','https://www.oathletik.com/','https://wellbridge.com/maryland-athletic-club/','https://www.fyrefitlagree.com/','https://fithouston.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Beauty Salons':
            $cats=array('https://www.salontrosehtx.com/','https://theupperhand.com/','https://www.therapyhairstudio.com/','https://www.cutloosetx.com/','https://www.whitesalon.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'health stores':
            $cats=array('https://valeofit.com/?gclid=Cj0KCQjwiILsBRCGARIsAHKQWLNV0_hZ5WI7V0FLLoF3p_TBI4BPwrlNJzxrQ1SC3fmy4qLfohZsm70aArSzEALw_wcB','https://www.technogym.com/int/','https://takecareof.com/','https://www.masterblendsmfg.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Nail Salons':
            $cats=array('https://www.nailslifestudio.com/','https://www.nailsalonhoustontx.com/
','https://www.a6nail.com/','http://retreatnailsspa.com/','https://secretescapenailloungehouston.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Chiroprators':
            $cats=array('https://physiologicnyc.com/','https://www.vanguardspine.com/','https://www.drshoshany.com/','https://www.westuwellness.com/','https://www.flushingphysicaltherapy.com/en/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Dentists':
            $cats=array('https://www.midtowndentalgroup.com/','https://www.grandstreetdental.com/','https://eadofamilydental.com/','http://greenearthdentistry.com/','https://www.jamesherbstdds.com/
');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Doctors':
            $cats=array('https://www.onemedical.com/','http://www.reynaldoalonsomd.com/','https://www.lexmednyc.com/','https://www.eastsidemedicalpractice.com/','https://weillcornell.org/wcm-primary-care-tribeca');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'SPA/Massages':
            $cats=array('http://wearethaimassage.com/','https://www.citytouchnyc.com/','https://sarahmaag.com/
','https://www.meltmassagenyc.com/','https://www.bodyworksdw.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'SPA/Massages':
            $cats=array('http://wearethaimassage.com/','this','this','this','this');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Medical Diagnostic Labs':
            $cats=array('https://www.bioreference.com/?utm_source=Yelp','https://www.questdiagnostics.com/home/patients?utm_source=yelp&utm_medium=social&utm_campaign=pscprofiles&utm_term=psc&utm_content=patients
','https://www.metromedicaldirect.com/','https://www.labcorp.com/labs-and-appointments/results?locID=29932&utm_source=Yelp&utm_medium=cpc&utm_campaign=Yelp-NE-Pilot-Organic-Website','http://ddwdrugtestingservice.com/optin');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Restaurants':
        $cats=array('https://www.masraffs.com/','https://www.gramercytavern.com/','https://www.steak48.com/','https://www.madhouston.com/','https://www.safinahouston.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Accounting Companies':
            $cats=array('http://www.lesserandco.co.uk/#slidetopoint','https://www.goldfinecpa.com/','https://www.buttandco.com/','https://www.rcotax.com/','https://www.pearlaccountants.com/accountants-kingston/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
        case 'Business Legal Services':
            $cats=array('https://www.geciclaw.com/','https://www.shumwayvan.com/','http://www.tsmplaw.com/our-expertise/','http://www.turkslegal.com.au/','https://www.tremainartaza.com/consult');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    case 'Pre-Schools':
            $cats=array('https://naturalchoiceacademy.com/','https://ardentpreschool.com/
            ','https://kiddieacademy.com/academies/north-phoenix/?utm_source=yelp&utm_medium=referral&utm_content=listing&utm_campaign=Sponsored+Listing
            ','https://www.camelbackdesertschool.com/?utm_medium=directory&utm_source=yelp&utm_campaign=paid_listing&utm_content=website','https://www.brighthorizons.co.uk/our-nurseries/crawley-day-nursery-and-preschool?utm_source=Yext&utm_medium=Referral&utm_campaign=Listings_ThirdParty_28B_Crawley');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    case 'Training Institutes':
            $cats=array('https://coachtrainingworld.com/','https://www.filmconnection.com/school-locations/new-york/','https://www.themaulerinstitute.com/','https://cadmiami.com/','http://www.hebrontechnical.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    case 'Cooking Schools':
            $cats=array('https://cookingbythebook.com/','https://www.kitchenonfire.com/','https://neworleansschoolofcooking.com/','https://mietteculinarystudio.com/','https://homecookingny.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    case 'Florists':
            $cats=array('https://edelweissflorist.com/','https://www.rosehipsocial.com/','https://www.starbrightnyc.com/?srccode=yelp_track','https://petalsandrootsny.com/','https://seaportflowers.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    case 'Food Delivery':
            $cats=array('http://tasteofnigeria.us/','https://lukasbbq.com/','https://www.othook.com/','http://naradining.com/#main','http://www.flipnpatties.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;
    case 'Booze delivery':
            $cats=array('https://minibardelivery.com/partner/Houston/chalet-fine-wines-liquors?utm_source=facebook&utm_medium=supplier_pages&utm_campaign=chalet-fine-wines-liquors','http://poshliquors.com/','https://www.goodygoody.com/landing','http://www.theliquorstore5.com/','https://www.topshelfapp.com/');
            if ($key==0) {
                return $cats;
            } else {
                echo $cats[$key];
            }
            break;

        }
    }
ob_start("compress_code");
