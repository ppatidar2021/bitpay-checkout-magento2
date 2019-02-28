<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace BitpayCheckout\BPCheckout\Model\Config\Source;


/**
 * Countries Model
 */
class Countries implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            array('value' => 'AF', 'label'=>('Afghanistan')),
            array('value' => 'AL', 'label'=>('Albania')),
            array('value' => 'AS', 'label'=>('American Samoa')),
            array('value' => 'AD', 'label'=>('Andorra')),
            array('value' => 'AO', 'label'=>('Angola')),
            array('value' => 'AI', 'label'=>('Anguilla')),
            array('value' => 'AQ', 'label'=>('Antarctica')),
            array('value' => 'AG', 'label'=>('Antigua and Barbuda')),
            array('value' => 'AR', 'label'=>('Argentina')),
            array('value' => 'AM', 'label'=>('Armenia')),
            array('value' => 'AW', 'label'=>('Aruba')),
            array('value' => 'AU', 'label'=>('Australia')),
            array('value' => 'AT', 'label'=>('Austria')),
            array('value' => 'AZ', 'label'=>('Azerbaijan')),
            array('value' => 'BS', 'label'=>('Bahamas')),
            array('value' => 'BH', 'label'=>('Bahrain')),
            array('value' => 'BB', 'label'=>('Barbados')),
            array('value' => 'BY', 'label'=>('Belarus')),
            array('value' => 'BE', 'label'=>('Belgium')),
            array('value' => 'BZ', 'label'=>('Belize')),
            array('value' => 'BJ', 'label'=>('Benin')),
            array('value' => 'BM', 'label'=>('Bermuda')),
            array('value' => 'BT', 'label'=>('Bhutan')),
            array('value' => 'BA', 'label'=>('Bosnia and Herzegovina')),
            array('value' => 'BW', 'label'=>('Botswana')),
            array('value' => 'BV', 'label'=>('Bouvet Island')),
            array('value' => 'BR', 'label'=>('Brazil')),
            array('value' => 'IO', 'label'=>('British Indian Ocean Territory')),
            array('value' => 'VG', 'label'=>('British Virgin Islands')),
            array('value' => 'BN', 'label'=>('Brunei')),
            array('value' => 'BG', 'label'=>('Bulgaria')),
            array('value' => 'BF', 'label'=>('Burkina Faso')),
            array('value' => 'BI', 'label'=>('Burundi')),
            array('value' => 'CM', 'label'=>('Cameroon')),
            array('value' => 'CA', 'label'=>('Canada')),
            array('value' => 'CV', 'label'=>('Cape Verde')),
            array('value' => 'KY', 'label'=>('Cayman Islands')),
            array('value' => 'CF', 'label'=>('Central African Republic')),
            array('value' => 'TD', 'label'=>('Chad')),
            array('value' => 'CL', 'label'=>('Chile')),
            array('value' => 'CN', 'label'=>('China')),
            array('value' => 'CX', 'label'=>('Christmas Island')),
            array('value' => 'CC', 'label'=>('Cocos (Keeling Islands')),
            array('value' => 'CO', 'label'=>('Colombia')),
            array('value' => 'KM', 'label'=>('Comoros')),
            array('value' => 'CG', 'label'=>('Congo - Brazzaville')),
            array('value' => 'CD', 'label'=>('Congo - Kinshasa')),
            array('value' => 'CK', 'label'=>('Cook Islands')),
            array('value' => 'CR', 'label'=>('Costa Rica')),
            array('value' => 'HR', 'label'=>('Croatia')),
            array('value' => 'CY', 'label'=>('Cyprus')),
            array('value' => 'CZ', 'label'=>('Czech Republic')),
            array('value' => 'CI', 'label'=>('Côte d’Ivoire')),
            array('value' => 'DK', 'label'=>('Denmark')),
            array('value' => 'DJ', 'label'=>('Djibouti')),
            array('value' => 'DM', 'label'=>('Dominica')),
            array('value' => 'DO', 'label'=>('Dominican Republic')),
            array('value' => 'SV', 'label'=>('El Salvador')),
            array('value' => 'GQ', 'label'=>('Equatorial Guinea')),
            array('value' => 'ER', 'label'=>('Eritrea')),
            array('value' => 'EE', 'label'=>('Estonia')),
            array('value' => 'ET', 'label'=>('Ethiopia')),
            array('value' => 'FK', 'label'=>('Falkland Islands')),
            array('value' => 'FO', 'label'=>('Faroe Islands')),
            array('value' => 'FJ', 'label'=>('Fiji')),
            array('value' => 'FI', 'label'=>('Finland')),
            array('value' => 'FR', 'label'=>('France')),
            array('value' => 'GF', 'label'=>('French Guiana')),
            array('value' => 'PF', 'label'=>('French Polynesia')),
            array('value' => 'TF', 'label'=>('French Southern Territories')),
            array('value' => 'GA', 'label'=>('Gabon')),
            array('value' => 'GM', 'label'=>('Gambia')),
            array('value' => 'GE', 'label'=>('Georgia')),
            array('value' => 'DE', 'label'=>('Germany')),
            array('value' => 'GH', 'label'=>('Ghana')),
            array('value' => 'GI', 'label'=>('Gibraltar')),
            array('value' => 'GR', 'label'=>('Greece')),
            array('value' => 'GL', 'label'=>('Greenland')),
            array('value' => 'GD', 'label'=>('Grenada')),
            array('value' => 'GP', 'label'=>('Guadeloupe')),
            array('value' => 'GU', 'label'=>('Guam')),
            array('value' => 'GT', 'label'=>('Guatemala')),
            array('value' => 'GG', 'label'=>('Guernsey')),
            array('value' => 'GN', 'label'=>('Guinea')),
            array('value' => 'GW', 'label'=>('Guinea-Bissau')),
            array('value' => 'GY', 'label'=>('Guyana')),
            array('value' => 'HT', 'label'=>('Haiti')),
            array('value' => 'HM', 'label'=>('Heard &amp; McDonald Islands')),
            array('value' => 'HN', 'label'=>('Honduras')),
            array('value' => 'HK', 'label'=>('Hong Kong SAR China')),
            array('value' => 'HU', 'label'=>('Hungary')),
            array('value' => 'IS', 'label'=>('Iceland')),
            array('value' => 'IN', 'label'=>('India')),
            array('value' => 'IE', 'label'=>('Ireland')),
            array('value' => 'IM', 'label'=>('Isle of Man')),
            array('value' => 'IL', 'label'=>('Israel')),
            array('value' => 'IT', 'label'=>('Italy')),
            array('value' => 'JM', 'label'=>('Jamaica')),
            array('value' => 'JP', 'label'=>('Japan')),
            array('value' => 'JE', 'label'=>('Jersey')),
            array('value' => 'JO', 'label'=>('Jordan')),
            array('value' => 'KZ', 'label'=>('Kazakhstan')),
            array('value' => 'KE', 'label'=>('Kenya')),
            array('value' => 'KI', 'label'=>('Kiribati')),
            array('value' => 'KW', 'label'=>('Kuwait')),
            array('value' => 'LA', 'label'=>('Laos')),
            array('value' => 'LV', 'label'=>('Latvia')),
            array('value' => 'LB', 'label'=>('Lebanon')),
            array('value' => 'LS', 'label'=>('Lesotho')),
            array('value' => 'LR', 'label'=>('Liberia')),
            array('value' => 'LY', 'label'=>('Libya')),
            array('value' => 'LI', 'label'=>('Liechtenstein')),
            array('value' => 'LT', 'label'=>('Lithuania')),
            array('value' => 'LU', 'label'=>('Luxembourg')),
            array('value' => 'MO', 'label'=>('Macau SAR China')),
            array('value' => 'MK', 'label'=>('Macedonia')),
            array('value' => 'MG', 'label'=>('Madagascar')),
            array('value' => 'MW', 'label'=>('Malawi')),
            array('value' => 'MY', 'label'=>('Malaysia')),
            array('value' => 'MV', 'label'=>('Maldives')),
            array('value' => 'ML', 'label'=>('Mali')),
            array('value' => 'MT', 'label'=>('Malta')),
            array('value' => 'MH', 'label'=>('Marshall Islands')),
            array('value' => 'MQ', 'label'=>('Martinique')),
            array('value' => 'MR', 'label'=>('Mauritania')),
            array('value' => 'MU', 'label'=>('Mauritius')),
            array('value' => 'YT', 'label'=>('Mayotte')),
            array('value' => 'MX', 'label'=>('Mexico')),
            array('value' => 'FM', 'label'=>('Micronesia')),
            array('value' => 'MD', 'label'=>('Moldova')),
            array('value' => 'MC', 'label'=>('Monaco')),
            array('value' => 'MN', 'label'=>('Mongolia')),
            array('value' => 'ME', 'label'=>('Montenegro')),
            array('value' => 'MS', 'label'=>('Montserrat')),
            array('value' => 'MZ', 'label'=>('Mozambique')),
            array('value' => 'MM', 'label'=>('Myanmar (Burma')),
            array('value' => 'NA', 'label'=>('Namibia')),
            array('value' => 'NR', 'label'=>('Nauru')),
            array('value' => 'NL', 'label'=>('Netherlands')),
            array('value' => 'AN', 'label'=>('Netherlands Antilles')),
            array('value' => 'NC', 'label'=>('New Caledonia')),
            array('value' => 'NZ', 'label'=>('New Zealand')),
            array('value' => 'NI', 'label'=>('Nicaragua')),
            array('value' => 'NE', 'label'=>('Niger')),
            array('value' => 'NG', 'label'=>('Nigeria')),
            array('value' => 'NU', 'label'=>('Niue')),
            array('value' => 'NF', 'label'=>('Norfolk Island')),
            array('value' => 'MP', 'label'=>('Northern Mariana Islands')),
            array('value' => 'NO', 'label'=>('Norway')),
            array('value' => 'OM', 'label'=>('Oman')),
            array('value' => 'PK', 'label'=>('Pakistan')),
            array('value' => 'PW', 'label'=>('Palau')),
            array('value' => 'PS', 'label'=>('Palestinian Territories')),
            array('value' => 'PA', 'label'=>('Panama')),
            array('value' => 'PG', 'label'=>('Papua New Guinea')),
            array('value' => 'PY', 'label'=>('Paraguay')),
            array('value' => 'PE', 'label'=>('Peru')),
            array('value' => 'PH', 'label'=>('Philippines')),
            array('value' => 'PN', 'label'=>('Pitcairn Islands')),
            array('value' => 'PL', 'label'=>('Poland')),
            array('value' => 'PT', 'label'=>('Portugal')),
            array('value' => 'PR', 'label'=>('Puerto Rico')),
            array('value' => 'QA', 'label'=>('Qatar')),
            array('value' => 'RO', 'label'=>('Romania')),
            array('value' => 'RU', 'label'=>('Russia')),
            array('value' => 'RW', 'label'=>('Rwanda')),
            array('value' => 'RE', 'label'=>('Réunion')),
            array('value' => 'BL', 'label'=>('Saint Barthélemy')),
            array('value' => 'SH', 'label'=>('Saint Helena')),
            array('value' => 'KN', 'label'=>('Saint Kitts and Nevis')),
            array('value' => 'LC', 'label'=>('Saint Lucia')),
            array('value' => 'MF', 'label'=>('Saint Martin')),
            array('value' => 'PM', 'label'=>('Saint Pierre and Miquelon')),
            array('value' => 'WS', 'label'=>('Samoa')),
            array('value' => 'SM', 'label'=>('San Marino')),
            array('value' => 'SA', 'label'=>('Saudi Arabia')),
            array('value' => 'SN', 'label'=>('Senegal')),
            array('value' => 'RS', 'label'=>('Serbia')),
            array('value' => 'SC', 'label'=>('Seychelles')),
            array('value' => 'SL', 'label'=>('Sierra Leone')),
            array('value' => 'SG', 'label'=>('Singapore')),
            array('value' => 'SK', 'label'=>('Slovakia')),
            array('value' => 'SI', 'label'=>('Slovenia')),
            array('value' => 'SB', 'label'=>('Solomon Islands')),
            array('value' => 'SO', 'label'=>('Somalia')),
            array('value' => 'ZA', 'label'=>('South Africa')),
            array('value' => 'GS', 'label'=>('South Georgia &amp; South Sandwich Islands')),
            array('value' => 'KR', 'label'=>('South Korea')),
            array('value' => 'ES', 'label'=>('Spain')),
            array('value' => 'LK', 'label'=>('Sri Lanka')),
            array('value' => 'VC', 'label'=>('St. Vincent &amp; Grenadines')),
            array('value' => 'SD', 'label'=>('Sudan')),
            array('value' => 'SR', 'label'=>('Suriname')),
            array('value' => 'SJ', 'label'=>('Svalbard and Jan Mayen')),
            array('value' => 'SZ', 'label'=>('Swaziland')),
            array('value' => 'SE', 'label'=>('Sweden')),
            array('value' => 'CH', 'label'=>('Switzerland')),
            array('value' => 'ST', 'label'=>('São Tomé and Príncipe')),
            array('value' => 'TW', 'label'=>('Taiwan')),
            array('value' => 'TJ', 'label'=>('Tajikistan')),
            array('value' => 'TZ', 'label'=>('Tanzania')),
            array('value' => 'TH', 'label'=>('Thailand')),
            array('value' => 'TL', 'label'=>('Timor-Leste')),
            array('value' => 'TG', 'label'=>('Togo')),
            array('value' => 'TK', 'label'=>('Tokelau')),
            array('value' => 'TO', 'label'=>('Tonga')),
            array('value' => 'TT', 'label'=>('Trinidad and Tobago')),
            array('value' => 'TN', 'label'=>('Tunisia')),
            array('value' => 'TR', 'label'=>('Turkey')),
            array('value' => 'TM', 'label'=>('Turkmenistan')),
            array('value' => 'TC', 'label'=>('Turks and Caicos Islands')),
            array('value' => 'TV', 'label'=>('Tuvalu')),
            array('value' => 'UM', 'label'=>('U.S. Outlying Islands')),
            array('value' => 'VI', 'label'=>('U.S. Virgin Islands')),
            array('value' => 'UG', 'label'=>('Uganda')),
            array('value' => 'UA', 'label'=>('Ukraine')),
            array('value' => 'AE', 'label'=>('United Arab Emirates')),
            array('value' => 'GB', 'label'=>('United Kingdom')),
            array('value' => 'US', 'label'=>('United States')),
            array('value' => 'UY', 'label'=>('Uruguay')),
            array('value' => 'UZ', 'label'=>('Uzbekistan')),
            array('value' => 'VU', 'label'=>('Vanuatu')),
            array('value' => 'VA', 'label'=>('Vatican City')),
            array('value' => 'VE', 'label'=>('Venezuela')),
            array('value' => 'WF', 'label'=>('Wallis and Futuna')),
            array('value' => 'EH', 'label'=>('Western Sahara')),
            array('value' => 'YE', 'label'=>('Yemen')),
            array('value' => 'ZM', 'label'=>('Zambia')),
            array('value' => 'ZW', 'label'=>('Zimbabwe')),
            array('value' => 'AX', 'label'=>('Åland Islands'))
        ];

    }
}
