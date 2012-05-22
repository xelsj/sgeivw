<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle 2.2 installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'நிர்வாகக் கோப்புறை';
$string['availablelangs'] = 'இருக்கும் மொழிக்கட்டுகள்';
$string['chooselanguagehead'] = 'மொழி ஒன்றைத் தெரிவு செய்க';
$string['chooselanguagesub'] = 'தயவு செய்து நிறுவலுக்கான மொழியைத் தெரிவு செய்க. தளத்திற்கான மற்றும் பயனாளருக்கான மொழிகளைப் பின்னர் தெரிவு செய்யலாம்.';
$string['databasehost'] = 'தரவுத்தள host';
$string['databasename'] = 'தரவுத்தளப் பெயர்';
$string['dataroot'] = 'தரவுக் கோப்புறை';
$string['dbprefix'] = 'அட்டவணை முன்னொட்டு';
$string['dirroot'] = 'Moodle கோப்புறை';
$string['environmenthead'] = 'உங்கள் சூழல் சோதிக்கப்படுகிறது.';
$string['installation'] = 'நிறுவல்';
$string['langdownloaderror'] = 'துரதிஷ்டவசமாக "{$a}" மொழி நிறுவப்படவில்லை. நிறுவல் ஆங்கிலத்தில் தொடரும்.';
$string['memorylimithelp'] = '<p>உங்களுடைய சேவையகத்திற்கான PHP நினைவக வரையறை தற்போது {$a} ஆக அமைக்கப்படுகிறது.</p>

<p>விசேடமாக நீங்கள், செயலாக்கப்பட்ட பகுதியின் மற்றும்/அல்லது  பயனாளர்களின் ஒரு அதிகளவு தொகையை கொண்டிருந்தால் ,இது Moodle ஐ கடைசியாக நினைவக பிரச்சினைகளை கொண்டிருப்பதற்கு  தூண்டலாம்.</p>

<p>சாத்தியமென்றால் 40M போன்ற ஒரு உயர் வரையறையுடன், நீங்கள் செம்மைப்படுத்துகிறீர்கள் என்பதை நாங்கள் சிபார்சு செய்கின்றோம்.அங்கே இதைச் செய்வதற்கான பல வழிகள், நீங்கள் முயற்சிக்க முடிகின்றதாக  உள்ளன:</p>
<ol>
<li>உங்களால் முடிந்தால் <i>--செயலாக்க-நினைவக-வரையறை</i> உடன் PHPஐ மீள் தொகுக்க</li>.
இது Moodle ஐ, நினைவக வரையறையை அதுவாகவே அமைப்பதற்கு அனுமதிக்கின்றது.</li>
<li>நீங்கள் உங்களுடைய php.ini கோப்பிற்கு அணுகலை கொண்டிருந்தால், 40M போன்ற ஏதோ ஒன்றிற்கு அங்கே அமைக்கின்ற  <b>நினைவக_வரையறையை</b> மாற்ற முடிகிறது.
நீங்கள் அணுகலை கொண்டிருக்கவில்லையென்றால்,உங்களுக்காக அதைச் செய்வதற்கு உங்களுடைய நிர்வாகியை கேட்கக்கூடியதாக இருக்க வேண்டும்.</li>
<li>சில PHP சேவையகங்களில் நீங்கள் இந்த வரியைக் கொண்டிருக்கின்ற Moodle கோப்புத் தொகுதியிலுள்ள ஒரு .htaccess கோப்பை உருவாக்க முடிகிறது.

<p><blockquote>php_பெறுமதி நினைவக_வரையறை 40M</blockquote></p>
  
<p>எப்படியாயினும், சில சேவையகங்களில் இது வேலை செய்வதிலிருந்து <b>அனைத்து</b> PHP பக்கங்களை தடுக்கும்(நீங்கள் பக்கங்களை பார்க்கின்ற போது தவறுகளை பார்ப்பீர்கள்) ஆகையால் நீங்கள் .htaccess கோப்பை நீக்க வேண்டியிருக்கும்.</p></li>
</ol>';
$string['paths'] = 'பாதைகள்';
$string['pathshead'] = 'பாதைகளை ஊர்ஜிதப்படுத்து';
$string['phpextension'] = '{$a} PHP நீட்சி';
$string['phpversion'] = 'PHP பதிப்பு';
$string['phpversionhelp'] = '<p>Moodle குறைந்தளவு ஒரு PHP பதிப்பின் 4.3.0 or 5.1.0 ஐ (5.0.x அறியப்பட்ட பிரச்சினைகளின் ஒரு எண்ணிக்கையைக் கொண்டிருக்கின்றது) வேண்டுகின்றது.</p>
<p>நீங்கள் தற்போதைய பதிப்பு {$a} ஐ இயக்குகின்றீர்கள்</p>
<p>நீங்கள் PHP ஐ மேம்படுத்த  அல்லது PHP இன் ஒரு புதிய பதிப்புடன் ஒரு வழங்கியிற்கு நகர்த்த வேண்டும்!<br/>

(5.0.x இன் சம்பவத்தில்,நீங்கள் 4.4.x பதிப்பிற்கு கீழ்த்தரப்படுத்த முடிகின்றது)</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'நீங்கள் வெற்றிகரமாக நிறுவி ஆரம்பித்துள்ளதன் காரணமாக நீங்கள் இப்பக்கத்தை பார்க்கிறீர்கள் 
    <strong>{$a->packname} {$a->packversion}</strong> உங்கள் கணனியில் உள்ள  பொதியில் உள்ளது.வாழ்த்துக்கள்!';
$string['welcomep30'] = '<strong>{$a->installername}</strong>ன் வெளியீடு, <strong>Moodle</strong> இயங்கும் என்கின்ற ஒரு சூழலை உருவாக்குவதற்கு பயன்பாட்டு மென்பொருளை உள்ளடக்குகிறது.';
$string['welcomep40'] = 'பொதி, <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> ஐயும் உள்ளடக்கியிருக்கின்றது.';
$string['welcomep50'] = 'இந்தப் பொதியிலுள்ள அனைத்துப் பயன்பாட்டு மென்பொருட்களின் பயன்பாடு அவைகளுடைய தனித்தனியான அனுமதிப்பத்திரங்களால் ஆளப்படுகின்றது.பூரணமான <strong>{$a->installername}</strong> பொதி, <a href="http://www.opensource.org/docs/definition_plain.html">திறந்த ஆணை மூலமாக</a> உள்ளது மற்றும் <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> அனுமதிப்பத்திரத்திற்குக் கீழே விநியோகிக்கப்படுகிறது.';
$string['welcomep60'] = 'பின்வருகின்ற பக்கங்கள்,உங்களுடைய கணினியிலுள்ள <strong>Moodle ஐ </strong> அமைப்பதற்கும் மற்றும் செம்மைப்படுத்துவதற்கும், சில  பின்பற்றுவதற்கு இலேசான படிகளினூடு உங்களை முன்னெடுக்கின்றது.';
$string['welcomep70'] = 'கீழே தொடர்வதற்கு >Moodle இன்</ அமைப்புடன்"அடுத்து" பொத்தானை சொடுக்குக.';
$string['wwwroot'] = 'இணைய முகவரி';
