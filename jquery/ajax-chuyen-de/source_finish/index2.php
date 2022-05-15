<?
include("config.php");
     if (isset($_COOKIE['acc_token']) && isset($_COOKIE['rf_token']) && isset($_COOKIE['role'])) {
        if ($_COOKIE['role'] == 1) {
            $com_id = $_SESSION['com_id'];
            $user_id = $_SESSION['com_id']; 
            $role = 1;
    
            $query_shtl = "SELECT * FROM `so_hoa_tai_lieu` WHERE `id_cong_ty` = $com_id AND `trang_thai` = 1 AND `phe_duyet`= 1";
             
            $query_shtl_result = new db_query($query_shtl);
      
             } else if ($_COOKIE['role'] == 2) {
                $user_id = $_SESSION['ep_id'];
                $role = 2;
        }
    }   
echo $user_id;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://timviec365.vn/favicon.ico" rel="shortcut icon" />
    <link rel="preload" href="../fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="../fonts/Roboto-Medium.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="preload" href="../fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.style.css?ver=<?= $ver ?>">
    <link rel="stylesheet" media="all" href="../css/admin.style.css?ver=<?= $ver ?>" media="all" onload="if (media != 'all')media='all'">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Dữ liệu đã xoá gần đây</title>
</head>
<body>
    <div class="adm_container">
        <? include "../includes/admin.sidebar.php" ?>
        <div class="adm_content_col">
            <? include "../includes/admin.header.php" ?>
            <div class="adm_content">
                <div class="cnt_layout_3">
                    <div class="page-header">
                        <p class="adm_box_title recent-del-file-title">Thùng rác</p>
                        <p class="recent-del-file-warn"> Lưu ý: Các tệp tin được chuyển vào thùng rác sẽ tự động xóa sau 7 ngày </p>
                        <div class="page-content">
                            <div class="box-dinh-dang">
                                <span>Sắp xếp thep : </span>
                                <select class="select_dinh_dang">
                                    <option>Định dạng</option>
                                    <option>Gần đây</option>
                                    <option>A - Z </option>
                                    <option>Z - A </option>
                                </select>
                                <span class="dang-luoi"><a href="#file_xoa_detail"></a></span>
                                <span class="dang-chi-tiet"><a href="#"></a></span>
                            </div>

                            <table id="file_xoa_detail" class="tb_file_temporary tb_file_contract arrange_alphab">
                                <thead>
                                    <tr>
                                        <th class="ten-tt">
                                            <span>Tên tập tin</span>
                                            <span><i class="ic-arrow-down pl-10"></i></span>
                                        </th>
                                        <th>
                                            <span>Ngày sửa đổi</span>
                                            <span><i class="ic-arrow-down pl-10"></i></span>
                                        </th>
                                        <th>
                                            <span>Định dạng</span>
                                            <span><i class="ic-arrow-down pl-10"></i></span>
                                        </th>
                                        <th>
                                            <span>Kích thước</span>
                                            <span><i class="ic-arrow-down pl-10"></i></span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>   
                               <!--  <? if($role == 1) {   
                                  while ($items_shtl = mysql_fetch_assoc($query_shtl_result->result)) {
                                   ?>
                                    <tr>
                                        <td>
                                            <span><img src="../images/file_van_ban.svg" alt="upload folder"></span>
                                            <span><?= $items_shtl['ten_tep_tin'] ?></span>
                                        </td>
                                        <td>
                                            <span><?= date("d/m/Y h:i A",$items_shtl['ngay_chinh_sua'])?></span>
                                        </td>
                                        <td><p>File</p></td>
                                        <td><?= $items_shtl['kich_thuoc_file'] ?></td>
                                        <td class="show_more recent-file-delete">
                                            <div class="ba-cham-process ba-cham-process-delete more_detail">
                                                <img src="../images/admin_img/ba-cham-process.svg" alt="xem chi tiết" class="delete-file" />
                                            </div>           
                                            <div class="read_detail_table" id="tr_hop_dong_dt">
                                                <ul>
                                                    <li>
                                                        <span><img src="../images/admin_img/khoi_phuc.png" alt="Khôi phục file"></span>
                                                        <span><a href="#">Khôi phục</a></span>
                                                    </li>
                                                    <li>
                                                        <span><img src="../images/admin_img/thung_rac.png" alt="xoá file"></span>
                                                        <span class="thung_rac">Xoá</span>
                                                    </li>                                              
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?  }

                                        } //end if
                                     ?> -->

                                     <? $list_folder2 = new db_query("SELECT `id`, `ten_thu_muc`,`nguoi_tao`, `quyen_ntao`, `ngay_tao`,`gio_tao`, `ngay_sua`, `gio_sua`, `nguoi_quan_ly`, `phong_ban`, `nhan_vien_tgia` FROM `thu_muc` WHERE `trang_thai` = 1 AND `phe_duyet` = 1 AND `phan_loai` = 2 AND `id_cong_ty` = $com_id"); ?>
                                    <?
                                while ($items_tm = mysql_fetch_assoc($list_folder2->result)) {
                                      $id_thu_muc = $items_tm['id'];
                                         if($role == 1 ) {
                                   ?>
                                    <tr>
                                        <td>
                                            <span><img src="../images/admin_img/folder_upload.png" alt="upload folder"></span>
                                            <span><?= $items_tm['ten_thu_muc'] ?></span>
                                        </td>
                                        <td>
                                            <span><?= date("d/m/Y h:i A",$items_tm['ngay_sua'])?></span>
                                        </td>
                                        <td> <p>File Folder</p></td>
                                        <td>12.0 MB</td>
                                        <td class="show_more recent-file-delete">
                                            <div class="ba-cham-process ba-cham-process-delete more_detail">
                                                <img src="../images/admin_img/ba-cham-process.svg" alt="xem chi tiết" class="delete-file" />
                                            </div>           
                                            <div class="read_detail_table" id="tr_hop_dong_dt">
                                                <ul>
                                                    <li>
                                                        <span><img src="../images/admin_img/khoi_phuc.png" alt="Khôi phục file"></span>
                                                        <span><a href="#">Khôi phục</a></span>
                                                    </li>
                                                    <li>
                                                        <span><img src="../images/admin_img/thung_rac.png" alt="xoá file"></span>
                                                        <span class="thung_rac">Xoá</span>
                                                    </li>                                              
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <?  } elseif( $role == 2 ) {

                                            if($items_tm['nhan_vien_tgia']!= "") {
                                                $list_nvien_tg = explode(',', $items_tm['nhan_vien_tgia']);
                                                $list_nvien_ql = explode(',', $items_tm['nguoi_quan_ly']);
                                                if(in_array($user_id, $list_nvien_tg) || in_array($user_id, $list_nvien_ql) || ($user_id == $items_tm['nguoi_tao'] && $items_tm['quyen_ntao'] == 2)) {
                                                    $check_quyen = mysql_fetch_assoc((new db_query("SELECT `quyen_thu_muc` FROM `phan_quyen_tm_nv` WHERE `id_thu_muc`= $id_thu_muc AND `id_nhan_vien`= $user_id AND `id_cong_ty`= $com_id"))->result);

                                                    $lists_quyen = explode(',', $check_quyen['quyen_thu_muc']);

                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <span><img src="../images/admin_img/folder_upload.png" alt="upload folder"></span>
                                                                <span><?= $items_tm['ten_thu_muc'] ?></span>
                                                            </td>
                                                            <td>
                                                                <span><?= date("d/m/Y h:i A",$items_tm['ngay_sua'])?></span>
                                                            </td>
                                                            <td> <p>File Folder</p></td>
                                                            <td>12 MB</td>
                                                            <td class="show_more recent-file-delete">
                                                                <? if(in_array(1, $lists_quyen) || in_array(3, $lists_quyen)) {?>  

                                                                <div class="ba-cham-process ba-cham-process-delete more_detail">
                                                                    <img src="../images/admin_img/ba-cham-process.svg" alt="xem chi tiết" class="delete-file" />
                                                                </div>           
                                                                <div class="read_detail_table" id="tr_hop_dong_dt">

                                                                    <ul>
                                                                        <? if (in_array(1, $lists_quyen) ) { ?>
                                                                        <li class="khoi-phuc-file-rd" data-id="<?= $id_thu_muc ?>" data-com="<?= $com_id ?>">
                                                                            <span><img src="../images/admin_img/khoi_phuc.png" alt="Khôi phục file"></span>
                                                                            <span><a href="#">Khôi phục</a></span>
                                                                        </li>
                                                                        <?}?>
                                                                        <? if (in_array(3, $lists_quyen) ) {?>
                                                                        <li class="xoa-vv-file-rd" data-id="<?= $id_thu_muc ?>" data-com="<?= $com_id ?>">
                                                                            <span><img src="../images/admin_img/thung_rac.png" alt="xoá file"></span>
                                                                            <span class="thung_rac">Xoá</span>
                                                                        </li>     
                                                                        <? } ?>                                         
                                                                    </ul>
                                                                </div>
                                                             <? }  ?> 
                                                            </td>
                                                        </tr>
                                                <?  

                                            } else {
                                                    echo "rỗng";
                                                    if ($items_tm['phong_ban'] == 0) {
                                                        echo $items_tm['phong_ban'];
                                                        $check_quyen_pb = mysql_fetch_assoc((new db_query("SELECT `quyen_thu_muc` FROM `phan_quyen_tm_pb` WHERE `id_thu_muc`= $id_thu_muc AND `id_phong_ban`= 0 AND `id_cong_ty`= $com_id "))->result);
                                                         $list_quyen_pb = explode(',', $check_quyen_pb['quyen_thu_muc']);

                                                    } elseif($items_tm['phong_ban'] != '' && $items_tm['phong_ban'] != 0){
                                                        $list_pb_tg = explode(',', $items_tm['phong_ban']);
                                                        $id_phong_ban = $all_nv[$user_id]['dep_id'];
                                                            echo "<pre>";
                                                            print_r( $id_phong_ban);
                                                            echo "</pre>";
                                                         if (in_array($id_phong_ban, $list_pb_tg)) {
                                                            $check_quyen_pb = mysql_fetch_assoc((new db_query("SELECT `quyen_thu_muc` FROM `phan_quyen_tm_pb` WHERE `id_thu_muc`= $id_thu_muc AND `id_phong_ban`= $id_phong_ban AND `id_cong_ty`= $com_id "))->result);
                                                             $list_quyen_pb = explode(',', $check_quyen_pb['quyen_thu_muc']);
                                                             if (in_array(1, $list_quyen_pb)) {

                                                             }
                                                         }
                                                    }
                                                 }

                                            }
                                        }  							
                                    } //end while
                                    ?>
                                </tbody> 
                            </table>

                            <div id="file_xoa_grid" class="an_tab">                                
                                <div class="saf_wrap saf_wrap_grid">
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 1</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 2</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 3</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 4</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 5</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 6</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 6</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 6</p>
                                    </div>
                                    <div class=" saf_item">
                                        <img src="../images/admin_img/adm_folder.png" alt="adm_folder">
                                        <p>Phòng 6</p>
                                    </div>
                                </div>
                            </div>         
                        </div>
                        <div class="modal_1 text-center modal_cr_fol_pro" id="upload_main_file">
                            <div class="m-content">
                                <div class="create_folder_popup">
                                    <div class="create_folder">
                                        <span><img src="../images/admin_img/folder_upload.png" alt></span>
                                        <span><p class="adm_box_title">Tạo thư mục mới</p></span>
                                    </div>
                                    <div class="name_folder_create">
                                        <form action="#" method="post">
                                            <label>Tên thư mục</label>
                                            <input type="text" name="name_folder_create" >
                                            <button class="create_folder_btn">Tạo</button>
                                            <button class="delete_folder_btn">Huỷ</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal2 text-center">
                            <div class="m-content">
                                <div class="popup_container">
                                    <div class="popup_process_upload ">
                                        <div class="tltt_wrap">
                                            <div>
                                                <span><img src="../images/admin_img/upload1.png" alt="popup file upload"></span>
                                                <span><p style="font-weight: 600;">Tải lên tập tin<p></span>
                                            </div>
                                            <div class="box-delete">
                                                <span>&#10006;</span>
                                            </div>
                                        </div>
                                        <ul class="upload_items">
                                            <li class="upload_item_li">
                                                <span><img src="../images/admin_img/doc.png" alt=""></span>
                                                <span>
                                                    <p>Word.doc</p>
                                                    <ul>
                                                        <li>10/02/2022</li>
                                                        <li>16:07</li>
                                                        <li>- 3.4Mb/5Mb</li>
                                                    </ul>
                                                </span>
                                            </li>
                                            <li class="upload_item_li">
                                                <span><img src="../images/admin_img/doc.png" alt=""></span>
                                                <span>
                                                    <p>Word.doc</p>
                                                    <ul>
                                                        <li>10/02/2022</li>
                                                        <li>16:07</li>
                                                        <li>- 3.4Mb/5Mb</li>
                                                    </ul>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup_file_submit">
                                    <button type="button" class="save_file_upload">Lưu</button>
                                    <button type="button" class="cancel_file_upload">Huỷ bỏ</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal_1 text-center popup_noti_full_memo" id="popup_noti_full_memo">
                            <div class="m-content">
                                <div class="popup-memo-cont">
                                    <div class="popup-top-cnt">
                                        <div class="box-delete " id="box-noti-delete">
                                            <span>&#10006;</span>
                                        </div>
                                        <ul>
                                            <li><img src="../images/admin_img/adm_folder.png"></li>
                                            <li><p class="popup-top-cnt-title">Thư mục lưu trữ đã đầy</p></li>
                                            <li><p class="popup-top-cnt-des">Thư mục lưu trữ của bạn đã đầy. Bạn cần xóa bớt hoặc số hóa tài liệu này</p></li>
                                            <li class="memo-noti-submit">
                                                <button class="create_folder_btn">Tạo</button>
                                                <button class="delete_folder_btn">Huỷ</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal_1 text-center popup_delete_file">
                            <div class="m-content">
                                <div class="popup-delete-cont">
                                    <ul>
                                        <li>
                                            <img src="../images/admin_img/delete_button.png" alt="xoá tập tin">
                                        </li>
                                        <li>
                                            <p class="popup-top-cnt-des font_16">Bạn có chắc chắn xóa tệp tin không ?</p>
                                        </li>
                                        <li>
                                            <button class="create_folder_btn btn-xoa-vv-file" data-id="" data-com="<?= $com_id ?>">Xoá</button>
                                            <button class="delete_folder_btn">Huỷ bỏ</button>
                                        </li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                        <div class="modal_1 text-center popup_edit_file" id="popup_edit_file">
                            <div class="m-content">
                                <div class="popup-edit-cont">
                                    <div class="top-edit-file">
                                        <div>
                                            <span><img src="../images/admin_img/folder_upload.png"></span>
                                            <span>Sửa đổi</span>
                                        </div>
                                        <div class="box-delete">
                                            <span>&#10006;</span>
                                        </div>
                                    </div>
                                    <div class="middle-edit-file">
                                        <label></label>
                                        <input type="text" name="popup-edit-file">
                                    </div>
                                    <div class="bottom-edit-file">
                                        <button type="button" class="save_file_upload">Lưu</button>
                                        <button type="button" class="cancel_file_upload">Huỷ bỏ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!---end cnt_layout_2---->
                </div> <!---end adm-content---->
        </div><!------end adm_content_col---->
    </div> <!---end adm_container--->
 <? include('../modal/dang_xuat.php')  ?>
