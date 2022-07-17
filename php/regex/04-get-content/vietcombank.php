<?php
$link = 'https://vnexpress.net';
$content = file_get_contents($link);
$pattern = '#(?<=automation_TV0").*(?=</div)#imsu';
preg_match($pattern, $content,$matches);


echo "<pre>";
print_r($matches);
echo "</pre>";


/**
 * <div class="right box_right">
                    <div class="box_giavang">
                        <a href="/chu-de/gia-vang-1403" data-itm-source="#vn_source=Home&amp;vn_campaign=BoxGiaVang&amp;vn_medium=TitleGiaVang&amp;vn_term=Desktop" title="Giá vàng" class="link-all-table" data-itm-added="1"></a>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="/chu-de/gia-vang-1403" data-itm-source="#vn_source=Home&amp;vn_campaign=BoxGiaVang&amp;vn_medium=TitleGiaVang&amp;vn_term=Desktop" title="Giá vàng" data-itm-added="1"><strong>Giá vàng</strong></a>
                                    </td>
                                    <td>Mua</td>
                                    <td>Bán</td>
                                </tr>
                                <tr>
                            <td>Vàng SJC (triệu đồng/lượng)</td>                                    
                            <td>67,9</td>
                            <td>68,7</td>
                        </tr><tr>
                            <td>Thế giới (USD/ounce)</td>                                    
                            <td>1.841,6</td>
                            <td>1.842,1</td>
                        </tr>
                            </tbody>
                        </table>
                    </div>
	</div>
 */