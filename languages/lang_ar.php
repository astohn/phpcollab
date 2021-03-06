<?php
#Application name: PhpCollab
#Status page: 2
#Path by root: ../languages/lang_ar.php

//translator(s): Emad Habahabeh <shobaki@hotmail.com>
$byteUnits = array('بايت', 'ك', 'م.ب', 'غ.ب');

$dayNameArray = array(1 =>"الأثنين", 2 =>"الثلاثاء", 3 =>"الأربعاء", 4 =>"الخميس", 5 =>"الجمعة", 6 =>"السبت", 7 =>"الأحد");

$monthNameArray = array(1=> "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو", "يوليو", "اغسطس", "سبمتمبر", "اكتوبر", "نوفمبر", "ديسمبر");

$status = array(0 => "منجز للعميل", 1 => "منجز", 2 => "لم يبدأ", 3 => "مفتوح", 4 => "معلق");

$profil = array(0 => "مشرف", 1 => "مدير المشروع", 2 => "مستخدم", 3 => "مستخدم العميل", 4 => "غير متاح", 5 => "مدير المشروع مشرف");

$priority = array(0 => "بلا", 1 => "منخفض جدا", 2 => "منخفض", 3 => "متوسط", 4 => "مرتفع", 5 => "مرتفع جدا");

$statusTopic = array(0 => "مغلق", 1 => "مفتوح");
$statusTopicBis = array(0 => "نعم", 1 => "لا");

$statusPublish = array(0 => "نعم", 1 => "لا");

$statusFile = array(0 => "معتمد", 1 => "معتمد مع تعديلات", 2 => "يحتاج اعتماد", 3 => "لا يحتاج اعتماد", 4 => "غير معتمد");

$phaseStatus = array(0 => "لم يبدأ", 1 => "مفتوح", 2 => "منجز", 3 => "معلق");

$requestStatus = array(0 => "جديد", 1 => "مفتوح", 2 => "منجز");

