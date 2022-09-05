<?php

if (isset($_POST['update']) && isset($_FILES['title_img']) && isset($_FILES['image_1']) && isset($_FILES['image_2'])) {
    include "config.php";

    echo "<pre>";
    print_r($_FILES['title_img']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_1']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_2']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_3']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_4']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_5']);
    echo "</pre>";

    $img_name = $_FILES['title_img']['name'];
    $img_size = $_FILES['title_img']['size'];
    $tmp_name = $_FILES['title_img']['tmp_name'];
    $error = $_FILES['title_img']['error'];

    $img_name1 = $_FILES['image_1']['name'];
    $img_size1 = $_FILES['image_1']['size'];
    $tmp_name1 = $_FILES['image_1']['tmp_name'];
    $error1 = $_FILES['image_1']['error'];

    $img_name2 = $_FILES['image_2']['name'];
    $img_size2 = $_FILES['image_2']['size'];
    $tmp_name2 = $_FILES['image_2']['tmp_name'];
    $error2 = $_FILES['image_2']['error'];

    $img_name3 = $_FILES['image_3']['name'];
    $img_size3 = $_FILES['image_3']['size'];
    $tmp_name3 = $_FILES['image_3']['tmp_name'];
    $error3 = $_FILES['image_3']['error'];

    $img_name4 = $_FILES['image_4']['name'];
    $img_size4 = $_FILES['image_4']['size'];
    $tmp_name4 = $_FILES['image_4']['tmp_name'];
    $error4 = $_FILES['image_4']['error'];

    $img_name5 = $_FILES['image_5']['name'];
    $img_size5 = $_FILES['image_5']['size'];
    $tmp_name5 = $_FILES['image_5']['tmp_name'];
    $error5 = $_FILES['image_5']['error'];

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $highlights_1 = mysqli_real_escape_string($conn, $_POST['highlights_1']);
    $highlights_2 = mysqli_real_escape_string($conn, $_POST['highlights_2']);
    $highlights_3 = mysqli_real_escape_string($conn, $_POST['highlights_3']);
    $itn_day1 = mysqli_real_escape_string($conn, $_POST['itn_day1']);
    $itn_day2 = mysqli_real_escape_string($conn, $_POST['itn_day2']);
    $itn_day3 = mysqli_real_escape_string($conn, $_POST['itn_day3']);
    $itn_day4 = mysqli_real_escape_string($conn, $_POST['itn_day4']);
    $itn_day5 = mysqli_real_escape_string($conn, $_POST['itn_day5']);
    $included_1 = mysqli_real_escape_string($conn, $_POST['included_1']);
    $included_2 = mysqli_real_escape_string($conn, $_POST['included_2']);
    $included_3 = mysqli_real_escape_string($conn, $_POST['included_3']);
    $excluded_1 = mysqli_real_escape_string($conn, $_POST['excluded_1']);
    $excluded_2 = mysqli_real_escape_string($conn, $_POST['excluded_2']);
    $excluded_3 = mysqli_real_escape_string($conn, $_POST['excluded_3']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $faq_1 = mysqli_real_escape_string($conn, $_POST['faq_1']);
    $faq_2 = mysqli_real_escape_string($conn, $_POST['faq_2']);
    $faq_3 = mysqli_real_escape_string($conn, $_POST['faq_3']);
    $ratings = mysqli_real_escape_string($conn, $_POST['ratings']);

    $tourId = mysqli_real_escape_string($conn, $_POST['tour_id']);


    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_edit.php?error=$em");
        } else if ($img_size1 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_edit.php?error1=$em");
        } else if ($img_size2 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_edit.php?error2=$em");
        } else if ($img_size3 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_edit.php?error3=$em");
        } else if ($img_size4 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_edit.php?error4=$em");
        } else if ($img_size5 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_edit.php?error5=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
            $img_ex_lc1 = strtolower($img_ex1);

            $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
            $img_ex_lc2 = strtolower($img_ex2);

            $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
            $img_ex_lc3 = strtolower($img_ex3);

            $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);
            $img_ex_lc4 = strtolower($img_ex4);

            $img_ex5 = pathinfo($img_name5, PATHINFO_EXTENSION);
            $img_ex_lc5 = strtolower($img_ex5);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (!in_array($img_ex_lc, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_edit.php?error=$em");
            } else if (!in_array($img_ex_lc1, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_edit.php?error1=$em");
            } else if (!in_array($img_ex_lc2, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_edit.php?error2=$em");
            } else if ($img_ex_lc3 != null && !in_array($img_ex_lc3, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_edit.php?error3=$em");
            } else if ($img_ex_lc4 != null && !in_array($img_ex_lc4, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_edit.php?error4=$em");
            } else if ($img_ex_lc4 != null && !in_array($img_ex_lc5, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_edit.php?error5=$em");
            } else {
                $new_img_name = "image-title-" . $title . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $new_img_name1 = "image-01-" . $title . '.' . $img_ex_lc1;
                $img_upload_path1 = 'uploads/' . $new_img_name1;
                move_uploaded_file($tmp_name1, $img_upload_path1);

                $new_img_name2 = "image-02-" . $title . '.' . $img_ex_lc2;
                $img_upload_path2 = 'uploads/' . $new_img_name2;
                move_uploaded_file($tmp_name2, $img_upload_path2);

                if ($img_ex_lc3 != null) {
                    $new_img_name3 = "image-03-" . $title . '.' . $img_ex_lc3;
                    $img_upload_path3 = 'uploads/' . $new_img_name3;
                    move_uploaded_file($tmp_name3, $img_upload_path3);
                }
                if ($img_ex_lc4 != null) {
                    $new_img_name4 = "image-04-" . $title . '.' . $img_ex_lc4;
                    $img_upload_path4 = 'uploads/' . $new_img_name4;
                    move_uploaded_file($tmp_name4, $img_upload_path4);
                }
                if ($img_ex_lc5 != null) {
                    $new_img_name5 = "image-05-" . $title . '.' . $img_ex_lc5;
                    $img_upload_path5 = 'uploads/' . $new_img_name5;
                    move_uploaded_file($tmp_name5, $img_upload_path5);
                }

                // Update Database
                $sql = "UPDATE Tours SET title = '$title', title_img = '$img_upload_path', price = '$price', destination = '$destination'
                ,duration ='$duration',overview ='$overview',highlights_1= '$highlights_1',highlights_2='$highlights_2',
                highlights_3='$highlights_3',image_1='$img_upload_path1',image_2='$img_upload_path2',image_3='$img_upload_path3',
                image_4='$img_upload_path4',image_5='$img_upload_path5',itn_day1='$itn_day1',itn_day2='$itn_day2',itn_day3='$itn_day3',itn_day4='$itn_day4',
                itn_day5='$itn_day5',included_1='$included_1',included_2='$included_2',
                included_3='$included_3',excluded_1='$excluded_1',excluded_2='$excluded_2',
                excluded_3='$excluded_3',location='$location',faq_1='$faq_1',faq_2='$faq_2',faq_3='$faq_3',ratings='$ratings' WHERE id='$tourId'";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: admin_tours.php");
                }else{
                    header("Location: admin_tours_edit.php");
                }
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: admin_tours_edit.php?error=$em");
    }
}

if (isset($_POST['submit']) && isset($_FILES['title_img']) && isset($_FILES['image_1']) && isset($_FILES['image_2'])) {
    include "config.php";

    echo "<pre>";
    print_r($_FILES['title_img']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_1']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_2']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_3']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_4']);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES['image_5']);
    echo "</pre>";

    $img_name = $_FILES['title_img']['name'];
    $img_size = $_FILES['title_img']['size'];
    $tmp_name = $_FILES['title_img']['tmp_name'];
    $error = $_FILES['title_img']['error'];

    $img_name1 = $_FILES['image_1']['name'];
    $img_size1 = $_FILES['image_1']['size'];
    $tmp_name1 = $_FILES['image_1']['tmp_name'];
    $error1 = $_FILES['image_1']['error'];

    $img_name2 = $_FILES['image_2']['name'];
    $img_size2 = $_FILES['image_2']['size'];
    $tmp_name2 = $_FILES['image_2']['tmp_name'];
    $error2 = $_FILES['image_2']['error'];

    $img_name3 = $_FILES['image_3']['name'];
    $img_size3 = $_FILES['image_3']['size'];
    $tmp_name3 = $_FILES['image_3']['tmp_name'];
    $error3 = $_FILES['image_3']['error'];

    $img_name4 = $_FILES['image_4']['name'];
    $img_size4 = $_FILES['image_4']['size'];
    $tmp_name4 = $_FILES['image_4']['tmp_name'];
    $error4 = $_FILES['image_4']['error'];

    $img_name5 = $_FILES['image_5']['name'];
    $img_size5 = $_FILES['image_5']['size'];
    $tmp_name5 = $_FILES['image_5']['tmp_name'];
    $error5 = $_FILES['image_5']['error'];

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $duration = mysqli_real_escape_string($conn, $_POST['duration']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $highlights_1 = mysqli_real_escape_string($conn, $_POST['highlights_1']);
    $highlights_2 = mysqli_real_escape_string($conn, $_POST['highlights_2']);
    $highlights_3 = mysqli_real_escape_string($conn, $_POST['highlights_3']);
    $itn_day1 = mysqli_real_escape_string($conn, $_POST['itn_day1']);
    $itn_day2 = mysqli_real_escape_string($conn, $_POST['itn_day2']);
    $itn_day3 = mysqli_real_escape_string($conn, $_POST['itn_day3']);
    $itn_day4 = mysqli_real_escape_string($conn, $_POST['itn_day4']);
    $itn_day5 = mysqli_real_escape_string($conn, $_POST['itn_day5']);
    $included_1 = mysqli_real_escape_string($conn, $_POST['included_1']);
    $included_2 = mysqli_real_escape_string($conn, $_POST['included_2']);
    $included_3 = mysqli_real_escape_string($conn, $_POST['included_3']);
    $excluded_1 = mysqli_real_escape_string($conn, $_POST['excluded_1']);
    $excluded_2 = mysqli_real_escape_string($conn, $_POST['excluded_2']);
    $excluded_3 = mysqli_real_escape_string($conn, $_POST['excluded_3']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $faq_1 = mysqli_real_escape_string($conn, $_POST['faq_1']);
    $faq_2 = mysqli_real_escape_string($conn, $_POST['faq_2']);
    $faq_3 = mysqli_real_escape_string($conn, $_POST['faq_3']);
    $ratings = mysqli_real_escape_string($conn, $_POST['ratings']);


    if ($error === 0) {
        if ($img_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_info.php?error=$em");
        } else if ($img_size1 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_info.php?error1=$em");
        } else if ($img_size2 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_info.php?error2=$em");
        } else if ($img_size3 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_info.php?error3=$em");
        } else if ($img_size4 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_info.php?error4=$em");
        } else if ($img_size5 > 50000000) {
            $em = "Sorry, your file is too large.";
            header("Location: admin_tours_info.php?error5=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
            $img_ex_lc1 = strtolower($img_ex1);

            $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
            $img_ex_lc2 = strtolower($img_ex2);

            $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
            $img_ex_lc3 = strtolower($img_ex3);

            $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);
            $img_ex_lc4 = strtolower($img_ex4);

            $img_ex5 = pathinfo($img_name5, PATHINFO_EXTENSION);
            $img_ex_lc5 = strtolower($img_ex5);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (!in_array($img_ex_lc, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_info.php?error=$em");
            } else if (!in_array($img_ex_lc1, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_info.php?error1=$em");
            } else if (!in_array($img_ex_lc2, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_info.php?error2=$em");
            } else if ($img_ex_lc3 != null && !in_array($img_ex_lc3, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_info.php?error3=$em");
            } else if ($img_ex_lc4 != null && !in_array($img_ex_lc4, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_info.php?error4=$em");
            } else if ($img_ex_lc4 != null && !in_array($img_ex_lc5, $allowed_exs)) {
                $em = "You can't upload files of this type";
                header("Location: admin_tours_info.php?error5=$em");
            } else {
                $new_img_name = "image-title-" . $title . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $new_img_name1 = "image-01-" . $title . '.' . $img_ex_lc1;
                $img_upload_path1 = 'uploads/' . $new_img_name1;
                move_uploaded_file($tmp_name1, $img_upload_path1);

                $new_img_name2 = "image-02-" . $title . '.' . $img_ex_lc2;
                $img_upload_path2 = 'uploads/' . $new_img_name2;
                move_uploaded_file($tmp_name2, $img_upload_path2);

                if ($img_ex_lc3 != null) {
                    $new_img_name3 = "image-03-" . $title . '.' . $img_ex_lc3;
                    $img_upload_path3 = 'uploads/' . $new_img_name3;
                    move_uploaded_file($tmp_name3, $img_upload_path3);
                }
                if ($img_ex_lc4 != null) {
                    $new_img_name4 = "image-04-" . $title . '.' . $img_ex_lc4;
                    $img_upload_path4 = 'uploads/' . $new_img_name4;
                    move_uploaded_file($tmp_name4, $img_upload_path4);
                }
                if ($img_ex_lc5 != null) {
                    $new_img_name5 = "image-05-" . $title . '.' . $img_ex_lc5;
                    $img_upload_path5 = 'uploads/' . $new_img_name5;
                    move_uploaded_file($tmp_name5, $img_upload_path5);
                }

                // Insert into Database
                $sql = "INSERT INTO Tours (title,title_img,price,destination,duration,overview,highlights_1,highlights_2,highlights_3,image_1,image_2,image_3,image_4,image_5,itn_day1,itn_day2,itn_day3,itn_day4,itn_day5,included_1,included_2,included_3,excluded_1,excluded_2,excluded_3,location,faq_1,faq_2,faq_3,ratings) 
				        VALUES('$title','$img_upload_path','$price','$destination','$duration','$overview','$highlights_1','$highlights_2','$highlights_3','$img_upload_path1','$img_upload_path2','$img_upload_path3','$img_upload_path4','$img_upload_path5','$itn_day1','$itn_day2','$itn_day3','$itn_day4','$itn_day5','$included_1','$included_2','$included_3','$excluded_1','$excluded_2','$excluded_3','$location','$faq_1','$faq_2','$faq_3','$ratings')";
                mysqli_query($conn, $sql);
                header("Location: admin_tours.php");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: admin_tours_info.php?error=$em");
    }
}