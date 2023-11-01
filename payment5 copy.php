<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>การจองและชำระเงิน</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/booking.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/swipebox.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="stylemain1.css" type="text/css" media="all">
        <link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/> 
    </head>
    <body class="single-product travel_tour-page travel_tour">
        <div class="wrapper-container">
            <div class="site wrapper-content">
                <div class="top_site_main" style="background-image:url(assets/images/bg.jpg);">
                    <div class="banner-wrapper container article_heading">
                        <div class="breadcrumbs-wrapper">
                            <ul class="phys-breadcrumb">
                                <li><a href="index.php" class="home">หน้าแรก</a></li>
                                <li><a href="index.php">แพ็กเกจ</a></li>
                                <li>ชำระเงิน</li>
                            </ul>
                        </div>
                        <h2 class="heading_primary">ชำระเงิน</h2></div>
                </div>
                <section class="content-area single-woo-tour">
                    <div class="container">
    <div class="site-main col-sm-12">
						<div class="entry-content">
							<div class="travel_tour">
								<div id="completed"></div>
								<form name="myForm" id="myForm" method="POST" class="checkout travel_tour-checkout" action="bookingsuccess.php">
								<input type="hidden" id="myaction" name="myaction" value="">
								<input type="hidden" id="tourid" name="tourid" value="33">
	                            <input type="hidden" id="input_date" name="Date" value="03/11/2023">
	                            <input type="hidden" id="input_adult" name="input_adult" value="1">
	                            <input type="hidden" id="input_child" name="input_child" value="0">
									<div class="row">
										<div class="col-md-7 columns">
											<div class="col2-set" id="customer_details">
												<div class="col-1">
													<div class="travel_tour-billing-fields">
														<h3>ข้อมูลลูกค้า</h3>

														<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required travel_tour-validated" id="billing_country_field">
															<label for="billing_country" class="">ชื่อแพ็กเกจ
																<abbr class="required" title="required">*</abbr>
                                                            </label>
														<select id="input_prefix" name="Name_pck" class="country_to_state country_select" style="margin-bottom: 0px;" required="">
						                                        <option value="กรุณาเลือกแพ็กเกจที่ต้องการ">กรุณาเลือกแพ็กเกจที่ต้องการ</option>
                                                                <option value="แพ็กเกจกระบี่ 3 วัน 2 คืน โรงแรม MONOTEL">แพ็กเกจหลีเป๊ะ 3 วัน 2 คืน พักโรงแรม บันดาหยา วิลล่า</option>
					                                    </select>
														</p>
														<p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
															<label for="billing_first_name" class="">ชื่อ
																<abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="text" class="input-text" id="input_fname" name="Firstname" value="" required="">
														</p>
														<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
															<label for="billing_last_name" class="">นามสกุล
																<abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="text" class="input-text" id="input_lname" name="Lastname" value="" required="">
														</p>
														<div class="clear"></div>
														<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
															<label for="billing_email" class="">อีเมล
																<abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="email" class="input-text" id="input_email" name="Email" value="" required="">
														</p>
														<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
															<label for="billing_phone" class="">เบอร์ติดต่อ
																<abbr class="required" title="required">*</abbr>
                                                            </label>
                                                            <input type="tel" class="input-text" id="input_phone" name="Tel" value="" required="">
														</p>
														<div class="clear"></div>

														<p class="form-row form-row notes" id="order_comments_field">
															<label for="order_comments" class="">หมายเหตุ
                                                            </label>
                                                            <textarea class="input-text " id="input_remark" name="Comment" rows="2" cols="5" style="margin-bottom: 0px;"></textarea>
														</p>

														<p class="form-row form-row-wide create-account travel_tour-validated" id="myBtn">
															<input class="input-checkbox" id="input_accept" type="checkbox" name="input_accept">
															<label for="input_accept" class="checkbox">
                                                                <b style="font-size: 16px;">ฉันเข้าใจและเห็นด้วยกับข้อกำหนดในการให้บริการและการยกเลิก</b>
                                                            </label>
														</p>
													</div>
												</div>
											</div>
										</div>      
                                            <div class="summary entry-summary description_single">
                                             <div class="affix-sidebar">
                                                <div class="entry-content-tour">
                                                    <div id="showprice">
                                                    <p class="price" align="center" style="padding-top: 20px;">
                                                        <span class="text" style="font-size: 20px;">
                                                        ผู้ใหญ่ <strong>6,600</strong><small> บาทต่อคน</small>
                                                        </span>
                                                    </p>
                                                    <p class="price" align="center">
                                                        <span class="text" style="font-size: 20px;">
                                                        เด็ก <strong>6,200</strong><small> บาทต่อคน</small></span>
                                                    </p>
                                                    </div>
                                                    <p class="price" align="center">
                                                        <span class="text" style="font-size: 14px;">
                                                        <small>*ฟรีสำหรับเด็กอายุต่ำกว่า 4 ปี</small>
                                                        </span>
                                                    </p>
                
                                                    <div style="margin-bottom: 30px;background-color: #fff;"></div>
                
                                                    <p class="price" align="center">
                                                        <span class="text" style="font-size: 16px;"><b>จองทัวร์ของคุณ</b></span>
                                                    </p>
                                                    <div class="clear"></div>
                                                    <div class="booking">
                                                        <div class="">
                                                            <form  action="payment.html" id="tourBookingForm" name="tourBookingForm" method="POST">
                                                            <input type="hidden" id="tourid" name="tourid" value="86">
                                                            <input type="hidden" id="myaction" name="myaction" value="">
                
                                                            <table id="tickets" class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ตั๋ว</th>
                
                                                                            <th>จำนวน</th>
                                                                            <th class="text-center"><span class="subtotal">ราคา</span>
                
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tfoot>
                                                                        <tr class="total_row">
                                                                            <td colspan="2"><strong>ราคารวม</strong>
                                                                            </td>
                                                                            <td class="text-center">
                                                                                <input name="Price" id="total" value="" readonly="">
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>ผู้ใหญ่</strong><a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="16 - 65 years old"><sup class="icon-info-4"></sup></a>
                                                                                <span class="price">6,660</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="styled-select">
                                                                                    <select class="form-control" name="input_adult" id="input_adult">
                                                                                                                                                                <option value="1">1</option>
                                                                                                                                                                <option value="2">2</option>
                                                                                                                                                                <option value="3">3</option>
                                                                                                                                                                <option value="4">4</option>
                                                                                                                                                                <option value="5">5</option>
                                                                                                                                                                <option value="6">6</option>
                                                                                                                                                                <option value="7">7</option>
                                                                                                                                                                <option value="8">8</option>
                                                                                                                                                                <option value="9">9</option>
                                                                                                                                                                <option value="10">10</option>
                                                                                                                                                            </select>
                                                                                </div>
                                                                            </td>
                
                                                                            <td class="text-center"><span class="subtotal">$0</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>เด็ก (4-10)</strong><a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="9 - 15 years old"><sup class="icon-info-4"></sup></a><span class="price">6,200</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="styled-select">
                                                                                    <select class="form-control" name="input_child" id="input_child">
                                                                                        <option value="0">0</option>
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>
                                                                                        <option value="4">4</option>
                                                                                        <option value="5">5</option>
                                                                                        <option value="6">6</option>
                                                                                        <option value="7">7</option>
                                                                                        <option value="8">8</option>
                                                                                        <option value="9">9</option>
                                                                                        <option value="10">10</option>
                                                                                    </select>
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-center"><span class="subtotal">$0</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="">
                                                                    วันเดินทาง <input type="Date" placeholder="วันเดินทาง" id="Date" name="Date" value="" required="">
                                                                </div><br>                                                 
                                                                <div id="payment" class="travel_tour-checkout-payment">
                                                                    <ul class="wc_payment_methods payment_methods methods">
                                                                        <li class="wc_payment_method payment_method_bacs">								
                                                                            <input id="input_payment3" type="radio" class="input-radio" name="input_payment" value="1" onclick="paymentoption(1);">
                                                                            <label for="payment_method_bacs">
                                                                                <b>ชำระด้วยการโอนเงิน</b>
                                                                            </label>
                                                                            <p style="padding-left: 25px;">คุณสามารถแนบสลิป เพื่อแจ้งการโอนเงินได้ที่นี่</p>
                                                                            <img width="430" height="305" src="assets/images/QR.jpg">
                                                                        </li><br>
                                                                        <p>
                                                                            <input type="file" name="File_pay" id="image">
                                                                        </p> <br>
                                                                        <div class="">
                                                                        วันที่ชำระเงิน <input type="Date" placeholder="วันที่ชำระเงิน" id="Date_pay" name="Date_pay" value="" required="">
												                        </div><br>
                                                                    </ul>
                                                                        <div class="form-row place-order">
                                                                            <input type="submit" class="button alt" name="travel_tour_checkout_place_order" id="place_order" value="จองทัวร์และชำระเงิน">
                                                                        </div>
                                                                        <div style="padding-top: 20px;" align="center">
                                                                        </div>
                                                                    </div>
                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

<script src="js/jquery-2.2.4.min.js"></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/vendors.js'></script>
<script type='text/javascript' src='assets/js/jquery.swipebox.min.js'></script>
<script type='text/javascript' src='assets/js/theme.js'></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCaQjbVDR1vRh2iS_V3jLBXRrkQxmoxycQ'></script>
<script type='text/javascript' src='assets/js/gmap.js'></script>


		<script type="text/javascript" src="datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="datepicker/js/helper.js"></script>
        <script type="text/javascript" src="datepicker/js/template.js"></script>
        <script src="js/script.js"></script>
        <script type="text/javascript">
        	        jQuery("#input_date").datepicker({
	                format: "dd/mm/yyyy",
	                autoclose: true,
	                startDate: new Date(),
	                startDate: '+1d'

	        });
                $('#input_date').on('changeDate', function() {
            //$('#input_pickupdate').datepicker('getFormattedDate'),
                Loadprice();Showprice();
        });


        </script>
</body>
</html>