$strings["please_login"] = "الرجاء تسجيل الدخول";
$strings["requirements"] = "احتياجات النظام";
$strings["login"] = "الدخول";
$strings["no_items"] = "لا بنود للعرض";
$strings["logout"] = "الخروج";
$strings["preferences"] = "تفضيلات";
$strings["my_tasks"] = "مهامي";
$strings["edit_task"] = "تحرير مهمة";
$strings["copy_task"] = "نسخ مهمة";
$strings["add_task"] = "اضافة مهمة";
$strings["delete_tasks"] = "حذف مهام";
$strings["assignment_history"] = "أرشيف التكليفات";
$strings["assigned_on"] = "التكليف في";
$strings["assigned_by"] = "تكليف من";
$strings["to"] = "إلى";
$strings["comment"] = "ملاحظات";
$strings["task_assigned"] = "المكلف بالمهمة ";
$strings["task_unassigned"] = "المهمة من تكليف إلى بلا تكليف (بلا تكليف)";
$strings["edit_multiple_tasks"] = "تحرير مهام متعددة";
$strings["tasks_selected"] = "مهام حددت. اختر قيم جديدة لهذه المهام أو لا تغيير للاحتفاظ بالقيم الحالية";
$strings["assignment_comment"] = "ملاحظات التكليف";
$strings["no_change"] = "[لا تغيير]";
$strings["my_discussions"] = "نقاشاتي";
$strings["discussions"] = "نقاشات";
$strings["delete_discussions"] = "حذف نقاشات";
$strings["delete_discussions_note"] = "ملاحظة:لن يمكنك فتح النقاش بعد حذفه";
$strings["topic"] = "الموضوع";
$strings["posts"] = "الاضافات";
$strings["latest_post"] = "احدث اضافة";
$strings["my_reports"] = "تقاريري";
$strings["reports"] = "التقارير";
$strings["create_report"] = "انشاء تقرير";
$strings["report_intro"] = "اختر معايير تقرير المهام هنا ثم احفظ الاستعلام في صفحة النتائج بعد تنفيذ التقرير";
$strings["admin_intro"] = "اعدادات و تهيئة المشروع";
$strings["copy_of"] = "نسخ من ";
$strings["add"] = "اضافة";
$strings["delete"] = "حذف";
$strings["remove"] = "ازالة";
$strings["copy"] = "نسخ";
$strings["view"] = "عرض";
$strings["edit"] = "تحرير";
$strings["update"] = "تحديث";
$strings["details"] = "تفاصيل";
$strings["none"] = "بلا";
$strings["close"] = "اغلاق";
$strings["new"] = "جديد";
$strings["select_all"] = "تحديد الكل";
$strings["unassigned"] = "بلا تكليف";
$strings["administrator"] = "مشرف";
$strings["my_projects"] = "مشاريعي";
$strings["project"] = "مشروع";
$strings["active"] = "فعال";
$strings["inactive"] = "غير فعال";
$strings["project_id"] = "رمز المشروع";
$strings["edit_project"] = "تحرير المشروع";
$strings["copy_project"] = "نسخ المشروع";
$strings["add_project"] = "اضافةمشروع";
$strings["clients"] = "العملاء";
$strings["organization"] = "مؤسسة العميل";
$strings["client_projects"] = "مشاريع العميل";
$strings["client_users"] = "مستخدمي العميل";
$strings["edit_organization"] = "تحرير مؤسسة العميل";
$strings["add_organization"] = "اضافة مؤسسة عميل";
$strings["organizations"] = "مؤسسات العملاء";
$strings["info"] = "معلومات";
$strings["status"] = "الحالة";
$strings["owner"] = "المالك";
$strings["home"] = "الموقع";
$strings["projects"] = "المشاريع";
$strings["files"] = "الملفات";
$strings["search"] = "بحث";
$strings["admin"] = "مشرف";
$strings["user"] = "مستخدم";
$strings["project_manager"] = "مدير المشروع";
$strings["due"] = "تسليم";
$strings["task"] = "مهمة";
$strings["tasks"] = "مهام";
$strings["team"] = "فريق";
$strings["add_team"] = "اضافة اعضاء الفريق";
$strings["team_members"] = "اعضاء الفريق";
$strings["full_name"] = "الاسم الكامل";
$strings["title"] = "المركز";
$strings["user_name"] = "اسم المستخدم";
$strings["work_phone"] = "هاتف العمل";
$strings["priority"] = "الاولوية";
$strings["name"] = "الاسم";
$strings["id"] = "الرمز";
$strings["description"] = "الوصف";
$strings["phone"] = "هاتف";
$strings["url"] = "موقع";
$strings["address"] = "عنوان";
$strings["comments"] = "ملاحظات";
$strings["created"] = "انشيء";
$strings["assigned"] = "كلف";
$strings["modified"] = "حرر";
$strings["assigned_to"] = "المكلف";
$strings["due_date"] = "موعد التسليم";
$strings["estimated_time"] = "الوقت المقدر";
$strings["actual_time"] = "الوقت الفعلي";
$strings["delete_following"] = "حذف التالي?";
$strings["cancel"] = "الغاء";
$strings["and"] = "و";
$strings["administration"] = "مشرف";
$strings["user_management"] = "ادارة المستخدمين";
$strings["system_information"] = "معلومات النظام";
$strings["product_information"] = "معلومات المنتج";
$strings["system_properties"] = "خصائص النظام";
$strings["create"] = "انشاء";
$strings["report_save"] = "حفظ الاستعلام في صفحتك الرئيسية لتتمكن من تنفيذه مجددا";
$strings["report_name"] = "اسم التقرير";
$strings["save"] = "حفظ";
$strings["matches"] = "المطابقة";
$strings["match"] = "مطابق";
$strings["report_results"] = "Report Results";
$strings["success"] = "نجاح";
$strings["addition_succeeded"] = "الاضافة تمت";
$strings["deletion_succeeded"] = "تم الحذف";
$strings["report_created"] = "انشاء تقرير";
$strings["deleted_reports"] = "حذف تقارير";
$strings["modification_succeeded"] = "تمت التعديلات";
$strings["errors"] = "اخطاء وجدت!";
$strings["blank_user"] = "لم يعثر على المستخدم.";
$strings["blank_organization"] = "لم يعثر على مؤسسة العميل.";
$strings["blank_project"] = "لم يعثر على المشروع";
$strings["user_profile"] = "تشكيل المستخدم";
$strings["change_password"] = "تغيير كلمة السر";
$strings["change_password_user"] = "تغيير كلمة سر المستخدم.";
$strings["old_password_error"] = "كلمة السر القديمة غير صحيحة الرجاء ادخلها مجددا.";
$strings["new_password_error"] = "كلمة السر الجديدة لم تتطابق الرجاء ادخلها مجددا.";
$strings["notifications"] = "إخطارات";
$strings["change_password_intro"] = "ادخل كلمة السر القديمة ثم ادخل و اكد كلمة السر الجديدة.";
$strings["old_password"] = "كلمة السر القديمة";
$strings["password"] = "كلمة السر";
$strings["new_password"] = "كلمة السر الجديدة";
$strings["confirm_password"] = "تاكيد كلمة السر";
$strings["email"] = "الايميل";
$strings["home_phone"] = "هاتف المنزل";
$strings["mobile_phone"] = "هاتف الخلوي";
$strings["fax"] = "الفاكس";
$strings["permissions"] = "الصلاحيات";
$strings["administrator_permissions"] = "صلاحيات المشرف";
$strings["project_manager_permissions"] = "صلاحيات مدير المشروع";
$strings["user_permissions"] = "صلاحيات المستخدم";
$strings["account_created"] = "انشيء الحساب";
$strings["edit_user"] = "تحرير المستخدم";
$strings["edit_user_details"] = "تحرير تفاصيل المستخدم.";
$strings["change_user_password"] = "تغيير كلمة سر المستخدم.";
$strings["select_permissions"] = "تحديد صلاحيات المستخدم";
$strings["add_user"] = "اضافة مستخدم";
$strings["enter_user_details"] = "ادخل التفاصيل للمستخدم.";
$strings["enter_password"] = "ادخل كلمة سر المستخدم.";
$strings["success_logout"] = "لقد قمت بالخروج بنجاح يمكنك معاودة الدخول بادخال الاسم و كلمة السر.";
$strings["invalid_login"] = "الاسم و كلمة السر غير صحيحين الرجاء معاودة الادخال.";
$strings["profile"] = "التشكيل";
$strings["user_details"] = "تفاصيل حساب العميل.";
$strings["edit_user_account"] = "تحرير معلومات المستخدم.";
$strings["no_permissions"] = "لا تملك صلاحيات لتنفيذ هذا الامر.";
$strings["discussion"] = "نقاش";
$strings["retired"] = "مسحوب";
$strings["last_post"] = "آخر اضافة";
$strings["post_reply"] = "اضافة رد";
$strings["posted_by"] = "اضيف بواسطة";
$strings["when"] = "في";
$strings["post_to_discussion"] = "اضافة الى النقاش";
$strings["message"] = "رسالة";
$strings["delete_reports"] = "حذف التقارير";
$strings["delete_projects"] = "حذف المشاريع";
$strings["delete_organizations"] = "حذف مؤسسات العميل";
$strings["delete_organizations_note"] = "ملاحظة: سيتم حذف مؤسسات العميل والمشاريع و المعلوات المرتبطة";
$strings["delete_messages"] = "حذف الرسائل";
$strings["attention"] = "تنبيه";
$strings["delete_teamownermix"] = "تم الحذف و لكن مدير المشروع لا يمكن ازالته من الفريق";
$strings["delete_teamowner"] = "لا يمكنك ازالة مالك المشروع.";
$strings["enter_keywords"] = "ادخل كلمات البحث";
$strings["search_options"] = "خيارات البحث و كلمات البحث";
$strings["search_note"] = "يجب ادخال المعومات في الحقل.";
$strings["search_results"] = "نتائج البحث";
$strings["users"] = "المستخدمين";
$strings["search_for"] = "البحث عن";
$strings["results_for_keywords"] = "نتيجة البحث عن كلمات البحث";
$strings["add_discussion"] = "اضافة نقاش";
$strings["delete_users"] = "حذف حسابات المستخدمين";
$strings["reassignment_user"] = "تغيير تكليف المشروع و المهام";
$strings["there"] = "هنالك";
$strings["owned_by"] = "مملوك من المستخدمين بالاعلى.";
$strings["reassign_to"] = "قبل حذف المستخدمين غير التكليف";
$strings["no_files"] = "لا يوجد ملفات مرتبطة";
$strings["published"] = "نشر";
$strings["project_site"] = "موقع المشروع";
$strings["approval_tracking"] = "متابعة الاعتماد";
$strings["size"] = "الحجم";
$strings["add_project_site"] = "اضافة الى موقع المشروع";
$strings["remove_project_site"] = "ازالة من موقع المشروع";
$strings["more_search"] = "خيارات بحث اضافية";
$strings["results_with"] = "ايجاد نتائج مع";
$strings["search_topics"] = "مواضيع البحث";
$strings["search_properties"] = "خصائص البحث";
$strings["date_restrictions"] = "حدود التاريخ";
$strings["case_sensitive"] = "تحسس حالة الاحرف";
$strings["yes"] = "نعم";
$strings["no"] = "لا";
$strings["sort_by"] = "ترتيب بـ";
$strings["type"] = "النوع";
$strings["date"] = "التاريخ";
$strings["all_words"] = "جميع الكلمات";
$strings["any_words"] = "أي من الكلمات";
$strings["exact_match"] = "مطابقة تامة";
$strings["all_dates"] = "كافة التواريخ";
$strings["between_dates"] = "بين تاريخ";
$strings["all_content"] = "كافة المحتويات";
$strings["all_properties"] = "جميع الخصائص";
$strings["no_results_search"] = "البحث بلا نتائج";
$strings["no_results_report"] = "التقرير بلا نتائج.";
$strings["schema_date"] = "YYYY/MM/DD";
$strings["hours"] = "ساعات";
$strings["choice"] = "اختيار";
$strings["missing_file"] = "ملف مفقود !";
$strings["project_site_deleted"] = "تم حذف موقع المشروع بنجاح";
$strings["add_user_project_site"] = "تم منح صلاحيات للمستخدم على موقع المشروع.";
$strings["remove_user_project_site"] = "تم ازالة الصلاحيات";
$strings["add_project_site_success"] = "تم الاضافة الى موقع المشروع بنجاح";
$strings["remove_project_site_success"] = "تم الازالة من موقع المشروع بنجاح.";
$strings["add_file_success"] = "تم ربط بند محتوى 1.";
$strings["delete_file_success"] = "تم ازالة الرابط.";
$strings["update_comment_file"] = "تم تحديث ملاحظات الملف بنجاح.";
$strings["session_false"] = "خطأ الجلسة";
$strings["logs"] = "السجلات";
$strings["logout_time"] = "خروج تلقائي";
$strings["noti_foot1"] = "هذا الإخطار انشيء بـ PhpCollab.";
$strings["noti_foot2"] = "لزيارة PhpCollab أذهب إلى:";
$strings["noti_taskassignment1"] = "مهمة جديدة:";
$strings["noti_taskassignment2"] = "تم تكليفك بالمهمة:";
$strings["noti_moreinfo"] = "لمزيد من المعلومات الرجاء زيارة:";
$strings["noti_prioritytaskchange1"] = "تعديل اولوية المهمة:";
$strings["noti_prioritytaskchange2"] = "تم تعديل اولوية المهمة:";
$strings["noti_statustaskchange1"] = "حالة المهمة تغيرت:";
$strings["noti_statustaskchange2"] = "حالة المهام التالية تغيرت:";
$strings["login_username"] = "يجب ادخال اسم المستخدم.";
$strings["login_password"] = "يجب ادخال كلمة السر.";
$strings["login_clientuser"] = "هذا حساب عميل لا يمكنك الدخول به";
$strings["user_already_exists"] = "يجب مستخدم بهذا الاسم اختر اسم آخر.";
$strings["noti_duedatetaskchange1"] = "تغير تاريخ التسليم للمهمة:";
$strings["noti_duedatetaskchange2"] = "تاريخ التسليم للمهام التالية تغير:";
$strings["company"] = "الشركة";
$strings["show_all"] = "عرض الجميع";
$strings["information"] = "معلومات";
$strings["delete_message"] = "حذف هذه الرسالة";
$strings["project_team"] = "فريق المشروع";
$strings["document_list"] = "قائمة الوثائق";
$strings["bulletin_board"] = "لوحة الاعلانات";
$strings["bulletin_board_topic"] = "مواضيع لوحة الاعلانات";
$strings["create_topic"] = "انشاء موضوع جديد";
$strings["topic_form"] = "نموذج موضوع";
$strings["enter_message"] = "ادخل رسالتك";
$strings["upload_file"] = "رفع ملف";
$strings["upload_form"] = "نموذج الرفع";
$strings["upload"] = "الرفع";
$strings["document"] = "الوثيقة";
$strings["approval_comments"] = "ملاحظات الاعتماد";
$strings["client_tasks"] = "مهام العميل";
$strings["team_tasks"] = "مهام الفريق";
$strings["team_member_details"] = "تفاصيل عضو فريق المشروع";
$strings["client_task_details"] = "تفاصيل مهمة العميل";
$strings["team_task_details"] = "تفاصيل مهمة الفريق";
$strings["language"] = "اللغة";
$strings["welcome"] = "مرحبا";
$strings["your_projectsite"] = "الى موقع مشروعك";
$strings["contact_projectsite"] = "اذا كانت لديك اية استفسارات عن المعلومات المعروضة يرجى مراجعة مدير المشروع";
$strings["company_details"] = "تفاصيل الشركة";
$strings["database"] = "نسخ و استرجاع قاعدة البيانات";
$strings["company_info"] = "تحرير معلومات الشركة";
$strings["create_projectsite"] = "انشاء موقع المشروع";
$strings["projectsite_url"] = "عنوان موقع المشروع";
$strings["design_template"] = "قالب التصميم";
$strings["preview_design_template"] = "استعراض قالب التصميم";
$strings["delete_projectsite"] = "حذف موقع المشروع";
$strings["add_file"] = "اضافة ملف";
$strings["linked_content"] = "محتويات مرتبطة";
$strings["edit_file"] = "تحرير تفاصيل الملف";
$strings["permitted_client"] = "مستخدمي العميل المأذونين";
$strings["grant_client"] = "منح صلاحية استعراض موقع المشروع";
$strings["add_client_user"] = "اضافة مستخدم العميل";
$strings["edit_client_user"] = "تحرير مستخدم العميل";
$strings["client_user"] = "مستخدم العميل";
$strings["client_change_status"] = "غير الحالة عندما تنهي المهمة";
$strings["project_status"] = "حالة المشروع";
$strings["view_projectsite"] = "عرض موقع المشروع";
$strings["enter_login"] = "أدخل الاسم لتستلم كلمة السر";
$strings["send"] = "ارسال";
$strings["no_login"] = "الاسم غير موجود بقاعدة البيانات";
$strings["email_pwd"] = "ارسلت كلمة السر";
$strings["no_email"] = "المستخدم بلا ايميل";
$strings["forgot_pwd"] = "نسيت كلمة السر ?";
$strings["project_owner"] = "تستطيع التعديل فقط اذا كنت مالك المشروع.";
$strings["connected"] = "متصل";
$strings["session"] = "جلسة";
$strings["last_visit"] = "آخر زيارة";
$strings["compteur"] = "عدد";
$strings["ip"] = "Ip";
$strings["task_owner"] = "لست عضو بهذا المشروع";
$strings["export"] = "تصدير";
$strings["browse_cvs"] = "عرض CVS";
$strings["repository"] = "CVS مخزن";
$strings["reassignment_clientuser"] = "تعديل تكليف العميل";
$strings["organization_already_exists"] = "الاسم موجود مسبقا أختر آخر.";
$strings["blank_organization_field"] = "يجب ان تدخل اسم مؤسسة العميل.";
$strings["blank_fields"] = "حقول اجبارية";
$strings["projectsite_login_fails"] = "لم نتمكن من التأكد من الاسم و كلمة السر.";
$strings["start_date"] = "تاريخ البدء";
$strings["completion"] = "انجاز";
$strings["update_available"] = "تحديث متوفر!";
$strings["version_current"] = "انت تستخم حاليا الاصدار";
$strings["version_latest"] = "احدث اصدار";
$strings["sourceforge_link"] = "مشاهدة موقع المشروع في Sourceforge";
$strings["demo_mode"] = "نمط التجريبي. هذا غير متاح.";
$strings["setup_erase"] = "أحذف الملف setup.php!!";
$strings["no_file"] = "لم يحدد ملف";
$strings["exceed_size"] = "تجاوز حد املف الأقصى";
$strings["no_php"] = "Php ملف غير مسموح";
$strings["approval_date"] = "تاريخ الاعتماد";
$strings["approver"] = "المعتمد";
$strings["error_database"] = "فشل الارتباط بقاعدة البيانات";
$strings["error_server"] = "فشل الاتصال بالخادم";
$strings["version_control"] = "متابعة الاصدارات";
$strings["vc_status"] = "الحالة";
$strings["vc_last_in"] = "تاريخ آخر تعديل";
$strings["ifa_comments"] = "ملاحظات الاعتماد";
$strings["ifa_command"] = "تغيير حالة الاعتماد";
$strings["vc_version"] = "الاصدار";
$strings["ifc_revisions"] = "مراجعات النظراء";
$strings["ifc_revision_of"] = "مراجعة المدققين";
$strings["ifc_add_revision"] = "اضفة مراجعة مدقق";
$strings["ifc_update_file"] = "تحديث الملف";
$strings["ifc_last_date"] = "تاريخ آخر تعديل";
$strings["ifc_version_history"] = "أرشيف الاصدارات";
$strings["ifc_delete_file"] = "حذف الملف و كافة الاصدارات و المراجعات";
$strings["ifc_delete_version"] = "حذف الاصدار المحدد";
$strings["ifc_delete_review"] = "حذف المراجعة المحددة";
$strings["ifc_no_revisions"] = "لا يوجد مراجعات لهذه الوثيقة";
$strings["unlink_files"] = "فك ارتباط ملف";
$strings["remove_team"] = "ازالة عضو فريق";
$strings["remove_team_info"] = "ازالة هؤلاء الاعضاء من الفريق?";
$strings["remove_team_client"] = "ازالة صلاحية استعراض موقع المشروع";
$strings["note"] = "ملاحظة";
$strings["notes"] = "ملاحظات";
$strings["subject"] = "موضوع";
$strings["delete_note"] = "ازالة ادخالات الملاحظات";
$strings["add_note"] = "اضافة ادخال ملاحظة";
$strings["edit_note"] = "تحرير ادخال ملاحظة";
$strings["version_increm"] = "اختر تغيير الاصدار المطبق:";
$strings["url_dev"] = "عنوان موقع التطوير";
$strings["url_prod"] = "عنوان الموقع النهائي";
$strings["note_owner"] = "يمكنك تعديل ملاحظاتك فقط.";
$strings["alpha_only"] = "فقط احرف و ارقام في الادخال";
$strings["edit_notifications"] = "تحرير ايميل الإخطار";
$strings["edit_notifications_info"] = "أهتر الأحداث التي تود ان تخطر بها.";
$strings["select_deselect"] = "تحديد/عدم تحديد الجميع";
$strings["noti_addprojectteam1"] = "اضافة الى فريق المشروع :";
$strings["noti_addprojectteam2"] = "لقد تم اضافتك الى فريق المشروع :";
$strings["noti_removeprojectteam1"] = "ازلت من فريق المشروع :";
$strings["noti_removeprojectteam2"] = "لقد تم ازالتك من فريق المشروع:";
$strings["noti_newpost1"] = "اضافة جديدة :";
$strings["noti_newpost2"] = "اضافة جديدة في النقاش :";
$strings["edit_noti_taskassignment"] = "كلفت بمهمة جديدة.";
$strings["edit_noti_statustaskchange"] = "حالة بعض مهامي تعدلت.";
$strings["edit_noti_prioritytaskchange"] = "أولوية بعض مهامي تعدلت.";
$strings["edit_noti_duedatetaskchange"] = "تاريخ التسليم لبعض مهامي تعدلت.";
$strings["edit_noti_addprojectteam"] = "اضفت لفريق المشروع.";
$strings["edit_noti_removeprojectteam"] = "ازلت من فريق المشروع.";
$strings["edit_noti_newpost"] = "اضافة جديدة اضيفت للنقاش.";
$strings["add_optional"] = "اضافة اختياري";
$strings["assignment_comment_info"] = "اضافة ملاحظات بخصوص تكليف المهمة";
$strings["my_notes"] = "ملاحظاتي";
$strings["edit_settings"] = "تحرير الاعدادات";
$strings["max_upload"] = "اقصى حجم ملف";
$strings["project_folder_size"] = "حجم مجلد المشروع";
$strings["calendar"] = "التقويم";
$strings["date_start"] = "تاريخ البدء";
$strings["date_end"] = "تاريخ الانتهاء";
$strings["time_start"] = "وقت البدء";
$strings["time_end"] = "وقت الانتهاء";
$strings["calendar_reminder"] = "منبه";
$strings["shortname"] = "الاسم المختصر";
$strings["calendar_recurring"] = "الحدث يحدث كل اسبوع بهذا اليوم";
$strings["edit_database"] = "تحرير قاعدة البيانات";
$strings["noti_newtopic1"] = "نقاش جديد :";
$strings["noti_newtopic2"] = "نقاش جديد اضيف للمشروع :";
$strings["edit_noti_newtopic"] = "موضوع نقاش جديد انشيء.";
$strings["today"] = "اليوم";
$strings["previous"] = "السابق";
$strings["next"] = "التالي";
$strings["help"] = "مساعدة";
$strings["complete_date"] = "تاريخ الانجاز";
$strings["scope_creep"] = "تجاوز الموعد";
$strings["days"] = "الايام";
$strings["logo"] = "الشعار";
$strings["remember_password"] = "تذكر كلمة السر";
$strings["client_add_task_note"] = "ملاحظة: هذه المهمة اضيفت و لكن ممكن رؤيتها فقط من اعضاء الفريق!";
$strings["noti_clientaddtask1"] = "مهمة اضيفت من العميل :";
$strings["noti_clientaddtask2"] = "مهمة جديدة اضيفت من العميل للمشاريع :";
$strings["phase"] = "مرحلة";
$strings["phases"] = "مراحل";
$strings["phase_id"] = "رمز المرحلة";
$strings["current_phase"] = "المراحل الفعالة";
$strings["total_tasks"] = "مجموع المهمام";
$strings["uncomplete_tasks"] = "المهام غير المنجزة";
$strings["no_current_phase"] = "لا يوجد مرحلة فعالة";
$strings["true"] = "صحيح";
$strings["false"] = "خطأ";
$strings["enable_phases"] = "اتاحة المراحل";
$strings["phase_enabled"] = "المرحلة متاحة";
$strings["order"] = "طلب";
$strings["options"] = "خيارات";
$strings["support"] = "دعم";
$strings["support_request"] = "طلب دعم";
$strings["support_requests"] = "طلبات الدعم";
$strings["support_id"] = "رمزالدعم";
$strings["my_support_request"] = "طلبات الدعم خاصتي";
$strings["introduction"] = "مقدمة";
$strings["submit"] = "ارسال";
$strings["support_management"] = "ادارة الدعم";
$strings["date_open"] = "تاريخ البدء";
$strings["date_close"] = "تاريخ الإغلاق";
$strings["add_support_request"] = "اضافة طلب دعم";
$strings["add_support_response"] = "اضافة اجابة دعم";
$strings["respond"] = "اجابة";
$strings["delete_support_request"] = "طلب دعم حذف";
$strings["delete_request"] = "حذف طلب دعم";
$strings["delete_support_post"] = "حذف اضفة دعم";
$strings["new_requests"] = "طلبات جديدة";
$strings["open_requests"] = "طلبات مفتوحة";
$strings["closed_requests"] = "طلبات منجزة";
$strings["manage_new_requests"] = "ادارة الطلبات الجديدة";
$strings["manage_open_requests"] = "ادارة الطلبات المفتوحة";
$strings["manage_closed_requests"] = "ادارة الطلبات المغلقة";
$strings["responses"] = "الاجابات";
$strings["edit_status"] = "تحرير الحالة";
$strings["noti_support_request_new2"] = "لقد ارسلت طلب دعم بخصوص: ";
$strings["noti_support_post2"] = "اجابة جديدة اضيفت على طلب الدعم خاصتك الرجاء مراجعة التفاصيل بالاسفل.";
$strings["noti_support_status2"] = "  اجابة جديدة اضيفت على طلب الدعم خاصتك الرجاء مراجعة التفاصيل بالاسفل";
$strings["noti_support_team_new2"] = "طلب دعم جديد اضيف للمشروع: ";
//2.0
$strings["delete_subtasks"] = "حذف مهمة فرعية";
$strings["add_subtask"] = "اضافة مهمة فرعية";
$strings["edit_subtask"] = "تحرير مهمة فرعية";
$strings["subtask"] = "مهمة فرعية";
$strings["subtasks"] = "مهام فرعية";
$strings["show_details"] = "عرض التفاصيل";
$strings["updates_task"] = "أرشيف تحديثات المهمة";
$strings["updates_subtask"] = "أرشيف تحديثات المهمةالفرعية";
//2.1
$strings["go_projects_site"] = "ذهاب الى موقع المشاريع";
$strings["bookmark"] = "علامة";
$strings["bookmarks"] = "علامات";
$strings["bookmark_category"] = "فئة";
$strings["bookmark_category_new"] = "فئة جديدة";
$strings["bookmarks_all"] = "الكل";
$strings["bookmarks_my"] = "علاماتي";
$strings["my"] = "خاصتي";
$strings["bookmarks_private"] = "خاص";
$strings["shared"] = "مشترك";
$strings["private"] = "خاص";
$strings["add_bookmark"] = "اضافة علامة";
$strings["edit_bookmark"] = "تحرير علامة";
$strings["delete_bookmarks"] = "حذف علامات";
$strings["team_subtask_details"] = "تفاصيل المهمة الفرعية للفريق";
$strings["client_subtask_details"] = "تفاصيل المهمة الفرعية للعميل";
$strings["client_change_status_subtask"] = "عدل الحالة بالاسفل عند انتهائك من المهمة الفرعية";
$strings["disabled_permissions"] = "حساب موقوف";
$strings["user_timezone"] = "التوقيت (GMT)";
//2.2
$strings["project_manager_administrator_permissions"] = "مدير المشروع مشرف";
$strings["bug"] = "متابعة الاخطاء";
//2.3
$strings["report"] = "تقرير";
$strings["license"] = "ترخيص";
//2.4
$strings["settings_notwritable"] = "Settings.php غير قابل للكتابة";
$strings["allcalender"] = "تقويم الفريق";
