<?php
// All available TLDs (http://www.Liquid.com/product_pricing#domain-resellers)
Configure::set("Liquid.tlds", array(
	".com",
	".net",
	".org",
	".info",
	".biz",
	".name",
	".asia",
//	".tel",
//	".mobi",
//	".ws",
//	".de",
//	".es",
//	".ru",
//	".cn",
//	".xxx",
//	".pro",
//	".ca",
//	".eu",
	".us",
//	".pw",
//	".nl",
//	".me",
//	".sx",
	".tv",
//	".cc",
	".in",
	".co",
//	".mn",
//	".bz",
//	".coop",
));

// Transfer fields
Configure::set("Liquid.transfer_fields", array(
	'domain-name' => array(
		'label' => Language::_("Liquid.transfer.domain-name", true),
		'type' => "text"
	),
	'auth-code' => array(
		'label' => Language::_("Liquid.transfer.auth-code", true),
		'type' => "text"
	)
));

// Domain fields
Configure::set("Liquid.domain_fields", array(
	'domain-name' => array(
		'label' => Language::_("Liquid.domain.domain-name", true),
		'type' => "text"
	)
));

// Nameserver fields
Configure::set("Liquid.nameserver_fields", array(
	'ns1' => array(
		'label' => Language::_("Liquid.nameserver.ns1", true),
		'type' => "text"
	),
	'ns2' => array(
		'label' => Language::_("Liquid.nameserver.ns2", true),
		'type' => "text"
	),
	'ns3' => array(
		'label' => Language::_("Liquid.nameserver.ns3", true),
		'type' => "text"
	),
	'ns4' => array(
		'label' => Language::_("Liquid.nameserver.ns4", true),
		'type' => "text"
	),
	'ns5' => array(
		'label' => Language::_("Liquid.nameserver.ns5", true),
		'type' => "text"
	)
));

// Contact fields
Configure::set("Liquid.contact_fields", array(
	'customer_id' => array(
		'label' => Language::_("Liquid.contact.customer-id", true),
		'type' => "text"
	),
	'type' => array(
		'label' => Language::_("Liquid.contact.type", true),
		'type' => "text"
	),
	'name' => array(
		'label' => Language::_("Liquid.contact.name", true),
		'type' => "text"
	),
	'company' => array(
		'label' => Language::_("Liquid.contact.company", true),
		'type' => "text"
	),
	'email' => array(
		'label' => Language::_("Liquid.contact.email", true),
		'type' => "text"
	),
	'address_line_1' => array(
		'label' => Language::_("Liquid.contact.address-line-1", true),
		'type' => "text"
	),
	'address_line_2' => array(
		'label' => Language::_("Liquid.contact.address-line-2", true),
		'type' => "text"
	),
	'city' => array(
		'label' => Language::_("Liquid.contact.city", true),
		'type' => "text"
	),
	'state' => array(
		'label' => Language::_("Liquid.contact.state", true),
		'type' => "text"
	),
	'zipcode' => array(
		'label' => Language::_("Liquid.contact.zipcode", true),
		'type' => "text"
	),
	'country_code' => array(
		'label' => Language::_("Liquid.contact.country", true),
		'type' => "text"
	),
	'tel_cc_no' => array(
		'label' => Language::_("Liquid.contact.phone-cc", true),
		'type' => "text"
	),
	'tel_no' => array(
		'label' => Language::_("Liquid.contact.phone", true),
		'type' => "text"
	),
	'fax_cc_no' => array(
		'label' => Language::_("Liquid.contact.fax-cc", true),
		'type' => "text"
	),
	'fax_no' => array(
		'label' => Language::_("Liquid.contact.fax", true),
		'type' => "text"
	)
));

// Customer info
Configure::set("Liquid.customer_fields", array(
	'username' => array(
		'label' => Language::_("Liquid.customer.username", true),
		'type' => "text"
	),
	'password' => array(
		'label' => Language::_("Liquid.customer.passwd", true),
		'type' => "text"
	),
	'lang-pref' => array(
		'label' => Language::_("Liquid.customer.lang-pref", true),
		'type' => "text"
	)
));


