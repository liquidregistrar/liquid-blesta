<?php

// All available TLDs (http://www.Resellercampid.com/product_pricing#domain-resellers)
Configure::set("Resellercampid.tlds", array(
    '.mn', '.name', '.biz', '.us', '.co', '.in', '.cc', '.ca', '.com', '.bz',
    '.mobi', '.info', '.tv', '.org', '.net', '.pw', '.asia', '.xspace',
    '.id', '.co.id', '.web.id', '.net.id', '.or.id', '.ac.id', '.sch.id', '.biz.id', '.my.id', '.desa.id',
    '.xyz', '.club', '.site', '.online', '.tech', '.lol', '.link', '.mom', '.red', '.news', '.space', '.top',
    '.wang', '.win', '.vip', '.bid', '.science', '.gdn', '.date', '.loan', '.click', '.website', '.faith',
    '.host', '.loans', '.email', '.kim', '.party', '.trade', '.review', '.racing', '.work', '.download',
    '.nyc', '.rocks', '.cloud', '.london', '.one', '.guru', '.berlin', '.pub', '.live', '.today', '.help',
    '.solutions', '.store', '.family', '.studio', '.group', '.feedback', '.tokyo', '.build', '.credit',
    '.creditcard', '.gold', '.pictures', '.buzz', '.investments', '.theater', '.lease', '.ventures',
    '.holdings', '.codes', '.limo', '.viajes', '.diamonds', '.voyage', '.university', '.dating', '.partners',
    '.holiday', '.financial', '.expert', '.cruises', '.flights', '.villas', '.clinic', '.surgery',
    '.dental', '.tienda', '.condos', '.restaurant', '.pizza', '.maison', '.capital', '.engineering',
    '.finance', '.insure', '.claims', '.salon', '.vin', '.coupons', '.recipes', '.careers', '.coach',
    '.memorial', '.tax', '.fund', '.furniture', '.healthcare', '.legal', '.golf', '.tours', '.wine',
    '.apartments', '.jewelry', '.fish', '.associates', '.media', '.singles', '.bike', '.vision', '.farm',
    '.cab', '.plumbing', '.community', '.clothing', '.camera', '.estate', '.watch', '.academy', '.computer',
    '.world', '.toys', '.enterprises', '.construction', '.contractors', '.kitchen', '.land', '.events',
    '.marketing', '.shoes', '.builders', '.town', '.training', '.rentals', '.productions', '.gripe',
    '.bargains', '.boutique', '.coffee', '.wtf', '.fail', '.florist', '.camp', '.glass', '.repair', '.house',
    '.solar', '.limited', '.catering', '.cards', '.cheap', '.zone', '.cool', '.works', '.vacations',
    '.foundation', '.cleaning', '.care', '.properties', '.tools', '.industries', '.parts', '.services',
    '.exchange', '.digital', '.direct', '.place', '.deals', '.cash', '.discount', '.fitness', '.church',
    '.life', '.guide', '.gifts', '.immo', '.money', '.sarl', '.plus', '.gmbh', '.reisen', '.equipment',
    '.gallery', '.graphics', '.lighting', '.center', '.management', '.systems', '.photography', '.city',
    '.tips', '.support', '.technology', '.directory', '.photos', '.international', '.agency', '.report',
    '.education', '.institute', '.exposed', '.supplies', '.supply', '.gratis', '.schule', '.business',
    '.network', '.ltd', '.company', '.energy', '.democrat', '.accountants', '.tires', '.football', '.run',
    '.soccer', '.fyi', '.tennis', '.hockey', '.taxi', '.style', '.school', '.dog', '.mba', '.express',
    '.team', '.show', '.design', '.press', '.adult', '.porn', '.black', '.voto', '.vote', '.global', '.poker',
    '.vc', '.ngo', '.shiksha', '.pink', '.lgbt', '.blue', '.bar', '.rest', '.wiki', '.protection', '.love',
    '.ink', '.fans', '.college', '.rent', '.theatre', '.webcam', '.stream', '.uno', '.rehab', '.futbol',
    '.ninja', '.immobilien', '.software', '.video', '.market', '.actor', '.kaufen', '.army', '.navy',
    '.auction', '.moda', '.mortgage', '.haus', '.delivery', '.republican', '.reviews', '.sale', '.rip',
    '.airforce', '.lawyer', '.social', '.degree', '.dance', '.vet', '.band', '.dentist', '.attorney',
    '.consulting', '.christmas', '.guitars', '.sexy', '.photo', '.yoga', '.blackfriday', '.hiphop', '.pics',
    '.juegos', '.property', '.hosting', '.audio', '.tattoo', '.diet', '.men', '.horse', '.beer', '.surf',
    '.rodeo', '.cooking', '.country', '.casa', '.security', '.soy', '.auto', '.car', '.cars', '.green',
    '.wedding', '.vodka', '.fit', '.game', '.gives', '.fishing', '.engineer', '.flowers', '.forsale',
    '.fashion', '.garden', '.gift', '.accountant', '.cricket', '.vegas', '.casino', '.jobs', '.tube',
    '.bingo', '.chat', '.cafe', '.desi', '.trading', '.markets', '.wales', '.cymru', '.earth', '.joburg',
    '.quebec', '.menu', '.nagoya', '.archi', '.miami', '.durban', '.best', '.ponpes.id', '.co.in',
    '.org.in', '.net.in', '.gen.in', '.me.uk', '.co.uk', '.eu', '.me', '.ws', '.org.uk', '.fun', '.icu', '.blog',
));

