<?php

/**
 * Norwegian Bokmal (Norway) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('nb_NO', $lang) && is_array($lang['nb_NO'])) {
	$lang['nb_NO'] = array_merge($lang['en_US'], $lang['nb_NO']);
} else {
	$lang['nb_NO'] = $lang['en_US'];
}

$lang['nb_NO']['AdvancedSearchForm']['ALLWORDS'] = 'Alle Ord';
$lang['nb_NO']['AdvancedSearchForm']['ATLEAST'] = 'Minst Ett Av Ordene';
$lang['nb_NO']['AdvancedSearchForm']['EXACT'] = 'Eksakt frase';
$lang['nb_NO']['AdvancedSearchForm']['FROM'] = 'Fra';
$lang['nb_NO']['AdvancedSearchForm']['GO'] = 'Utfør';
$lang['nb_NO']['AdvancedSearchForm']['LASTUPDATED'] = 'Sist oppdatert';
$lang['nb_NO']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'SIST OPPDATERT';
$lang['nb_NO']['AdvancedSearchForm']['PAGETITLE'] = 'Side tittel';
$lang['nb_NO']['AdvancedSearchForm']['RELEVANCE'] = 'Relevans';
$lang['nb_NO']['AdvancedSearchForm']['SEARCHBY'] = 'SØK ETTER';
$lang['nb_NO']['AdvancedSearchForm']['SORTBY'] = 'SORTER RESULTATENE ETTER';
$lang['nb_NO']['AdvancedSearchForm']['TO'] = 'Til';
$lang['nb_NO']['AdvancedSearchForm']['WITHOUT'] = 'Uten Ordene';
$lang['nb_NO']['BankAccountField']['VALIDATIONJS'] = 'Fyll inn et gyldig kontonummer';
$lang['nb_NO']['BasicAuth']['ENTERINFO'] = 'Vennligst tast inn et brukernavn og passord';
$lang['nb_NO']['BasicAuth']['ERRORNOTADMIN'] = 'Denne brukeren er ikke administrator.';
$lang['nb_NO']['BasicAuth']['ERRORNOTREC'] = 'Det brukernavnet / Passord er ikke gjenkjent';
$lang['nb_NO']['BBCodeParser']['ALIGNEMENT'] = 'Stilling';
$lang['nb_NO']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'Stilt til høyre';
$lang['nb_NO']['BBCodeParser']['BOLD'] = 'Fet Tekst';
$lang['nb_NO']['BBCodeParser']['BOLDEXAMPLE'] = 'Fet';
$lang['nb_NO']['BBCodeParser']['CODE'] = 'Kodeblokk';
$lang['nb_NO']['BBCodeParser']['CODEDESCRIPTION'] = 'Uformatert kodeblokk';
$lang['nb_NO']['BBCodeParser']['CODEEXAMPLE'] = 'Kodeblokk';
$lang['nb_NO']['BBCodeParser']['COLORED'] = 'Farget tekst';
$lang['nb_NO']['BBCodeParser']['COLOREDEXAMPLE'] = 'blå tekst';
$lang['nb_NO']['BBCodeParser']['EMAILLINK'] = 'Epost link';
$lang['nb_NO']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Opprett link til en epostaddresse';
$lang['nb_NO']['BBCodeParser']['IMAGE'] = 'Bilde';
$lang['nb_NO']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Vis et bilde i posten din';
$lang['nb_NO']['BBCodeParser']['ITALIC'] = 'Kursiv Tekst';
$lang['nb_NO']['BBCodeParser']['ITALICEXAMPLE'] = 'Kursiv';
$lang['nb_NO']['BBCodeParser']['LINK'] = 'Webside link';
$lang['nb_NO']['BBCodeParser']['LINKDESCRIPTION'] = 'Link til en ekstern nettside eller URL';
$lang['nb_NO']['BBCodeParser']['STRUCK'] = 'Gjennomstreket Tekst';
$lang['nb_NO']['BBCodeParser']['STRUCKEXAMPLE'] = 'Gjennomstreket';
$lang['nb_NO']['BBCodeParser']['UNDERLINE'] = 'Understreket Tekst';
$lang['nb_NO']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Understreket';
$lang['nb_NO']['BBCodeParser']['UNORDERED'] = 'Punktliste';
$lang['nb_NO']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Punktliste';
$lang['nb_NO']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'punkt 1';
$lang['nb_NO']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Du har byttet passordet for';
$lang['nb_NO']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Du kan nå bruke følgende informasjon for å logge deg inn:';
$lang['nb_NO']['ChangePasswordEmail.ss']['EMAIL'] = 'Epost';
$lang['nb_NO']['ChangePasswordEmail.ss']['HELLO'] = 'Hei';
$lang['nb_NO']['ChangePasswordEmail.ss']['PASSWORD'] = 'Passord';
$lang['nb_NO']['CMSMain']['DELETE'] = 'Slett fra utkast side';
$lang['nb_NO']['CMSMain']['DELETEFP'] = 'Slett fra publisert side';
$lang['nb_NO']['CMSMain']['RESTORE'] = 'Gjenopprett';
$lang['nb_NO']['CMSMain']['SAVE'] = 'Lagre';
$lang['nb_NO']['ComplexTableField']['CLOSEPOPUP'] = 'Lukk Popup';
$lang['nb_NO']['ComplexTableField.ss']['ADDITEM'] = 'Legg til %s';
$lang['nb_NO']['ComplexTableField.ss']['CSVEXPORT'] = 'Eksporter til CSV';
$lang['nb_NO']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Ingen elementer funnet';
$lang['nb_NO']['ComplexTableField.ss']['SORTASC'] = 'Sorter stigende';
$lang['nb_NO']['ComplexTableField.ss']['SORTDESC'] = 'Sorter fallende';
$lang['nb_NO']['ComplexTableField']['SUCCESSADD'] = 'Lagt til %s %s %s';
$lang['nb_NO']['ComplexTableField']['SUCCESSEDIT'] = 'Lagret %s %s %s';
$lang['nb_NO']['ComplexTableField_popup.ss']['NEXT'] = 'Neste';
$lang['nb_NO']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Forrige';
$lang['nb_NO']['CompositeDateField']['DAY'] = 'Dag';
$lang['nb_NO']['CompositeDateField']['DAYJS'] = 'dag';
$lang['nb_NO']['CompositeDateField']['MONTH'] = 'Måned';
$lang['nb_NO']['CompositeDateField']['MONTHJS'] = 'måned';
$lang['nb_NO']['CompositeDateField']['VALIDATIONJS1'] = 'Vennligst se etter at du har satt';
$lang['nb_NO']['CompositeDateField']['VALIDATIONJS2'] = 'riktig.';
$lang['nb_NO']['CompositeDateField']['YEARJS'] = 'år';
$lang['nb_NO']['ConfirmedFormAction']['CONFIRMATION'] = 'Er du sikker?';
$lang['nb_NO']['ConfirmedPasswordField']['ATLEAST'] = 'Passord må ha minst %s bokstaver.';
$lang['nb_NO']['ConfirmedPasswordField']['BETWEEN'] = 'Passord må være mellom %s og %s bokstaver.';
$lang['nb_NO']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Passordet må stemme overens.';
$lang['nb_NO']['ConfirmedPasswordField']['LEASTONE'] = 'Passord må ha minst en bokstav og et tall.';
$lang['nb_NO']['ConfirmedPasswordField']['MAXIMUM'] = 'Passord kan ikke være lenger enn %s bokstaver.';
$lang['nb_NO']['ConfirmedPasswordField']['NOEMPTY'] = 'Passordet kan ikke være blankt.';
$lang['nb_NO']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Endre Passord';
$lang['nb_NO']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Du må være logget inn i kontrollpanelet for å se utkast eller det arkiverte innholdet. <a href="%s">Klikk her for å gå tilbake til den publiserte versjonen.</a>';
$lang['nb_NO']['CreditCardField']['FIRST'] = 'første';
$lang['nb_NO']['CreditCardField']['FOURTH'] = 'fjerde';
$lang['nb_NO']['CreditCardField']['SECOND'] = 'andre';
$lang['nb_NO']['CreditCardField']['THIRD'] = 'tredje';
$lang['nb_NO']['CreditCardField']['VALIDATIONJS1'] = 'Vennligst se etter at du har skrevet';
$lang['nb_NO']['CreditCardField']['VALIDATIONJS2'] = 'kredittkortnummeret riktig.';
$lang['nb_NO']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['nb_NO']['CurrencyField']['VALIDATIONJS'] = 'Vennligst oppgi en gyldig valuta.';
$lang['nb_NO']['DataObject']['PLURALNAME'] = 'Data Objekter';
$lang['nb_NO']['DataObject']['SINGULARNAME'] = 'Data Objekt';
$lang['nb_NO']['Date']['DAY'] = 'dag';
$lang['nb_NO']['Date']['DAYS'] = 'dager';
$lang['nb_NO']['Date']['HOUR'] = 'time';
$lang['nb_NO']['Date']['HOURS'] = 'timer';
$lang['nb_NO']['Date']['MIN'] = 'minutter';
$lang['nb_NO']['Date']['MINS'] = 'minutter';
$lang['nb_NO']['Date']['MONTH'] = 'måned';
$lang['nb_NO']['Date']['MONTHS'] = 'måneder';
$lang['nb_NO']['Date']['SEC'] = 'sekund';
$lang['nb_NO']['Date']['SECS'] = 'sekunder';
$lang['nb_NO']['Date']['TIMEDIFFAGO'] = '%er siden';
$lang['nb_NO']['Date']['TIMEDIFFAWAY'] = '%er til';
$lang['nb_NO']['Date']['YEAR'] = 'år';
$lang['nb_NO']['Date']['YEARS'] = 'år';
$lang['nb_NO']['DateField']['NOTSET'] = 'mangler';
$lang['nb_NO']['DateField']['TODAY'] = 'i dag';
$lang['nb_NO']['DateField']['VALIDATIONJS'] = 'Vennligst skriv inn et gyldig datoformat (DD/MM/YYYY).';
$lang['nb_NO']['DateField']['VALIDDATEFORMAT'] = 'Vennligst tast inn et gyldig datoformat (DD/MM/YYYY).';
$lang['nb_NO']['DMYDateField']['VALIDDATEFORMAT'] = 'Vennligst skriv inn et gyldig datoformat (DD-MM-YYYY).';
$lang['nb_NO']['DropdownField']['CHOOSE'] = '(Velg)';
$lang['nb_NO']['EmailField']['VALIDATION'] = 'Vennligst legg inn en gyldig epost adresse.';
$lang['nb_NO']['EmailField']['VALIDATIONJS'] = 'Vennligst oppgi e-postadresse';
$lang['nb_NO']['ErrorPage']['400'] = '400 - Dårlig Sidespørring';
$lang['nb_NO']['ErrorPage']['401'] = '401 - Uautorisert';
$lang['nb_NO']['ErrorPage']['403'] = '403 - Forbudt';
$lang['nb_NO']['ErrorPage']['404'] = '404 - Ikke funnet';
$lang['nb_NO']['ErrorPage']['405'] = '405 - Metode ikke tillat';
$lang['nb_NO']['ErrorPage']['406'] = '406 - Ikke akseptabel';
$lang['nb_NO']['ErrorPage']['407'] = '407 - Proxy autentisering påkrevd';
$lang['nb_NO']['ErrorPage']['408'] = '408 - Sidespørring timeout';
$lang['nb_NO']['ErrorPage']['409'] = '409 - Konflikt';
$lang['nb_NO']['ErrorPage']['410'] = '410 - Borte';
$lang['nb_NO']['ErrorPage']['411'] = '411 - Lengde påkrevd';
$lang['nb_NO']['ErrorPage']['412'] = '412 - Prekondisjon feilet';
$lang['nb_NO']['ErrorPage']['413'] = '413 - Spørringsenhet for stor';
$lang['nb_NO']['ErrorPage']['414'] = '414 - Spørrings-URI for lang';
$lang['nb_NO']['ErrorPage']['415'] = '415 - Mediatype ikke støttet';
$lang['nb_NO']['ErrorPage']['416'] = '416 - Spørringsspenne kan ikke tilfredstilles';
$lang['nb_NO']['ErrorPage']['417'] = '417 - Forventning feilet';
$lang['nb_NO']['ErrorPage']['500'] = '500 - Intern serverfeil';
$lang['nb_NO']['ErrorPage']['501'] = '501 - Ikke implementert';
$lang['nb_NO']['ErrorPage']['502'] = '502 - Dårlig gateway';
$lang['nb_NO']['ErrorPage']['503'] = '503 - Service ikke tilgjengelig';
$lang['nb_NO']['ErrorPage']['504'] = '504 - Gateway timeout';
$lang['nb_NO']['ErrorPage']['505'] = '505 - HTTP versjon ikke støttet';
$lang['nb_NO']['ErrorPage']['CODE'] = 'Feilkode';
$lang['nb_NO']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Beklager, det ser ut til at du prøver å nå en side som ikke finnes.</p><p>Sjekk at du har skrevet riktig adresse og prøv på nytt.</p>';
$lang['nb_NO']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Finner ikke siden';
$lang['nb_NO']['ErrorPage']['PLURALNAME'] = 'Feil Sider';
$lang['nb_NO']['ErrorPage']['SINGULARNAME'] = 'Feil Side';
$lang['nb_NO']['File']['Content'] = 'Innhold';
$lang['nb_NO']['File']['Filename'] = 'Filnavn';
$lang['nb_NO']['File']['INVALIDEXTENSION'] = 'Filtypen er ikke tillatt';
$lang['nb_NO']['File']['Name'] = 'Navn';
$lang['nb_NO']['File']['NOFILESIZE'] = 'Filstørrelsen var 0 bytes.';
$lang['nb_NO']['File']['PLURALNAME'] = 'Filer';
$lang['nb_NO']['File']['SINGULARNAME'] = 'Fil';
$lang['nb_NO']['File']['Sort'] = 'Sorteringsrekkefølge';
$lang['nb_NO']['File']['Title'] = 'Tittel';
$lang['nb_NO']['File']['TOOLARGE'] = 'Filen er for stor, maks% er tillatt';
$lang['nb_NO']['Folder']['CREATED'] = 'Første gang lastet opp';
$lang['nb_NO']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Slett miniatyrbilder som ikke er i bruk';
$lang['nb_NO']['Folder']['DELSELECTED'] = 'Slett valgte filer';
$lang['nb_NO']['Folder']['DETAILSTAB'] = 'Detaljer';
$lang['nb_NO']['Folder']['FILENAME'] = 'Filnavn';
$lang['nb_NO']['Folder']['FILESTAB'] = 'Filer';
$lang['nb_NO']['Folder']['LASTEDITED'] = 'Sist oppdatert';
$lang['nb_NO']['Folder']['PLURALNAME'] = 'Filer';
$lang['nb_NO']['Folder']['SINGULARNAME'] = 'Fil';
$lang['nb_NO']['Folder']['TITLE'] = 'Tittel';
$lang['nb_NO']['Folder']['TYPE'] = 'Type';
$lang['nb_NO']['Folder']['UNUSEDFILESTAB'] = 'Filer ikke i bruk';
$lang['nb_NO']['Folder']['UNUSEDFILESTITLE'] = 'Filer ikke i bruk';
$lang['nb_NO']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Miniatyrbilder ikke i bruk';
$lang['nb_NO']['Folder']['UPLOADTAB'] = 'Last opp';
$lang['nb_NO']['Folder']['URL'] = 'URL';
$lang['nb_NO']['Folder']['VIEWASSET'] = 'Vis resurs';
$lang['nb_NO']['Folder']['VIEWEDITASSET'] = 'Vis/endre ressurs';
$lang['nb_NO']['ForgotPasswordEmail.ss']['HELLO'] = 'Hei';
$lang['nb_NO']['ForgotPasswordEmail.ss']['TEXT1'] = 'Her er din';
$lang['nb_NO']['ForgotPasswordEmail.ss']['TEXT2'] = 'passord resett link';
$lang['nb_NO']['ForgotPasswordEmail.ss']['TEXT3'] = 'for';
$lang['nb_NO']['Form']['DATENOTSET'] = '(Ingen dato er satt)';
$lang['nb_NO']['Form']['FIELDISREQUIRED'] = 'mangler %s';
$lang['nb_NO']['Form']['LANGAOTHER'] = 'Andre språk';
$lang['nb_NO']['Form']['LANGAVAIL'] = 'Tilgjengelige språk';
$lang['nb_NO']['Form']['NOTSET'] = '(Ikke satt)';
$lang['nb_NO']['Form']['VALIDATIONALLDATEVALUES'] = 'Vennligst se over at du har satt alle datoverdiene';
$lang['nb_NO']['Form']['VALIDATIONBANKACC'] = 'Vennligst skriv inn validert bankkonto nummer';
$lang['nb_NO']['Form']['VALIDATIONCREDITNUMBER'] = 'Vennligst se over at du har lagt inn kortnummer korrekt (%s)';
$lang['nb_NO']['Form']['VALIDATIONFAILED'] = 'Validering mislyktes';
$lang['nb_NO']['Form']['VALIDATIONNOTUNIQUE'] = 'Den spesifiserte verdien er ikke unik';
$lang['nb_NO']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Passordene passer ikke med hverandre';
$lang['nb_NO']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Passord kan ikke være tomt';
$lang['nb_NO']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Passord må ha minst ett tall og en bokstav';
$lang['nb_NO']['Form']['VALIDATOR'] = 'Validator';
$lang['nb_NO']['Form']['VALIDCURRENCY'] = 'Vennligst legg inn en gyldig valuta.';
$lang['nb_NO']['FormField']['NONE'] = 'ingen';
$lang['nb_NO']['Group']['Code'] = 'Gruppe Kode';
$lang['nb_NO']['Group']['Description'] = 'Beskrivelse';
$lang['nb_NO']['Group']['has_many_Permissions'] = 'Tillatelser';
$lang['nb_NO']['Group']['IPRestrictions'] = 'IP Adresse begrensning';
$lang['nb_NO']['Group']['Locked'] = 'Låst?';
$lang['nb_NO']['Group']['many_many_Members'] = 'Medlemmer';
$lang['nb_NO']['Group']['Parent'] = 'Foreldre Gruppe';
$lang['nb_NO']['Group']['PLURALNAME'] = 'Grupper';
$lang['nb_NO']['Group']['SINGULARNAME'] = 'Gruppe';
$lang['nb_NO']['Group']['Sort'] = 'Sorteringsrekkefølge';
$lang['nb_NO']['GSTNumberField']['VALIDATION'] = 'Vennligst tast inn et gyldig GST nummer';
$lang['nb_NO']['GSTNumberField']['VALIDATIONJS'] = 'Vennligst skriv inn et gyldig GST Nummer';
$lang['nb_NO']['HtmlEditorField']['ANCHOR'] = 'Sett inn/rediger ankerpunkt';
$lang['nb_NO']['HtmlEditorField']['ANCHORVALUE'] = 'Lenke';
$lang['nb_NO']['HtmlEditorField']['BULLETLIST'] = 'Unummerert liste';
$lang['nb_NO']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'midtstilt';
$lang['nb_NO']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Dekk hele';
$lang['nb_NO']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'venstrestilt';
$lang['nb_NO']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'høyrestilt';
$lang['nb_NO']['HtmlEditorField']['BUTTONBOLD'] = 'Fet (Ctr+B)';
$lang['nb_NO']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Sett inn Flash';
$lang['nb_NO']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'sett inn bilde';
$lang['nb_NO']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Sett inn lenke';
$lang['nb_NO']['HtmlEditorField']['BUTTONITALIC'] = 'Kursiv (Ctrl+I)';
$lang['nb_NO']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Fjern lenke';
$lang['nb_NO']['HtmlEditorField']['BUTTONSTRIKE'] = 'Gjennomstrek';
$lang['nb_NO']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Understrek (Ctrl+U)';
$lang['nb_NO']['HtmlEditorField']['CHARMAP'] = 'Sett inn symbol';
$lang['nb_NO']['HtmlEditorField']['CLOSE'] = 'lukk';
$lang['nb_NO']['HtmlEditorField']['COPY'] = 'Kopier (Ctrl+C)';
$lang['nb_NO']['HtmlEditorField']['CREATEFOLDER'] = 'opprett mappe';
$lang['nb_NO']['HtmlEditorField']['CSSCLASS'] = 'Stille opp / stil';
$lang['nb_NO']['HtmlEditorField']['CSSCLASSCENTER'] = 'Sentrert, alene.';
$lang['nb_NO']['HtmlEditorField']['CSSCLASSLEFT'] = 'På venstre side, med tekst rundt.';
$lang['nb_NO']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'På venstre side, alene.';
$lang['nb_NO']['HtmlEditorField']['CSSCLASSRIGHT'] = 'På høyde side, med tekst rundt.';
$lang['nb_NO']['HtmlEditorField']['CUT'] = 'Klipp ut (Ctrl+X)';
$lang['nb_NO']['HtmlEditorField']['DELETECOL'] = 'Slett kolonne';
$lang['nb_NO']['HtmlEditorField']['DELETEROW'] = 'Slett rad';
$lang['nb_NO']['HtmlEditorField']['EDITCODE'] = 'Endre HTML koden';
$lang['nb_NO']['HtmlEditorField']['EMAIL'] = 'Epost adresse';
$lang['nb_NO']['HtmlEditorField']['FILE'] = 'Fil';
$lang['nb_NO']['HtmlEditorField']['FLASH'] = 'Sett inn flash';
$lang['nb_NO']['HtmlEditorField']['FOLDER'] = 'Mappe';
$lang['nb_NO']['HtmlEditorField']['FOLDERCANCEL'] = 'avbryt';
$lang['nb_NO']['HtmlEditorField']['FORMATADDR'] = 'Adresse';
$lang['nb_NO']['HtmlEditorField']['FORMATH1'] = 'Overskrift 1';
$lang['nb_NO']['HtmlEditorField']['FORMATH2'] = 'Overskrift 2';
$lang['nb_NO']['HtmlEditorField']['FORMATH3'] = 'Overskrift 3';
$lang['nb_NO']['HtmlEditorField']['FORMATH4'] = 'Overskrift 4';
$lang['nb_NO']['HtmlEditorField']['FORMATH5'] = 'Overskrift 5';
$lang['nb_NO']['HtmlEditorField']['FORMATH6'] = 'Overskrift 6';
$lang['nb_NO']['HtmlEditorField']['FORMATP'] = 'Paragraf';
$lang['nb_NO']['HtmlEditorField']['FORMATPRE'] = 'Ferdig formatert';
$lang['nb_NO']['HtmlEditorField']['HR'] = 'Sett inn horisontal linje';
$lang['nb_NO']['HtmlEditorField']['IMAGE'] = 'Sett inn bilde';
$lang['nb_NO']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Dimensjoner';
$lang['nb_NO']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Høyde';
$lang['nb_NO']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Bredde';
$lang['nb_NO']['HtmlEditorField']['INDENT'] = 'Øk innrykk';
$lang['nb_NO']['HtmlEditorField']['INSERTCOLAFTER'] = 'Sett inn kolonne etter';
$lang['nb_NO']['HtmlEditorField']['INSERTCOLBEF'] = 'Sett inn kolonne før';
$lang['nb_NO']['HtmlEditorField']['INSERTROWAFTER'] = 'Sett inn rad etter';
$lang['nb_NO']['HtmlEditorField']['INSERTROWBEF'] = 'Sett inn rad før';
$lang['nb_NO']['HtmlEditorField']['INSERTTABLE'] = 'Sett inn tabell';
$lang['nb_NO']['HtmlEditorField']['LINK'] = 'Sett inn/rediger lenke i fremhevet tekst';
$lang['nb_NO']['HtmlEditorField']['LINKANCHOR'] = 'Lenke på denne siden';
$lang['nb_NO']['HtmlEditorField']['LINKDESCR'] = 'Lenke beskrivelse';
$lang['nb_NO']['HtmlEditorField']['LINKEMAIL'] = 'Epost adresse';
$lang['nb_NO']['HtmlEditorField']['LINKEXTERNAL'] = 'Et annet nettsted';
$lang['nb_NO']['HtmlEditorField']['LINKFILE'] = 'Last ned en fil';
$lang['nb_NO']['HtmlEditorField']['LINKINTERNAL'] = 'Sider på nettstedet';
$lang['nb_NO']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Åpne lenken i nytt vindu?';
$lang['nb_NO']['HtmlEditorField']['LINKTEXT'] = 'Lenketekst';
$lang['nb_NO']['HtmlEditorField']['LINKTO'] = 'Lenk til';
$lang['nb_NO']['HtmlEditorField']['OK'] = 'ok';
$lang['nb_NO']['HtmlEditorField']['OL'] = 'Nummerert liste';
$lang['nb_NO']['HtmlEditorField']['OUTDENT'] = 'Reduser innrykk';
$lang['nb_NO']['HtmlEditorField']['PAGE'] = 'Side';
$lang['nb_NO']['HtmlEditorField']['PASTE'] = 'Lim inn (Ctrl+V)';
$lang['nb_NO']['HtmlEditorField']['PASTETEXT'] = 'Lim inn som ren tekst';
$lang['nb_NO']['HtmlEditorField']['PASTEWORD'] = 'Lim inn fra Word';
$lang['nb_NO']['HtmlEditorField']['REDO'] = 'Gjenta (Ctrl+Y)';
$lang['nb_NO']['HtmlEditorField']['SEARCHFILENAME'] = 'Søk ved filnavn';
$lang['nb_NO']['HtmlEditorField']['SELECTALL'] = 'Merk alt (Ctrl+A)';
$lang['nb_NO']['HtmlEditorField']['UNDO'] = 'Angre (Ctrl+Z)';
$lang['nb_NO']['HtmlEditorField']['UNLINK'] = 'Fjern lenke';
$lang['nb_NO']['HtmlEditorField']['UPLOAD'] = 'last opp';
$lang['nb_NO']['HtmlEditorField']['URL'] = 'URL';
$lang['nb_NO']['HtmlEditorField']['VISUALAID'] = 'Vis/Skjul guider';
$lang['nb_NO']['Image']['PLURALNAME'] = 'Filer';
$lang['nb_NO']['Image']['SINGULARNAME'] = 'Fil';
$lang['nb_NO']['Image_Cached']['PLURALNAME'] = 'Filer';
$lang['nb_NO']['Image_Cached']['SINGULARNAME'] = 'Fil';
$lang['nb_NO']['Image_iframe.ss']['TITLE'] = 'Bildeopplasnings ramme';
$lang['nb_NO']['LoginAttempt']['Email'] = 'Epostadresse';
$lang['nb_NO']['LoginAttempt']['IP'] = 'IP adresse';
$lang['nb_NO']['LoginAttempt']['PLURALNAME'] = 'Innloggingsforsøkene';
$lang['nb_NO']['LoginAttempt']['SINGULARNAME'] = 'Innloggingsforsøk';
$lang['nb_NO']['LoginAttempt']['Status'] = 'Status';
$lang['nb_NO']['Member']['ADDRESS'] = 'Adresse';
$lang['nb_NO']['Member']['belongs_many_many_Groups'] = 'Grupper';
$lang['nb_NO']['Member']['BUTTONCHANGEPASSWORD'] = 'Bytt Passord';
$lang['nb_NO']['Member']['BUTTONLOGIN'] = 'Logg inn';
$lang['nb_NO']['Member']['BUTTONLOGINOTHER'] = 'Logg inn med en annen brukerkonto';
$lang['nb_NO']['Member']['BUTTONLOSTPASSWORD'] = 'Jeg har mistet passordet';
$lang['nb_NO']['Member']['CONFIRMNEWPASSWORD'] = 'Bekreft Nytt Passord';
$lang['nb_NO']['Member']['CONFIRMPASSWORD'] = 'Bekreft passord';
$lang['nb_NO']['Member']['CONTACTINFO'] = 'Kontakt informasjon';
$lang['nb_NO']['Member']['db_LastVisited'] = 'Siste besøkte dato';
$lang['nb_NO']['Member']['db_Locale'] = 'Lokaltilpasning av grensesnitt';
$lang['nb_NO']['Member']['db_LockedOutUntil'] = 'Stengt ute inntil';
$lang['nb_NO']['Member']['db_NumVisit'] = 'Antall besøk';
$lang['nb_NO']['Member']['db_Password'] = 'Passord';
$lang['nb_NO']['Member']['db_PasswordExpiry'] = 'Passord utløpsdato';
$lang['nb_NO']['Member']['EMAIL'] = 'Epost';
$lang['nb_NO']['Member']['EMAILSIGNUPINTRO1'] = 'Takk for at du meldte deg som nytt medlem, detaljene dine er listet opp under for senere referanser.';
$lang['nb_NO']['Member']['EMAILSIGNUPINTRO2'] = 'Du kan logge inn på siden ved å taste inn infoen listet opp under';
$lang['nb_NO']['Member']['EMAILSIGNUPSUBJECT'] = 'Takk for at du meldte deg på';
$lang['nb_NO']['Member']['ENTEREMAIL'] = 'Vennligst skriv inne en epostadresse for å få tilsendt en lenke til å resette passord.';
$lang['nb_NO']['Member']['ERRORLOCKEDOUT'] = 'Din konto har blitt sperret på grunn av for mange forsøk på å logge inn. Vennligst prøv igjen om 20 minutter.';
$lang['nb_NO']['Member']['ERRORNEWPASSWORD'] = 'Du har tastet inn nye passord forskjellig, vennligst prøv igjen.';
$lang['nb_NO']['Member']['ERRORPASSWORDNOTMATCH'] = 'Passordene passer ikke med hverandre, vennligst prøv igjen.';
$lang['nb_NO']['Member']['ERRORWRONGCRED'] = 'Det der ser ikke ut til å være riktig epost adresse eller passord. Vennligst prøv igjen.';
$lang['nb_NO']['Member']['FIRSTNAME'] = 'Fornavn';
$lang['nb_NO']['Member']['GREETING'] = 'Velkommen';
$lang['nb_NO']['Member']['INTERFACELANG'] = 'Språk på grensesnitt';
$lang['nb_NO']['Member']['LOGGEDINAS'] = 'Du er logget inn som %s.';
$lang['nb_NO']['Member']['MOBILE'] = 'Mobil';
$lang['nb_NO']['Member']['NAME'] = 'Navn';
$lang['nb_NO']['Member']['NEWPASSWORD'] = 'Nytt Passord';
$lang['nb_NO']['Member']['PASSWORD'] = 'Passord';
$lang['nb_NO']['Member']['PASSWORDCHANGED'] = 'Passordet er endret, og det har blitt sendt en kopi på din epost-konto.';
$lang['nb_NO']['Member']['PERSONALDETAILS'] = 'Personlige data';
$lang['nb_NO']['Member']['PHONE'] = 'Telefon';
$lang['nb_NO']['Member']['PLURALNAME'] = 'Medlemmer';
$lang['nb_NO']['Member']['PROFILESAVESUCCESS'] = 'Vellykket lagret.';
$lang['nb_NO']['Member']['REMEMBERME'] = 'Husk meg neste gang?';
$lang['nb_NO']['Member']['SINGULARNAME'] = 'Medlem';
$lang['nb_NO']['Member']['SUBJECTPASSWORDCHANGED'] = 'Ditt passord har blitt endret';
$lang['nb_NO']['Member']['SUBJECTPASSWORDRESET'] = 'Link til passordannulering';
$lang['nb_NO']['Member']['SURNAME'] = 'Etternavn';
$lang['nb_NO']['Member']['USERDETAILS'] = 'Brukerdetaljer';
$lang['nb_NO']['Member']['VALIDATIONMEMBEREXISTS'] = 'Det eksisterer allerede et medlem med denne epost-kontoen.';
$lang['nb_NO']['Member']['WELCOMEBACK'] = 'Velkommen tilbake, %s';
$lang['nb_NO']['Member']['YOUROLDPASSWORD'] = 'Ditt gamle passord';
$lang['nb_NO']['MemberAuthenticator']['TITLE'] = 'Epost &amp; Passord';
$lang['nb_NO']['MemberPassword']['PLURALNAME'] = 'Medlems Passord';
$lang['nb_NO']['MemberPassword']['SINGULARNAME'] = 'Medlems Passord';
$lang['nb_NO']['MyEntity']['MyNamespace'] = 'Mitt naturlige hovedspråk';
$lang['nb_NO']['MyNamespace']['MYENTITY'] = 'Telle %s ting';
$lang['nb_NO']['NumericField']['VALIDATION'] = '\'%s\' er ikke et tall, bare tall blir akseptert i dette feltet';
$lang['nb_NO']['NumericField']['VALIDATIONJS'] = 'er ikke et nummer, bare nummer blir akseptert i dette feltet.';
$lang['nb_NO']['Page']['PLURALNAME'] = 'Sider';
$lang['nb_NO']['Page']['SINGULARNAME'] = 'Side';
$lang['nb_NO']['Permission']['FULLADMINRIGHTS'] = 'Fulle administrative rettigheter';
$lang['nb_NO']['Permission']['PLURALNAME'] = 'Tillatelser';
$lang['nb_NO']['Permission']['SINGULARNAME'] = 'Tillatelse';
$lang['nb_NO']['PhoneNumberField']['VALIDATION'] = 'Vennligst skriv inn et gyldig tlf nummer';
$lang['nb_NO']['QueuedEmail']['PLURALNAME'] = 'Kø av Eposter';
$lang['nb_NO']['QueuedEmail']['SINGULARNAME'] = 'Eposter i kø';
$lang['nb_NO']['RedirectorPage']['HASBEENSETUP'] = 'En omdirigeringssside har blitt satt opp uten et mål å omdirigere til.';
$lang['nb_NO']['RedirectorPage']['HEADER'] = 'Denne siden vil omdirigere brukere til en annen side';
$lang['nb_NO']['RedirectorPage']['OTHERURL'] = 'Andre nettsteds URL';
$lang['nb_NO']['RedirectorPage']['PLURALNAME'] = 'Omdirigeringssider';
$lang['nb_NO']['RedirectorPage']['REDIRECTTO'] = 'Omdirigere til';
$lang['nb_NO']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Et annet nettsted';
$lang['nb_NO']['RedirectorPage']['REDIRECTTOPAGE'] = 'En side på nettstedet';
$lang['nb_NO']['RedirectorPage']['SINGULARNAME'] = 'Omdirigeringsside';
$lang['nb_NO']['RedirectorPage']['YOURPAGE'] = 'Side på ditt nettsted';
$lang['nb_NO']['RelationComplexTableField.ss']['ADD'] = 'Legg til';
$lang['nb_NO']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Eksporter til CSV';
$lang['nb_NO']['RelationComplexTableField.ss']['NOTFOUND'] = 'Ingen elementer funnet';
$lang['nb_NO']['SearchForm']['GO'] = 'Utfør';
$lang['nb_NO']['SearchForm']['SEARCH'] = 'Søk';
$lang['nb_NO']['Security']['ALREADYLOGGEDIN'] = 'Du har ikke adgang til denne siden. Hvis du har en annen konto som har adgang til denne siden, kan du logge inn med den under.';
$lang['nb_NO']['Security']['BUTTONSEND'] = 'Send meg lenke for å gi nytt passord';
$lang['nb_NO']['Security']['CHANGEPASSWORDBELOW'] = 'Du kan bytte passord nedenunder.';
$lang['nb_NO']['Security']['CHANGEPASSWORDHEADER'] = 'Bytt ditt passord';
$lang['nb_NO']['Security']['EMAIL'] = 'E-post:';
$lang['nb_NO']['Security']['ENCDISABLED1'] = 'Passord kryptering er slått av!';
$lang['nb_NO']['Security']['ENCDISABLED2'] = 'For å kryptere dine passord må du legge til';
$lang['nb_NO']['Security']['ENCDISABLED3'] = 'i mysite/_config.php';
$lang['nb_NO']['Security']['ENCRYPT'] = 'Krypterer alle passord';
$lang['nb_NO']['Security']['ENCRYPTEDMEMBERS'] = 'Krypterte innlogginsinformasjon for bruker &quot;';
$lang['nb_NO']['Security']['ENCRYPTWITH'] = 'Passordet vil bli kryptert med &quot;%s&quot; algoritmen.';
$lang['nb_NO']['Security']['ENCRYPTWITHOUTSALT'] = 'uten et salt for å forbedre sikkerheten.';
$lang['nb_NO']['Security']['ENCRYPTWITHSALT'] = 'med et salt for å forbedre sikkerheten.';
$lang['nb_NO']['Security']['ENTERNEWPASSWORD'] = 'Venligst tast inn nytt passord.';
$lang['nb_NO']['Security']['ERRORPASSWORDPERMISSION'] = 'Du må logge inn for å bytte passord.';
$lang['nb_NO']['Security']['ID'] = 'ID:';
$lang['nb_NO']['Security']['IPADDRESSES'] = 'IP adresser';
$lang['nb_NO']['Security']['LOGGEDOUT'] = 'Du har blitt logget ut. Hvis du vil logge inn igjen, så vennligst gjør det under.';
$lang['nb_NO']['Security']['LOGIN'] = 'Logg inn';
$lang['nb_NO']['Security']['LOSTPASSWORDHEADER'] = 'Mistet Passord';
$lang['nb_NO']['Security']['NOTEPAGESECURED'] = 'Den siden er sikret. Skriv inn gyldig innloggingsinfo så kommer du inn.';
$lang['nb_NO']['Security']['NOTERESETLINKINVALID'] = '<p>Denne passord-resetter-lenken er ødelagt eller utgått.</p><p>Du kan få en ny på <a href="%s">her</a> eller endre ditt passord etter at du har <a href="%s">logget inn</a>.</p>';
$lang['nb_NO']['Security']['NOTERESETPASSWORD'] = 'Skriv inn din epost adresse og vi vil sende deg en lenke som resetter passordet ditt.';
$lang['nb_NO']['Security']['NOTHINGTOENCRYPT1'] = 'Ingen passord å kryptere';
$lang['nb_NO']['Security']['NOTHINGTOENCRYPT2'] = 'Det er ingen medlemmer med passord i klartekst som skal krypteres!';
$lang['nb_NO']['Security']['PASSWORDSENTHEADER'] = 'Lenke for å gi nytt passord sendt til \'%s\'';
$lang['nb_NO']['Security']['PASSWORDSENTTEXT'] = 'Takk skal du ha! Passordet har blirr sendt til \'%s\'.';
$lang['nb_NO']['Security']['PERMFAILURE'] = 'Denne siden er sikret og du trenger administrative rettigheter for å nå den. Skriv inn brukernavn/passord nedenunder og vi vil sette deg i gang.';
$lang['nb_NO']['SecurityAdmin']['ADVANCEDONLY'] = 'Denne seksjonen er for avanserte brukere. Se <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">denne siden</a> for mer informasjon.';
$lang['nb_NO']['SecurityAdmin']['CODE'] = 'Kode';
$lang['nb_NO']['SecurityAdmin']['GROUPNAME'] = 'Gruppenavn';
$lang['nb_NO']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Du kan sette restriksjoner på denne gruppen mot en rekke IP adresser (en per linje). <br />Adressene kan registreres på følgene måter: <br />203.96.152.12<br />203.96.152/24<br />203.96/16<br />
203/8<br /><br />Hvis du skriver inn en eller flere ip adresser i dette feltet, vil medlemene kun få rettighetene til denne gruppen ved at de logger på deres respektive IP adresser. Dette er på grunn av at samme bruker kan ha bruk for å logge inn på deler av systemet uten IP adresse restriksjoner.';
$lang['nb_NO']['SecurityAdmin']['MEMBERS'] = 'Medlemmer';
$lang['nb_NO']['SecurityAdmin']['OPTIONALID'] = 'Firvillig ID';
$lang['nb_NO']['SecurityAdmin']['PERMISSIONS'] = 'Tilganger';
$lang['nb_NO']['SecurityAdmin']['VIEWUSER'] = 'Vis bruker';
$lang['nb_NO']['SimpleImageField']['NOUPLOAD'] = 'Ingen Bilder Lastet Opp';
$lang['nb_NO']['SiteTree']['ACCESSANYONE'] = 'Alle';
$lang['nb_NO']['SiteTree']['ACCESSHEADER'] = 'Hvem kan se denne siden?';
$lang['nb_NO']['SiteTree']['ACCESSLOGGEDIN'] = 'Brukere som er logget inn';
$lang['nb_NO']['SiteTree']['ACCESSONLYTHESE'] = 'Bare disse personene (velg fra listen)';
$lang['nb_NO']['SiteTree']['ADDEDTODRAFT'] = 'Lagt til i utkast';
$lang['nb_NO']['SiteTree']['ALLOWCOMMENTS'] = 'Tillat kommentarer på denne siden?';
$lang['nb_NO']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Dette innholdet vises på virituelle sider i %s seksjonen';
$lang['nb_NO']['SiteTree']['BUTTONCANCELDRAFT'] = 'Avbryt endringer i utkast';
$lang['nb_NO']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Slett utkast og gå tilbake til publisert versjon av denne siden';
$lang['nb_NO']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Lagre & Publiser';
$lang['nb_NO']['SiteTree']['BUTTONUNPUBLISH'] = 'Av-publiser';
$lang['nb_NO']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Fjern denne siden fra det publiserte nettstedet';
$lang['nb_NO']['SiteTree']['CHANGETO'] = 'Endre til';
$lang['nb_NO']['SiteTree']['Comments'] = 'Kommentarer';
$lang['nb_NO']['SiteTree']['Content'] = 'Innhold';
$lang['nb_NO']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Du kan fylle denne siden med ditt innhold, eller du kan slette siden og lage dine egne sider.<br /></p>';
$lang['nb_NO']['SiteTree']['DEFAULTABOUTTITLE'] = 'Om oss';
$lang['nb_NO']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Du kan fylle denne siden med ditt innhold, eller du kan slette siden og lage dine egne sider.<br /></p>';
$lang['nb_NO']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Kontakt oss';
$lang['nb_NO']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Velkommen til SilverStripe! Dette er standard hjemmeside. Du kan redigere siden ved å åpne <a href="admin/">CMS\'n</a>. Du kan nå aksessere <a href="http://doc.silverstripe.com">dokumentasjon for utviklere</a>, eller begynne å <a href="http://doc.silverstripe.com/doku.php?id=tutorials">lære SilverStripe.</a></p>';
$lang['nb_NO']['SiteTree']['DEFAULTHOMETITLE'] = 'Hjem';
$lang['nb_NO']['SiteTree']['EDITANYONE'] = 'Alle som kan logge inn til kontrollpanelet';
$lang['nb_NO']['SiteTree']['EDITHEADER'] = 'Hvem kan redigere dette i kontrollpanelet?';
$lang['nb_NO']['SiteTree']['EDITONLYTHESE'] = 'Bare disse personene';
$lang['nb_NO']['SiteTree']['Editors'] = 'Redaktørgrupper';
$lang['nb_NO']['SiteTree']['HASBROKENLINKS'] = 'Denne siden har ødelagte lenker.';
$lang['nb_NO']['SiteTree']['has_one_Parent'] = 'Foreldreside';
$lang['nb_NO']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Domene(r)';
$lang['nb_NO']['SiteTree']['HomepageForDomain'] = 'Hjemmeside for dette domenet';
$lang['nb_NO']['SiteTree']['HTMLEDITORTITLE'] = 'Innhold';
$lang['nb_NO']['SiteTree']['INHERIT'] = 'Arvet fra foreldre side';
$lang['nb_NO']['SiteTree']['many_many_BackLinkTracking'] = 'Referansesporing';
$lang['nb_NO']['SiteTree']['many_many_ImageTracking'] = 'Bildesporing';
$lang['nb_NO']['SiteTree']['many_many_LinkTracking'] = 'Lenkesporing';
$lang['nb_NO']['SiteTree']['MENUTITLE'] = 'Navigasjons etikett';
$lang['nb_NO']['SiteTree']['METADESC'] = 'Beskrivelse';
$lang['nb_NO']['SiteTree']['METAEXTRA'] = 'Egendefinerte Meta Tags';
$lang['nb_NO']['SiteTree']['METAHEADER'] = 'Søkemotor Meta-tags';
$lang['nb_NO']['SiteTree']['METAKEYWORDS'] = 'Nøkkelord';
$lang['nb_NO']['SiteTree']['METATITLE'] = 'Tittel';
$lang['nb_NO']['SiteTree']['MODIFIEDONDRAFT'] = 'Endret på utkast';
$lang['nb_NO']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Bruk denne siden som \'Hjemmeside\' for følgende domener :(separer domenene med komma)';
$lang['nb_NO']['SiteTree']['PAGESLINKING'] = 'Følgende sider er lenket til denne siden:';
$lang['nb_NO']['SiteTree']['PAGETITLE'] = 'Sidenavn';
$lang['nb_NO']['SiteTree']['PAGETYPE'] = 'Sidetype';
$lang['nb_NO']['SiteTree']['PARENTID'] = 'Overordnet side';
$lang['nb_NO']['SiteTree']['PERMISSION_GRANTACCESS_DESCRIPTION'] = 'Kontroller hvilke grupper som har tilgang til eller kan endre sidene';
$lang['nb_NO']['SiteTree']['PLURALNAME'] = 'Sidetrær';
$lang['nb_NO']['SiteTree']['REMOVEDFROMDRAFT'] = 'Fjernet fra utkast';
$lang['nb_NO']['SiteTree']['SHOWINMENUS'] = 'Vis i menyer?';
$lang['nb_NO']['SiteTree']['SHOWINSEARCH'] = 'Vis i søk?';
$lang['nb_NO']['SiteTree']['SINGULARNAME'] = 'Sidetre';
$lang['nb_NO']['SiteTree']['TABACCESS'] = 'Tilgang';
$lang['nb_NO']['SiteTree']['TABBACKLINKS'] = 'Referanse';
$lang['nb_NO']['SiteTree']['TABBEHAVIOUR'] = 'Adferd';
$lang['nb_NO']['SiteTree']['TABCONTENT'] = 'Innhold';
$lang['nb_NO']['SiteTree']['TABMAIN'] = 'Hovedinnstillinger';
$lang['nb_NO']['SiteTree']['TABMETA'] = 'Meta-data';
$lang['nb_NO']['SiteTree']['TABREPORTS'] = 'Rapporter';
$lang['nb_NO']['SiteTree']['ToDo'] = 'Å gjøre notater';
$lang['nb_NO']['SiteTree']['TODOHELP'] = '<p>Du kan bruke dette til å holde oversikt over arbeid som må utføres på innholdet på nettsiden din. For å se alle sidene med "to do" informasjon, åpner du rapport vinduet på venstre side og velger \'To Do\'</p>';
$lang['nb_NO']['SiteTree']['TOPLEVEL'] = 'Nettstedets Innhold (øverste nivå)';
$lang['nb_NO']['SiteTree']['URL'] = 'URL';
$lang['nb_NO']['SiteTree']['URLSegment'] = 'URL Segment';
$lang['nb_NO']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'En annen side bruker allerede den URL. URL må være unik for hver eneste side.';
$lang['nb_NO']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL kan bare inneholde bokstaver, tall og bindestreker.';
$lang['nb_NO']['SiteTree']['Viewers'] = 'Lesergrupper';
$lang['nb_NO']['TableField']['ISREQUIRED'] = 'I %s er %s påkrevd.';
$lang['nb_NO']['TableField.ss']['ADD'] = 'Legg til en rad';
$lang['nb_NO']['TableField.ss']['CSVEXPORT'] = 'Eksporter til CSV';
$lang['nb_NO']['TableListField']['CSVEXPORT'] = 'Eksporter til CSV';
$lang['nb_NO']['TableListField']['PRINT'] = 'Skriv ut';
$lang['nb_NO']['TableListField_PageControls.ss']['DISPLAYING'] = 'Viser';
$lang['nb_NO']['TableListField_PageControls.ss']['OF'] = 'av';
$lang['nb_NO']['TableListField_PageControls.ss']['TO'] = 'til';
$lang['nb_NO']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Se første';
$lang['nb_NO']['TableListField_PageControls.ss']['VIEWLAST'] = 'Se siste';
$lang['nb_NO']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Se neste';
$lang['nb_NO']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Se forrige';
$lang['nb_NO']['ToggleCompositeField.ss']['HIDE'] = 'Skjul';
$lang['nb_NO']['ToggleCompositeField.ss']['SHOW'] = 'Vis';
$lang['nb_NO']['ToggleField']['LESS'] = 'mindre';
$lang['nb_NO']['ToggleField']['MORE'] = 'mer';
$lang['nb_NO']['Translatable']['CREATE'] = 'Opprett ny oversettelse';
$lang['nb_NO']['Translatable']['CREATEBUTTON'] = 'Opprett';
$lang['nb_NO']['Translatable']['EXISTING'] = 'Eksisterende oversettelse';
$lang['nb_NO']['Translatable']['NEWLANGUAGE'] = 'Nytt språk';
$lang['nb_NO']['Translatable']['TRANSLATIONS'] = 'Oversettelser';
$lang['nb_NO']['TreeSelectorField']['CANCEL'] = 'avbryt';
$lang['nb_NO']['TreeSelectorField']['SAVE'] = 'lagre';
$lang['nb_NO']['Versioned']['has_many_Versions'] = 'Versjoner';
$lang['nb_NO']['VirtualPage']['CHOOSE'] = 'Velg en side å lenke til';
$lang['nb_NO']['VirtualPage']['EDITCONTENT'] = 'Klikk her for å endre innholdet';
$lang['nb_NO']['VirtualPage']['HEADER'] = 'Dette er en virituell side';
$lang['nb_NO']['VirtualPage']['PLURALNAME'] = 'Virtuelle Sider';
$lang['nb_NO']['VirtualPage']['SINGULARNAME'] = 'Virtuell Side';
$lang['nb_NO']['Widget']['PLURALNAME'] = 'Widgets';
$lang['nb_NO']['Widget']['SINGULARNAME'] = 'Widget';
$lang['nb_NO']['WidgetArea']['PLURALNAME'] = 'Widget områder';
$lang['nb_NO']['WidgetArea']['SINGULARNAME'] = 'Widget område';

?>