<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'دایرکتوری مدیر تعیین شده اشتباه است';
$string['admindirname'] = 'دایرکتوری مدیر';
$string['admindirsettinghead'] = 'تعیین دایرکتوری مدیر ...';
$string['admindirsettingsub'] = 'وب‌سایت‌های خیلی کمی از <span dir=\"ltr\">/admin</span> بعنوان پیوند ویژه‌ای برای دستیابی به یک
control panel یا چیز دیگری استفاده می‌کنند. متأسفانه این مسئله با 
محل استاندارد صفحه‌های مدیر در مودل تداخل دارد. این مشکل را می‌توانید
با تغییر نام دایرکتوری admin در فایل‌های نصب و قرار دادن
نام جدید در این قسمت برطرف نمائید. بعنوان مثال: <br /> <br /><b>moodleadmin</b><br /> <br />
این کار پیوندهای مدیر در مودل را اصلاح خواهد کرد.';
$string['bypassed'] = 'صرف‌نظر شده';
$string['caution'] = 'اخطار';
$string['check'] = 'بررسی';
$string['chooselanguagehead'] = 'انتخاب زبان';
$string['chooselanguagesub'] = 'لطفاً زبانی را به جهت استفاده در حین نصب انتخاب نمائید. زبان سایت و کاربر را در صفحه‌ای دیگر می‌توانید انتخاب کنید.';
$string['closewindow'] = 'بستن این پنجره';
$string['compatibilitysettingshead'] = 'بررسی تنظیمات PHP شما ...';
$string['compatibilitysettingssub'] = 'کارگزار شما باید همهٔ آزمایش‌های زیر را با موفقیت پشت سر بگذراند تا بتواند مودل را درست اجرا کند';
$string['configfilenotwritten'] = 'برنامهٔ نصب، احتمالاً به دلیل قابل نوشتن نبودن دایرکتوری مودل، قادر به ایجاد فایل config.php شامل تنظیمات انتخابی شما نبود. می‌توانید کد زیر را به صورت دستی در فایلی با نام config.php در داخل دایرکتوری اصلی مودل کپی نمائید.';
$string['configfilewritten'] = 'config.php با موفقیت ایجاد شد';
$string['configurationcompletehead'] = 'پیکربندی به اتمام رسید';
$string['configurationcompletesub'] = 'مودل تلاش کرد که پیکربندی شما را در فایلی در محل نصب مودل شما ذخیره کند.';
$string['continue'] = 'ادامه';
$string['ctyperecommended'] = 'Installing the optional ctype PHP extension is highly recommended in order to improve site performance, particularly if your site is supporting non-latin languages.';
$string['ctyperequired'] = 'The ctype PHP extension is now required by Moodle, in order to improve site performance and to offer multilingual compatibility.';
$string['curlrecommended'] = 'Installing the optional cURL library is highly recommended in order to enable Moodle Networking functionality.';
$string['customcheck'] = 'Other Checks';
$string['database'] = 'پایگاه داده';
$string['databasecreationsettingshead'] = 'حال باید تنظیمات پایگاه داده که قسمت عمده‌ای از اطلاعات مودل در آن نگهداری
می‌شود را انجام دهید. این پایگاه داده به صورت خودکار توسط برنامهٔ نصب
با تنظیماتی که در این قسمت تعیین شده است ایجاد خواهد شد.';
$string['databasecreationsettingssub'] = '<b>نوع:</b> توسط برنامهٔ نصب روی «mysql» ثابت شده است<br />
       <b>میزبان:</b> توسط برنامهٔ نصب روی «localhost» ثابت شده است<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> توسط برنامهٔ نصب روی «root» ثابت شده است<br />
       <b>رمز اتصال:</b> رمز اتصال پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند اختیاری مورد استفاده برای نام همهٔ جدول‌ها';