// Transfer fields
Configure::set("Resellercampid.transfer_fields", array(
    'domain-name' => array(
        'label' => Language::_("Resellercampid.transfer.domain-name", true),
        'type' => "text"
    ),
    'auth-code' => array(
        'label' => Language::_("Resellercampid.transfer.auth-code", true),
        'type' => "text"
    )
));

// Domain fields
Configure::set("Resellercampid.domain_fields", array(
    'domain-name' => array(
        'label' => Language::_("Resellercampid.domain.domain-name", true),
        'type' => "text"
    )
));

// Nameserver fields
Configure::set("Resellercampid.nameserver_fields", array(
    'ns1' => array(
        'label' => Language::_("Resellercampid.nameserver.ns1", true),
        'type' => "text"
    ),
    'ns2' => array(
        'label' => Language::_("Resellercampid.nameserver.ns2", true),
        'type' => "text"
    ),
    'ns3' => array(
        'label' => Language::_("Resellercampid.nameserver.ns3", true),
        'type' => "text"
    ),
    'ns4' => array(
        'label' => Language::_("Resellercampid.nameserver.ns4", true),
        'type' => "text"
    ),
    'ns5' => array(
        'label' => Language::_("Resellercampid.nameserver.ns5", true),
        'type' => "text"
    )
));