// .ASIA
Configure::set("Liquid.contact_fields.asia", array(
	'attr_locality' => array(
		'type' => "hidden",
		'options' => null
	),
	'attr_legalentitytype' => array(
		'label' => Language::_("Liquid.contact.legalentitytype", true),
		'type' => "select",
		'options' => array(
			'corporation' => Language::_("Liquid.contact.legalentitytype.corporation", true),
			'cooperative' => Language::_("Liquid.contact.legalentitytype.cooperative", true),
			'partnership' => Language::_("Liquid.contact.legalentitytype.partnership", true),
			'government' => Language::_("Liquid.contact.legalentitytype.government", true),
			'politicalParty' => Language::_("Liquid.contact.legalentitytype.politicalParty", true),
			'society' => Language::_("Liquid.contact.legalentitytype.society", true),
			'institution' => Language::_("Liquid.contact.legalentitytype.institution", true),
			'naturalPerson' => Language::_("Liquid.contact.legalentitytype.naturalPerson", true)
		)
	),
	'attr_identform' => array(
		'label' => Language::_("Liquid.contact.identform", true),
		'type' => "select",
		'options' => array(
			'certificate' => Language::_("Liquid.contact.identform.certificate", true),
			'legislation' => Language::_("Liquid.contact.identform.legislation", true),
			'societyRegistry' => Language::_("Liquid.contact.identform.societyRegistry", true),
			'politicalPartyRegistry' => Language::_("Liquid.contact.identform.politicalPartyRegistry", true),
			'passport' => Language::_("Liquid.contact.identform.passport", true)
		)
	),
	'attr_identnumber' => array(
		'label' => Language::_("Liquid.contact.identnumber", true),
		'type' => "text"
	)
));