$string['databasesettingshead'] = 'حال باید پایگاه داده که قسمت عمده‌ای از اطلاعات مودل در آن نگهداری
می‌شود را پیکربندی نمائید. این پایگاه داده باید قبلاً ایجاد و همچنین
یک کاربر و رمز اتصال برای دستیابی به آن در نظر گرفته شده باشد.';
$string['databasesettingssub'] = '<b>نوع:</b> mysql یا postgres7<br />
       <b>میزبان:</b> مثلاً localhost یا db.isp.com<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند اختیاری مورد استفاده برای نام همهٔ جدول‌ها';
$string['databasesettingssub_mssql'] = '<b>نوع:</b> SQL*Server (غیر UTF-8) <b><strong  class=\"errormsg\">آزمایشی! (برای استفاده در عمل مناسب نیست)</strong></b><br />
       <b>میزبان:</b> مثلاً localhost یا db.isp.com<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اجباری)';
$string['databasesettingssub_mssql_n'] = '<b>نوع:</b> SQL*Server (با UTF-8)<br />
       <b>میزبان:</b> مثلاً localhost یا db.isp.com<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اجباری)';
$string['databasesettingssub_mysql'] = '<b>نوع:</b> MySQL<br />
       <b>میزبان:</b> مثلاً localhost یا db.isp.com<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اختیاری)';
$string['databasesettingssub_mysqli'] = '<b>نوع:</b> MySQL اصلاح شده<br />
       <b>میزبان:</b> مثلاً localhost یا db.isp.com<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اختیاری)';
$string['databasesettingssub_oci8po'] = '<b>نوع:</b> Oracle<br />
       <b>میزبان:</b> استفاده نمی‌شود، باید خالی بماند<br />
       <b>نام:</b> نام درنظر گرفته شده برای tnsnames.ora connection<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اجباری، حداکثر ۲ حرف)';
$string['databasesettingssub_odbc_mssql'] = '<b>نوع:</b> SQL*Server (از طریق ODBC) <b><strong  class=\"errormsg\">آزمایشی! (برای استفاده در عمل مناسب نیست)</strong></b><br />
       <b>میزبان:</b> نام درنظر گرفته شده برای DSN در ODBC control panel<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اجباری)';
$string['databasesettingssub_postgres7'] = '<b>نوع:</b> PostgreSQL<br />
       <b>میزبان:</b> مثلاً localhost یا db.isp.com<br />
       <b>نام:</b> نام پایگاه داده، مثلاً moodle<br />
       <b>کاربر:</b> نام کاربر پایگاه دادهٔ شما<br />
       <b>رمز اتصال:</b> رمز اتصال کاربر پایگاه دادهٔ شما<br />
       <b>پیشوند جدول‌ها:</b> پیشوند مورد استفاده برای نام همهٔ جدول‌ها (اجباری)';