// Contact fields
Configure::set("Resellercampid.contact_fields", array(
    'customer_id' => array(
        'label' => Language::_("Resellercampid.contact.customer-id", true),
        'type' => "text"
    ),
    'type' => array(
        'label' => Language::_("Resellercampid.contact.type", true),
        'type' => "text"
    ),
    'name' => array(
        'label' => Language::_("Resellercampid.contact.name", true),
        'type' => "text"
    ),
    'company' => array(
        'label' => Language::_("Resellercampid.contact.company", true),
        'type' => "text"
    ),
    'email' => array(
        'label' => Language::_("Resellercampid.contact.email", true),
        'type' => "text"
    ),
    'address_line_1' => array(
        'label' => Language::_("Resellercampid.contact.address-line-1", true),
        'type' => "text"
    ),
    'address_line_2' => array(
        'label' => Language::_("Resellercampid.contact.address-line-2", true),
        'type' => "text"
    ),
    'city' => array(
        'label' => Language::_("Resellercampid.contact.city", true),
        'type' => "text"
    ),
    'state' => array(
        'label' => Language::_("Resellercampid.contact.state", true),
        'type' => "text"
    ),
    'zipcode' => array(
        'label' => Language::_("Resellercampid.contact.zipcode", true),
        'type' => "text"
    ),
    'country_code' => array(
        'label' => Language::_("Resellercampid.contact.country", true),
        'type' => "text"
    ),
    'tel_cc_no' => array(
        'label' => Language::_("Resellercampid.contact.phone-cc", true),
        'type' => "text"
    ),
    'tel_no' => array(
        'label' => Language::_("Resellercampid.contact.phone", true),
        'type' => "text"
    ),
    'fax_cc_no' => array(
        'label' => Language::_("Resellercampid.contact.fax-cc", true),
        'type' => "text"
    ),
    'fax_no' => array(
        'label' => Language::_("Resellercampid.contact.fax", true),
        'type' => "text"
    )
));

// Customer info
Configure::set("Resellercampid.customer_fields", array(
    'username' => array(
        'label' => Language::_("Resellercampid.customer.username", true),
        'type' => "text"
    ),
    'password' => array(
        'label' => Language::_("Resellercampid.customer.passwd", true),
        'type' => "text"
    ),
    'lang-pref' => array(
        'label' => Language::_("Resellercampid.customer.lang-pref", true),
        'type' => "text"
    )
));


// .ASIA
Configure::set("Resellercampid.contact_fields.co", array(
    'eligibility_criteria' => array(
        'type' => "hidden",
        'options' => null
    )
));
Configure::set("Resellercampid.contact_fields.asia", array(
    'extra' => array(
        'type' => "hidden",
        'options' => null
    ),
    'eligibility_criteria' => array(
        'type' => "hidden",
        'options' => null
    ),
    'attr_locality' => array(
        'type' => "hidden",
        'options' => null
    ),
    'attr_legalentitytype' => array(
        'label' => Language::_("Resellercampid.contact.legalentitytype", true),
        'type' => "select",
        'options' => array(
            'corporation' => Language::_("Resellercampid.contact.legalentitytype.corporation", true),
            'cooperative' => Language::_("Resellercampid.contact.legalentitytype.cooperative", true),
            'partnership' => Language::_("Resellercampid.contact.legalentitytype.partnership", true),
            'government' => Language::_("Resellercampid.contact.legalentitytype.government", true),
            'politicalParty' => Language::_("Resellercampid.contact.legalentitytype.politicalParty", true),
            'society' => Language::_("Resellercampid.contact.legalentitytype.society", true),
            'institution' => Language::_("Resellercampid.contact.legalentitytype.institution", true),
            'naturalPerson' => Language::_("Resellercampid.contact.legalentitytype.naturalPerson", true)
        )
    ),
    'attr_identform' => array(
        'label' => Language::_("Resellercampid.contact.identform", true),
        'type' => "select",
        'options' => array(
            'certificate' => Language::_("Resellercampid.contact.identform.certificate", true),
            'legislation' => Language::_("Resellercampid.contact.identform.legislation", true),
            'societyRegistry' => Language::_("Resellercampid.contact.identform.societyRegistry", true),
            'politicalPartyRegistry' => Language::_("Resellercampid.contact.identform.politicalPartyRegistry", true),
            'passport' => Language::_("Resellercampid.contact.identform.passport", true)
        )
    ),
    'attr_identnumber' => array(
        'label' => Language::_("Resellercampid.contact.identnumber", true),
        'type' => "text"
    )
));