<script type="text/javascript" src="../js/jquery3.6.js"></script>
<script src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/admin.main.js"></script>
<script type="text/javascript">
    $('th').click(function() {
        var table = $(this).parents('table').eq(0)
        var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
        this.asc = !this.asc
        $('.ic-arrow-down').toggleClass('active');

        if (!this.asc) {
            rows = rows.reverse();
        }
        for (var i = 0; i < rows.length; i++) {
            table.append(rows[i])
        }
    })
    function comparer(index) {
        return function(a, b) {
            var valA = getCellValue(a, index),
                valB = getCellValue(b, index)
            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
        }
    }

    function getCellValue(row, index) {
        return $(row).children('td').eq(index).text()
    }

    $(".khoi-phuc-file-rd").on('click',function(){
        var id_thu_muc = $(this).attr('data-id');
        var com_id = $(this).attr('data-com');
        $.ajax({
            url: '../ajax/khoi_phuc_tep_tin.php',
            type: 'POST',
            data: {
                id_thu_muc:id_thu_muc,
                com_id : com_id,
            },
            success: function (data) {
               if (data == "") {
                    window.location.reload();
                } else if (data != "") {
                    alert(data);
                }
            }
        }) 
    });
    //xoa file
    $(".xoa-vv-file-rd").on('click',function(){
        var id_thu_muc = $(this).attr('data-id');
        $(".btn-xoa-vv-file").attr('data-id',id_thu_muc)
    })

    $(".btn-xoa-vv-file").on('click',function(){
         var id_thu_muc = $(this).attr('data-id');
         var com_id = $(this).attr('data-com');

        $.ajax({
            url: '../ajax/xoa_vv_file.php',
            type: 'POST',
            data: {
                id_thu_muc:id_thu_muc,
                com_id : com_id,
            },
            success: function (data) {
               if (data == "") {
                    window.location.reload();
                } else if (data != "") {
                    alert(data);
                }
            }
        }) 
    });

</script>
</body>
</html>