$string['databasesettingswillbecreated'] = '<b>توجه:</b> در صورت عدم وجود، برنامهٔ نصب به صورت خودکار سعی می‌کند که پایگاه داده را ایجاد نماید.';
$string['dataroot'] = 'دایرکتوری داده';
$string['datarooterror'] = '«دایرکتوری داده»ای که تعیین نموده‌اید موجود یا قابل ایجاد شدن نیست. یا مسیر وارد شده را تصحیح نمائید و یا دایرکتوری مورد نظر را به صورت دستی ایجاد نمائید.';
$string['datarootpublicerror'] = '«دایرکتوری داده»ای که تعیین کرده‌اید مستقیماً از طریق وب قابل دستیابی است. باید از دایرکتوری دیگری استفاده نمائید.';
$string['dbconnectionerror'] = 'اتصال به پایگاه داده ای که مشخص نموده‌اید امکان‌پذیر نبود. لطفاً تنظیمات پایگاه دادهٔ خود را بررسی نمائید.';
$string['dbcreationerror'] = 'خطای ایجاد پایگاه داده. پایگاه دادهٔ مورد نظر با تنظیمات تعیین شده ایجاد نشد.';
$string['dbhost'] = 'کارگزار میزبان';
$string['dbprefix'] = 'پیشوند جدول‌ها';
$string['dbtype'] = 'نوع';
$string['dbwrongencoding'] = 'پایگاه دادهٔ انتخاب شده تحت یک کدبندی توصیه نشده ($a) است. بهتر است که به‌جای آن از یک پایگاه دادهٔ یونیکد (UTF-8) استفاده کنید. می‌توانید با انتخاب گزینهٔ «صرف‌نظر کردن از بررسی کدبندی پایگاه داده» در پائین از این بررسی عبور کنید، ولی ممکن است در آینده با مشکلاتی مواجه شوید.';
$string['dbwronghostserver'] = 'باید قواعد «میزبان» را مطابق توضیح بالا رعایت نمائید.';
$string['dbwrongnlslang'] = 'charset متغیر محیطی NLS_LANG در کارگزار وب شما باید AL32UTF8 باشد. مستندات PHP را در ارتباط با چگونگی پیکربندی صحیح OCI8 ببینید.';
$string['dbwrongprefix'] = 'باید قواعد «پیشوند جدول‌ها» را مطابق توضیح بالا رعایت نمائید.';
$string['directorysettingshead'] = 'لطفاً محل‌های این نصب مودل را تأیید نمائید';
$string['directorysettingssub'] = '<b>آدرس وب:</b>
آدرس وب کامل دسترسی به مودل را مشخص نمائید.
اگر وب‌سایت شما از طریق چند URL قابل دستیابی است، بدیهی‌ترینی
که شاگردهای شما ممکن است استفاده کنند را انتخاب نمائید. در انتهای
آدرس، نشان ممیز (slash) قرار ندهید.
<br />
<br />
<b>دایرکتوری مودل:</b>
مسیر کامل فایل‌های مودل را تعیین نمائید.
مطمئن شوید که بزرگی/کوچکی حروف را رعایت کرده باشید.
<br />
<br />
<b>دایرکتوری داده:</b>
شما به محلی نیاز دارید که مودل بتواند فایل‌های ارسالی را آن‌جا ذخیره کند.
این دایرکتوری باید توسط کاربر کارگزار وب قابل خواندن و نوشتن باشد
(معمولاً «nobody» یا «apache»)، ولی نباید مستقیماً از طریق وب
قابل دستیابی باشد.';
$string['dirroot'] = 'دایرکتوری مودل';
$string['dirrooterror'] = 'مقدار تعیین شده برای «دایرکتوری مودل» اشتباه به نظر می‌رسد - در آن محل فایل‌های مودل وجود ندارد. مقدار زیر مجدداً تنظیم شد.';
$string['download'] = 'دریافت فایل';
$string['downloadlanguagebutton'] = 'دریافت بستهٔ زبانی «{$a}»';
$string['downloadlanguagehead'] = 'دریافت بستهٔ زبانی';
$string['downloadlanguagenotneeded'] = 'فرآیند نصب را می‌توانید با استفاده از زبان پیش‌فرض ($a) ادامه دهید.';
$string['downloadlanguagesub'] = 'هم‌اکنون می‌توانید یک بستهٔ زبانی دریافت کنید و فرآیند نصب را با این زبان ادامه دهید.<br /><br />اگر قادر به دریافت بستهٔ زبانی نیستید، فرآیند نصب به زبان انگلیسی ادامه خواهد یافت. (وقتی که مراحل نصب به اتمام رسید، امکان دریافت و نصب بسته‌های زبانی اضافی را خواهید داشت.)';
$string['environmenterrortodo'] = 'قبل از ادامهٔ نصب این نسخهٔ مودل، باید مشکلات (خطاهای) محیطی پیدا شده را برطرف نمائید!';
$string['environmenthead'] = 'بررسی محیط شما ...';
$string['environmentrecommendcustomcheck'] = 'if this test fails, it indicates a potential problem';
$string['environmentrecommendinstall'] = 'برای حصول بهترین نتیجه باید نصب و فعال باشد';
$string['environmentrecommendversion'] = 'نسخهٔ $a->needed توصیه می‌شود و شما نسخهٔ $a->current را دارید';
$string['environmentrequirecustomcheck'] = 'this test must pass';
$string['environmentrequireinstall'] = 'باید نصب و فعال باشد';
$string['environmentrequireversion'] = 'نسخهٔ $a->needed لازم است و شما نسخهٔ $a->current را دارید';
$string['environmentsub'] = 'بررسی اینکه قسمت‌های مختلف سیستم شما شرایط لازم را داشته باشد';
$string['environmentxmlerror'] = 'خطا در خواندن اطلاعات محیط ($a->error_code)';
$string['error'] = 'خطا';
$string['fail'] = 'ناموفق';
$string['fileuploads'] = 'ارسال فایل';
$string['fileuploadserror'] = 'باید فعال باشد';
$string['fileuploadshelp'] = '<p>ارسال فایل روی کارگزار شما غیرفعال به نظر می‌رسد.</p>