// .CA
Configure::set("Resellercampid.contact_fields.ca", array(
    'attr_CPR' => array(
        'label' => Language::_("Resellercampid.contact.CPR", true),
        'type' => "select",
        'options' => array(
            'CCO' => Language::_("Resellercampid.contact.CPR.cco", true),
            'CCT' => Language::_("Resellercampid.contact.CPR.cct", true),
            'RES' => Language::_("Resellercampid.contact.CPR.res", true),
            'GOV' => Language::_("Resellercampid.contact.CPR.gov", true),
            'EDU' => Language::_("Resellercampid.contact.CPR.edu", true),
            'ASS' => Language::_("Resellercampid.contact.CPR.ass", true),
            'HOP' => Language::_("Resellercampid.contact.CPR.hop", true),
            'PRT' => Language::_("Resellercampid.contact.CPR.prt", true),
            'TDM' => Language::_("Resellercampid.contact.CPR.tdm", true),
            'TRD' => Language::_("Resellercampid.contact.CPR.trd", true),
            'PLT' => Language::_("Resellercampid.contact.CPR.plt", true),
            'LAM' => Language::_("Resellercampid.contact.CPR.lam", true),
            'TRS' => Language::_("Resellercampid.contact.CPR.trs", true),
            'ABO' => Language::_("Resellercampid.contact.CPR.abo", true),
            'INB' => Language::_("Resellercampid.contact.CPR.inb", true),
            'LGR' => Language::_("Resellercampid.contact.CPR.lgr", true),
            'OMK' => Language::_("Resellercampid.contact.CPR.omk", true),
            'MAJ' => Language::_("Resellercampid.contact.CPR.maj", true)
        )
    ),
    'attr_AgreementVersion' => array(
        'type' => "hidden",
        'options' => "2.0"
    ),
    'attr_AgreementValue' => array(
        'type' => "hidden",
        'options' => "y"
    )
));

// .COOP
Configure::set("Resellercampid.contact_fields.coop", array(
    'attr_sponsor' => array(
        'label' => Language::_("Resellercampid.contact.sponsor", true),
        'type' => "text"
    )
));

