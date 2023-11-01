<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
* Script: pos_lang.php
*   Thai translation file
*
 * Last edited:
 * 30th April 2015
 *
 * Package:
 * Stock Manage Advance v3.0
 *
 * You can translate this file to your language.
 * For instruction on new language setup, please visit the documentations.
 * You also can share your language files by emailing to saleem@tecdiary.com
 * Thank you
 */

// For quick cash buttons -  if you need to format the currency please do it according to you system settings
$lang['quick_cash_notes'] = ['10', '20', '50', '100', '500', '1000', '5000'];

$lang['pos_module']                         = 'ณ จุดขาย โมดูล';
$lang['cat_limit']                          = 'แสดงหมวดหมู๋';
$lang['pro_limit']                          = 'แสดงสินค้า';
$lang['default_category']                   = 'เริ่มต้นหมวดหมู่';
$lang['default_customer']                   = 'เริ่มต้นลูกค้า';
$lang['default_biller']                     = 'เริ่มต้นผู้รับ';
$lang['pos_settings']                       = 'การตั้งค่า จุดขาย';
$lang['barcode_scanner']                    = 'เครื่องอ่านบาร์โค๊ด';
$lang['x']                                  = 'X';
$lang['qty']                                = 'จำนวน';
$lang['total_items']                        = 'จำนวนทั้งหมด';
$lang['total_payable']                      = 'รวมเจ้าหนี้';
$lang['total_sales']                        = 'ยอดขายรวม';
$lang['tax1']                               = 'ภาษี 1';
$lang['total_x_tax']                        = 'รวม';
$lang['cancel']                             = 'ยกเลิก';
$lang['payment']                            = 'การชำระเงิน';
$lang['pos']                                = 'ณ จุดขาย';
$lang['p_o_s']                              = 'ณ จุดขาย';
$lang['today_sale']                         = 'ยอดขายวันนี้';
$lang['daily_sales']                        = 'ยอดขายรายวัน';
$lang['monthly_sales']                      = 'ยอดขายรายเดือน';
$lang['pos_settings']                       = 'การตั้งค่า ณ จุดขาย';
$lang['loading']                            = 'กำลังโหลด...';
$lang['display_time']                       = 'แสดงเวลา';
$lang['pos_setting_updated']                = 'ปรับปรุงการตั้งค่า ณจุดขายสำเร็จแล้ว';
$lang['pos_setting_updated_payment_failed'] = 'การตั้งค่า ณ จุดขายเรียบร้อยแล้ว แต่การตั้งค่าเกตท์เวย์ล้มเหลว โปรดลองใหม่ภายหลัง';
$lang['tax_request_failed']                 = 'พบปัญกาการขอภาษี!';
$lang['pos_error']                          = 'เกิดข้อผิดพลาด ในการประมวลผล กรุณาเพิ่ม ผลิตภัณฑ์ อีกครั้ง ขอบคุณ!';
$lang['qty_limit']                          = 'สินค้าคุณถึงขีด จำกัด ปริมาณ 999.';
$lang['max_pro_reached']                    = 'กรุณาเพิ่ม การชำระเงินนี้และ เปิด เรียกเก็บเงินใหม่ สำหรับรายการ ต่อไป ทั้งหมด ขอบคุณ!';
$lang['code_error']                         = 'การร้องขอ ล้มเหลว โปรดตรวจสอบ รหัสของคุณ และลองอีกครั้ง!';
$lang['x_total']                            = 'กรุณาเพิ่ม สินค้า ก่อนการชำระเงิน ขอบคุณ!';
$lang['paid_l_t_payable']                   = 'จำนวนเงินที่จ่าย น้อยกว่า จำนวนเงินที่จ่าย กรุณากด ตกลงเพื่อ ส่ง ขาย.';
$lang['suspended_sales']                    = 'การขายถูกระงับ';
$lang['sale_suspended']                     = 'การขายถูกระงับสำเร็จแล้ว.';
$lang['sale_suspend_failed']                = 'การขายถูกระงับ กรุณาลองใหม่อีกครั้ง!';
$lang['add_to_pos']                         = 'เพิ่มไปยังหน้าจอการขาย ณจุดขายนี้';
$lang['delete_suspended_sale']              = 'ลบการขายนี้';
$lang['save']                               = 'บันทึก';
$lang['discount_request_failed']            = 'คำร้องขอล้มเหลว เกิดปัญหาเกี่ยวกับส่วนลด!';
$lang['saving']                             = 'กำลังบันทึก...';
$lang['paid_by']                            = 'ชำระเงินโดย';
$lang['paid']                               = 'ชำระเงิน';
$lang['ajax_error']                         = 'คำร้องขอล้มเหลว, โปรดลองอีกครั้ง!';
$lang['close']                              = 'ปิด';
$lang['finalize_sale']                      = 'จบการขาย';
$lang['cash_sale']                          = 'ชำระด้วยเงินสด';
$lang['cc_sale']                            = 'ชำระด้วยเครดิตการ์ด';
$lang['ch_sale']                            = 'ชำระด้วยเช็ค';
$lang['sure_to_suspend_sale']               = 'คุณต้องการระงับการขายใช่หรือไม่?';
$lang['leave_alert']                        = 'คุณ จะสูญเสียข้อมูลการขาย กดตกลงเพื่อออกและ ยกเลิก ที่จะอยู่ ในหน้านี้.';
$lang['sure_to_cancel_sale']                = 'คุณแน่ใจหรือว่า ต้องการที่จะ ยกเลิก การขาย?';
$lang['sure_to_submit_sale']                = 'คุณแน่ใจหรือว่า ต้องการที่จะขาย?';
$lang['alert_x_sale']                       = 'คุณแน่ใจหรือว่า ต้องการลบ ระงับ การขาย นี้?';
$lang['suspended_sale_deleted']             = 'การขายถูกระงับ และลบเรียบร้อยแล้ว';
$lang['item_count_error']                   = 'เกิดข้อผิดพลาด ขณะที่การนับรายการทั้งหมด กรุณาลองอีกครั้ง!';
$lang['x_suspend']                          = 'กรุณาเพิ่ม สินค้า ก่อนที่จะ ระงับ การขาย ขอบคุณ!';
$lang['x_cancel']                           = 'ไม่พบสินค้า ขอบคุณ!';
$lang['yes']                                = 'ใช่';
$lang['no1']                                = 'ไม่';
$lang['suspend']                            = 'ระงับ';
$lang['order_list']                         = 'รายชื่อ การสั่งซื้อ';
$lang['print']                              = 'พิมพ์';
$lang['cf_display_on_bill']                 = 'ที่กำหนดเอง ที่จะแสดง ในใบเสร็จรับเงิน ณ จุดขาย';
$lang['cf_title1']                          = 'การกำหนดเอง1';
$lang['cf_value1']                          = 'มูบค่ากำหนดเอง1';
$lang['cf_title2']                          = 'การกำหนดเอง2';
$lang['cf_value2']                          = 'มูลค่ากำหนดเอง2';
$lang['cash']                               = 'เงินสด';
$lang['cc']                                 = 'บัตรเครดิต';
$lang['cheque']                             = 'เช็ค';
$lang['cc_no']                              = 'เลขที่บัตรเครดิต';
$lang['cc_holder']                          = 'ชื่อเจ้าของ';
$lang['cheque_no']                          = 'ไม่มีเลขที่เช็ค';
$lang['email_sent']                         = 'อีเมลล์ส่งสำเร็จแล้ว!';
$lang['email_failed']                       = 'ส่งอีเมลล้มเหลว!';
$lang['back_to_pos']                        = 'กลับไป ณจุดขาย';
$lang['shortcuts']                          = 'ทางลัด';
$lang['shortcut_key']                       = 'คีย์ลัด';
$lang['shortcut_keys']                      = 'คีย์ลัด';
$lang['keyboard']                           = 'แป้นพิมพ์';
$lang['onscreen_keyboard']                  = 'บนหน้าจอแป้นพิมพ์';
$lang['focus_add_item']                     = 'มุ่งเน้น เพิ่ม การป้อนข้อมูล รายการ';
$lang['add_manual_product']                 = 'เพิ่มรายการ คู่มือการ ขาย';
$lang['customer_selection']                 = 'การป้อนข้อมูล ของลูกค้า';
$lang['toggle_category_slider']             = 'สลับ เลื่อน หมวดหมู่';
$lang['toggle_subcategory_slider']          = 'สลับ เลื่อน หมวดหมู่ทั้งหมด';
$lang['cancel_sale']                        = 'ยกเลิกการขาย';
$lang['suspend_sale']                       = 'ระงับ การขาย';
$lang['print_items_list']                   = 'พิมพ์ รายการผลิตภัณฑ์';
$lang['finalize_sale']                      = 'จบ การขาย';
$lang['open_hold_bills']                    = 'การเปิดขายถูกระงับ';
$lang['search_product_by_name_code']        = 'สแกน สินค้า / ค้นหาตามชื่อ / รหัส';
$lang['receipt_printer']                    = 'ครื่องพิมพ์ใบเสร็จ';
$lang['cash_drawer_codes']                  = 'รหัสเปิดลิ้นชักเก็บเงิน';
$lang['pos_list_printers']                  = 'พิมพ์รายการณจุดขาย (Separated by |)';
$lang['custom_fileds']                      = 'กำหนดใบเสร็จรับเงินเอง';
$lang['shortcut_heading']                   = 'Ctrl, Shift and Alt with และตัวอักษรอื่นๆ (Ctrl+Shift+A). ฟังก์ชันคีย์ ( F1 - F12 ) ได้รับการสนับสนุน มากเกินไป.';
$lang['product_button_color']               = 'สีของสินค้า';
$lang['edit_order_tax']                     = 'แก้ไข คำสั่งซื้อภาษี';
$lang['select_order_tax']                   = 'เลือกภาษีการสั่งซื้อ';
$lang['paying_by']                          = 'ชำระเงินด้วย';
$lang['paypal_pro']                         = 'Paypal Pro';
$lang['stripe']                             = 'Stripe';
$lang['swipe']                              = 'Swipe';
$lang['card_type']                          = 'ประเภทของบัตร';
$lang['Visa']                               = 'วีซ่า';
$lang['MasterCard']                         = 'มาสเตอร์การ์ด';
$lang['Amex']                               = 'เอเม็กซ์';
$lang['Discover']                           = 'ค้นพบ';
$lang['month']                              = 'เดือน';
$lang['year']                               = 'ปี';
$lang['cvv2']                               = 'รหัสรักษาความปลอดภัย';
$lang['total_paying']                       = 'รวมยอดจ่ายทั้งหมด';
$lang['balance']                            = 'สมดุล';
$lang['serial_no']                          = 'ซีเรียล นัมเบอร์';
$lang['product_discount']                   = 'ส่วนลดสินค้า';
$lang['max_reached']                        = 'วงเงินที่ ได้รับอนุญาตสูงสุด.';
$lang['add_more_payments']                  = 'เพิ่ม การชำระเงิน อื่น ๆ';
$lang['sell_gift_card']                     = 'ขายบัตรของขวัญ';
$lang['gift_card']                          = 'บัตรของขวัญ';
$lang['product_option']                     = 'ตัวเลือกสินค้า';
$lang['card_no']                            = 'เลขที่บัตร';
$lang['value']                              = 'มูลค่า';
$lang['paypal']                             = 'Paypal';
$lang['sale_added']                         = 'เพิ่มรายงาน ณจุดขาย เรียบร้อยแล้ว';
$lang['invoice']                            = 'ใบแจ้งหนี้';
$lang['vat']                                = 'ภาษีมูลค่าเพิ่ม';
$lang['web_print']                          = 'พิมพ์เว็บ';
$lang['ajax_request_failed']                = 'คำขอล้มเหลว โปรดลองอีกครั้ง';
$lang['pos_config']                         = 'การกำหนดค่า ณจุดขาย';
$lang['default']                            = 'ค่าเริ่มต้น';
$lang['primary']                            = 'ระดับประถมศึกษา';
$lang['info']                               = 'ข้อมูล';
$lang['warning']                            = 'คำเตือน';
$lang['danger']                             = 'อันตราย';
$lang['enable_java_applet']                 = 'เปิดใช้งาน Java Applet';
$lang['update_settings']                    = 'การตั้งค่า การปรับปรุง';
$lang['open_register']                      = 'รับสมัครสมาชิก';
$lang['close_register']                     = 'ปิดการรับสมัครสมาชิก';
$lang['cash_in_hand']                       = 'เงินสดในมือ';
$lang['total_cash']                         = 'เงินทั้งหมด';
$lang['total_cheques']                      = 'เช็คทั้งหมด';
$lang['total_cc_slips']                     = 'สลิปบัตรเครดิตทั้งหมด';
$lang['CC']                                 = 'บัตรเครดิต';
$lang['register_closed']                    = 'การลงทะเบียนปิด เรียบร้อยแล้ว';
$lang['register_not_open']                  = 'ไม่ได้เปิดการสมัครสมาชิก,กรุณากรอกจำนวนเงิน และสมัครสมาชิก';
$lang['welcome_to_pos']                     = 'ยินดีต้อนรับสู่จุดขาย';
$lang['tooltips']                           = 'เคล็ดลับปุ่มเครื่องมือ';
$lang['previous']                           = 'ก่อนหน้า';
$lang['next']                               = 'ถัดไป';
$lang['payment_gateways']                   = 'การชำระเงิน';
$lang['stripe_secret_key']                  = 'รหัสที่มีความสำคัญ';
$lang['stripe_publishable_key']             = 'รหัสสำคัญ(เผยแผ่)';
$lang['APIUsername']                        = 'Paypal Pro API ชื่อผู้ใช้';
$lang['APIPassword']                        = 'Paypal Pro API รหัสผ่าน';
$lang['APISignature']                       = 'Paypal Pro API ลายเซ็นต์';
$lang['view_bill']                          = 'ดูบิล';
$lang['view_bill_screen']                   = 'ดูบิลจากหน้าจอ';
$lang['opened_bills']                       = 'เปิดบิล';
$lang['leave_opened']                       = 'ปิดบิล';
$lang['delete_bill']                        = 'ลบบิล';
$lang['delete_all']                         = 'ลบทั้งหมด';
$lang['transfer_opened_bills']              = 'เปิดการโอนเงิน';
$lang['paypal_empty_error']                 = 'Paypal การทำธุรกรรมล้มเหลว (ข้อผิดพลาด array กลับไป)';
$lang['payment_failed']                     = '<strong>ไม่สามารถชำระเงิน!</strong>';
$lang['pending_amount']                     = 'อยู่ระหว่างดำเนินการ';
$lang['available_amount']                   = 'จำนวน ที่มีจำหน่าย';
$lang['stripe_balance']                     = 'คงเหลือ';
$lang['paypal_balance']                     = 'Paypal สมดุล';
$lang['view_receipt']                       = 'ดูใบเสร็จรับเงิน';
$lang['rounding']                           = 'ปัดเศษ';
$lang['ppp']                                = 'Paypal Pro';
$lang['delete_sale']                        = 'ลบการขาย';
$lang['return_sale']                        = 'กลับไปการขาย';
$lang['edit_sale']                          = 'แก้ไขการขาย';
$lang['email_sale']                         = 'อีเมลล์การขาย';
$lang['add_delivery']                       = 'เพิ่ม การจัดส่งสินค้า';
$lang['add_payment']                        = 'เพิ่มช่ิงทางการชำระเงิน';
$lang['view_payments']                      = 'ดูการชำระเงิน';
$lang['no_meil_provided']                   = 'ไม่มีที่อยู่อีเมลล์';
$lang['payment_added']                      = 'เพิ่มช่องทางการชำระเงินสำเร็จแล้ว';
$lang['suspend_sale']                       = 'ระงับการขาย';
$lang['reference_note']                     = 'หมายเหตุ อ้างอิง';
$lang['type_reference_note']                = 'กรุณาพิมพ์ บันทึก การอ้างอิง และส่งการขายนี้ที่จะระงับ';
$lang['change']                             = 'เปลี่ยน';
$lang['quick_cash']                         = 'เงินด่วน';
$lang['sales_person']                       = 'ขายสมทบ';
$lang['no_opeded_bill']                     = 'ไม่พบการเรียกเก็บเงิน';
$lang['please_update_settings']             = 'โปรดอัพเดทและตั้งค่าก่อนใช้งานโปรแกรม ณ จุดขาย';
$lang['order']                              = 'ใบสั่ง';
$lang['bill']                               = 'บิล';
$lang['due']                                = 'เนื่องจาก';
$lang['paid_amount']                        = 'จำนวนเงินที่จ่าย';
$lang['due_amount']                         = 'เนื่องจากจำนวนเงิน';
$lang['edit_order_discount']                = 'แก้ไขส่วนลดการสั่งซื้อ';
$lang['sale_note']                          = 'หมายเหตุการขาย';
$lang['staff_note']                         = 'หมายเหตุพนักงาน';
$lang['list_open_registers']                = 'รายการลงทะเบียน';
$lang['open_registers']                     = 'เปิดลงทะเบียน';
$lang['opened_at']                          = 'เปิด';
$lang['all_registers_are_closed']           = 'การลงทะเบียนทั้งหมดจะถูกปิด';
$lang['review_opened_registers']            = 'กรุณาตรวจสอบการลงทะเบียนทั้งหมดด้านล่าง';
$lang['suspended_sale_loaded']              = 'โหลดการขายที่ถูกระงีบเรียบร้อยแล้ว';
$lang['incorrect_gift_card']                = 'หมายเลขบัตร ของขวัญ ไม่ถูกต้อง หรือ หมดอายุแล้ว.';
$lang['gift_card_not_for_customer']         = 'หมายเลขบัตร ของขวัญ ไม่ใช่สำหรับลูกค้ารายนี้.';
$lang['delete_sales']                       = 'ลบการขาย';
$lang['click_to_add']                       = 'กรุณาคลิกที่ ปุ่มด้านล่างเพื่อ เปิด';
$lang['tax_summary']                        = 'ข้อมูลภาษี โดยย่อ';
$lang['qty']                                = 'จำนวน';
$lang['tax_excl']                           = 'ไม่รวม ภาษี';
$lang['tax_amt']                            = 'จำนวน ภาษี';
$lang['total_tax_amount']                   = 'รวมจํานวนเงินภาษี ';
$lang['tax_invoice']                        = 'ภาษี ใบแจ้งหนี้';
$lang['char_per_line']                      = 'ตัวอักษร ต่อบรรทัด';
$lang['delete_code']                        = 'รหัส PIN';
$lang['quantity_out_of_stock_for_%s']       = 'ปริมาณจำนวนสินค้าที่ออกจากสต็อก %s';
$lang['refunds']                            = 'การคืนเงิน';
$lang['register_details']                   = 'รายละเอียดการลงทะเบียน';
$lang['payment_note']                       = 'หมายเหตุ การชำระเงิน';
$lang['to_nearest_005']                     = 'ที่ใกล้ที่สุด 0.05';
$lang['to_nearest_050']                     = 'ที่ใกล้ที่สุด  0.50';
$lang['to_nearest_number']                  = 'จำนวน ที่ใกล้ที่สุด ( จำนวนเต็ม)';
$lang['to_next_number']                     = 'ไปยังหมายเลข ถัดไป ( จำนวนเต็ม)';
$lang['update_heading']                     = 'หน้านี้ จะช่วยให้ คุณตรวจสอบ และ ติดตั้งโปรแกรมปรับปรุง ได้อย่างง่ายดาย ด้วยการคลิก เพียงครั้งเดียว. <strong>หาก มีมากกว่า 1 อัพเดท โปรดอัปเดต โดยเริ่มต้นจาก ด้านบน (รุ่นต่ำสุด)</strong>.';
$lang['update_successful']                  = 'รายการ ปรับปรุงเรียบร้อยแล้ว';
$lang['using_latest_update']                = 'คุณกำลังใช้ รุ่นล่าสุด.';
$lang['return_policy']                      = 'รับคืนสินค้าภายใน 24 ชั่วโมง และต้องนำใบเสร็จมาด้วยทุกครั้ง';
$lang['membershipcard_request']             = 'ลงทะเบียนรับบัตรสมาชิกฟรีวันนี้ สำหรับส่วนลดในครั้งต่อไป.';
$lang['welcome_customer_meessage']          = 'สวัสดีฉันชื่อ ';
$lang['service_customer_meessage']          = ' ฉันจะเป็นที่บริการของคุณในวันนี้ขอบคุณ.';
$lang['payment_id']                         = 'รหัสการชำระเงิน';
$lang['customer_thanks']                    = 'รหัสการชำระเงิน';
$lang['customer_name']                      = 'ชื่อลูกค้า:';
