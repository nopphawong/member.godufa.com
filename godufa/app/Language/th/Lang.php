<?php

/**
 * Example: ci4 translate language.
 * 
 * 'pages' => [
 *      'key' => 'translate'
 * ]
 */

return [
    'affiliate' => [
        'affiliate' => 'แนะนำเพื่อน',
        'download_your_qrcode' => 'ดาวน์โหลด QR Code ชวนเพื่อน',
        'affiliate_code' => 'รหัสชวนเพื่อน',
        'income' => 'รายได้',
        'get' => 'รับรายได้',
        'income_amount' => 'ยอดที่ใช้ได้จากการชวนเพื่อน',
        'create_date' => 'วันที่สมัคร',
        'affiliate_username' => 'เพื่อนแนะนำ (Username)',
        'data_not_found' => 'ไม่มีข้อมูล',
        'more' => 'เพิ่มเติม',
        'confirm' => 'ยืนยัน',
    ],
    'bank_list' => [
        'kbank' => 'กสิกรไทย', // Kasikornbank
        'bbl' => 'กรุงเทพ', // Bangkok Bank
        'bay' => 'กรุงศรีอยุธยา', // Bank of Ayudhya
        'scb' => 'ไทยพาณิชย์', // The Siam Commercial Bank
        'ktb' => 'กรุงไทย', // Krungthai Bank
        'scib' => 'นครหลวงไทย', // Siam City Bank
        'uobt' => 'ยูโอบี', // UOB Bank
        'tisco' => 'ทิสโก้', //  TISCO Bank
        'kkp' => 'เกียรตินาคินภัทร', // Kianakin Phatra Bank
        'tbank' => 'ธนชาต', // Thanachart Bank
        'ghb' => 'อาคารสงเคราะห์', // Government Housing Bank
        'gsb' => 'ออมสิน', // Government Savings Bank
        'baac' => 'เพื่อการเกษตรและสหกรณ์การเกษตร', // Bank for Agriculture and Agricultural Cooperatives
        'isbt' => 'อิสลามแห่งประเทศไทย', // Islamic Bank of Thailand
        'lhfg' => 'แลนด์แอนด์เฮ้าส์', // Land and Houses
        'cimb' => 'ซีไอเอ็มบีไทย', // CIMB Thai Bank
        'ttb' => 'ทหารไทยธนชาต', // TMBThanachart Bank
    ],
    'casino' => [
        'casino' => 'คาสิโน',
    ],
    'change_password' => [
        'change_password' => 'เปลี่ยนรหัสผ่านใหม่',
        'current_password' => 'รหัสผ่านเดิม',
        'new_password' => 'รหัสผ่านใหม่',
        'confirm_password' => 'ยืนยัน รหัสผ่านใหม่',
        'current_password_placeholder' => 'กรอกรหัสผ่านเดิม',
        'new_password_placeholder' => 'กรอกรหัสผ่านใหม่',
        'confirm_password_placeholder' => 'กรอกยืนยันรหัสผ่านใหม่',
        're_login' => 'เข้าสูระบบใหม่',
        'password_is_required' => 'กรุณาระบุ รหัสผ่านเดิม',
        'new_password_is_required' => 'กรุณาระบุ รหัสผ่านใหม่',
        'password_is_min_length' => 'รหัสผ่านจะต้องมากกว่า 6 ตัวอักษร',
        'password_is_alpha_numeric' => 'รหัสผ่านต้องเป็นตัวอักษรและตัวเลขเท่านั้น',
        'confrim_password_is_matches' => 'กรุณาระบุรหัสผ่านให้ตรงกัน',
        'change_pasword_error' => 'เกิดข้อผิดพลาดบางอย่าง',
    ],
    'coupon' => [
        'coupon' => 'Gift Voucher',
        'code' => 'รหัสคูปอง',
        'confirm' => 'ยืนยัน',
    ],
    'deposit' => [
        'deposit' => 'ฝากเงิน',
        'bank' => 'ธนาคาร',
        'deposit_amount' => 'จำนวนเงินที่ต้องการฝาก',
        'bank_account_number' => 'เลขบัญชี: {0}',
        'bank_name' => 'ธนาคาร: {0}',
        'name' => 'ชื่อ: {0}',
        'copy' => 'คัดลอกเลขบัญชี',
        'username' => 'ชื่อบัญชี: {0}',
        'get_bonus' => 'รับโบนัส',
        'no_bonus' => 'ไม่รับโบนัส',
        'account_registered' => 'บัญชีที่ลูกค้าลงทะเบียน',
        'note' => 'หมายเหตุ',
        'note_detail_1' => 'โอนเงินจากบัญชีที่ลงทะเบียนเท่านั้น',
        'note_detail_2' => 'หลังจากโอนเงิน รอไม่เกิน 1 นาทีในการทำรายการ',
        'note_detail_3' => 'หากพบปัญหาแจ้งโอนหรือติดต่อเจ้าหน้าที่',
        'contact_us' => 'ติดต่อเจ้าหน้าที่',
        'history_last_5_deposits' => 'ประวัติการฝาก 5 ครั้งล่าสุด',
        'list' => 'รายการ',
        'date' => 'วันเวลา',
        'amount' => 'จำนวนเงิน',
        'deposit_table' => 'ฝาก',
        'finished' => 'เสร็จสิ้น',
        'pending' => 'กำลังดำเนินการ',
        'confirm' => 'ยืนยันการฝาก',
        'amount_is_required' => 'กรุณาระบุจำนวนเงินฝาก',
        'amount_is_min' => 'จำนวนเงินฝากจะต้องมากว่า 0',
        'amount_is_digits' => 'จำนวนเงินฝากจะต้องเป็นตัวเลขและจำนวนเต็มเท่านั้น',
    ],
    'dialog' => [
        'confirm_btn' => 'ตกลง',
        'cancel_btn' => 'ยกเลิก',
        'network_error' => 'การเชื่อมต่ออินเตอร์เน็ตมีปัญหา',
        'user_not_found' => 'ไม่พบข้อมูลผู้ใช้',
        'request_otp' => 'ขอ OTP ใหม่',
        'retry' => 'ลองอีกครั้ง',
        'copied' => 'Copied!',
    ],
    'forgot' => [
        'forgot' => 'ลืมรหัสผ่าน',
        'telephone' => 'เบอร์โทรศัพท์',
        'set_password' => 'ตั้งรหัสผ่านใหม่',
        'succeed' => 'สำเร็จ',
        'mobile_number' => 'เบอร์มือถือ',
        'back' => 'ย้อนกลับ',
        'ten_digit_phone_number' => 'หมายเลขโทรศัพท์มือถือ 10 หลัก',
        'verify' => 'ตรวจสอบ',
        'new_password' => 'รหัสผ่านใหม่',
        'otp_code' => 'หมายเลข OTP',
        'otp_note' => '*หากไม่ได้รับ SMS OTP ภายใน 1 นาที กรุณาติดเจ้าหน้าที่',
        'confirm' => 'ยืนยัน',
        'otp_ref' => 'รหัสอ้างอิง: ',
        'username_is_required' => 'กรุณาระบุ หมายเลขโทรศัพท์มือถือ 10 หลัก',
        'username_is_numeric' => 'หมายเลขโทรศัพท์มือถือจะต้องเป็นตัวเลขเท่านั้น',
        'password_is_required' => 'กรุณาระบุ รหัสผ่าน',
        'password_is_min_length' => 'รหัสผ่านจะต้องมากกว่า 6 ตัวอักษร',
        'password_is_alpha_numeric' => 'รหัสผ่านต้องเป็นตัวอักษรและตัวเลขเท่านั้น',
        'otp_is_required' => 'กรุณาระบุ หมายเลข OTP',
        're_pasword_error' => 'OPT ไม่ถูกต้อง',
        'contact_us' => 'ติดต่อเจ้าหน้าที่',
        'reset_password_is_succeed' => 'เปลี่ยนรหัสผ่านใหม่สำเร็จ',
        'go_to_login' => 'กำลังพาท่านเข้าสู่ระบบ กรุณารอสักครู่',
    ],
    'history' => [
        'history' => 'ประวัติธุรกรรม',
        'show' => 'แสดงข้อมูล',
        'ago' => 'ย้อนหลัง',
        'deposit' => 'เติมเงิน',
        'withdraw' => 'ถอนเงิน',
        'pending' => 'รอดำเนินการ',
        'successful' => 'รายการสำเร็จ',
        'cancel' => 'ยกเลิก',
        'list' => 'รายการ',
        'date' => 'วันเวลา',
        'amount' => 'จำนวนเงิน',
        'finished' => 'เสร็จสิ้น',
        'no_history' => 'ยังไม่มีประวัติ',
        'all' => 'ฝาก/ถอนเงิน',
        'deposit_list' => 'รายการเติมเงิน',
        'withdraw_list' => 'รายการถอนเงิน',
        'add_bonus' => 'เพิ่มโบนัส',
        'reduce_bonus' => 'ลดโบนัส',
        'bank_name' => 'ธนาคาร{0}',
    ],
    'home' => [
        'home' => 'หน้าหลัก',
        'wallet' => 'กระเป๋า',
        'profile' => 'โปรไฟล์',
        'contact_us' => 'ติดต่อเรา',
        'username' => 'ชื่อ: {0}',
        'phone_number' => 'เบอร์: {0}',
        'bank_account_number' => 'เลขบัญชี: {0}',
        'bank_name' => 'ธนาคาร: {0}',
        'credit_balance' => 'ยอดเครดิตของคุณ',
        'get_cashback' => 'รับแคชแบ็ค',
        'turnover' => 'ยอดเทิร์นโอเวอร์',
        'deposit' => 'ฝากเงิน',
        'withdraw' => 'ถอนเงิน',
        'affiliate' => 'แนะนำเพื่อน',
        'promotion' => 'โปรโมชั่น',
        'change_pass' => 'เปลี่ยนรหัส',
        'play_game' => 'เข้าเล่นเกม',
        'history' => 'ประวัติ',
        'reward' => 'แลกรางวัล',
        'coupon' => 'คูปอง',
        'lucky_wheel' => 'กงล้อ',
        'logout' => 'ออกจากระบบ',
        'confirm_logout' => 'ต้องการออกจากระบบหรือไม่?',
        'refresh_btn' => 'เช็คยอดล่าสุด',
        'commission' => 'คอมมิชชั่น',
        'back_to_home' => 'กลับหน้าหลัก',
        'bact_to_history' => 'กลับหน้าประวัติ',
    ],
    'lucky_wheel' => [
        'lucky_wheel' => 'กงล้อนำโชค'
    ],
    'play_game' => [
        'play_game' => 'เข้าสู่หน้าเกมส์',
        'username' => 'ชื่อผู้ใช้',
        'password' => 'รหัสผ่าน',
        'confirm' => 'ยินยัน',
    ],
    'profile' => [
        'profile' => 'บัญชีของฉัน',
        'bank_account_number' => 'เลขบัญชี: {0}',
        'bank_name' => 'ธนาคาร:',
        'name' => 'ชื่อ:',
        'username' => 'ยูสเซอร์:',
        'phone_number' => 'เบอร์โทร',
        'password' => 'รหัสผ่าน:',
        'web_user' => 'เว็บยูสเซอร์:',
        'web_password' => 'รหัสผ่าน:',
        'line_id' => 'ไอดีไลน์',
        'register_on' => 'สมัครสมาชิกเมื่อ',
        'last_login' => 'เข้าสู่ระบบล่าสุดเมื่อ',
        'promotion' => 'สถานะโปรโมชั่น:',
        'change_password' => 'เปลี่ยนรหัสผ่าน',
        'recommendation' => 'ยอดแนะนำเพื่อน:',
        'commission' => 'ยอดคอมมิชชั่น:',
        'get_bonus' => 'รับโบนัส',
        'no_bonus' => 'ไม่รับโบนัส',
        'affiliate' => 'แนะนำเพื่อน',
        'contact_us' => 'ติดต่อเจ้าหน้าที่',
    ],
    'promotion' => [
        'promotion' => 'โปรโมชั่น',
        'get_before_deposit' => 'รับก่อนฝากเงิน',
        'deposit_and_get' => 'ฝาก {0, number} รับ {1, number}',
        'detail' => 'รายละเอียด',
        'more' => 'เพิ่มเติม',
        'turnover' => 'ต้องทำยอดเทิร์น {0} เท่า',
        'maximun_withdraw' => 'ยอดถอนสูงสุด {0} บาท',
        'do_not_bet_on_both_sides' => 'ห้ามเดิมพันสองฝั่ง',
        'get_bonus' => 'รับโบนัส',
    ],
    'register' => [
        'register' => 'สมัครสมาชิก',
        'telephone' => 'เบอร์โทรศัพท์',
        'set_password' => 'ตั้งรหัสผ่าน',
        'succeed' => 'สำเร็จ',
        'back' => 'ย้อนกลับ',
        'next' => 'ถัดไป',
        'verrify' => 'ตรวจสอบ',
        'bank_account' => 'บัญชีธนาคาร',
        'bank' => 'ธนาคาร',
        'mobile_number' => 'เบอร์มือถือ',
        'ten_digit_phone_number' => 'หมายเลขโทรศัพท์มือถือ 10 หลัก',
        'select_bank' => 'เลือกธนาคาร',
        'bank_account_no' => 'หมายเลขบัญชี',
        'bank_account_no_note' => 'หมายเลขบัญชี ไม่ต้องใส่ขีด -',
        'bank_account_name' => 'ชื่อบัญชี',
        'password' => 'รหัสผ่าน',
        'confirm_password' => 'ยืนยันรหัสผ่าน',
        'submit' => 'ยืนยันส่งข้อมูล',
        'title_succeed' => 'ยินดีต้อนรับ!',
        'text_succeed' => 'คุณได้สมัครสมาชิกสำเร็จแล้ว',
        'username_is_required' => 'กรุณาระบุ หมายเลขโทรศัพท์มือถือ 10 หลัก',
        'username_is_numeric' => 'หมายเลขโทรศัพท์มือถือจะต้องเป็นตัวเลขเท่านั้น',
        'bankno_is_required' => 'กรุณาระบุ หมายเลขบัญชี',
        'bankno_is_numeric' => 'หมายเลขบัญชีจะต้องเป็นตัวเลขเท่านั้น',
        'password_is_required' => 'กรุณาระบุ รหัสผ่าน',
        'password_is_min_length' => 'รหัสผ่านจะต้องมากกว่า 6 ตัวอักษร',
        'password_is_alpha_numeric' => 'รหัสผ่านต้องเป็นตัวอักษรและตัวเลขเท่านั้น',
        'confrim_password_is_required' => 'กรุณาระบุ ยืนยันรหัสผ่าน',
        'confrim_password_is_matches' => 'กรุณาระบุรหัสผ่านให้ตรงกัน',
        'bank_is_select' => 'กรุณาเลือกธนาคาร',
        'verify_bank_account_number' => 'กรุณาตรวจสอบหมายเลขบัญชีธนาคาร',
        'verify_done' => 'สำเร็จ',
        'confirm' => 'ยืนยัน',
        'register_is_succeed' => 'สมัครสมาชิกสำเร็จ',
        'go_to_login' => 'กำลังพาท่านเข้าสู่ระบบ กรุณารอสักครู่',
    ],
    'reward' => [
        'reward' => 'ของรางวัล',
        'point' => '{0} แต้ม',
        'history_reward' => 'ประวัติการรับของรางวัล',
        'credit_to_chaged' => 'เครดิต {0} บาท',
        'redeem_points' => 'แลก {0} แต้ม',
        'get_reward' => 'รับรางวัล',
    ],
    'login' => [
        'login' => 'เข้าสู่ระบบ',
        'for_member_login' => 'สำหรับสมาชิกเข้าสู่ระบบด้านล่างนี้',
        'username' => 'ชื่อผู้ใช้ / เบอร์โทรศัพท์',
        'password' => 'รหัสผ่าน',
        'username_is_required' => 'กรุณาระบุ ยูสเซอร์เนม',
        'password_is_required' => 'กรุณาระบุ รหัสผ่าน',
    ],
    'slot' => [
        'slot' => 'สล๊อต',
    ],
    'sport' => [
        'sport' => 'กีฬา',
    ],
    'validation' => [
        'confirm_btn' => 'ตกลง',
    ],
    'withdraw' => [
        'withdraw' => 'ถอนเงิน',
        'withdraw_to' => 'ถอนเงินเข้าบัญชีธนาคาร',
        'withdraw_amount' => 'จำนวนเงินที่ต้องการถอน',
        'withdrawable_amount' => 'จำนวนเงินที่ถอนได้',
        'minimum_withdrawal' => 'ยอดถอนขั้นต่ำ',
        'bank_account_number' => 'เลขที่บัญชี: {0}',
        'bank_name' => 'ธนาคาร{0}',
        'username' => 'ชื่อ: {0}',
        'confirm' => 'ยืนยันการถอน',
        'history_last_5_withdraws' => 'ประวัติการถอน 5 ครั้งล่าสุด',
        'list' => 'รายการ',
        'date' => 'วันเวลา',
        'amount' => 'จำนวนเงิน',
        'withdraw_table' => 'ถอน',
        'finished' => 'เสร็จสิ้น',
        'pending' => 'กำลังดำเนินการ',
        'amount_is_required' => 'กรุณาระบุ จำนวนเงินถอน',
        'amount_is_min' => 'จำนวนเงินถอนจะต้องมากว่า 0',
        'amount_is_digits' => 'จำนวนเงินถอนจะต้องเป็นตัวเลขและจำนวนเต็มเท่านั้น',
        'amount_is_less_than_credit' => 'เครดิตของท่านไม่เพียงพอ',
    ],
    'error' => [
        'back_btn' => 'กลับ',
        'contact_btn' => 'ติดต่อเรา',
        'note' => 'ขออภัย ไม่พบหน้านี้',
        'something_went_wrong' => 'เกิดข้อผิดพลาดบางอย่าง!, {0}',
    ],
];