// .ES
Configure::set("Resellercampid.contact_fields.es", array(
    'attr_es_form_juridica' => array(
        'type' => "hidden",
        'options' => "1"
    /*
      'label' => Language::_("Resellercampid.contact.es_form_juridica", true),
      'type' => "select",
      'options' => array(
      '1' => Language::_("Resellercampid.contact.es_form_juridica.1", true),
      '39' => Language::_("Resellercampid.contact.es_form_juridica.39", true),
      '47' => Language::_("Resellercampid.contact.es_form_juridica.47", true),
      '59' => Language::_("Resellercampid.contact.es_form_juridica.59", true),
      '68' => Language::_("Resellercampid.contact.es_form_juridica.68", true),
      '124' => Language::_("Resellercampid.contact.es_form_juridica.124", true),
      '150' => Language::_("Resellercampid.contact.es_form_juridica.150", true),
      '152' => Language::_("Resellercampid.contact.es_form_juridica.152", true),
      '164' => Language::_("Resellercampid.contact.es_form_juridica.164", true),
      '181' => Language::_("Resellercampid.contact.es_form_juridica.181", true),
      '197' => Language::_("Resellercampid.contact.es_form_juridica.197", true),
      '203' => Language::_("Resellercampid.contact.es_form_juridica.203", true),
      '229' => Language::_("Resellercampid.contact.es_form_juridica.229", true),
      '269' => Language::_("Resellercampid.contact.es_form_juridica.269", true),
      '286' => Language::_("Resellercampid.contact.es_form_juridica.286", true),
      '365' => Language::_("Resellercampid.contact.es_form_juridica.365", true),
      '434' => Language::_("Resellercampid.contact.es_form_juridica.434", true),
      '436' => Language::_("Resellercampid.contact.es_form_juridica.436", true),
      '439' => Language::_("Resellercampid.contact.es_form_juridica.439", true),
      '476' => Language::_("Resellercampid.contact.es_form_juridica.476", true),
      '510' => Language::_("Resellercampid.contact.es_form_juridica.510", true),
      '524' => Language::_("Resellercampid.contact.es_form_juridica.524", true),
      '525' => Language::_("Resellercampid.contact.es_form_juridica.525", true),
      '554' => Language::_("Resellercampid.contact.es_form_juridica.554", true),
      '560' => Language::_("Resellercampid.contact.es_form_juridica.560", true),
      '562' => Language::_("Resellercampid.contact.es_form_juridica.562", true),
      '566' => Language::_("Resellercampid.contact.es_form_juridica.566", true),
      '608' => Language::_("Resellercampid.contact.es_form_juridica.608", true),
      '612' => Language::_("Resellercampid.contact.es_form_juridica.612", true),
      '713' => Language::_("Resellercampid.contact.es_form_juridica.713", true),
      '717' => Language::_("Resellercampid.contact.es_form_juridica.717", true),
      '744' => Language::_("Resellercampid.contact.es_form_juridica.744", true),
      '745' => Language::_("Resellercampid.contact.es_form_juridica.745", true),
      '746' => Language::_("Resellercampid.contact.es_form_juridica.746", true),
      '747' => Language::_("Resellercampid.contact.es_form_juridica.747", true),
      '877' => Language::_("Resellercampid.contact.es_form_juridica.877", true),
      '878' => Language::_("Resellercampid.contact.es_form_juridica.878", true),
      '879' => Language::_("Resellercampid.contact.es_form_juridica.879", true)
      )
     */
    ),
    'attr_es_tipo_identificacion' => array(
        'label' => Language::_("Resellercampid.contact.es_tipo_identificacion", true),
        'type' => "select",
        'options' => array(
            '1' => Language::_("Resellercampid.contact.es_tipo_identificacion.1", true),
            '3' => Language::_("Resellercampid.contact.es_tipo_identificacion.3", true),
            '0' => Language::_("Resellercampid.contact.es_tipo_identificacion.0", true)
        )
    ),
    'attr_es_identificacion' => array(
        'label' => Language::_("Resellercampid.contact.es_identificacion", true),
        'type' => "text"
    )
));

// .NL
Configure::set("Resellercampid.contact_fields.nl", array(
    'attr_legalForm' => array(
        'label' => Language::_("Resellercampid.contact.legalForm", true),
        'type' => "select",
        'options' => array(
            'PERSOON' => Language::_("Resellercampid.contact.legalForm.persoon", true),
            'ANDERS' => Language::_("Resellercampid.contact.legalForm.anders", true)
        )
    )
));

// .PRO
Configure::set("Resellercampid.contact_fields.pro", array(
    'attr_profession' => array(
        'label' => Language::_("Resellercampid.contact.profession", true),
        'type' => "text"
    )
));

// .RU
Configure::set("Resellercampid.contact_fields.ru", array(
    'attr_contract-type' => array(
        'label' => Language::_("Resellercampid.contact.contract-type", true),
        'type' => "select",
        'options' => array(
            'ORG' => Language::_("Resellercampid.contact.contract-type.org", true),
            'PRS' => Language::_("Resellercampid.contact.contract-type.prs", true)
        )
    ),
    'attr_birth-date' => array(
        'label' => Language::_("Resellercampid.contact.birth-date", true),
        'type' => "text"
    ),
    /*
      'attr_org-r' => array(
      'label' => Language::_("Resellercampid.contact.org-r", true),
      'type' => "text"
      ),
      'attr_person-r' => array(
      'label' => Language::_("Resellercampid.contact.person-r", true),
      'type' => "text"
      ),
      'attr_address-r' => array(
      'label' => Language::_("Resellercampid.contact.address-r", true),
      'type' => "text"
      ),
     */
    'attr_kpp' => array(
        'label' => Language::_("Resellercampid.contact.kpp", true),
        'type' => "text"
    ),
    'attr_code' => array(
        'label' => Language::_("Resellercampid.contact.code", true),
        'type' => "text"
    ),
    'attr_passport' => array(
        'label' => Language::_("Resellercampid.contact.passport", true),
        'type' => "text"
    ),
));

