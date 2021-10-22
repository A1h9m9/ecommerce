<?php
function lang($phr){
    static $lang =array(
        'HOME_ADMIN' => 'مدير',
        'CATEGORIES' => 'الاعدادات',
        'ITEMS'  => 'عناصر',
        'LOGOUT' =>'تسجيل خروج',
        'MEMBERS' =>'الاعضاء',
        'EDIT PROFILE'=>'ظبط الملف',
        'USERNAME' => 'الاسم',
        'PASSWORD' => 'كلمه المرور',
        'EMAIL' =>'البريد الاكتروني',
        'FULLNAME' =>'الاسم كامل',
        'total MEMBERS'=>'مجموع الاعضاء',
        'pending MEMBERS'=>'الاعضاء المنتظرين',
        'total item'=> 'مجموع العناصر',
        'total comments'=>'مجموع التعليقات',
        'latest Item'=>'احدث العناصر',
        'latest registerd users'=>'احدث الاعضاء',
        'name'=>'الاسم',
        'description'=>'وصف',
        'ordering'=>'الطلب',
        'visibilty'=>'الرؤيه',
        'allow-comment'=>'التعليقات',
        'allow-ads'=>'الاعلانات',
        'price'=>'السعر',
        'add_date'=>'التاريخ',
        'country_made'=>'بلد الصنع',
        'status'=>'حاله المنتج',
        'rating'=>'تقيم',
        'comment'=>'تعليق'
        
    );
    return $lang[$phr];
}