// .CA
Configure::set("Liquid.contact_fields.ca", array(
	'attr_CPR' => array(
		'label' => Language::_("Liquid.contact.CPR", true),
		'type' => "select",
		'options' => array(
			'CCO' => Language::_("Liquid.contact.CPR.cco", true),
			'CCT' => Language::_("Liquid.contact.CPR.cct", true),
			'RES' => Language::_("Liquid.contact.CPR.res", true),
			'GOV' => Language::_("Liquid.contact.CPR.gov", true),
			'EDU' => Language::_("Liquid.contact.CPR.edu", true),
			'ASS' => Language::_("Liquid.contact.CPR.ass", true),
			'HOP' => Language::_("Liquid.contact.CPR.hop", true),
			'PRT' => Language::_("Liquid.contact.CPR.prt", true),
			'TDM' => Language::_("Liquid.contact.CPR.tdm", true),
			'TRD' => Language::_("Liquid.contact.CPR.trd", true),
			'PLT' => Language::_("Liquid.contact.CPR.plt", true),
			'LAM' => Language::_("Liquid.contact.CPR.lam", true),
			'TRS' => Language::_("Liquid.contact.CPR.trs", true),
			'ABO' => Language::_("Liquid.contact.CPR.abo", true),
			'INB' => Language::_("Liquid.contact.CPR.inb", true),
			'LGR' => Language::_("Liquid.contact.CPR.lgr", true),
			'OMK' => Language::_("Liquid.contact.CPR.omk", true),
			'MAJ' => Language::_("Liquid.contact.CPR.maj", true)
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
Configure::set("Liquid.contact_fields.coop", array(
	'attr_sponsor' => array(
		'label' => Language::_("Liquid.contact.sponsor", true),
		'type' => "text"
	)
));

// .ES
Configure::set("Liquid.contact_fields.es", array(
	'attr_es_form_juridica' => array(
		'type' => "hidden",
		'options' => "1"
		/*
		'label' => Language::_("Liquid.contact.es_form_juridica", true),
		'type' => "select",
		'options' => array(
			'1' => Language::_("Liquid.contact.es_form_juridica.1", true),
			'39' => Language::_("Liquid.contact.es_form_juridica.39", true),
			'47' => Language::_("Liquid.contact.es_form_juridica.47", true),
			'59' => Language::_("Liquid.contact.es_form_juridica.59", true),
			'68' => Language::_("Liquid.contact.es_form_juridica.68", true),
			'124' => Language::_("Liquid.contact.es_form_juridica.124", true),
			'150' => Language::_("Liquid.contact.es_form_juridica.150", true),
			'152' => Language::_("Liquid.contact.es_form_juridica.152", true),
			'164' => Language::_("Liquid.contact.es_form_juridica.164", true),
			'181' => Language::_("Liquid.contact.es_form_juridica.181", true),
			'197' => Language::_("Liquid.contact.es_form_juridica.197", true),
			'203' => Language::_("Liquid.contact.es_form_juridica.203", true),
			'229' => Language::_("Liquid.contact.es_form_juridica.229", true),
			'269' => Language::_("Liquid.contact.es_form_juridica.269", true),
			'286' => Language::_("Liquid.contact.es_form_juridica.286", true),
			'365' => Language::_("Liquid.contact.es_form_juridica.365", true),
			'434' => Language::_("Liquid.contact.es_form_juridica.434", true),
			'436' => Language::_("Liquid.contact.es_form_juridica.436", true),
			'439' => Language::_("Liquid.contact.es_form_juridica.439", true),
			'476' => Language::_("Liquid.contact.es_form_juridica.476", true),
			'510' => Language::_("Liquid.contact.es_form_juridica.510", true),
			'524' => Language::_("Liquid.contact.es_form_juridica.524", true),
			'525' => Language::_("Liquid.contact.es_form_juridica.525", true),
			'554' => Language::_("Liquid.contact.es_form_juridica.554", true),
			'560' => Language::_("Liquid.contact.es_form_juridica.560", true),
			'562' => Language::_("Liquid.contact.es_form_juridica.562", true),
			'566' => Language::_("Liquid.contact.es_form_juridica.566", true),
			'608' => Language::_("Liquid.contact.es_form_juridica.608", true),
			'612' => Language::_("Liquid.contact.es_form_juridica.612", true),
			'713' => Language::_("Liquid.contact.es_form_juridica.713", true),
			'717' => Language::_("Liquid.contact.es_form_juridica.717", true),
			'744' => Language::_("Liquid.contact.es_form_juridica.744", true),
			'745' => Language::_("Liquid.contact.es_form_juridica.745", true),
			'746' => Language::_("Liquid.contact.es_form_juridica.746", true),
			'747' => Language::_("Liquid.contact.es_form_juridica.747", true),
			'877' => Language::_("Liquid.contact.es_form_juridica.877", true),
			'878' => Language::_("Liquid.contact.es_form_juridica.878", true),
			'879' => Language::_("Liquid.contact.es_form_juridica.879", true)
		)
		*/
	),
	'attr_es_tipo_identificacion' => array(
		'label' => Language::_("Liquid.contact.es_tipo_identificacion", true),
		'type' => "select",
		'options' => array(
			'1' => Language::_("Liquid.contact.es_tipo_identificacion.1", true),
			'3' => Language::_("Liquid.contact.es_tipo_identificacion.3", true),
			'0' => Language::_("Liquid.contact.es_tipo_identificacion.0", true)
		)
	),
	'attr_es_identificacion' => array(
		'label' => Language::_("Liquid.contact.es_identificacion", true),
		'type' => "text"
	)
));

// .NL
Configure::set("Liquid.contact_fields.nl", array(
	'attr_legalForm' => array(
		'label' => Language::_("Liquid.contact.legalForm", true),
		'type' => "select",
		'options' => array(
			'PERSOON' => Language::_("Liquid.contact.legalForm.persoon", true),
			'ANDERS' => Language::_("Liquid.contact.legalForm.anders", true)
		)
	)
));

// .PRO
Configure::set("Liquid.contact_fields.pro", array(
	'attr_profession' => array(
		'label' => Language::_("Liquid.contact.profession", true),
		'type' => "text"
	)
));

// .RU
Configure::set("Liquid.contact_fields.ru", array(
	'attr_contract-type' => array(
		'label' => Language::_("Liquid.contact.contract-type", true),
		'type' => "select",
		'options' => array(
			'ORG' => Language::_("Liquid.contact.contract-type.org", true),
			'PRS' => Language::_("Liquid.contact.contract-type.prs", true)
		)
	),
	'attr_birth-date' => array(
		'label' => Language::_("Liquid.contact.birth-date", true),
		'type' => "text"
	),
	/*
	'attr_org-r' => array(
		'label' => Language::_("Liquid.contact.org-r", true),
		'type' => "text"
	),
	'attr_person-r' => array(
		'label' => Language::_("Liquid.contact.person-r", true),
		'type' => "text"
	),
	'attr_address-r' => array(
		'label' => Language::_("Liquid.contact.address-r", true),
		'type' => "text"
	),
	*/
	'attr_kpp' => array(
		'label' => Language::_("Liquid.contact.kpp", true),
		'type' => "text"
	),
	'attr_code' => array(
		'label' => Language::_("Liquid.contact.code", true),
		'type' => "text"
	),
	'attr_passport' => array(
		'label' => Language::_("Liquid.contact.passport", true),
		'type' => "text"
	),
));

// .US
Configure::set("Liquid.contact_fields.us", array(
	'attr_category' => array(
		'label' => Language::_("Liquid.contact.category", true),
		'type' => "select",
		'options' => array(
			'C11' => Language::_("Liquid.contact.category.c11", true),
			'C12' => Language::_("Liquid.contact.category.c12", true),
			'C21' => Language::_("Liquid.contact.category.c21", true),
			'C31' => Language::_("Liquid.contact.category.c31", true),
			'C32' => Language::_("Liquid.contact.category.c32", true)
		)
	),
	'attr_purpose' => array(
		'label' => Language::_("Liquid.contact.purpose", true),
		'type' => "select",
		'options' => array(
			'P1' => Language::_("Liquid.contact.purpose.p1", true),
			'P2' => Language::_("Liquid.contact.purpose.p2", true),
			'P3' => Language::_("Liquid.contact.purpose.p3", true),
			'P4' => Language::_("Liquid.contact.purpose.p4", true),
			'P5' => Language::_("Liquid.contact.purpose.p5", true)
		)
	)
));


// .AU
Configure::set("Liquid.domain_fields.au", array(
	'attr_id-type' => array(
		'label' => Language::_("Liquid.domain.id-type", true),
		'type' => "select",
		'options' => array(
			'ACN' => Language::_("Liquid.domain.id-type.acn", true),
			'ABN' => Language::_("Liquid.domain.id-type.abn", true),
			'VIC BN' => Language::_("Liquid.domain.id-type.vic_bn", true),
			'NSW BN' => Language::_("Liquid.domain.id-type.nsw_bn", true),
			'SA BN' => Language::_("Liquid.domain.id-type.sa_bn", true),
			'NT BN' => Language::_("Liquid.domain.id-type.nt_bn", true),
			'WA BN' => Language::_("Liquid.domain.id-type.wa_bn", true),
			'TAS BN' => Language::_("Liquid.domain.id-type.tas_bn", true),
			'ACT BN' => Language::_("Liquid.domain.id-type.act_bn", true),
			'QLD BN' => Language::_("Liquid.domain.id-type.qld_bn", true),
			'TM' => Language::_("Liquid.domain.id-type.tm", true),
			'ARBN' => Language::_("Liquid.domain.id-type.arbn", true),
			'Other' => Language::_("Liquid.domain.id-type.other", true)
		)
	),
	'attr_id' => array(
		'label' => Language::_("Liquid.domain.id", true),
		'type' => "text"
	),
	'attr_policyReason' => array(
		'label' => Language::_("Liquid.domain.policyReason", true),
		'type' => "radio",
		'value' => "1",
		'options' => array(
			'1' => Language::_("Liquid.domain.policyReason.1", true),
			'2' => Language::_("Liquid.domain.policyReason.2", true),
		)
	),
	'attr_isAUWarranty' => array(
		'label' => Language::_("Liquid.domain.isAUWarranty", true),
		'type' => "checkbox",
		'options' => array(
			'true' => Language::_("Liquid.domain.isAUWarranty.true", true)
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
?>