// .US
Configure::set("Resellercampid.contact_fields.us", array(
    'extra' => array(
        'type' => "hidden",
        'options' => null
    ),
    'eligibility_criteria' => array(
        'type' => "hidden",
        'options' => null
    ),
    'attr_category' => array(
        'label' => Language::_("Resellercampid.contact.category", true),
        'type' => "select",
        'options' => array(
            'citizen' => Language::_("Resellercampid.contact.category.c11", true),
            'permanent_resident' => Language::_("Resellercampid.contact.category.c12", true),
            'us_organization' => Language::_("Resellercampid.contact.category.c21", true),
            'foreign_organization' => Language::_("Resellercampid.contact.category.c31", true),
            'has_us_office' => Language::_("Resellercampid.contact.category.c32", true)
        )
    ),
    'attr_purpose' => array(
        'label' => Language::_("Resellercampid.contact.purpose", true),
        'type' => "select",
        'options' => array(
            'business' => Language::_("Resellercampid.contact.purpose.p1", true),
            'non_profit' => Language::_("Resellercampid.contact.purpose.p2", true),
            'personal' => Language::_("Resellercampid.contact.purpose.p3", true),
            'education' => Language::_("Resellercampid.contact.purpose.p4", true),
            'goverment' => Language::_("Resellercampid.contact.purpose.p5", true)
        )
    )
));


// .AU
Configure::set("Resellercampid.domain_fields.au", array(
    'attr_id-type' => array(
        'label' => Language::_("Resellercampid.domain.id-type", true),
        'type' => "select",
        'options' => array(
            'ACN' => Language::_("Resellercampid.domain.id-type.acn", true),
            'ABN' => Language::_("Resellercampid.domain.id-type.abn", true),
            'VIC BN' => Language::_("Resellercampid.domain.id-type.vic_bn", true),
            'NSW BN' => Language::_("Resellercampid.domain.id-type.nsw_bn", true),
            'SA BN' => Language::_("Resellercampid.domain.id-type.sa_bn", true),
            'NT BN' => Language::_("Resellercampid.domain.id-type.nt_bn", true),
            'WA BN' => Language::_("Resellercampid.domain.id-type.wa_bn", true),
            'TAS BN' => Language::_("Resellercampid.domain.id-type.tas_bn", true),
            'ACT BN' => Language::_("Resellercampid.domain.id-type.act_bn", true),
            'QLD BN' => Language::_("Resellercampid.domain.id-type.qld_bn", true),
            'TM' => Language::_("Resellercampid.domain.id-type.tm", true),
            'ARBN' => Language::_("Resellercampid.domain.id-type.arbn", true),
            'Other' => Language::_("Resellercampid.domain.id-type.other", true)
        )
    ),
    'attr_id' => array(
        'label' => Language::_("Resellercampid.domain.id", true),
        'type' => "text"
    ),
    'attr_policyReason' => array(
        'label' => Language::_("Resellercampid.domain.policyReason", true),
        'type' => "radio",
        'value' => "1",
        'options' => array(
            '1' => Language::_("Resellercampid.domain.policyReason.1", true),
            '2' => Language::_("Resellercampid.domain.policyReason.2", true),
        )
    ),
    'attr_isAUWarranty' => array(
        'label' => Language::_("Resellercampid.domain.isAUWarranty", true),
        'type' => "checkbox",
        'options' => array(
            'true' => Language::_("Resellercampid.domain.isAUWarranty.true", true)
        )
    ),
    'attr_eligibilityType' => array(
        'type' => "hidden",
        'options' => "Trademark Owner"
    ),
    'attr_eligibilityName' => array(
        'type' => "hidden"
    )
));
