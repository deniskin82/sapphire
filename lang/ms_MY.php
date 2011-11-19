<?php

/**
 * Malay (Malaysia) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('ms_MY', $lang) && is_array($lang['ms_MY'])) {
	$lang['ms_MY'] = array_merge($lang['en_US'], $lang['ms_MY']);
} else {
	$lang['ms_MY'] = $lang['en_US'];
}

$lang['ms_MY']['AdvancedSearchForm']['PAGETITLE'] = 'Tajuk Halaman';
$lang['ms_MY']['BankAccountField']['VALIDATIONJS'] = 'Sila masukkan nombor bank yang sah';
$lang['ms_MY']['BasicAuth']['ENTERINFO'] = 'Maukkan ID pengguna dan katalaluan';
$lang['ms_MY']['BasicAuth']['ERRORNOTADMIN'] = 'Pengguna ini bukan pentadbir.';
$lang['ms_MY']['BasicAuth']['ERRORNOTREC'] = 'ID pengguna dan katalaluan tidak dikenali';
$lang['ms_MY']['BBCodeParser']['ALIGNEMENT'] = 'Penjajaran';
$lang['ms_MY']['BBCodeParser']['COLORED'] = 'Teks berwarna';
$lang['ms_MY']['BBCodeParser']['COLOREDEXAMPLE'] = 'teks biru';
$lang['ms_MY']['BBCodeParser']['EMAILLINK'] = 'Pautan email';
$lang['ms_MY']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Wujudkan pautan kepada alamat emel';
$lang['ms_MY']['BBCodeParser']['STRUCK'] = 'Teks berpalang';
$lang['ms_MY']['BBCodeParser']['STRUCKEXAMPLE'] = 'Palang';
$lang['ms_MY']['BBCodeParser']['UNDERLINE'] = 'Teks bergaris bawah';
$lang['ms_MY']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Bergaris bawah';
$lang['ms_MY']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Anda telah mengubah kata lalaun untuk';
$lang['ms_MY']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Sila gunakan maklumat di bawah untuk mendaftar masuk:';
$lang['ms_MY']['ChangePasswordEmail.ss']['EMAIL'] = 'Emel';
$lang['ms_MY']['ChangePasswordEmail.ss']['HELLO'] = 'Hi';
$lang['ms_MY']['ChangePasswordEmail.ss']['PASSWORD'] = 'Kata Laluan';
$lang['ms_MY']['ComplexTableField.ss']['ADDITEM'] = 'Tambah';
$lang['ms_MY']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Tiada hasil carian';
$lang['ms_MY']['ComplexTableField.ss']['SORTASC'] = 'Susun secara menaik';
$lang['ms_MY']['ComplexTableField.ss']['SORTDESC'] = 'Susun secara menurun';
$lang['ms_MY']['ComplexTableField_popup.ss']['NEXT'] = 'Berikut';
$lang['ms_MY']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Dahulu';
$lang['ms_MY']['CompositeDateField']['DAY'] = 'Hari';
$lang['ms_MY']['CompositeDateField']['DAYJS'] = 'hari';
$lang['ms_MY']['CompositeDateField']['MONTH'] = 'Bulan';
$lang['ms_MY']['CompositeDateField']['MONTHJS'] = 'bulan';
$lang['ms_MY']['CompositeDateField']['VALIDATIONJS1'] = 'Sila pastikan anda telah menyediakan';
$lang['ms_MY']['CompositeDateField']['VALIDATIONJS2'] = 'dengan betul.';
$lang['ms_MY']['CompositeDateField']['YEARJS'] = 'tahun';
$lang['ms_MY']['ConfirmedFormAction']['CONFIRMATION'] = 'Adakah anda pasti?';
$lang['ms_MY']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Kata laluan mesti sepadan.';
$lang['ms_MY']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Tukar Kata Aluan';
$lang['ms_MY']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Anda pertu mendaftar masuk dengan kata aluan CMS anda untuk melihat draf atau kandungan diarkib. <a href="%s">Klik sini untuk kembali ke tapak tertebit.</a>';
$lang['ms_MY']['DataObject']['PLURALNAME'] = 'Objek-objek Data';
$lang['ms_MY']['DataObject']['SINGULARNAME'] = 'Objek Data';
$lang['ms_MY']['Date']['DAY'] = 'hari';
$lang['ms_MY']['Date']['DAYS'] = 'hari-hari';
$lang['ms_MY']['Date']['HOUR'] = 'jam';
$lang['ms_MY']['Date']['HOURS'] = 'jam-jam';
$lang['ms_MY']['Date']['MIN'] = 'minit';
$lang['ms_MY']['Date']['MINS'] = 'minit-minit';
$lang['ms_MY']['Date']['MONTH'] = 'bulan';
$lang['ms_MY']['Date']['MONTHS'] = 'bulan-bulan';
$lang['ms_MY']['Date']['SEC'] = 'saat';
$lang['ms_MY']['Date']['SECS'] = 'saat-saat';
$lang['ms_MY']['Date']['TIMEDIFFAGO'] = '%s lalu';
$lang['ms_MY']['Date']['TIMEDIFFAWAY'] = '%s jauhnya';
$lang['ms_MY']['Date']['YEAR'] = 'tahun';
$lang['ms_MY']['Date']['YEARS'] = 'tahun-tahun';
$lang['ms_MY']['DateField']['VALIDDATEFORMAT'] = 'Masukkan format tarikh yang sah (DD/MM/YYYY).';
$lang['ms_MY']['DropdownField']['CHOOSE'] = '(Pilih)';
$lang['ms_MY']['EmailField']['VALIDATION'] = 'Masukkan alamat email';
$lang['ms_MY']['ErrorPage']['417'] = '417 - kegagalan expectation';
$lang['ms_MY']['ErrorPage']['500'] = '500 - Internal Server Error';
$lang['ms_MY']['ErrorPage']['501'] = '501 - Not Implemented';
$lang['ms_MY']['ErrorPage']['502'] = '502 - Bad Gateway';
$lang['ms_MY']['ErrorPage']['503'] = '503 - Service Unavailable';
$lang['ms_MY']['ErrorPage']['504'] = '504 - Gateway Timeout';
$lang['ms_MY']['ErrorPage']['505'] = '505 - HTTP Version Not Supported';
$lang['ms_MY']['ErrorPage']['CODE'] = 'Kod kesilapan';
$lang['ms_MY']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Minta maaf, rupa-rupanya anda ingin mencapai halaman yang tidak wujud</p><p>Sila semak ejaan URL yang anda ingin mencapai dan cuba semula</p>';
$lang['ms_MY']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Halaman tidak wujud';
$lang['ms_MY']['ErrorPage']['PLURALNAME'] = 'Laman-laman Kesilapan';
$lang['ms_MY']['ErrorPage']['SINGULARNAME'] = 'Laman Kesilapan';
$lang['ms_MY']['File']['INVALIDEXTENSION'] = 'Tokokan tidak dibenarkan (sah: %s)';
$lang['ms_MY']['File']['NOFILESIZE'] = 'Saiz fail bersamaan sifar bait.';
$lang['ms_MY']['File']['PLURALNAME'] = 'Fail-fail';
$lang['ms_MY']['File']['SINGULARNAME'] = 'Fail';
$lang['ms_MY']['File']['TOOLARGE'] = 'Saiz fail terlalu besar, %s maksimum dibenarkan';
$lang['ms_MY']['Folder']['CREATED'] = 'Muatnaik yang pertama';
$lang['ms_MY']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Hapuskan thumbnail yang tidak digunakan';
$lang['ms_MY']['Folder']['DELSELECTED'] = 'Hapuskan fail terpilih';
$lang['ms_MY']['Folder']['DETAILSTAB'] = 'Keterangan';
$lang['ms_MY']['Folder']['FILENAME'] = 'Nama fail';
$lang['ms_MY']['Folder']['FILESTAB'] = 'Fail-fail';
$lang['ms_MY']['Folder']['LASTEDITED'] = 'Kemaskini terakhir';
$lang['ms_MY']['Folder']['PLURALNAME'] = 'Fail-fail';
$lang['ms_MY']['Folder']['SINGULARNAME'] = 'Fail';
$lang['ms_MY']['Folder']['TITLE'] = 'Tajuk';
$lang['ms_MY']['Folder']['TYPE'] = 'Jenis';
$lang['ms_MY']['Folder']['UNUSEDFILESTAB'] = 'Fail-fail yang tidak digunakan';
$lang['ms_MY']['Folder']['UNUSEDFILESTITLE'] = 'Fail-fail yang tidak digunakan';
$lang['ms_MY']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Thumbnail yang tidak digunakan';
$lang['ms_MY']['Folder']['UPLOADTAB'] = 'Muatnaik';
$lang['ms_MY']['Folder']['URL'] = 'Url';
$lang['ms_MY']['Folder']['VIEWASSET'] = 'Lihat Aset';
$lang['ms_MY']['Folder']['VIEWEDITASSET'] = 'LIhat/Sunting Aset';
$lang['ms_MY']['ForgotPasswordEmail.ss']['HELLO'] = 'Hi';
$lang['ms_MY']['Form']['DATENOTSET'] = '(Tarikh belum ditetapkan)';
$lang['ms_MY']['Form']['FIELDISREQUIRED'] = '%s dipelukan';
$lang['ms_MY']['Form']['LANGAOTHER'] = 'Bahasa lain';
$lang['ms_MY']['Form']['LANGAVAIL'] = 'Bahasa yang tersedia';
$lang['ms_MY']['Form']['NOTSET'] = '(tidak ditetapkan)';
$lang['ms_MY']['Form']['VALIDATIONALLDATEVALUES'] = 'Pastikan semua tarikh telah dimasukkan';
$lang['ms_MY']['Form']['VALIDATIONBANKACC'] = 'Sila masukan nombor akaun bank yang sah ';
$lang['ms_MY']['Form']['VALIDATIONCREDITNUMBER'] = 'Pastikan yang anada telah memasukkan nombor kredit kad yang betul.';
$lang['ms_MY']['Form']['VALIDATIONFAILED'] = 'Pengesahan gagal';
$lang['ms_MY']['Form']['VALIDATIONNOTUNIQUE'] = 'Nilai yang dimasukkan tidak unik';
$lang['ms_MY']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Kata-kata laluan tidak sepadan';
$lang['ms_MY']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Kata laluan tidak boleh dibiarkan kosong';
$lang['ms_MY']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Kata lalaun mesti mengandungi sekurang-kurangnya satu nombor dan satu huruf';
$lang['ms_MY']['Form']['VALIDATOR'] = 'Pengesah';
$lang['ms_MY']['Form']['VALIDCURRENCY'] = 'Masukkan matawang yang sah.';
$lang['ms_MY']['Group']['Code'] = 'Kod Kumpulan';
$lang['ms_MY']['Group']['has_many_Permissions'] = 'Keizinan';
$lang['ms_MY']['Group']['Locked'] = 'Dikuncikan?';
$lang['ms_MY']['Group']['many_many_Members'] = 'Ahli-ahli';
$lang['ms_MY']['Group']['Parent'] = 'Kumpulan Induk';
$lang['ms_MY']['Group']['PLURALNAME'] = 'Kumpulan-kumpulan';
$lang['ms_MY']['Group']['SINGULARNAME'] = 'Kumpulan';
$lang['ms_MY']['GSTNumberField']['VALIDATION'] = 'Sila masukkan nombor GST yang sah';
$lang['ms_MY']['HtmlEditorField']['ANCHOR'] = 'Masuk/sunting sauh';
$lang['ms_MY']['HtmlEditorField']['BULLETLIST'] = 'Senarai bullet-point';
$lang['ms_MY']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Align center';
$lang['ms_MY']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Justify';
$lang['ms_MY']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Align left';
$lang['ms_MY']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Jajar kanan';
$lang['ms_MY']['HtmlEditorField']['BUTTONBOLD'] = 'Bold (Ctrl+B)';
$lang['ms_MY']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Masukkan Flash';
$lang['ms_MY']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Masukkan imej';
$lang['ms_MY']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Masukkan pautan';
$lang['ms_MY']['HtmlEditorField']['BUTTONITALIC'] = 'Italic (Ctrl+I)';
$lang['ms_MY']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Hapuskan pautan';
$lang['ms_MY']['HtmlEditorField']['BUTTONSTRIKE'] = 'strikethrough';
$lang['ms_MY']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Underline (Ctrl+U)';
$lang['ms_MY']['HtmlEditorField']['CHARMAP'] = 'Masukkan simbol';
$lang['ms_MY']['HtmlEditorField']['COPY'] = 'Salin (Ctrl+C)';
$lang['ms_MY']['HtmlEditorField']['CREATEFOLDER'] = 'cipta folder';
$lang['ms_MY']['HtmlEditorField']['CSSCLASS'] = 'Penjajaran / gaya';
$lang['ms_MY']['HtmlEditorField']['CSSCLASSCENTER'] = 'Di tengah-tengah, bersendirian.';
$lang['ms_MY']['HtmlEditorField']['CSSCLASSLEFT'] = 'Di sebelah kiri, dengan kata-kata menyelubungi.';
$lang['ms_MY']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Di sebelah kanan, dengan kata-kata menyelubungi.';
$lang['ms_MY']['HtmlEditorField']['CUT'] = 'Potong (Ctrl+X)';
$lang['ms_MY']['HtmlEditorField']['DELETECOL'] = 'Hapuskan lajur';
$lang['ms_MY']['HtmlEditorField']['DELETEROW'] = 'Hapuskan barisan';
$lang['ms_MY']['HtmlEditorField']['EDITCODE'] = 'Sunting Kod HTMl';
$lang['ms_MY']['HtmlEditorField']['EMAIL'] = 'Alamat emel';
$lang['ms_MY']['HtmlEditorField']['FILE'] = 'Fail';
$lang['ms_MY']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['ms_MY']['HtmlEditorField']['FOLDER'] = 'Fail lipatan';
$lang['ms_MY']['HtmlEditorField']['FOLDERCANCEL'] = 'batal';
$lang['ms_MY']['HtmlEditorField']['FORMATADDR'] = 'Alamat';
$lang['ms_MY']['HtmlEditorField']['FORMATH1'] = 'Kepala Tajuk 1';
$lang['ms_MY']['HtmlEditorField']['FORMATH2'] = 'Kepala Tajuk 2';
$lang['ms_MY']['HtmlEditorField']['FORMATH3'] = 'Kepala Tajuk 3';
$lang['ms_MY']['HtmlEditorField']['FORMATH4'] = 'Kepala Tajuk 4';
$lang['ms_MY']['HtmlEditorField']['FORMATH5'] = 'Kepala Tajuk 5';
$lang['ms_MY']['HtmlEditorField']['FORMATH6'] = 'Kepala Tajuk 6';
$lang['ms_MY']['HtmlEditorField']['FORMATP'] = 'Perenggan';
$lang['ms_MY']['HtmlEditorField']['FORMATPRE'] = 'Susun Atur Tertertap';
$lang['ms_MY']['HtmlEditorField']['HR'] = 'Masukkan garis melintang';
$lang['ms_MY']['HtmlEditorField']['IMAGE'] = 'Imej';
$lang['ms_MY']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Dimensi-dimensi';
$lang['ms_MY']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Tinggi';
$lang['ms_MY']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Lebar';
$lang['ms_MY']['HtmlEditorField']['INDENT'] = 'Tambahkan engsot';
$lang['ms_MY']['HtmlEditorField']['INSERTCOLAFTER'] = 'Masukkan lajur selepas';
$lang['ms_MY']['HtmlEditorField']['INSERTCOLBEF'] = 'Masukkan lajur sebelum';
$lang['ms_MY']['HtmlEditorField']['INSERTROWAFTER'] = 'Masukkan baris selepas';
$lang['ms_MY']['HtmlEditorField']['INSERTROWBEF'] = 'Masukkan baris sebelum';
$lang['ms_MY']['HtmlEditorField']['INSERTTABLE'] = 'Masukkan jadual';
$lang['ms_MY']['HtmlEditorField']['LINK'] = 'Pautan';
$lang['ms_MY']['HtmlEditorField']['LINKDESCR'] = 'Deskripsi pautan';
$lang['ms_MY']['HtmlEditorField']['LINKEMAIL'] = 'Alamat emel';
$lang['ms_MY']['HtmlEditorField']['LINKEXTERNAL'] = 'Halaman web lain';
$lang['ms_MY']['HtmlEditorField']['LINKFILE'] = 'Muat turun fail';
$lang['ms_MY']['HtmlEditorField']['LINKINTERNAL'] = 'Laman dalam tapak';
$lang['ms_MY']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Buka pautan dalam tetingkap baru?';
$lang['ms_MY']['HtmlEditorField']['LINKTO'] = 'Paut ke';
$lang['ms_MY']['HtmlEditorField']['OK'] = 'ok';
$lang['ms_MY']['HtmlEditorField']['OL'] = 'Senarai bernombor';
$lang['ms_MY']['HtmlEditorField']['OUTDENT'] = 'Decrease outdent';
$lang['ms_MY']['HtmlEditorField']['PAGE'] = 'Halaman';
$lang['ms_MY']['HtmlEditorField']['PASTE'] = 'Tampal (Ctrl+V)';
$lang['ms_MY']['HtmlEditorField']['REDO'] = 'Buat Semula (Ctrl+Y)';
$lang['ms_MY']['HtmlEditorField']['UNDO'] = 'Buat Asal (Ctrl+Z)';
$lang['ms_MY']['HtmlEditorField']['UNLINK'] = 'Singkirkan pautan';
$lang['ms_MY']['HtmlEditorField']['UPLOAD'] = 'muat naik';
$lang['ms_MY']['HtmlEditorField']['URL'] = 'URL';
$lang['ms_MY']['HtmlEditorField']['VISUALAID'] = 'Pamerkan/sembunyikan garis-garis panduan';
$lang['ms_MY']['Image']['PLURALNAME'] = 'Fail-fail';
$lang['ms_MY']['Image']['SINGULARNAME'] = 'Fail';
$lang['ms_MY']['Image_iframe.ss']['TITLE'] = 'Iframe untuk memuatnaik imej';
$lang['ms_MY']['LoginAttempt']['Email'] = 'Alamat Emel';
$lang['ms_MY']['LoginAttempt']['PLURALNAME'] = 'Percubaan-percubaan Daftar Masuk';
$lang['ms_MY']['LoginAttempt']['SINGULARNAME'] = 'Percubaan Daftar Masuk';
$lang['ms_MY']['Member']['ADDRESS'] = 'Alamat';
$lang['ms_MY']['Member']['belongs_many_many_Groups'] = 'Kumpulan-kumpulan';
$lang['ms_MY']['Member']['BUTTONCHANGEPASSWORD'] = 'Ubah Kata Lalaun';
$lang['ms_MY']['Member']['BUTTONLOGIN'] = 'Daftar masuk';
$lang['ms_MY']['Member']['BUTTONLOGINOTHER'] = 'Daftar masuk mengunakan id pengguna yang lain';
$lang['ms_MY']['Member']['BUTTONLOSTPASSWORD'] = 'Saya telah hilang kata lalaun saya';
$lang['ms_MY']['Member']['CONFIRMNEWPASSWORD'] = 'Sahkan Katalaluan Baru';
$lang['ms_MY']['Member']['CONFIRMPASSWORD'] = 'Sahkan Kata Lalaun';
$lang['ms_MY']['Member']['CONTACTINFO'] = 'Cara menghubungi';
$lang['ms_MY']['Member']['db_LockedOutUntil'] = 'Dikuncikan keluar sehingga';
$lang['ms_MY']['Member']['db_Password'] = 'Kata Laluan';
$lang['ms_MY']['Member']['db_PasswordExpiry'] = 'Tempoh Tamat Kata Lalaun';
$lang['ms_MY']['Member']['EMAIL'] = 'Emel';
$lang['ms_MY']['Member']['EMAILSIGNUPINTRO1'] = 'Terima kasih atas pendaftaran sebagai ahli baru, butir-butir keahlian anda disenaraikan di bawah untuk rujukan masa depan.';
$lang['ms_MY']['Member']['EMAILSIGNUPINTRO2'] = 'Anda kini boleh mendaftar masuk ke laman ini menggunakan madat di bawah';
$lang['ms_MY']['Member']['EMAILSIGNUPSUBJECT'] = 'Terima kasih atas pendaftaran';
$lang['ms_MY']['Member']['ENTEREMAIL'] = 'Sila masukkan alamat emel untuk mendapatkan pautan menganjak kata lalaun';
$lang['ms_MY']['Member']['ERRORLOCKEDOUT'] = 'Akaun anda sedang digantung sementara kerana terlalu banyak cubaan daftar masuk yang gagal. Sila cuba lagi selepas 20 minit.';
$lang['ms_MY']['Member']['ERRORNEWPASSWORD'] = 'Kata Lalaun baru yang dimasukkan tidak sepadan, sila cuba semula';
$lang['ms_MY']['Member']['ERRORPASSWORDNOTMATCH'] = 'Kata lalaun semasa tidak sepadan, sila cuba semula';
$lang['ms_MY']['Member']['ERRORWRONGCRED'] = 'Alamat email atau kataluan yang dimasukkan tidak tepat. Sila cuba lagi.';
$lang['ms_MY']['Member']['FIRSTNAME'] = 'Nama';
$lang['ms_MY']['Member']['GREETING'] = 'Selamat Datang';
$lang['ms_MY']['Member']['INTERFACELANG'] = 'Bahasa antaramuka';
$lang['ms_MY']['Member']['LOGGEDINAS'] = 'Anda berdaftar masuk sebagai %s.';
$lang['ms_MY']['Member']['MOBILE'] = 'Telefon bimbit';
$lang['ms_MY']['Member']['NAME'] = 'Nama';
$lang['ms_MY']['Member']['NEWPASSWORD'] = 'Katalaluan Baru';
$lang['ms_MY']['Member']['PASSWORD'] = 'Kata Lalaun';
$lang['ms_MY']['Member']['PASSWORDCHANGED'] = 'Kata lalaun anda telah diubah, dan satu salinan dihantar kepada emel anda.';
$lang['ms_MY']['Member']['PERSONALDETAILS'] = 'Butiran Peribadi';
$lang['ms_MY']['Member']['PHONE'] = 'Telefon';
$lang['ms_MY']['Member']['PLURALNAME'] = 'Ahli-ahli';
$lang['ms_MY']['Member']['REMEMBERME'] = 'Ingat (butiran login) saya selepas ini?';
$lang['ms_MY']['Member']['SINGULARNAME'] = 'Ahli';
$lang['ms_MY']['Member']['SUBJECTPASSWORDCHANGED'] = 'Kata lalaun anda telah ditukar';
$lang['ms_MY']['Member']['SUBJECTPASSWORDRESET'] = 'Pautan penukaran kata lalaun anda';
$lang['ms_MY']['Member']['SURNAME'] = 'Nama keluarga';
$lang['ms_MY']['Member']['USERDETAILS'] = 'Butiran Pengguna';
$lang['ms_MY']['Member']['VALIDATIONMEMBEREXISTS'] = 'Email ini telah digunakan oleh ahli lain';
$lang['ms_MY']['Member']['WELCOMEBACK'] = 'Selamat berjumpa kembali, %s';
$lang['ms_MY']['Member']['YOUROLDPASSWORD'] = 'Kata lalaun lama anda';
$lang['ms_MY']['MemberAuthenticator']['TITLE'] = 'Email &amp; katalaluan';
$lang['ms_MY']['MemberPassword']['PLURALNAME'] = 'Kata-kata kunci Ahli';
$lang['ms_MY']['MemberPassword']['SINGULARNAME'] = 'Kata Kunci Ahli';
$lang['ms_MY']['NumericField']['VALIDATION'] = '\'%s\' bukan nombor, hanya nombor-nombor boleh diterima untuk medan ini';
$lang['ms_MY']['Page']['PLURALNAME'] = 'Halaman-halaman';
$lang['ms_MY']['Page']['SINGULARNAME'] = 'Halaman';
$lang['ms_MY']['Permission']['FULLADMINRIGHTS'] = 'Hak mutlah pentadbiran';
$lang['ms_MY']['Permission']['PLURALNAME'] = 'Kebenaran-kebenaran';
$lang['ms_MY']['Permission']['SINGULARNAME'] = 'Kebenaran';
$lang['ms_MY']['PhoneNumberField']['VALIDATION'] = 'Sila isikan nombor telefon yang sah';
$lang['ms_MY']['QueuedEmail']['PLURALNAME'] = 'Emel-emel Dibaris Gilir';
$lang['ms_MY']['QueuedEmail']['SINGULARNAME'] = 'Emel Dibaris Gilir';
$lang['ms_MY']['RedirectorPage']['HASBEENSETUP'] = 'Mukasurat pengalih destinasi dihasilkan tanpa menyatakan destinasi alihan.';
$lang['ms_MY']['RedirectorPage']['HEADER'] = 'Mukasurat ini akan mengalih pengguna ke mukasurat lain';
$lang['ms_MY']['RedirectorPage']['OTHERURL'] = 'URL laman web lain';
$lang['ms_MY']['RedirectorPage']['PLURALNAME'] = 'Laman-laman Pengarah Semula';
$lang['ms_MY']['RedirectorPage']['REDIRECTTO'] = 'Alihkan ke';
$lang['ms_MY']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Laman web lain';
$lang['ms_MY']['RedirectorPage']['REDIRECTTOPAGE'] = 'Tambah halaman ke laman anda';
$lang['ms_MY']['RedirectorPage']['SINGULARNAME'] = 'Laman Pengarah Semula';
$lang['ms_MY']['RedirectorPage']['YOURPAGE'] = 'Halaman di laman anda';
$lang['ms_MY']['RelationComplexTableField.ss']['ADD'] = 'Tambah';
$lang['ms_MY']['Security']['ALREADYLOGGEDIN'] = 'Anda tidak mempunyai kebenaran untuk mencapai mukasurat ini. Jika anda mempunyai akaun lain dengan kebenaran yang deperlukan, sila daftar masuk di bawah.';
$lang['ms_MY']['Security']['BUTTONSEND'] = 'Hantar pautan penukaran katalaluan kepada saya';
$lang['ms_MY']['Security']['CHANGEPASSWORDBELOW'] = 'Anda boleh menukar kata laluan di bawah.';
$lang['ms_MY']['Security']['CHANGEPASSWORDHEADER'] = 'Tukar kata laluan anda';
$lang['ms_MY']['Security']['EMAIL'] = 'E-Mel:';
$lang['ms_MY']['Security']['ENTERNEWPASSWORD'] = 'Masukkan kata laluan yang baru';
$lang['ms_MY']['Security']['ERRORPASSWORDPERMISSION'] = 'Anda perlu didaftarkan masuk untuk menukar katalaluan.';
$lang['ms_MY']['Security']['ID'] = 'ID pengguna';
$lang['ms_MY']['Security']['LOGGEDOUT'] = 'Anda telah mendaftar keluar. Untuk mendaftar masuk semula, masukkan maklumat yang diperlukan di bawah.';
$lang['ms_MY']['Security']['LOSTPASSWORDHEADER'] = 'Hilang Kata Lalaun';
$lang['ms_MY']['Security']['NOTEPAGESECURED'] = 'Halaman ini adalah halaman berkeselamatan tinggi. Masukkan maklumat yang deperlukan sebelum meneruskan capaian. ';
$lang['ms_MY']['Security']['NOTERESETPASSWORD'] = 'Masukkan alamat emel dan kami akan hantar pautan untuk menukar kata laluan anda.';
$lang['ms_MY']['Security']['PASSWORDSENTHEADER'] = 'Pautan penukaran kata laluan telah dihantar ke \'%s\'';
$lang['ms_MY']['Security']['PASSWORDSENTTEXT'] = 'Terima kasih! Pautan penukaran kata laluan telah dihantar ke \'%s\'';
$lang['ms_MY']['SimpleImageField']['NOUPLOAD'] = 'Tiada imej dimuat naikkan';
$lang['ms_MY']['SiteTree']['ACCESSANYONE'] = 'Sesiapa sahaja';
$lang['ms_MY']['SiteTree']['ACCESSHEADER'] = 'Siapa yang boleh melihat mukasurat ini?';
$lang['ms_MY']['SiteTree']['ACCESSLOGGEDIN'] = 'Pengguna berdaftar masuk';
$lang['ms_MY']['SiteTree']['ACCESSONLYTHESE'] = 'Hanya pengguna berikut (pilih dari senarai)';
$lang['ms_MY']['SiteTree']['ADDEDTODRAFT'] = 'Telah ditambah ke laman draf';
$lang['ms_MY']['SiteTree']['ALLOWCOMMENTS'] = 'Terima komen untuk mukasurat ini?';
$lang['ms_MY']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Kandungan ini juga digunakan sebagai halaman maya dalam bahagian %s';
$lang['ms_MY']['SiteTree']['BUTTONCANCELDRAFT'] = 'Batalkan perubahan ke atas draf';
$lang['ms_MY']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Hapus draf dan kembalikan ke mukasurat asal yang telah diterbitkan';
$lang['ms_MY']['SiteTree']['BUTTONSAVEPUBLISH'] = 'SImpan & terbitkan';
$lang['ms_MY']['SiteTree']['BUTTONUNPUBLISH'] = 'Tidak diterbitkan';
$lang['ms_MY']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Hapus mukasurat ini dari laman sebenar';
$lang['ms_MY']['SiteTree']['CHANGETO'] = 'Ubah kepada';
$lang['ms_MY']['SiteTree']['Content'] = 'Kandungan';
$lang['ms_MY']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Anda bole isikan kandungan anda sendiri ke dalam mukasurat ini. atau padamkannya dan hasilkan mukasurat yang baru untuk menggantikannya.<br /></p>';
$lang['ms_MY']['SiteTree']['DEFAULTABOUTTITLE'] = 'Tentang Kami';
$lang['ms_MY']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Anda bole isikan kandungan anda sendiri ke dalam mukasurat ini. atau padamkannya dan hasilkan mukasurat yang baru untuk menggantikannya.<br /></p>';
$lang['ms_MY']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Hubungi Kami';
$lang['ms_MY']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Selamat datang ke laman SilverStripe! Ini adalah laman utama yang asal. Anda boleh menyunting mukasurat ini dengan menggunakan <a href="admin/">CMS yang disediakan</a>. Untuk bantuan, sila lawati <a href="http://doc.silverstripe.com">dukumentasi pembangun perisian</a>, atau mula menggunakan <a href="http://doc.silverstripe.com/doku.php?id=tutorials">dokumen tutorial.</a></p>';
$lang['ms_MY']['SiteTree']['DEFAULTHOMETITLE'] = 'Utama';
$lang['ms_MY']['SiteTree']['EDITANYONE'] = 'Sesiapa sahaja yang boleh mendaftar masuk ke CMS';
$lang['ms_MY']['SiteTree']['EDITHEADER'] = 'Siapa yang boleh melakukan penyuntingan menggunakan CMS?';
$lang['ms_MY']['SiteTree']['EDITONLYTHESE'] = 'Hanya pengguna berikut (pilih dari senarai)';
$lang['ms_MY']['SiteTree']['HASBROKENLINKS'] = 'Mukasurat ini mengandungi pautan bermasalah.';
$lang['ms_MY']['SiteTree']['has_one_Parent'] = 'Halaman Induk';
$lang['ms_MY']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domain';
$lang['ms_MY']['SiteTree']['HomepageForDomain'] = 'Laman web untuk domain ini';
$lang['ms_MY']['SiteTree']['HTMLEDITORTITLE'] = 'Kandungan';
$lang['ms_MY']['SiteTree']['MENUTITLE'] = 'Label navigasi';
$lang['ms_MY']['SiteTree']['METADESC'] = 'Keterangan';
$lang['ms_MY']['SiteTree']['METAEXTRA'] = 'Label-meta khas';
$lang['ms_MY']['SiteTree']['METAHEADER'] = 'Enjin carian label-meta';
$lang['ms_MY']['SiteTree']['METAKEYWORDS'] = 'Katakunci';
$lang['ms_MY']['SiteTree']['METATITLE'] = 'Tajuk';
$lang['ms_MY']['SiteTree']['MODIFIEDONDRAFT'] = 'Telah diubah di laman draf';
$lang['ms_MY']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Gunakan mukasurat ini sebagai muka utama untuk domain berikut: (pisahkan domain yang berlainan menggunakan koma)';
$lang['ms_MY']['SiteTree']['PAGESLINKING'] = 'Halaman-halaman berikut dipautkan ke halaman ini:';
$lang['ms_MY']['SiteTree']['PAGETITLE'] = 'Nama halaman';
$lang['ms_MY']['SiteTree']['PAGETYPE'] = 'Jenis halaman';
$lang['ms_MY']['SiteTree']['PLURALNAME'] = 'Pokok-pokok Halaman';
$lang['ms_MY']['SiteTree']['REMOVEDFROMDRAFT'] = 'Hapuskan dari laman draf';
$lang['ms_MY']['SiteTree']['SHOWINMENUS'] = 'Paparkan di menu?';
$lang['ms_MY']['SiteTree']['SHOWINSEARCH'] = 'Paparkan di carian?';
$lang['ms_MY']['SiteTree']['SINGULARNAME'] = 'Pokok Halaman';
$lang['ms_MY']['SiteTree']['TABACCESS'] = 'Capaian';
$lang['ms_MY']['SiteTree']['TABBACKLINKS'] = 'Pautan kembali';
$lang['ms_MY']['SiteTree']['TABBEHAVIOUR'] = 'Perilaku';
$lang['ms_MY']['SiteTree']['TABCONTENT'] = 'Kandungan';
$lang['ms_MY']['SiteTree']['TABMAIN'] = 'Utama';
$lang['ms_MY']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['ms_MY']['SiteTree']['TABREPORTS'] = 'Laporan';
$lang['ms_MY']['SiteTree']['TODOHELP'] = '<p>Gunakan kemudahan ini untuk tujuan pemantauan tugasan yang perlu dilakukan untuk laman web anda. Untuk melihat kesemua mukasurat yang mengandungi maklumat \'untuk tidakan\', buka \'Laporan laman\' di kiri dan pilih \'Untuk Tindakan\'</p>';
$lang['ms_MY']['SiteTree']['TOPLEVEL'] = 'Kandungan Laman (Peringkat Atas)';
$lang['ms_MY']['SiteTree']['URL'] = 'URL';
$lang['ms_MY']['SiteTree']['URLSegment'] = 'Segmen URL';
$lang['ms_MY']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'URL telah sedia digunakan ileh mukasurat lain. Setiap mukasurat memerlukan URL yang unik';
$lang['ms_MY']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL hanya boleh mengandungi huruf, nombor dan tanda sengkang.';
$lang['ms_MY']['TableField']['ISREQUIRED'] = '\'%s\' diperlukan dalam %s.';
$lang['ms_MY']['TableField.ss']['CSVEXPORT'] = 'Eksport ke CSV';
$lang['ms_MY']['TableListField_PageControls.ss']['DISPLAYING'] = 'Memaparkan';
$lang['ms_MY']['TableListField_PageControls.ss']['TO'] = 'ke';
$lang['ms_MY']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Lihat pertama';
$lang['ms_MY']['TableListField_PageControls.ss']['VIEWLAST'] = 'Lihat terakhir';
$lang['ms_MY']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Lihat berikut';
$lang['ms_MY']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Lihat dahulu';
$lang['ms_MY']['ToggleCompositeField.ss']['HIDE'] = 'Sembunyikan';
$lang['ms_MY']['ToggleCompositeField.ss']['SHOW'] = 'Paparkan';
$lang['ms_MY']['ToggleField']['LESS'] = 'kurang';
$lang['ms_MY']['ToggleField']['MORE'] = 'lebih';
$lang['ms_MY']['Translatable']['CREATE'] = 'Hasilkan terjemahan baru';
$lang['ms_MY']['Translatable']['CREATEBUTTON'] = 'Hasilkan';
$lang['ms_MY']['Translatable']['EXISTING'] = 'Terjemahan sedia ada';
$lang['ms_MY']['Translatable']['NEWLANGUAGE'] = 'Bahasa Baru';
$lang['ms_MY']['Translatable']['TRANSLATIONS'] = 'Terjemahan';
$lang['ms_MY']['Versioned']['has_many_Versions'] = 'Versi-versi';
$lang['ms_MY']['VirtualPage']['CHOOSE'] = 'Pilih mukasurat yang ingin di pautkan';
$lang['ms_MY']['VirtualPage']['EDITCONTENT'] = 'klik di sini untuk menyunting kandungan';
$lang['ms_MY']['VirtualPage']['HEADER'] = 'Ini adalah mukasurat maya';
$lang['ms_MY']['VirtualPage']['PLURALNAME'] = 'Halaman-halaman Maya';
$lang['ms_MY']['VirtualPage']['SINGULARNAME'] = 'Halaman Maya';
$lang['ms_MY']['Widget']['PLURALNAME'] = 'Widget-widget';
$lang['ms_MY']['Widget']['SINGULARNAME'] = 'Widjet';
$lang['ms_MY']['WidgetArea']['PLURALNAME'] = 'Kawasan-kawasan Widjet';
$lang['ms_MY']['WidgetArea']['SINGULARNAME'] = 'Kawasan Widjet';

?>