<p>مودل هنوز هم می‌تواند نصب شود، ولی بدون این قابلیت، قادر به ارسال
فایل‌های درسی یا عکس‌های کاربران جدید نخواهید بود.</p>

<p>برای فعال کردن ارسال فایل، شما (یا مدیر سیستم شما) باید
فایل php.ini اصلی کارگزار خود را ویرایش نمائید و مقدار
<b>file_uploads</b> را به 1 تغییر دهید.</p>';
$string['gdversion'] = 'نسخهٔ GD';
$string['gdversionerror'] = 'برای پردازش و ایجاد تصاویر، کتابخانهٔ GD باید موجود باشد';
$string['gdversionhelp'] = '<p>به نظر نمی‌رسد که GD روی کارگزار شما نصب شده باشد.</p>

<p>GD کتابخانه‌ای است که برای اینکه مودل بتواند تصاویر را پردازش کند
(مانند عکس شخصی کاربران) یا تصاویر جدیدی (مانند نمودارهای log) ایجاد نماید،
توسط PHP مورد نیاز است. مودل بدون GD هم کار می‌کند - فقط این قابلیت‌ها
برای شما فراهم نخواهند بود.</p>

<p>جهت اضافه کردن GD به PHP در لینوکس، PHP را با پارامتر <span dir=\"ltr\">--with-gd</span> کامپایل نمائید.</p>

<p>در ویندوز معمولاً می‌توانید php.ini را ویرایش نموده و خطی که به php_gd2.dll اشاره می‌کند را از حالت comment خارج نمائید.</p>';
$string['globalsquotes'] = 'اداره‌کردن ناامن global ها';
$string['globalsquoteserror'] = 'تنظیمات PHP خود را اصلاح نمائید: register_globals را غیرفعال و/یا magic_quotes_gpc را فعال کنید.';
$string['globalsquoteshelp'] = '<p>غیر فعال بون Magic Quotes GPC و فعال بودن Register Globals به‌صورت هم‌زمان توصیه نمی‌شود.</p>

<p>تنظیم توصیه شده به‌صورت <b>magic_quotes_gpc = On</b> و <b>register_globals = Off</b> در php.ini می‌باشد</p>

<p>اگر به فایل php.ini خود دسترسی ندارید، ممکن است بتوانید خط زیر را در فایلی
با نام <span dir=\"ltr\">.htaccess</span> داخل دایرکتوری مودل خود قرار دهید:</p>
   <blockquote><div>php_value magic_quotes_gpc On</div></blockquote>
   <blockquote><div>php_value register_globals Off</div></blockquote>
';
$string['globalswarning'] = '<p><strong>هشدار امنیتی!</strong></p><p>برای اینکه مودل درست کار کند، باید تغییرات به‌خصوصی را در تنظیمات فعلی PHP خود بدهید.</p><p>شما <em>باید</em> <code>register_globals=off</code> قرار دهید.</p><p>این تنظیم با ویرایش <code>php.ini</code> شما، پیکربندی Apache/IIS یا فایل <code dir=\"ltr\">.htaccess</code> کنترل می‌شود.</p>';
$string['help'] = 'راهنمایی';
$string['iconvrecommended'] = 'Installing the optional ICONV library is highly recommended in order to improve site performance, particularly if your site is supporting non-Latin languages.';
$string['info'] = 'توضیحات';
$string['installation'] = 'در حال نصب';
$string['langdownloaderror'] = 'متأسفانه زبان «{$a}» نصب نشد. فرآیند نصب به زبان انگلیسی ادامه خواهد یافت.';
$string['langdownloadok'] = 'زبان «{$a}» با موفقیت نصب شد. فرآیند نصب به این زبان ادامه خواهد یافت.';
$string['language'] = 'زبان';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'باید غیرفعال باشد';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime باید غیرفعال باشد تا مودل به‌درستی کار کند.</p>

<p>معمولاً به صورت پیش‌فرض غیرفعال است ... تنظیم <b>magic_quotes_runtime</b> در فایل php.ini خود را ببینید.</p>

<p>اگر به فایل php.ini خود دسترسی ندارید، ممکن است بتوانید خط زیر را در فایلی
با نام <span dir=\"ltr\">.htaccess</span> داخل دایرکتوری مودل خود قرار دهید:</p>
   <blockquote><div>php_value magic_quotes_runtime Off</div></blockquote>
';
$string['mbstringrecommended'] = 'Installing the optional MBSTRING library is highly recommended in order to improve site performance, particularly if your site is supporting non-Latin languages.';
$string['memorylimit'] = 'محدودیت حافظه';
$string['memorylimiterror'] = 'حد حافظهٔ PHP واقعاً کم تعیین شده است ... ممکن است بعداً با مشکلاتی مواجه شوید.';
$string['memorylimithelp'] = '<p>حد حافظهٔ PHP کارگزار شما هم‌اکنون $a  است.</p>

<p>این مسئله ممکن است در آینده سبب بروز مشکلات مربوط به حافظه برای مودل شود،
به‌خصوص اگر شما ماژول‌های فعال و/یا کاربران زیادی داشته باشید.</p>

<p>توصیه می‌کنیم که در صورت امکان PHP را با مقدار بیشتری مثل 40M پیکربندی نمائید.
روش‌های متعددی برای انجام این کار وحود دارد که می‌توانید آن‌ها را امتحان نمائید:</p>
<ol>
<li>اگر می‌توانید، PHP را با <span dir=\"ltr\"><i>--enable-memory-limit</i></span> مجدداً compile نمائید.
این کار به مودل اجازه خواهد داد که حد حافظه را خودش تعیین کند.</li>
<li>اگر به فایل php.ini خود دسترسی دارید، می‌توانید مقدار <b>memory_limit</b>
را به چیزی مثل 40M تغییر دهید. اگر دسترسی ندارید، می‌توانید
از مدیر کارگزار خود بخواهید که این کار را برای شما انجام دهد.</li>
<li>در بعضی از کارگزارهای PHP شما می‌توانید یک فایل <span dir=\"ltr\">.htaccess</span> محتوی خط زیر
در دایرکتوری مودل ایجاد کنید:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>اگرچه، در برخی از کارگزارها انجام این کار موجب جلوگیری از کارکردن <b>همهٔ</b> صفحه‌های PHP خواهد شد
(هنگام مشاهدهٔ صفحه‌ها خطاهایی خواهید دید) و مجبور خواهید بود که فایل <span dir=\"ltr\">.htaccess</span> را پاک کنید.</p></li>
</ol>';
$string['moodledocslink'] = 'اسناد مودل برای این صفحه';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP با افزونهٔ MSSQL به‌نحو مناسب پیکربندی نشده است تا بتواند با SQL*Server ارتباط برقرار کند. لطفاً فایل php.ini خود را بررسی نمائید یا PHP را مجدداً compile کنید.';
$string['mssql_n'] = 'SQL*Server با پشتیبانی از UTF-8 (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'However, if your site is using iso-8859-1 (latin) languages ONLY, you may continue using your currently installed MySQL 4.1.12 (or higher).';
$string['mysql416required'] = 'MySQL 4.1.16 is the minimum version required for Moodle 1.6 in order to guarantee that all data can be converted to UTF-8 in the future.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP با افزونهٔ MySQL به‌نحو مناسب پیکربندی نشده است تا بتواند با MySQL ارتباط برقرار کند. لطفاً فایل php.ini خود را بررسی نمائید یا PHP را مجدداً compile کنید.';
$string['mysqli'] = 'MySQL اصلاح شده (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP با افزونهٔ MySQLi به‌نحو مناسب پیکربندی نشده است تا بتواند با MySQL ارتباط برقرار کند. لطفاً فایل php.ini خود را بررسی نمائید یا PHP را مجدداً compile کنید. افزونهٔ MySQLi برای PHP 4 موجود نیست.';
$string['name'] = 'نام';
$string['next'] = 'بعدی';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP با افزونهٔ OCI8 به‌نحو مناسب پیکربندی نشده است تا بتواند با Oracle ارتباط برقرار کند. لطفاً فایل php.ini خود را بررسی نمائید یا PHP را مجدداً compile کنید.';
$string['odbcextensionisnotpresentinphp'] = 'PHP با افزونهٔ ODBC به‌نحو مناسب پیکربندی نشده است تا بتواند با SQL*Server ارتباط برقرار کند. لطفاً فایل php.ini خود را بررسی نمائید یا PHP را مجدداً compile کنید.';
$string['odbc_mssql'] = 'SQL*Server از طریق ODBC (odbc_mssql)';
$string['ok'] = 'تایید';
$string['opensslrecommended'] = 'Installing the optional OpenSSL library is highly recommended -- it enables Moodle Networking functionality.';
$string['pass'] = 'موفق';
$string['password'] = 'رمز ورود';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP با افزونهٔ PGSQL به‌نحو مناسب پیکربندی نشده است تا بتواند با PostgreSQL ارتباط برقرار کند. لطفاً فایل php.ini خود را بررسی نمائید یا PHP را مجدداً compile کنید.';
$string['php50restricted'] = 'PHP 5.0.x has a number of known problems, please upgrade to 5.1.x or downgrade to 4.3.x or 4.4.x';
$string['phpversion'] = 'نسخهٔ PHP';
$string['phpversionerror'] = 'نسخهٔ PHP باید حداقل 4.3.0 یا 5.1.0 باشد (<span dir=\"ltr\">5.0.x</span> مشکلات شناخته‌شده‌ای دارد).';
$string['phpversionhelp'] = '<p>مودل نیاز به PHP نسخهٔ حداقل 4.3.0 یا 5.1.0 دارد (<span dir=\"ltr\">5.0.x</span> مشکلات شناخته‌شده‌ای دارد).</p>
<p>شما در حال حاضر از نسخهٔ $a استفاده می‌کنید</p>
<p>باید PHP را ارتقاء دهید یا از کارگزاری دارای نسخهٔ جدیدتر PHP استفاده نمائید!<br />
(در صورت استفاده از <span dir=\"ltr\">5.0.x</span> به نسخهٔ <span dir=\"ltr\">4.4.x</span> هم می‌توانید برگردید)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['postgresqlwarning'] = '<strong>توجه:</strong> اگر با مشکلاتی در زمینهٔ اتصال مواجه شدید، کارگزار میزبان را به صورت
 host=\'postgresql_host\' port=\'5432\' dbname=\'postgresql_database_name\' user=\'postgresql_user\' password=\'postgresql_user_password\'
تعیین نمائید و قسمت‌های پایگاه داده، کاربر و رمز اتصال را خالی بگذارید. اطلاعات بیشتر را می‌توانید در <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">مستندات مودل</a> بیابید.';
$string['previous'] = 'قبلی';
$string['qtyperqpwillberemoved'] = 'During the upgrade, the RQP question type will be removed. You were not using this question type, so you should not experience any problems.';
$string['qtyperqpwillberemovedanyway'] = 'During the upgrade, the RQP question type will be removed. You have some RQP questions in your database, and these will stop working unless you reinstall the code from http://moodle.org/mod/data/view.php?d=13&amp;rid=797 before continuing with the upgrade.';
$string['report'] = 'گزارش';
$string['restricted'] = 'محدود';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'مودل ممکن است با فعال بودن safe mode مشکل داشته باشد';
$string['safemodehelp'] = '<p>مودل ممکن است مشکلات متعددی در صورت فعال بودن safe mode داشته باشد. یکی از مشکلات نه‌چندان بی اهمیت
این است که امکان دارد ایجاد فایل‌های جدید مجاز نباشد.</p>

<p>safe mode معمولاً فقط توسط میزبان‌های عمومی وبی که توهم دارند فعال می‌شود،
در نتیجه احتمالاً باید یک شرکت میزبانی وب جدید برای سایت مودل خود پیدا کنید.</p>

<p>در صورت تمایل می‌توانید به نصب ادامه دهید، ولی منتظر بروز مشکلات در آینده باشید.</p>';
$string['serverchecks'] = 'بررسی کارگزار';
$string['sessionautostart'] = 'شروع خودکار session';
$string['sessionautostarterror'] = 'باید غیرفعال باشد';
$string['sessionautostarthelp'] = '<p>مودل نیازمند پشتیبانی شدن از session است و در غیر اینصورت کار نمی‌کند.</p>

<p>session ها در فایل php.ini می‌توانند فعال شوند ... به‌دنبال پارامتر session.auto_start بگردید.';
$string['skipdbencodingtest'] = 'صرف‌نظر کردن از بررسی کدبندی پایگاه داده';
$string['status'] = 'وضعیت';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'rtl';
$string['thislanguage'] = 'فارسی';
$string['unicoderecommended'] = 'Storing all your data in Unicode (UTF-8) is recommended. New installations should be performed into databases that have their default character set as Unicode.  If you are upgrading, you should perform the UTF-8 migration process (see the Admin page).';
$string['unicoderequired'] = 'It is required that you store all your data in Unicode format (UTF-8). New installations must be performed into databases that have their default character set as Unicode.  If you are upgrading, you should perform the UTF-8 migration process (see the Admin page).';
$string['user'] = 'کاربر';
$string['welcomep10'] = '$a->installername (<span dir=\"ltr\">$a->installerversion</span>)';
$string['welcomep20'] = 'دیدن این صفحه به معنی نصب و راه‌اندازی موفق بستهٔ
    <strong>$a->packname <span dir=\"ltr\">$a->packversion</span></b></strong> است. تبریک!';
$string['welcomep30'] = 'این نسخهٔ <strong>$a->installername</strong> شامل برنامه‌هایی
برای ایجاد محیطی برای کار کردن <strong>مودل</strong> است، برای مثال:';
$string['welcomep40'] = 'بستهٔ مورد نظر همچنین شامل <strong>مودل <span dir=\"ltr>$a->moodlerelease</span> )<span dir=\"ltr>$a->moodleversion</span>(</strong> است.';
$string['welcomep50'] = 'استفاده از هر کدام از برنامه‌های این بسته توسط اجازه‌نامه‌های مربوطهٔ آن‌ها معین
شده است. بستهٔ کامل <strong>$a->installername</strong>
<a href=\"http://www.opensource.org/docs/definition_plain.html\">متن‌باز</a> است و تحت
اجازه‌نامهٔ <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> توزیع شده است.';
$string['welcomep60'] = 'صفحه‌های بعدی با مراحل ساده‌ای شما را هدایت می‌کنند تا
<strong>مودل</strong> را روی رایانهٔ خود پیکربندی و برپا کنید. می‌توانید تنظیمات
پیش‌فرض را بپذیرید یا (در صورت تمایل) آن‌ها را مطابق با نیاز خود تغییر دهید.';
$string['welcomep70'] = 'برای برپاسازی <strong>مودل</strong> بر روی دکمهٔ «بعدی» در پائین کلیک نمائید.';
$string['wwwroot'] = 'آدرس وب';
$string['wwwrooterror'] = '«آدرس وب» معتبر به نظر نمی‌رسد - به نظر نمی‌رسد که فایل‌های این مودل آنجا باشند. مقدار زیر مجدداً تنظیم شد.';
$string['xmlrpcrecommended'] = 'Installing the optional xmlrpc extension is useful for Moodle Networking functionality.';
$string['ziprequired'] = 'The Zip PHP extension is now required by Moodle, info-ZIP binaries or PclZip library are not used anymore.';
?>
